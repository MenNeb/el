<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Register | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Login Register area Start-->
     
  
    <div class="login-content">
        <!-- Login -->

        <div class="nk-block toggled" id="l-login">
            <h2> LOG IN </h2> 
            
             <?php if( isset($error) ){?>
              <h2> 
           Vous avez introduit des information invalide 
                
         
            </h2>  
             <?php   } ?>
 
        
            <div class="nk-form">
              <form id="logform" method="post" action="<?php echo site_url('User/login'); ?>">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input id="loguser" type="text" class="form-control" placeholder="Username" name="user" >
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input id="logpass" type="password" class="form-control" placeholder="Password" name="pass" >
                    </div>
                </div>
                
                <button type="submit" 
                class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
              </form>
            </div>
       
        </div>

       
        
    </div>
    <!-- Login Register area End-->
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
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url();?>application/views/assets/js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url();?>application/views/assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

                $("#logform").submit(function(e){

                      var loguser = $("#loguser").val(); 
                      var logpass = $("#logpass").val();

                      console.log(loguser);
                      if(logpass == "" && logpass == "") {
                        e.preventDefault();
                        alert("Vous devez remplir tout les champs");
                      }
                });
        });
      </script>  
</body>

</html>