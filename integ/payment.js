
function showPopbox(id) {
    var popbox = document.getElementById(id);
    popbox.style.display = "block";
}


function hidePopbox(id) {
    var popbox = document.getElementById(id);
    popbox.style.display = "none";
}


function processPayment() {
    
    showPopbox("paymentProcessingPopbox");

    
    setTimeout(function() {
        
        hidePopbox("paymentProcessingPopbox");

        
        showPopbox("thankYouPopbox");

        
        setTimeout(function() {
            window.close();
        }, 2000); 
    }, 4000);
}


document.querySelector(".confirm button").addEventListener("click", function(event) {
    event.preventDefault(); 
    processPayment();
});

// Wait for the DOM content to be loaded
document.addEventListener("DOMContentLoaded", function() {
    // Get all the images inside the 'money' class
    var moneyImages = document.querySelectorAll('.money img');

    // Add event listener to each image
    moneyImages.forEach(function(image) {
        image.addEventListener('click', function() {
            // Remove highlight from all images
            moneyImages.forEach(function(img) {
                img.classList.remove('highlight');
            });

            // Add highlight to the clicked image
            this.classList.add('highlight');

            // Remove checkmark from all images
            moneyImages.forEach(function(img) {
                img.removeAttribute('data-checked');
            });

            // Add checkmark to the clicked image
            this.setAttribute('data-checked', 'true');
        });
    });
});

