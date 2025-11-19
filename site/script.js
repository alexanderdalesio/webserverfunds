const button = document.getElementById('myButton');
const onButton = document.getElementById('onButton');
const offButton = document.getElementById('offButton');
const toggleButton = document.getElementById('toggleButton');
const text = document.getElementById('textToChange');
const bg = document.getElementById('bg');
const buttonText = document.getElementById('buttonText');


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

// Hover effect for main button
button.onmouseover = function() {
    button.style.backgroundColor = '#4f6184ff';
};
button.onmouseout = function() {
    button.style.backgroundColor = '';
};

// Hover effect for ON button
onButton.onmouseover = function() {
    onButton.style.backgroundColor = '#4f6184ff';
};
onButton.onmouseout = function() {
    onButton.style.backgroundColor = '';
};

// Hover effect for OFF button
offButton.onmouseover = function() {
    offButton.style.backgroundColor = '#4f6184ff';
};
offButton.onmouseout = function() {
    offButton.style.backgroundColor = '';
};

// Hover effect for TOGGLE button
toggleButton.onmouseover = function() {
    toggleButton.style.backgroundColor = '#4f6184ff';
};
toggleButton.onmouseout = function() {
    toggleButton.style.backgroundColor = '';
};

// Required field alert logic
requiredField.onblur = function() {
    if (!requiredField.value) {
        alert('Please fill out the confirmation field with PUPPY.');
    }
};