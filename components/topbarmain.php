<div id="topMainBar">
                <div class="tmbLeft">
                    <a href="./home.php"><img src="./ghotok-logo.png" alt="logo"></a>
                </div>
        <div id="time" class="tmbMiddle">
                   00:00 PM/AM | 12-12-1912
           </div>
           <div class="topBarConnects">
            Connects: <span id="connects">25</span>
           </div>
     <div class="tmbRight"><div style="color: white;"><span onclick="handleShow('notification')"><i class="fa-regular fa-bell"></i></span></div>
 <span><i class="fa-solid fa-right-from-bracket"></i></span>
</div>
<nav id="mobileNav">

        <button onclick="handleShow('home')"><i class="fas fa-home"></i> Home</button>
        <button onclick="handleShow('profile')"><i class="fas fa-id-card"></i> Profile</button>
        
        <button id="sidebarOpen" class="menuLink"><span><i class="fas fa-bars"></i></span>Menu</button>
        <button onclick="handleShow('interested')"><i class="fas fa-heart"></i> Interested</button>
        <button onclick="handleShow('favorite')"><i class="fas fa-star"></i> Favorite</button>
</nav>
</div>

<script src="../script2.js"></script>