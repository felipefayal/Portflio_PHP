<?php
    $pageTitle = 'Habilidades // Felipe Fayal';
    
    $pageStyles = 'HABILIDADES/_habilidades.css';
    require_once '../PARTIALS/header.php'; 
?>

<main class="main-content">
    <div class="terminal-window skills-page-window">
        <div class="terminal-header">
            <div class="terminal-title">TECH_STACK.DLL - CORE_CAPABILITIES // Full Stack Loadout</div>
        </div>
        <div class="terminal-body">
            <div class="tab-nav">
                <button class="tab-button active" data-tab="matriz-habilidades">[ Matriz de Habilidades ]</button>
                <button class="tab-button" data-tab="registros-academicos">[ Registros Acadêmicos ]</button>
                <button class="tab-button" data-tab="historico-profissional">[ Histórico Profissional ]</button>
            </div>

            <div class="tab-content-container">
                
                <section id="matriz-habilidades" class="tab-content active">
                    <p class="tab-description">> Um inventário das tecnologias e ferramentas que utilizo para construir aplicações web modernas e eficientes.</p>
                    <div class="skills-grid">
                        <div class="skill-category">
                             <p class="category-title">> FRONT-END & INTERFACE</p>
                             <ul class="skill-list-icons">
                                <li><img src="<?php echo $basePath; ?>IMG/HTMLicon.png" alt="HTML5" class="skill-icon"> HTML5</li>
                                <li><img src="<?php echo $basePath; ?>IMG/CSSicon.png" alt="CSS3" class="skill-icon"> CSS3</li>
                                <li><img src="<?php echo $basePath; ?>IMG/JSicon.png" alt="JavaScript" class="skill-icon"> JavaScript (ES6+)</li>
                                <li><img src="<?php echo $basePath; ?>IMG/REACTicon.png" alt="React.js" class="skill-icon"> React.js</li>
                                <li><img src="<?php echo $basePath; ?>IMG/TAILWINDicon.png" alt="Tailwind CSS" class="skill-icon"> Tailwind CSS</li>
                                <li><img src="<?php echo $basePath; ?>IMG/RESPONSIVOicon.png" alt="Design Responsivo" class="skill-icon"> Design Responsivo</li>
                             </ul>
                        </div>
                        <div class="skill-category">
                            <p class="category-title">> BACK-END & LÓGICA</p>
                            <ul class="skill-list-icons">
                                <li><img src="<?php echo $basePath; ?>IMG/PHPicon.png" alt="PHP" class="skill-icon"> PHP</li>
                                <li><img src="<?php echo $basePath; ?>IMG/PYTHONicon.png" alt="Python" class="skill-icon"> Python</li>
                                <li><img src="<?php echo $basePath; ?>IMG/Cicon.png" alt="C" class="skill-icon"> C</li>
                            </ul>
                        </div>
                        <div class="skill-category">
                            <p class="category-title">> BANCO DE DADOS & DEVOPS</p>
                            <ul class="skill-list-icons">
                                <li><img src="<?php echo $basePath; ?>IMG/SQLicon.png" alt="SQL" class="skill-icon"> SQL</li>
                                <li><img src="<?php echo $basePath; ?>IMG/MYSQLicon.png" alt="MYSQL" class="skill-icon"> MySQL</li>
                                <li><img src="<?php echo $basePath; ?>IMG/GIT_AND_GITHUBicon.png" alt="Git" class="skill-icon"> Git / GitHub</li>
                                <li><img src="<?php echo $basePath; ?>IMG/APACHEicon.png" alt="APACHE" class="skill-icon"> Apache</li>
                                <li><img src="<?php echo $basePath; ?>IMG/FTPicon.png" alt="FTP | SFTP" class="skill-icon"> FTP / SFTP</li>
                                <li><img src="<?php echo $basePath; ?>IMG/HOSTicon.png" alt="GHW" class="skill-icon"> Gerenciamento de Hospedagem Web</li>
                            </ul>
                        </div>
                         <div class="skill-category">
                             <p class="category-title">> FERRAMENTAS & OUTROS</p>
                             <ul class="skill-list-icons">
                                <li><img src="<?php echo $basePath; ?>IMG/VSCODEicon.png" alt="VS Code" class="skill-icon"> VS Code</li>
                                <li><img src="<?php echo $basePath; ?>IMG/MYPHPADMINicon.png" alt="MYPHPADMIN" class="skill-icon"> phpMyAdmin</li>
                                <li><img src="<?php echo $basePath; ?>IMG/FILEZILLAicon.png" alt="FILEZILLA" class="skill-icon"> FileZilla</li>
                                <li><img src="<?php echo $basePath; ?>IMG/XAMPPicon.png" alt="XAMPP" class="skill-icon"> XAMPP</li>
                                <li><img src="<?php echo $basePath; ?>IMG/CPicon.png" alt="CPANEL" class="skill-icon"> CP/Similares</li>
                             </ul>
                        </div>
                    </div>
                </section>

                <section id="registros-academicos" class="tab-content">
                    <p class="tab-description">> Detalhes sobre minha formação acadêmica e a base teórica que fundamenta meu trabalho prático.</p>
                    <ul class="log-list">
                        <li><strong>[ 2025 - Cursando ]</strong> Ciência da Computação</li>
                        <li><strong>Instituição:</strong> Faci Wyden</li>
                        <li><strong>Status:</strong> Em Andamento (2º Período)</li>
                        <li><strong>Foco:</strong> Fundamentos de algoritmos, estruturas de dados e desenvolvimento de software.</li>
                    </ul>
                </section>

                <section id="historico-profissional" class="tab-content">
                     <p class="tab-description">> Meu percurso no mercado de trabalho, aplicando conhecimento em projetos reais.</p>
                     <ul class="log-list">
                        <li><strong>&gt; STATUS:</strong> Buscando novos desafios.</li>
                        <li>Adquiri experiência prática desenvolvendo projetos como freelancer na plataforma Fiverr, com foco na entrega de soluções web eficientes e sob demanda.</li>
                        <li>Atualmente, meu objetivo é integrar uma equipe dinâmica como estagiário, onde eu possa colaborar, aprender e contribuir para o desenvolvimento de sistemas robustos.</li>
                    </ul>
                    <ul class="log-list">
                        <li><strong>&gt; PROJETO ATUAL:</strong> Desenvolvedor Full Stack no DescarteAQ (Enactus)</li>
                        <li><strong>Cargo:</strong> Desenvolvedor Full Stack (Enactus)</li>
                        <li><strong>Organização:</strong> Enactus Faci Wyden</li>
                        <li><strong>Período:</strong> 08/25 – Presente</li>
                        <li><strong>Projeto:</strong> DescarteAQ (https://descarteaquiwyden.com.br/)</li>
                        <br>
                        <li>Atuei como Desenvolvedor Full Stack no projeto DescarteAQ, uma iniciativa da Enactus Faci Wyden focada em otimizar o descarte e a reciclagem.</li>
                        <li>Liderei a frente de codificação, trabalhando em estreita colaboração com outros membros da equipe para conceber, desenvolver e implementar a plataforma web. Minhas responsabilidades abrangeram:</li>
                        <br>
                        <li>
                            <ul>
                                <li><strong>Desenvolvimento Front-End:</strong> Construção da interface de usuário responsiva e intuitiva, garantindo uma experiência fluida para os usuários.</li>
                                <li><strong>Desenvolvimento Back-End:</strong> Implementação da lógica de servidor, APIs e integração com o banco de dados para funcionalidades como cadastro de pontos de coleta, gestão de usuários e comunicação com o banco de dados.</li>
                                <li><strong>Colaboração em Equipe:</strong> Participação ativa em reuniões de planejamento, revisão de código e apoio técnico aos demais desenvolvedores.</li>
                            </ul>
                        </li>
                        <br>
                        <li>Este projeto me permitiu aplicar e aprofundar meus conhecimentos em PHP, SQL, JavaScript e Apache, enquanto contribuía para uma solução com impacto social real.</li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</main>

<?php
    require_once '../PARTIALS/footer.php'; 
?>