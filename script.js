let time = document.getElementById("time");
const mainDate = new Date().toLocaleString().split(",")[0];
const getTime = () => {
  const date = new Date().toLocaleString().split(",")[1];
  const zone = date.split(" ")[2];
  const exactTime = date.split(" ")[1].split(":");
  time.innerHTML = `${exactTime[0]}:${exactTime[1]} ${zone} | ${mainDate
    .split("/")
    .join("-")}`;
};
setInterval(() => {
  getTime();
}, 1000);

// Publish modal Script
const modal = document.getElementById("publishModal");
const btn = document.getElementById("publishBtn");
const closeBtn = document.querySelector(".close");
const payBtn = document.getElementById("payBtn");

// Open Modal
btn.onclick = () => {
  modal.style.display = "flex";
  modal.classList.add("show");
};

// Close Modal
const closeModal = () => {
  modal.classList.remove("show");
  modal.style.display = "none";
};

closeBtn.onclick = closeModal;
window.onclick = (e) => {
  if (e.target == modal) closeModal();
};
