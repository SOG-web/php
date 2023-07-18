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
        'releaseYear' => '1968',
        'purchaseUrl' => 'https://exapm.com'
    ],
    ['name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => '2021',
        'purchaseUrl' => 'https://exapm.com'
    ],
    ['name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => '2011',
        'purchaseUrl' => 'https://exapm.com'
    ]
];

function filterByAuthor($books, $author): array
{
    $filteredBooks = [];

    foreach ($books as $book) {
        if($book['author'] === $author) {
            $filteredBooks[] = $book;
        }
    }

    return $filteredBooks;
}
?>

<ul>
    <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By (<?= $book['author'] ?>)
            </a>
        </li>
    <?php endforeach; ?>
</ul>


</body>
</html>
