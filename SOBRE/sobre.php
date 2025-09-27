<?php
    $pageTitle = 'Sobre Mim // Felipe Fayal';

    $pageStyles = 'SOBRE/_sobre.css';
    require_once '../PARTIALS/header.php'; 
?>

<main class="main-content">
    <div class="sobre-grid-container">

        <div class="terminal-window intro-panel">
            <div class="terminal-header">
                <div class="terminal-title">DEV_PROFILE // IDENTITY.INI</div>
            </div>
            <div class="terminal-body">
                <div class="intro-content">
                    <div class="avatar-container">
                        <img src="<?php echo $basePath; ?>IMG/PERFIL.png" alt="Avatar de Felipe Fayal em pixel art" class="avatar-img">
                    </div>
                    <div class="texto-container">
                        <p class="prompt">> HELLO_WORLD();</p>
                        <h1>FELIPE FAYAL</h1>
                        <h2>DIGITAL ARCHITECT // FULL STACK WEB DEVELOPER</h2>
                        
                        <p>Olá, mundo! Sou Felipe Fayal, um Desenvolvedor Web Full Stack e estudante de Ciência da Computação. Minha missão é traduzir ideias em experiências digitais completas e funcionais.</p>
                        <p>Navego com fluidez entre a arquitetura da interface no Front-End e a lógica de servidores e bancos de dados no Back-End, sempre focado em construir soluções robustas, eficientes e inovadoras.</p>
                        
                        <a href="<?php echo $basePath; ?>PROJETOS/projetos.php" class="cta-button">[ ACESSAR PROJETOS ]</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="terminal-window skills-panel">
            <div class="terminal-header">
                <div class="terminal-title">> HABILIDADES INTERPESSOAIS // Competências Humanas</div>
            </div>
            <div class="terminal-body">
                <ul class="skills-list">
                    <li>> Comunicação e Apresentação</li>
                    <li>> Resolução de Problemas</li>
                    <li>> Colaboração e Trabalho em Equipe</li>
                    <li>> Aprendizado Contínuo</li>
                    <li>> Adaptabilidade</li>
                </ul>
            </div>
        </div>

        <div class="side-panels-container">
            
            <div class="terminal-window side-panel">
                <div class="terminal-header">
                    <div class="terminal-title">> HABILIDADES TÉCNICAS // Ferramentas Principais</div>
                </div>
                <div class="terminal-body">
                    <ul class="icon-skills-list">
                        
                        <li><img src="<?php echo $basePath; ?>IMG/HTMLicon.png" alt="Ícone HTML5" class="skill-icon"> HTML5</li>
                        <li><img src="<?php echo $basePath; ?>IMG/CSSicon.png" alt="Ícone CSS3" class="skill-icon"> CSS3</li>
                        <li><img src="<?php echo $basePath; ?>IMG/JSicon.png" alt="Ícone JS" class="skill-icon"> JavaScript</li>
                        <li><img src="<?php echo $basePath; ?>IMG/PHPicon.png" alt="Ícone PHP" class="skill-icon"> PHP</li>
                    
                    </ul>
                </div>
            </div>

            <div class="terminal-window side-panel">
                <div class="terminal-header">
                    <div class="terminal-title">> FOCO ATUAL // Aprendendo...</div>
                </div>
                 <div class="terminal-body">
                    <p>Atualmente aprofundando conhecimentos em React e Node.js para construção de sistemas ainda mais dinâmicos.</p>
                </div>
            </div>

        </div>

    </div>
</main>

<?php
    require_once '../PARTIALS/footer.php'; 
?>