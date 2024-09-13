window.addEventListener('load', function() {
    var loadingRows = document.querySelectorAll('.loading-row');
    var delay = 500; // Delay between each row in milliseconds

    loadingRows.forEach(function(row, index) {
        setTimeout(function() {
            row.classList.remove('loading-row');
        }, delay * (index + 1));
    });
});
