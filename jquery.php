<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>jQuery Mouse and Keyboard Events</title>

    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        #box{
            width:200px;
            height:100px;
            background:lightblue;
            text-align:center;
            line-height:100px;
            margin-bottom:20px;
        }
    </style>
</head>
<body>

<h2>Mouse Event</h2>
<div id="box">Click Me</div>

<h2>Keyboard Event</h2>
<input type="text" id="txt" placeholder="Type here">
<p id="result"></p>

<script>
$(document).ready(function(){

    
    $("#box").click(function(){
        $("#box").css("background","lightgreen");
        $("#box").text("Clicked!");
    });

    $("#box").mouseenter(function(){
        $("#box").css("border","2px solid red");
    });


    $("#box").mouseleave(function(){
        $("#box").css("border","none");
    });


    $("#txt").keyup(function(){
        var text = $(this).val();
        $("#result").text("You typed: " + text);
    });

});
</script>

</body>
</html>