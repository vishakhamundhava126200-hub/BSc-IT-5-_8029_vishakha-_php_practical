<?php
        include'db.php';

        $sql = "delete from user where id=2";
        mysqli_query($conn,$sql);

        echo " record deleted";


?>
