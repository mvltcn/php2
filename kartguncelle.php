<!DOCTYPE html>
<html>

<head>
    <title>Veritabanı Yönetimi - Güncelle</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<header>
    <?php
    include 'db_conn.php';
    ?>
</header>

<body>
   
    
    <div class="container">
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['submit'])) {
            $kart_name = $_POST['kart_name'];
            $sirket_turu = $_POST['sirket_turu'];
            $tel=$_POST['tel'];
            $email=$_POST['mail'];
            $adres=$_POST['adres'];
            


            $guncelleSorgusu = mysqli_query(
                $conn,
                "UPDATE kartvizit 
                                                     SET  kart_name='$kart_name',sirket_turu='$sirket_turu',tel='$tel', mail='$email',adres='$adres'
                                                     WHERE id='$id'"
            );
            header("Location: listele.php");
        }
    }
    $siralamaSorgusu =
        mysqli_query($conn, "SELECT * FROM kartvizit WHERE id='$id'");
    $user = mysqli_fetch_array($siralamaSorgusu);
    ?>
        <form method="POST" class="row-3">

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Kartvizit Adı</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="kart_name" value="<?php echo $user['kart_name']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Şirket Adı</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="sirket_turu" value="<?php echo $user['sirket_turu']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Telefon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="tel" value="<?php echo $user['tel']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Adres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="adres" value="<?php echo $user['adres']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="mail" value="<?php echo $user['mail']; ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-3" name="submit" value="Guncelle">Güncelle</button>
        </form>
    </div>
</body>

</html>