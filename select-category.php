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
<link rel="stylesheet" href="css/scrollBar.css">
<link rel="stylesheet" href="css/left-menu.css">
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
                             
                             <section class="web-demo-Area w-100 py-md-5 pt-3 temp-mt">
                                 <div class="container pb-4">
                                      <div class="row">
                                           <h2 class="selet-cate w-100 text-center">Choose category for your free website</h2>
                                           <div class="w-100 d-block d-flex flew-wrap justify-content-center mt-4">
                                               <div class="col-md-5 col-sm-5 category w-100 p-md-4 py-4">
                                                <div class="sb-container container-example1">
                                                   <ul class="pl-0">
                                                       <li class="pb-1">Online Store</li>
                                                       <li class="pb-1">Portfolio</li>
                                                       <li class="pb-1">Blog</li>
                                                       <li class="pb-1">Consultant</li>
                                                       <li class="pb-1">Technology Company</li>
                                                       <li class="pb-1">Online Store</li>
                                                       <li class="pb-1">Portfolio</li>
                                                       <li class="pb-1">Blog</li>
                                                       <li class="pb-1">Consultant</li>
                                                       <li class="pb-1">Technology Company</li>
                                                    </ul>
                                                 </div>
                                               </div>
                                           </div>
                                           <div class="col-md-12 col-sm-12 pt-3 pb-md-0 pb-4">
                                                <a href="free-template.php" class="cate-next-Btn">Next</a>
                                           </div>  
                                      </div>
                                 </div>
                            </section>

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
<script src="js/scrollBar.js"></script>
<script type="text/javascript">
    $(".sb-container").scrollBox();
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