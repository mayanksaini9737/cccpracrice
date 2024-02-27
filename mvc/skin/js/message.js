document.addEventListener('DOMContentLoaded', function() {
    showHideAlert();

    function showHideAlert() {
        var alertElement = document.getElementById('alert');
        if (alertElement.classList.contains('show')) {
            alertElement.classList.remove('show');
        }

        setTimeout(function() {
            alertElement.classList.add('show');
        }, 100);
        
        setTimeout(function() {
            alertElement.classList.remove('show');
        }, 3000);
    }
});
