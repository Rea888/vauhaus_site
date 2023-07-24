
/**
 * dog head expand
 */
window.onload = function() {
    // Attach the click event handler after the window is loaded
    document.getElementById('introduction').onclick = expandImage;
};
function expandImage() {
    const introduction = document.getElementById('introduction');
    const content = introduction.querySelector('.content');
    const textOnPic = document.querySelectorAll('.text-on-pic');
    const imageOnPic = document.getElementById('image-on-pic');

    introduction.classList.toggle('expanded');

    if (introduction.classList.contains('expanded')) {
        // The introduction is expanded, show the content
        content.style.visibility = 'visible';
        content.style.opacity = '1';

        // Fade out the text and arrow and fade in the image
        textOnPic.forEach(element => {
            element.style.opacity = '0';
            // Force a reflow, triggering the transition
            void element.offsetWidth;
        });
        setTimeout(() => {
            textOnPic.forEach(element => element.style.display = 'none');
            // Display the image and then fade in
            imageOnPic.style.display = 'block';
            setTimeout(() => { imageOnPic.style.opacity = '1'; }, 50);
        }, 150); // Increase timeout to allow for the opacity transition
    } else {
        // The introduction is not expanded, hide the content
        content.style.visibility = 'hidden';
        content.style.opacity = '0';

        // Fade in the text and arrow and fade out the image
        imageOnPic.style.opacity = '0'; // change opacity before showing textOnPic
        setTimeout(() => {
            imageOnPic.style.display = 'none';
            textOnPic.forEach(element => {
                element.style.display = 'block';
                // Force a reflow, triggering the transition
                void element.offsetWidth;
            });
            textOnPic.forEach(element => element.style.opacity = '1');
        }, 150); // Increase timeout to allow for the opacity transition
    }
}



/**
 * dog head height be as panel height
 */

function adjustHeight() {
    const panel = document.querySelector('.panel');
    const introduction = document.getElementById('introduction');

    // Adjust the height of the introduction div to match the panel height
    introduction.style.height = `${panel.offsetHeight}px`;
}

// Call the function initially on document load
adjustHeight();

// Call the function whenever the window is resized
window.addEventListener('resize', adjustHeight);








