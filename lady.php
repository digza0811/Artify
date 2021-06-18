<?php
session_start();
require_once 'config.php';

// add, remove, empty
if (!empty($_GET['action'])) {
    switch ($_GET['action']) {
        // add product to cart
        case 'add':
            if (!empty($_POST['quantity'])) {
                $pid = $_GET['pid'];
                $query = "SELECT * FROM products WHERE id=" . $pid;
                $result = mysqli_query($con, $query);
                while ($product = mysqli_fetch_array($result)) {
                    $itemArray = [
                        $product['code'] => [
                            'name' => $product['name'],
                            'code' => $product['code'],
                            'quantity' => $_POST['quantity'],
                            'price' => $product['price'],
                            'image' => $product['image']
                        ]
                    ];
                    if (isset($_SESSION['cart_item']) &&!empty($_SESSION['cart_item'])) {
                        if (in_array($product['code'], array_keys($_SESSION['cart_item']))) {
                            foreach ($_SESSION['cart_item'] as $key => $value) {
                                if ($product['code'] == $key) {
                                    if (empty($_SESSION['cart_item'][$key]["quantity"])) {
                                        $_SESSION['cart_item'][$key]['quantity'] = 0;
                                    }
                                    $_SESSION['cart_item'][$key]['quantity'] += $_POST['quantity'];
                                }
                            }
                        } else {
                            $_SESSION['cart_item'] += $itemArray;
                        }
                    } else {
                        $_SESSION['cart_item'] = $itemArray;
                    }
                }
            }
            break;
        case 'remove':
            if (!empty($_SESSION['cart_item'])) {
                foreach ($_SESSION['cart_item'] as $key => $value) {
                    if ($_GET['code'] == $key) {
                        unset($_SESSION['cart_item'][$key]);
                    }
                    if (empty($_SESSION['cart_item'])) {
                        unset($_SESSION['cart_item']);
                    }
                }
            }
            break;
        case 'empty':
            unset($_SESSION['cart_item']);
            break;
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#C70039;">
<a class="navbar-brand" href="#" style="color:#FFFFFF;">
<img src="imagess/logo.jpg" alt="logo"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="home.php" style="color:#FFFFFF;">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="home.php" style="color:#FFFFFF;">About Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="collection.php" style="color:#FFFFFF;">Collection</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.php" style="color:#FFFFFF;">Contact Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="login.php" style="color:#FFFFFF;">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><i class="fas fa-cart-arrow-down" style="font-size:33px;color:#FFFFFF;"></i></a>
</li>
</ul>
</div>
</nav>


<p><center><a href="collection.php" style="color:#C70039;">Back to Collection</a></center></p>

<div class="container py-5">
    <div class="d-flex justify-content-between mb-2">
        <h3>Cart</h3>
        <a class="btn btn-danger" href="index.php?action=empty">All Item Remove</a>
	 <a class="btn btn-danger" href="bill.php">Check Out</a>
    </div>
    <div class="row">
        <?php
            $total_quantity = 0;
            $total_price = 0;
        ?>
        <table class="table">
            <tbody>
            <tr>
                <th class="text-left">Name</th>
                <th class="text-left">Code</th>
                <th class="text-right">Quantity</th>
                <th class="text-right">Item Price</th>
                <th class="text-right">Price</th>
                <th class="text-center">Remove</th>
            </tr>
            <?php
            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                foreach ($_SESSION['cart_item'] as $item) {
                    $item_price = $item['quantity'] * $item['price'];
                    ?>
                    <tr>
                        <td class="text-left">
                            <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="img-fluid" width="100">
                            <?= $item['name'] ?>
                        </td>
                        <td class="text-left"><?= $item['code'] ?></td>
                        <td class="text-right"><?= $item['quantity'] ?></td>
                        <td class="text-right">₹<?= number_format($item['price'], 2) ?></td>
                        <td class="text-right">₹<?= number_format($item_price, 2) ?></td>
                        <td class="text-center">
                            <a href="index.php?action=remove&code=<?= $item['code']; ?>" class="btn btn-danger">X</a>
                        </td>
                    </tr>

                    <?php
                    $total_quantity += $item["quantity"];
                    $total_price += ($item["price"]*$item["quantity"]);
                }
            }

            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                ?>
                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><strong><?= $total_quantity ?></strong></td>
                    <td></td>
                    <td align="right"><strong>₹<?= number_format($total_price, 2); ?></strong></td>
                    <td></td>
                </tr>

            <?php }

                ?>
            </tbody>
        </table>
    </div>


    <!-- first done this -->
    <div class="row">
        <div class="col-md-12">
            <h1>Products List</h1>
            <div class="d-flex">
                <div class="card-deck">
                    <?php
                    $query = "SELECT * FROM products";
                    $product = mysqli_query($con, $query);
                    if (!empty($product)) {
                        while ($row = mysqli_fetch_array($product)) { ?>
                            <form action="index.php?action=add&pid=<?= $row['id']; ?>" method="post">
                                <div class="card" style="width:18rem">
                                    <img class="card-img-top"
                                         src="<?= $row['image']; ?>"
                                         alt="<?= $row['name']; ?>"
                                         width="150">
                                    <div class="card-header d-flex justify-content-between">
                                        <span><?= $row['name']; ?></span>
                                        <span>₹<?= number_format($row['price'], 2); ?></span>
                                    </div>
                                    <div class="card-body d-flex justify-content-between">
                                        <input type="text" name="quantity" value="1" size="2">
                                        <input type="submit" value="Add to Cart" class="btn btn-success btn-sm">
                                    </div>
                                </div>
                            </form>
                        <?php }
                    } else {
                        echo "no products available";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->

      <footer class="footer-section" id="footer">
<div class="container-fluid1">
  <div class="row">
      <div class="col-lg-6 col-md-4 col-12">
<div class="foot">
  <h3>Info</h3>
  <ul class="fa-ul">
    <li><span class="fa-li"><i class="fas fa-angle-double-right"></i></span><a href="home.php" style="color:#FFFFFF;">Home</a></li>
    <li><span class="fa-li"><i class="fas fa-angle-double-right"></i></span><a href="collection.php" style="color:#FFFFFF;">Collection</a></li>
    <li><span class="fa-li"><i class="fas fa-angle-double-right"></i></span><a href="#" style="color:#FFFFFF;">Privacy & policy</a></li>
    <li><span class="fa-li"><i class="fas fa-angle-double-right"></i></span><a href="#" style="color:#FFFFFF;">Terms & Condition</a></li>
  </ul>
  </div>
</div>
<div class="col-lg-6 col-md-4 col-12 foo3">
  <h6>P.E.S Modern College of Engineering , Shivajinagar , Pune , 411005.</h6>
<h6>Contact No : +91 *********</h6>
<h6>
© 2020 artify.com</h6>
<i class="social-icon fab fa-facebook-f"></i>
  <i class="social-icon fab fa-twitter"></i>
    <i class="social-icon fab fa-instagram"></i>
<i class="social-icon fas fa-envelope"></i>
</div>
</div>

        <div class="foot1">



    <p >© Copyright 2020 artify.com</p>
    </div>
  </div>

</footer>
<!--/Footer-->


</body>
</html>
