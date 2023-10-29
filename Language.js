var languageOptions = document.querySelectorAll('[data-language]');

languageOptions.forEach(function(option) {
    option.addEventListener('click', function(event) {
        event.preventDefault();
        
        var selectedLanguage = option.getAttribute('data-language');
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'Language.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            localStorage.setItem('selectedLanguage', selectedLanguage);
            window.location.reload();
        };
        xhr.send('language=' + encodeURIComponent(selectedLanguage));
    });
});

var userLanguage = window.navigator.language || window.navigator.userLanguage;

var preferredLanguage = '';
if (userLanguage.startsWith('tr')) {
    preferredLanguage = 'tr';
} else if (userLanguage.startsWith('de')) {
    preferredLanguage = 'de';
} else {
    preferredLanguage = 'en';
}

var savedLanguage = localStorage.getItem('preferredLanguage');
if (savedLanguage !== preferredLanguage) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'Language.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        localStorage.setItem('preferredLanguage', preferredLanguage);
        window.location.reload();
    };
    xhr.send('language=' + encodeURIComponent(preferredLanguage));
}
