const input = document.getElementById("textInput");
const keyboard = document.getElementById("keyboard");

keyboard.addEventListener("click", (e) => {
  const key = e.target.dataset.key;
  const action = e.target.dataset.action;

  if (!key && !action) return;

  if (action === "backspace") {
    input.value = input.value.slice(0, -1);
  } else {
    input.value += key;
  }

  input.focus();
});

