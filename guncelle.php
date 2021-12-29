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
            $name = $_POST['name'];
            $sur_name = $_POST['sur_name'];
            $email=$_POST['email'];
            $number=$_POST['number'];
            $user_name=$_POST['user_name'];


            $guncelleSorgusu = mysqli_query(
                $conn,
                "UPDATE users 
                                                     SET  sur_name='$sur_name',name='$name',email='$email', number='$number',user_name='$user_name'
                                                     WHERE id='$id'"
            );
            header("Location: listele.php");
        }
    
    $siralamaSorgusu =
        mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
    $user = mysqli_fetch_array($siralamaSorgusu);
    }?>
        <form method="POST" class="row-3">

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Kullanıcı Adı</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="user_name" value="<?php echo $user['user_name']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Adı</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="name" value="<?php echo $user['name']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Soyadı</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="sur_name" value="<?php echo $user['sur_name']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="email" value="<?php echo $user['email']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Numara</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="number" value="<?php echo $user['number']; ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-3" name="submit" value="Guncelle">Güncelle</button>
        </form>
    </div>
</body>

</html>