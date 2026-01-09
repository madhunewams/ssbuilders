
  const menuToggle = document.getElementById("menuToggle");
  const mobileMenu = document.getElementById("mobileMenu");

  if (menuToggle && mobileMenu) {
    menuToggle.onclick = () => mobileMenu.classList.toggle("hidden");
  }

  function openProjects() {
    document.getElementById("projectModal").classList.remove("hidden");
  }

  function closeProjects() {
    document.getElementById("projectModal").classList.add("hidden");
  }
function openLightbox(src) {
  const lb = document.getElementById('lightbox');
  const img = document.getElementById('lightboxImg');

  img.src = src;
  lb.classList.remove('hidden');
  document.body.style.overflow = 'hidden';
}

function closeLightbox() {
  document.getElementById('lightbox').classList.add('hidden');
  document.body.style.overflow = '';
}


  function openMobileMenu() {
  document.getElementById('mobileMenu').classList.remove('hidden');
  document.body.style.overflow = 'hidden';
}

function closeMobileMenu() {
  document.getElementById('mobileMenu').classList.add('hidden');
  document.body.style.overflow = '';
}


document.addEventListener("DOMContentLoaded", () => {

  const menuToggle = document.getElementById("menuToggle");
  const mobileMenu = document.getElementById("mobileMenu");
 
  // SAFETY CHECK
  if (!menuToggle || !mobileMenu) return;

  // Toggle menu
  // menuToggle.addEventListener("click", () => {
  //   mobileMenu.classList.toggle("hidden");
  // });

  // Close menu when clicking any link
  mobileMenu.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      mobileMenu.classList.add("hidden");
    });
  });

});

