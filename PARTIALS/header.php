<?php

if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '127.0.0.1') {
    
    $basePath = '/MeuPortifolio/';
} else {
    
    $basePath = '/';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $basePath; ?>CSS/style.css">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'MeuPortifolio'; ?></title>

    <link rel="icon" type="image/png"  href="<?php echo $basePath; ?>IMG/logo.png">
    
    
<?php
    
if (isset($pageStyles)) {
    echo '<link rel="stylesheet" href="' . $basePath . $pageStyles . '">';
}
?>

</head>
<body>

<header>
        <div class="logos-prin">
            <a href="<?php echo $basePath; ?>index.php"> <img class="logo" src="<?php echo $basePath; ?>IMG/logo.png" alt="logo"></a>
        </div>      
    <nav>
        <ul class="nav-conteiner-desktop">
            <li><a href="<?php echo $basePath; ?>index.php" id="nav-inicio">início</a></li> 
            <li><a href="<?php echo $basePath; ?>SOBRE/sobre.php" id="nav-sobre">Sobre Mim</a></li> 
            <li><a href="<?php echo $basePath; ?>HABILIDADES/habilidades.php" id="nav-habilidades">Habilidades</a></li>
            <li><a href="<?php echo $basePath; ?>PROJETOS/projetos.php" id="nav-projetos">Projetos</a></li>
            <li><a href="<?php echo $basePath; ?>CONTATO/contato.php" id="nav-contato">Contato</a></li>
        </ul>
    </nav>
    
</header>

</body>
</html>