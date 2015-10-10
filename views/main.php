<!DOCTYPE HTML>
<html>
    <head>
        <title> ARTICLES </title>
        <meta charset="UTF-8" content="text/html"/>
    </head>
    <body>
        <?php foreach($test->array_temp as $a): ?>
        <h2><a href="index.php?specific_article=<?=$a?>"><?php echo $a; ?></h2>
        <?php endforeach; ?>
        <a href="<?php echo "__DIR__ ". '/../add_article.php'; ?>">  Добавить статью</a>
        
        
        
        
    </body>
</html>