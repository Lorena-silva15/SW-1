<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $nome="Palola";
    ?>
    
    <P> Oi meu nome é <?php echo "$nome"; ?></P>
    <P> Oi meu nome é <?php echo $nome; ?></P>
    <?php echo "<P> OI meu nome é $nome</p>"; ?>

    <?php echo "<P> OI meu nome é ". $nome . "</p>"; ?>

</body>
</html>