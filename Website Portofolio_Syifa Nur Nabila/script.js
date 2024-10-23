function myFunction(x) {
  x.classList.toggle("change");
  const navbar = document.querySelector('.navbar');
  navbar.classList.toggle('active'); // Aktifkan atau nonaktifkan navbar
}

// Scroll bagian dan link aktif
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');
const menuIcon = document.querySelector('.menu-icon'); // Pastikan menuIcon didefinisikan
const navbar = document.querySelector('.navbar'); // Pastikan navbar didefinisikan

window.onscroll = () => {
  sections.forEach(sec => {
      let top = window.scrollY;
      let offset = sec.offsetTop - 150;
      let height = sec.offsetHeight;
      let id = sec.getAttribute('id');

      if (top >= offset && top < offset + height) {
          navLinks.forEach(link => {
              link.classList.remove('active');
              document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
          });
      }
  });

  // Menyembunyikan navbar saat scroll
  menuIcon.classList.remove('bx-x');
  navbar.classList.remove('active');
};

// Menangani klik pada link navbar untuk memindahkan garis aktif
navLinks.forEach(link => {
  link.addEventListener('click', function() {
      // Hapus kelas 'active' dari semua link
      navLinks.forEach(nav => nav.classList.remove('active'));
      
      // Tambahkan kelas 'active' ke link yang diklik
      this.classList.add('active');
      
      // Menghilangkan navbar setelah mengklik link
      navbar.classList.remove('active');
      menuIcon.classList.remove('bx-x'); // Pastikan untuk mengubah ikon menu
  });
});

// Dark Light Mode
let darkModeIcon = document.querySelector('#darkMode-icon');

darkModeIcon.onclick = () => {
  darkModeIcon.classList.toggle('bx-sun');
  document.body.classList.toggle('dark-mode')
};

//Scroll Reveal
ScrollReveal({
  reset: true,
  distance: '80px',
  duration: 1000,
  delay: 200
});

ScrollReveal().reveal('.home-content, .heading', { origin: 'top' });
ScrollReveal().reveal('.about-content. heading', { origin: 'top' });
ScrollReveal().reveal('.services-box, .services-container', { origin: 'top' });
ScrollReveal().reveal('.portofolio-box, .portofolio-container', { origin: 'top' });
ScrollReveal().reveal('.contact, input-box, textarea, btn', { origin: 'top' });
ScrollReveal().reveal('.home-img img, services-container, portofolio-box, contact form', { origin: 'bottom' });
ScrollReveal().reveal('.home-content h1, .about-img-container', { origin: 'left' });
ScrollReveal().reveal('.about-content. heading h3', { origin: 'right' });

// Menampilkan popup setelah data berhasil disimpan
window.onload = function() {
  const popup = document.getElementById('popup');
  if (popup) {
      popup.style.display = 'flex'; // Tampilkan pop-up
  }
};

// Fungsi untuk mengarahkan pengguna kembali ke halaman contact
function goToContact() {
  window.location.href = "contact.php"; // Arahkan ke halaman contact
}


