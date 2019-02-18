<?php
include('includes/header.php');
include('includes/side-bar.php');

?>
 <!-- Page Content -->


     <!--Bar chart and pie chart-->
		<div class="row">
          <div class="col-lg-8">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                Bar Chart Example</div>
              <div class="card-body">
                <canvas id="myBarChart" width="100%" height="50"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Pie Chart Example</div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
		</div>
<!--END Bar chart and pie chart-->		
		<!-- Page level plugin JavaScript-->
		<script src="vendor/chart.js/Chart.min.js"></script>
		
		<script src="js/demo/chart-bar-demo.js"></script>
  		<script src="js/demo/chart-pie-demo.js"></script>



</div>
<!-- /.container-fluid -->

<?php
include('includes/footer.php');
?>