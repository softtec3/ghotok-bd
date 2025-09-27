<?php
  
?>

<div id="sideBar" class="sidebarCloseAnimation">
  <div class="connects">Connects: <span id="connect"><?php echo $logged_user_details["connects"]?></span></div>
  <div class="sideBarProfile">
    <img
      src="<?php 
      $url ="placeholder.jpg";
        if($logged_user_bio_details["profile_picture"]){
          $url = "./uploads/". $logged_user_bio_details['profile_picture'];
        };
          echo $url;
        ?>"
      alt="profile image"
    />
    <span class="<?php 
      if($logged_user_bio_details['status'] == "inactive"){
        echo "status";
      }else{
        echo "statusGreen";
      }
    ?>"
      ><i class="fa-regular <?php 
      if($logged_user_bio_details['status'] == "inactive"){
        echo "fa-circle-xmark";
      }else{
        echo "fa-circle-check";
      }
    ?>"></i> <?php echo $logged_user_bio_details['status'];?></span
    >

    <p style="<?php
      if(!empty($logged_user_bio_details['full_name'])){
        echo "display:none";
      };
    ?>">Please Update bio-data</p>
    <div class="description" style="<?php
      if(empty($logged_user_bio_details['full_name'])){
        echo "display:none";
      };
    ?>">
      <table>
        <tr>
          <td>ID:</td>
          <td style="color: var(---secondaryColor); font-weight: bold">
            <?php echo $logged_user_bio_details['id'];?>
          </td>
        </tr>
        <tr>
          <td>Name:</td>
          <td><?php echo $logged_user_bio_details['full_name'];?></td>
        </tr>
        <tr>
          <td>AGE:</td>
          <td><?php echo $logged_user_bio_details['age'];?> years</td>
        </tr>
        <tr>
          <td>HEIGHT:</td>
          <td><?php echo $logged_user_bio_details['height'];?></td>
        </tr>
      </table>
    </div>
    <div class="actionButtons">
      <button onclick="handleShow('updateBio')" class="editButton" style="background-color: black;">Edit</button>
      <button id="publishBtn">Publish</button>
    </div>
  </div>
  <div class="sideBarLinks">
    <a href="./home.php"><i class="fas fa-home"></i> Home</a>
    <button onclick="handleShow('profile')"><i class="fas fa-id-card"></i> Profile</button>
    <button onclick="handleShow('updateBio')"><i class="fas fa-file-signature"></i> Update Bio-data</button>
    <button onclick="handleShow('interested')"><i class="fas fa-heart"></i> Interested</button>
    <button onclick="handleShow('favorite')"><i class="fas fa-star"></i> Favorite</button>
    <button onclick="handleShow('viewAs')"><i class="fas fa-eye"></i> View As</button>
    <button onclick="handleShow('rules')"><i class="fas fa-gavel"></i> Rules & Regulations</button>
    <button onclick="handleShow('buyConnects')"><i class="fas fa-coins"></i> Buy Connects</button>
  </div>
  <!-- Publish Modal -->
  <div id="publishModal" class="modal">
    <div class="modal-content">
      <span class="close"><i class="fas fa-xmark"></i></span>
      <h2>Publish Your Profile</h2>
      <p class="intro-text">
        To make your profile visible on our platform, a small one-time
        publishing charge applies.
      </p>

      <div class="charges-box">
        <h3>Publishing Charges</h3>
        <ul>
          <li><i class="fas fa-check-circle"></i> Standard Publish: <?php if($role == "ghotok"){
            echo "1200";
            }else{
              echo "500";
            }?> ৳</li>
          <!-- <li><i class="fas fa-check-circle"></i> Featured Publish (highlighted profile): 1000৳</li> -->
        </ul>
      </div>

      <p class="note">
        Once you publish, your biodata will be visible to all members. You can
        later upgrade to <strong>Featured Publish</strong> for better
        visibility.
      </p>

      <a href="./home.php" id="payBtn">Proceed to Payment</a>
    </div>
  </div>
  <div id="sidebarClose">
    <i class="fas fa-arrow-left"></i>
  </div>
</div>

<script>
  // Sidebar close and open
  const sideBar = document.getElementById("sideBar");
  const sideBarCloseBtn = document.getElementById("sidebarClose");

  sideBarCloseBtn.addEventListener("click", () => {
    sideBar.classList.add("sidebarCloseAnimation");
  });
  // Publish modal Script
  const modal = document.getElementById("publishModal");
  const btn = document.getElementById("publishBtn");
  const closeBtn = document.querySelector(".close");
  const payBtn = document.getElementById("payBtn");

  // Open Modal
  btn.onclick = () => {
    modal.style.display = "flex";
  };

  // Close Modal
  const closeModal = () => {
    modal.style.display = "none";
  };

  closeBtn.onclick = closeModal;
  window.onclick = (e) => {
    if (e.target == modal) closeModal();
  };
</script>
