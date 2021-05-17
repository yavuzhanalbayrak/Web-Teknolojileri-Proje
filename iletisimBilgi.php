<?php 
error_reporting(0)
?>
<table>
    <tr>
        <td>ad</td><td>:</td>
        <td><b>
        <?php
             echo $_POST['ad']
        ?>
        <b>
        </td>
    </tr>
      <tr>
        <td>Soyad</td><td>:</td>
        <td><b>
        <?php
             echo $_POST['soyad']
        ?>
        <b>
        </td>
    </tr>
    <tr>
        <td>E-Mail Adresi</td><td>:</td>
        <td><b>
        <?php
             echo $_POST['email']
        ?>
        <b>
        </td>
    </tr>
    <tr>
        <td>Telefon Numarası</td><td>:</td>
        <td><b>
        <?php
             echo $_POST['telefon']
        ?>
        <b>
        </td>
    </tr>
    <tr>
        <td>Cinsiyet</td><td>:</td>
        <td><b>
        <?php
             echo $_POST['cinsiyet']
        ?>
        <b>
        </td>
    </tr>
    <tr>
        <td>Şehir</td><td>:</td>
        <td><b>
        <?php
             echo $_POST['sehir']
        ?>
        <b>
        </td>
    </tr>
    <tr>
        <td>Ulaşım Aracı</td><td>:</td>
        <td><b>
        <?php
             echo $_POST['cbMail']."&nbsp;".$_POST['cbTelefon']
             
        ?>
        <b>
        </td>
    </tr>
    <tr>
        <td>Açıklama</td><td>:</td>
        <td><b>
        <?php
             echo $_POST['aciklama']
        ?>
        <b>
        </td>
    </tr>
      
</table>
<a style=" color:black; text-decoration:none; border-style:solid; border-width:0.5px; " href="anasayfa.html">Geri Dön</a>