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
  
  
    const form = document.querySelector("#driverForm");
  const feedBack = document.querySelector("#feedback");

  function regForm(event) {
    //console.log("called");
    event.preventDefault();
    const url = "adduser.php";
    const thisform = event.currentTarget;
    //console.log(thisform.elements.lname.value);
    const formdata =
      "f_name=" +
      thisform.elements.fname.value +
      "&e_mail=" +
      thisform.elements.lname.value +
      "&Subject=" +
      thisform.elements.email.value +
      "&comments=" +
      thisform.elements.city.value;
    console.log(formdata);

    fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: formdata,
    })
      .then((response) => response.json())
      .then((responseText) => {
        console.log(responseText);
        feedBack.innerHTML = "";
        if (responseText.errors) {
          responseText.errors.forEach((error) => {
            const errorElement = document.createElement("p");
            errorElement.textContent = error;
            feedBack.appendChild(errorElement);
          });
        } else {
          form.reset();
          const messageElement = document.createElement("p");
          messageElement.textContent = responseText.message;
          feedBack.appendChild(messageElement);
        }
      })
      .catch((error) => {
        console.log(error);
        feedBack.innerHTML = "";
        const messageElement = document.createElement("p");
        messageElement.textContent =
          "sorry,you must be using an older browser, that does not support AJAX";
      });
  }

  form.addEventListener("submit", regForm);
  
  
  })();
  