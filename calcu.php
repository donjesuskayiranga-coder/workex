
<?php
if (isset($_POST['op'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['op'];

    switch ($op) {

        case "+":
            $result = $num1 + $num2;
            break;

        case "-":
            $result = $num1 - $num2;
            break;

        case "*":
            $result = $num1 * $num2;
            break;

        case "/":
            $result = ($num2 != 0) ? $num1 / $num2 : "Error";
            break;

        case "=":
            echo "Result = ";
            return;
    }

    echo "Result = " . $result;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    <input type="number" name="num1" required>
    <br><br>

    <input type="number" name="num2" required>
    <br><br>

    <input type="submit" name="op" value="+">
    <input type="submit" name="op" value="-">
    <input type="submit" name="op" value="*">
    <input type="submit" name="op" value="/">
    <br><br>

    <input type="submit" name="op" value="=">
    <label for="result">result</label>
    <input type="text" name="result"  readonly 
    value="<?php
    if (isset($result)) {
echo $result;
    }
    ?>">
</form>

</body>
</html>
