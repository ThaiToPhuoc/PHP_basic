
<?php 
header('Content-Type: text/html; charset=utf-8');
$conn = mysqli_connect('localhost', 'root', '', 'test') or die ('can not connect!');
$query = mysqli_query($conn,'SELECT * FROM member');

if(mysqli_num_rows($query) > 0)
{
    echo '<table border="1" cellspacing="0" cellpadding="10">';
    echo '<tr>';
    echo '<td>';
    echo 'No';
    echo '</td>';
    echo '<td>';
    echo 'username';
    echo '</td>';
    echo '<td>';
    echo 'password';
    echo '</td>';
    echo '</tr>';

    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
    {
        echo '<tr>';
        echo '<td>';
        echo $row['id'];
        echo '</td>';
        echo '<td>';
        echo $row['username'];
        echo '</td>';
        echo '<td>';
        echo $row['email'];
        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
?>