
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
  var Logo = document.getElementById("logo");
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    Logo.classList.add("smaller");
  } else {
    Logo.classList.remove("smaller");
  }
}


console.log("it works");
