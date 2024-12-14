<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Functions</title>
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

        // Lambda function
        function filter($items, $fn) {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($fn($item)) {
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

        $filteredBooks = filter($books, function($book) {
            return $book['releaseYear'] >= 2000;
        });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>

                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
                </a>

            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>