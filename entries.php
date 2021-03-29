<?php require'header.php' ?>
<html lang="en">
  <head>
    <title>Diary Entries</title>
    </head>

<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
      /*Responsive table*/
      .table { 
        width: 100%; 
        border-collapse: collapse; 
        background: #34495e; 
        color: #f3f3f3;
      }

      td, th { 
        padding: 8px; 
        text-align: left; 
        font-family: poppins;
      }

      /* Zebra striping */
      td{ 
        background: #fe91a3; 
        color: #0E2431;
      }

      th { 
        background: : #0E2431; 
        color: #ff9aa2;
        font-weight: bold; 
      }


      </style>

<body>

  <?php 
       #require('header.php');
       include('connect.php');
       echo "<br>";
       echo "<br>";
       echo "<br>";


       $select = "SELECT * FROM diary";

       $products = $con->query($select);
       
    ?>
<div class="container"><br>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Entry Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($products as $product) { ?>
                    <tr>
                         <td><?php echo htmlspecialchars($product['Date']) ?></td>
                        <td><?php echo htmlspecialchars($product['Title']) ?></td>
                    <td>


                    		<a href="view.php?id=<?= $product['DiaryID'] ?>" class="btn btn-primary btn-sm">View</a>
                            <a href="edit.php?id=<?= $product['DiaryID'] ?>" class="btn btn-success btn-sm">Edit</a>
                            <a href="delete.php?id=<?= $product['DiaryID'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>    
</body>
</html>
