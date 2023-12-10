<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
  <h6 class="heading">Class Routine </h6>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Class Routine </a></li>
  </ul>
</div>
<!-- ################################################################################################ -->
</div>

<!-- ###------- Dynamic notice section ----------- ### -->
<?php include_once('components/dynamic-notice.php') ?>
<!-- ###------- Dynamic notice section ----------- ### -->

<!-- ----------- Main section Start ----------  -->
<div class="container">
  <div class="row">
    <div class="col-lg-9 main">
      <div class="card shadow">
        <div class="card-header bg-primary text-white">
          <h2>ক্লাস রুটিন </h2>
        </div>
        <div class="card-body">
          <section class="content"> <!-- Start of table section -->
            <div class="row" id="table1"><!--MSK-000132-1-->
              <div class="col-md-12">
                <div class="box">
                  <div class="box-body table-responsive" style="overflow-x:auto;">
                    <div class="table">
                      <ol>
                        <li>
                          <i class="fas fa-check" style="color:green"></i>
                          নবম শ্রেনীর ক্লাস রুটিন
                          <span>৫/১/২০২৪</span>
                          <span>
                            <a href="view-routin.php">দেখুন</a>
                          </span>
                        </li>
                        <li>
                          <i class="fas fa-check" style="color:green"></i>
                          অষ্টম শ্রেনীর ক্লাস রুটিন
                          <span>৫/১/২০২৪</span>
                          <span>
                            <a href="view-routin.php">দেখুন</a>
                          </span>
                        </li>
                        <li>
                          <i class="fas fa-check" style="color:green"></i>
                          নবম শ্রেনীর ক্লাস রুটিন
                          <span>৫/১/২০২৪</span>
                          <span>
                            <a href="view-routin.php">দেখুন</a>
                          </span>
                        </li>
                        <li>
                          <i class="fas fa-check" style="color:green"></i>
                          প্রথম শ্রেনীর ক্লাস রুটিন
                          <span>৫/১/২০২৪</span>
                          <span>
                            <a href="view-routin.php">দেখুন</a>
                          </span>
                        </li>
                        <li>
                          <i class="fas fa-check" style="color:green"></i>
                          দশম শ্রেনীর ক্লাস রুটিন
                          <span>৫/১/২০২৪</span>
                          <span>
                            <a href="view-routin.php">দেখুন</a>
                          </span>
                        </li>
                        <li>
                          <i class="fas fa-check" style="color:green"></i>
                          নবম শ্রেনীর ক্লাস রুটিন
                          <span>৫/১/২০২৪</span>
                          <span>
                            <a href="view-routin.php">দেখুন</a>
                          </span>
                        </li>
                      </ol>
                    </div>
                    <!-- ----------------- pagination code --------------  -->
                    <div class="container mt-4">
                      <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active" aria-current="page">
                          <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </div>
                    <!-- ----------------- pagination code --------------  -->
                  </div>
                </div>
              </div>
            </div>
          </section> <!-- End of table section -->

        </div>
      </div>
    </div>

    <!-- ----------- sidebar section start ----------  -->
    <?php include_once('components/sidebar.php') ?>
    <!-- ----------- sidebar section start  ----------  -->
  </div>
</div>


<?php include_once("footer.php"); ?>