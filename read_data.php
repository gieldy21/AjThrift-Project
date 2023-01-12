<html>
<head>
    <title>Read Data to MySQL</title>
</head>

<body>
    <form action="read_data.php" method="post">
        <input type="text" name="id" placeholder="Enter Book ID"/>
        <input type="submit" name="submit" placeholder="Find"/>
    </form>
    <?php
        if(isset($_POST["submit"]))
        {
            //tangkap data dari method post ke variabel
            $id=$_POST["id"];
            //connection
            $con=new mysqli("localhost", "root", "", "library");
            $st=$con->prepare("select * from book where id=?");
            $st->bind_param("i", $id);
            $st->execute();
            $rs=$st->get_result();
            $row=$rs->fetch_assoc();
            echo $row["id"] . "<br>";
            echo $row["name"] . "<br>";
            echo $row["price"] . "<br>";
        }
    ?>
</body>
</html>


