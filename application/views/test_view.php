<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>
<body>
    <pre>
        <?php var_dump($_SERVER)?>
    </pre>
    <div>
        <h1><?php echo $title; ?></h1>
    </div>
    <div >
        <h1><?php echo $_ENV['DB_HOST']; ?></h1>
    </div>
    <div>
        <h1>ENTORNO</h1>
        <h1><?php echo $_ENV['ENVIRONMENT']; ?></h1>
    </div>
</body>
</html>