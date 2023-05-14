const popUp = document.querySelector(".pop-up");
const acceptBtn = document.getElementById("accept-btn");

function show() {
  popUp.classList.add("opened-popup");
}

acceptBtn.addEventListener("click", () => {
  popUp.classList.remove("opened-popup");
});