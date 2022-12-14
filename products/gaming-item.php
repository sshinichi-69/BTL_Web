<?php
    session_start();
    
    include '../header.php';
    include '../footer.php';

    $id = $_REQUEST['id'];

    require '../init.php';
    $sql = "SELECT image1, image2, image3, image4, name, price, description FROM products WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    $res = array();
    while($row = mysqli_fetch_assoc($result)) {
        $res = array('image' => array($row['image1'], $row['image2'], $row['image3'], $row['image4']), 'name' => $row['name'], 'price' => $row['price'], 'description' => $row['description']);
    }
    mysqli_close($link);

    $mainImg = $res['image'][$_REQUEST['idx']];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../general.css">
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="./gaming-item.css">
    <link rel="stylesheet" href="../themify-icons/themify-icons.css">
    <script src="gaming-item.js"></script>
    <title></title>
</head>

<body>
    <div>
        <?php headerHTML(1) ?>
        <div id="product" class="white-text">
            <div class="image">
                <div class="main">
                    <?php
                        echo('<img src="' . $GLOBALS['mainImg'] . '" alt="' . $GLOBALS['res']['name'] . '">');
                    ?>
                </div>
                <div class="other">
                    <?php
                        for ($i = 0; $i < sizeof($GLOBALS['res']['image']); $i++) {
                            echo('<a href="gaming-item.php?id=' . $id . '&idx=' . $i . '">');
                            echo('<button type="button">');
                            echo('<img src="' . $GLOBALS['res']['image'][$i] . '" alt="item image">');
                            echo('</button>');
                            echo('</a>');
                        }
                    ?>
                </div>
            </div>
            <div class="detail">
                <div class="title uppercase">
                    <?php echo($GLOBALS['res']['name']) ?>
                </div>
                <div class="price">
                    <?php echo($GLOBALS['res']['price'] . '&nbsp;₫') ?>
                </div>
                <div class="description">
                    <?php echo($GLOBALS['res']['description']) ?>
                </div>
                <?php
                    if (isset($_SESSION['user'])) {
                ?>
                        <form action="../cart.php" class="buy" method="post">
                            <label for="">Số lượng: </label>
                            <button type="button" onclick="decrease()">-</button>
                            <input class="quantity white-text" name="quantity" value="1" readonly>
                            <button type="button" onclick="increase()">+</button>
                            <input type="text" class="id" name="id" value="<?php echo($GLOBALS['id']) ?>" readonly>
                            <button type="submit">Thêm vào giỏ</button>
                        </form>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php footerHTML(1) ?>
</footer>
</html>