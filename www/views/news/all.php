<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Новости украшают наш быт</title>
</head>
<body>

<?php foreach ($items as $item): ?>
    <article>
        <h1><?php echo $item->title; ?></h1>
        <div><?php echo $item->text; ?></div>
    </article>
<?php endforeach; ?>

</body>
</html>