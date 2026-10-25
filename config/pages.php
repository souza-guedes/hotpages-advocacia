<?php

declare(strict_types=1);

// Uma entrada por hotpage. A chave é o slug da rota (também listado em public/.htaccess).
// Textos provisórios, tirados da WDLC 1.1 (ângulo da página e perguntas da seção 6).
// A copy final e as respostas das perguntas vêm das #11 e #12 (fase 4).

return [
    'imobiliario' => [
        'area' => 'Direito Imobiliário',
        'title' => 'Direito Imobiliário: usucapião, despejo e leilão | Souza Guedes Advogados',
        'description' => 'Entenda a usucapião, o despejo, a arrematação em leilão e o atraso na entrega do imóvel, e saiba quais documentos reunir.',
        'heading' => 'Direito Imobiliário: entenda os caminhos para o seu imóvel',
        'intro' => 'Regularização por usucapião, despejo, arrematação em leilão e atraso na entrega do imóvel. Veja o que costuma ser analisado (matrícula, contrato, edital, comprovantes de posse) e quais documentos reunir.',
        'whatsapp_topic' => 'Direito Imobiliário',
        'faq' => [
            'Moro há anos num imóvel sem escritura. Posso regularizar por usucapião?',
            'Qual a diferença entre usucapião em cartório e usucapião na Justiça?',
            'Quais documentos preciso reunir para começar uma usucapião?',
            'O inquilino parou de pagar o aluguel. Como funciona o despejo?',
            'Comprei um imóvel em leilão e ele está ocupado. Como faço para tomar posse?',
            'O que devo verificar no edital e na matrícula antes de dar um lance num leilão?',
            'A construtora atrasou a entrega do meu apartamento. Quais são os meus direitos?',
            'Qual a diferença entre reintegração de posse e imissão na posse?',
        ],
    ],
    'saude' => [
        'area' => 'Direito de Saúde',
        'title' => 'Negativa do plano de saúde: entenda seus direitos | Souza Guedes Advogados',
        'description' => 'Saiba o que é a negativa de cobertura do plano de saúde, quais documentos guardar e quais caminhos existem.',
        'heading' => 'O plano de saúde negou o tratamento? Entenda seus direitos',
        'intro' => 'O que é a negativa de cobertura, quais documentos guardar (negativa por escrito, relatório e prescrição médica, contrato do plano) e quais caminhos existem, administrativos e judiciais.',
        'whatsapp_topic' => 'Direito de Saúde',
        'faq' => [
            'O plano de saúde negou meu medicamento ou tratamento. O que posso fazer?',
            'O plano pode negar internação, exame ou cirurgia que o médico indicou?',
            'Quais documentos devo guardar quando recebo uma negativa do plano?',
            'O que é tutela de urgência e em que casos ela é pedida?',
            'O plano pode cancelar meu contrato? E se eu estiver em tratamento?',
            'Como saber se o reajuste do meu plano é abusivo?',
            'Fui cobrado indevidamente pela operadora. Como contestar?',
        ],
    ],
    'consumidor' => [
        'area' => 'Direito do Consumidor',
        'title' => 'Negativação e cobrança indevida: o que fazer | Souza Guedes Advogados',
        'description' => 'Veja como consultar a negativação, quais comprovantes guardar e os caminhos possíveis, inclusive pelo Procon e pelo consumidor.gov.br.',
        'heading' => 'Nome negativado ou cobrança indevida? Veja como funciona',
        'intro' => 'Como consultar se o nome está negativado, quais comprovantes guardar e o que você pode fazer antes de procurar um advogado: reclamação ao fornecedor, protocolo, Procon e consumidor.gov.br.',
        'whatsapp_topic' => 'Direito do Consumidor',
        'faq' => [
            'Meu nome foi negativado por uma dívida que não reconheço. O que fazer?',
            'Como consulto se meu nome está negativado?',
            'A empresa cortou minha luz, água, telefone ou internet. Quando o corte é indevido?',
            'Recebi uma cobrança indevida. Tenho direito de receber o valor de volta?',
            'O produto chegou com defeito ou não foi entregue. Quais são os meus direitos?',
            'A loja não cumpriu o que anunciou. O que posso exigir?',
            'Não consigo cancelar um serviço ou receber o reembolso. Como resolver?',
            'Preciso de advogado ou posso resolver pelo Procon ou pelo consumidor.gov.br?',
        ],
    ],
];
