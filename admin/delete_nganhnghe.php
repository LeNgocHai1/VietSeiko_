<?php
require_once "config.php";
require_once "models/db.php";
require_once "models/job.php";
require_once "models/nganhnghe.php";
$nganhnghe = new Nganhnghe;
$deleteResult = "";
if (isset($_GET['id_nganhnghe']) == TRUE) {
    // Kiểm tra xem có còn sản phẩm nào thuộc protype đó hay không, nếu còn thì không được xóa.
    if (count(Job::getProducts_ByTypeID($_GET['id_nganhnghe'])) == 0) {
        Nganhnghe::deleteNganhnghe_ByTypeID($_GET['id_nganhnghe']);
        $deleteResult = 1;
    } else {
        $deleteResult = 0;
    }
}
header("Location: protypes.php?deleteResult=$deleteResult");
