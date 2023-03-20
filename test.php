<?php
$menu = [
    'home' => [
        'type' => 'header',
        'path' => 'index.php',
        'name' => 'Domov',
    ],
    'portfolio' => [
        'type' => 'header',
        'path' => 'portfolio.php',
        'name' => 'Portfólio',
    ],
    'faq' => [
        'type' => 'header',
        'path' => 'qna.php',
        'name' => 'Q&A',
    ],
    'contact' => [
        'type' => 'header',
        'path' => 'kontakt.php',
        'name' => 'Kontakt',
    ],
];

$f = fopen('source/menu.csv', 'w');
fputcsv($f, array('Type', 'Path', 'Name'));
foreach ($menu as $item) {
    fputcsv($f, array($item['type'], $item['path'], $item['name']));
}

fclose($f);
?>
