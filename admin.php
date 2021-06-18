<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
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
                <button type="submit" >
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
        <!--Main Content-->
        <div class="main-content">
            <h2 class="main-title">Overview</h2>
            
            <div class="main-cards">
                <div class="main-cards-single">
                    <div class="main-cards-body">
                        <img src="images/account.png" height="50px" width="50px" >
                        <div>
                            <h5>Account Balance</h5>
                            <h4>$30,026.23</h4>
                        </div>
                    </div>
                    <div class="main-cards-footer">
                        <a href="#">View all</a>
                    </div>
                </div>
                <div class="main-cards-single">
                    <div class="main-cards-body">
                        <img src="images/pending.png" height="40px" width="40px" >
                        <div>
                            <h5>Pending</h5>
                            <h4>$14,777.56</h4>
                        </div>
                    </div>
                    <div class="main-cards-footer">
                        <a href="#">View all</a>
                    </div>
                </div>
                <div class="main-cards-single">
                    <div class="main-cards-body">
                        <img src="images/order.png" height="40px" width="40px">
                        <div>
                            <h5>Total Orders</h5>
                            <?php
                                require 'employee.php';
                                
                                $query = "SELECT * FROM bills";
                                $query_run = mysqli_query($conn, $query);
                            
                                $row = mysqli_num_rows($query_run);
                                echo "<h4>$row</h4>"
                            
                            ?>
                        </div>
                    </div>
                    <div class="main-cards-footer">
                        <a href="orders.php">View all</a>
                    </div>
                </div>
                <div class="main-cards-single">
                    <div class="main-cards-body">
                        <img src="images/smiley.png" height="40px" width="40px" >
                        <div>
                            <h5>Total Users</h5>
                            
                            <?php
                                require 'employee.php';
                            
                                $query = "SELECT * FROM users;";
                                $query_run = mysqli_query($conn, $query);
                            
                                $row = mysqli_num_rows($query_run);
                               echo "<h4>$row</h4>"
                            ?>
                        </div>
                    </div>
                    <div class="main-cards-footer">
                        <a href="users.php">View all</a>
                    </div>
                </div>
            </div>
            <div class="recent">
                <div class="order">
                    <h3>Recent Order Activity</h3>
                    <?php
                        $connection = mysqli_connect('localhost', 'root', '', 'artify');
                        $query = "SELECT * FROM bills ORDER BY id DESC LIMIT 5";
                        $query_run = mysqli_query($connection, $query);
                    ?>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Zipcode</th>
                                <th>Card Name</th>
                                <th>Card Number</th>
                                <th>Expiry Month</th>
                                <th>Expiry Year</th>
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
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['zipcode']; ?></td>
                                <td><?php echo $row['cardname']; ?></td>
                                <td><?php echo $row['cardnumber']; ?></td>
                                <td><?php echo $row['expmonth']; ?></td>
                                <td><?php echo $row['expyear']; ?></td>
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
                    <div class="order-footer">
                        <a href="orders.php">View all</a>
                    </div>
                </div>
                
            </div>
        </div>
        <!--End Main Content-->
        
    </body>
</html>