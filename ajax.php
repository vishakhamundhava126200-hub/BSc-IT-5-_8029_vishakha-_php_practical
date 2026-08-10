<!DOCTYPE html>
<html>
<head>
    <title>Load AJAX Text File</title>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<h2>AJAX Load Text File</h2>

<button id="btnLoad">Load Text File</button>

<div id="content" style="margin-top:20px; color:blue;"></div>

<script>
$(document).ready(function(){

    $("#btnLoad").click(function(){

        $("#content").load("data.txt");

    });

});
</script>

</body>
</html>