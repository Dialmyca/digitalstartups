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

                       <!------------------banner--------------->
                         <?php include("include/home-banner.php"); ?>
                        <!------------------banner--------------->

                        <!----------Start get a free website----->
                        <?php include("include/get-website.php"); ?>
                        <!-----------End get a free website------->

                        <!--------Start choose free template------>
                        <?php include("include/free-template.php"); ?>
                        <!----------End choose free template------>

                        <!------------Start why choose us---------->
                         <?php include("include/choose-us.php"); ?>
                         <!--------------End why choose us---------->
   
                          <!----------Start our service section---->
                           <?php include("include/our-service.php"); ?>
                          <!-------------End our service section---->

                          <!-----------Start google review---------->
                          <?php include("include/google-review.php"); ?>
                          <!----------- google review---------->

                        <!----------start footer section------->
                          <?php include("include/footer.php"); ?>
                        <!----------end footer section--------->
                    </div>                       
                </div>
            </div>
        </div>
    </div>
</div>
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