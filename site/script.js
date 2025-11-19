const text = document.getElementById('textToChange');
const bg = document.getElementById('bg');
const buttonText = document.getElementById('buttonText');
const button = document.getElementById('myButton');
const onButton = document.getElementById('onButton');
const offButton = document.getElementById('offButton');
const toggleButton = document.getElementById('toggleButton');
const requiredField = document.getElementById('required');

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
function addHoverEffect(btn) {
    btn.onmouseover = function() {
        btn.style.backgroundColor = '#4f6184ff';
    };
    btn.onmouseout = function() {
        btn.style.backgroundColor = '';
    };
}

// Apply hover effect to all buttons
addHoverEffect(button);
addHoverEffect(onButton);
addHoverEffect(offButton);
addHoverEffect(toggleButton);

// Required field alert logic
requiredField.onblur = function() {
    if (!requiredField.value) {
        alert('Please fill out the confirmation field with PUPPY.');
    }
};