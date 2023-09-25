<?php
require_once "config.php";
require_once "models/db.php";
require_once "models/nganhnghe.php";
$nganhnghe = new Nganhnghe;
?>
<?php
$insertResult = -1;
if (isset($_GET['name_nganhnghe']) == TRUE) {
    $insertResult = Nganhnghe::insertJobNganhnghe($_GET['name_nganhnghe']);
}
header("Location: new-nganhnghe.php?functionType=protypes&insertResult=$insertResult");
?>