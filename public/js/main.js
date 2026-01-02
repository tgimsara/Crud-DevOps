const highlight = document.querySelector(".glass-highlight");
const items = document.querySelectorAll(".nav-links li");
const navbar = document.querySelector(".navbar");

items.forEach(item => {
  item.addEventListener("mouseenter", () => {
    const itemRect = item.getBoundingClientRect();
    const navRect = navbar.getBoundingClientRect();

    highlight.style.left =
      itemRect.left - navRect.left + "px";

    highlight.style.width =
      itemRect.width + "px";

    highlight.style.opacity = "1";
    highlight.style.transform =
      "translateY(-50%) scale(1)";
  });
});

navbar.addEventListener("mouseleave", () => {
  highlight.style.opacity = "0";
  highlight.style.transform =
    "translateY(-50%) scale(0.96)";
});

const burger = document.querySelector(".burger");
const mobileMenu = document.querySelector(".mobile-menu");

burger.addEventListener("click", () => {
  burger.classList.toggle("active");
  mobileMenu.classList.toggle("open");
});
const footer = document.querySelector(".footer");

window.addEventListener("scroll", () => {
  if(window.scrollY > 50){
    footer.style.boxShadow = "inset 0 1px 2px rgba(255,255,255,0.4), 0 -15px 40px rgba(0,0,0,0.45)";
  } else {
    footer.style.boxShadow = "inset 0 1px 2px rgba(255,255,255,0.4), 0 -10px 30px rgba(0,0,0,0.35)";
  }
});      