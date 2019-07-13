    <!-- Start Footer area-->
   <!--  <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Footer area-->
    <!-- jquery
        ============================================ -->
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
    <!-- tawk chat JS
        ============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/tawk-chat.js"></script>
   
 <!-- Data Table JS
        ============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
     <!-- Charts JS
        ============================================ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script type="text/javascript">


        $(function(){
    var ctx = document.getElementById("barperso");
    var cData = JSON.parse(`<?php echo $chart_data; ?>`);
    var barchart1 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:cData.label,
            datasets: [{
                label: "Nombre de sessions de chaque Apprenant",
                data: cData.data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgb(50,205,50, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(235, 152, 184, 0.2)',
                    'rgba(36, 255, 58, 0.2)',

                    'rgba(255, 99, 132, 0.5)',
                    'rgb(50,205,50, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(235, 152, 184, 0.5)',
                    'rgba(36, 255, 58, 0.5)',
                

                    'rgba(255, 99, 132, 0.8)',
                    'rgb(50,205,50, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(235, 152, 184, 0.8)',
                    'rgba(36, 255, 58, 0.8)'
                
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
    });});
    </script>

      <script type="text/javascript">


        $(function(){
    var ctx = document.getElementById("actionchart");
    var aData = JSON.parse(`<?php echo $chart_action; ?>`);
    var barchart1 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:aData.label,
            datasets: [{
                label: "Stats",
                data: aData.data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgb(50,205,50, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(235, 152, 184, 0.2)',
                    'rgba(36, 255, 58, 0.2)',

                    'rgba(255, 99, 132, 0.5)',
                    'rgb(50,205,50, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(235, 152, 184, 0.5)',
                    'rgba(36, 255, 58, 0.5)',
                

                    'rgba(255, 99, 132, 0.8)',
                    'rgb(50,205,50, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(235, 152, 184, 0.8)',
                    'rgba(36, 255, 58, 0.8)'
                
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
    });});
    </script>

    <script type="text/javascript">


        $(function(){
    var ctx = document.getElementById("parcourAction");
    var aData = JSON.parse(`<?php echo $chart_parcours; ?>`);
    var barchart1 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels:aData.label,
            datasets: [{
                label: "Stats",
                data: aData.data,
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#013644" ,"#8f1a1d" ,"#d3623a" ,"#fba92e" ,"#008a93", "#ffd319" ,"#ff901f","#ff2975","#c700b5","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#013644" ,"#8f1a1d" ,"#d3623a" ,"#fba92e" ,"#b000ff" ,"#b97777","#7ca2b3","#f3d2ad","#e0cf7c","#434343",  "#fc6b05", "#ffb62b","#65b017","#99d8d8","#9bb7bb"]
            }]
        },
        options: {
            title: {
        display: true,
        text: 'Statistique Parcours Actions (Nombre de parcours pour chaque Action) '
      }
        }
    });});
    </script>

    <script type="text/javascript">


        $(function(){
    var ctx = document.getElementById("sessionparcours");
    var aData = JSON.parse(`<?php echo $chartapprenan; ?>`);
    var barchart1 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels:aData.label,
            datasets: [{
                label: "Stats",
                data: aData.data,
                backgroundColor: ["#b97777","#7ca2b3","#f3d2ad","#e0cf7c","#434343",
                  "#fc6b05", "#ffb62b","#65b017","#99d8d8","#9bb7bb","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#013644" ,"#8f1a1d" ,
                "#d3623a" ,"#fba92e" ,"#008a93", "#ffd319" ,"#ff901f","#ff2975","#c700b5","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#013644" ,"#8f1a1d" ,"#d3623a" ,"#fba92e" ,"#b000ff" ,"#b97777","#7ca2b3","#f3d2ad","#e0cf7c","#434343",  "#fc6b05", "#ffb62b","#65b017","#99d8d8","#9bb7bb", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#013644" ,"#8f1a1d" ,"#d3623a" ,"#fba92e" ,"#008a93", "#ffd319" ,"#ff901f","#ff2975","#b97777","#7ca2b3","#f3d2ad","#e0cf7c","#434343",
                  "#fc6b05", "#ffb62b","#65b017","#99d8d8","#9bb7bb","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#013644" ,"#8f1a1d" ,
                "#d3623a" ,"#fba92e" ,"#008a93", "#ffd319" ,"#ff901f","#ff2975","#c700b5","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#013644" ,"#8f1a1d" ,"#d3623a" ,"#fba92e" ,"#b000ff" ,"#b97777","#7ca2b3","#f3d2ad","#e0cf7c","#434343",  "#fc6b05", "#ffb62b","#65b017","#99d8d8","#9bb7bb", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#013644" ,"#8f1a1d" ,"#d3623a" ,"#fba92e" ,"#008a93", "#ffd319" ,"#ff901f","#ff2975"]
            }]
        },
        options: {
            title: {
        display: true,
        text: 'Statistique nombre de Parcours pour chaque session '
      }
        }
    });});
    </script>
</body>
  

</html>