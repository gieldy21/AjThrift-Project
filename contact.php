
<?php include 'headercontact.php' ?>

<!-- Container (Contact Section) -->
<h2 class="text-center">KONTAK</h2>
<div id="contact" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-5">
      <p>Tersedia 07.00-20.00 WIB</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Tangerang</p>
      <p><span class="glyphicon glyphicon-phone"></span>+62 5939647055</p>
      <p><span class="glyphicon glyphicon-envelope"></span> aj.thrift@gmail.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
      <form action="contact.php" method="post">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="nama" placeholder="Nama" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
            <input class="btn btn-default pull-right" type="submit" name="submit" value="Send">
      </form>
      <?php
        if(isset($_POST["submit"]))
        {
            $nama=$_POST["nama"];
            $email=$_POST["email"];
            $comments=$_POST["comments"];

            $con=new mysqli("localhost", "root", "", "library");
            $st=$con->prepare("insert into contact values(?,?,?)");
            $st->bind_param("sss", $nama, $email, $comments);
            $st->execute();
        }
      ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>