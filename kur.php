<?php
    $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/para-birimleri.json'), true);
?>
<ul>
    <li>
        <span>BIST 100</span>
        <span>Fiyat: <?php echo $JSON['XU100']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['XU100']['degisim']; ?></span>
    </li>
    <li>
        <span>DOLAR</span>
        <span>Fiyat: <?php echo $JSON['USD']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['USD']['degisim']; ?></span>
    </li>
    <li>
        <span>EURO</span>
        <span>Fiyat: <?php echo $JSON['EUR']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['EUR']['degisim']; ?></span>
    </li>
    <li>
        <span>BITCOIN</span>
        <span>Fiyat: <?php echo $JSON['BTC']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['BTC']['degisim']; ?></span>
    </li>
    <li>
        <span>ALTIN</span>
        <span>Fiyat: <?php echo $JSON['GA']['satis']; ?></span>
        <span>Değişim: <?php echo $JSON['GA']['degisim']; ?></span>
    </li>
</ul>