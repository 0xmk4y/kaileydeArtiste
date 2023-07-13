var imageDescriptions = document.querySelectorAll('.image-description');

imageDescriptions.forEach(function (description) {
    description.addEventListener('mouseover', function () {
        description.classList.add('show');
        setTimeout(function () {
            description.classList.remove('show');
        }, 1500);
    });
});


// site loading animation
// const loadingOverlay = document.getElementById('loading-overlay');
// const content = document.getElementById('content');

// // Show loading overlay
// loadingOverlay.style.display = 'flex';

// // Delay in milliseconds
// const delay = 3000;

// // Hide loading overlay and show content after the delay
// setTimeout(function() {
//   loadingOverlay.style.display = 'none';
//   content.style.display = 'block';
// }, delay);


