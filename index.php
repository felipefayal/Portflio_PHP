<?php
    
    $pageTitle = 'Início // Felipe Fayal';
    $pageStyles = 'CSS/_home.css'; 
    require_once 'PARTIALS/header.php'; 

?>

<main class="main-content">

    <div class="terminal-window">

        <div class="terminal-header">
            <div class="terminal-title">DEV_CONSOLE.EXE // SYSTEM_ACTIVE</div>
            <div class="terminal-controls">
                <span class="control-btn minimize"></span>
                <span class="control-btn maximize"></span>
                <span class="control-btn close"></span>
            </div>
        </div>

        <div class="terminal-body">
            <p class="terminal-prompt">> HELLO_WORLD();</p>
            
            <h1 class="meu-nome">Felipe Fayal</h1>
            <h2>Desenvolvedor Web Full Stack</h2>
            
            <ul class="terminal-list">
                <li>> Construindo experiências digitais intuitivas do conceito à implantação.</li>
                <li>> Especializado em soluções escaláveis para toda a web stack.</li>
                <li>> Minha experiência abrange Front-End, Back-End e Gerenciamento de Banco de Dados.</li>
            </ul>

           <a href="<?php echo $basePath; ?>PROJETOS/projetos.php" class="cta-button">Ver Projetos</a>
           
        </div>

    </div>

</main>

<?php
    require_once 'PARTIALS/footer.php'; 
?>