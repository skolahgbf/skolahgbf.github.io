<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin :)</title>
    <link type="text/css" rel="stylesheet" href="css/styleadmin.css">
</head>
<body>
    <div class="x">
        <a href="index.php"><h2>X</h2></a>
    </div>
    <div class="main">
        <form id="form" action="" method="">
            <div class="top">
                <input class="tb" id="clear" name="vecka" placeholder="Vecka" type="text" onkeyup=btnup()>
                <input class="tb" id="clear1" name="ar" placeholder="År" type="text" onkeyup=btnup()>
                <input class="tb" id="clear2" name="meme" placeholder="Meme" type="text" onkeyup=btnup()>
            </div>
            <div class="bot">
                <input class="tb" id="clear3" name="pass" type="password" value="" placeholder="Lösenord" onkeyup=btnup()>
                <input class="bt" id="btn" style="opacity:0.2;" type="submit" value="Skicka Memen!" onclick=click()>
            </div>
        </form>
    </div>
    <script>
                function getWeekNumber(d) {
    // Copy date so don't modify original
    d = new Date(Date.UTC(d.getFullYear(), d.getMonth(), d.getDate()));
    // Set to nearest Thursday: current date + 4 - current day number
    // Make Sunday's day number 7
    d.setUTCDate(d.getUTCDate() + 4 - (d.getUTCDay()||7));
    // Get first day of year
    var yearStart = new Date(Date.UTC(d.getUTCFullYear(),0,1));
    // Calculate full weeks to nearest Thursday
    var weekNo = Math.ceil(( ( (d - yearStart) / 86400000) + 1)/7);
    // Return array of year and week number
    return [d.getUTCFullYear(), weekNo];
}
function btnup() {
        if (document.getElementById("clear").value != "" && document.getElementById("clear1").value != "" && document.getElementById("clear2").value != "" && document.getElementById("clear3").value != "") {
            document.getElementById("btn").style = "opacity:1;";
            document.getElementById("form").action = "<?php $_PHP_SELF ?>";
            document.getElementById("form").method = "post";
        } else {
            document.getElementById("btn").style = "opacity:0.2;";
            document.getElementById("form").action = "";
            document.getElementById("form").method = "";
        }
        console.log("test");
}
var result = getWeekNumber(new Date());
//document.write('It\'s currently week ' + result[1] + ' of ' + result[0]);
document.getElementById("clear").placeholder = "Vecka (" + result[1] + ")";
document.getElementById("clear1").placeholder = "År (" + result[0] + ")";
function click() {
    if (document.getElementById("clear").value == "")
    {
        document.getElementById("clear").value = result[1];
    }
    if (document.getElementById("clear1").value == "")
    {
        document.getElementById("clear1").value = result[0];
    }
}
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
        document.getElementById("clear").value = "";
        document.getElementById("clear1").value = "";
        document.getElementById("clear2").value = "";
        document.getElementById("clear3").value = "";
    </script>
        <?php
        $currentWeekNumber = date('W');
        $currentYearNumber = date('Y');
        $entry1 = $currentWeekNumber;
        //echo $currentWeekNumber;
        $entry2 = $currentYearNumber;
        if (isset($_POST["pass"])) {
            $pass = $_POST["pass"];
        } else {
            $pass = "placeholder";
        }
        $login = FALSE;
        if ($pass == "jude123") {
            $login = TRUE;
            //echo "Du är inloggad!";
        }
        else {
            $login = FALSE;
            echo "<h1>Fyll i skiten, jävla noob!</h1>";
        }
        if ($login == TRUE) {
            $entry1 = $_POST["vecka"];
            $entry2 = $_POST["ar"];
            $entry3 = $_POST["meme"];
            $oldContents = file_get_contents("memes.txt");
            $fr = fopen("memes.txt", 'w');
            fwrite($fr, "<tr>
            <th class='small'>" . $entry1 . "</th>
            <th class='small'>" . $entry2 . "</th>
            <th class='small'>" . $entry3 . "</th>
            </tr>");
            fwrite($fr, $oldContents);
            fclose($fr);
            echo "<h1>Skrev till filen (om allt var ifyllt).</h1>";   
        }
        unset($_POST["pass"]);
        unset($_POST["vecka"]);
        unset($_POST["ar"]);
        $pass = "placeholder";

    ?>
</body>
</html>