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

// all section show and hide scripts
const homeSection = document.getElementById("homeSection");
const profileSection = document.getElementById("profileSection");
const updateBioDataSection = document.getElementById("updateBio-dataSection");
const interestedSection = document.getElementById("interestedSection");
const favoriteSection = document.getElementById("favoriteSection");
const viewAsSection = document.getElementById("viewAsSection");
const rulesAndRegulationSection = document.getElementById(
  "rulesAndRegulationSection"
);
const buyConnectsSection = document.getElementById("buyConnectsSection");
const notificationSection = document.getElementById("notificationSection");
const detailsSection = document.getElementById("detailsSection");

const handleShow = (name) => {
  console.log(name);
  [
    homeSection,
    profileSection,
    updateBioDataSection,
    interestedSection,
    favoriteSection,
    viewAsSection,
    rulesAndRegulationSection,
    buyConnectsSection,
    notificationSection,
    detailsSection,
  ].forEach((sec) => {
    sec.style.display = "none";
  });
  switch (name) {
    case "home":
      homeSection.style.display = "grid";
      break;
    case "profile":
      profileSection.style.display = "block";
      break;
    case "updateBio":
      updateBioDataSection.style.display = "block";
      break;
    case "interested":
      interestedSection.style.display = "grid";
      break;
    case "favorite":
      favoriteSection.style.display = "grid";
      break;
    case "viewAs":
      viewAsSection.style.display = "block";
      break;
    case "rules":
      rulesAndRegulationSection.style.display = "block";
      break;
    case "buyConnects":
      buyConnectsSection.style.display = "block";
      break;
    case "notification":
      notificationSection.style.display = "block";
      break;
    case "details":
      detailsSection.style.display = "block";
      break;
    default:
      homeSection.style.display = "grid";
  }
};
