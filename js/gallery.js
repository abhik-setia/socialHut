// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick=function() { 
    modal.style.display = "none";
}

// Get all images and insert the clicked image inside the modal
// Get the content of the image description and insert it inside the modal image caption
var images = document.getElementsByClassName('thumbnail');
var modalImg = document.getElementById("img01");
var caption = document.getElementById("list");
var titles=document.getElementsByClassName('desc');
//console.log(titles[0].innerHTML);
//console.log(images[0].src);
var i;
for (i = 0; i < images.length; i++) {
   images[i].onclick = function(){
       modal.style.display = "block";
       modalImg.src = this.src;
       modalImg.alt = this.alt;
       //captionText = titles[i];

   }
   var s=images[i].src;
   // var node='<li> <img src='+'"'+s+'"'+'></img></li>';
   //      console.log(node);
   var z=document.createElement('li');
   var t=document.createElement('img');
   t.src=s;
   t.className="li_img";
   z.appendChild(t);
   caption.appendChild(z);   
}

var thumbnails=document.getElementsByClassName('li_img');
for(i=0;i<thumbnails.length;i++)
{
  thumbnails[i].onclick=function (){
    modalImg.src = this.src;
       modalImg.alt = this.alt;
  }
}

function changeRight () {
   var currentImgSrc=document.getElementById("img01").src;
   var nextSlide;
   var w = window.innerWidth;
   for(var j=0;j<thumbnails.length;j++)
   {
      if(currentImgSrc == thumbnails[j].src)
      {
        if((j+1)<thumbnails.length)
        {
          nextSlide=thumbnails[j+1].src;
          modalImg.src=nextSlide;
          //get img size and shift with that pixels
          var element_w=document.getElementsByClassName('li_img')[0].offsetWidth;
          var pos = $('#list').scrollLeft() + element_w;
          //console.log(pos);
          $('#list').scrollLeft(pos);
        }
      }
   }
}

function changeLeft () {
   var currentImgSrc=document.getElementById("img01").src;
   var nextSlide;
   //var h = window.innerHeight;
   for(var j=0;j<thumbnails.length;j++)
   {
      if(currentImgSrc == thumbnails[j].src)
      {
        if((j-1)>=0)
        {
          nextSlide=thumbnails[j-1].src;
          modalImg.src=nextSlide;
          //get img size and shift with that pixels
          var element_w=document.getElementsByClassName('li_img')[0].offsetWidth;
          var pos = $('#list').scrollLeft() - element_w;
         // console.log(pos);
          $('#list').scrollLeft(pos);
        }
      }
   }
}

$( document ).on( 'keydown', function ( e ) {
             if ( e.keyCode === 27 ) { // ESC
                // $( "#myNav").css("height","0%");
                 $(".modal").css("display","none");
             }
             else if(e.keyCode===37){
              //left arrow
              changeLeft();
             }
             else if(e.keyCode===39)
             {//right arrow
              changeRight();
             }else{

             }

         });

$(".swingimage").hover(
  function(){
    $(this).css("-webkit-animation-play-state", "paused");
},
  function(){
    $(this).css("-webkit-animation-play-state", "running");
});

$(document).ready(function(){
  $('.my_img_container').append(thumbnails[0]);
  //document.getElementsByClassName("my_img_container").appendChild(thumbnails[0]);
  setInterval(changeImg,3000);
});


var nextPos;
  
function changeImg(){
  var currentImgSrc=$('.my_img_container').children();
  console.log(thumbnails[0].src);
  console.log(currentImgSrc[0].src);
  for(var i=0;i<thumbnails.length;i++)
  {
    if(currentImgSrc[0].src == thumbnails[i].src){
      if(i+1<thumbnails.length)
      {
        nextPos=i+1;
        break;
      } else{
        nextPos=0;
        break;
      } 
    }
  }

  $(".my_img_container img").fadeOut(400, function() {
              $(".my_img_container img").attr('src',thumbnails[nextPos].src);
          }).fadeIn(400);
    
}
