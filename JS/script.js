document.addEventListener('DOMContentLoaded', function() {

        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        function handleTabClick(event) {
            
            const targetTabId = event.currentTarget.getAttribute('data-tab');
            const targetTabContent = document.getElementById(targetTabId);

            tabButtons.forEach(button => {
                button.classList.remove('active');
            });

            event.currentTarget.classList.add('active');

            tabContents.forEach(content => {
                content.classList.remove('active'); 
            });

            if (targetTabContent) {
                targetTabContent.classList.add('active');
            }
        }

        tabButtons.forEach(button => {
            button.addEventListener('click', handleTabClick);
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        
        const filterButtons = document.querySelectorAll('.filter-button');
        const projectCards = document.querySelectorAll('.project-card');

        if (filterButtons.length === 0) {
            return;
        }

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                button.classList.add('active');

                const filterValue = button.getAttribute('data-filter');

                projectCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');

                    if (filterValue === 'all' || cardCategory === filterValue) {
                        card.classList.remove('hide'); 
                    } else {
                        card.classList.add('hide'); 
                    }
                });
            });
        });
    });