<html>
<head>
    
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
        }
        center {
            margin-top: 50px;
        }
        h1 {
            text-shadow: 2px 2px 4px #000;
        }
        table {
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.1);
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }
        th {
            padding: 15px;
            font-size: 16px;
            color: #fff;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            outline: none;
            width: 150px;
            text-align: center;
        }
        input[type="submit"] {
            padding: 12px 20px;
            margin: 10px 5px;
            border: none;
            border-radius: 8px;
            background: #fff;
            color: #2575fc;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }
        input[type="submit"]:hover {
            background: #2575fc;
            color: #fff;
            transform: scale(1.05);
        }
        .result {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            background: rgba(255, 255, 255, 0.2);
            display: inline-block;
            padding: 15px 25px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>
<center>
    <h1>CALCULATOR</h1>
    <form action="" method="post">
        <table>
            <tr>
                <th>FIRST NUMBER</th>
                <th><input type="text" name="first"></th>
            </tr>
            <tr>
                <th>SECOND NUMBER</th>
                <th><input type="text" name="second"></th>
            </tr>
        </table>
        <input type="submit" name="add" value="ADDITION">
        <input type="submit" name="sub" value="SUBTRACTION">
        <input type="submit" name="mult" value="MULTIPLICATION">
        <input type="submit" name="div" value="DIVISION">
    </form>

    <?php
    if(isset($_POST["add"]))
    {
        $first=$_POST["first"];
        $second=$_POST["second"];
        $result=$first+$second;
        echo "<div class='result'>Result: $result</div>";
    }
    if(isset($_POST["sub"]))
    {
        $first=$_POST["first"];
        $second=$_POST["second"];
        $result=$first-$second;
        echo "<div class='result'>Result: $result</div>";
    }
    if(isset($_POST["mult"]))
    {
        $first=$_POST["first"];
        $second=$_POST["second"];
        $result=$first*$second;
        echo "<div class='result'>Result: $result</div>";
    }
    if(isset($_POST["div"]))
    {
        $first=$_POST["first"];
        $second=$_POST["second"];
        if ($second != 0) {
            $result=$first/$second;
            echo "<div class='result'>Result: $result</div>";
        } else {
            echo "<div class='result' style='color:red;'>Error: Cannot divide by zero!</div>";
        }
    }
    ?>
</center>
</body>
</html>
