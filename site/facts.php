<!DOCTYPE html>
<html>
    <head>
        <!--Link to External CSS Sheet-->
        <link rel="stylesheet" href="style.css">

        <!--Webpage Tab Name-->
        <title>Fun Facts</title>
    </head>
    <body>
        <!--Header-->
        <div class="header">
            <div class="links">
                <p4><a href="index.html" class="alt">Home</a></p4>
                <p4> | </p4>
                <p4><a href="rankings.php" class="alt">Rankings</a></p4>
                <p4> | </p4>
                <p4><a href="gpio-ctrl.php" class="alt">GPIO</a></p4>
                <p4> | </p4>
                <p4><a href="facts.php" class="alt">Facts</a></p4>
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

        <div class="facts">
            <h2>Did you know?</h2>
            <p id="fact"></p>
            <br><br>
            <p1><i>Next fact loads in...</i></p1><p1 id="fact-timer" class="fact-timer"></p1>
        </div>        
        
        <div class="user-agent">
            <p><?= $_SERVER["HTTP_USER_AGENT"] ?></p>
        </div>

        <script src="script.js"></script>
    </body>
</html>