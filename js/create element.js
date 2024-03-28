
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
   
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1;}
    
    slides[slideIndex-1].style.display = "block";  
    
    setTimeout(showSlides, 2000); 
}



/*function showSlides(slideIndex ) {
   
    var i;
    var slides = document.getElementsByClassName("mySlides");
   
    for (i = 0; i < slides.length; i++) {
      
       slides[i].style.display = "none";  
    }
  if(slideIndex>=slides.length)
  {
     slides[0].style.display = "block"; 
  }else{
    slides[slideIndex].style.display = "block"; 
  }*/


function bookmark() {
    
    document.getElementById("0").style.display = "none";
  document.getElementById("3").style.display = "none";
    document.getElementById("pp").style.display = "none";
    document.getElementById("1").style.display = "none";
    document.getElementById("2").style.display = "none";
    document.getElementById("ll").style.display = "block";
   
}



function kmark(idOfnone,classOfHidden,) {
   
  //document.getElementById(idOfUp).style.display = "none";
  var hidden = document.getElementsByClassName(classOfHidden);
   
    for (i = 0; i < hidden.length; i++) {
       hidden[i].style.display = "none";  
    }
  document.getElementById(idOfnone).style.display = "block";
}
function readmore(idOfUp,idOfnone){
    document.getElementById(idOfUp).style.display = "none";
  document.getElementById(idOfnone).style.display = "block";
}
function readless(idOfUp,idOfnone){
    document.getElementById(idOfUp).style.display = "block";
  document.getElementById(idOfnone).style.display = "none";
}
function sicks(idOfnone) {
  //document.getElementById(idOfUp).style.display = "none";
  var hidden = document.getElementsByClassName("sick_hidden");
   
    for (i = 0; i < hidden.length; i++) {
       hidden[i].style.display = "none";  
    }
  document.getElementById(idOfnone).style.display = "block";
}
function sick_less(idOfnone) {
    document.getElementById(idOfnone).style.display = "none";}
function mark(idOfUp,idOfnone) {
  var dofup=document.getElementsById(idOfUp);
  for(var i=0;i<dofup.length;i++)
  {
  document.getElementById(idOfUp).style.display = "none";}
  document.getElementById(idOfnone).style.display = "block";
}
/*var picIndex = 0;
showpics();

function showpics() {
    var i;
    var pics = document.getElementsByClassName("pics");
   
    for (i = 0; i < pics.length; i++) {
       pics[i].style.display = "none";  
    }
    picIndex++;
    if (picIndex> pics.length) {picIndex = 1;}
    
    pics[picIndex-1].style.display = "block";  
    
    setTimeout(showpics, 2000); // Change image every 2 seconds
}*/
/*var picIndex = 0;
showpics();
function showpics() {
    var i;
    var j;var g;var x;
    var pics = document.getElementsByClassName("pics");
   
    for (i = 0; i < pics.length; i++) {
       pics[i].style.display = "none";  
    }
     for (j= picIndex; j < pics.length; j++) {
   
     for (g = j; g < 3; g++) {
    if (j> pics.length) {g = 1;}
     for (x = g; x < 3-g; x++) 
    pics[g].style.display = "block";  }
      j++;
      }}
    setTimeout(showpics, 2000); // Change image every 2 seconds
}*/

function jumptoup(){
  window.scrollTo(0,0);
}

 var acticleIndex = 0;
showArticle();

function showArticle() {
    var i;
    var my_articles = document.getElementsByClassName("wonds");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < my_articles.length; i++) {
       my_articles[i].style.display = "none";  
    }
    acticleIndex++;
    if (acticleIndex> my_articles.length) { acticleIndex = 1;}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    my_articles[acticleIndex-1].style.display = "block";  
    dots[acticleIndex-1].className += " active";
    myVar=setTimeout(showArticle, 4000); 
}
function stopp(){ clearTimeout(myVar);}
function stop(dotId,artId)
{
     clearTimeout(myVar);
    var i;
    var my_articles = document.getElementsByClassName("wonds");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < my_articles.length; i++) {
       my_articles[i].style.display = "none";  
    }
   
      
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }  
document.getElementById(artId). style.display = "block";  
document.getElementById(dotId). className += "active";
}
function w3_open1() {
    document.getElementById("mySidebar1").style.display = "inline";
    document.getElementById("mySidebar3").style.display = "none";
    document.getElementById("mySidebar2").style.display = "none";
    document.getElementById("mySidebar4").style.display = "none";
    
}
function w3_close1() {
    document.getElementById("mySidebar1").style.display = "none";
    
}
