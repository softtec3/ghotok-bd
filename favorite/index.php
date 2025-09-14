<!DOCTYPE html>
<html lang="en">
  <?php include_once("../components/head.php")?>
  <link rel="stylesheet" href="../style.css" />
  <body>
    <div id="container">
      <!-- Advertise Container 01 -->
      <?php include_once("../components/advertisement1.php")?>
      <!-- Main -->
      <div id="main">
        <!-- Top Bar -->
        <?php include_once("../components/topbar.php")?>
        <!-- Top Main Bar -->
        <?php include_once("../components/topbarmain.php")?>
        <!-- Main part -->
        <div id="mainPart">
          <!-- Side bar -->
          <?php include_once("../components/sidebar.php")?>
          <!-- Main Content - changeable -->
          <div id="mainContent">
            <!-- <?php include_once("../components/filter.php")?> -->
             <div class="filter"><h2>Favorites</h2></div>
            <div class="mainContent">
              <!-- Favorite content -->
              <!-- match profile -->
              <div class="sideBarProfile">
                <!-- Favorite Icon -->
                <span class="favoriteIcon"><i class="fas fa-heart"></i></span>

                <a href="/matrimony/details?id=1">
                  <img
                    src="https://images.unsplash.com/photo-1588516903720-8ceb67f9ef84?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d29tZW58ZW58MHx8MHx8fDA%3D"
                    alt="profile image"
                  />
                </a>

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

                <a href="/matrimony/details?id=1">
                  <img
                    src="https://plus.unsplash.com/premium_photo-1681493353999-a3eea8b95e1d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8d29tZW58ZW58MHx8MHx8fDA%3D"
                    alt="profile image"
                  />
                </a>

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
        </div>
      </div>
      <!-- Advertise Container 02 -->
      <?php include_once("../components/advertisement2.php")?>
    </div>
    <script src="./script.js"></script>
  </body>
</html>
