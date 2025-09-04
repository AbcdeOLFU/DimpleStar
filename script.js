let index = 0;
const images = document.querySelector(".carousel-images");
const slides = document.querySelectorAll(".carousel-images img");
const dotsContainer = document.querySelector(".carousel-dots");

// Create dots for carousel
slides.forEach((_, i) => {
  const dot = document.createElement("span");
  dot.addEventListener("click", () => showSlide(i));
  dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll(".carousel-dots span");

function showSlide(i) {
  index = i;
  if (index >= slides.length) index = 0;
  if (index < 0) index = slides.length - 1;

  images.style.transform = `translateX(${-index * 100}%)`;
  dots.forEach((d) => d.classList.remove("active"));
  dots[index].classList.add("active");
}

// Auto slide
function autoSlide() {
  showSlide(index + 1);
}
setInterval(autoSlide, 4000);

// Start with first slide
showSlide(0);

// Swipe support for mobile
let startX = 0;
images.addEventListener("touchstart", (e) => (startX = e.touches[0].clientX));
images.addEventListener("touchend", (e) => {
  let endX = e.changedTouches[0].clientX;
  if (startX - endX > 50) showSlide(index + 1);
  if (endX - startX > 50) showSlide(index - 1);
});
