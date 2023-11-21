
<div>
<?php
  if(!isset($_SESSION['SES_LOGIN'])){
    echo"<meta http-equiv='refresh' content='0; url=login.php'>";
    exit;
  }
?>
</div>
<img src="<?= $foto; ?>">