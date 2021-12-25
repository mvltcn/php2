<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="user.css">
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
    include 'db_conn.php';
    ?>

<section class="our-webcoderskull padding-lg">

  <div class="container">
    <div class="row heading heading-icon">
      <h2>Kartvizitler</h2>
    </div>
    <ul class="row">
      
      <?php
      $sorgu = "SELECT * FROM kartvizit INNER JOIN kart_user ON kartvizit.id = kart_user.kart_id INNER JOIN users As kullanici ON kart_user.user_id=kullanici.id " ;   
                     
      
    $sorguSonucu = mysqli_query($conn, $sorgu);
      
    while ($kart = mysqli_fetch_assoc($sorguSonucu)){       



            echo '<li class="col-12 col-md-6 col-lg-3">
          
            <div class="cnt-block equal-hight" style="height: 380px;">
            
            
                <h2 class="card-head">' .$kart['kart_name']. ' </h2>
                <h5 >' .$kart['sirket_turu']. ' </h5><hr>
               <span>' .$kart['tel'] . '</span><hr>
               <span>' .$kart['mail']. '</span><hr>
               <span>  ' .$kart['adres'].'<span><br>   <br>
          
    
          
               <span style="color:red" >' .$kart['user_name']. '<span>
            </div>
            
            </li>';
          }
          ?>
          


    </ul>
  </div>
</section>