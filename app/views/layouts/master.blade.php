<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todos List Fullstack App | PHP Cource</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link href="<?= asset('css/custom.css') ?>" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <?php 
                $page_file = VIEWS_PATH."/{$page}.blade.php";
                if (is_readable($page_file)) {
                    require_once $page_file;
                } else {
                    die("Unable to load requested view file: {$page_file}");
                }
            ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="<?= asset('js/script.js') ?>" type="module"></script>
    </body>
</html>