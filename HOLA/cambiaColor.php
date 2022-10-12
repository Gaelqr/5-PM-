<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVIDAD 4</title>
</head>
<body>
    <h1 id="title" onmouseover="ajustar()">Soy una simple página!!! =() =( =( </h1>
    <button id="a1" style="background-color: red;" onclick="rojo()">Red</button>
    <button id="a2"style="background-color: blue;" onclick="blue()">Blue</button>
    <button id="a3" style="background-color: green;" onclick="verde()">Green</button>
</body>
<script>
    function rojo(){
       // alert ("Outchh Soy Rojo");
        document.getElementById("title").style.color ="red";
        document.getElementById("title").style.fontSize="42px";

    }
    function blue(){
        //alert ("Outchh Soy Azul");
        document.getElementById("title").style.color ="blue";
        document.getElementById("title").style.fontSize="30px";

    }
    function verde(){
        //alert ("Outchh Soy Verde");
        document.getElementById("title").style.color ="green";
        document.getElementById("title").style.fontSize="14px";

    }
    function ajustar(){
        document.getElementById("title").style.color ="black";
        document.getElementById("title").style.fontSize="32px";
        document.getElementById("title").style.cursor ="pointer";
    }
</script>
</html>