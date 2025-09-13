<!DOCTYPE html>
<html lang="en">
<?php include_once("./components/head.php")?>
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
                    <div class="filter">
                        <h2>Home</h2>
                        <div class="selects">
                            <select name="age" id="age">
                                <option style="display: none;" value="">Age</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                            </select>
                            <select name="location" id="age">
                                <option style="display: none;" value="">Location</option>
                                <option value="Rangpur">Rangpur</option>
                                <option value="Jashore">Jashore</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Naogaon">Naogaon</option>
                                <option value="Noakhali">Noakhali</option>
                                <option value="Bogura">Bogura</option>
                            </select>
                            <select name="profession" id="profession">
                                <option style="display: none;" value="">Profession</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Engineer">Engineer</option>
                                <option value="Businessman">Businessman</option>
                                <option value="Shopkeeper">Shopkepper</option>
                            </select>
                            <select name="height" id="height">
                                <option style="display: none;" value="">Height</option>
                                <option value="5.5">5.5 FT</option>
                                <option value="5.6">5.6 FT</option>
                                <option value="5.7">5.7 FT</option>
                                <option value="5.8">5.8 FT</option>
                                <option value="5.9">5.9 FT</option>
                                <option value="6">6 FT</option>
                            </select>
                            <select name="religion" id="religion">
                                <option style="display: none;" value="">Religion</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Christian">Christian</option>
                                <option value="Atheist">Atheist</option>
                            </select>
                            <span style="position: relative;"><input type="text" placeholder="Search here.."><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </div>
                    <div class="mainContent">
                    <!-- Home content -->
                     <!-- match profile -->
                     <div class="sideBarProfile">
                        <img src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile image">
                        <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                        <div class="description">
                            <table>
                                <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
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
                            <button>Favorite</button>
                            <button>Interested</button>
                        </div>
                    </div>
                     <!-- match profile -->
                     <div class="sideBarProfile">
                        <img src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile image">
                        <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                        <div class="description">
                            <table>
                                <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
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
                            <button>Favorite</button>
                            <button>Interested</button>
                        </div>
                    </div>
                     <!-- match profile -->
                     <div class="sideBarProfile">
                        <img src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile image">
                        <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                        <div class="description">
                            <table>
                                <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
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
                            <button>Favorite</button>
                            <button>Interested</button>
                        </div>
                    </div>
                     <!-- match profile -->
                     <div class="sideBarProfile">
                        <img src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile image">
                        <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                        <div class="description">
                            <table>
                                <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
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
                            <button>Favorite</button>
                            <button>Interested</button>
                        </div>
                    </div>
                     <!-- match profile -->
                     <div class="sideBarProfile">
                        <img src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile image">
                        <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                        <div class="description">
                            <table>
                                <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
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
                            <button>Favorite</button>
                            <button>Interested</button>
                        </div>
                    </div>
                     <!-- match profile -->
                     <div class="sideBarProfile">
                        <img src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile image">
                        <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                        <div class="description">
                            <table>
                                <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
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
                            <button>Favorite</button>
                            <button>Interested</button>
                        </div>
                    </div>
                     <!-- match profile -->
                     <div class="sideBarProfile">
                        <img src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile image">
                        <!-- <span class="status"><i class="fa-regular fa-circle-xmark"></i> Inactive</span> -->
                        <div class="description">
                            <table>
                                <!-- <tr>
                                    <td>ID:</td>
                                    <td style="color: var(---secondaryColor);font-weight:bold;">XRFKD87DG</td>
                                </tr> -->
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
                            <button>Favorite</button>
                            <button>Interested</button>
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
</body>
</html>
