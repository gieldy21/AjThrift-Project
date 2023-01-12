<?php include 'header.php' ?>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <?php include 'menu.php' ?>
    <div class="col-sm-8 text-left"> 
      <h1>Book Management</h1>
      <a href="create_book.php" class="w3-button w3-white w3-border">Add Data</a>
      <table class="w3-table w3-striped w3-border">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
      <?php
            //connection
            $con=new mysqli("localhost", "root", "", "library");
            $st=$con->prepare("select * from book");
            $st->execute();
            $rs=$st->get_result();
            while($row=$rs->fetch_assoc())
            {
                echo '<tr>';
                echo '<td>'.$row["id"].'</td>';
                echo '<td>'.$row["name"].'</td>';
                echo '<td>'.$row["price"].'</td>';
                echo '<td><img src="img/'.$row["image"].'" width=100px/></td>';
                echo '<td><a href="delete_book.php?id='.$row["id"].'">Delete</a> 
                | <a href="update_book.php?id='.$row["id"].'">Update</a></td>';
            }
    ?>
    </table>
    </div>
    
  </div>
</div>

<?php include 'footer.php' ?>
