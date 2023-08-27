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
                                           <h2 class="d-block">Contact Us</h2>
                                      </div>
                                      <div class="col-md-6 col-sm-6 d-flex flex-wrap justify-content-md-end justify-content-left">
                                           <ul class="breadcrumb mb-0 pl-1">
                                                <li><a href="Index.php">Home</a></li>
                                                <li>Contact Us</li>
                                            </ul>
                                      </div>
                                  </div>
                             </div>
                        </section>
                        <section class="about-bg w-100 d-block py-md-5 py-3">
                           <div class="container">
                                 <div class="row">
                                     <div class="col-md-6 col-sm-6">
                                          <form action="" id="">
                                               <div class="form-group">
                                                    <input type="text" class="form-control form-field" placeholder="Full Name" id="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="Email" class="form-control form-field"
                                                    placeholder="Email Address" id="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="Phone" class="form-control form-field"
                                                    placeholder="Contact Number" id="">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control form-field" rows="5" id="">Message</textarea>
                                                </div>
                                                <div class="form-group">
                                                     <button type="submit" class="btn form-field-Btn w-100">Send Message</button>
                                                </div>
                                          </form>
                                     </div>
                                     <div class="col-md-6 col-sm-6">
                                          <div class="col-md-12 col-sm-12">
                                               <ul class="cont-addres w-100 d-block pl-0 mb-md-0">
                                                    <h5 class="d-flex pb-2">Registered Office:</h5>
                                                    <li><dd><i class="fa fa-map-marker mr-2" aria-hidden="true"></i></dd>C/O DialMyCA Advisory Services (P) Ltd.<br/>
                                                      57/2X, NSC Bose Road, Tollygunge,<br/>Kolkata - 700040,West Bengal, India
                                                    </li>
                                                    <li><dd><i class="fa fa-phone mr-2" aria-hidden="true"></i></dd><a href="tel:+917971478657">+91 79714 78657</a></li>
                                                    <li><dd><i class="fa fa-whatsapp mr-2"></i></dd><a href="https://web.whatsapp.com/send?phone=+917971478657&amp;text=Hi, I would like to get more information..">+91 79714 78657</a></li>
                                                    <li><dd><i class="fa fa-envelope ftr-email mr-2" aria-hidden="true"></i></dd><a href="mailto:info@digitalstartups.in">info@digitalstartups.in</a></li>
                                               </ul>
                                          </div>
                                          <div class="col-md-12 col-sm-12 map-bdr mt-2">
                                               <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d5213.362357178439!2d88.3445692593647!3d22.489025261193763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s57%2F2X%2C%20NSC%20Bose%20Road%2C%20Nehru%20Colony%2C%20Tollygunge!5e0!3m2!1sen!2sin!4v1632473058290!5m2!1sen!2sin" width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                          </div>
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