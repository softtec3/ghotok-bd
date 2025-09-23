<?php
  session_start();
    if (!isset($_SESSION["user_id"])) {
        header("Location: ./login.php");
        exit();
    };
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- FontAwesome cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Ghotok BD</title>
</head>
  <body>
    <div id="container">
      <!-- Advertise Container 01 -->
      <?php include_once("./components/advertisement1.php")?>
      <!-- Main -->
      <div id="main">
        <!-- Top Bar -->
        <?php include_once("./components/topbar.php")?>
        <!-- Top Main Bar -->
        <?php include_once("./components/topbarmain.php")?>
        <!-- Main part -->
        <div id="mainPart">
          <!-- Side bar -->
          <?php include_once("./components/sidebar.php")?>
          <!-- Main Content - changeable -->
          <div id="mainContent">
            

            <!-- Home Section -->
            <!-- all profiles -->
            <div id="homeSection" >
              <?php include_once("./components/filter.php")?>
            <div class="mainContent">
              <!-- match profile -->
              <div class="sideBarProfile">
                <span onclick="handleShow('details')"
                  ><img
                    src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="profile image"
                /></span>
                <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                <div class="description">
                  <table>
                    <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
                    <tr>
                      <td>NAME:</td>
                      <td>John Doe</td>
                    </tr>
                    <tr>
                      <td>AGE:</td>
                      <td>24 years</td>
                    </tr>
                    <tr>
                      <td>HEIGHT:</td>
                      <td>5′ 1″</td>
                    </tr>
                    <tr>
                      <td>PROFESSION:</td>
                      <td>Teacher</td>
                    </tr>
                    <tr>
                      <td>SKIN COLOR:</td>
                      <td>Bright</td>
                    </tr>
                    <tr>
                      <td>WEIGHT:</td>
                      <td>50 KG</td>
                    </tr>
                  </table>
                </div>
                <div class="actionButtons">
                  <button>Favorite</button>
                  <button>Interested</button>
                </div>
              </div>
              <!-- match profile -->
              <div class="sideBarProfile">
                <span onclick="handleShow('details')"
                  ><img
                    src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVufGVufDB8fDB8fHww"
                    alt="profile image"
                /></span>
                <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                <div class="description">
                  <table>
                    <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
                    <tr>
                      <td>NAME:</td>
                      <td>John Doe</td>
                    </tr>
                    <tr>
                      <td>AGE:</td>
                      <td>24 years</td>
                    </tr>
                    <tr>
                      <td>HEIGHT:</td>
                      <td>5′ 1″</td>
                    </tr>
                    <tr>
                      <td>PROFESSION:</td>
                      <td>Teacher</td>
                    </tr>
                    <tr>
                      <td>SKIN COLOR:</td>
                      <td>Bright</td>
                    </tr>
                    <tr>
                      <td>WEIGHT:</td>
                      <td>50 KG</td>
                    </tr>
                  </table>
                </div>
                <div class="actionButtons">
                  <button class="fav">Favorite</button>
                  <button>Interested</button>
                </div>
              </div>
              <!-- match profile -->
              <div class="sideBarProfile">
                <span onclick="handleShow('details')"
                  ><img
                    src="https://images.unsplash.com/photo-1602442787305-decbd65be507?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHdvbWVufGVufDB8fDB8fHww"
                    alt="profile image"
                /></span>
                <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                <div class="description">
                  <table>
                    <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
                    <tr>
                      <td>NAME:</td>
                      <td>John Doe</td>
                    </tr>
                    <tr>
                      <td>AGE:</td>
                      <td>24 years</td>
                    </tr>
                    <tr>
                      <td>HEIGHT:</td>
                      <td>5′ 1″</td>
                    </tr>
                    <tr>
                      <td>PROFESSION:</td>
                      <td>Teacher</td>
                    </tr>
                    <tr>
                      <td>SKIN COLOR:</td>
                      <td>Bright</td>
                    </tr>
                    <tr>
                      <td>WEIGHT:</td>
                      <td>50 KG</td>
                    </tr>
                  </table>
                </div>
                <div class="actionButtons">
                  <button>Favorite</button>
                  <button>Interested</button>
                </div>
              </div>
              <!-- match profile -->
              <div class="sideBarProfile">
                <span onclick="handleShow('details')"
                  ><img
                    src="https://images.unsplash.com/photo-1485875437342-9b39470b3d95?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHdvbWVufGVufDB8fDB8fHww"
                    alt="profile image"
                /></span>
                <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                <div class="description">
                  <table>
                    <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
                    <tr>
                      <td>NAME:</td>
                      <td>John Doe</td>
                    </tr>
                    <tr>
                      <td>AGE:</td>
                      <td>24 years</td>
                    </tr>
                    <tr>
                      <td>HEIGHT:</td>
                      <td>5′ 1″</td>
                    </tr>
                    <tr>
                      <td>PROFESSION:</td>
                      <td>Teacher</td>
                    </tr>
                    <tr>
                      <td>SKIN COLOR:</td>
                      <td>Bright</td>
                    </tr>
                    <tr>
                      <td>WEIGHT:</td>
                      <td>50 KG</td>
                    </tr>
                  </table>
                </div>
                <div class="actionButtons">
                  <button>Favorite</button>
                  <button>Interested</button>
                </div>
              </div>
              <!-- match profile -->
              <div class="sideBarProfile">
                <span onclick="handleShow('details')"
                  ><img
                    src="https://images.unsplash.com/photo-1496345875659-11f7dd282d1d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8bWVufGVufDB8fDB8fHww"
                    alt="profile image"
                /></span>
                <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                <div class="description">
                  <table>
                    <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
                    <tr>
                      <td>NAME:</td>
                      <td>John Doe</td>
                    </tr>
                    <tr>
                      <td>AGE:</td>
                      <td>24 years</td>
                    </tr>
                    <tr>
                      <td>HEIGHT:</td>
                      <td>5′ 1″</td>
                    </tr>
                    <tr>
                      <td>PROFESSION:</td>
                      <td>Teacher</td>
                    </tr>
                    <tr>
                      <td>SKIN COLOR:</td>
                      <td>Bright</td>
                    </tr>
                    <tr>
                      <td>WEIGHT:</td>
                      <td>50 KG</td>
                    </tr>
                  </table>
                </div>
                <div class="actionButtons">
                  <button>Favorite</button>
                  <button>Interested</button>
                </div>
              </div>
              <!-- match profile -->
              <div class="sideBarProfile">
                <span onclick="handleShow('details')"
                  ><img
                    src="https://plus.unsplash.com/premium_photo-1682431956407-ead76b412a42?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fHdvbWVufGVufDB8fDB8fHww"
                    alt="profile image"
                /></span>
                <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                <div class="description">
                  <table>
                    <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
                    <tr>
                      <td>NAME:</td>
                      <td>John Doe</td>
                    </tr>
                    <tr>
                      <td>AGE:</td>
                      <td>24 years</td>
                    </tr>
                    <tr>
                      <td>HEIGHT:</td>
                      <td>5′ 1″</td>
                    </tr>
                    <tr>
                      <td>PROFESSION:</td>
                      <td>Teacher</td>
                    </tr>
                    <tr>
                      <td>SKIN COLOR:</td>
                      <td>Bright</td>
                    </tr>
                    <tr>
                      <td>WEIGHT:</td>
                      <td>50 KG</td>
                    </tr>
                  </table>
                </div>
                <div class="actionButtons">
                  <button>Favorite</button>
                  <button>Interested</button>
                </div>
              </div>
              <!-- match profile -->
              <div class="sideBarProfile">
                <span onclick="handleShow('details')"
                  ><img
                    src="https://images.unsplash.com/photo-1530047198515-516ff90fc4d9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTh8fHdvbWVufGVufDB8fDB8fHww"
                    alt="profile image"
                /></span>
                <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                <div class="description">
                  <table>
                    <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
                    <tr>
                      <td>NAME:</td>
                      <td>John Doe</td>
                    </tr>
                    <tr>
                      <td>AGE:</td>
                      <td>24 years</td>
                    </tr>
                    <tr>
                      <td>HEIGHT:</td>
                      <td>5′ 1″</td>
                    </tr>
                    <tr>
                      <td>PROFESSION:</td>
                      <td>Teacher</td>
                    </tr>
                    <tr>
                      <td>SKIN COLOR:</td>
                      <td>Bright</td>
                    </tr>
                    <tr>
                      <td>WEIGHT:</td>
                      <td>50 KG</td>
                    </tr>
                  </table>
                </div>
                <div class="actionButtons">
                  <button>Favorite</button>
                  <button>Interested</button>
                </div>
              </div>
            </div>
            </div>
            <!-- Profile section -->
            <div id="profileSection" style="display: none;">
              <div class="status-select-container">
                <div class="status-select">
                  <label for="profileStatus"
                    >Profile Status <span class="status">Inactive</span></label
                  >
                  <!-- <label for="profileStatus">Profile Status <span class="status" style="color: white;background-color:green">Active</span></label> -->
                  <button>Active</button>
                  <!-- <button style="background: red;">Inactive</button> -->
                </div>
              </div>

              <div class="person-details">
                <!-- Profile Header -->
                <div class="profile-header">
                  <img
                    src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?w=200&h=200&fit=crop"
                    alt="Profile"
                  />
                  <div class="profile-basic">
                    <h2>John Flekh <span class="id">ID: XHF476GF34R</span></h2>
                    <p>
                      <i class="fas fa-circle" style="color: red"></i> Inactive
                    </p>
                    <p>
                      <i class="fas fa-map-marker-alt"></i> Jashore, Khulna,
                      Bangladesh
                    </p>
                  </div>
                </div>

                <!-- Quick Intro -->
                <div class="info-section">
                  <h3><i class="fas fa-id-card"></i> Overview</h3>
                  <p>Name: John Flekh, Age: 26 Years</p>
                  <p>Education: Bachelor | Profession: Businessman</p>
                  <p>Height: 5ft 8in | Skin Color: Bright</p>
                  <p><strong>A Few Lines About John:</strong> .............</p>
                </div>

                <!-- Basic Details -->
                <div class="info-section">
                  <h3><i class="fas fa-user"></i> Basic Details</h3>
                  <ul>
                    <li><strong>Profile For:</strong> Self</li>
                    <li><strong>Full Name:</strong> John Flekh</li>
                    <li><strong>Age:</strong> 24 Years</li>
                    <li><strong>Height:</strong> 5ft 8in</li>
                    <li><strong>Gender:</strong> Male</li>
                    <li><strong>Marital Status:</strong> Unmarried</li>
                    <li><strong>Mother Tongue:</strong> English</li>
                    <li><strong>Blood Group:</strong> B+</li>
                    <li><strong>Religion:</strong> Islam</li>
                  </ul>
                </div>

                <!-- Contact Details -->
                <div class="info-section">
                  <h3><i class="fas fa-phone"></i> Contact Details</h3>
                  <ul>
                    <li><strong>Phone:</strong> +8801300000000</li>
                    <li><strong>Email:</strong> xzy@contact.com</li>
                    <li>
                      <strong>Address:</strong> 50 Washington Square S, New
                      York, NY 10012, USA
                    </li>
                  </ul>
                </div>

                <!-- Professional Information -->
                <div class="info-section">
                  <h3>
                    <i class="fas fa-briefcase"></i> Professional Information
                  </h3>
                  <ul>
                    <li><strong>Education:</strong> Bachelor</li>
                    <li><strong>Profession:</strong> Teacher</li>
                    <li><strong>Employment:</strong> Private Sector</li>
                    <li><strong>Annual Income:</strong> 200000/=</li>
                  </ul>
                </div>

                <!-- Lifestyle -->
                <div class="info-section">
                  <h3><i class="fas fa-leaf"></i> Lifestyle</h3>
                  <ul>
                    <li><strong>Eating Habits:</strong> —</li>
                    <li><strong>Drinking Habits:</strong> —</li>
                    <li><strong>Smoking Habits:</strong> —</li>
                  </ul>
                </div>

                <!-- Location -->
                <div class="info-section">
                  <h3><i class="fas fa-map"></i> Location</h3>
                  <ul>
                    <li><strong>City:</strong> Jashore</li>
                    <li><strong>State:</strong> Khulna</li>
                    <li><strong>Country:</strong> Bangladesh</li>
                    <li><strong>Nationality:</strong> Bangladeshi</li>
                  </ul>
                </div>

                <!-- Family Details -->
                <div class="info-section">
                  <h3><i class="fas fa-users"></i> Family Details</h3>
                  <ul>
                    <li><strong>No. of Brothers:</strong> —</li>
                    <li><strong>No. of Sisters:</strong> —</li>
                    <li><strong>Father’s Profession:</strong> —</li>
                    <li><strong>Mother’s Profession:</strong> —</li>
                    <li><strong>Family Origin:</strong> —</li>
                  </ul>
                </div>

                <!-- Interests & Hobbies -->
                <div class="info-section">
                  <h3><i class="fas fa-heart"></i> Interests & Hobbies</h3>
                  <ul>
                    <li>Interest 1</li>
                    <li>Interest 2</li>
                    <li>Hobby 1</li>
                    <li>Hobby 2</li>
                  </ul>
                </div>
                <!-- Action Buttons -->
                <div class="actions">
                  <a href="/ghotok-bd/biodata" class="btn primary"
                    ><i class="fas fa-user-edit"></i> Update Bio-data</a
                  >
                </div>
              </div>
            </div>

            <!-- Update bio-data section -->
            <div id="updateBio-dataSection" style="display: none;">
              <div class="registerBiodataContainer">
                <h2>Update Bio-data</h2>
                <form
                  class="registerForm"
                  action=""
                  method="post"
                  enctype="multipart/form-data"
                >
                  <!-- Personal Information -->
                  <fieldset>
                    <legend>Personal Information</legend>
                    <label>Full Name</label>
                    <input type="text" name="full_name" required />

                    <label>Gender</label>
                    <select name="gender" required>
                      <option value="">-- Select --</option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Other</option>
                    </select>
                    <label>Marital Status</label>
                    <select name="maritalStatus" required>
                      <option value="">-- Select --</option>
                      <option>Married</option>
                      <option>Single</option>
                    </select>

                    <label>Date of Birth</label>
                    <input type="date" name="dob" required />

                    <label>Age</label>
                    <input type="number" name="age" min="18" required />

                    <label>Height</label>
                    <input type="text" name="height" placeholder="e.g. 5′ 6″" />

                    <label>Weight</label>
                    <input type="text" name="weight" placeholder="e.g. 60 KG" />

                    <label>Skin Color</label>
                    <select name="skin_color">
                      <option value="">-- Select --</option>
                      <option>Fair</option>
                      <option>Medium</option>
                      <option>Dark</option>
                    </select>
                  </fieldset>

                  <!-- Education & Profession -->
                  <fieldset>
                    <legend>Education & Profession</legend>
                    <label>Education</label>
                    <input type="text" name="education" />

                    <label>Profession</label>
                    <input type="text" name="profession" />

                    <label>Monthly Income</label>
                    <input type="text" name="income" />
                  </fieldset>

                  <!-- Family Information -->
                  <fieldset>
                    <legend>Family Information</legend>
                    <label>Father's Name</label>
                    <input type="text" name="father_name" />

                    <label>Father's Occupation</label>
                    <input type="text" name="father_occupation" />

                    <label>Mother's Name</label>
                    <input type="text" name="mother_name" />

                    <label>Mother's Occupation</label>
                    <input type="text" name="mother_occupation" />

                    <label>Siblings</label>
                    <input type="text" name="siblings" />
                  </fieldset>

                  <!-- Contact Information -->
                  <fieldset>
                    <legend>Contact Information</legend>
                    <label>Phone</label>
                    <input type="tel" name="phone" required />

                    <label>Email</label>
                    <input type="email" name="email" />

                    <label>Present Address</label>
                    <textarea name="present_address"></textarea>

                    <label>Permanent Address</label>
                    <textarea name="permanent_address"></textarea>

                    <label>District</label>
                    <select name="district" required>
                      <option value="">-- Select District --</option>
                      <option>Dhaka</option>
                      <option>Chattogram</option>
                      <option>Rajshahi</option>
                      <option>Khulna</option>
                      <option>Barishal</option>
                      <option>Sylhet</option>
                      <option>Rangpur</option>
                      <option>Mymensingh</option>
                    </select>
                  </fieldset>

                  <!-- Partner Preferences -->
                  <fieldset>
                    <legend>Partner Preferences</legend>
                    <label>Preferred Age</label>
                    <input
                      type="text"
                      name="partner_age"
                      placeholder="e.g. 22 - 30"
                    />

                    <label>Preferred Height</label>
                    <input type="text" name="partner_height" />

                    <label>Preferred Education</label>
                    <input type="text" name="partner_education" />

                    <label>Preferred Profession</label>
                    <input type="text" name="partner_profession" />
                  </fieldset>

                  <!-- Profile Image -->
                  <fieldset>
                    <legend>Profile Picture</legend>
                    <input
                      type="file"
                      name="profile_image"
                      accept="image/*"
                      required
                    />
                  </fieldset>

                  <!-- Submit -->
                  <button type="submit">Register</button>
                </form>
              </div>
            </div>

            <!-- Interested section -->
            <div id="interestedSection" style="display: none;">
              <div class="filter"><h2>Interested</h2></div>
              <div class="mainContent">
                <!-- Favorite content -->

                <!-- match profile -->
                <div class="sideBarProfile">
                  <!-- Favorite Icon -->
                  <span class="favoriteIcon" style="font-size: 22px"
                    ><i class="fas fa-handshake"></i
                  ></span>

                  <span onclick="handleShow('details')">
                    <img
                      src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8d29tZW58ZW58MHx8MHx8fDA%3D"
                      alt="profile image"
                    />
                  </span>

                  <div class="description">
                    <table>
                      <tr>
                        <td>Name:</td>
                        <td>Maria</td>
                      </tr>
                      <tr>
                        <td>AGE:</td>
                        <td>24 years</td>
                      </tr>
                      <tr>
                        <td>HEIGHT:</td>
                        <td>5′ 1″</td>
                      </tr>
                      <tr>
                        <td>PROFESSION:</td>
                        <td>Teacher</td>
                      </tr>
                      <tr>
                        <td>SKIN COLOR:</td>
                        <td>Bright</td>
                      </tr>
                      <tr>
                        <td>WEIGHT:</td>
                        <td>50 KG</td>
                      </tr>
                    </table>
                  </div>

                  <div class="actionButtons">
                    <button>Reject</button>
                    <button>Accept</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Favorite Section -->
            <div id="favoriteSection" style="display: none;">
              <div class="filter"><h2>Favorites</h2></div>
              <div class="mainContent">
                <!-- Favorite content -->
                <!-- match profile -->
                <div class="sideBarProfile">
                  <!-- Favorite Icon -->
                  <span class="favoriteIcon"><i class="fas fa-heart"></i></span>

                  <span onclick="handleShow('details')">
                    <img
                      src="https://images.unsplash.com/photo-1588516903720-8ceb67f9ef84?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d29tZW58ZW58MHx8MHx8fDA%3D"
                      alt="profile image"
                    />
                  </span>

                  <div class="description">
                    <table>
                      <tr>
                        <td>Name:</td>
                        <td>John Doe</td>
                      </tr>
                      <tr>
                        <td>AGE:</td>
                        <td>24 years</td>
                      </tr>
                      <tr>
                        <td>HEIGHT:</td>
                        <td>5′ 1″</td>
                      </tr>
                      <tr>
                        <td>PROFESSION:</td>
                        <td>Teacher</td>
                      </tr>
                      <tr>
                        <td>SKIN COLOR:</td>
                        <td>Bright</td>
                      </tr>
                      <tr>
                        <td>WEIGHT:</td>
                        <td>50 KG</td>
                      </tr>
                    </table>
                  </div>

                  <div class="actionButtons">
                    <button>Unfavorite</button>
                    <button>Interested</button>
                  </div>
                </div>
                <!-- match profile -->
                <div class="sideBarProfile">
                  <!-- Favorite Icon -->
                  <span class="favoriteIcon"><i class="fas fa-heart"></i></span>

                  <span onclick="handleShow('details')">
                    <img
                      src="https://plus.unsplash.com/premium_photo-1681493353999-a3eea8b95e1d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8d29tZW58ZW58MHx8MHx8fDA%3D"
                      alt="profile image"
                    />
                  </span>

                  <div class="description">
                    <table>
                      <tr>
                        <td>Name:</td>
                        <td>John Doe</td>
                      </tr>
                      <tr>
                        <td>AGE:</td>
                        <td>24 years</td>
                      </tr>
                      <tr>
                        <td>HEIGHT:</td>
                        <td>5′ 1″</td>
                      </tr>
                      <tr>
                        <td>PROFESSION:</td>
                        <td>Teacher</td>
                      </tr>
                      <tr>
                        <td>SKIN COLOR:</td>
                        <td>Bright</td>
                      </tr>
                      <tr>
                        <td>WEIGHT:</td>
                        <td>50 KG</td>
                      </tr>
                    </table>
                  </div>

                  <div class="actionButtons">
                    <button>Unfavorite</button>
                    <button>Interested</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- View as section -->
            <div id="viewAsSection" style="display: none;">
              <div class="filter"><h2>View As</h2></div>
              <div class="viewAs-container">
                <div class="viewAs-card">
                  <h2>View Profile As</h2>
                  <p class="subtitle">See how your profile looks to others</p>

                  <!-- Tabs -->
                  <div class="viewAs-tabs">
                    <button class="active">As Member</button>
                  </div>

                  <!-- Profile Preview -->
                  <div class="profile-preview">
                    <div class="profile-photo">
                      <img
                        src="https://plus.unsplash.com/premium_photo-1672239496290-5061cfee7ebb?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWVufGVufDB8fDB8fHww"
                        alt="Profile Photo"
                      />
                    </div>
                    <div class="profile-info">
                      <h3>
                        John Doe
                        <span
                          class="status"
                          style="color: var(---secondaryColor)"
                          ><i class="fa-regular fa-circle-xmark"></i>
                          Inactive</span
                        >
                      </h3>

                      <p><strong>Age:</strong> 26 years</p>
                      <p><strong>Height:</strong> 5′ 8″</p>
                      <p><strong>Profession:</strong> Software Engineer</p>
                      <p><strong>Location:</strong> Dhaka, Bangladesh</p>
                      <p>
                        <strong>About:</strong> I am a simple person looking for
                        a suitable life partner. I value honesty and family.
                      </p>
                    </div>
                  </div>

                  <!-- Action -->
                  <div class="viewAs-action">
                    <a href="/ghotok-bd/biodata"
                      ><button class="edit-btn">
                        <i class="fas fa-edit"></i> Edit Profile
                      </button></a
                    >
                  </div>
                </div>
              </div>
            </div>

            <!-- Rules and regulation section -->
            <div id="rulesAndRegulationSection" style="display: none;">
              <div class="rules-container">
                <h1>Rules & Regulations</h1>
                <div class="rules-content">
                  <ol>
                    <li>
                      All members must provide accurate personal details during
                      registration.
                    </li>
                    <li>
                      Respectful communication is mandatory across the platform.
                    </li>
                    <li>
                      Sharing false or offensive content is strictly prohibited.
                    </li>
                    <li>Profile images must be genuine and decent.</li>
                    <li>
                      The administration reserves the right to remove any user
                      violating the rules.
                    </li>
                  </ol>
                </div>
              </div>
            </div>

            <!-- Buy connects section -->
            <div id="buyConnectsSection" style="display: none;">
              <section class="buy-connects">
                <h2 class="section-title">Buy Connects</h2>
                <p class="section-sub">
                  Choose a plan and unlock opportunities to connect with more
                  profiles.
                </p>

                <div class="plans">
                  <!-- Plan 1 -->
                  <div class="plan-card">
                    <h3>Basic</h3>
                    <p class="price">৳300</p>
                    <ul>
                      <li><i class="fas fa-check-circle"></i> 10 Connects</li>
                      <li>
                        <i class="fas fa-check-circle"></i> Valid for 1 Month
                      </li>
                      <li>
                        <i class="fas fa-check-circle"></i> Standard Support
                      </li>
                    </ul>
                    <button class="plan-btn">Buy Now</button>
                  </div>

                  <!-- Plan 2 (Highlighted with Badge) -->
                  <div class="plan-card featured">
                    <span class="badge">Most Popular</span>
                    <h3>Standard</h3>
                    <p class="price">৳700</p>
                    <ul>
                      <li><i class="fas fa-check-circle"></i> 30 Connects</li>
                      <li>
                        <i class="fas fa-check-circle"></i> Valid for 2 Months
                      </li>
                      <li>
                        <i class="fas fa-check-circle"></i> Priority Support
                      </li>
                    </ul>
                    <button class="plan-btn">Buy Now</button>
                  </div>

                  <!-- Plan 3 -->
                  <div class="plan-card">
                    <h3>Premium</h3>
                    <p class="price">৳1200</p>
                    <ul>
                      <li><i class="fas fa-check-circle"></i> 60 Connects</li>
                      <li>
                        <i class="fas fa-check-circle"></i> Valid for 3 Months
                      </li>
                      <li>
                        <i class="fas fa-check-circle"></i> Premium Support
                      </li>
                    </ul>
                    <button class="plan-btn">Buy Now</button>
                  </div>
                </div>
              </section>
            </div>

            <!-- notification section -->
            <div id="notificationSection" style="display: none;">
              <div class="notification-container">
                <h2>Notifications</h2>

                <div class="notification-card">
                  <i class="fas fa-heart"></i>
                  <div class="notification-text">
                    <p>
                      <strong>Rahim Uddin</strong> has shown interest in your
                      profile.
                    </p>
                    <span class="time">2 hours ago</span>
                  </div>
                </div>

                <div class="notification-card">
                  <i class="fas fa-star"></i>
                  <div class="notification-text">
                    <p>
                      <strong>Ayesha Khatun</strong> added you to favorites.
                    </p>
                    <span class="time">1 day ago</span>
                  </div>
                </div>

                <div class="notification-card">
                  <i class="fas fa-comment"></i>
                  <div class="notification-text">
                    <p><strong>Karim Hasan</strong> sent you a message.</p>
                    <span class="time">3 days ago</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Details section -->
            <div id="detailsSection" style="display: none;">
              <div class="person-details">
                <!-- Profile Header -->
                <div class="profile-header">
                  <img
                    src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?w=200&h=200&fit=crop"
                    alt="Profile"
                  />
                  <div class="profile-basic">
                    <h2>John Flekh <span class="id">ID: XHF476GF34R</span></h2>
                    <p>
                      <i class="fas fa-circle" style="color: red"></i> Inactive
                    </p>
                    <p>
                      <i class="fas fa-map-marker-alt"></i> Jashore, Khulna,
                      Bangladesh
                    </p>
                  </div>
                </div>

                <!-- Quick Intro -->
                <div class="info-section">
                  <h3><i class="fas fa-id-card"></i> Overview</h3>
                  <p>Name: John Flekh, Age: 26 Years</p>
                  <p>Education: Bachelor | Profession: Businessman</p>
                  <p>Height: 5ft 8in | Skin Color: Bright</p>
                  <p><strong>A Few Lines About John:</strong> .............</p>
                </div>

                <!-- Basic Details -->
                <div class="info-section">
                  <h3><i class="fas fa-user"></i> Basic Details</h3>
                  <ul>
                    <li><strong>Profile For:</strong> Self</li>
                    <li><strong>Full Name:</strong> John Flekh</li>
                    <li><strong>Age:</strong> 24 Years</li>
                    <li><strong>Height:</strong> 5ft 8in</li>
                    <li><strong>Gender:</strong> Male</li>
                    <li><strong>Marital Status:</strong> Unmarried</li>
                    <li><strong>Mother Tongue:</strong> English</li>
                    <li><strong>Blood Group:</strong> B+</li>
                    <li><strong>Religion:</strong> Islam</li>
                  </ul>
                </div>

                <!-- Contact Details -->
                <div class="info-section">
                  <h3><i class="fas fa-phone"></i> Contact Details</h3>
                  <ul>
                    <li><strong>Phone:</strong> +8801300000000</li>
                    <li><strong>Email:</strong> xzy@contact.com</li>
                    <li>
                      <strong>Address:</strong> 50 Washington Square S, New
                      York, NY 10012, USA
                    </li>
                  </ul>
                </div>

                <!-- Professional Information -->
                <div class="info-section">
                  <h3>
                    <i class="fas fa-briefcase"></i> Professional Information
                  </h3>
                  <ul>
                    <li><strong>Education:</strong> Bachelor</li>
                    <li><strong>Profession:</strong> Teacher</li>
                    <li><strong>Employment:</strong> Private Sector</li>
                    <li><strong>Annual Income:</strong> 200000/=</li>
                  </ul>
                </div>

                <!-- Lifestyle -->
                <div class="info-section">
                  <h3><i class="fas fa-leaf"></i> Lifestyle</h3>
                  <ul>
                    <li><strong>Eating Habits:</strong> —</li>
                    <li><strong>Drinking Habits:</strong> —</li>
                    <li><strong>Smoking Habits:</strong> —</li>
                  </ul>
                </div>

                <!-- Location -->
                <div class="info-section">
                  <h3><i class="fas fa-map"></i> Location</h3>
                  <ul>
                    <li><strong>City:</strong> Jashore</li>
                    <li><strong>State:</strong> Khulna</li>
                    <li><strong>Country:</strong> Bangladesh</li>
                    <li><strong>Nationality:</strong> Bangladeshi</li>
                  </ul>
                </div>

                <!-- Family Details -->
                <div class="info-section">
                  <h3><i class="fas fa-users"></i> Family Details</h3>
                  <ul>
                    <li><strong>No. of Brothers:</strong> —</li>
                    <li><strong>No. of Sisters:</strong> —</li>
                    <li><strong>Father’s Profession:</strong> —</li>
                    <li><strong>Mother’s Profession:</strong> —</li>
                    <li><strong>Family Origin:</strong> —</li>
                  </ul>
                </div>

                <!-- Interests & Hobbies -->
                <div class="info-section">
                  <h3><i class="fas fa-heart"></i> Interests & Hobbies</h3>
                  <ul>
                    <li>Interest 1</li>
                    <li>Interest 2</li>
                    <li>Hobby 1</li>
                    <li>Hobby 2</li>
                  </ul>
                </div>

                <!-- Action Buttons -->
                <div class="actions">
                  <button class="btn primary">
                    <i class="fas fa-heart"></i> Send Interest
                  </button>
                  <button class="btn secondary">
                    <i class="fas fa-star"></i> Add to Favorites
                  </button>
                  <button class="btn info">
                    <i class="fas fa-phone"></i> Contact
                  </button>
                  <button class="btn danger">
                    <i class="fas fa-exclamation-triangle"></i> Report
                  </button>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <!-- Advertise Container 02 -->
      <?php include_once("./components/advertisement2.php")?>
    </div>
    <script src="./script.js"></script>
    <script src="./script2.js"></script>
  </body>
</html>
