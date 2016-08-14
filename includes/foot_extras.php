       <!-- JQuery -->

      <script type="text/javascript" src="js/jquery-2.2.1.js"></script>
      <script type="text/javascript" src="js/drop.js"></script>
      <!-- Bootstrap core JavaScript 
         <script type="text/javascript" src="js/bootstrap.min.js"></script>
         -->
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/btn.js"></script>
       <script type="text/javascript" src="js/gallery.js"></script>
      <script type="text/javascript" src="js/rating.js"></script>
  
      <script type="text/javascript">
         $(window).load(function() {
             $('.mycontainer').find('img').each(function() {
                 var imgClass = (this.width / this.height > 1) ? 'wide' : 'tall';
                 $(this).addClass(imgClass);
             })
         })

         $(document).ready( function() {

             $('.hover10').hover( function() {
                 $(this).find('.img-title').fadeIn(300);
             }, function() {
                 $(this).find('.img-title').fadeOut(100);
             });
            
         });
         function opentab()
         {
            var isMobile=false;
          if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            // tasks to do if it is a Mobile Device
            isMobile=true;
           
          }
          if(isMobile)
          {
            window.parent.document.getElementById('my_frame').style.display="initial";
          }else{
            if(cntrlIsPressed)
            {
              window.parent.document.getElementById('my_frame').style.display="none";
              
            }else
            window.parent.document.getElementById('my_frame').style.display="initial";
            
          }

            // var x = document.getElementsByTagName("BODY")[0];
            // x.style.display = "initial";
            ani();
         }
          function ani(){
                  document.getElementById('my_frame').className ='classname';
              }
         function openNav() {
             document.getElementById("myNav").style.height = "100%";
         }

         function closeNav() {
             document.getElementById("myNav").style.height = "0%";
         }
        $(".black_tape").hover(function () {
          $(".ngo_image").css("-webkit-filter"," blur(3px)");

          $(".ngo_image").css("-webkit-transition"," .3s ease-in-out");
            
        },function (){
          $(".ngo_image").css("-webkit-filter"," blur(0px)");

        })
        $('ul.nav-pills li a').click(function (e) {
           $('ul.nav-pills li.active_tab').removeClass('active_tab')
           $(this).parent('li').addClass('active_tab')
         })
        function inIframe () {
            try {
                return window.self !== window.top;
            } catch (e) {
                return true;
            }
        }
        var cntrlIsPressed;
        $(document).keydown(function(event){
             if(event.which=="17")
                 cntrlIsPressed = true;
         });

         $(document).keyup(function(){
             cntrlIsPressed = false;
         });

         $('.last_pic,.last_pic_count').hover(function(){
          var count=document.getElementsByClassName('extra_pic');
          $('.last_pic_count').html("+ "+count.length+" MORE");
          $('.last_pic_count').show();

         },function(){
           $('.last_pic_count').hide(); 
         })
       
         $( document ).on( 'keydown', function ( e ) {
             if ( e.keyCode === 27 ) { // ESC
                 //$( "#myNav").css("height","0%");
                 if(inIframe()){
                  handleCloseDialogButton();
                 }
                 else{
                  $( "#myNav").css("height","0%");
                 }
             }
         });
         
      </script>