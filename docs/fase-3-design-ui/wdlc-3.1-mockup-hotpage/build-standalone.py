"""Gera uma cópia autônoma do protótipo: um único .html com o CSS e as fotos embutidos.

Abre com dois cliques no navegador, sem servidor, sem a pasta assets/ e sem design-system/.
Uso (na raiz do projeto):  python docs/fase-3-design-ui/wdlc-3.1-mockup-hotpage/build-standalone.py
"""
import base64
import re
from pathlib import Path

HERE = Path(__file__).parent
SRC = HERE / 'prototipo.html'
OUT = HERE.parents[2] / 'prototipo-hotpage-atraso-entrega.html'
MIME = {'.webp': 'image/webp', '.jpg': 'image/jpeg', '.jpeg': 'image/jpeg', '.png': 'image/png', '.svg': 'image/svg+xml'}


def data_uri(rel):
    path = HERE / rel
    return f'data:{MIME[path.suffix.lower()]};base64,' + base64.b64encode(path.read_bytes()).decode()


html = SRC.read_text(encoding='utf-8')
html = re.sub(r'<link rel="stylesheet" href="(\.\./[^"]+\.css)">',
              lambda m: '<style>\n' + (HERE / m.group(1)).read_text(encoding='utf-8') + '</style>', html)
html = re.sub(r'src="(assets/[^"]+)"', lambda m: f'src="{data_uri(m.group(1))}"', html)
assert 'assets/' not in re.sub(r'<!--.*?-->', '', html, flags=re.S), 'ainda há referência a assets/'
assert 'design-system/' not in re.sub(r'<!--.*?-->|/\*.*?\*/', '', html, flags=re.S), 'ainda há referência a design-system/'

# Documento completo: o que vem antes da barra de revisão vai para o <head>
marker = '<!-- ======= Barra de revisão ======= -->'
head, body = html.split(marker, 1)
head = head.replace('<meta charset="utf-8">', '').strip()
doc = (
    '<!doctype html>\n<html lang="pt-BR">\n<head>\n<meta charset="utf-8">\n'
    '<meta name="viewport" content="width=device-width, initial-scale=1">\n'
    f'{head}\n</head>\n<body>\n{marker}{body}\n</body>\n</html>\n'
)
OUT.write_text(doc, encoding='utf-8')
print(f'{OUT} ({OUT.stat().st_size // 1024} KB)')
