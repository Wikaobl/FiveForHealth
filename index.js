const checkButtons = document.querySelectorAll("i.check");
const cancelButtons = document.querySelectorAll("i.xmark");
const habitTexts = document.querySelectorAll(".habit");

for (let i = 0; i < checkButtons.length; i++) {
  checkButtons[i].addEventListener("click", () => {
    checkButtons[i].style.display = "none";
    cancelButtons[i].style.display = "block";
    habitTexts[i].style.textDecoration = "line-through";
  });
}

for (let i = 0; i < cancelButtons.length; i++) {
  cancelButtons[i].addEventListener("click", () => {
    checkButtons[i].style.display = "block";
    cancelButtons[i].style.display = "none";
    habitTexts[i].style.textDecoration = "none";
  });
}
