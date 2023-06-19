// Toggle class active

const navbarNav = document.querySelector('.navbar .collapse');

// ketika hamburger menu diklik
document.querySelector('#production-menu').onclick = () => {
  navbarNav.classList.toggle('active');
};

function submitForm(event) {
  event.preventDefault(); // Mencegah pengiriman form secara default

  // Mendapatkan nilai input dari form
  var name = document.getElementById('floatingName').value;
  var email = document.getElementById('floatingEmail').value;
  var message = document.getElementById('floatingMessage').value;

  // Menampilkan nama, email, dan pesan yang dikirim
  var messageDiv = document.getElementById('message');
  messageDiv.innerHTML = 'Thank you, ' + name + '! Your message has been sent.<br>';
  messageDiv.innerHTML += 'Name   : ' + name + '<br>';
  messageDiv.innerHTML += 'Email  : ' + email + '<br>';
  messageDiv.innerHTML += 'Message: ' + message;

  // Mengosongkan nilai input setelah pengiriman
  document.getElementById('floatingName').value = '';
  document.getElementById('floatingEmail').value = '';
  document.getElementById('floatingMessage').value = '';
}
