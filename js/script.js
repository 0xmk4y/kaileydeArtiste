var imageDescriptions = document.querySelectorAll('.image-description');

imageDescriptions.forEach(function (description) {
    description.addEventListener('mouseover', function () {
        description.classList.add('show');
        setTimeout(function () {
            description.classList.remove('show');
        }, 1500);
    });
});
