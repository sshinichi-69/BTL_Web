<?php
    require 'init.php';
    $user = $_POST['user'];
    if ($user['user']!="admin")
        header('login.php');
    session_start();
    $result = mysqli_query($link, "SELECT * FROM products ORDER BY id ASC");
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {border: 1px solid black;}
        td {padding: 8px;}
        a {color: white;}
        a:hover {color: red;}
    </style>
    <title>phan2_bai3</title>
    <script>
    	function openAddWindow(){ window.open("../product/addProduct.php", "", "width=961,height=529"); }
    </script>
</head>
<body style="margin: 0px; padding: 0px; text-align: center;">
    <div style="width: 71%; margin-left: auto; margin-right: auto; text-align: center;">
        <h3>PRODUCTS</h3>
        <table>
            <tr>
                <td style="background-color: #2e79b6; text-align: center;">
                <a href="" onClick="openAddWindow();">Add New Product</a>
                </td>
            </tr>
        </table>
        <p></p>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
        
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td style="text-align: right;"><?php echo $row['id']; ?></td>
                    <td style="text-align: left;"><?php echo $row['name']; ?></td>
                    <td style="text-align: left;"><?php echo $row['description']; ?></td>
                    <td style="text-align: right;">$<?php echo $row['price']; ?></td>
                    <td style="background-color: #5dc1df;">
                        <form action="../product/editProduct.php" method="get">
                        <input type="hidden"  name="id"  value="<?php echo $row['id']; ?>"/>
                    <a href="javascript:;" onclick="parentNode.submit();">Edit</a>
                    	</form>
                    </td>
                    <td style="background-color: #da534d;">
                        <form action="../product/deleteProduct.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                    <a href="javascript: parentNode.submit();">Delete</a>
                    	</form>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>            
    </div>
</body>
</html>