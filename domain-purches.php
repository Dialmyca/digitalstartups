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
                             <section class="blue-bg w-100 d-block py-5 blue-bg-mt">
                                 <div class="container">
                                      <div class="row px-md-0 px-4">
                                          <h1 class="white-txt w-100 d-block pb-3">
                                              DOMAIN PURCHASE SERVICE
                                          </h1>
                                          <p class="d-block pb-1">If you are looking a domain purchase service provider then you are in the right place. Our executive will guide you about how to purchase a domain or you can directly book a domain from our website at an affordable price. List of domain you can buy from our website is- .com, .co.in, .net.in, .org.in, .org, .net, .biz, .info, .gen.in, .firm.in, .ind.in, mobi, .us, .eu, .cc, .tv, .ws, .co.uk, .org.uk, .me.uk.</p>
                                          <a href="javascript:void(0)" class="get-quote" data-toggle="modal" data-target="#myModal">Get Quote</a>
                                      </div>
                                 </div>
                            </section>

                            <div class="container py-md-5 py-3">
                                 <div class="row px-md-0 px-4">
                                     <div class="col-md-8 col-sm-8 pl-0">
                                         <h2 class="black-txt pb-3">How to Buy Domain at Cheap Price</h2>
                                         <p>By choosing a good and reliable broker you can purchase a domain at a cheap price. There are many companies, who are charging a high rate for domain purchase or provide domain at cheap price for first purchase but at the time of renewal taking high price. This policy is not included by us. We taking the same price for the first purchase and renewal.</p>
                                     </div>
                                     <div class="col-md-4 col-sm-4">
                                          <img src="images/left-menu-logo/domain-purchase.jpg" class="img-fluid" alt="">
                                     </div>
                                 </div>
                            </div>

                            <section class="chose-bg w-100 d-block py-md-4 py-3">
                                 <div class="container">
                                     <div class="row px-md-0 px-4">
                                          <h2 class="black-txt d-block pb-3">Why Choose DigitalStartups – Domain Broker</h2>
                                          <p class="pb-2">We at DigitalStartups arrange a domain broker for you who will make an attempt to mediate a transaction with the current owner who holds your preferred domain name within a span of 30 days to procure the domain name for you. Although there is no guarantee for a successful change of ownership of the domain name. We also suggest other domain names if you want. This service is provided at a reasonable cost.</p>
                                     </div>
                                 </div>
                            </section>

                            <div class="container py-md-5 py-3">
                                <div class="row px-md-0 px-4">
                                    <h2 class="black-txt w-100 d-block text-center pb-3">FAQ</h2>
                                    <ul class="ques-ans pt-3 pl-0">
                                        <li>
                                          <span><dd class="mb-0">Q</dd><strong>What is a Domain Registration and What is its importance?</strong></span>
                                          <span class="pb-2"><b></b>Domain registration is the process of claiming a domain name from a domain name registrar. The objective of Domain names is to identify online resources, such as computers, networks, and services, with a text-based logo that is easier to remember</span>
                                        </li>
                                        <li>
                                          <span><dd class="mb-0">Q</dd><strong>How does domain registration/enrolment work?</strong></span>
                                          <span class="pb-2"><b></b> Registration of a domain name makes a set of name server records in the DNS servers of the parent domain, implying the IP addresses of DNS servers that are authoritative for the domain.
                                          </span>
                                        </li>
                                        <li>
                                          <span><dd class="mb-0">Q</dd><strong>What is a domain registration/enrolment service?</strong></span>
                                          <span class="pb-2"><b></b> Domain registration service providers, also called domain registrars, help businesses reserve or acquire Internet domain names.</span>
                                        </li>
                                     </ul>
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