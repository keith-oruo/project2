<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id ="groupa"></p>
    <script>
        document.getElementById('groupa').innerHTML = "This is my first JS code";
    </script>
    <br><br>

    <button type = "button" onclick="document.getElementById('myImg').src='images/bulb_on.png'">turn on light</button>
    <img id="myImg" src="images/bulb_on.png" style="width:100px";>
    <button type = "button" onclick="document.getElementById('myImg').src='images/bulb_off.png'">turn off light</button>
    <br><br>
    <?php date_default_timezone_set("Africa/Nairobi");?>
    Static timer:<?php print date ("H:i:s");?>
    <br>
    Dynamic Timer:<span id="dtimer"></span>
    <br><br>

    <script>
        document.write(5*3)
    </script>
    <br><br>

    <script>
        window.alert('Your database is ready!');
    </script>
    <br><br>

    <script>
        console.log('Add information here');
    </script>
    <br><br>

    <a href= "" onclick= "return confirm('are you sure');">Delete</a>
    <br><br>

    <button type="button" onclick="window.print();">Print Page</button>
    <br><br>

    <script>
        let streetname = promt('What is your street name?');
        var firstname="alex";
        const myAge = 40;
        document.write(firstname + "A.K.A" + streetname + "is" + myAge + " years old.");



    </script>







<script src="script.js"></script>
</body>
</html>