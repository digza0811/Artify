<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <title>Manage Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/admins.css">

        <!-- Font Awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    <body>
        <!--Navbar-->
        <div class="navbar">
             <form class="navbar-search">
                <input type="text" name="Search" class="navbar-search-input" placeholder="Search..">
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fas fa-bell"></i>
                    </a>
                    
                </li>
                <li class="nav-item">
                    <div class="badge">
                        <img src="images/profile.png">
                    </div>
                </li>
            </ul>
        </div>
        <!--End Navbar-->
        <!--Sidebar-->
        <div class="sidebar">
            <div class="sidebar-header">
                <img class="logo" src="images/logo.jpg">
<!--
                <a class="sidebar-link">
                    <i class="fas fa-bars"></i>
                </a>
-->
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="admin.php">
                            <img src="images/dashboard.png">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="employees.php">
                            <img src="images/team.png">
                            <span>Employees</span>
                        </a>
                    </li>
                    <li>
                        <a href="users.php">
                            <img src="images/user.png">
                            <span>Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="orders.php">
                            <img src="images/orders.png">
                            <span>Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="products.php">
                            <img src="images/products.png">
                            <span>Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="items.php">
                            <img src="images/collection.png">
                            <span>Collections</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/settings.png">
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--End Sidebar-->
        <!--Manage Products-->
        <div class="main-content">
            <h2 class="main-title">Add Product</h2>
            <div class="add-products">
                <form action="products.php" method="add">
                    <div>
                        <label>Art Title</label>
                        <input type="text" name="Title" placeholder="Art Title" class="art-input">
                    </div>
                    <div>
                        <label>Amount</label>
                        <input type='number' name="amount" placeholder="Amount" class="art-input">
                    </div>
                    <div>
                        <label>Art</label>
                        <input type="file" name="image" placeholder="Art Image" class="art-input">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" id="des" placeholder="Art Description"></textarea>
                    </div>
                    <div>
                        <button type="button" class="btn">Add Product</button>
                    </div> 
                </form>
            </div>
            <div class="recent">
                <h2 class="main-title">Manage Products</h2>
                <div class="manage-products">
                    <?php
                        $connection = mysqli_connect('localhost', 'root', '', 'artify');
                        $query = "SELECT * FROM products UNION SELECT * FROM product2" ;
                        $query_run = mysqli_query($connection, $query,);
                    ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Product Code</th>
                                <th>Art Title</th>
                                <th>Price</th>
                                <th>Art Image</th>
                                <th class="action" colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                            
                            ?>
                            <tr>
                                <td><?php echo $row['code']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['image']; ?></td>
                                <td><a href="#" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                                <td><a href="#" class="publish">publish</a></td>
                            </tr>     
                            <?php
                                    }
                                }
                            
                                else
                                {
                                    echo "No Record Found";
                                }
                            
                            ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
