const button = document.getElementById("movingBtn");

function moveButton() {
  const maxX = window.innerWidth - button.offsetWidth;
  const maxY = window.innerHeight - button.offsetHeight;

  const randomX = Math.floor(Math.random() * maxX);
  const randomY = Math.floor(Math.random() * maxY);

  button.style.left = `${randomX}px`;
  button.style.top = `${randomY}px`;
}

// move immediately
moveButton();

let interval = Math.floor(Math.random());

// then move every 5 seconds
// setInterval(moveButton, 5000);
setInterval(moveButton, 5000);

function setupSecretSubmit() {
  const secretButton = document.getElementById("secretSubmitButton");

  secretButton.addEventListener("click", function () {
    const userDetails = {
      firstName: document.getElementById("firstName").value,
      lastName: document.getElementById("lastName").value,
    };

    console.log("Submitting user details:", userDetails);

    // Example fake submission
    // fetch("/submit", { method: "POST", body: JSON.stringify(userDetails) });
  });
}

setupSecretSubmit();
