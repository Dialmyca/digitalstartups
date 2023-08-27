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
                        <section class="about-bnr blue-bg-mt w-100 d-block py-md-4 py-2">
                             <div class="container">
                                  <div class="row">
                                      <div class="col-md-6 col-sm-6">
                                           <h2 class="d-block">About Us</h2>
                                      </div>
                                      <div class="col-md-6 col-sm-6 d-flex flex-wrap justify-content-md-end justify-content-left">
                                           <ul class="breadcrumb mb-0 pl-1">
                                                <li><a href="Index.php">Home</a></li>
                                                <li>About Us</li>
                                            </ul>
                                      </div>
                                  </div>
                             </div>
                        </section>
                        <section class="about-bg w-100 d-block py-md-5 py-3">
                           <div class="container">
                                 <div class="row">
                                     <div class="col-md-7 col-sm-7">
                                          <div class="about w-100">
                                              <h3 class="d-block pb-3">We Think About Your Profit</h3>
                                              <p class="d-block pb-3">
                                                 As your trusted partner Digital Startups is the most admired Digital Marketing & Web development Company based on Kolkata. Digital Startups has always provides proven results to the businesses through Digital Marketing Services in India such as SEO, SMO, PPC and lot more. Our professionals uses customized solutions for your website ranking.</p>
                                              <p class="d-block pb-3">
                                                 We at Digital Startups always try our best to meet our customer expectations and satisfaction in terms of Best Digital marketing services, Best SEO Services, Best Social Media Marketing Services, Best PPC Services, Best Website designing services and Best Website development services along with Software development services and also Mobile App Development Services.
                                              </p>
                                          </div>
                                     </div>
                                     <div class="col-md-5 col-sm-5">
                                          <div class="about w-100">
                                               <img src="images/digital-marketing.png" alt="">
                                          </div>
                                     </div>
                                 </div>
                            </div>
                        </section>
                          <div class="container py-md-5 py-3">
                                 <div class="row">
                                     <div class="col-md-5 col-sm-5">
                                          <div class="about">
                                               <img src="images/digital-marketing-agency-in-kolkata-city.png" alt="">
                                          </div>
                                     </div>
                                     <div class="col-md-7 col-sm-7">
                                          <h3 class="d-block pb-3">
                                              Full Range of Digital Marketing Services!
                                          </h3>
                                          <p class="d-block pb-3">
                                             Compellingly engineer cutting-edge architectures rather than multimedia based applications. Objectively repurpose timely e-services with performance based bandwidth. Synergistically leverage existing leading-edge e-services after viral growth strategies.</p>
                                          <p class="d-block pb-3">
                                            Intrinsicly scale focused results without resource-leveling services. Rapidiously coordinate highly efficient networks after effective technology.
                                          </p>
                                     </div>
                                 </div>
                          </div>

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