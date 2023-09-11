<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>Test</title>
</head>
<body>
    <article>
       <h1><?= $post->title; ?></h1> 
       <!-- We are recieving the post variable from route 
        'post' => $post_path -->
        <div>
            <?= $post->body; ?>
        </div>
    </article>

    <a href="/">Go Back</a>

   </body>
</html>