$(document).ready(function() {
    // Charger les traductions depuis le serveur (PHP)
    $.getJSON('translations.php', function(translations) {
        let currentLang = 'fr';

        function updateContent() {
            // Mettre à jour le texte de la navbar
            $('nav a, #changeLangBtn').each(function(index, element) {
                const key = $(element).data('translation-key');
                $(element).text(translations[currentLang][key]);
            });

            // Mettre à jour le texte des articles
            $('#articles article').each(function(index, element) {
                const titleKey = $(element).data('title-key');
                const contentKey = $(element).data('content-key');

                $('h2', element).text(translations[currentLang][titleKey]);
                $('p', element).text(translations[currentLang][contentKey]);
            });

            // Mettre à jour la direction du texte (LTR ou RTL)
            $('html').attr('dir', (currentLang === 'ar') ? 'rtl' : 'ltr');
        }

        updateContent();

        // Gérer l'événement de clic sur le bouton de changement de langue
        $('#changeLangBtn').click(function() {
            // Changer la langue à chaque clic (fr -> en -> ar -> fr)
            currentLang = (currentLang === 'fr') ? 'en' : (currentLang === 'en') ? 'ar' : 'fr';
            updateContent();
        });
    });
});
