const onButton = document.getElementById('myButton');
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

// Hover effects
onButton.onmouseover = function() {
    onButton.style.backgroundColor = '#4f6184ff';
};
onButton.onmouseout = function() {
    onButton.style.backgroundColor = '';
};

// Required field alert logic
requiredField.onblur = function() {
    if (!requiredField.value) {
        alert('Please fill out the confirmation field with PUPPY.');
    }
};