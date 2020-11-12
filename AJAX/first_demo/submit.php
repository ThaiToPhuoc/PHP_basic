<?php
    if ($_POST)
    {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        //neu dang nhap dung, fake data
        if ($username == 'phuocthai' && $password == '1234')
        {
    ?>
    <p>Đăng nhập thành công</p>
    <h1>Xin chào: <?php echo $username ?></h1>
    <?php
        } else {
    ?>
    <p>Tên đăng nhập hoặc mật khẩu sai rồi</p>
    <?php
        }
    }
?>