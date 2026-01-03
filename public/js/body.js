const headervishwaTextBoxes = document.querySelectorAll(".headervishwa-text-glass");
const headervishwaImages = document.querySelectorAll(".headervishwa-image-glass img");

const headervishwaObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    }
  });
}, {
  threshold: 0.25,
  rootMargin: "0px 0px -120px 0px"
});

headervishwaTextBoxes.forEach(el => headervishwaObserver.observe(el));
headervishwaImages.forEach(img => headervishwaObserver.observe(img));