const form = document.querySelector("#driverForm");
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
  "&Subject=" +
  thisform.elements.Subject.value +
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
        "sorry,you must be using an older browser, that does not support AJAX";
    });
}

form.addEventListener("submit", regForm);