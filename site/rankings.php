<!DOCTYPE html>
<html>
    <head>
        <!--Link to External CSS Sheet-->
        <link rel="stylesheet" href="style.css">

        <!--Webpage Tab Name-->
        <title>Puppy Rankings</title>
    </head>
    <body>
        <!--Header-->
        <div class="header">
            <div class="links">
                <p4><a href="index.html" class="alt">Home</a></p4>
                <p4> | </p4>
                <p4><a href="rankings.php" class="alt">Rankings</a></p4>
            </div>

            <div class="logo">
                <h3>puppies.com</h3>
            </div>

            <!--Create a create a div that looks like a button-->
            <div class="button" id="myButton">
                <p id="buttonText"></p>
            </div>
        </div>

        <div class="bg-image" id="bg"></div>

            <!-- Better than placing 8 consecutive breaks -->
            <div class="pad1">
                <p> </p>
            </div>

        <table class="rank-layout">
            <tr>
                <td>
                <div class="ranks">
                    <h2>Rankings for the week of November 17th</h2>
                    <br>
                    <div class="list">
                    <ol>
                        <li>Cavaliers</li>
                        <li>Goldendoodles</li>
                        <li>Shiba Inus</li>
                    </ol>
                    </div>
                </div>
                </td>

                <td>
                <div class="ranking-form">
                    <h2>Submit Your Ranking</h2>
                    <p>
                    Do you want to have a say in next week's puppy breed ranking?<br/>
                    Complete the form below to send us your picks!
                    </p>
                    <br/>
                    <div class="form-fields">
                    <form action="page.php" method="post">
                        <label for="breed1">Enter your first pick:</label>
                        <input type="text" id="breed1" name="breed1"/>
                        <br/><br/>

                        <label for="breed2">Enter your second pick:</label>
                        <input type="text" id="breed2" name="breed2"/>
                        <br/><br/>

                        <label for="breed3">Enter your third pick:</label>
                        <input type="text" id="breed3" name="breed3"/>
                        <br/><br/>

                        <label for="confirm">Enter <b>PUPPY</b> to confirm your picks:</label>
                        <input type="text" id="required" name="confirm" required pattern="PUPPY"/>
                        <br/><br/>

                        <input type="submit"/>
                    </form>
                    </div>
                </div>
                </td>
            </tr>
            </table>

        </div>

        <div class="gpio-control">
            <h2>GPIO Control Panel</h2>
            <p>Use the buttons below to control the GPIO pins on the server.</p>
            <br/>
            <table class="gpio-buttons">
                <tr>
                    <td>
                        <div class="on-button" id="onButton">
                            <p id="On"></p>
                        </div>
                    </td>
                    <td>
                        <div class="off-button" id="offButton">
                            <p id="Off"></p>
                        </div>
                    </td>
                    <td>
                        <div class="toggle-button" id="toggleButton">
                            <p id="Toggle"></p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="user-agent">
            <p><?= $_SERVER["HTTP_USER_AGENT"] ?></p>
        <div>

        <script src="script.js"></script>
    </body>
</html>