<?php
?>
<div>
  <div class="filter">
    <h2>Home</h2>
    <div class="mobileFilter">
      <span id="filterIcon">Filter<i class="fa-solid fa-filter"></i></span>
      <div id="mobileFilter" class="mobileFilterContainer closeFilterSidebar">
        <h2>Filter</h2>
        <form action="" method="get">
          <div class="mobileSelectSelects">
            <select name="lookingFor" class="lookingFor">
              <option style="display: none" value="">Looking For</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
            <select name="age" id="age">
              <option style="display: none" value="">Age</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
            </select>
            <select name="location">
              <option style="display: none" value="">Location</option>
              <?php
                if(count($districts)>0){
                  foreach($districts as $district){
                    echo "<option value='$district[0]'>$district[0]</option>";
                  }
                }
              ?>
            </select>
            <select name="profession" id="profession">
              <option style="display: none" value="">Profession</option>
              <?php
                if(count($professions)>0){
                  foreach($professions as $profession){
                    echo "<option value='$profession[0]'>$profession[0]</option>";
                  }
                }
              ?>
            </select>
            <select name="height" id="height">
              <option style="display: none" value="">Height</option>
              <?php
                if(count($heights)>0){
                  foreach($heights as $height){
                    echo "<option value='$height[0]'>$height[0] ``</option>";
                  }
                }
                ?>
            </select>
            <!-- <select name="religion" id="religion">
              <option style="display: none" value="">Religion</option>
              <option value="Islam">Islam</option>
              <option value="Hindu">Hindu</option>
              <option value="Christian">Christian</option>
              <option value="Atheist">Atheist</option>
            </select> -->
            <button class="filterBtn" type="submit" value="filter" name="filter">Filter</button>
            <a href="./home.php" class="filterBtn">Clear</a>
          </div>
        </form>
        <div id="sidebarClose2">
          <i class="fas fa-arrow-left"></i>
        </div>
      </div>
    </div>


    <!-- Desktop -->
    <form action="" method="get" style="margin-top: 0;" class="selects">
      <select name="lookingFor" class="lookingFor">
        <option style="display: none" value="">Looking For</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <select name="age" id="age2">
        <option style="display: none" value="">Age</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
      </select>
      <select name="location">
        <option style="display: none" value="">Location</option>
        <?php
          if(count($districts)>0){
            foreach($districts as $district){
              echo "<option value='$district[0]'>$district[0]</option>";
            }
          }
        ?>
      </select>
      <select name="profession" id="profession">
        <option style="display: none" value="">Profession</option>
       <?php
                if(count($professions)>0){
                  foreach($professions as $profession){
                    echo "<option value='$profession[0]'>$profession[0]</option>";
                  }
                }
       ?>
      </select>
      <select name="height" id="height">
        <option style="display: none" value="">Height</option>
       <?php
                if(count($heights)>0){
                  foreach($heights as $height){
                    echo "<option value='$height[0]'>$height[0] ``</option>";
                  }
                }
       ?>
      </select>
      <!-- <select name="religion" id="religion">
        <option style="display: none" value="">Religion</option>
        <option value="Islam">Islam</option>
        <option value="Hindu">Hindu</option>
        <option value="Christian">Christian</option>
        <option value="Atheist">Atheist</option>
      </select> -->
      <button class="filterBtn" type="submit" value="filter" name="filter">Filter</button>
      <a href="./home.php" class="filterBtn">Clear</a>
    </form>
  </div>
</div>
<script>
  // Filter close
  const filterOpenBtn = document.getElementById("filterIcon");
  const filterCloseBtn = document.getElementById("sidebarClose2");
  const filterBar = document.getElementById("mobileFilter");
  filterOpenBtn.addEventListener("click", () => {
    filterBar.classList.remove("closeFilterSidebar");
  });
  filterCloseBtn.addEventListener("click", () => {
    filterBar.classList.add("closeFilterSidebar");
  });
</script>
