<?php 

/*
 * Author: Ray Lawlor
 * Copyright: Aug 2016
 * Licence: MIT
 */

?>
<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="index.php">
            <input type="text" name="number" value="<?php echo (isset($_POST['number']) ? $_POST['number'] : ''); ?>"/>
            <button type="submit">Go!</button>
        </form>
    </body>
</html>
<?php
if (!empty($_POST)) {
    collatz($_POST['number']);
}

function collatz($number) {

    if (checkNum($number) === true) {
        //odd
        $number = $number * 3 + 1;
    } else {
        //even
        $number = $number / 2;
    }
    echo $number;
    echo "<br/>";
    if ($number === 1) {
        die('DONE!');
    } else {
        collatz($number);
    }
}

function checkNum($num) {
    return ($num % 2) ? TRUE : FALSE;
}
