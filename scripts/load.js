;(function(){
  function id(v){ return document.getElementById(v); }
  function loadbar() {
    var ovrl = id("loading-overlay"),
        prog = id("progressbar"),
        stat = id("progstat"),
        proper = id("progressper"),
        img = document.images,
        c = 0;
        tot = img.length;

    function imgLoaded(){
      c += 1;
      var perc_num = ((100/tot*c) << 0);
      if(perc_num>=0 && perc_num<50) stat.innerHTML = "Loading Site Content";
      else if(perc_num>=50 && perc_num<70) stat.innerHTML = "Installing Modules";
      else if(perc_num>=70 && perc_num<80) stat.innerHTML = "Integrating functionalities";
      else if(perc_num>=80 && perc_num<95) stat.innerHTML = "Almost there, Hold Your Horses";
      else if(perc_num>=95) stat.innerHTML = "Done, Let's get Rolling !";
      perc=perc_num+"%";
      proper.innerHTML = perc;
      prog.style.width = perc;
      if(c===tot) return doneLoading();
    }
    function doneLoading(){
      ovrl.style.height = 0;
      setTimeout(function(){ 
        ovrl.style.display = "none";
      }, 1200);
    }
    for(var i=0; i<tot; i++) {
      var tImg     = new Image();
      tImg.onload  = imgLoaded;
      tImg.onerror = imgLoaded;
      tImg.src     = img[i].src;
    }    
  }
  document.addEventListener('DOMContentLoaded', loadbar, false);
}());