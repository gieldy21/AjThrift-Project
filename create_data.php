<html>
<head>
    <title>Create Data to MySQL</title>
</head>

<body>
    <form action="create_data.php" method="post">
        <input type="text" name="id" placeholder="Book ID"/><br>
        <input type="text" name="name" placeholder="Book Name"/><br>
        <input type="text" name="price" placeholder="Book Price"/><br>
        <input type="submit" name="submit" placeholder="Add"/>
    </form>
    <?php
        if(isset($_POST["submit"]))
        {
            //tangkap data dari method post ke variabel
            $id=$_POST["id"];
            $name=$_POST["name"];
            $price=$_POST["price"];
            //connection
            $con=new mysqli("localhost", "root", "", "library");
            $st=$con->prepare("insert into book values(?,?,?)");
            $st->bind_param("isd", $id, $name, $price);
            $st->execute();
        }
    ?>
</body>
</html>


