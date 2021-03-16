<!doctype html>
<html lang="ru">

<form method="get" action="/index.php">
    Число: <input type="number" name="x1" value="<?php If (isset($_GET['x1'])) {
        echo $_GET['x1'];} else { echo 0;} ?>">
    <select name="sign">
        <option value="+" selected> + </option>
        <option value="-"> - </option>
        <option value="*"> * </option>
        <option value="/"> / </option>
    </select>
    Число: <input type="number" name="x2" value="<?php If (isset($_GET['x2'])) {
        echo $_GET['x2'];} else { echo 0;} ?>">
    <button type="submit">=</button>

<?php


If (isset($_GET['x1']) && isset($_GET['x2']) && isset($_GET['sign'])) {

    $x1 = $_GET['x1'];
    $x2 = $_GET['x2'];
    $sign = $_GET['sign'];

    if ('+'== $sign) {
        echo $x1 + $x2;
    }
    elseif('-' == $sign) {
        echo x1 - $x2;
    }
    elseif('*' == $sign) {
        echo $x1 * $x2;
    }
    elseif('/' == $sign & $x2 != '0') {
        echo $x1 / $x2;
    } else {
        echo 'На ноль делить нельзя!';
    }
}
?>
</form>
</html>
