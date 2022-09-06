<!DOCTYPE html>
<?php
    //session_start();
    //$_SESSION['usuario'] = "Adriano";
    

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    
    <?php
    foreach($_SESSION['usuario'] as $dados){
            var_dump($dados);
            echo "<br>";
               
        }
    ?>
</body>
</html>