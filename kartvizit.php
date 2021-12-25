<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
     <!DOCTYPE html>
     <html>

     <head>
          <?php
          include 'db_conn.php';
          ?>
          <meta charset="utf-8" />
          <title>Ana Sayfa</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="style.css">


     </head>

     <body>
          <h1>Kartvizit Bilgileri <?php echo $_SESSION['name']; ?></h1>
          <div class=" justify-content-center align-items-center ">
               <?php
                if (isset($_SESSION['id'])) {
                    $id = $_SESSION['id'];
                  
               
                    if (isset($_POST['submit'])) {
                         $adi = $_POST['adi'];
                         $sirket_adi = $_POST['sirket_adi'];
                         $telefon = $_POST['telefon'];
                         $email = $_POST['email'];
                         $adres = $_POST['adres'];
                         //$id=$_SESSION['id'];

                         $sonuc = $conn->query(sprintf("INSERT INTO kartvizit (kart_name, sirket_turu, tel,adres,mail) VALUES ('$adi', '$sirket_adi', '$telefon','$adres','$email')"));


                        
                         $son_kartvizit = $conn->insert_id;
                         $sonuc = $conn->query(sprintf("INSERT INTO kart_user (kart_id, user_id) VALUES ('$son_kartvizit', '$id')"));

                       
                       header("Location: home.php");
                   }





                         
                    
                }

               ?>
               <form method="POST" class="row-12 " action="">


                    <div class="mb-12 row">
                         <label class="col-sm-5 col-form-label">Şirket Veye Şahıs Adı</label>
                         <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputPassword" name="adi" value="">
                         </div>
                    </div>
                    <div class="mb-12 row">
                         <label class="col-sm-5 col-form-label">Şirket Türü</label>
                         <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputPassword" name="sirket_adi" value="">
                         </div>
                    </div>
                    <div class="mb-12 row">
                         <label class="col-sm-5 col-form-label">Telefon</label>
                         <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputPassword" name="telefon" value="">
                         </div>
                    </div>
                    <div class="mb-12 row">
                         <label class="col-sm-5 col-form-label">Email</label>
                         <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputPassword" name="email" value="">
                         </div>
                    </div>
                    <div class="mb-12 row">
                         <label class="col-sm-5 col-form-label">Adres</label>
                         <div class="col-sm-7">
                              <input type="text" class="form-control" id="inputPassword" name="adres" value="">
                         </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-1" name="submit" value="submit">Kartvizit Ekle</button>
                    
                    
                    <br>
               </form>

          </div>
          




     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>