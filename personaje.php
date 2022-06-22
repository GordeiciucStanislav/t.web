<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head> 
    <title>"Povestea unui om lenes"</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <link rel="stylesheet" href="css/menu-style.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    
<body background="img\back1.jpg">
    <?php include 'menu.php';?>
    
    <h1 class="Nume_poveste" align="center" style="color:white"><i>Povestea unui om lenes</i></h1>
    
    <h2 class="nume_rezumat" align="center">Personaje</h2>
    <div class="table1div">
        <font face="Montserrat">
        <table class="table1" align="center" border="5" style="border-color:#950101; background-color:whitesmoke; opacity:0.88;color:black" cellpadding="5">
        <tr>
            <th>Lenosu</th>
            <th>Satenii</th>
            <th>Cucoana</th>
        </tr>
        <tr>
            <td><img src="img\1.jfif" width="100%" height="100%"></td>
            <td><img src="img\2.jpg" width="100%" height="100%"></td>
            <td><img src="img\3.jpg" width="100%" height="80%"></td>
        </tr>
        <tr>
            <td class = "scroll_buttonInfo" align="center" colspan="6" align="justify"><button class = "scroll_buttonInfoButton" onclick="hiddenClickButton('InfoPers')">Informatia despre personaje</button></td>
        </tr>
        <tr class="Info" id="InfoPers">
            <td align="justify">&nbsp;&nbsp;&nbsp;Lenosul care a adus multe probleme la sat, prin faptul ca nu lucra, ci doar manca.</td>
            <td align="justify">&nbsp;&nbsp;&nbsp;Satenii care au dor lenosul spre spanzuratoare.</td>
            <td lign="justify">&nbsp;&nbsp;&nbsp;Cucoana care a incercat sa salveze lenosul.</td>
        </tr>
        <script src="js/personaje.js"></script>
        <tr class="Info">
            <td align="center" colspan="6" align="justify"><b>Alte personaje:</b><br><b>Episodice:</b> Temporal nu este<br>
            <b>Colective:</b> Temporal nu este<br></td>
        </tr>
        </table>
        </font>
    </div>
    
    
    <div class="table2div">
        <font face="Montserrat">
        <table class="table2" align="center" border="5" style="border-color:#950101; background-color:whitesmoke; opacity:0.88;color:black" cellpadding="5">
        <tr>
            <th>Lenosul</th>
            <th>Satenii</th>
            <th>Cucoana</th>
        </tr>
        <tr>
            <td><img src="img\1.jfif" width="100%" height="100%"></td>
            <td><img src="img\2.jpg" width="100%" height="100%"></td>
            <td><img src="img\3.jpg" width="100%" height="80%"></td>
        </tr>
        <tr>
            <td class = "scroll_buttonInfo" align="center" colspan="3" align="justify"><button class = "scroll_buttonInfoButton" onclick="hiddenClickButton('InfoPers1')">Informatia despre personaje</button></td>
        </tr>
        <tr class="Info" id="InfoPers1">
            <td class="simple-text" align="justify">&nbsp;&nbsp;&nbsp;Lenosul care a adus multe probleme la sat, prin faptul ca nu lucra, ci doar manca.</td>
            <td class="simple-text" align="justify">&nbsp;&nbsp;&nbsp;Satenii care au dor lenosul spre spanzuratoare.</td>
            <td class="simple-text" align="justify">&nbsp;&nbsp;&nbsp;Cucoana care a incercat sa salveze lenosul.</td>
        </tr>
 
        <tr class="Info">
            <td class="simple-text" align="center" colspan="3" align="justify"><b>Alte personaje:</b><br><b>Episodice:</b> Temporal nu este<br>
            <b>Colective:</b>Temporal nu este<br></td>  
        </tr>
        </table>
        </font>
    </div>
    
</body>
</html>