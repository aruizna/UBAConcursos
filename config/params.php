<?php

return [
    'adminEmail' => $_ENV["MAIL_ADMIN"] ?? 'admin@example.com',
    'senderEmail' => $_ENV["MAIL_USER"] ?? 'concursos-NORESPONDER@uba.ar',
    'senderName' => $_ENV["MAIL_USER_NAME"] ?? 'CONCURSOS UBA',
];
