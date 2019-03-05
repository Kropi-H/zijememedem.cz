
$(document).ready(function(){
    $(this).scrollTop(0);
});

$(window).on('load',function(){
    $('#myModal').modal('show');
});

window.onscroll = function() {
  growShrinkLogo();
};

function growShrinkLogo() {
  var Logo = document.getElementById("Logo");
  var info = document.getElementById("aktual");
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    Logo.style.width = '50px';
    info.style.visibility = 'hidden';
  } else {
    Logo.style.width = '90px';
  }
}


console.log("it works");
