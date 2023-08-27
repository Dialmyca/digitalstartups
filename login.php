<!DOCTYPE html>
<html lang="en">
<head>
<title>Digital Startups</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon-32x32.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/left-menu.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 
<div id="wrapper">
       <?php include("include/left-menu-bar.php"); ?>      
       <div id="page-content-wrapper">
          <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
              <span class="hamb-top"></span>
              <span class="hamb-middle"></span>
              <span class="hamb-bottom"></span>
          </button>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12 col-md-offset-0">
                      <div class="row">
                            <!------------------header--------------->
                            <?php include("include/header.php"); ?>
                            <!------------------header--------------->
                             
                            <div class="container blue-bg-mt py-md-5 pt-3">
                                 <div class="row w-100 d-block text-center">
                                       <h2 class="header-txt pb-3 mb-md-4 mb-3">Login or Create an Account</h2>
                                  </div>
                                  <div class="row d-flex flex-wrap justify-content-center mb-4">
                                        <div class="col-md-4 col-sm-4 crt-act-bg p-3">
                                              <p class="w-100 text-center">Already registered?</p>
                                              <p class="w-100 text-center">If you have an account with us, please log in.</p>
                                              <div class="col-md-12">
                                                   <form action="" class="mb-3" method="post" id="loginFrm">
                                                          <div class="form-group">
                                                               <input type="text" class="form-control crt-act-fild" id="em1" placeholder="Email Address" name="em1">
                                                          </div>
                                                          <div class="form-group">
                                                               <input type="password" class="form-control crt-act-fild" id="pass" placeholder="Enter password" name="pswd">               
                                                          </div>
                                                            <a href="forgot.php" class="forgot pb-3">Forgot Your Password?</a>
                                                            <button type="submit" class="btn crtBtn mb-1" id="loginButton">Login</button>
                                                            <div class="crt-act-line mt-4"></div>
                                                            <p class="w-100 text-center pt-3">New Here?</p>
                                                            <a href="create-account.php" class="crtBtn" style="line-height: 30px;">Create an Account</a>
                                                   </form>
                                              </div>
                                        </div>
                                    </div> 
                                 </div>
                            </div>
                      </div>                       
                  </div>
              </div>
          </div>
      </div>
</div>

<!----------start footer section------->
  <?php include("include/footer.php"); ?>
<!----------end footer section--------->


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ImageScroll.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var highestBox = 0;
        $('.service-box').each(function(){  
                if($(this).height() > highestBox){  
                highestBox = $(this).height();  
        }
    });    
    $('.service-box').height(highestBox);

});
</script>

<script type="text/javascript">
    $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>
</body>
</html>