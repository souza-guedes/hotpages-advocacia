<?php

declare(strict_types=1);

// Dados oficiais da banca (site-institucional/data/firm-profile.json; WDLC 1.2, seção 5).

return [
    'name' => 'Souza Guedes Advogados',
    'partners' => [
        [
            'name' => 'Rodrigo Guedes da Silva',
            'oab' => 'OAB/SP nº 538.416',
            'role' => 'Sócio fundador',
            'bio' => 'Sócio fundador. Graduado em Direito pela Universidade São Judas Tadeu (USJT).',
            'photo' => '/assets/partners/rodrigo.webp',
        ],
        [
            'name' => 'Lays Regina de Souza',
            'oab' => 'OAB/SP nº 511.204',
            'role' => 'Sócia fundadora',
            'bio' => 'Sócia fundadora. Graduada em Direito pela Universidade São Judas Tadeu (USJT).',
            'photo' => '/assets/partners/lays.webp',
        ],
    ],
    'phone_display' => '(11) 93619-1904',
    'phone_e164' => '+5511936191904',
    'whatsapp' => '5511936191904',
    'email' => 'souzaguedes.adv@gmail.com',
    'address' => 'Rua Uhland, 784, Casa 1, Vila Ema, São Paulo/SP, CEP 03283-000',
    'address_lines' => [
        'Rua Uhland, 784, Casa 1',
        'Vila Ema, São Paulo/SP',
        'CEP 03283-000',
    ],
    'hours' => 'Segunda a sexta, das 10h às 18h',
    'hours_short' => 'Seg. a sex., 10h às 18h',
];
