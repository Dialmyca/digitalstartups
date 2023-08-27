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
                                       <h2 class="d-block">Blog</h2>
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
                             <div class="row mb-3">
                                 <div class="col-md-6 col-sm-6">
                                      <div class="blog w-100">
                                          <div class="blogImg position-relative">
                                            <div class="blog-date position-absolute">
                                                 <span>25</span>
                                                 <dd>Sep 2021</dd>
                                            </div>
                                            <img src="images/blog-01.jpg" alt="">
                                          </div>
                                          <h2 class="d-block pt-5 pb-3">Behind Every Successful Business There Is A Well-Designed Website</h2>
                                          <p>Hiring a web designer to create your website is the best thing you can ever do for your business. A website will act as a window to your products and services. For any business, a website is a must. It’s […]<a href="blog-details.php" class="more-info ml-2">Read More</a></p>
                                      </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6">
                                      <div class="blog w-100">
                                          <div class="blogImg position-relative">
                                            <div class="blog-date position-absolute">
                                                 <span>12</span>
                                                 <dd>July 2021</dd>
                                            </div>
                                            <img src="images/blog-02.jpg" alt="">
                                          </div>
                                          <h2 class="d-block pt-5 pb-3">Remote Work Indeed Is The Future For The Business World</h2>
                                          <p>We are in the middle of what is arguably the most important event of our collective lifetime- an unprecedented nationwide lockdown meant to curb the spread of the virus. These twin developments will have repercussions for both our economy (as […]<a href="blog-details.php" class="more-info ml-2">Read More</a></p>
                                      </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6 col-sm-6">
                                      <div class="blog w-100">
                                          <div class="blogImg position-relative">
                                            <div class="blog-date position-absolute">
                                                 <span>31</span>
                                                 <dd>May 2021</dd>
                                            </div>
                                            <img src="images/blog-03.jpg" alt="">
                                          </div>
                                          <h2 class="d-block pt-5 pb-3">Facebook Ads Marketing Can Take Your Business Several Notches Higher</h2>
                                          <p>Without a doubt, Facebook is THE most popular and effective marketing platform with more than 2.7 billion active users across the globe. It would be silly to not leverage its advertising network that will give you marketing advantage every step […]<a href="blog-details.php" class="more-info ml-2">Read More</a></p>
                                      </div>
                                 </div>
                                 <div class="col-md-6 col-sm-6">
                                      <div class="blog w-100">
                                          <div class="blogImg position-relative">
                                            <div class="blog-date position-absolute">
                                                 <span>26</span>
                                                 <dd>Apr 2021</dd>
                                            </div>
                                            <img src="images/blog-04.jpg" alt="">
                                          </div>
                                          <h2 class="d-block pt-5 pb-3">Remote Work Indeed Is The Future For The Business World</h2>
                                          <p>We are in the middle of what is arguably the most important event of our collective lifetime- an unprecedented nationwide lockdown meant to curb the spread of the virus. These twin developments will have repercussions for both our economy (as […]<a href="blog-details.php" class="more-info ml-2">Read More</a></p>
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