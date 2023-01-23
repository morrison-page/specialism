<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head -->
   <?php require 'includes/head.php'; ?>
   <!-- Login Check -->
   <?php loginCheck(); ?>
</head>
<body>
    <!-- Navbar -->
    <?php require 'includes/nav.php'; ?>
    <!-- Connection -->
    <?php require 'scripts/connect.php'; ?>

    <!-- Content -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">User ID</th>
                                <th scope="col">Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php require 'scripts/userDetails.php'; ?>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                    <table class="table">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                        </thead>
                        <tbody>
                            <?php
                                // Grab value sent via URL
                                $itemToEdit = $_GET['item'];

                                // Craft SQL query to get Item
                                $findItemToEditSQL = "SELECT * FROM products WHERE ProductID = $itemToEdit";
                                $result = mysqli_query($conn, $findItemToEditSQL);

                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <!-- Form to Change Data -->
                                        <form action="scripts/editData.php" method="post">
                                        ProductID: <input type="number" name="productID" id="productID" value=<?php echo $row['ProductID']; ?>>    
                                        ProductName: <input type="text" name="productName" id="productName" value=<?php echo $row['ProductName']; ?>>   
                                        UnitPrice: <input type="number" name="unitPrice" id="unitPrice" value=<?php echo $row['UnitPrice']; ?>>    
                                        UnitsInStock: <input type="number" name="unitsInStock" id="unitsInStock" value=<?php echo $row['UnitsInStock']; ?>>
                                        <button type="submit" class="btn btn-primary">Edit Item</button>    
                                        </form>

                                    <?php
                                };
                            ?>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Footer -->
    <?php require 'includes/footer.php'; ?>
    <!-- JS Bootstrap -->
    <?php require 'includes/bootstrapjs.php'; ?>
</body>
</html>