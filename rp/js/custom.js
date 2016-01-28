  smoothScroll.init();

  (function($) {
  $(document.body).fadeIn(1000);
})(jQuery);



//#bike, #inspeC, #inspecR,#feature{

  var creep=document.querySelectorAll(".creep li");
 
 for (var i = 0; i < creep.length; i++) {
    creep[i].addEventListener('click',creepcall);
 };

  function creepcall(){


 
  var val=($(this).text());
console.log($(this).text());
   hideExcept(val);
  }


function hideExcept(abc){


for (var i = 0; i <creep.length; i++) {
 
if(creep[i].textContent==abc) {
creep[i].className='active';

} 
else {

  creep[i].className="";
}


};



}