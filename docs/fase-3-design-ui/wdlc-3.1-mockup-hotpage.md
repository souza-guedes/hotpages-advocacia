# WDLC 3.1 — Mockup de Alta Fidelidade da HotPage de Atraso na Entrega do Imóvel

> **Status:** Aguardando homologação dos sócios
> **Fase:** 3 — Design visual persuasivo com foco em credibilidade e mobile-first
> **Sub-issue:** [#8](https://github.com/souza-guedes/hotpages-advocacia/issues/8)
> **Épico Relacionado:** [#7](https://github.com/souza-guedes/hotpages-advocacia/issues/7)
> **Base do projeto:** [WDLC 1.1 — nichos piloto](../fase-1-analise/wdlc-1.1-mapeamento-nichos-piloto.md), [WDLC 1.2 — protocolo de anúncios](../fase-1-analise/wdlc-1.2-protocolo-anuncios-pagos.md), [WDLC 2.1 — roteamento](../fase-2-planejamento/wdlc-2.1-roteamento-hotpages.md) e o design system do [site institucional](https://github.com/souza-guedes/site-institucional/blob/main/docs/fase-3-design-system/wdlc-3.2-mockups-alta-fidelidade.md)
> **Protótipo navegável:** [`wdlc-3.1-mockup-hotpage/prototipo.html`](wdlc-3.1-mockup-hotpage/prototipo.html)
> **Apresentação das telas:** https://claude.ai/artifact/XTUSSXwQ4dMaGPFAQeDtc1

---

## 1. Entregável

A hotpage modelo, em mobile (390px) e desktop (1440px), num protótipo HTML. A barra de revisão no topo alterna as duas larguras. O mesmo layout responde por *container queries*, então as duas versões são sempre coerentes.

- **Protótipo:** [`wdlc-3.1-mockup-hotpage/prototipo.html`](wdlc-3.1-mockup-hotpage/prototipo.html). Para abrir localmente, abra o arquivo no navegador ou rode `python -m http.server` na pasta.
- **Arquivo único:** [`prototipo-hotpage-atraso-entrega.html`](../../prototipo-hotpage-atraso-entrega.html), na raiz, com as fotos embutidas. Abre com dois cliques. É gerado por `build-standalone.py`.
- **Apresentação:** https://claude.ai/artifact/XTUSSXwQ4dMaGPFAQeDtc1. Mostra a primeira dobra (com o aviso de cookies) e a página inteira, em mockup de computador e de celular. A fonte está em [`wdlc-3.1-mockup-hotpage/apresentacao/`](wdlc-3.1-mockup-hotpage/apresentacao/). Para atualizar as capturas, rode `apresentacao/capturar-telas.py`.

As três hotpages do piloto usam este layout. Saúde e Consumidor mudam só o conteúdo.

> O protótipo é artefato de design. **Não** é a implementação da Fase 5: nenhum arquivo de `src/`, `config/` ou `public/` foi alterado.

## 2. Seções da página

A ordem segue a do site institucional: quem é o escritório aparece logo depois de a pessoa se reconhecer no problema, e as faixas alternam claro e escuro até o rodapé.

| Seção | Conteúdo | Faixa |
| --- | --- | --- |
| Cabeçalho | Marca e atalho "Canais de atendimento". Sem menu, porque a página é única. | Papel, fixo no topo |
| Hero | "Atuação em Direito Imobiliário", título em Cinzel sobre a situação do visitante, texto de apoio com o prazo de tolerância ultrapassado, chamadas "Entenda seus direitos" e "Fale com o escritório" (abre o WhatsApp), sócios com OAB/SP | Papel, com a composição da marca |
| Situações | Prazo de tolerância já ultrapassado (em primeiro), sem nova previsão, despesas da espera, dúvida sobre o fim da tolerância. Quatro cartões brancos com a moldura aberta da marca e o número (01 a 04) no quadrado petróleo dos caminhos, iguais no celular e no desktop. No desktop ficam numa grade de 2 × 2; no celular viram um carrossel de deslize lateral, sem rolagem automática, com pontos indicando a posição. Cabeçalho e nota final centralizados; os itens ficam alinhados à esquerda. | Branco |
| Quem atende | Retratos dos sócios com nome completo, OAB/SP, função e formação, com a foto ao lado do texto em todos os formatos, sem fios nem moldura externa. No desktop, os dois sócios ficam lado a lado, com o retrato de moldura dupla; no celular, um embaixo do outro, com o retrato pequeno. O latão aparece só no rótulo da seção. Abaixo deles, uma faixa petróleo na largura da seção traz "Ficou com alguma dúvida?" e o botão de contorno "Fale com o escritório", que abre o WhatsApp | Petróleo-profundo |
| Documentos e caminhos | Dois blocos lado a lado (no celular, duas abas, "O que reunir" e "Caminhos possíveis", um assunto por vez): "O que reunir" num cartão branco com a lista de 5 documentos, sem caixas de seleção nem contador, para não parecer pré-requisito do contato e, fora do cartão, "Caminhos possíveis" como linha do tempo numerada, com um link para os canais no último passo. O cartão informa que não é preciso ter todos os documentos para entrar em contato. | Papel |
| Perguntas frequentes | Coluna à esquerda só com o título e "Não encontrou sua dúvida?" (leva aos canais); accordion de 6 perguntas à direita, com o aviso de conteúdo informativo como linha discreta embaixo. No celular, as perguntas começam todas fechadas, para a lista inteira caber na tela, e o atalho para os canais sai, porque a seção de canais vem logo depois. | Branco |
| Canais de atendimento | Bloco final "Atendimento" do site, com a barra turquesa, toda centralizada, numa grade de 3 colunas: cabeçalho com o horário; WhatsApp, telefone e e-mail em três cartões iguais, só com o contato e o botão (no celular, cada canal vira uma linha, com o botão à direita); e, mais abaixo, um passo de "Depois do primeiro contato" sob cada coluna. No celular, o horário vira uma linha discreta e "Depois do primeiro contato" fica recolhido, abrindo com um toque | Petróleo-profundo |
| Rodapé | Sócios com OAB/SP, sede, contatos, link para a política de privacidade, aviso do Provimento 205/2021 | Tinta |
| Aviso de cookies | Faixa fixa no rodapé da tela, que não bloqueia a página, com "Aceitar" e "Recusar" do mesmo tamanho | Branco |

## 3. Decisões de design

- **Mesma identidade e mesma arquitetura do site institucional.** O CSS de base (tokens, tipografia, molduras abertas, selo, retratos, rodapé) foi copiado do protótipo do site sem alterações. Além das peças, a hotpage segue a lógica do site: título em Cinzel no topo, credibilidade logo no início, poucos estilos de cartão e faixas alternando claro e escuro.
- **Quem atende cedo e com formação.** Os sócios aparecem na terceira seção, na faixa escura do site, com nome, OAB/SP, função e formação. Os retratos mantêm a moldura dupla do site, mas a seção sai da moldura externa, para ficar mais limpa e seguir a mesma margem das outras seções. Pós-graduação, extensão e anos de experiência ficaram de fora, porque o ajuste de escopo da #8 retirou "anos de experiência e especialização" (Art. 3º, III e IV).
- **Alinhamento alternado.** O cabeçalho das situações e toda a seção de canais são centralizados; as outras seções começam pela esquerda. Isso quebra a repetição de seções iguais em sequência.
- **Celular sem rolagem desnecessária.** Nenhum texto sai da página; o que muda é o arranjo: título do hero menor (3 linhas em vez de 5), situações em carrossel, margens laterais de 24px, faixas com 64px de respiro, retratos ao lado do nome, documentos e caminhos em abas, canais em linhas, passos com o número ao lado e rodapé em duas colunas. A página no celular ficou cerca de 33% mais curta.
- **Situações no cartão da marca.** As situações usam o mesmo cartão branco com moldura aberta de "O que reunir", e o número segue o quadrado petróleo dos caminhos. Assim a página continua com só dois estilos de cartão: o branco com moldura e os cartões dos canais.
- **Perguntas frequentes em formato editorial.** O site não tem accordion. Na hotpage, título, aviso e um atalho para os canais ficam numa coluna à esquerda, e as perguntas à direita, separadas por fios, com uma seta fina para abrir.
- **WhatsApp ao longo da página, a pedido dos sócios.** Para quem já quer conversar não precisar percorrer a página, há botão no hero, em "Quem atende" e na seção de canais. Nos caminhos e nas perguntas ficam só links sublinhados, para a página continuar leve e informativa. São dois textos: "Fale com o escritório" é um botão de contorno com o ícone do WhatsApp, que abre esse canal (hero e "Quem atende"); "Ver canais de atendimento" é um link que leva à seção de canais (último caminho e perguntas). No hero, "Entenda seus direitos" continua como chamada principal, para manter o caráter informativo (WDLC 1.2, seção 4.1).
- **Botões sóbrios.** Os textos são neutros, sem urgência nem convite a contratar, no estilo dos outros botões da página. Não há balão flutuante, verde da marca do WhatsApp nem animação, e o canal só abre com o clique da pessoa (Art. 3º, caput e § 1º; Art. 4º, § 3º).
- **Os três canais com o mesmo peso na seção de canais.** WhatsApp, telefone e e-mail aparecem em cartões iguais, só com o contato e o botão, como pede a #8 ("a pessoa escolhe o canal"), e o cabeçalho leva a essa seção. A mensagem pré-preenchida do WhatsApp (WDLC 1.2, seção 5, regra 2) não é reproduzida na página: ela aparece no próprio WhatsApp, editável, antes de a pessoa enviar.
- **Honorários só na proposta.** Os passos de "Depois do primeiro contato" deixam claro que valores só aparecem na proposta formal de contratação (WDLC 1.2, seção 5, regra 5).
- **Sem foto de obra ou de chaves.** O hero usa a composição da marca, como no site. Assim não há risco de imagem de empreendimento identificável nem de apelo emocional. Se os sócios quiserem uma foto, ela precisa ser neutra (WDLC 1.1, seção 3).
- **Cookies com escolha real.** Diferente do site, a hotpage terá tags do Google e da Meta (#21), por isso o aviso tem "Recusar" com o mesmo peso de "Aceitar". No protótipo, os botões só fecham o aviso.

## 4. Conformidade visual OAB

- [x] **Sem formulário.** O contato é só pelos canais oficiais (WDLC 1.2, seção 5, regra 1).
- [x] **Sem pop-up, contagem regressiva, selo de urgência ou animação chamativa** (Art. 3º, IV). O aviso de cookies é uma faixa que não bloqueia a página.
- [x] **Sem "especialista", anos de experiência, número de casos, ranking ou comparação** (Art. 3º, III e IV).
- [x] **Sem valores, gratuidade, promessa de resultado ou prazo** (Art. 3º, I e II). Nenhum valor de indenização ou multa aparece.
- [x] **Sem incitação contra construtoras.** Nenhuma empresa é citada, e os caminhos começam pelas medidas extrajudiciais (Art. 3º, § 1º).
- [x] **Sem depoimentos, imagens de sofrimento, ostentação ou símbolos da OAB** (Art. 5º e 6º).
- [x] **Identificação:** nome completo e OAB/SP dos dois sócios no hero, em "Quem atende" e no rodapé, além da denominação "Souza Guedes Advogados".
- [x] **Contraste:** só combinações aprovadas na auditoria WCAG 2.1 AA do site institucional (`tinta` sobre `papel`, `papel` sobre `petroleo-profundo`, `latao` só sobre fundo escuro, `turquesa` só decorativa).

## 5. Conteúdo provisório

Os textos dão forma ao layout. A copy final vem da #11.

- **Perguntas frequentes:** a primeira é a pergunta de referência da WDLC 1.1, seção 6. As outras cinco são exemplos. As respostas são gerais e citam só a Lei nº 13.786/2018 e o limite legal de 180 dias do prazo de tolerância (Lei nº 4.591/1964, art. 43-A).
- **Situações, documentos e caminhos:** seguem o texto de apoio da #8.

## 6. Pendências

| Item | Responsável | Observação |
| --- | --- | --- |
| **Aprovação formal dos mockups** | Sócios | Critério de aceite da #8. A primeira rodada de ajustes dos sócios (botões de WhatsApp, prazo de tolerância, documentos e caminhos) já está aplicada. |
| Rota desta página | Sócios / Fase 5 | Hoje `/imobiliario` em `config/pages.php` reúne usucapião, despejo, leilão e atraso. A #8 pede uma página só sobre atraso, como propõe a WDLC 1.1 ("uma página por subtema"). Definir o slug (por exemplo `/atraso-na-entrega`) e ajustar `config/pages.php`, `public/.htaccess` e os testes na Fase 5. |
| Tema na mensagem do WhatsApp | Fase 5 | O protótipo usa "atraso na entrega do imóvel", como pede a #8. Em `config/pages.php` está "Direito Imobiliário". |
| Copy final e respostas das perguntas | #11 | Textos atuais são provisórios. |
| Componentes (perguntas, canais, rodapé) e seus estados | #9 | Partir deste mockup. |
