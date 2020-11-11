<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>dang nhap</title>

</head>

<body>
<?php
    if(isset($_POST['name']))  
        $name = $_POST['name']; 
    else
        $name = "";

    if(isset($_POST['email']))  
        $email = $_POST['email']; 
    else
        $email = "";

    if(isset($_POST['gender']))  
        $gender = $_POST['gender']; 
    else
        $gender = "";


    if(isset($_POST['age']))  
        $age = $_POST['age']; 
    else
        $age = "Between 30 to 60";

    if(isset($_POST['comments']))  
        $comments = $_POST['comments']; 
    else
        $comments = "";
?>

<form action="fieldset.php" method="post">
 <fieldset>
  <legend>Enter your information in the form below:</legend>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value = "<?php  echo $name;?>"><br><br>
  <label for="email">Email address:</label>
  <input type="text" id="email" name="email" value = "<?php  echo $email;?>"><br><br>
  <label for="gender">Gender:</label>
  <input type="radio" id="male" name="gender" checked = "checked" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <label for="age">Age:</label>
  <input type="text" id="age" name="age" value = "<?php  echo $age;?>"><br><br>
  <label for="comment">Comments:</label>
  <textarea id="comment" name="comments" rows="4" cols="50" value = "<?php  echo $comments;?>">
  </textarea>
  </fieldset>
  <input type="submit" value="submit my information" name="nhap" />
 
</form>

<?php
if(isset($_POST['nhap']))
{
    echo 'welcome to this page </Br>';
    echo 'Your information: </Br>';
    echo 'name: '.$name.' </Br>';
    echo 'email: '.$email.' </Br>';
    echo 'gender: '.$gender.' </Br>';
    echo 'age: '.$age.' </Br>';
    echo 'comments: '.$comments.' </Br>';
}

?>
</body>

</html>