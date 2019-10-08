(function() {
    var columns = document.querySelectorAll('.footer__column:not(.opened)');

    var arrowElement = document.createElement('div');
    arrowElement.classList.add('footer__arrow');

    columns.forEach(function(column, i) {
        column.addEventListener('click', function() {
            column.classList.toggle('opened');
        })
    })
})();