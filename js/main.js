(function() {
    function typeText(element, text, duration) {
      return gsap.to(element, {
          text: text,
          duration: duration,
          ease: "power1.inOut",
      });
    }
  
    var infoParagraph = document.querySelector("#info p");
  
    gsap.timeline()
      .from(".circular-profile-pic", { opacity: 0, duration: 2 })
      .add(typeText(infoParagraph, "<h1> Hello </h1>", 5))
      .add(typeText(infoParagraph, "<h1> bonjour </h1>", 5))
      .add(typeText(infoParagraph, "As a versatile Front-End Developer and Designer, I'm driven by a passion for creating captivating digital experiences. Combining my eye for design with adept project management skills, I strive to infuse creativity and efficiency into every project. With a focus on seamless execution, I aim to deliver exceptional results in the dynamic realm of web development.", 7));
  
  
  
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
            gsap.to(infoBoxText, {
                text: text,
                duration: 3,
                ease: "power1.inOut"
            });
        });

        icon.addEventListener('mouseleave', function() {
            gsap.to(infoBoxText, {
                text: "",
                duration: 3,
                ease: "power1.inOut"
            });
        });
    });
  
  })();
  