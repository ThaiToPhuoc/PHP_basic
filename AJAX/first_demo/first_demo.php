<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first AJAX demo</title>
</head>
<body>
    <div id="content">
        <form method="post" id="form-login">
            <input type="text" name="username" id="username" placeholder="Tên đăng nhập" />
            <input type="password" name="password" id="password" placeholder="Mật khẩu" />
            <button id="btn-login" type="submit">Login</button>
        </form>
    </div>
    
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            var submit = $('#btn-login');
            
            // bắt sự kiện click vào nút Login
            submit.click(function()
            {
                var username = $("input[name='username']").val();
                var password = $("input[name='password']").val();
                
                // Kiểm tra đã nhập tên tài khoản chưa
                if (username == '') {
                    alert('Vui lòng nhập tài khoản');
                    return false;
                }
                
                // Kiểm tra đã nhập mật khẩu chưa
                if (password == '') {
                    alert('Vui lòng nhập mật khẩu');
                    return false;
                }
                
                // Lấy tất cả dữ liệu trong form login
                var data = $('form#form-login').serialize();
                // Sử dụng $.ajax()
                $.ajax({
                type : 'POST', //kiểu post
                url  : 'submit.php', //gửi dữ liệu sang trang submit.php
                data : data,
                success :  function(data)
                    {
                            if (data == 'false')
                            {
                                alert('Sai tên đăng nhập hoặc mật khẩu');
                            } else {
                                $('#content').html(data);
                            }
                    }
                });
                return false;
            });
        });
    </script>
</body>
</html>
