<html>
    <head>
        <title>My first web page</title>
        <link rel="stylesheet" type="text/css"  media="all" href="first.css">

    </head>
    <body>
        
    <?php 
       require('header.php');
       include('connect.php');
       echo "<br>";
       echo "<br>";
       echo "<br>";

       $select = "SELECT * FROM menu WHERE id = :id";

       $statement = $con->prepare($select);

       $statement->bindParam(":id", $_GET['id']);

       $statement->execute();

       $product = $statement->fetch();

    //    echo "<pre>";
    //    print_r($product);
       
    ?>
    
    <div class="container">
        <h4 class="modal-title">Edit Product</h4>
        <?php 
            if (isset($_POST['add'])) {
                $insert = "UPDATE menu SET
                            name=:name,
                            price=:price,
                            description=:desc,
                            type=:type
                            WHERE id=:id";

                $preparedInsert = $con->prepare($insert);

                $preparedInsert->bindParam(':name', $_POST['name']);
                $preparedInsert->bindParam(':price', $_POST['price']);
                $preparedInsert->bindParam(':desc', $_POST['description']);
                $preparedInsert->bindParam(':type', $_POST['type']);
                $preparedInsert->bindParam(':id', $_GET['id']);

                $rows = $preparedInsert->execute();

                if ($rows > 0) {
                    header("location: index.php");
                }
            }
        ?>
        <form method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?= $product['name'] ?>">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="decimal" name="price" class="form-control" value="<?= $product['price'] ?>">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" cols="30" rows="10" class="form-control"><?= $product['description'] ?></textarea>
            </div>
            <div class="form-group">
                <label>Type</label>
                <select name="type" class="form-control">
                    <option value="main" <?php if ($product['type'] == 'main') { echo 'selected'; } ?>>Main Dish</option>
                    <option value="side" <?php if ($product['type'] == 'side') { echo 'selected'; } ?>>Side Dish</option>
                    <option value="drinks" <?php if ($product['type'] == 'drinks') { echo 'selected'; } ?>>Drinks</option>
                    <option value="dessert" <?php if ($product['type'] == 'dessert') { echo 'selected'; } ?>>Dessert</option>
                </select>
            </div>

            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary btn-sm" name="add">Save</button>
        </form>
            
    
    </div>

    </body>
</html>