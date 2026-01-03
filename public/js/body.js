const textBoxes = document.querySelectorAll(".text-glass");
const images = document.querySelectorAll(".image-glass img");

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    }
  });
}, {
  threshold: 0.25,
  rootMargin: "0px 0px -120px 0px"
});

textBoxes.forEach(el => observer.observe(el));
images.forEach(img => observer.observe(img));

const carousel = document.querySelector(".logo-carousel");

carousel.addEventListener("mouseenter", () => {
  carousel.style.animationPlayState = "paused";
});

carousel.addEventListener("mouseleave", () => {
  carousel.style.animationPlayState = "running";
});
