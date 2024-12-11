<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions & Filters</title>
</head>
<body>
    
    <?php 
        $books = [
            [
                'name' => 'Do Android Dream of Electronic Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project hail Mary',
                'author' => 'Adny Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Adny Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ]
        ];

        function fitlerByAuthor($books, $author) {
            $filterBooks = [];

            foreach ($books as $book) {
                if ($book['author'] == $author) {
                    $filterBooks[] = $book;
                }
            }

            return $filterBooks;
        }
    ?>

    <ul>
        <?php foreach (fitlerByAuthor($books, 'Adny Weir') as $book) : ?>
            <li>

                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
                </a>

            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>