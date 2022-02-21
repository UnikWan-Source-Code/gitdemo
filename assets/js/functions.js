function mintNumberactive(evt) {
  tablinks = document.querySelectorAll(".octanium-counts-circle");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  evt.currentTarget.className += " active";
}

function showPlanetData(tabName) {
  var i, tabcontent;
  tabcontent = document.getElementsByClassName("oct-planets-section");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  document.getElementById(tabName).style.display = "block";
}

function mintpageFlow(tabName) {
  var i, tabcontent;
  tabcontent = document.getElementsByClassName("mint-flow-hholder");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  document.getElementById(tabName).style.display = "flex";
  if (tabName == "mintflow-goldlist") {
    var elem = document.getElementById("myBar");
    var width = 20;
    var id = setInterval(frame, 10);

    function frame() {
      if (width >= 60) {
        clearInterval(id);
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

// $(".planets-image-holder").click(function(){
//   var id = $(this).attr("myId");
//   console.log(id);//.next("#"+id).find(".oct-planetsdata-holder")
//   $(this).parent().parent().next("#"+id).find(".oct-planetsdata-holder").addClass("show");
// });

// $(".oct-planets-close").click(function(){
//   $(this).parent().find(".oct-planetsdata-holder").removeClass("show");
// });

$(".octa-faq .block1 .view-faq").click(function () {
  $(".view-faq").addClass("extra-radius");
  if ($(".view-answ").is(":visible")) {
    $(".view-answ").hide(10);
    $(".plusminus").text(" +");
    $(this).addClass("extra-radius");
  }
  if ($(this).next(".view-answ").is(":visible")) {
    $(this).next(".view-answ").hide(10);
    $(this).children(".plusminus").text(" +");
    $(this).addClass("extra-radius");
  } else {
    $(this).removeClass("extra-radius");
    $(this).next(".view-answ").show(10);
    $(this).children(".plusminus").text(" -");
  }
});
// $(document).ready(function () {
//   // Select and loop the container element of the elements you want to equalise
//   $(".oct-planets-section").each(function () {
//     // Cache the highest
//     var highestBox = 0;

//     // Select and loop the elements you want to equalise
//     $(".oct-planetsdata-holder", this).each(function () {
//       // If this box is higher than the cached highest then store it
//       if ($(this).height() > highestBox) {
//         highestBox = $(this).height();
//       }
//     });

//     // Set the height of all those children to whichever was highest
//     $(".oct-planetsdata-holder", this).height(highestBox);
//   });
// });
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 10) {
    $(".header-holder").css("background-color", "#1C0102");
    $(".header-holder").css("box-shadow", "rgb(0 0 0 / 56%) 0px 1px 4px 0px");
  }
});

$(window).resize(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 1) {
    $(".header-holder").css("background-color", "#1C0102");
  }
});

$(".toggle-holder").on("click", function () {
  $(".menu-holder").toggleClass("show");
  $(".header-holder").toggleClass("nav-bg-color");
});

$(window).resize(function () {
  if ($(window).width() > 1020) {
    if ($(".menu-holder").hasClass("show")) {
      $(".menu-holder").removeClass("show");
      $(".header-holder").removeClass("nav-bg-color");
    }
  }
});

$(window).load(function () {
  $(".block2-img1").effect(
    "bounce",
    {
      times: 2,
      distance: 200,
    },
    1000
  );
});
