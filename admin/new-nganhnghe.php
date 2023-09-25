<?php
require_once 'header.php';

require_once "models/nganhnghe.php";

$nganhnghe = new Nganhnghe;
?>

<div class="content-body" style="min-height: 796px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">New Ngành Nghề</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Ngành Nghề</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <?php
                            if (isset($_GET['functionType']) == TRUE && $_GET['functionType'] == "job_nganhnghe") {
                            ?>
                                <!-- BEGIN NGANH NGHE FORM -->
                                <form action="insert_nganhnghe.php" method="get" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <label class="sr-only">Name</label>
                                            <input type="text" class="form-control mb-2" placeholder="Ngành Nghề" name="name_nganhnghe" required>
                                        </div>
                                        <div class="col-12 controls">
                                            <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- INSERT RESULT: -->
                                <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                                    <?php
                                    echo "<div style=\"text-decoration:underline;\">RESULT:</div>";
                                    if (isset($_GET['insertResult']) == TRUE) {
                                        if ($_GET['insertResult'] > 0) {
                                            echo "<span style=\"color:green;\">" . "Data has been inserted." . "</span>";
                                        } else {
                                            echo "<span style=\"color:red;\">" . "Can not insert data!" . "</span>";
                                        }
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'footer.php';
?>