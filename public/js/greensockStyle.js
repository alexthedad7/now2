function animateFrom(elem, direction) {
  direction = direction || 1;
  var x = 0,
    y = direction * 100;
  if (elem.classList.contains("gs_reveal_fromLeft")) {
    x = -100;
    y = 0;
  } else if (elem.classList.contains("gs_reveal_fromRight")) {
    x = 100;
    y = 0;
  }
  elem.style.transform = "translate(" + x + "px, " + y + "px)";
  elem.style.opacity = "0";
  gsap.fromTo(elem, { x: x, y: y, autoAlpha: 0 }, {
    duration: 1.25,
    x: 0,
    y: 0,
    autoAlpha: 1,
    ease: "expo",
    overwrite: "auto"
  });
}

function hide(elem) {
  gsap.set(elem, { autoAlpha: 0 });
}

document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger);


  ScrollTrigger.create({
    trigger:".first-img-container",
    start:"top 500px",
    end:"+=200px",
    pin:true,
    pinSpacing:false
  });
  ScrollTrigger.create({
    trigger:".second-img-container",
    start:"top 700px",
    end:"+=200px",
    pin:true,
    pinSpacing:false
  });
  ScrollTrigger.create({
    trigger:".third-img-container",
    start:"top 900px",
    end:"+=200px",
    pin:true,
    pinSpacing:false
  });

  // gsap.to(".features-section-primary-img", {
  //   ScrollTrigger: {
  //     trigger: ".primary-image-container",
  //     start: "top center",
  //     end: "top 100px",
  //     toggleActions: "restart pause reverse pause"
  //   },
  //   y: 130,
  //   duration:3
  // });

  gsap.utils.toArray(".gs_reveal").forEach(function (elem) {
    hide(elem); // assure that the element is hidden when scrolled into view

    ScrollTrigger.create({
      trigger: elem,
      onEnter: function () { animateFrom(elem) },
      onEnterBack: function () { animateFrom(elem, -1) },
      onLeave: function () { hide(elem) } // assure that the element is hidden when scrolled into view
    });
  });
});


