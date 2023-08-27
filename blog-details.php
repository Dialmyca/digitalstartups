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
                                       <h2 class="d-block">Blog Details</h2>
                                  </div>
                                  <div class="col-md-6 col-sm-6 d-flex flex-wrap justify-content-md-end justify-content-left">
                                       <ul class="breadcrumb mb-0 pl-1">
                                            <li><a href="Index.php">Home</a></li>
                                            <li>Blog</li>
                                        </ul>
                                  </div>
                              </div>
                         </div>
                    </section>
                    <section class="blog-bg w-100 d-block py-md-5 py-3">
                       <div class="container">
                            <div class="row">
                                 <div class="col-md-8 col-sm-8">
                                      <div class="blog w-100">
                                           <div class="blogdetilsImg">
                                                <img src="images/blog-detailsImg.jpg" alt="">
                                           </div>
                                           <ul class="post pl-0 pt-3">
                                               <li class="mr-2"><i><i class="fa fa-calendar mr-1" aria-hidden="true"></i></i>07/09/2021 16:25:36</li>
                                               <li class="mr-2"><i><i class="fa fa-user mr-1" aria-hidden="true"></i></i>Posted by Admin</li>
                                               <li class="mr-1">Share this</li>
                                               <li><i><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></i></li>
                                               <li class="mr-1"><i><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></i></li>
                                               <li class="mr-1"><i><a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></i></li>
                                               <li class="mr-1"><i><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></i></li>
                                               <li><i><a href="#" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></i></li>
                                           </ul>
                                           <h2 class="d-block pb-3">Behind Every Successful Business There Is A Well-Designed Website</h2>
                                           <p class="d-block">Hiring a web designer to create your website is the best thing you can ever do for your business. A website will act as a window to your products and services. For any business, a website is a must. It’s always a company’s website that customers use to engage with a business. A website that is appealing and clearly communicates all vital information to your customers is an effective way to stand apart from others. Having a strong online presence in the form of a website designed by professionals can benefit you by generating leads and boosting sales. A brand-differentiating website is all that it takes to reach the height of success.</p>
                                           <h4 class="d-block pb-3"><strong>Outlining the reasons for your business to have a professionally designed website:</strong></h4>
                                           <ol class="w-100 d-block pl-0">
                                               <li class="pb-1">1. Offers brand credibility</li>
                                               <li class="pb-1">2. Today's tech-savvy customers expect it</li>
                                               <li class="pb-1">3. Your website is a great platform that acts as a lead magnet that'll maximize ROI for your business</li>
                                               <li class="pb-1">4. An SEO-optimized website helps expand customer base (an SEO-optimized website appears at the top in Google search results)</li>
                                               <li class="pb-1">5. Customer service and relationship building (customers will have access to information at all times, they can go through your site as per their convenience- this will translate to an overall better user experience)</li>
                                               <li class="pb-1">6. Post updates on your website (for customers) that is on 24/7</li>
                                               <li class="pb-1">7. A website provides a level playing field to compete with the giants of your industry</li>
                                               <li class="pb-1">8. A platform to display your offerings to your target audience</li>
                                           </ol>
                                      </div>
                                 </div>
                                 <div class="col-md-4 col-sm-4">
                                      <div class="popular-pst">
                                           <h2 class="d-block pb-md-5 pb-3">POPULAR POSTS</h2>
                                           <ul class="d-block">
                                                <li class="d-block position-relative mb-4">
                                                    <dd><img src="images/blog-post-01.jpg"></dd>
                                                    <span class="d-block">Significance Of Laundry App Development For Businesses</span>
                                                </li>
                                                <li class="d-block position-relative mb-4">
                                                    <dd><img src="images/blog-post-02.jpg"></dd>
                                                    <span class="d-block">Improve WordPress Admin Area with these Plugins</span>
                                                </li>
                                                <li class="d-block position-relative mb-4">
                                                    <dd><img src="images/blog-post-03.jpg"></dd>
                                                    <span class="d-block">Features That Make Yii Framework The Perfect Choice For Development</span>
                                                </li>
                                           </ul>
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