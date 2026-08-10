<?php
$images = [
    'C:\Users\student\Pictures\Screenshots',
    'C:\Users\student\Pictures\Screenshots',
    
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Image Slider</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            text-align:center;
        }
        .slider{
            width:700px;
            height:400px;
            margin:40px auto;
            position:relative;
            overflow:hidden;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.3);
            background:#fff;
        }
        .slides img{
            width:100%;
            height:400px;
            object-fit:cover;
            display:none;
        }
        .slides img.active{
            display:block;
        }
        .btn{
            position:absolute;
            top:50%;
            transform:translateY(-50%);
            background:rgba(0,0,0,0.5);
            color:white;
            border:none;
            padding:10px 15px;
            cursor:pointer;
            font-size:18px;
            border-radius:5px;
        }
        .prev{ left:10px; }
        .next{ right:10px; }
    </style>
</head>
<body>

<h2>PHP Image Slider</h2>

<div class='slider'>
    <div class='slides'>
        <?php foreach($images as $index => $img): ?>
            <img src='<?php echo $img; ?>' 
                 class='<?php echo $index == 0 ? "active" : ""; ?>'>
        <?php endforeach; ?>
    </div>

    <button class='btn prev' onclick='changeSlide(-1)'>❮</button>
    <button class='btn next' onclick='changeSlide(1)'>></button>
</div>

<script>
    let slides = document.querySelectorAll('.slides img');
    let current = 0;

    function showSlide(index){
        slides[current].classList.remove('active');
        current = (index + slides.length) % slides.length;
        slides[current].classList.add('active');
    }

    function changeSlide(step){
        showSlide(current + step);
    }


    setInterval(() => {
        changeSlide(1);
    }, 3000);
</script>

</body>
</html>