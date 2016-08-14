<!DOCTYPE html>
<html>
   <head>
      <?php include'includes/head_extras.php'; ?> 
      <style type="text/css">
         #404_page{
         width: 100%;
         height: 100%;
         position: relative;
         margin: 0;
         padding: 0;
         background-color: #EFEEEC;
         }

         .404_page_main_content{
            margin-top: 3%;
            width: 100%;
            height: 60%;
            position:relative; 
         }
         .heading_terms{
            font-size: 3em;
            font-family: Montserrat_Normal;
         }
         .img_txt_terms{
            font-size:2em;
            margin-top: 3%;
            font-family: Montserrat_Normal; 
         }
      </style>
   </head>
   <body id="404_page" style="background-color: #EFEEEC; ">

      <?php include 'includes/navbar.php'; ?>
     <?php include 'includes/sign_up_btn_d2.php'; ?>
    <section class="404_page_main_content" style="margin-top: 3%;width: 100%;height: 70%">
         <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="panel panel-default bk_logo" style="background-color: #fff;" >
                     <div class="panel-body" >
                        <div class="container-fluid">
                           <div class="row">
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                 <p class="heading_terms">
                                   <span style="font-size: 2em;">404</span> PAGE NOT FOUND
                                 </p>
                                 <p>
                                    The Package you are searching is not found.
                                 </p>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              <center>
                                 <img src="icons/logo_side.png" alt="" class="img-responsive">
                                 <!-- <p class="img_txt_terms">
                                    RANDOM MESSAGE
                                 </p> -->
                                 </center>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
                </div>

            </div>
         </div>
      </section>

      <?php include 'includes/footer.php'; ?>
      <?php include 'includes/foot_extras.php'; ?>
      </body>
</html>