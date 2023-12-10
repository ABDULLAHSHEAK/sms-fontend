<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
  <h6 class="heading">Teacher</h6>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Teacher</a></li>
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
          <h2>বিদ্যালয়ের সকল শিক্ষকমন্ডলি</h2>
        </div>
        <div class="card-body">
          <section class="content"> <!-- Start of table section -->
            <div class="row" id="table1"><!--MSK-000132-1-->
              <div class="col-md-12">
                <div class="box">
                  <div class="box-body table-responsive" style="overflow-x:auto;">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <th>SL</th>
                        <th>নাম</th>
                        <th>পদবী</th>
                        <th>মোবাইল</th>
                        <th>ছবি</th>
                        <th>দেখুন</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>১</td>
                          <td>মনিরুজ্জামান</td>
                          <td>প্রধান শিক্ষক </td>
                          <td>০১৭৪৫-২০২০২০</td>
                          <td>
                            <img src="images/home/p1.png" alt="Teacher Photo" style="max-width: 50px;width:100%">
                          </td>
                          <td>
                            <div style="margin-right: 5px;">
                              <form action="">
                                <a href="teacher-profile.php" class="btn btn-warning btn-sm">View</a>
                              </form>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>২</td>
                          <td>সেলিম আকন্দ </td>
                          <td>বাংলা শিক্ষক </td>
                          <td>০১৭৪৫-২০২০২০</td>
                          <td>
                            <img src="images/home/p2.png" alt="Teacher Photo" style="max-width: 50px;width:100%">
                          </td>
                          <td>
                            <div style="margin-right: 5px;">
                              <form action="">
                                <a href="teacher-profile.php" class="btn btn-warning btn-sm">View</a>
                              </form>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>৩</td>
                          <td>করিম শেখ </td>
                          <td>গণিত শিক্ষক</td>
                          <td>০১৭৪৫-২০২০২০</td>
                          <td>
                            <img src="images/home/p3.png" alt="Teacher Photo" style="max-width: 50px;width:100%">
                          </td>
                          <td>
                            <div style="margin-right: 5px;">
                              <form action="">
                                <a href="teacher-profile.php" class="btn btn-warning btn-sm">View</a>
                              </form>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>৪ </td>
                          <td>আবু বক্কর</td>
                          <td>বিজ্ঞান শিক্ষক</td>
                          <td>০১৭৪৫-২০২০২০</td>
                          <td>
                            <img src="images/home/p4.png" alt="Teacher Photo" style="max-width: 50px;width:100%">
                          </td>
                          <td>
                            <div style="margin-right: 5px;">
                              <form action="">
                                <a href="teacher-profile.php" class="btn btn-warning btn-sm">View</a>
                              </form>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>৫</td>
                          <td>করিম হোসেন</td>
                          <td>ইসলাম শিক্ষক </td>
                          <td>০১৭৪৫-২০২০২০</td>
                          <td>
                            <img src="images/home/p5.png" alt="Teacher Photo" style="max-width: 50px;width:100%">
                          </td>
                          <td>
                            <div style="margin-right: 5px;">
                              <form action="">
                                <a href="teacher-profile.php" class="btn btn-warning btn-sm">View</a>
                              </form>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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