# WDLC 2.1 — Roteamento das hotpages em PHP

> **Status:** Implementado, aguardando revisão
> **Fase:** 2 — Funnel Planning & PHP Architecture
> **Sub-issue:** [#5](https://github.com/souza-guedes/hotpages-advocacia/issues/5)
> **Épico Relacionado:** [#4](https://github.com/souza-guedes/hotpages-advocacia/issues/4)
> **Base do projeto:** [WDLC 1.1 — nichos piloto](../fase-1-analise/wdlc-1.1-mapeamento-nichos-piloto.md) e [WDLC 1.2 — protocolo de anúncios](../fase-1-analise/wdlc-1.2-protocolo-anuncios-pagos.md)

---

## 1. Mudança em relação à issue

A #5 pedia as rotas `/tributario`, `/trabalhista` e `/previdenciario`. Como registrado na [WDLC 1.1, seção 1](../fase-1-analise/wdlc-1.1-mapeamento-nichos-piloto.md#1-mudança-em-relação-à-issue), nenhuma dessas áreas é área de atuação da banca, e a WDLC 1.2 as põe na lista de palavras-chave negativas. As rotas seguem os nichos piloto aprovados para mapeamento:

| Rota | Nicho | Tema na mensagem do WhatsApp |
| --- | --- | --- |
| `/imobiliario` | Direito Imobiliário | Direito Imobiliário |
| `/saude` | Direito de Saúde | Direito de Saúde |
| `/consumidor` | Direito do Consumidor | Direito do Consumidor |

`/tributario`, `/trabalhista` e `/previdenciario` respondem 404.

## 2. Estrutura

```
public/            docroot do Apache
  .htaccess        rotas explícitas dos slugs → index.php; o resto → index.php (404)
  index.php        front controller
config/
  pages.php        array slug => dados de cada hotpage
  firm.php         nome, sócios, canais oficiais
src/
  Router.php       path → página, redirecionamento ou 404
  Utm.php          captura e preservação dos UTM
  View.php         renderização dos templates
  Views/           layout.php (estrutura base), page.php (corpo do nicho), 404.php
tests/run.php      testes sem dependências
```

`layout.php` é a estrutura comum: título e descrição, identificação dos dois sócios com OAB/SP, canais oficiais, horário e aviso de caráter informativo. `page.php` injeta o conteúdo do nicho a partir de `config/pages.php`. Os textos de lá são provisórios, tirados da WDLC 1.1. A copy final e as respostas das perguntas frequentes vêm das #11 e #12. A pergunta sobre erro médico ficou fora de `/saude`, porque erro médico está fora do piloto (WDLC 1.1, seção 4).

## 3. Regras de rota

- Só os slugs em minúsculas de `config/pages.php` são páginas. Qualquer outro caminho, inclusive `/`, responde 404. As hotpages não têm página inicial.
- Barra final redireciona com 301 para a versão sem barra, mantendo a query inteira: `/saude/?utm_source=google` → `/saude?utm_source=google`. O redirecionamento só vale para slugs conhecidos, o que evita open redirect.
- A página 404 lista as três hotpages com os UTM da requisição nos links, para não perder a origem de quem chegou por um link de anúncio errado.
- As regras ficam no `Router` (PHP), não no `.htaccess`. Assim o comportamento é o mesmo no Apache e no servidor embutido do PHP. O `.htaccess` só lista as rotas e encaminha para o `index.php`.

## 4. Parâmetros UTM

| Item | Regra |
| --- | --- |
| Aceitos | `utm_source`, `utm_medium`, `utm_campaign` (os da issue) e `utm_term`, `utm_content` (usados pelo Google Ads) |
| Valor válido | Texto de até 100 caracteres, com letras, números, espaço e `. _ + - \|`. Valor inválido é descartado, nunca corrigido |
| Onde ficam | Só na requisição. Saem no `<body>` como `data-utm-source`, `data-utm-medium` etc., para o GTM da #21 ler depois do consentimento |
| Preservação | O Apache mantém a query no rewrite. O redirecionamento da barra final mantém a query. Links internos usam `Utm::append()` |
| O que não acontece | Nenhum cookie, sessão ou armazenamento local. Os UTM não entram na mensagem do WhatsApp |

**Por que sem cookie.** A WDLC 1.2 (seção 5, regra 7) só permite medição depois do consentimento. Gravar os UTM em cookie na chegada seria armazenamento antes do consentimento. Se a #21 precisar guardar a origem, isso é feito pela tag, depois do aceite.

**Referer.** A resposta envia `Referrer-Policy: strict-origin-when-cross-origin`. Ao clicar no WhatsApp, o `wa.me` recebe só o domínio, sem a URL com os UTM.

## 5. Como adicionar uma hotpage

1. Incluir a entrada em `config/pages.php` com `area`, `title`, `description`, `heading`, `intro`, `whatsapp_topic` e `faq`.
2. Incluir o slug na regra de `public/.htaccess`: `^(imobiliario|saude|consumidor|novo-slug)/?$`.
3. Ajustar o teste `slugs configurados` em `tests/run.php`.

A área precisa estar no `firm-profile.json` do site institucional antes (WDLC 1.1, seção 1).

## 6. Como rodar localmente

```bash
php tests/run.php
```

```bash
php -S localhost:8000 -t public public/index.php
```

Depois, abrir `http://localhost:8000/saude?utm_source=google&utm_medium=cpc`. Requer PHP 8.2+ com `mbstring`.

O servidor embutido não lê o `.htaccess`. A validação no Apache fica para o deploy da #20. Lá, conferir também que `/.htaccess` não é servido (o Apache bloqueia `.ht*` por padrão; o servidor embutido não).
