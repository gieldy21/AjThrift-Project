<?php include 'headercheckout.php' ?>

<h2 class="text-center">CHECK OUT</h2>
<div id="contact" class="container-fluid bg-grey">
  <div class="row">
  <h2 style="font-size: 14px;" class="text-center">Isi dengan benar</h2>
    <div style="width: 99%;" class="col-sm-7 slideanim">
      <div class="row">
        <form action="checkout.php" method="post">
        <input class="form-control" name="nama" placeholder="Nama" type="text" style="margin: 0px 600px 0px 370px; width: 700px;" required><br>
        <input class="form-control" name="no_telp" placeholder="Nomor Telepon" type="text" style="margin: 0px 600px 0px 370px; width: 700px;" required><br>
        <select class="form-control" name="ukuran" style="text-align: center; margin: 0px 600px 0px 370px; width: 700px;">
          <option>Size<option>
          <option>40</option>
          <option>41</option>
          <option>42</option>
          <option>43</option>
          <option>44</option>
          <option>45</option>
          <option>46</option>
          <option>47</option>
        </select><br>
        <textarea class="form-control" name="alamat" placeholder="Alamat" rows="5" style="margin: 0px 600px 0px 370px; width: 700px; height: 100px;"></textarea><br>
        <iframe style="margin: 0px 600px 0px 370px; width: 700px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.0440206395572!2d108.2228161098554!3d-7.336408728890793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5742484bded7%3A0x54914b15fea24eef!2sIndonesia%20University%20of%20Education!5e0!3m2!1sen!2sid!4v1640165916876!5m2!1sen!2sid" width="700" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br>
        <input class="form-control" name="kecamatan" placeholder="Kecamatan" type="text" style="margin: 0px 600px 0px 370px; width: 700px;" required><br>
        <input class="form-control" name="provinsi" placeholder="Provinsi" type="text" style="margin: 0px 600px 0px 370px; width: 700px;" required><br>
        <input class="form-control" name="negara" placeholder="Negara" type="text" style="margin: 0px 600px 0px 370px; width: 700px;" required><br>
        <select class="form-control" name="metode_pembayaran" style="text-align: center; margin: 0px 600px 0px 370px; width: 700px;">
          <option>Metode Pembayaran<option>
          <option>BCA</option>
          <option>Mandiri</option>
          <option>BNI</option>
          <option>Gopay</option>
          <option>OVO</option>
          <option>Alfamart</option>
          <option>Indomart</option>
          <option>Shopee</option>
        </select>
        <div style="padding: 0px 525px 0px;" class="bayar">
          <img src="image/bca.png">
          <img src="image/mandiri.png">
          <img src="image/bni.png">
          <img src="image/gopay.png"><br>
          <img src="image/ovo.png">
          <img src="image/alfamart.png">
          <img src="image/indomart.png">
          <img src="image/sopi.png"><br><br>
        </div>
        </div>
        <input style="margin: 0px 600px 0px 660px;" type="submit" name="submit" value="Kirim" class="btn btn-danger" />
        </form>
        <?php
            if(isset($_POST["submit"]))
            {
                $nama=$_POST["nama"];
                $no_telp=$_POST["no_telp"];
                $ukuran=$_POST["ukuran"];
                $alamat=$_POST["alamat"];
                $kecamatan=$_POST["kecamatan"];
                $provinsi=$_POST["provinsi"];
                $negara=$_POST["negara"];
                $metode_pembayaran=$_POST["metode_pembayaran"];

                $con=new mysqli("localhost", "root", "", "library");
                $st=$con->prepare("insert into checkout values(?,?,?,?,?,?,?,?)");
                $st->bind_param("ssssssss", $nama, $no_telp, $ukuran, $alamat, $kecamatan, $provinsi, $negara, $metode_pembayaran);
                $st->execute();
                echo "<script>window.location='selesai.php';</script>";
            }
        ?>
      <div class="row">
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php' ?>