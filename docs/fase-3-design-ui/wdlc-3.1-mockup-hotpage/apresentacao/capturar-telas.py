"""Captura a hotpage em página inteira (desktop 1440px e mobile 390px) para a apresentação.

Usa o Chrome instalado em modo headless sobre o protótipo, escondendo a barra de revisão.
Uso (na raiz do projeto):
    python docs/fase-3-design-ui/wdlc-3.1-mockup-hotpage/apresentacao/capturar-telas.py
"""
import subprocess
import sys
import tempfile
from pathlib import Path

from PIL import Image

HERE = Path(__file__).parent
SRC = HERE.parent / 'prototipo.html'
OUT = HERE / 'telas'
CHROME = r'C:\Program Files\Google\Chrome\Application\chrome.exe'
KEY = (255, 0, 255)  # cor do palco, usada para recortar o fim da página

# escala alta para ficar nítido em telas de alta densidade
VP = {'desktop': (1440, 2, 7500), 'mobile': (390, 3, 7000)}  # largura, escala, altura máxima do viewport (px CSS)
FOLD = {'desktop': 900, 'mobile': 844}  # altura da primeira dobra (px CSS)

STYLE = ('<style>.review,.notes{display:none!important}html,body,.stage{background:#ff00ff!important;margin:0!important}'
         '.stage{padding:0!important;display:block!important}'
         '.frame{box-shadow:none!important;border:0!important;border-radius:0!important;margin:0!important}</style>')


def capture(html, vp, hide_cookie=True, height=None, extra=''):
    width, scale, full = VP[vp]
    height = height or full
    js = (f'window.fit=function(){{frame.style.zoom=""}};setVP("{vp}");frame.style.setProperty("--hdr-top","0px");'
          + ('document.getElementById("cookie").hidden=true;' if hide_cookie else '') + extra)
    marker = '<!-- ======= Barra de revisão ======= -->'  # o CSS vem de design-system/ por <link>; o estilo da captura entra depois
    page = html.replace(marker, STYLE + marker, 1).replace('</script>', f'{js}</script>', 1)
    with tempfile.TemporaryDirectory() as tmp:
        f = SRC.parent / f'.captura-{vp}.html'  # ao lado do protótipo, para os caminhos assets/ funcionarem
        png = Path(tmp) / 's.png'
        f.write_text(page, encoding='utf-8')
        try:
            subprocess.run([CHROME, '--headless=new', '--disable-gpu', '--hide-scrollbars', f'--user-data-dir={tmp}',
                            f'--force-device-scale-factor={scale}', f'--window-size={width + 40},{height}',
                            '--virtual-time-budget=5000', f'--screenshot={png}', f.as_uri()],
                           check=True, capture_output=True, timeout=120)
        finally:
            f.unlink(missing_ok=True)
        im = Image.open(png).convert('RGB')
    px = im.load()
    y = im.height - 1
    while y > 0 and px[im.width // 2, y] == KEY:
        y -= 1
    return im.crop((0, 0, min(im.width, width * scale), y + 1))


def save(im, name):
    path = OUT / f'{name}.jpg'
    im.save(path, quality=90, subsampling=0, optimize=True, progressive=True)
    print(f'{path.name:28} {im.width}x{im.height}  {path.stat().st_size // 1024} KB')


OUT.mkdir(exist_ok=True)
html = SRC.read_text(encoding='utf-8')
for vp in sys.argv[1:] or list(VP):
    save(capture(html, vp), f'hotpage-{vp}')
    # primeira dobra com o aviso de cookies, como o visitante vê ao chegar pelo anúncio
    save(capture(html, vp, hide_cookie=False, height=FOLD[vp]), f'chegada-{vp}')
# celular: a seção de documentos com a aba "Caminhos possíveis" selecionada (a página inteira mostra a primeira aba)
if 'mobile' in (sys.argv[1:] or list(VP)):
    so = ('const st=document.createElement("style");st.textContent=".hdr,.ftr,main>section:not(#documentos){display:none!important}";'
          'document.head.append(st);document.getElementById("tab-paths").click();')
    save(capture(html, 'mobile', extra=so), 'caminhos-mobile')
