<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

</head>
<body>

<?php
$books = [
    ['name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'https://exapm.com'
    ],
    ['name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'https://exapm.com'
    ]
];
?>

<ul>
    <?php foreach ($books as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>


</body>
</html>
