const toggleBtn = document.getElementById("region-toggle");
const regionList = document.getElementById("region-list");
const currentRegion = document.getElementById("current-region");

toggleBtn.addEventListener("click", () => {
  regionList.style.display =
    regionList.style.display === "block" ? "none" : "block";
});

regionList.querySelectorAll("li").forEach(item => {
  item.addEventListener("click", () => {
    currentRegion.textContent = item.dataset.region;
    regionList.style.display = "none";
  });
});

document.addEventListener("click", e => {
  if (!e.target.closest(".region-container")) {
    regionList.style.display = "none";
  }
});
