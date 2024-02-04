<?php

// migrations.php

return [
    'table_storage' => [
        'table_name' => 'doctrine_migration_versions',
    ],
    'migrations_paths' => [
        'Jvuzzell\BankStatementProcessing\migrations' => __DIR__ . '/Jvuzzell/BankStatementProcessing//migrations',
    ],
    'all_or_nothing' => true,
    'check_database_platform' => false,
];
