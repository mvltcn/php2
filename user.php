<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="user.css">
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="our-webcoderskull padding-lg">

  <div class="container">
    <div class="row heading heading-icon">
      <h2>Random User</h2>
    </div>
    <ul class="row">
      <?php
      $site = "https://random-data-api.com/api/users/random_user?size=32";
      $veri = file_get_contents($site);
      $VeriJson = json_decode($veri, true);
      foreach ($VeriJson as $key => $value) {
        $name = $value["first_name"];
        $lname = $value["last_name"];
        $phone = $value["phone_number"];
        $email = $value["email"];
        $adressCity = $value["address"]["city"];
        $adressStreet = $value["address"]["street_name"];
        $adressStreetAddress = $value["address"]["street_address"];
        $adressState = $value["address"]["state"];
        $adressCountry = $value["address"]["country"];




        //$website=$value["website"];
        $picture = $value["avatar"];
        echo '<li class="col-12 col-md-6 col-lg-3">
      
        <div class="cnt-block equal-hight" style="height: 380px;">
          <figure><img src=' . $picture . ' class="img-responsive" alt=""></figure>
      
            <h6>' . $name . ' ' . $lname . '</h6><hr/>
           <h10>' . $phone . '</h10></br>
           <h10>' . $email . '</h10>
           <p> <small> <b> Adress:</b> ' . $adressCity . $adressStreet . $adressStreetAddress . $adressState . $adressCountry . '</small></p></br>

      

      
      
        </div>
        </li>';
      }
      ?>


    </ul>
  </div>
</section>