<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'test') or die ('Can not connect!');
    $query = mysqli_query($conn, 'SELECT * FROM member');
    
    $result = array();
    if (mysqli_num_rows($query) > 0)
    {
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $result[] = array(
                'id' => $row['id'],
                'username' => $row['username'],
                'email' => $row['email']
            );
        }
    }
    echo json_encode($result);
?>