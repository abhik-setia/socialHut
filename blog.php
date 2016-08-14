<!DOCTYPE html>
<html>
   <head>
      <?php include'includes/head_extras.php'; ?> 
   </head>
   <body id="blog_body">

      <?php include 'includes/navbar_user.php'; ?>
      
      <section id="banner_blog">
          <div class="container-fluid">
              <div class="row">
              
                <img src="icons/banner_blog.png" alt="">
                <p class="blog_txt">BLOG</p>
                  
              </div>
          </div>
      </section>

      <section class="main_blog">
        <div class="container-fluid">
          <div class="hidden-lg hidden-md col-sm-12 col-xs-12 mob_tags">
            <ul>
              <li>  <button type="button" class="btn btn-default btn-sm">Human Rights</button>
                </li>
                <li>  <button type="button" class="btn btn-default btn-sm">Education</button>
                </li>
             <li>  <button type="button" class="btn btn-default btn-sm">Pets</button>
                </li>
               <li>  <button type="button" class="btn btn-default btn-sm">Children</button>
                </li>
               <li>  <button type="button" class="btn btn-default btn-sm">Senior Citizens</button>
                </li>
                <li>  <button type="button" class="btn btn-default btn-sm">Human Rights</button>
                </li>
                <li>  <button type="button" class="btn btn-default btn-sm">Education</button>
                </li>
            <!--  <li>  <button type="button" class="btn btn-default btn-sm">Pets</button>
                </li>
               <li>  <button type="button" class="btn btn-default btn-sm">Children</button>
                </li>
               <li>  <button type="button" class="btn btn-default btn-sm">Senior Citizens</button>
                </li>               -->                        
            </ul>

          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

              <?php include "includes/blog_part.php"; ?>
                <?php include "includes/blog_part.php"; ?>
                  <?php include "includes/blog_part.php"; ?>
          </div>

          <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default shadow">
              <div class="panel-heading tag_heading">Tags</div>
                <div class="panel-body tag_section">
                  <button type="button" class="btn btn-default btn-sm">Human Rights</button>
                  <button type="button" class="btn btn-default btn-sm">Education</button><br>
                  <button type="button" class="btn btn-default btn-sm">Pets</button>
                  <button type="button" class="btn btn-default btn-sm">Children</button>
                  <button type="button" class="btn btn-default btn-sm">Senior Citizens</button>
                  <button type="button" class="btn btn-default btn-sm">Hunger</button>
                  <button type="button" class="btn btn-default btn-sm">Human Rights</button>
                  <button type="button" class="btn btn-default btn-sm">Education</button><br>
                  <button type="button" class="btn btn-default btn-sm">Pets</button>
                  <button type="button" class="btn btn-default btn-sm">Children</button>
                  <button type="button" class="btn btn-default btn-sm">Senior Citizens</button>
                  
                </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default shadow">
              <div class="panel-heading tag_heading">Top Posts</div>
                <div class="panel-body">
                    <div class="col-lg-12 col-md-12 hidden-sm hidden-xs top_post_body">
                    <p>Five youngsters, two weeks of time, and eighty-three kind donations.</p>
                      <hr>
                      <p>Five youngsters, two weeks of time, and eighty-three kind donations.</p>
                      <hr>
                      <p>Five youngsters, two weeks of time, and eighty-three kind donations.</p>
                      <hr>
                      <p>Five youngsters, two weeks of time, and eighty-three kind donations.</p>
                      <hr>
                      <p>Five youngsters, two weeks of time, and eighty-three kind donations.</p>
                      
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