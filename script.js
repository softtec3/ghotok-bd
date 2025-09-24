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

// selected bio-data details
const showDetails = (data) => {
  console.log(data);
  detailsSection.innerHTML = `
                <div class="person-details">
                <!-- Profile Header -->
                <div class="profile-header">
                  <img
                    src="./uploads/${data?.profile_picture}"
                    alt="Profile"
                  />
                  <div class="profile-basic">
                    <h2>${data?.full_name} <span class="id">ID: ${
    data?.id
  }</span></h2>
                    <p>
                      <i class="fas fa-map-marker-alt"></i> ${
                        data?.present_address
                      }
                    </p>
                  </div>
                </div>

                <!-- Quick Intro -->
                <div class="info-section">
                  <h3><i class="fas fa-id-card"></i> Overview</h3>
                  <p>Name: ${data?.full_name}, Age: ${data?.age} Years</p>
                  <p>Education: ${data?.education} | Profession: ${
    data?.profession
  }</p>
                  <p>Height: ${data?.height} | Skin Color: ${
    data?.skin_color
  }</p>
                  <p><strong>A Few Lines About ${
                    data?.full_name
                  }:</strong> .............</p>
                </div>

                <!-- Basic Details -->
                <div class="info-section">
                  <h3><i class="fas fa-user"></i> Basic Details</h3>
                  <ul>
                    <li><strong>Full Name:</strong> ${data?.full_name}</li>
                    <li><strong>Age:</strong> ${data?.age} Years</li>
                    <li><strong>Height:</strong> ${data?.height}</li>
                    <li><strong>Gender:</strong> ${data?.gender}</li>
                    <li><strong>Marital Status:</strong> ${
                      data?.marital_status
                    }</li>
                  </ul>
                </div>

                <!-- Contact Details -->
                <div class="info-section">
                  <h3><i class="fas fa-phone"></i> Contact Details</h3>
                  <ul>
                    <li><strong>Phone:</strong> ${
                      data?.phone ? data?.phone : "Sent interest to see"
                    }</li>
                    <li><strong>Email:</strong> ${
                      data?.email ? data?.email : "Sent interest to see"
                    }</li>
                    <li>
                      <strong>Address:</strong> ${data?.present_address}
                    </li>
                  </ul>
                </div>

                <!-- Professional Information -->
                <div class="info-section">
                  <h3>
                    <i class="fas fa-briefcase"></i> Professional Information
                  </h3>
                  <ul>
                    <li><strong>Education:</strong> ${data?.education}</li>
                    <li><strong>Profession:</strong> ${data?.profession}</li>
                    <li><strong>Monthly Income:</strong> ${
                      data?.monthly_income
                    }/=</li>
                  </ul>
                </div>


                <!-- Family Details -->
                <div class="info-section">
                  <h3><i class="fas fa-users"></i> Family Details</h3>
                  <ul>
                    <li><strong>Siblings:</strong> — ${data?.siblings}</li>
                  </ul>
                </div>


                <!-- Action Buttons -->
                <div class="actions">

                  <button class="btn info">
                    <i class="fas fa-phone"></i> Contact
                  </button>
                  <button class="btn danger">
                    <i class="fas fa-exclamation-triangle"></i> Report
                  </button>
                </div>
              </div>
  `;
};

// <button class="btn primary">
//   <i class="fas fa-heart"></i> Send Interest
// </button>
// <button class="btn secondary">
//   <i class="fas fa-star"></i> Add to Favorites
// </button>
