<!DOCTYPE html>
<html>
   <head>
      <?php include 'includes/head_extras.php'; ?>
   </head>
   <body id="NGO_Page">
      <div class="close_button">
         <a href="javascript:void(0)" onclick="handleCloseDialogButton()"><span class="glyphicon glyphicon-remove"></span></a>
      </div>
      <div id="My_navbar">
         <?php include 'includes/navbar.php';  ?>
      </div>
      <?php include"includes/sign_up_btn_d2.php" ?>
      <?php include 'includes/ngo_details_rating.php'; ?>
      <hr>
      <?php include'includes/ngo_overview_packages.php'; ?>
      <hr>
      <?php include'includes/donor_ngo_review_top_donor.php'; ?>
      <hr>
      <div id="My_footer">
         <?php  include 'includes/footer.php'; ?>
      </div>
      <?php include 'includes/foot_extras.php'; ?>
      <script type="text/javascript">
         function handleCloseDialogButton()
         {
         window.parent.document.getElementById('my_frame').style.display="none";
         // window.parent.document.getElementByTagName("body")[0].style.display="initial";
         
         }
         // $( document ).on( 'keydown', function ( e ) {
         //     if ( e.keyCode === 27 ) { // ESC
         //         handleCloseDialogButton();
         //     }
         // });
         if(inIframe())
         {
          console.log('IN');
          $('.close_button').show();
          $('#My_navbar').hide();
          $('#My_footer').hide();
         }
         else{
          console.log('out');
          $('.close_button').hide();
          $('#My_navbar').show();
          $('#My_footer').show();
         }
      </script>
   </body>
</html>