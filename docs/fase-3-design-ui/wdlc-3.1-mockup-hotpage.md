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

| Seção | Conteúdo | Faixa |
| --- | --- | --- |
| Cabeçalho | Marca e atalho "Canais de atendimento". Sem menu, porque a página é única. | Papel, fixo no topo |
| Hero | "Atuação em Direito Imobiliário", título sobre a situação do visitante, texto de apoio, chamadas "Entenda seus direitos" e "Veja quais documentos reunir", sócios com OAB/SP | Papel, com a composição da marca |
| Situações | Data de entrega vencida, prazo de tolerância em dúvida, sem nova previsão, despesas da espera | Branco |
| Documentos e caminhos | O que reunir (5 itens) e 3 caminhos possíveis. Os dois primeiros (pedir posição por escrito e Procon/consumidor.gov.br) estão marcados como "Não exige advogado". | Papel |
| Perguntas frequentes | Accordion com 6 perguntas e aviso de conteúdo informativo | Branco |
| Quem atende | Retratos dos sócios com nome completo, OAB/SP e função | Petróleo-profundo |
| Canais de atendimento | WhatsApp (com a mensagem inicial visível antes do clique), telefone e e-mail, horário e como funciona o primeiro contato | Papel |
| Rodapé | Sócios com OAB/SP, sede, contatos, links para o site e para a política de privacidade, aviso do Provimento 205/2021 | Tinta |
| Aviso de cookies | Faixa fixa no rodapé da tela, que não bloqueia a página, com "Aceitar" e "Recusar" do mesmo tamanho | Branco |

## 3. Decisões de design

- **Mesma identidade do site institucional.** O CSS de base (tokens, tipografia, molduras abertas, selo, retratos, rodapé) foi copiado do protótipo do site sem alterações. O visitante que passar da hotpage para o site reconhece o escritório.
- **Chamadas que convidam a entender.** Os dois botões do hero levam a seções da própria página. O único botão que sai da página é "Abrir conversa no WhatsApp", na seção de canais, e só abre com o clique da pessoa.
- **Mensagem do WhatsApp à vista.** O texto pré-preenchido aparece no cartão antes do clique, com o aviso de que pode ser editado (WDLC 1.2, seção 5, regra 2).
- **Honorários só na proposta.** O bloco "Como funciona o primeiro contato" deixa claro que valores só aparecem na proposta formal de contratação (WDLC 1.2, seção 5, regra 5).
- **Quem atende sem currículo.** Os sócios aparecem só com nome, OAB/SP e função. Formação e títulos ficaram de fora, para evitar que a página de anúncio pareça autopromoção. O perfil completo está no site.
- **Sem foto de obra ou de chaves.** O hero usa a composição da marca, como no site. Assim não há risco de imagem de empreendimento identificável nem de apelo emocional. Se os sócios quiserem uma foto, ela precisa ser neutra (WDLC 1.1, seção 3).
- **Cookies com escolha real.** Diferente do site, a hotpage terá tags do Google e da Meta (#21), por isso o aviso tem "Recusar" com o mesmo peso de "Aceitar". No protótipo, os botões só fecham o aviso.

## 4. Conformidade visual OAB

- [x] **Sem formulário.** O contato é só pelos canais oficiais (WDLC 1.2, seção 5, regra 1).
- [x] **Sem pop-up, contagem regressiva, selo de urgência ou animação chamativa** (Art. 3º, IV). O aviso de cookies é uma faixa que não bloqueia a página.
- [x] **Sem "especialista", anos de experiência, número de casos, ranking ou comparação** (Art. 3º, III e IV).
- [x] **Sem valores, gratuidade, promessa de resultado ou prazo** (Art. 3º, I e II). Nenhum valor de indenização ou multa aparece.
- [x] **Sem incitação contra construtoras.** Nenhuma empresa é citada, e os caminhos começam pelos que não exigem advogado (Art. 3º, § 1º).
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
| **Aprovação formal dos mockups** | Sócios | Critério de aceite da #8. |
| Rota desta página | Sócios / Fase 5 | Hoje `/imobiliario` em `config/pages.php` reúne usucapião, despejo, leilão e atraso. A #8 pede uma página só sobre atraso, como propõe a WDLC 1.1 ("uma página por subtema"). Definir o slug (por exemplo `/atraso-na-entrega`) e ajustar `config/pages.php`, `public/.htaccess` e os testes na Fase 5. |
| Tema na mensagem do WhatsApp | Fase 5 | O protótipo usa "atraso na entrega do imóvel", como pede a #8. Em `config/pages.php` está "Direito Imobiliário". |
| Copy final e respostas das perguntas | #11 | Textos atuais são provisórios. |
| Componentes (perguntas, canais, rodapé) e seus estados | #9 | Partir deste mockup. |
