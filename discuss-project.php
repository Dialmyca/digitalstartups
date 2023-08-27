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
                                           <h2 class="d-block">Discuss A Project</h2>
                                      </div>
                                      <div class="col-md-6 col-sm-6 d-flex flex-wrap justify-content-md-end justify-content-left">
                                           <ul class="breadcrumb mb-0 pl-1">
                                                <li><a href="Index.php">Home</a></li>
                                                <li>Discuss A Project</li>
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
                                               <div class="form-group mb-md-3 mb-2">
                                                    <input type="text" class="form-control form-field" placeholder="Full Name" id="">
                                                </div>
                                                <div class="form-group mb-md-3 mb-2">
                                                    <input type="Email" class="form-control form-field"
                                                    placeholder="Email Address" id="">
                                                </div>
                                                <div class="form-group mb-md-3 mb-2">
                                                    <input type="Phone" class="form-control form-field"
                                                    placeholder="Contact Number" id="">
                                                </div>
                                                <div class="form-group mb-md-3 mb-2">
                                                    <input type="Cname" class="form-control form-field"
                                                    placeholder="Company Name" id="">
                                                </div>
                                                <div class="form-group mb-md-3 mb-2">
                                                    <input type="text" class="form-control form-field"
                                                    placeholder="Website URL" id="">
                                                </div>
                                                <div class="form-group mb-md-3 mb-2">
                                                      <select class="form-control form-field" id="">
                                                            <option>Select Project Budget</option>
                                                            <option>Rs.10000 - Rs.20000</option>
                                                            <option>Rs.20001 - Rs.30000</option>
                                                            <option>Rs.30001 - Rs.40000</option>
                                                            <option>Rs.40001 - 50000</option>
                                                            <option>Rs.50001 - Rs.60000</option>
                                                            <option>Rs.60001 - Rs.70000</option>
                                                            <option>Rs.70001 - Rs.80000</option>
                                                            <option>Rs.80001 - Rs.90000</option>
                                                            <option>Rs.90001 - Rs.100000</option>
                                                            <option>Above - Rs.100000</option>
                                                      </select>
                                                </div>
                                                <div class="form-group mb-md-3 mb-2">
                                                    <textarea class="form-control form-field" rows="5" id="">Message</textarea>
                                                </div>
                                                <div class="form-group mb-md-3 mb-2">
                                                    <div class="custom-file">
                                                        <input type="file" name="files[]" multiple class="custom-file-input form-control" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-md-3 mb-2">
                                                     <button type="submit" class="btn form-field-Btn w-100">Submit</button>
                                                </div>
                                          </form>
                                     </div>
                                     <div class="col-md-6 col-sm-6">
                                          <ul class="selt-requr w-100 d-block px-4 pb-4 pt-2">
                                               <span class="d-block pb-3">Select your requirement</span>
                                               <li class="w-100 pb-md-3">
                                                   <div class="form-check-inline selt-fld-md">
                                                        <label class="form-check-label">
                                                          <input type="checkbox" class="form-check-input" value="">Logo Design
                                                        </label>
                                                    </div>
                                                    <div class="form-check-inline selt-fld-md">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" value="">Graphic Design
                                                          </label>
                                                    </div>
                                               </li>
                                               <li class="w-100 pb-md-3">
                                                   <div class="form-check-inline selt-fld-md">
                                                        <label class="form-check-label">
                                                          <input type="checkbox" class="form-check-input" value="">Website Design
                                                        </label>
                                                    </div>
                                                    <div class="form-check-inline selt-fld-md">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" value="">Brochure Design
                                                          </label>
                                                    </div>
                                               </li>
                                               <li class="w-100 pb-md-3">
                                                   <div class="form-check-inline selt-fld-md">
                                                        <label class="form-check-label">
                                                          <input type="checkbox" class="form-check-input" value="">Mobile App Development
                                                        </label>
                                                    </div>
                                                    <div class="form-check-inline selt-fld-md">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" value="">CRM Software Development
                                                          </label>
                                                    </div>
                                               </li>
                                               <li class="w-100 pb-md-3">
                                                   <div class="form-check-inline selt-fld-md">
                                                        <label class="form-check-label">
                                                          <input type="checkbox" class="form-check-input" value="">Digital Marketing Services
                                                        </label>
                                                    </div>
                                                    <div class="form-check-inline selt-fld-md">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" value="">Domain Purches
                                                          </label>
                                                    </div>
                                               </li>
                                               <li class="w-100 pb-md-3">
                                                   <div class="form-check-inline selt-fld-md">
                                                        <label class="form-check-label">
                                                          <input type="checkbox" class="form-check-input" value="">Hosting Service
                                                        </label>
                                                    </div>
                                                    <div class="form-check-inline selt-fld-md">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" value="">Facebook Ad Campaign Service
                                                          </label>
                                                    </div>
                                               </li>
                                               <li class="w-100 pb-md-3">
                                                   <div class="form-check-inline selt-fld-md">
                                                        <label class="form-check-label">
                                                          <input type="checkbox" class="form-check-input" value="">Google Ad Campaign
                                                        </label>
                                                    </div>
                                                    <div class="form-check-inline selt-fld-md">
                                                          <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" value="">Twitter Ad Campaign
                                                          </label>
                                                    </div>
                                               </li>
                                          </ul>
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

<script type="text/javascript">
$(document).ready(function() {
  $('input[type="file"]').on("change", function() {
    let filenames = [];
    let files = this.files;
    if (files.length > 1) {
      filenames.push("Total Files (" + files.length + ")");
    } else {
      for (let i in files) {
        if (files.hasOwnProperty(i)) {
          filenames.push(files[i].name);
        }
      }
    }
    $(this)
      .next(".custom-file-label")
      .html(filenames.join(","));
  });
});

</script>
</body>
</html>