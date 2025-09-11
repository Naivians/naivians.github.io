function openLightbox(src) {
  const lightbox = document.getElementById("lightbox");
  const img = document.getElementById("lightbox-img");
  img.src = src.replace(/300x200/, "1200x800"); // load bigger version (if you have)
  lightbox.classList.remove("hidden");
}

function closeLightbox() {
  const lightbox = document.getElementById("lightbox");
  lightbox.classList.add("hidden");
}

// Mobile menu toggle
document.getElementById("menu-toggle").addEventListener("click", function () {
  const menu = document.getElementById("mobile-menu");
  menu.classList.toggle("hidden");
  menu.classList.toggle("flex");
});

// Scroll animations
function animateOnScroll() {
  const elements = document.querySelectorAll("[data-animate]");

  elements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top;
    const elementBottom = element.getBoundingClientRect().bottom;
    const isVisible = elementTop < window.innerHeight && elementBottom >= 0;

    if (isVisible) {
      element.classList.add("animated");
    }
  });
}

// Run on initial load
animateOnScroll();

// Run on scroll
window.addEventListener("scroll", animateOnScroll);

// Update copyright year
document.getElementById("year").textContent = new Date().getFullYear();

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href");
    const targetElement = document.querySelector(targetId);

    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop - 100,
        behavior: "smooth",
      });
    }
  });
});
