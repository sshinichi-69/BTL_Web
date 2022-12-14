<?php
    function getMouseList() {
        getItemList('mouse');
    }

    function getKeyboardList() {
        getItemList('keyboard');
    }
    
    function getAudioList() {
        getItemList('audio');
    }

    function getItemList($type) {
        // get data
        $itemList = getItemListFromDB($type);
        // show data
        echo('<ul>');
        foreach ($itemList as $item) {
            echo('<li>');
            // set image
            echo('<div class="image">');
            echo('<img src="' . $item['image'][0] . '">');
            echo('</div>');
            // set description
            echo('<div class="description">');
            echo('<a href="./gaming-item.php?id=' . $item['id'] . '&idx=0" class="uppercase name">' . $item['name'] . '</a>');
            echo('<div class="price">' . showNumber($item['price']) . '&nbsp;₫</div>');
            echo('</div>');
            echo('</li>');
        }
        echo ('</ul>');
    }

    function showNumber($n) {
        if ($n == 0) {
            return $n;
        }
        $res = '';
        $digit = 0;
        while ($n > 0) {
            if ($digit == 3) {
                $res = '.' . $res;
                $digit = 0;
            }
            $res = $n % 10 . $res;
            $n = floor($n / 10);
            $digit++;
        }
        return $res;
    }

    function getItemListFromDB($type) {
        require '../init.php';
        $sql = "SELECT id, image1, image2, image3, image4, name, price FROM products WHERE type='$type' ORDER BY id ASC";
        $result = mysqli_query($link, $sql);
        $res = array();
        while($row = mysqli_fetch_assoc($result)) {
            array_push($res, array('id' => $row['id'], 'image' => array($row['image1'], $row['image2'], $row['image3'], $row['image4']), 'name' => $row['name'], 'price' => $row['price']));
        }
        mysqli_close($link);
        return $res;
    }
?>