<?php
require_once 'models/db.php';
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
                            <!-- BEGIN NGANH NGHE FORM -->
                            <form action="insert_nganhnghe.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <label class="sr-only">Name</label>
                                        <input type="text" class="form-control mb-2" placeholder="Ngành Nghề" name="name_nganhnghe">
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Choose an image :</label>
                                        <div class="controls" style="padding-bottom: 10px;">
                                            <input type="file" name="fileUpload" id="fileUpload">
                                        </div>
                                    </div>
                                    <div class="col-12 controls">
                                        <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
                                    </div>
                                </div>
                            </form>
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