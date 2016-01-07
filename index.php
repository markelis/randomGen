<?php
require_once 'randomGen.php';

$myGenerator = new RandomGen();
$CouponLength = filter_input(INPUT_POST, 'CouponLength');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
            <title>This is a testing random engine</title> 
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="text" name="CouponLength" value="<?php echo $CouponLength; ?>">
            <input type="submit" name="submit" value="Click to Generate">
        </form>
        <p>This is what the button returns. A random set of characters. Like a coupon.</p>
        <p><?php 
        if(filter_has_var(INPUT_POST, 'CouponLength')) {
            echo $myGenerator->UseGenerator($CouponLength); 
        }
        ?></p>
    </body>
</html>
