<?php
    $conn = mysqli_connect('localhost', 'root', '', 'test') or die ('can not connect!');
    $query = mysqli_query($conn,'SELECT * FROM member');

    echo '<?xml version="1.0" encoding="UTF-8"?>';
    echo '<root>';
    if (mysqli_num_rows($query) > 0)
    {
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            echo '<items>';
                echo '<id>'.$row['id'].'</id>';
                echo '<username>'.$row['username'].'</username>';
                echo '<email>'.$row['email'].'</email>';
            echo '</items>';
        }
    }
    echo '</root>';
?>