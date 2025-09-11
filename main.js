// $(document).ready(function () {
  
// });

function openModal(project_id, folderName) {
  fetch(`modals/projects_modal.php?folder=${encodeURIComponent(folderName)}&project_id=${encodeURIComponent(project_id)}`)
    .then((response) => {
      if (!response.ok) throw new Error("Failed to load modal");
      return response.text();
    })
    .then((html) => {
      // Inject modal HTML
      document.getElementById("modal-container").innerHTML = html;

      // Now select by ID after injection
      const modal = document.getElementById(project_id);
      if (modal) modal.classList.remove("hidden");

      // Init slick after modal is in DOM
      $(".slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    })
    .catch((error) => console.error(error));
}

function closeModal(id) {
  const modal = document.getElementById(id);
  if (modal) modal.remove(); // remove modal from DOM
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
