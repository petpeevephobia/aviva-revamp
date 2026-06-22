document.querySelectorAll('.lang-selector').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const lang = this.getAttribute('data-lang');
        
        // Ensure this path matches the actual location of update_language.php
        fetch('includes/update_language.php?lang=' + lang) 
            .then(response => response.text())
            .then(data => {
                console.log(data); // Check the browser console to see if it says "Language updated to: ..."
                sessionStorage.setItem('scrollPosition', window.scrollY);
                window.location.reload();
            })
            .catch(error => console.error('Error:', error));
    });
});

// After page loads, return to the saved scroll position
window.addEventListener('load', () => {
    const scrollPosition = sessionStorage.getItem('scrollPosition');
    if (scrollPosition) {
        window.scrollTo(0, scrollPosition);
        sessionStorage.removeItem('scrollPosition');
    }
});