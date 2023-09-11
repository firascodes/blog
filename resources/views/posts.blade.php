<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>Test</title>
</head>
<body>
    <?php foreach ($posts as $post) : ?>
    <article>
        <h1>
            <a href="/posts/<?= $post->slug; ?>"> 
                <?= $post->title; ?> </a>
            </h1>
        <div>
            <?= $post->excerpt ; ?>
        </div>
    </article>
    <?php endforeach; ?>
   </body>
</html>