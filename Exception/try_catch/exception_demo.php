<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Xử lý multi exception</title>
</head>
<body>
<?php
class DivideByZeroException extends Exception {};
class DivideByNegativeException extends Exception {};
function process($numerator,$denominator)
{
	try
	{
		if ($denominator == 0)
		{
			throw new DivideByZeroException();
		}
		else if ($denominator < 0)
		{
			throw new DivideByNegativeException();
		}
		else
		{
			echo $numerator / $denominator;
		}
	}
	catch (DivideByZeroException $ex)
	{
		echo "DIVIDE BY ZERO EXCEPTION!";
	}
	catch (DivideByNegativeException $ex)
	{
		echo "DIVIDE BY NEGATIVE NUMBER EXCEPTION!";
	}
	catch (Exception $x)
	{
	    echo "UNKNOWN EXCEPTION!";
    }
}

if(isset($_POST['submit']))
{
    $numerator = $_POST['numerator'];
    $denominator = $_POST['denominator'];
}

else
{
    $numerator = 0;
    $denominator = 0;
}
?>
<form action="exception_demo.php" method="post">
    <fieldset>
    <legend>
        nhập phép chia:
    </legend>
    <input type="number" name="numerator" value = "<?php echo (isset($_POST['submit'])?$numerator:'');?>">
    /
    <input type="number" name="denominator" value = "<?php echo (isset($_POST['submit'])?$denominator:'');?>">
    <input type="submit" name="submit" value="tính">
    </br>
    <label>Kết quả:</label>
    <?php
        if(isset($_POST['submit']))
        {
            process($numerator,$denominator);
        }
    ?> 

    </fieldset>
</form>

</body>
</html>