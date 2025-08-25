<html>
<body>
<center>
    <h1>CALCULATOR</h1>
<form action="" method="post">
<table>
<tr><th>FIRST NUMBER</th><th><input type="text" name="first"></th></tr>
<tr><th>SECOND NUMBER</th><th><input type="text" name="second"></th></tr>
</table>
<input type="submit" name="add" value="ADDITION">
<input type="submit" name="sub" value="SUBSTRATION">
<input type="submit" name="mult" value="MULTIPLICATION">
<input type="submit" name="div" value="DIVISION">
</form>
<?php
if(isset($_POST["add"]))
{
    $first=$_POST["first"];
    $second=$_POST["second"];
    $result=$first+$second;
        echo $result;
}
if(isset($_POST["sub"]))
{
    $first=$_POST["first"];
    $second=$_POST["second"];
    $result=$first-$second;
        echo $result;

}
if(isset($_POST["mult"]))
{
    $first=$_POST["first"];
    $second=$_POST["second"];
    $result=$first*$second;
        echo $result;
}
if(isset($_POST["div"]))
{
    $first=$_POST["first"];
    $second=$_POST["second"];
    $result=$first/$second;
        echo $result;
}

?>
</center>
</body>
</html>


