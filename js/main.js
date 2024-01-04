document.addEventListener("DOMContentLoaded", function () {
  var menuButton = document.getElementById("toggle-menu");
  var nav = document.querySelector("nav");

  menuButton.addEventListener("click", function () {
    nav.style.display = nav.style.display === "block" ? "none" : "block";
  });
});

$(window).ready(function () {
  $(".menu-list").hide();
  $(".profile-list").hide();
  $(".post-list").hide();
  $(".mobile-list .nav-bar").click(function () {
    $(".menu-list").animate({ opacity: "show" }, 500);
  });

  $(".mobile-list >.nav-profile").click(function () {
    $(".profile-list").animate({ opacity: "show" }, 500);
  });
  $(".mobile-list >.nav-home").click(function () {
    window.location.href = "index.php";
  });
  $(".mobile-list >.nav-post").click(function () {
    window.location.href = "post.php";
    // $(".post-list").animate( { "opacity": "show"} , 500 );
  });

  $(".mobilemenu-close").click(function () {
    $(".menu-list").animate({ opacity: "hide" }, 500);
  });

  $(".profile-close").click(function () {
    $(".profile-list").animate({ opacity: "hide" }, 500);
  });

  $(".post-close").click(function () {
    $(".post-list").animate({ opacity: "hide" }, 500);
  });

  /* End Jquery */
});
