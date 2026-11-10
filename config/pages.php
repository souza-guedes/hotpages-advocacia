<?php

declare(strict_types=1);

// Uma entrada por hotpage. A chave é o slug da rota (também listado em public/.htaccess).
// Copy de atraso: docs/fase-4-copy-conteudo/wdlc-4.1-copy-atraso-entrega-imovel.md (#11).
// Saúde e Consumidor: molde da #14 a partir da #12 / WDLC 1.1 (sem formulário).

return [
    'imobiliario' => [
        'area' => 'Direito Imobiliário',
        'title' => 'Atraso na entrega do imóvel: entenda seus direitos | Souza Guedes Advogados',
        'description' => 'Veja o que costuma ser analisado quando o prazo de tolerância já passou e o imóvel não foi entregue, e quais documentos reunir.',
        'heading' => 'A construtora atrasou a entrega do seu imóvel? Entenda seus direitos.',
        'intro' => 'Veja o que costuma ser analisado quando o prazo de tolerância já passou e o imóvel não foi entregue: o contrato, os pagamentos e as comunicações com a construtora.',
        'whatsapp_topic' => 'atraso na entrega do imóvel',
        'situations_eyebrow' => 'Situações comuns',
        'situations_title' => 'O que costuma acontecer quando a entrega atrasa',
        'situations_lead' => 'Quem compra um imóvel na planta conta com a data de entrega prevista no contrato. Quando essa data e o prazo de tolerância passam sem a entrega, estas costumam ser as dúvidas.',
        'situations' => [
            [
                'title' => 'O prazo de tolerância já foi ultrapassado',
                'text' => 'A data prevista no contrato e a tolerância contratual já passaram, e as chaves ainda não foram entregues.',
            ],
            [
                'title' => 'Não há nova previsão de entrega',
                'text' => 'As respostas da construtora não trazem uma data, ou a data muda a cada contato.',
            ],
            [
                'title' => 'A espera trouxe despesas',
                'text' => 'Aluguel, mudança adiada ou outros gastos que surgiram por causa do atraso.',
            ],
            [
                'title' => 'Não está claro se a tolerância terminou',
                'text' => 'A contagem parte da data prevista no contrato e nos aditivos. Enquanto a tolerância estiver em curso, vale guardar as comunicações com a construtora.',
            ],
        ],
        'situations_note' => 'Cada contrato tem regras próprias. O que se aplica a cada caso depende da leitura do contrato e dos documentos.',
        'documents_eyebrow' => 'Documentos e caminhos',
        'documents_title' => 'O que reunir e quais caminhos existem',
        'documents_lead' => 'Estes documentos costumam ajudar na análise, mas não são necessários para o primeiro contato.',
        'documents' => [
            [
                'title' => 'Contrato de compra e venda e aditivos',
                'text' => 'Com a data de entrega e a cláusula de tolerância.',
            ],
            [
                'title' => 'Comprovantes de pagamento',
                'text' => 'Sinal, parcelas e eventuais taxas pagas até agora.',
            ],
            [
                'title' => 'Comunicações com a construtora',
                'text' => 'E-mails, mensagens, notificações e protocolos de atendimento.',
            ],
            [
                'title' => 'Material de divulgação',
                'text' => 'Folhetos, anúncios ou páginas com a data de entrega prometida.',
            ],
            [
                'title' => 'Comprovantes de despesas da espera',
                'text' => 'Contrato de aluguel e recibos, por exemplo.',
            ],
        ],
        'paths_lead' => 'Do pedido à construtora à análise jurídica do contrato.',
        'paths' => [
            [
                'title' => 'Pedir uma posição por escrito',
                'text' => 'Solicitar à construtora a nova previsão de entrega por e-mail ou protocolo e guardar a resposta.',
            ],
            [
                'title' => 'Registrar reclamação no Procon ou no consumidor.gov.br',
                'text' => 'Reclamação administrativa, registrada nos canais oficiais desses serviços.',
            ],
            [
                'title' => 'Análise jurídica do contrato',
                'text' => 'Dentro ou depois do prazo de tolerância, um advogado pode avaliar o caso e auxiliar nas medidas extrajudiciais ou judiciais cabíveis.',
            ],
        ],
        'faq_eyebrow' => 'Perguntas frequentes',
        'faq_title' => 'Dúvidas sobre atraso na entrega',
        'faq_lead' => 'Respostas gerais às dúvidas mais comuns de quem comprou um imóvel na planta.',
        'faq' => [
            [
                'q' => 'A construtora atrasou a entrega do meu apartamento. Quais são os meus direitos?',
                'a' => [
                    'Depende do que o contrato prevê e de quanto tempo passou além do prazo de tolerância. Em geral, são analisados a data de entrega prometida, a cláusula de tolerância, os pagamentos feitos e as comunicações com a construtora.',
                    'A relação de compra na planta costuma ser de consumo (Código de Defesa do Consumidor). A Lei nº 13.786/2018 traz regras sobre o atraso na entrega de imóveis comprados na planta.',
                ],
            ],
            [
                'q' => 'O que é o prazo de tolerância?',
                'a' => [
                    'É um prazo adicional, previsto no contrato, em que o atraso é admitido. A Lei nº 4.591/1964, art. 43-A, permite até 180 dias corridos, desde que a cláusula esteja escrita de forma clara e destacada. A Lei nº 13.786/2018 também trata desse prazo no distrato e no atraso.',
                ],
            ],
            [
                'q' => 'Como saber se o prazo de tolerância já terminou?',
                'a' => [
                    'A contagem parte da data de entrega prevista no contrato. Por isso, vale ter em mãos o contrato e todos os aditivos, que podem ter alterado essa data. Se o prazo já terminou e as chaves não foram entregues, a análise do contrato ajuda a entender quais caminhos cabem.',
                ],
            ],
            [
                'q' => 'Posso desistir da compra por causa do atraso?',
                'a' => [
                    'A Lei nº 13.786/2018 prevê regras próprias para quem desiste depois de vencido o prazo de tolerância. O que se aplica depende do contrato e da situação de cada caso.',
                ],
            ],
            [
                'q' => 'Quais documentos devo guardar?',
                'a' => [
                    'Contrato e aditivos, comprovantes de pagamento, e-mails e mensagens com a construtora e o material de divulgação com a data prometida. A lista completa está em “O que reunir”, acima.',
                ],
            ],
            [
                'q' => 'Como funciona a reclamação no Procon?',
                'a' => [
                    'A reclamação é registrada nos canais oficiais do Procon ou do consumidor.gov.br. Um advogado também pode auxiliar nessas medidas extrajudiciais. Se quiser uma análise jurídica do contrato, os canais do escritório estão logo abaixo.',
                ],
            ],
        ],
    ],

    'saude' => [
        'area' => 'Direito de Saúde',
        'title' => 'Negativa do plano de saúde: entenda seus direitos | Souza Guedes Advogados',
        'description' => 'Saiba o que é a negativa de cobertura do plano de saúde, quais documentos guardar e quais caminhos existem.',
        'heading' => 'O plano de saúde negou o tratamento? Entenda seus direitos',
        'intro' => 'O que é a negativa de cobertura, quais documentos guardar (negativa por escrito, relatório e prescrição médica, contrato do plano) e quais caminhos existem, administrativos e judiciais.',
        'whatsapp_topic' => 'Direito de Saúde',
        'situations_eyebrow' => 'Situações comuns',
        'situations_title' => 'O que costuma acontecer quando o plano nega a cobertura',
        'situations_lead' => 'Quem tem plano de saúde conta com a cobertura contratada. Quando o pedido é negado ou o tratamento não é autorizado, estas costumam ser as dúvidas.',
        'situations' => [
            [
                'title' => 'O plano negou o medicamento ou o tratamento',
                'text' => 'A operadora recusou a cobertura indicada pelo médico, por escrito ou só por telefone.',
            ],
            [
                'title' => 'Internação, exame ou cirurgia não foram autorizados',
                'text' => 'Há indicação médica, mas a autorização não saiu ou veio com restrições.',
            ],
            [
                'title' => 'O contrato foi cancelado ou ameaçado de cancelamento',
                'text' => 'A operadora comunicou o fim do contrato, inclusive durante tratamento.',
            ],
            [
                'title' => 'Há dúvida sobre reajuste ou cobrança',
                'text' => 'O valor da mensalidade mudou ou apareceu cobrança que a pessoa não reconhece.',
            ],
        ],
        'situations_note' => 'Cada contrato e cada negativa têm regras próprias. O que se aplica depende da leitura do contrato, da negativa e dos documentos médicos.',
        'documents_eyebrow' => 'Documentos e caminhos',
        'documents_title' => 'O que reunir e quais caminhos existem',
        'documents_lead' => 'Estes documentos costumam ajudar na análise, mas não são necessários para o primeiro contato.',
        'documents' => [
            [
                'title' => 'Negativa por escrito',
                'text' => 'Carta, e-mail, protocolo ou print da negativa da operadora.',
            ],
            [
                'title' => 'Relatório e prescrição médica',
                'text' => 'Indicação do tratamento, exame, internação ou medicamento.',
            ],
            [
                'title' => 'Contrato do plano e carências',
                'text' => 'Condições gerais, rol de coberturas e comprovante de pagamento.',
            ],
            [
                'title' => 'Comunicações com a operadora',
                'text' => 'Protocolos de atendimento, e-mails e mensagens trocadas.',
            ],
            [
                'title' => 'Documentos do beneficiário',
                'text' => 'Carteirinha, identidade e comprovantes de vínculo com o plano.',
            ],
        ],
        'paths_lead' => 'Do pedido à operadora à análise jurídica do contrato.',
        'paths' => [
            [
                'title' => 'Pedir a negativa por escrito',
                'text' => 'Solicitar à operadora a justificativa formal e guardar o protocolo.',
            ],
            [
                'title' => 'Registrar reclamação na ANS, no Procon ou no consumidor.gov.br',
                'text' => 'Reclamação administrativa nos canais oficiais desses serviços.',
            ],
            [
                'title' => 'Análise jurídica do contrato e da negativa',
                'text' => 'Um advogado pode avaliar o caso e auxiliar nas medidas extrajudiciais ou judiciais cabíveis.',
            ],
        ],
        'faq_eyebrow' => 'Perguntas frequentes',
        'faq_title' => 'Dúvidas sobre negativa do plano',
        'faq_lead' => 'Respostas gerais às dúvidas mais comuns de quem recebeu uma negativa de cobertura.',
        'faq' => [
            [
                'q' => 'O plano de saúde negou meu medicamento ou tratamento. O que posso fazer?',
                'a' => [
                    'Em geral, vale pedir a negativa por escrito, guardar a indicação médica e o contrato do plano. A Lei nº 9.656/1998 e as normas da ANS tratam das coberturas obrigatórias. O Código de Defesa do Consumidor também se aplica à relação com a operadora.',
                ],
            ],
            [
                'q' => 'O plano pode negar internação, exame ou cirurgia que o médico indicou?',
                'a' => [
                    'Depende do contrato, das carências e das regras de cobertura. A análise costuma olhar a indicação médica, a negativa e o que o plano prevê. Cada caso depende desses documentos.',
                ],
            ],
            [
                'q' => 'Quais documentos devo guardar quando recebo uma negativa do plano?',
                'a' => [
                    'Negativa por escrito, relatório e prescrição médica, contrato do plano, protocolos de atendimento e comprovantes de pagamento. A lista completa está em “O que reunir”, acima.',
                ],
            ],
            [
                'q' => 'O que é tutela de urgência e em que casos ela é pedida?',
                'a' => [
                    'É um pedido judicial para obtenção de medida provisória enquanto o processo tramita. Se e quando cabe depende da urgência e dos documentos do caso; não há prazo ou resultado garantido.',
                ],
            ],
            [
                'q' => 'O plano pode cancelar meu contrato? E se eu estiver em tratamento?',
                'a' => [
                    'Há regras próprias para rescisão e para tratamento em curso. O que se aplica depende do tipo de contrato (individual, coletivo) e da comunicação da operadora. Vale guardar essa comunicação e o contrato.',
                ],
            ],
            [
                'q' => 'Como saber se o reajuste do meu plano é abusivo?',
                'a' => [
                    'Em planos individuais, a ANS divulga o índice máximo anual. Em coletivos, as regras do contrato e da legislação aplicável entram na análise. Compare o reajuste com o contrato e os comunicados da operadora.',
                ],
            ],
            [
                'q' => 'Fui cobrado indevidamente pela operadora. Como contestar?',
                'a' => [
                    'Guarde a cobrança e os comprovantes de pagamento. Conteste junto à operadora com protocolo e, se necessário, use Procon, consumidor.gov.br ou a ANS. Um advogado pode auxiliar se a controvérsia permanecer.',
                ],
            ],
        ],
    ],

    'consumidor' => [
        'area' => 'Direito do Consumidor',
        'title' => 'Negativação e cobrança indevida: o que fazer | Souza Guedes Advogados',
        'description' => 'Veja como consultar a negativação, quais comprovantes guardar e os caminhos possíveis, inclusive pelo Procon e pelo consumidor.gov.br.',
        'heading' => 'Nome negativado ou cobrança indevida? Veja como funciona',
        'intro' => 'Como consultar se o nome está negativado, quais comprovantes guardar e o que você pode fazer antes de procurar um advogado: reclamação ao fornecedor, protocolo, Procon e consumidor.gov.br.',
        'whatsapp_topic' => 'Direito do Consumidor',
        'situations_eyebrow' => 'Situações comuns',
        'situations_title' => 'O que costuma acontecer em cobrança e negativação',
        'situations_lead' => 'Quem é cobrado ou tem o nome em cadastro de inadimplentes costuma ter estas dúvidas sobre o que verificar e quais caminhos existem.',
        'situations' => [
            [
                'title' => 'Nome negativado por dívida que não reconhece',
                'text' => 'Apareceu apontamento em birô de crédito sem que a pessoa reconheça a origem da dívida.',
            ],
            [
                'title' => 'Cobrança indevida ou valor duplicado',
                'text' => 'A empresa cobra o que já foi pago, ou um valor que não corresponde ao contrato.',
            ],
            [
                'title' => 'Corte de serviço essencial',
                'text' => 'Luz, água, telefone ou internet foram cortados e há dúvida se o corte foi regular.',
            ],
            [
                'title' => 'Produto com defeito ou não entregue',
                'text' => 'A compra não chegou, chegou incompleta ou com vício, e a loja não resolveu.',
            ],
        ],
        'situations_note' => 'Cada contrato e cada cobrança têm regras próprias. O que se aplica depende dos documentos e da comunicação com o fornecedor.',
        'documents_eyebrow' => 'Documentos e caminhos',
        'documents_title' => 'O que reunir e quais caminhos existem',
        'documents_lead' => 'Estes documentos costumam ajudar na análise, mas não são necessários para o primeiro contato.',
        'documents' => [
            [
                'title' => 'Comprovantes da cobrança ou da negativação',
                'text' => 'Extrato do birô, carta de cobrança, boleto ou fatura contestada.',
            ],
            [
                'title' => 'Comprovantes de pagamento',
                'text' => 'Recibos, extratos e comprovantes de quitação.',
            ],
            [
                'title' => 'Contrato ou anúncio da compra',
                'text' => 'Contrato, nota fiscal, pedido ou print do que foi anunciado.',
            ],
            [
                'title' => 'Comunicações com o fornecedor',
                'text' => 'Protocolos, e-mails, chats e respostas da empresa.',
            ],
            [
                'title' => 'Documentos pessoais',
                'text' => 'Identidade e comprovante de endereço, quando forem pedidos nos canais administrativos.',
            ],
        ],
        'paths_lead' => 'Da reclamação ao fornecedor à análise jurídica do caso.',
        'paths' => [
            [
                'title' => 'Reclamar ao fornecedor com protocolo',
                'text' => 'Registrar a contestação por escrito e guardar o número do atendimento.',
            ],
            [
                'title' => 'Registrar reclamação no Procon ou no consumidor.gov.br',
                'text' => 'Reclamação administrativa nos canais oficiais desses serviços.',
            ],
            [
                'title' => 'Análise jurídica da cobrança ou da negativação',
                'text' => 'Um advogado pode avaliar o caso e auxiliar nas medidas extrajudiciais ou judiciais cabíveis.',
            ],
        ],
        'faq_eyebrow' => 'Perguntas frequentes',
        'faq_title' => 'Dúvidas sobre negativação e cobrança',
        'faq_lead' => 'Respostas gerais às dúvidas mais comuns de quem enfrenta cobrança ou negativação.',
        'faq' => [
            [
                'q' => 'Meu nome foi negativado por uma dívida que não reconheço. O que fazer?',
                'a' => [
                    'Consulte o birô, peça a origem da dívida ao credor e guarde a resposta. O Código de Defesa do Consumidor trata de cobrança e de informações em cadastros. A análise depende dos documentos de cada caso.',
                ],
            ],
            [
                'q' => 'Como consulto se meu nome está negativado?',
                'a' => [
                    'Os birôs de crédito (como Serasa e SPC) oferecem consulta pelos canais oficiais. Guarde o extrato da consulta se for apresentar a situação ao escritório ou em reclamação administrativa.',
                ],
            ],
            [
                'q' => 'A empresa cortou minha luz, água, telefone ou internet. Quando o corte é indevido?',
                'a' => [
                    'Há regras próprias para serviços essenciais e para aviso prévio. O que se aplica depende do contrato, da fatura e da comunicação do corte. Vale guardar esses documentos.',
                ],
            ],
            [
                'q' => 'Recebi uma cobrança indevida. Tenho direito de receber o valor de volta?',
                'a' => [
                    'O Código de Defesa do Consumidor prevê regras sobre cobrança indevida. Se e como a devolução ocorre depende da prova do pagamento e da natureza da cobrança. Não há valor ou prazo prometido nesta página.',
                ],
            ],
            [
                'q' => 'O produto chegou com defeito ou não foi entregue. Quais são os meus direitos?',
                'a' => [
                    'O CDC trata de vício do produto e de descumprimento da oferta. Em geral, a pessoa pode exigir o cumprimento, a substituição ou outras medidas previstas na lei, conforme o caso.',
                ],
            ],
            [
                'q' => 'A loja não cumpriu o que anunciou. O que posso exigir?',
                'a' => [
                    'A oferta vincula o fornecedor (CDC). Guarde o anúncio, o pedido e as comunicações. Os caminhos administrativos e a análise jurídica partem desses documentos.',
                ],
            ],
            [
                'q' => 'Não consigo cancelar um serviço ou receber o reembolso. Como resolver?',
                'a' => [
                    'Registre o pedido de cancelamento ou reembolso com protocolo. Se não houver resposta útil, use Procon ou consumidor.gov.br. Um advogado pode auxiliar se a controvérsia permanecer.',
                ],
            ],
            [
                'q' => 'Preciso de advogado ou posso resolver pelo Procon ou pelo consumidor.gov.br?',
                'a' => [
                    'Muitas situações começam pelos canais administrativos (fornecedor, Procon, consumidor.gov.br). A análise jurídica entra quando a pessoa quer orientação sobre o contrato ou medidas além desses canais. A escolha é sua.',
                ],
            ],
        ],
    ],
];
