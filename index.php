<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dimplestar Transport</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">Dimplestar Transport</div>
      <div class="burger" onclick="document.querySelector('nav ul').classList.toggle('show')">
        <div></div><div></div><div></div>
      </div>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#terminals">Terminals</a></li>
        <li><a href="#schedule">Routes/Schedules</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#book">Book Now</a></li>
      </ul>
    </nav>
  </header>

  <section id="home">
    <h1>Welcome to Dimplestar Transport</h1>
    <div class="carousel">
      <div class="carousel-images">
        <img src="https://picsum.photos/id/1011/800/400" alt="Bus 1">
        <img src="https://picsum.photos/id/1015/800/400" alt="Bus 2">
        <img src="https://picsum.photos/id/1016/800/400" alt="Bus 3">
      </div>
    </div>
    <div class="carousel-dots"></div>
  </section>

  <section id="about">
    <h2>About Us</h2>
    <p class="center-text">Dimplestar Transport is a premier bus company dedicated to providing safe, reliable, and comfortable travel experiences. With modern buses and excellent customer service, we connect passengers to destinations across the region.</p>
  </section>

  <section id="terminals">
    <h2>Our Terminals</h2>
    <div class="card-container">
      <div class="card">Manila Terminal</div>
      <div class="card">Pampanga Terminal</div>
      <div class="card">Baguio Terminal</div>
    </div>
  </section>

  <section id="schedule">
    <h2>Routes & Schedules</h2>
    <table>
      <tr><th>Route</th><th>Departure</th><th>Arrival</th></tr>
      <tr><td>Manila - Pampanga</td><td>7:00 AM</td><td>9:00 AM</td></tr>
      <tr><td>Pampanga - Baguio</td><td>10:00 AM</td><td>2:00 PM</td></tr>
      <tr><td>Manila - Baguio</td><td>8:00 AM</td><td>1:00 PM</td></tr>
    </table>
  </section>

  <section id="contact">
    <h2>Contact Us</h2>
    <p class="center-text">📞 Hotline: 123-456-7890 | ✉️ Email: info@dimplestar.com</p>
  </section>

  <section id="book">
    <h2>Book Now</h2>
    <form>
      <input type="text" placeholder="Full Name" required>
      <input type="email" placeholder="Email Address" required>
      <select required>
        <option value="">Select Route</option>
        <option>Manila - Pampanga</option>
        <option>Pampanga - Baguio</option>
        <option>Manila - Baguio</option>
      </select>
      <input type="date" required>
      <button type="submit">Confirm Booking</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Dimplestar Transport. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
