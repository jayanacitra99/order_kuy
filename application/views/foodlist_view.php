<div class="cta-content">
  <div class="container">
      <!-- Page Heading -->
      <h1 class="my-4"><b style="font-size: 60px; font-family: arial; color: #fdcc52">FOODS</b>
      </h1>

      <div class="row">
        <?php 
        	$no = 1;
        	foreach ($items_foods as $data) {
        		echo
        		'<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        		<div class="card h-100">
	            <img class="card-img-top" src="'.base_url('/uploads/'.$data->PICTURE.'').'" alt="'.$data->PICTURE.'">
	            <div class="card-body">
	              <h3 class="card-title" style="height: 70px">
	                <b>'.$data->NAME.'</b>
	              </h3>
	              <p class="card-text" style="height: auto">'.$data->DESCRIPTION.'</p>
	            </div>
	            <div class="card-body" style="padding-bottom: 0px; text-align:center; height: 50px">
	              <h3 class="card-title">
	                <b>'.$data->PRICE.'</b>
	              </h3>
	            </div>
	          </div>
				</div>';

        	$no++;
        	}
        ?>
      </div>
      <!-- /.row -->

      <!-- Pagination -->
      <!-- <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="drinklist_view.php">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul -->
  </div>
</div>
<div class="overlay"></div>