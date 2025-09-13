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
