<?php
    $pageTitle = 'Projetos // Felipe Fayal';
    $pageStyles = 'PROJETOS/_projetos.css';
    require_once '../PARTIALS/header.php'; 
?>

<main class="main-content">
    <div class="terminal-window projects-page-window">
        <div class="terminal-header">
            <div class="terminal-title">PROJECTS.GIT - DEPLOY_S.WOOLEX // FILE_LIST</div>
        </div>
        <div class="terminal-body">
            
            <div class="filter-nav">
                <button class="filter-button active" data-filter="all">ALL</button>
                <button class="filter-button" data-filter="frontend">FRONTEND</button>
                <button class="filter-button" data-filter="fullstack">FULLSTACK</button>
            </div>

            <div class="projects-grid">

                <div class="project-card" data-category="fullstack">
                    <div class="project-thumbnail-container">
                        <img src="<?php echo $basePath; ?>IMG/PROJECT1.png" alt="Thumbnail do Projeto 1" class="project-thumbnail">
                    </div>
                    <div class="project-details">
                        <h3 class="project-title">E-COMMERCE PLATFORM</h3>
                        <p class="project-description">Full stack e-commerce com autenticação de usuário e gateway de pagamento.</p>
                        <div class="project-tags">
                            <span>PHP</span>
                            <span>SQL</span>
                            <span>JavaScript</span>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-category="fullstack">
                    <div class="project-thumbnail-container">
                        <img src="<?php echo $basePath; ?>IMG/PROJECT2.png" alt="Thumbnail do Projeto 1" class="project-thumbnail">
                    </div>
                    <div class="project-details">
                        <h3 class="project-title">Projeto DescarteAQ</h3>
                        <p class="project-description">Plataforma web full stack para otimizar o descarte e a reciclagem, desenvolvida como uma iniciativa da Enactus. Inclui funcionalidades como cadastro de pontos de coleta e gestão de usuários.</p>
                        <div class="project-tags">
                            <span>PHP</span>
                            <span>SQL</span>
                            <span>JavaScript</span>
                            <span>HTML5</span>
                            <span>CSS3</span>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-category="fullstack">
                    <div class="project-thumbnail-container">
                        <img src="<?php echo $basePath; ?>IMG/PROJECT3.png" alt="Thumbnail do Projeto 1" class="project-thumbnail">
                    </div>
                    <div class="project-details">
                        <h3 class="project-title">Snake Game</h3>
                        <p class="project-description">Um jogo Snake com estética neon, onde o desafio é comer itens da mesma cor da cobra, que muda a cada ponto. Possui ranking online persistente (Normal/Difícil) desenvolvido com JavaScript no front-end e PHP/SQL no back-end.</p>
                        <div class="project-tags">
                            <span>PHP</span>
                            <span>SQL</span>
                            <span>JavaScript</span>
                            <span>HTML5</span>
                            <span>CSS3</span>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-category="fullstack">
                    <div class="project-thumbnail-container">
                        <img src="<?php echo $basePath; ?>IMG/PROJECT4.png" alt="Thumbnail do Projeto 1" class="project-thumbnail">
                    </div>
                    <div class="project-details">
                        <h3 class="project-title">Chatbot Inteligente com API</h3>
                        <p class="project-description">Chatbot de console feito em Python orientado a objetos. Ele identifica a intenção do usuário e se integra com a API da OpenWeatherMap para fornecer a previsão do tempo em tempo real para qualquer cidade.</p>
                        <div class="project-tags">
                            <span>PYTHON</span>
                            <span>API REST</span>
                            <span>JSON</span>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-category="frontend">
                    <div class="project-thumbnail-container">
                        <img src="<?php echo $basePath; ?>IMG/PROJECT5.png" alt="Thumbnail do Projeto 2" class="project-thumbnail">
                    </div>
                    <div class="project-details">
                        <h3 class="project-title">Cosmic Canvas Studio</h3>
                        <p class="project-description">Site institucional para um estúdio de design, que usa JavaScript para carregar componentes reutilizáveis (como header e footer) de forma dinâmica em suas múltiplas páginas, garantindo um projeto coeso e de fácil manutenção.</p>
                        <div class="project-tags">
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                        </div>
                    </div>
                </div>

                <div class="project-card" data-category="frontend">
                    <div class="project-thumbnail-container">
                        <img src="<?php echo $basePath; ?>IMG/PROJECT6.png" alt="Thumbnail do Projeto 2" class="project-thumbnail">
                    </div>
                    <div class="project-details">
                        <h3 class="project-title">Bet Educacional</h3>
                        <p class="project-description">Projeto acadêmico que simula jogos clássicos de cassino (Blackjack, Roleta, etc.) sem o uso de dinheiro real, focado em demonstrar habilidades de lógica de programação e desenvolvimento front-end.</p>
                        <div class="project-tags">
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<?php
    require_once '../PARTIALS/footer.php'; 
?>