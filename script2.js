const sideBarOpenBtn = document.getElementById("sidebarOpen");
sideBarOpenBtn.addEventListener("click", () => {
  sideBar.classList.replace("sidebarCloseAnimation", "sidebarOpenAnimation");
});
