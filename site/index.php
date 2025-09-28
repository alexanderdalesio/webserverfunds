<!DOCTYPE html>
<html>
    <head>
        <!--Link to External CSS Sheet-->
        <link rel="stylesheet" href="style.css">

        <!--Webpage Tab Name-->
        <title>Lab 2</title>
    </head>
    <body>
        <div class="bg-image" id="bg"></div>

        <!--Create a create a div that looks like a button-->
        <div class="button" id="myButton">
            <p id="buttonText">Click me</p>
        </div>
        
        <!--Text that will change upon button press-->
        <p1 id="textToChange">Today is tomorrow.</p1>

        <div class="ranking-form">
            <h2>Submit Your Ranking</h2>
            <p>Do you want to have a say in next week's puppy breed ranking?<br/>Complete the form below to send us your picks!</p>
            <br/>
            <div class="form-fields">
                <form action="page.php" method="post">
                    <label for="breed1">Enter your first pick:</label>
                    <input type="text" id="breed1" name="breed1"/>
                        <br/>
                        <br/>
                    <label for="breed2">Enter your second pick:</label>
                    <input type="text" id="breed2" name="breed2"/>
                        <br/>
                        <br/>
                    <label for="breed3">Enter your third pick:</label>
                    <input type="text" id="breed3" name="breed3"/>
                        <br/>
                        <br/>
                    <label for="confirm">Enter <b>PUPPY</b> to confirm your picks:</label>
                    <input type="text" id="required" name="confirm" required pattern="PUPPY"/>
                        <br/>
                        <br/>
                    <input type="submit"/>
                </form>
            </div>
        </div>
        
        <div class="user-agent">
            <h3>Your User Agent is</h3>
            <p><?= $_SERVER["HTTP_USER_AGENT"] ?></p>
        <div>

        <script>
            // Get the div element by its ID
            const button = document.getElementById('myButton');
            const text = document.getElementById('textToChange');
            const bg = document.getElementById('bg');
            const requiredField = document.getElementById('required');

            // Counter logic
            let count = 0;
            function counter(elem) {
                count++;
                elem.innerHTML = count === 0 ? "Click me" : `Click me (x${count})`;
            }

            // Required field alert logic
            requiredField.onblur = function() {
                if (!requiredField.value) {
                    alert('Please fill out the confirmation field with PUPPY.');
                }
            };

            // Functions for button
            button.onclick = function(elem) {
                alert('Button Clicked!'); 
                text.innerHTML =
                    text.innerHTML === "Today is tomorrow."
                        ? "Yesterday is today."
                        : "Today is tomorrow.";
                bg.style.backgroundImage = 
                    bg.style.backgroundImage.includes("topo.png")
                        ? "url('media/dots.png')"
                        : "url('media/topo.png')";
                counter(elem.target.querySelector('#buttonText'));

            }; // Show alert and change text on click
            button.onmouseover = function() {button.style.backgroundColor = '#637AA8';}; // Make button lighter on hover
            button.onmouseout = function() {button.style.backgroundColor = '';}; // Restore original color on hover out
        </script>
    </body>
</html>