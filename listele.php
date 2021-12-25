<!DOCTYPE html>
<html>

<head>
    <title>Veritabanı Yönetimi - Listele</title>

    <meta charset="utf-8" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<header>
    <?php
    include 'db_conn.php';
    ?>
</header>

<body>
<div class="container">

<h3>Kullanıcı Listesi</h3>
    
    <table class="table table-striped table-hover" >
  <thead>
    <tr>
      <th scope="col">İd</th>
      <th scope="col">Kullanıcı Adı</th>
      <th scope="col">Adı</th>
      <th scope="col">Soyadı</th>
      <th scope="col">şifre</th>
      <th scope="col">Email</th>
      <th scope="col">Numara</th>
      <th scope="col">düzenle</th>
      <th scope="col">sil</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sorgu = "SELECT * FROM users";
    $sorguSonucu = mysqli_query($conn, $sorgu);
      
    while ($user = mysqli_fetch_assoc($sorguSonucu)){
    echo "<tr>
      <th> ".$user['id']."</th>
      <td>".$user['user_name']."</td>
      <td>".$user['name']."</td>
      <td>".$user['sur_name']."</td>
      <td>".$user['password']."</td>
      <td>".$user['email']."</td>
      <td>".$user['number']."</td>
      <td><a href='guncelle.php?id=" . $user['id'] . "'>Düzenle</a></td>
      <td><a href='sil.php?id=" . $user['id'] . "'>Sil</a></td>
      
    </tr>";   



   } ?> 
   </tbody>
</table>
  
  

    <br><a href='signup.php'>Yeni kayıt ekle</a><br> <br>
    <h3>Kartvizit Listesi</h3>
    <table class="table table-striped table-hover" >
  <thead>
    <tr>
      <th scope="col">İd</th>
      <th scope="col">Kartvizit Adı</th>
      <th scope="col">Şirket Açıklama</th>
      <th scope="col">Telefon</th>
      <th scope="col">Adres</th>
      <th scope="col">Email</th>     
      <th scope="col">düzenle</th>
      <th scope="col">sil</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sorgu = "SELECT * FROM kartvizit";
    $sorguSonucu = mysqli_query($conn, $sorgu);
      
    while ($user = mysqli_fetch_assoc($sorguSonucu)){
    echo "<tr>
      <td>".$user['id']."</td>
      <th> ".$user['kart_name']."</th>
      <td>".$user['sirket_turu']."</td>      
      <td>".$user['tel']."</td>
      <td>".$user['adres']."</td>
      <td>".$user['mail']."</td>      
      <td><a href='kartguncelle.php?id=" . $user['id'] . "'>Düzenle</a></td>
      <td><a href='kartsil.php?id=" . $user['id'] . "'>Sil</a></td>
      
    </tr>";   



   } ?> 
   </tbody>
</table>
    
    
    
    <br><a href='kartvizit.php'>Yeni kayıt ekle</a>
    </div>

</body>

</html>