# WDLC 1.1 — Mapeamento dos 3 nichos piloto: Imobiliário, Saúde e Consumidor

> **Status:** Rascunho para revisão e aprovação dos sócios
> **Fase:** 1 — Information Gathering & Campaign Strategy
> **Sub-issue:** [#2](https://github.com/souza-guedes/hotpages-advocacia/issues/2)
> **Épico Relacionado:** [#1](https://github.com/souza-guedes/hotpages-advocacia/issues/1)
> **Fonte:** [`site-institucional/data/firm-profile.json`](https://github.com/souza-guedes/site-institucional/blob/main/data/firm-profile.json) (áreas de atuação, públicos e personas, respondidos pelos sócios no briefing da WDLC 1.1 do site institucional)

---

## 1. Mudança em relação à issue

A #2 pedia o mapeamento de Direito Tributário Empresarial, Direito Trabalhista Empresarial & Executivos e Direito Previdenciário. **Nenhuma dessas áreas é área de atuação da banca.** As áreas informadas pelos sócios são Direito Imobiliário, Direito de Saúde, Direito do Consumidor e Direito de Família e Sucessões. Uma landing page sobre uma área em que o escritório não atua seria informação não verdadeira (Art. 1º, § 1º, do Provimento CFOAB nº 205/2021). O site institucional já tomou a mesma decisão para os artigos da [WDLC 4.1](https://github.com/souza-guedes/site-institucional/blob/main/docs/fase-4-conteudo/wdlc-4.1-textos-institucionais.md).

Os três nichos piloto passam a ser:

| Nicho | Público | Por que entra no piloto |
| --- | --- | --- |
| Direito Imobiliário | PF e PJ | Demandas bem delimitadas (usucapião, despejo, arrematação, atraso na entrega), com documentação que permite uma triagem inicial objetiva |
| Direito de Saúde | PF e PJ | Demandas frequentes ligadas a planos de saúde, com tema educativo claro (o que o plano deve cobrir) |
| Direito do Consumidor | PF e PJ | Situações do dia a dia (negativação, cobrança indevida, serviço essencial cortado) que a pessoa busca entender |

**Fora do piloto:** Direito de Família e Sucessões atende só pessoa física e trata de temas sensíveis (divórcio, guarda, inventário), menos adequados a anúncio pago. É a candidata para a próxima leva.

Se os sócios pretendem passar a atuar em Tributário, Trabalhista ou Previdenciário, a área precisa primeiro entrar no `firm-profile.json` do site institucional. Depois, este mapeamento é refeito para ela.

## 2. Como ler este documento

- **Só fatos confirmados.** Escopo, público, dores e necessidades vêm do `firm-profile.json` (campos `focus`, `scope_items`, `target_audience` e `personas`). O escopo está transcrito sem alteração. Nada foi inventado.
- **Ângulo da página e cuidados OAB são propostas** deste documento e precisam do aval dos sócios.
- **FAQ:** a seção 6 traz só as perguntas. As respostas são escritas na fase de conteúdo, com a norma citada e conferida na fonte oficial.

## 3. Nicho 1 — Direito Imobiliário

**Foco declarado:** Usucapião extrajudicial e judicial, despejo, reintegração de posse, assessoria para arrematação, imissão na posse, indenizatória para atraso na entrega do imóvel e demais demandas relacionadas à aquisição, posse, propriedade e utilização de imóveis.

**Escopo**

- Atuação em processos de usucapião judicial e extrajudicial, desde a análise documental e verificação dos requisitos até o acompanhamento do procedimento perante o Poder Judiciário ou Cartório de Registro de Imóveis
- Atuação em ações de despejo, reintegração de posse e imissão na posse, envolvendo conflitos relacionados à ocupação, locação e retomada de imóveis
- Assessoria jurídica em arrematação de imóveis, com análise do edital, matrícula, ônus e riscos jurídicos da aquisição, além do acompanhamento das medidas necessárias à consolidação da posse e propriedade
- Propositura de ações indenizatórias decorrentes de atraso na entrega de imóveis, incluindo análise dos prejuízos suportados pelo adquirente e das obrigações assumidas pela incorporadora ou construtora

**Público**

- Pessoas físicas proprietárias, possuidoras, adquirentes ou locatárias de imóveis
- Investidores e arrematantes
- Construtoras, incorporadoras, imobiliárias e empresas que possuem ou utilizam imóveis em suas atividades

**Dores do cliente** (personas `persona-pf-imovel-familia` e `persona-pj-imobiliario`)

- Conflitos de posse, locação, aquisição e regularização de imóveis
- Atraso na entrega do imóvel e insegurança na arrematação
- Conflitos de ocupação, locação e retomada de imóveis (PJ)
- Riscos jurídicos na arrematação, como ônus na matrícula e condições do edital (PJ)
- Atraso na entrega de imóveis e obrigações assumidas por incorporadoras ou construtoras (PJ)

**Necessidades jurídicas**

- Usucapião judicial e extrajudicial, despejo, reintegração e imissão na posse
- Assessoria em arrematação, com análise de edital, matrícula, ônus e riscos, e acompanhamento da consolidação da posse e da propriedade
- Ações indenizatórias por atraso na entrega de imóveis

**Proposta de ângulo da página.** Uma página por subtema, sem misturar públicos: (a) regularização por usucapião, para PF; (b) segurança na arrematação em leilão, para investidores e arrematantes; (c) atraso na entrega do imóvel, para adquirentes. Cada página explica quais documentos a pessoa precisa reunir, o que costuma ser analisado (matrícula, contrato, edital, comprovantes de posse) e oferece o contato pelos canais oficiais para uma análise inicial do caso.

**Cuidados OAB específicos**

- Não sugerir prazo de conclusão da usucapião nem do despejo. O prazo depende do cartório, do juízo e do caso.
- Na página de arrematação, não apresentar o leilão como oportunidade de investimento nem citar desconto sobre o valor de mercado. Isso aproximaria a página de publicidade de outra atividade (Art. 8º).
- Na página de atraso na entrega, não citar valores de indenização nem incitar ação contra construtoras (Art. 3º, § 1º).

## 4. Nicho 2 — Direito de Saúde

**Foco declarado:** Liberação de medicamentos e tratamentos, negativas de cobertura, recusa de internação, manutenção e restabelecimento de convênio médico, reajustes abusivos, cobertura de procedimentos e cirurgias, responsabilidade civil por erro médico e demais demandas relacionadas à proteção do direito à saúde.

**Escopo**

- Atuação em demandas para obtenção de medicamentos, tratamentos, procedimentos e cirurgias negados por planos de saúde, inclusive mediante pedido de tutela de urgência
- Ações para manutenção, restabelecimento ou cobertura de plano de saúde, diante de negativa indevida, cancelamento ou recusa de atendimento
- Atuação em casos de negativa de internação, exames, terapias e procedimentos médicos, com adoção das medidas judiciais necessárias à garantia do tratamento indicado
- Ações envolvendo reajustes abusivos e cobranças indevidas por parte de operadoras de planos de saúde
- Atuação em demandas de responsabilidade civil decorrentes de erro médico e falhas na prestação de serviços de saúde, incluindo análise da conduta profissional e dos danos suportados pelo paciente

**Público**

- Pessoas físicas, pacientes e familiares que necessitam de acesso a medicamentos, tratamentos, procedimentos ou internações
- Beneficiários de planos de saúde
- Profissionais da área da saúde
- Clínicas, hospitais e empresas do setor de saúde

**Dores do cliente** (personas `persona-pf-saude-consumo` e `persona-pj-pme-saude`)

- Negativa de medicamentos, tratamentos, internação, exames e cobertura de plano de saúde
- Reajustes abusivos, cancelamento de convênio e erro médico
- Demandas ligadas a negativas de cobertura, internação, reajustes e erro médico (PJ)

**Necessidades jurídicas**

- Tutela para obtenção de medicamentos, tratamentos, procedimentos e cirurgias negados
- Manutenção ou restabelecimento de plano de saúde e discussão de reajustes e cobranças indevidas
- Atuação em cobertura de plano de saúde, negativa de tratamento e responsabilidade civil por erro médico

**Proposta de ângulo da página.** Começar pelo beneficiário que recebeu uma negativa do plano (PF): o que é a negativa de cobertura, quais documentos guardar (negativa por escrito, relatório e prescrição médica, contrato do plano) e quais caminhos existem, administrativos e judiciais. Reajuste do plano e cancelamento de convênio podem virar uma segunda página. Erro médico e o público PJ (clínicas e hospitais) ficam fora do piloto, porque pedem outro tom e outro público.

**Cuidados OAB específicos**

- Quem busca essa página costuma estar em situação de urgência de saúde. A página não pode explorar essa urgência com contagem regressiva, alerta ou apelo emocional (Art. 3º, IV).
- Pode explicar que a tutela de urgência existe, mas não pode prometer liminar, prazo de decisão nem resultado (Art. 3º, II).
- Não usar imagens de pacientes em sofrimento nem depoimentos de clientes.

## 5. Nicho 3 — Direito do Consumidor

**Foco declarado:** Negativação indevida, privação indevida de serviços essenciais, cobranças indevidas, falhas na prestação de serviços, problemas relacionados à aquisição de produtos e serviços, responsabilidade civil nas relações de consumo e demais demandas consumeristas.

**Escopo**

- Atuação em casos de negativação indevida e cobranças indevidas, com adoção das medidas necessárias para exclusão do apontamento e reparação dos danos suportados pelo consumidor
- Demandas envolvendo interrupção ou privação indevida de serviços essenciais, especialmente nos casos de fornecimento de energia elétrica, água, telefonia e internet
- Ações relacionadas à falha na prestação de serviços e ao descumprimento de obrigações por fornecedores, incluindo pedidos de reparação por danos materiais e morais
- Atuação em casos de problemas na aquisição de produtos e serviços, como vícios, defeitos, não entrega, descumprimento da oferta e dificuldades de cancelamento ou restituição de valores

**Público**

- Pessoas físicas em suas relações de consumo
- Pequenas e médias empresas em demandas decorrentes de relações de consumo

**Dores do cliente** (personas `persona-pf-saude-consumo` e `persona-pj-pme-saude`)

- Negativação indevida, cobranças indevidas e interrupção de serviços essenciais
- Vícios, defeitos, não entrega e descumprimento de oferta na aquisição de produtos e serviços
- Cobranças indevidas, falhas na prestação de serviços e problemas na aquisição de produtos ou serviços (PJ)

**Necessidades jurídicas**

- Exclusão de negativação indevida e reparação por falha na prestação de serviços ou vícios de produtos
- Medidas contra negativação indevida, cobrança indevida e interrupção de serviços essenciais
- Reparação por falha na prestação de serviços e vícios na aquisição de produtos

**Proposta de ângulo da página.** Começar pela negativação e cobrança indevida (PF): como consultar se o nome está negativado, quais comprovantes guardar e o que a pessoa pode fazer antes de procurar um advogado (reclamação ao fornecedor, protocolo, Procon, consumidor.gov.br). Corte de serviço essencial e problema com produto ou entrega podem virar páginas seguintes.

**Cuidados OAB específicos**

- Não citar valores de dano moral nem sugerir que toda negativação gera indenização (Art. 3º, II).
- Não incitar ação contra bancos, operadoras ou lojas, nem citar empresas pelo nome (Art. 3º, § 1º).
- Mostrar os caminhos sem advogado (Procon, consumidor.gov.br) reforça o caráter educativo da página e afasta a captação.

## 6. Perguntas frequentes a responder

Perguntas formuladas como o cliente costuma perguntar. Cada uma corresponde a um item do escopo acima.

### Direito Imobiliário

1. Moro há anos num imóvel sem escritura. Posso regularizar por usucapião?
2. Qual a diferença entre usucapião em cartório e usucapião na Justiça?
3. Quais documentos preciso reunir para começar uma usucapião?
4. O inquilino parou de pagar o aluguel. Como funciona o despejo?
5. Comprei um imóvel em leilão e ele está ocupado. Como faço para tomar posse?
6. O que devo verificar no edital e na matrícula antes de dar um lance num leilão?
7. A construtora atrasou a entrega do meu apartamento. Quais são os meus direitos?
8. Qual a diferença entre reintegração de posse e imissão na posse?

### Direito de Saúde

1. O plano de saúde negou meu medicamento ou tratamento. O que posso fazer?
2. O plano pode negar internação, exame ou cirurgia que o médico indicou?
3. Quais documentos devo guardar quando recebo uma negativa do plano?
4. O que é tutela de urgência e em que casos ela é pedida?
5. O plano pode cancelar meu contrato? E se eu estiver em tratamento?
6. Como saber se o reajuste do meu plano é abusivo?
7. Fui cobrado indevidamente pela operadora. Como contestar?
8. Quando um problema no atendimento médico pode ser considerado erro médico?

### Direito do Consumidor

1. Meu nome foi negativado por uma dívida que não reconheço. O que fazer?
2. Como consulto se meu nome está negativado?
3. A empresa cortou minha luz, água, telefone ou internet. Quando o corte é indevido?
4. Recebi uma cobrança indevida. Tenho direito de receber o valor de volta?
5. O produto chegou com defeito ou não foi entregue. Quais são os meus direitos?
6. A loja não cumpriu o que anunciou. O que posso exigir?
7. Não consigo cancelar um serviço ou receber o reembolso. Como resolver?
8. Preciso de advogado ou posso resolver pelo Procon ou pelo consumidor.gov.br?

## 7. Regras de publicidade aplicáveis

As landing pages seguem as mesmas regras do site institucional, gravadas em [`site-institucional/data/ethical-compliance-rules.json`](https://github.com/souza-guedes/site-institucional/blob/main/data/ethical-compliance-rules.json): lista de expressões vedadas, identificação obrigatória dos sócios com OAB/SP e regras RULE-OAB-001 a 005. Em resumo: nada de promessa de resultado, superlativo, menção a honorários ou gratuidade, ou anúncio de especialidade sem título.

O protocolo específico para anúncio pago (impulsionamento, Arts. 3º a 5º do Provimento 205/2021) é tratado na [#3](https://github.com/souza-guedes/hotpages-advocacia/issues/3).

## 8. Lacunas para os sócios

O `firm-profile.json` não traz estas informações. Sem elas, o mapeamento fica completo, mas o planejamento de campanha não:

- **Prioridade entre os nichos:** qual página deve sair primeiro.
- **Volume de demanda atual** de cada nicho, para dimensionar a campanha.
- **Região atendida:** só São Paulo capital, Grande São Paulo, o estado ou atendimento remoto. Isso define a segmentação geográfica.
- **Divisão das áreas entre os sócios:** quem é o responsável por cada nicho (coluna "Área" da seção 9).
- **Erro médico e público PJ de Saúde:** se entram em páginas próprias em uma leva futura.
- **Imobiliário PJ:** se construtoras e imobiliárias entram no piloto ou ficam para depois.

## 9. Aprovação

Critério de aceite da #2: documento de escopo dos 3 nichos aprovado pelos advogados responsáveis de cada área.

| Advogado(a) | Inscrição | Área(s) sob responsabilidade | Data | Status |
| --- | --- | --- | --- | --- |
| Rodrigo Guedes da Silva | OAB/SP nº 538.416 | _a definir_ | | Pendente |
| Lays Regina de Souza | OAB/SP nº 511.204 | _a definir_ | | Pendente |

A issue [#2](https://github.com/souza-guedes/hotpages-advocacia/issues/2) segue aberta até as duas aprovações.
