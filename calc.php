<?php
    //Calculator
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $op = $_GET["op"];

    


    if(empty($number1))
    {
        $result = "الرقم الأول فارغ"
    }
    elseif(empty($number2))
    {
        $result = "الرقم hgehkd فارغ"
    }
    elseif(empty($op))
    {
        $result =  "ادخل نوع العملية"
    }
    else
    {
        if($op === "+")
        {
            $result =  $_GET["number1"] + $_GET["number2"];
        }
        elseif($op === "-")
        {
            $result =  $_GET["number1"] - $_GET["number2"];
        }
        elseif($op === "*")
        {
            $result =  $_GET["number1"] * $_GET["number2"];
        }
        elseif($op === "/")
        {
            $result =  $_GET["number1"] / $_GET["number2"];
        }
    }


    
?>

<head>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">

    <form action="calc.php" method="GET" class="form">
        <div>
            <label >الرقم الأول:</label>
            <input type="number"  name="number1" class="form-control">
        </div>

        <div>
            <label >الرقم الثاني:</label>
            <input type="number" name="number1" class="form-control">
        </div>
        <br>
        <div>
            <label>العملية:</label>
            <input type="text" name="op" class="form-control">
        </div>

        <div class="alert alert-success">
            <?php echo $result?>
        </div>

        <br>
        <input type="submit" class="btn btn-primary">
    </form>


    </div>
</body>