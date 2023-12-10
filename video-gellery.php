<?php include_once("header.php"); ?>

<!-- ----------- breadcrumb section ----------  -->

<div id="breadcrumb" class="hoc clear">
  <h6 class="heading">Video Gellery</h6>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Video Gellery </a></li>
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
          <h2>ভিডিও গ্যালারি </h2>
        </div>
        <div class="card-body">
          <div class="img">
            <div class="row">
              <div class="col-md-3 col-sm-4 col-6">
                <div class="photo">
                  <iframe src="https://www.youtube.com/embed/fI31FLMsX9U?si=0g6TqFBTDB-UtHNu" class="gellery" frameborder="0" style="max-width: 400px;width:100%"></iframe>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-6">
                <div class="photo">
                  <iframe src="https://www.youtube.com/embed/fI31FLMsX9U?si=0g6TqFBTDB-UtHNu" class="gellery" frameborder="0" style="max-width: 400px;width:100%"></iframe>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-6">
                <div class="photo">
                  <iframe src="https://www.youtube.com/embed/fI31FLMsX9U?si=0g6TqFBTDB-UtHNu" class="gellery" frameborder="0" style="max-width: 400px;width:100%"></iframe>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-6">
                <div class="photo">
                  <iframe src="https://www.youtube.com/embed/fI31FLMsX9U?si=0g6TqFBTDB-UtHNu" class="gellery" frameborder="0" style="max-width: 400px;width:100%"></iframe>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-6">
                <div class="photo">
                  <iframe src="https://www.youtube.com/embed/fI31FLMsX9U?si=0g6TqFBTDB-UtHNu" class="gellery" frameborder="0" style="max-width: 400px;width:100%"></iframe>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-6">
                <div class="photo">
                  <iframe src="https://www.youtube.com/embed/fI31FLMsX9U?si=0g6TqFBTDB-UtHNu" class="gellery" frameborder="0" style="max-width: 400px;width:100%"></iframe>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-6">
                <div class="photo">
                  <iframe src="https://www.youtube.com/embed/fI31FLMsX9U?si=0g6TqFBTDB-UtHNu" class="gellery" frameborder="0" style="max-width: 400px;width:100%"></iframe>
                </div>
              </div>
              <!-- </div> -->
            </div>
          </div>
          <!-- ----------------- pagination code --------------  -->
          <div class="container mt-4">
            <h2>Pagination Example</h2>

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

    <!-- ----------- sidebar section start ----------  -->
    <?php include_once('components/sidebar.php') ?>
    <!-- ----------- sidebar section start  ----------  -->
  </div>
</div>


<?php include_once("footer.php"); ?>