// Get all property images
const propertyImages = document.querySelectorAll('.property-card img');

// Get the modal element
const modal = document.getElementById('myModal');
// Get the image element inside the modal
const modalImg = document.getElementById('modalImg');

// Add click event listener to each property image
propertyImages.forEach(image => {
    image.addEventListener('click', () => {
        // Set the clicked image source as the modal image source
        modal.style.display = 'block';
        modalImg.src = image.src;
    });
});

// Get the span element that closes the modal
const closeBtn = document.querySelector('.close');

// Close the modal when the close button is clicked
closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Close the modal when the user clicks outside of it
window.addEventListener('click', event => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});
