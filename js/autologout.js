var logout_time=18000000;//30 Minutes ,NOTE:1 minute = 60000 miliseconds
//var logout_time=60000;//30 Minutes ,NOTE:1 minute = 60000 miliseconds
var timer = 0;

function set_interval() {
  timer = setInterval("auto_logout()", logout_time);
}


function reset_interval() {
  if (timer != 0) {
    clearInterval(timer);
    timer = 0;
    // second step: implement the timer again
    timer = setInterval("auto_logout()", logout_time);
    // completed the reset of the timer
  }

}

function auto_logout() {
  var url=$('#url').val();
  window.location = url+'login/inactivity_logout';
}

$(document).ready(function(){
  set_interval();
});

$(document).on("keyup click mousemove scroll",function(){
  reset_interval();
});
