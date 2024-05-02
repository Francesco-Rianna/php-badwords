<?php
 $paragraph = $_GET['paragraph'] ;
 $replaceString= str_replace('juve', '***', $paragraph)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p> Ecco <?php echo $paragraph?> </p>
    </div>

    <div>
        <h3>
            Ecco la lunghezza del paragrafo <?php echo strlen($paragraph)?>
        </h3>

        <h3>
            Ecco tutto con la parola censurata <?php echo $replaceString ?>
        </h3>

        <h3> Ecco la lunghezza del testo con la parola censurate <?php echo strlen($replaceString)?></h3>

        
    </div>
</body>
</html>