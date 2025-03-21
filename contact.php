<style>
  .contact-container {
    max-width: 1200px;
    margin: 0 auto;
    margin-top: 4rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  .contact-header {
    background: #3498db;
    color: white;
    padding: 2rem;
    text-align: center;
  }

  .contact-header h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
  }

  .contact-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    padding: 3rem;
  }

  .contact-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
  }

  .form-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  input,
  textarea {
    padding: 12px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
  }

  input:focus,
  textarea:focus {
    outline: none;
    border-color: #3498db;
  }

  button {
    background: #3498db;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  button:hover {
    background: #2980b9;
  }

  .contact-info {
    display: flex;
    flex-direction: column;
    gap: 2rem;
  }

  .info-item {
    display: flex;
    align-items: center;
    gap: 1rem;
  }

  .info-icon {
    font-size: 1.5rem;
    color: #3498db;
    width: 40px;
    text-align: center;
  }

  .map-container {
    height: 200px;
    background: #f5f6fa;
    border-radius: 8px;
    margin-top: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #7f8c8d;
  }

  @media (max-width: 768px) {

    .contact-content {
      padding: 2rem;
    }

    .contact-header {
      margin-top: 25px;
    }

    .contact-header h1 {
      font-size: 2rem;
    }
  }
</style>
<section>
  <div class="contact-container">
    <div class="contact-header">
      <h1>Contact Us</h1>
      <p>Get in touch with our support team</p>
    </div>

    <div class="contact-content">
      <form class="contact-form">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" placeholder="John Doe" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" placeholder="john@example.com" required>
        </div>

        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" id="subject" placeholder="Enter subject" required>
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" rows="5" placeholder="Write your message..." required></textarea>
        </div>

        <button type="submit">Send Message</button>
      </form>

      <div class="contact-info">
        <div class="info-item">
          <i class="fas fa-map-marker-alt info-icon"></i>
          <div>
            <h3>Visit Us</h3>
            <p>location##</p>
          </div>
        </div>

        <div class="info-item">
          <i class="fas fa-phone-alt info-icon"></i>
          <div>
            <h3>Call Us</h3>
            <p>Contact###<br>Mon-Fri: 9AM - 6PM</p>
          </div>
        </div>

        <div class="info-item">
          <i class="fas fa-envelope info-icon"></i>
          <div>
            <h3>Email Us</h3>
            <p>info@windscreenmania.com</p>
          </div>
        </div>

        <!-- To use with Google Maps:
       Replace the map-container div with actual Google Maps embed code
       Add your API key and location coordinates -->
        <div class="map-container">
          <i class="fas fa-map-marked-alt"></i>
          <span style="margin-left: 10px;">Our Location Map</span>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // Form submission handling
  document.querySelector('.contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Thank you for your message! We will respond shortly.');
    e.target.reset();
  });
</script>