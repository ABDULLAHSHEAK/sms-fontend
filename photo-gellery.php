<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
  <h6 class="heading">Photo Gellery</h6>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Photo Gellery </a></li>
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
          <h2>ফটো গ্যালারি </h2>
        </div>
        <div class="card-body">
          <div class="img">
            <div class="row">
              <div class="col-md-2 col-sm-4 col-6">
                <div class="photo">
                  <a href="images/home/p1.png">
                    <img class="gellery" src="images/home/p1.png" alt="gellery_img">
                  </a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6">
                <div class="photo">
                  <a href="images/home/p2.png">
                    <img class="gellery" src="images/home/p3.png" alt="gellery_img">
                  </a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6">
                <div class="photo">
                  <a href="images/home/p4.png">
                    <img class="gellery" src="images/home/p4.png" alt="gellery_img">
                  </a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6">
                <div class="photo">
                  <a href="images/home/p7.png">
                    <img class="gellery" src="images/home/p7.png" alt="gellery_img">
                  </a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6">
                <div class="photo">
                  <a href="images/home/p5.png">
                    <img class="gellery" src="images/home/p5.png" alt="gellery_img">
                  </a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6">
                <div class="photo">
                  <a href="images/home/p4.png">
                    <img class="gellery" src="images/home/p4.png" alt="gellery_img">
                  </a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6">
                <div class="photo">
                  <a href="images/home/p3.png">
                    <img class="gellery" src="images/home/p3.png" alt="gellery_img">
                  </a>
                </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6">
                <div class="photo">
                  <a href="images/home/p2.png">
                    <img class="gellery" src="images/home/p2.png" alt="gellery_img">
                  </a>
                </div>
              </div>
              <!-- </div> -->
            </div>
          </div>

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
        </div>
      </div>
    </div>

    <!-- ----------- sidebar section start ----------  -->
    <?php include_once('components/sidebar.php') ?>
    <!-- ----------- sidebar section start  ----------  -->
  </div>
</div>


<?php include_once("footer.php"); ?>