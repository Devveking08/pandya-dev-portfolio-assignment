gsap.registerPlugin(ScrollTrigger);

(function() {
  gsap.to('#projects', {
    opacity: 1,
    y: 0,
    duration: 1,
    delay: 0.5, 
    ease: "power2.out", 
    scrollTrigger: {
      trigger: '#projects',
      start: 'top 80%', 
      end: 'bottom 20%', 
      toggleClass: 'reveal',
      markers: false, 
        scrub: true
    }
  });

  gsap.to("#left", {
    scrollTrigger: {
        trigger: "#form-con",
        start: "top center",
        end: "bottom center",
        toggleActions: "play none none none"
    },
    opacity: 1,
    x: 0,
    duration: 1
});

// scroll trigger for the project page contnet
document.addEventListener("DOMContentLoaded", function() {
  // Define the animations
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: "#project-info", // Trigger when the user scrolls to the project-info section
      start: "top center", // Start the animation when the top of the project-info section reaches the center of the viewport
      end: "bottom center", // End the animation when the bottom of the project-info section reaches the center of the viewport
      toggleActions: "play none none reverse", // Play the animation when scrolling into view, and reverse it when scrolling out of view
    }
  });

  // Add animations to elements inside the project-info section
  tl.from("#project-info h1", { opacity: 0, y: -50, duration: 1 });
  tl.from("#project-info p", { opacity: 0, y: 50, stagger: 0.3 }, "-=0.5");
  tl.from("#project-info img", { opacity: 0, x: -50, duration: 1 }, "-=1");
  tl.from("#right-images-container img", { opacity: 0, x: 50, stagger: 0.3 }, "-=1");
});



gsap.to("#contactForm", {
    scrollTrigger: {
        trigger: "#form-con",
        start: "top center",
        end: "bottom center",
        toggleActions: "play none none none"
    },
    opacity: 1,
    x: 0,
    duration: 1
});


  var hamburger = document.querySelector(".hamburger");
  var mobileNav = document.querySelector(".mobile-nav");

  hamburger.addEventListener("click", function () {
    mobileNav.classList.toggle("show");
  });

  var skillIcons = document.querySelectorAll('.skill-icon');
  var infoBoxText = document.querySelector('#info-text');

  skillIcons.forEach(function(icon) {
      icon.addEventListener('mouseenter', function() {
          var text = icon.getAttribute('data-info');
          infoBoxText.textContent = text;
      });

      icon.addEventListener('mouseleave', function() {
          infoBoxText.textContent = "";
      });
  });
})();
