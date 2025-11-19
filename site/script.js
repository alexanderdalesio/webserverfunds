const button = document.getElementById('myButton');
const text = document.getElementById('textToChange');
const bg = document.getElementById('bg');
const buttonText = document.getElementById('buttonText');
const gpioButtons = document.getElementById('gpio-button');

// Start with BG1
let bgState = 1;
bg.style.backgroundImage = "url('media/paws.png')";
buttonText.innerHTML = "Change Background";

// Toggle backgrounds on click
button.onclick = function() {
    if (bgState === 1) {
        bg.style.backgroundImage = "url('media/bones.png')";
        buttonText.innerHTML = "Background 2";
        bgState = 2;
    } else {
        bg.style.backgroundImage = "url('media/paws.png')";
        buttonText.innerHTML = "Background 1";
        bgState = 1;
    }
};

// Hover effects
button.onmouseover = function() {
    button.style.backgroundColor = '#4f6184ff';
};
button.onmouseout = function() {
    button.style.backgroundColor = '';
};

gpio-button.onmouseover = function() {
    gpio-button.style.backgroundColor = '#4f6184ff';
};
gpio-button.onmouseout = function() {
    gpio-button.style.backgroundColor = '';
};

// Required field alert logic
requiredField.onblur = function() {
    if (!requiredField.value) {
        alert('Please fill out the confirmation field with PUPPY.');
    }
};