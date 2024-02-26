const form = document.querySelector("#contactForm");
const feedBack = document.querySelector("#feedback");

function regForm(event) {
  //console.log("called");
  event.preventDefault();
  const url = "admindev/adduser.php";
  const thisform = event.currentTarget;
  //console.log(thisform.elements.lname.value);
  const formdata =
  "f_name=" +
  thisform.elements.fname.value +
  "&e_mail=" +
  thisform.elements.email.value +
  "&c_subject=" +
  thisform.elements.c_subject.value +
  "&comments=" +
  thisform.elements.comments.value;


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
        "sorry, Browser not supported";
    });
}

form.addEventListener("submit", regForm);