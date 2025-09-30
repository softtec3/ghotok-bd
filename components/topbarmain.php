<?php
        include_once("./php/user_logout.php")
?>
<div id="topMainBar">
                <div class="tmbLeft">
                    <a href="./home.php"><img src="./ghotok-logo.png" alt="logo"></a>
                </div>
        <div id="time" class="tmbMiddle">
                  Time: 00:00 | 12-12-1912
           </div>
           <div class="topBarConnects">
            Connects: <span id="connects"><?php echo $logged_user_details["connects"]?></span>
           </div>
     <div class="tmbRight"><div style="color: white;"><span onclick="handleShow('notification')"><i class="fa-regular fa-bell"></i></span></div>
        <form action="" method="post">
                <button name="logout_user" value="logout_user" type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
</div>
<nav id="mobileNav">

<a href="./home.php"><i class="fas fa-home"></i> Home</a>
<button onclick="handleShow('profile')"><i class="fas fa-id-card"></i> Profile</button>
<!-- menu link class -->
<button id="sidebarOpen"><span><i class="fas fa-bars"></i></span>Menu</button>
<button onclick="handleShow('interested')"><i class="fas fa-heart"></i> Interested</button>
<button onclick="handleShow('favorite')"><i class="fas fa-star"></i> Favorite</button>
</nav>
</div>