const refreshButton = document.getElementById('refreshButton');
const button = document.getElementById('myButton');
const onButton = document.getElementById('onButton');
const offButton = document.getElementById('offButton');
const toggleButton = document.getElementById('toggleButton');
const text = document.getElementById('textToChange');
const bg = document.getElementById('bg');
const buttonText = document.getElementById('buttonText');
const requiredField = document.getElementById('required');

// Sensor data-related
const refresh = document.getElementById('refreshButton');
const temperature = document.getElementById('temperature-value');
const humidity = document.getElementById('humidity-value');
const pressure = document.getElementById('pressure-value');
const altitude = document.getElementById('altitude-value');

console.log('myButton:', button);
console.log('onButton:', onButton);
console.log('offButton:', offButton);
console.log('toggleButton:', toggleButton);

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
    console.log('HOVER ON');
    button.style.backgroundColor = '#4f6184ff';
};
button.onmouseout = function() {
    button.style.backgroundColor = '';
};

// Hover effect for ON button
onButton.onmouseover = function() {
    console.log('HOVER ON');
    onButton.style.backgroundColor = '#4f6184ff';
};
onButton.onmouseout = function() {
    onButton.style.backgroundColor = '';
};

// Hover effect for OFF button
offButton.onmouseover = function() {
    console.log('HOVER ON');
    offButton.style.backgroundColor = '#4f6184ff';
};
offButton.onmouseout = function() {
    offButton.style.backgroundColor = '';
};

// Hover effect for TOGGLE button
toggleButton.onmouseover = function() {
    console.log('HOVER ON');
    toggleButton.style.backgroundColor = '#4f6184ff';
};
toggleButton.onmouseout = function() {
    toggleButton.style.backgroundColor = '';
};

// Hover effect for REFRESH button
refreshButton.onmouseover = function() {
    console.log('HOVER ON');
    refreshButton.style.backgroundColor = '#4f6184ff';
};
refreshButton.onmouseout = function() {
    refreshButton.style.backgroundColor = '';
};

async function sendGPIO(action) {
    try {
        const response = await fetch(`gpio-ctrl.php?action=${action}`);
        const result = await response.text();
    } catch (err) {
        console.error("GPIO error:", err);
    }
}

// Button actions
onButton.onclick = () => sendGPIO("on");
offButton.onclick = () => sendGPIO("off");
toggleButton.onclick = () => sendGPIO("toggle");

// Required field alert logic
if (requiredField) {
    requiredField.onblur = function() {
        if (!requiredField.value) {
            alert('Please fill out the confirmation field with PUPPY.');
        }
    };
}

// Read sensor data
async function readSensor(action) {
    try {
        const response = await fetch(`gpio.php?action=${action}`);
        const data = await response.json();
        console.log(data);
        const { temperature, humidity, pressure, altitude } = data;
        return { temperature, humidity, pressure, altitude };
    } 
    catch (err) {
        console.error("Error reading sensor data:", err);
    }
}

// Refresh sensor data values displayed
refresh.onclick = async function () {
    const { temperature, humidity, pressure, altitude } = await readSensor("read");
    
    temperature.innerHTML = temperature;
    humidity.innerHTML = humidity;
    pressure.innerHTML = pressure;
    altitude.innerHTML = altitude;
};