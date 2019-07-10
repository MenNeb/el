
<div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="bar-chart-wp mg-t-30 chart-display-nn">
                        <canvas height="140vh" width="180vw" id="barchart3"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="bar-chart-wp mg-t-30 chart-display-nn">
                        <canvas height="140vh" width="180vw" id="barperso"></canvas>
                    </div>
                </div>
            </div>

<script src="<?php echo base_url();?>application/views/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/flot/curvedLines.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/wave/wave-active.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/chat/moment.min.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/main.js"></script>
<script>
  $(function(){
      //get the bar chart canvas
     var ctx = document.getElementById("barperso");
    var barchart1 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green"],
            datasets: [{
                label: 'Bar Chart',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgb(50,205,50, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
 
  });
</script>