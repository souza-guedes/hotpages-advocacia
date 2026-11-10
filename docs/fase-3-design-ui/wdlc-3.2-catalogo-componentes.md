# WDLC 3.2 — Catálogo de componentes UI das hotpages

> **Status:** Aguardando homologação dos sócios
> **Fase:** 3 — Design visual persuasivo com foco em credibilidade e mobile-first
> **Sub-issue:** [#9](https://github.com/souza-guedes/hotpages-advocacia/issues/9)
> **Épico Relacionado:** [#7](https://github.com/souza-guedes/hotpages-advocacia/issues/7)
> **Dependências:** mockup aprovado da [WDLC 3.1](wdlc-3.1-mockup-hotpage.md) e o design system do [site institucional](https://github.com/souza-guedes/site-institucional/blob/main/docs/fase-3-design-system/wdlc-3.3-catalogo-componentes.md)
> **Catálogo navegável:** [`wdlc-3.2-componentes/catalogo.html`](wdlc-3.2-componentes/catalogo.html)
> **CSS dos componentes:** [`design-system/componentes.css`](../../design-system/componentes.css)

---

## 1. Entregável

Um catálogo navegável em HTML com os 9 componentes das hotpages, no mesmo formato do catálogo do site institucional (WDLC 3.3 de lá). A barra de revisão no topo permite:

- escolher o componente;
- alternar a largura do quadro entre **360**, **390**, **768** e **1440px**;
- ver o partial alvo da Fase 5 e a nota de conformidade de cada componente.

Cada página traz o componente em todas as variantes e estados, as classes, os dados que ele usa, o partial da Fase 5 e uma lista de "Fazer" e "Não fazer".

**Para abrir:**

- **Versão autônoma:** [`catalogo-componentes-hotpages.html`](../../catalogo-componentes-hotpages.html), na raiz do repositório. Abre com dois cliques e mostra tudo. É gerada por `wdlc-3.2-componentes/build-standalone.py`.
- **Pela pasta:** na raiz do repositório, rode `python -m http.server` e acesse `/docs/fase-3-design-ui/wdlc-3.2-componentes/catalogo.html`.
- **Direto pelo arquivo** (`file://`): o navegador bloqueia a leitura do CSS, e os estados de hover e foco **parados** não aparecem. A barra de notas avisa quando isso acontece.

**Links diretos:** `catalogo.html?vp=m360#canais` abre um componente numa largura (`m360`, `mobile`, `tablet` ou `desktop`).

**Estados parados:** como no catálogo do site, cada regra `:hover` e `:focus-visible` do `componentes.css` é copiada, ao carregar, para as classes `.is-hover` e `.is-focus`. O estado mostrado é sempre o que o CSS real define.

> O catálogo é artefato de design. **Não** é a implementação da Fase 5: nenhum arquivo de `src/`, `config/` ou `public/` foi alterado nesta issue.

## 2. Componentes

| # | Componente | Variantes | Estados | Partial alvo (Fase 5) |
| --- | --- | --- | --- | --- |
| 1 | Botões e links | primary, ghost (com ícone do WhatsApp), light, ghost escuro, link com seta | default, hover, focus | classes utilitárias |
| 2 | Card de situação | card isolado; grade 2 × 2 (desktop) e carrossel com pontos (celular) | default (não clicável) | `partials/situacoes.php` |
| 3 | Quem atende | retrato pequeno (até 1099px) e com moldura dupla (desktop); faixa "Ficou com alguma dúvida?" | botões: ver 1 | `partials/quem-atende.php` |
| 4 | Documentos e caminhos | lado a lado (desktop); abas (até 1099px) | aba selecionada, aba com foco | `partials/documentos.php` |
| 5 | Accordion de FAQ | item; bloco editorial com ajuda e aviso | fechado, hover, foco de teclado, aberto | `partials/faq.php` |
| 6 | Canais de atendimento | cartões em 3 colunas (a partir de 760px); uma linha por canal (celular); botão abaixo do contato (abaixo de 380px) | botões default, hover, focus; "Depois do primeiro contato" aberto/fechado | `partials/canais.php` |
| 7 | **Barra de canais no celular** (proposta) | pé da página com a barra; com o aviso de cookies aberto (barra oculta) | default, hover, focus | `partials/barra-canais.php`, só se aprovada |
| 8 | Rodapé | 4 colunas (desktop), 2 colunas (celular) | links hover, focus | `partials/rodape.php` |
| 9 | Banner de cookies | aprovado (Recusar/Aceitar); **com "Configurar" e painel de preferências (proposta)** | interruptor desligado, hover, focus, ligado, sempre ativo | `partials/cookies.php` |

Hoje os canais e o rodapé estão inline em `src/Views/layout.php`. Os nomes de partial são propostas para a #14.

### Checklist da issue

| Item da #9 | Onde está no catálogo |
| --- | --- |
| Accordion de FAQ: fechado, aberto, hover e foco de teclado | 5 · Accordion de FAQ |
| Bloco de canais de atendimento com horário, mobile e desktop | 6 · Canais de atendimento |
| Acesso ao contato no celular, sem pulso, tooltip ou abertura sozinha | 7 · Barra de canais no celular (proposta) |
| Card de situação | 2 · Card de situação |
| Bloco "Quem atende" com nome e OAB/SP | 3 · Quem atende |
| Rodapé com identificação e aviso do Provimento 205/2021 | 8 · Rodapé |
| Banner de cookies não bloqueante: aceitar, recusar e configurar | 9 · Banner de cookies |
| Estados default, hover, focus e aberto/fechado | 1, 4, 5, 6, 7, 8, 9 |
| Variantes mobile e desktop, de 360px a 1440px | Todas as páginas (360 / 390 / 768 / 1440) |

"Documentos e caminhos" não estava na lista da issue, mas é uma seção do mockup aprovado e vai virar partial na Fase 5, por isso entrou no catálogo.

## 3. Mudanças no design system

| Mudança | Arquivos |
| --- | --- |
| **CSS extraído do protótipo.** O `<style>` do protótipo da WDLC 3.1 foi para `design-system/componentes.css` (componentes) e `design-system/revisao.css` (barra de revisão e palco, fora da hotpage). O protótipo e o catálogo usam os mesmos arquivos, e a Fase 5 parte deles. As capturas do protótipo em 390px e 1440px, com e sem o aviso de cookies, ficaram idênticas, pixel a pixel, às de antes da extração. | `design-system/`, `wdlc-3.1-mockup-hotpage/prototipo.html` |
| **Scripts do protótipo.** `build-standalone.py` passa a embutir o CSS de `design-system/` na versão autônoma; `apresentacao/capturar-telas.py` injeta o estilo de captura antes da barra de revisão (não há mais `<style>` no protótipo). | `wdlc-3.1-mockup-hotpage/` |
| **Canais em 360px.** O mockup foi desenhado em 390px. Em 360px, a linha de cada canal não comportava contato e botão lado a lado, e o telefone e o e-mail quebravam no meio. Abaixo de 380px, o botão desce para baixo do contato e ocupa a largura do cartão. Em 390px e acima, nada muda. | `componentes.css` |
| **Propostas desta issue** (`.mbar`, `.cookie__link`, `.cookie__cfg`, `.copt`, `.switch`), numa seção própria do `componentes.css`, marcada como sujeita aos sócios. Não aparecem no protótipo. | `componentes.css` |
| **Larguras 360 e 768** na barra de revisão do catálogo. | `revisao.css` |

O interruptor do painel de cookies é quadrado, como o resto da marca: o site institucional não tem uso aprovado para cantos redondos (`radius-full`).

## 4. Propostas para os sócios

Duas peças pedidas na #9 não existem no mockup aprovado. Elas estão no catálogo com a etiqueta **Proposta**, e só entram na Fase 5 se os sócios aprovarem.

### 4.1 Barra de canais no celular

- Faixa fixa no pé da tela, só abaixo de 760px: WhatsApp, Ligar e E-mail lado a lado, com o mesmo peso.
- Fundo papel, fio e sombra leves, ícone e texto em petróleo. Sem verde do WhatsApp, pulso, balão, tooltip de "plantão" ou contador.
- Aparece já ao carregar, sem entrar com movimento, e não abre nenhum canal sozinha.
- Some enquanto o aviso de cookies estiver aberto, para não empilhar duas faixas.
- **A favor:** quem lê a página no celular chega aos canais sem rolar até o fim.
- **Contra:** o site institucional optou por não ter botão flutuante, e a hotpage já tem o atalho no cabeçalho, o botão no hero e o botão em "Quem atende". Uma faixa sempre visível aproxima a página de um apelo ao contato (Art. 3º, caput).

### 4.2 "Configurar" no aviso de cookies

- O aviso ganha um terceiro botão, "Configurar", em forma de link, ao lado de "Recusar" e "Aceitar" (no celular, numa linha própria, embaixo deles).
- O painel abre dentro do próprio aviso, sem modal, com três interruptores: **Necessários** (sempre ativo), **Medição do Google** e **Medição da Meta**, os dois desligados de início.
- "Recusar todos" e "Salvar escolhas" com o mesmo tamanho.
- Um link "Preferências de cookies" no rodapé reabre a escolha.
- A #21 (GTM e Pixel) liga cada tag só depois do consentimento da categoria correspondente.

## 5. Conformidade OAB e acessibilidade por componente

Cada página do catálogo traz a lista "Fazer / Não fazer" completa. Em resumo:

- **Sem formulário** em nenhum componente; o contato é só pelos canais oficiais (WDLC 1.2, seção 5, regra 1).
- **Canais com o mesmo peso**, abertos só pelo clique da pessoa, sem urgência, verde do WhatsApp ou animação (Art. 3º, IV e § 1º; Art. 4º, § 3º).
- **Identificação:** nome completo e OAB/SP dos dois sócios em "Quem atende" e no rodapé (Art. 1º, § 1º). Sem "especialista", anos de experiência, rankings ou símbolos da OAB (Art. 3º, III e IV; Art. 5º).
- **FAQ com `details`/`summary` nativos:** abre com Enter e Espaço, anuncia aberto/fechado no leitor de tela e funciona sem JavaScript. O JavaScript puro da Fase 5 só fecha as perguntas no celular ao carregar e, onde `details[name]` não existir, mantém uma aberta por vez.
- **Abas de documentos** no padrão WAI-ARIA: `role="tablist"`, `aria-selected`, `aria-controls` e setas ← → para trocar de aba (o catálogo já se comporta assim).
- **Interruptores** com `role="switch"`; o estado aparece na posição e no preenchimento, não só na cor, e o rótulo inteiro é clicável.
- **Contraste:** só combinações aprovadas na auditoria WCAG 2.1 AA do site institucional. O foco é o contorno petróleo no claro e turquesa no escuro.

## 6. Verificação

- Capturas de todos os componentes em 360, 390, 768 e 1440px, servidas por HTTP e pela versão autônoma, sem erros no console. A versão autônoma renderiza igual à servida, inclusive os estados parados.
- Capturas do protótipo da WDLC 3.1 (390 e 1440px, com e sem cookies) idênticas antes e depois da extração do CSS e do ajuste de 360px.

## 7. Pendências

| Item | Responsável | Observação |
| --- | --- | --- |
| Barra de canais no celular | Sócios | Aprovar ou descartar (seção 4.1). |
| "Configurar" no aviso de cookies | Sócios / #21 | Aprovar o painel (seção 4.2); a #21 liga as tags por categoria. |
| Chaves de dados novas em `config/pages.php` | Fase 5 (#14) | `situations[]`, `documents[]`, `paths[]` e `faq[]` com pergunta e resposta. |
| Respostas das perguntas | #11 | Feito: [WDLC 4.1](../fase-4-copy-conteudo/wdlc-4.1-copy-atraso-entrega-imovel.md). Wiring no HTML na Fase 5 (#14). |
