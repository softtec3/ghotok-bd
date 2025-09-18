<div>
    <div class="filter">
    <h2>Home</h2>
    <div  class="mobileFilter">
        <span id="filterIcon"><i class="fa-solid fa-filter"></i></span>
        <div id="mobileFilter" class="mobileFilterContainer closeFilterSidebar">
            <h2>Filter</h2>
            <div>
                <div class="mobileSelectSelects">
                            <select name="lookingFor" class="lookingFor">
                                <option style="display: none;" value="">Looking For</option>
                                <option value="men">Men</option>
                                <option value="women">Women</option>
                            </select>
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
                        </div>
            </div>
            <div id="sidebarClose2">
        <i class="fas fa-arrow-left"></i>
        </div>
        </div>
    </div>
    <div class="selects">
                         <select name="lookingFor" class="lookingFor">
                                <option style="display: none;" value="">Looking For</option>
                                <option value="men">Men</option>
                                <option value="women">Women</option>
                            </select>
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
    </div>
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
filterCloseBtn.addEventListener("click",()=>{
    filterBar.classList.add("closeFilterSidebar");
})
</script>