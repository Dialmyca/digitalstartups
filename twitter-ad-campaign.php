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
                                              TWITTER AD CAMPAIGN SERVICE
                                          </h1>
                                          <p class="d-block pb-1">Twitter Ad campaigns enable to reach your marketing goals - whether to build awareness, promote a product or service, drive consideration or deliver conversions. There's no minimum cost required. Twitter Ads offers over 20 product options to advertise your content and media in the best format possible. You will be connected to the most valuable and influential people, when they are most willing to interact, through Twitter.</p>
                                          <a href="javascript:void(0)" class="get-quote" data-toggle="modal" data-target="#myModal">Get Quote</a>
                                      </div>
                                 </div>
                            </section>

                            <div class="container py-md-5 py-3">
                                 <div class="row px-md-0 px-4">
                                     <div class="col-md-8 col-sm-8 pl-0">
                                         <h2 class="black-txt pb-3">Best Twitter Ad Campaign Service in India</h2>
                                         <p class="pb-2">There are many Twitter Ad campaign service provider in India but DigitalStartups is one of the best Twitter ad campaigns service providers among them. There are multiple benefits of Twitter advertising. It can help you get followers, increase app installs, increase website or app visits, generate leads and increase views. Several targeting options are available to help you achieve your business objectives with Twitter. We adhere to all the standards and norms when it comes to implementing and strategizing Twitter Ad Campaign. Once your account is activated, we constantly manage and monitor the ad performance to keep you updated. We take every possible measure to make your page get the most views and relevant followers who are interested in your brand ultimately building your brand name.</p>
                                     </div>
                                     <div class="col-md-4 col-sm-4">
                                          <img src="images/left-menu-logo/twitter-ad-campign.jpg" class="img-fluid" alt="">
                                     </div>
                                 </div>
                                 <div class="row px-md-0 px-4 pt-3">
                                     <h2 class="w-100 d-block pb-3">Key Features of Our Twitter Advertising Campaign</h2>
                                     <p class="pb-2">Competitive Analytics: With the help of data-tracking tools to obtain insights that pinpoint where each campaign went right or wrong, helping you improving your strategy.</p>
                                     <p class="pb-2">Users Identification: We can determine and assess your audience and determine how to utilise Twitter's unique targeting capabilities.</p>
                                     <p class="pb-2">Strong Strategy: We create and execute effective Twitter marketing strategy that is designed specifically to your brand's goals.</p>
                                     <p class="pb-2">Supervising: We can monitor your Twitter profile and campaigns, recognizing any opportunities or issues that pop up and solve problems.</p>
                                     <p class="pb-2">Consulting: We focus in researching, tracking, and adapting to online trends. We keep our actions transparent for your convenience and try to satisfy your requirements as much as possible.</p>
                                 </div>
                            </div>

                            <section class="chose-bg w-100 d-block py-md-4 py-3">
                                 <div class="container">
                                     <div class="row px-md-0 px-4">
                                          <h2 class="black-txt d-block pb-3">Why Choose DigitalStartups – Affordable Twitter Ad Campaign Service</h2>
                                          <p class="pb-2">We at DigitalStartups will advertise your business on Twitter in a creative manner that will instantly grab people’s attention, creating brand awareness. We have a very competent and efficient team and they have the requisite knowledge of how advertising is done. We guarantee to promote your products and services extensively so that you attain maximum visibility and accomplish your business goals.</p>
                                     </div>
                                 </div>
                            </section>

                            <div class="container py-md-5 py-3">
                                <div class="row px-md-0 px-4">
                                    <h2 class="black-txt w-100 d-block text-center pb-3">FAQ</h2>
                                    <ul class="ques-ans pt-3 pl-0">
                                        <li>
                                          <span><dd class="mb-0">Q</dd><strong>What is the pricing of Twitter ads?</strong></span>
                                          <span class="pb-2"><b></b>There is no minimum cost. Twitter ads campaign can be customised according to your budget.</span>
                                          </li>
                                        <li>
                                          <span><dd class="mb-0">Q</dd><strong>What's the best way to attract customers on Twitter?</strong></span>
                                          <span class="pb-2"><b></b>The best way to attract customers is to give them some sort of value so they can invest in your product or service. Special discount codes, coupons, other types of offers can be provided on the Twitter platform.</span>
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