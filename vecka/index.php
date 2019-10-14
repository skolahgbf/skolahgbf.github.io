<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veckans Meme</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="main">
        <div class="head">

        </div>
        <div class="body">
            <div class="current">
                <div class="text" id="large">
                        <h1 id="meme" onclick=display()>Matolja</h1>
                </div>
            </div>
            <div class="past">
                <table>
                    <tr>
                        <th class="large">Vecka</th>
                        <th class="large">År</th>
                        <th class="large">Meme</th>
                    </tr>
                    <?php 
                        $load = fopen("memes.txt", "r") or die("Unable to open file!");
                        echo fread($load,filesize("memes.txt"));
                        fclose($load);
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>