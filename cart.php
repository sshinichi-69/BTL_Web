<?php
    session_start();
    
    include 'header.php';
    include 'footer.php';
    include './products/products.php';

    if (isset($_POST['productId']) && !empty($_POST['productId'])) {
        require 'init.php';
        $userId = $_SESSION['user']['id'];
        $productId = $_POST['productId'];
        mysqli_query($link, "DELETE FROM carts WHERE userid='$userId' AND productid='$productId'");
        mysqli_close($link);
    }

    $notification = '';
    if (isset($_POST['removeAll'])) {
        require 'init.php';
        $userId = $_SESSION['user']['id'];
        mysqli_query($link, "DELETE FROM carts WHERE userid='$userId'");
        mysqli_close($link);
        $notification = '<div id="error">Thanh toán thành công</div>';
    }
    else {
        $notification = '';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./general.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href="./themify-icons/themify-icons.css">
    <title>Logitech G</title>
</head>

<body>
    <div id="body">
        <?php headerHTML(0) ?>
        <?php echo($GLOBALS['notification']) ?>
        <div id="table" class="black-bgr">
            <table>
                <tr>
                    <th>Mặt hàng</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xóa mặt hàng</th>
                </tr>
            <?php
                require 'init.php';
                
                if (isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['quantity']) && !empty($_POST['quantity'])) {
                    require 'init.php';
                    $userId = $_SESSION['user']['id'];
                    $productId = $_POST['id'];
                    $quantity = intval($_POST['quantity']);
                    $result = mysqli_query($link, "SELECT * FROM carts WHERE userid='$userId' AND productid='$productId'");
                    if ($row = mysqli_fetch_assoc($result)) {
                        mysqli_query($link, "UPDATE carts SET quantity='$quantity' WHERE userid='$userId' AND productid='$productId'");
                    }
                    else {
                        mysqli_query($link, "INSERT INTO carts (userid, productid, quantity) VALUES ('$userId', '$productId', '$quantity')");
                    }
                }

                $totalPrice = 0;

                $userId = $_SESSION['user']['id'];
                $cartResult = mysqli_query($link, "SELECT * FROM carts WHERE userid='$userId'");
                while ($cartRow = mysqli_fetch_assoc($cartResult)) {
                    $productId = $cartRow['productid'];
                    $itemResult = mysqli_query($link, "SELECT * FROM products WHERE id='$productId'");
                    echo('<tr>');
                    echo('<form action="cart.php" method="post">');
                    while ($itemRow = mysqli_fetch_assoc($itemResult)) {
                        echo('<td>' . $itemRow['name'] . '</td>');
                        echo('<td>' . showNumber($itemRow['price']) . '&nbsp;₫</td>');
                        echo('<td>' . $cartRow['quantity'] . '</td>');
                        echo('<td>' . showNumber(intval($itemRow['price']) * intval($cartRow['quantity'])) . '&nbsp;₫</td>');
                        echo('<td><button type="submit" name="productId" value="' . $productId . '">Xóa mặt hàng</button></td>');
                        $totalPrice += intval($itemRow['price']) * intval($cartRow['quantity']);
                    }
                    echo('</form>');
                    echo('</tr>');
                }
                mysqli_close($link);
            ?>
                <tr>
                    <form action="cart.php" method="post">
                        <td>Thành tiền</td>
                        <td></td>
                        <td></td>
                        <td><?php echo(showNumber($GLOBALS['totalPrice'])); ?>&nbsp;₫</td>
                        <td><button type="submit" name="removeAll" value="0">Thanh toán</button></td>
                    </form>
                </tr>
            </table>
        </div>
    </div>
</body>
<footer>
    <?php footerHTML(0) ?>
</footer>
</html>