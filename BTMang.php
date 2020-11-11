<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>basic php</title>
    </head>
    <body>
        <style type="text/css">
         
        </style>
        <?php
            if(isset($_POST['n']) && $_POST['n'] > 0)
                $n = $_POST['n'];
            else
                $n = '';

            if(isset($_POST['nhap']))
            {
                for($i = 0; $i < $n; $i ++)
                {
                    $arr[]= rand(-100,100);
                    if($arr[$i] % 2 == 0)
                        $sochan++;
                }
            }
            else {
                $arr = array();
                $sochan = 0;
            }



        ?>
        <form action="BTMang.html" method="post">
        <fieldset>
        <legend>Form nhap mang:</legend>
        <label for="name">nhap n:</label>
        <input type="text" id="n" name="n" value = "<?php  echo $n;?>"><br><br>
        <label for="mang">Mang vua tao:</label>
        <textarea id="mang" name="mang" rows="4" cols="50">
            <?php echo implode(" ", $arr); 
                if(isset($_POST['nhap']))
                {
                    echo 'So chan: '.$sochan;
                }
            ?>
        </textarea>
        </fieldset>
        <input type="submit" value="tao mang" name="nhap" />
        
        </form>
    </body>
</html>