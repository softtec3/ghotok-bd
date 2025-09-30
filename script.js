let time = document.getElementById("time");
const mainDate = new Date().toLocaleString().split(",")[0];
const getTime = () => {
  const date = new Date().toLocaleString().split(",")[1];
  const exactTime = date.split(" ")[1].split(":");
  time.innerHTML = `Time: ${exactTime[0]}:${exactTime[1]} | ${mainDate
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

// Details showing based on url
const params = new URLSearchParams(window.location.search);
if (params.has("details_id")) {
  handleShow("details");
}
if (params.has("buyConnects")) {
  handleShow("buyConnects");
}

// Image show in gallery
// details section
const mainImageDetails = document.getElementById("mainImageDetails");
const zoomInBtnDetails = document.getElementById("zoomInBtnDetails");
const zoomImageContainerDetails = document.getElementById(
  "zoomImageContainerDetails"
);
const zicCloseDetails = document.getElementById("zicCloseDetails");

function handleImage(e) {
  mainImageDetails.src = e.src;
}
zoomInBtnDetails.addEventListener("click", () => {
  zoomImageContainerDetails.style.transform = "scale(1)";
});
zicCloseDetails.addEventListener("click", () => {
  zoomImageContainerDetails.style.transform = "scale(0)";
});
mainImageDetails.addEventListener("click", () => {
  zoomImageContainerDetails.style.transform = "scale(1)";
});
// details section zoom
const midSubMain = document.getElementById("midSubMain");
function handleMid(e) {
  midSubMain.src = e.src;
}

// profile section
const mainImageProfile = document.getElementById("mainImageProfile");
const zoomInBtnProfile = document.getElementById("zoomInBtnProfile");
const zoomImageContainerProfile = document.getElementById(
  "zoomImageContainerProfile"
);
const zicCloseProfile = document.getElementById("zicCloseProfile");

function handleProfileImg(e) {
  mainImageProfile.src = e.src;
}
zoomInBtnProfile.addEventListener("click", () => {
  zoomImageContainerProfile.style.transform = "scale(1)";
});
zicCloseProfile.addEventListener("click", () => {
  zoomImageContainerProfile.style.transform = "scale(0)";
});
mainImageProfile.addEventListener("click", () => {
  zoomImageContainerProfile.style.transform = "scale(1)";
});
// profile section zoom
const profileSubMain = document.getElementById("profileSubMain");
function handleProfileImgZoom(e) {
  profileSubMain.src = e.src;
}
// alert
const alertContainer = document.getElementById("alert");
const alertClose = document.getElementById("alertClose");

alertClose.addEventListener("click", () => {
  alertContainer.style.display = "none";
});

// age
const ageSelect = document.getElementById("age");
for (let i = 18; i <= 50; i++) {
  let option = document.createElement("option");
  option.value = i;
  option.textContent = i;
  ageSelect.appendChild(option);
}
const ageSelect2 = document.getElementById("age2");
for (let i = 18; i <= 50; i++) {
  let option = document.createElement("option");
  option.value = i;
  option.textContent = i;
  ageSelect2.appendChild(option);
}

// Update bio images
const profilePic = document.getElementById("profilePic");
const otherImgOne = document.getElementById("otherImgOne");
const otherImgTwo = document.getElementById("otherImgTwo");
const otherImgThree = document.getElementById("otherImgThree");
const handleImgChange = (e) => {
  const targetName = e.name;
  let imgURL = URL.createObjectURL(e.files[0]);
  console.log(imgURL);
  if (targetName == "profile_picture") {
    profilePic.src = imgURL;
  } else if (targetName == "other_img_one") {
    otherImgOne.src = imgURL;
  } else if (targetName == "other_img_two") {
    otherImgTwo.src = imgURL;
  } else if (targetName == "other_img_three") {
    otherImgThree.src = imgURL;
  }
};
