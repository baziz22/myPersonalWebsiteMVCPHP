var link = document.getElementById("link");
var popup_modal = document.querySelector(".popup-modal");
var popup = document.querySelector(".popup-window");
var close = document.getElementById("popup-close");
var ok = document.querySelector(".submit");
function popup_it() {
  popup_modal.style.display = "block";
  popup.style.transform = "translate(0%,-50%) scale(1)";
  popup.style.opacity = "1";
};
close.onclick = function () {
  popup.style.transform = "translate(0%,-250%) scale(0.1)";
  popup.style.opacity = "0";
  popup_modal.style.display = "none";
};
ok.onclick = function () {
  popup.style.transform = "translate(0%,-250%) scale(0.1)";
  popup.style.opacity = "0";
  popup_modal.style.display = "block";
};

//window.onload = function () {};

