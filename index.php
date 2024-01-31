<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilmar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <?php $nome="NutriNilMar" ?>
    <header>
    
    <h1>  <?php  echo "Empresa $nome"?></h1> 
    </header>
    <main>
    <?php 
    $pratos=array("Segunda: Feijoada","Terca: Parmegiana","Quarta: Feijão tropeiro","Quinta: File mignon","Sexta: linguica toscana");
    $imagens=array("feijoada","parmegiana","tropeiro","file","toscana");
    for ($i=0; $i < 5; $i++) { 
        echo "<div class='cardapio'>{$pratos[$i]} <figure><img src='images/{$imagens[$i]}.jpg' ></figure></div>";
    }
     
    ?>

    <footer>
        <div>
            <p><?php  echo "Empresa $nome (Emprendimento da NilMar enterprise)"?></p>
            <p>Regente Feijó</p>
        </div>
    </footer>
</body>
</html>