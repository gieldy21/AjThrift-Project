<?php include 'headermenu.php' ?>
    <div class="container-fluid text-center slideanimm">
    <h1 style="color: #DB252B; font-weight: bold;">SHOES</h1><br>
        <div class="row text-center">
        <?php
            //connection
            $con=new mysqli("localhost", "root", "", "library");
            $st=$con->prepare("select * from book");
            $st->execute();
            $rs=$st->get_result();
            while($row=$rs->fetch_assoc())
            {
                echo '<div class="col-sm-1">
                <div class="thumbnail">
                <img src="admin/img/'.$row["image"].'" 
                width="400" height="300"/>
                <p style="width: 165px; text-align: center"><strong>'.$row["name"].'</strong></p>
                <p style="font-size: 14px">Rp. '.$row["price"].'</p>
                <a href="add_item.php?id='.$row["id"].'" style="font-size: 14px; background-color: #DB252B; color: #FFFFFF" class="btn btn-default btn-lg" >BUY</a>
                </div>
                </div>';
            }
    ?>
    <div style="width: 99.6%" class="col-sm-6">
            <table style="text-align: center; align-items: center; background-color: #DB252B; color: #FFFFFF" width="100%" border="2">
                <tr>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Price</th>
                    <th style="text-align: center;">Qty</th>
                    <th style="text-align: center;">Sub Total</th>
                    <th style="text-align: center;">Remove</th>
                </tr>
    <?php
    $con=new mysqli("localhost", "root", "", "library");
    $st=$con->prepare("select book.id, qty, name, price from book inner join temp_order 
    on book.id=temp_order.itemid where email=?");
    $st->bind_param("s", $_SESSION["user"]);
    $st->execute();
    $rs=$st->get_result();
    $total=0;
    while($row=$rs->fetch_assoc())
    {
        echo '<tr>';
        echo '<td>'.$row["name"].'</td>';
        echo '<td>'.$row["price"].'</td>';
        echo '<td>'.$row["qty"].'</td>';
        echo '<td>'.$row["price"]*$row["qty"].'</td>';
        echo '<td><a href="delete_item.php?id='.$row["id"].'">
        <span style="color: #ffffff;" class="glyphicon glyphicon-trash"></span></a></td>';
        echo '</tr>';
        $total = $total + ($row["price"]*$row["qty"]);
    }
    ?>
            </table>
            <?php
                echo '<h3>The total is Rp. '.$total.'</h3>';
            ?>
            <form action="add_order.php" method="post">
                <input type="submit" value="Order Now" class="btn btn-danger" />
            </form>
        </div>
        </div>
    </div>
<?php include 'footer.php' ?>