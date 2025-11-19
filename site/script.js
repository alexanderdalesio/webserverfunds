const button = document.getElementById('myButton');
const onButton = document.getElementById('onButton');
const offButton = document.getElementById('offButton');
const toggleButton = document.getElementById('toggleButton');
const text = document.getElementById('textToChange');
const bg = document.getElementById('bg');
const buttonText = document.getElementById('buttonText');
const requiredField = document.getElementById('required');

console.log('myButton:', button);
console.log('onButton:', onButton);
console.log('offButton:', offButton);
console.log('toggleButton:', toggleButton);

// Start BG1
let bgState = 1;
bg.style.backgroundImage = "url('media/paws.png')";
buttonText.innerHTML = "Change Background";

// Toggle backgrounds
button.onclick = function () {
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

// Hover: main button
button.onmouseover = () => button.style.backgroundColor = '#4f6184ff';
button.onmouseout  = () => button.style.backgroundColor = '';

// Hover: GPIO buttons
onButton.onmouseover = () => onButton.style.backgroundColor = '#4f6184ff';
onButton.onmouseout  = () => onButton.style.backgroundColor = '';

offButton.onmouseover = () => offButton.style.backgroundColor = '#4f6184ff';
offButton.onmouseout  = () => offButton.style.backgroundColor = '';

toggleButton.onmouseover = () => toggleButton.style.backgroundColor = '#4f6184ff';
toggleButton.onmouseout  = () => toggleButton.style.backgroundColor = '';

// Required field (ONLY if it exists on the page)
if (requiredField) {
    requiredField.onblur = function () {
        if (!requiredField.value) {
            alert('Please fill out the confirmation field with PUPPY.');
        }
    };
}
