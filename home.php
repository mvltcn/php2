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
          <h1>Merhaba, <?php echo $_SESSION['name']; ?></h1>
          <div class=" justify-content-center align-items-center ">
               <?php
               if (isset($_SESSION['id'])) {
                    $id = $_SESSION['id'];
                    if (isset($_POST['submit'])) {
                         $name = $_POST['name'];
                         $sur_name = $_POST['sur_name'];
                         $email = $_POST['email'];
                         $number = $_POST['number'];


                         $guncelleSorgusu = mysqli_query(
                              $conn,
                              "UPDATE users 
                                                     SET  sur_name='$sur_name',name='$name',email='$email', number='$number'
                                                     WHERE id='$id'"
                         );
                         $_SESSION['name']=$name;
                         $_SESSION['sur_name']=$sur_name;
                         $_SESSION['email']=$email;
                         $_SESSION['number']=$number;


                         header("Location: home.php");
                    }
               }

               ?>
               <form method="POST" class="row-3 ">


                    <div class="mb-3 row">
                         <label class="col-sm-2 col-form-label">Adı</label>
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword" name="name" value="<?php echo $_SESSION['name']; ?>">
                         </div>
                    </div>
                    <div class="mb-3 row">
                         <label class="col-sm-2 col-form-label">Soyadı</label>
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword" name="sur_name" value="<?php echo $_SESSION['sur_name']; ?>">
                         </div>
                    </div>
                    <div class="mb-3 row">
                         <label class="col-sm-2 col-form-label">Email</label>
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword" name="email" value="<?php echo $_SESSION['email']; ?>">
                         </div>
                    </div>
                    <div class="mb-3 row">
                         <label class="col-sm-2 col-form-label">Numara</label>
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword" name="number" value="<?php echo $_SESSION['number']; ?>">
                         </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-1" name="submit" value="Guncelle">Güncelle</button>
                    
                    <a class="btn btn-primary mb-1" href="logout.php" role="button">Çıkış Yap</a>
                    <a class="btn btn-primary mb-1" href="kartvizit.php" role="button">Kartvizit Ekle</a>
                    <a class="btn btn-primary mb-1" href="listele.php" role="button">Listeler</a>
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