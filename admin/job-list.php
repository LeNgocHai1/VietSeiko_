<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/hinhthuc.php";
require_once "models/nganhnghe.php";
$job = new Job;
$hinhthuc = new Hinhthuc;
$nganhnghe = new Nganhnghe;

?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="d-flex align-items-center mb-4 flex-wrap">
      <h3 class="me-auto">Job List</h3>
      <div>
        <a href="insert_job.php" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Add New Job</a>
        <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3">
          <i class="fas fa-envelope"></i></a>
        <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"><i class="fas fa-phone-alt"></i></a>
        <a href="javascript:void(0);" class="btn btn-secondary btn-sm"><i class="fas fa-info"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="table-responsive">
          <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
            <thead>
              <tr>
                <th>No</th>
                <th>Chức Vụ</th>
                <th>Ngành Nghề</th>
                <th>Ngày Đăng</th>
                <th>Ngày cuối cùng</th>
                <th>Ngày gần</th>
                <th>Trạng Thái</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $page = 1;
              $resultsPerPage = 8;
              $totalResults = count(Job::getAllJob());
              if (isset($_GET['page']) == TRUE) {
                $page = $_GET['page'];
              }
              $list_of_job = Job::getAllJob_andCreatePagination($page, $resultsPerPage);

              //Output:
              echo "<p style=\"text-align:center;\"><b>There are $totalResults results.</b></p>";
              foreach ($list_of_job as $key => $value) {
              ?>
                <tr>
                  <td><?php echo $value['id_job'] ?></td>
                  <td><?php echo $value['chucvu'] ?></td>
                  <td><?php $nganhngheName = $jobAdmin->getNganhnghe($value['id_nganhnghe']);
                      foreach ($nganhngheName as $name => $num) echo $num['name_nganhnghe'] ?></td>
                  <td class="wspace-no"><?php echo $value['ngaydang'] ?></td>
                  <td><?php echo $value['ngaycuoicung'] ?></td>
                  <td><?php echo $value['ngaygan'] ?></td>

                  <td>
                    <span class="badge badge-success badge-lg light">
                      <?php $trangthaiName = $trangthaiAdmin->getTrangThai($value['id_trangthai']);
                      foreach ($trangthaiName as $name => $num) echo $num['name_trangthai'] ?>
                    </span>
                  </td>
                  <td>
                    <div class="action-buttons d-flex justify-content-end">
                      <a href="javascript:void(0);" class="btn btn-success light mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px">
                          <g data-name="Layer 21">
                            <path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path>
                            <circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle>
                          </g>
                        </svg>
                      </a>
                      <a href="javascript:void(0);" class="btn btn-secondary light mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                          </g>
                        </svg>
                      </a>
                      <a onclick="return confirm('Are you want to delete?')" href="delete_job.php?id_job=<?php echo $value['id_job']; ?>" class="btn btn-danger light">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
            <span>Page 1 of 5, showing 2 records out of 8 total,
              starting on record 1, ending on 2</span>
            <nav aria-label="Page navigation example">
              <ul class="pagination my-2 my-md-0">
                <?php echo Job::paginate("job-list.php?", $page, $totalResults, $resultsPerPage, 1) ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-4">
          <label class="form-label">Position</label>
          <input type="text" class="form-control" placeholder="Name" aria-label="name" />
        </div>
        <div class="mb-4">
          <label class="form-label">Job Type</label>
          <select id="inputState" class="form-select form-control">
            <option selected>Choose...</option>
            <option>Part-Time</option>
            <option>Full-Time</option>
            <option>Freelancer</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="form-label">Description:</label>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <div class="mb-4">
          <label class="form-label">Posted Date</label>
          <div class="input-group">
            <div class="input-group-text">
              <i class="far fa-clock"></i>
            </div>
            <input size="16" type="text" value="2012-06-15" readonly class="form-control form_datetime" />
          </div>
        </div>
        <div class="mb-4">
          <label class="form-label">Last Date To Apply</label>
          <div class="input-group">
            <div class="input-group-text">
              <i class="far fa-clock"></i>
            </div>
            <input size="16" type="text" value="2012-06-15" readonly class="form-control form_datetime" />
          </div>
        </div>
        <div class="mb-4">
          <label class="form-label">Close Date</label>
          <div class="input-group">
            <div class="input-group-text">
              <i class="far fa-clock"></i>
            </div>
            <input size="16" type="text" value="2012-06-15" readonly class="form-control form_datetime" />
          </div>
        </div>
        <div class="mb-4">
          <span>Status:<label class="radio-inline mx-3"><input type="radio" name="optradio" /> Active</label></span>
          <span><label class="radio-inline me-3"><input type="radio" name="optradio" /> In Active</label></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-primary">
            Save changes
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->

<?php
require_once "footer.php";
?>