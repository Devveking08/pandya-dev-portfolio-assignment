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
      .add(typeText(infoParagraph, "I'm a versatile Front-End Developer and Project Manager with a passion for crafting immersive digital experiences. With a keen eye for design and a knack for project management, I bring creativity and efficiency to every endeavor, ensuring seamless execution and exceptional results in the world of web development. ", 7));
  
  
  
    var hamburger = document.querySelector(".hamburger");
    var mobileNav = document.querySelector(".mobile-nav");
  
    hamburger.addEventListener("click", function () {
      mobileNav.classList.toggle("show");
    });
  
  })();
  