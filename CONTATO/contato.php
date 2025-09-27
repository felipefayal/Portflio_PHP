<?php
    $pageTitle = 'Contato // Felipe Fayal';
   
    $pageStyles = 'CONTATO/_contato.css';
    require_once '../PARTIALS/header.php'; 
?>

<main class="main-content">
    <div class="terminal-window contact-page-window">
        <div class="terminal-header">
            <div class="terminal-title">COMMS.APP - INITIATE_CONNECTION // Secure Channel</div>
        </div>
        <div class="terminal-body">
            
            <div class="contact-grid">

                <div class="form-container">
                    <p class="form-title">> SEND_TRANSMISSION // Encrypted Message Packet</p>
                    
                    
                    <form action="https://formspree.io/f/mwprvpja" method="POST" class="contact-form">
                        <label for="sender-id" class="form-label">SENDER ID:</label>
                        <input type="email" id="sender-id" name="email" class="form-input" placeholder="seu_email@dominio.com" required>

                        <label for="subject-line" class="form-label">SUBJECT_LINE:</label>
                        <input type="text" id="subject-line" name="subject" class="form-input" placeholder="Assunto da mensagem" required>

                        <label for="message-body" class="form-label">MESSAGE BODY:</label>
                        <textarea id="message-body" name="message" class="form-textarea" rows="6" placeholder="Digite sua mensagem aqui..." required></textarea>

                        <button type="submit" class="submit-button">[ TRANSMIT_DATA ]</button>
                    </form>

                </div>

                <div class="links-container">
                    <p class="links-title">> LINKS_DE_PROTOCOLO // Conecte-se comigo</p>
                    
                    
                    <ul class="protocol-list">
                        <li>
                            <a href="https://www.linkedin.com/in/felipe-fayal-67325b387/" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo $basePath; ?>IMG/Emojis_Social_48x48/Emojis_Social_48x48_37.png" alt="Ícone linkedin" class="protocol-icon">
                                <span>Linkedin_profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/felip_efayal/?utm_source=ig_web_button_share_sheet" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo $basePath; ?>IMG/Emojis_Social_48x48/Emojis_Social_48x48_2.png" alt="Ícone instagram" class="protocol-icon">
                                <span>Instagram_profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/felipefayal" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo $basePath; ?>IMG/Emojis_Social_48x48/Emojis_Social_48x48_35.png" alt="Ícone github" class="protocol-icon">
                                <span>GitHub_profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:felipefayal514@gmail.com">
                                <img src="<?php echo $basePath; ?>IMG/Emojis_Social_48x48/Emojis_Social_48x48_18.png" alt="Ícone email" class="protocol-icon">
                                <span>felipefayal514@gmail.com</span>
                            </a>
                        </li>
                    </ul>

                    <p class="quote">> Let's build the future, one byte at a time.</p>
                </div>

            </div>

        </div>
    </div>
</main>

<?php
    require_once '../PARTIALS/footer.php'; 
?>