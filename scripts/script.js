
window.onscroll = function() {
  growShrinkLogo();
};

function growShrinkLogo() {
  var Logo = document.getElementById("Logo");
  var info = document.getElementById("aktual");
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    Logo.style.width = '40px';
    Logo.removeChild(info);
  } else {
    Logo.style.width = '80px';
  }
}

console.log("it works");
