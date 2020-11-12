<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>basic php</title>
    </head>
    <body>
    <style type="text/css">
        h1{
            color: blue;
        }
        form, .form{
            display: flex;
            padding-top: 20px;
        }

        .grid-container-4{
            background-color: white;
            padding: 10px;
            display: grid;
            grid-template-columns: 200px 200px 130px 200px;
            
            vertical-align: middle;
            grid-gap: 10px 10px;
            border-radius: 5px;
            box-shadow: 4px 3px 8px 1px #969696;
            -webkit-box-shadow: 4px 3px 8px 1px #969696;
        }

        .item1-5{
            grid-column: 1 / 5;
        }
        </style>

        <h1>
            Thực hiện các phép tính trên phân số:
        </h1>
        <?php
            class fraction
            {
                public $numerator;
                public $denominator;

                public function show()
                {
                    echo $this->numerator."/".$this->denominator;
                }

                public function greatest_common_divisor()
                {
                    $tmp;
                    $a = abs($this->numerator);
                    $b = abs($this->denominator);
                    while($b != 0) {
                        $tmp = $a % $b;
                        $a = $b;
                        $b = $tmp;
                    }
                    return $a;
                }

                public function simplify()
                {
                    $GCD = $this->greatest_common_divisor();
                    $this->numerator = $this->numerator / $GCD;
                    $this->denominator = $this->denominator / $GCD;
                }
            }

        ?>

        <form name="oop" action="OOP2.php" method="POST">
            <div class="grid-container-4">
                <div class="grid-item">
                    Nhập phân số thứ 1: tử số: 
                </div>
                <div class="grid-item">
                    <input type="number" name="first_numerator" required value="">
                </div>
                <div class="grid-item">
                    mẫu số:
                </div>
                <div class="grid-item">
                    <input type="number" name="first_denominator" required value="">
                </div>

                <div class="grid-item">
                    Nhập phân số thứ 2: tử số: 
                </div>
                <div class="grid-item">
                    <input type="number" name="second_numerator" required value="">
                </div>
                <div class="grid-item">
                    mẫu số:
                </div>
                <div class="grid-item">
                    <input type="number" name="second_denominator" required value="">
                </div>
                
                <div class="grid-item item1-5">
                    <fieldset>
                        <legend> 
                            Vui lòng chọn phép tính
                        </legend>
                        <input type="radio" name="caculation" value="summation" checked> cộng
                        <input type="radio" name="caculation" value="subtraction"> trừ 
                        <input type="radio" name="caculation" value="mutliplication"> nhân
                        <input type="radio" name="caculation" value="division"> chia
                    </fieldset>
                </div>
                <div class="grid-item item1-5">
                    <input type="submit" name="submit" value="Kết quả">
                    <input type="text" name="result" value="">
                </div>
            </div>
        </form>
    </body>
</html>