@extends('main')
@section('title', 'Contact Us - Followers on Door')
@section('meta_description', 'Need help? Reach out to Followers on Door for support with your Instagram, YouTube, or Telegram follower requests.')
@section('og_title', 'Contact Support | Followers on Door')
@section('og_description', 'We’re here to help. Contact our team if you have issues with delivery or payments.')
@section('twitter_title', 'Reach Us | Followers on Door')
@section('twitter_description', 'Talk to us for assistance regarding social media growth services.')


@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">📩 Contact Us</h1>

    <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-md-6 mb-4 mb-md-0 text-center">
            <img src="{{ asset('images/contact-us.png') }}" alt="Contact Illustration" class="img-fluid bounce-animation">
        </div>

        <!-- Form Column -->
        <div class="col-md-6">
            <!-- Alert Box -->
            <div id="alertBox" class="alert d-none" role="alert"></div>

            <form id="contactForm" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">🙋‍♂️ Your Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">📧 Email address</label>
                    <input type="email" class="form-control" id="email" required>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">📝 Subject</label>
                    <input type="text" class="form-control" id="subject">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">💬 Your Message</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="screenshot" class="form-label">📎 Attach an Image (optional)</label>
                    <input type="file" class="form-control" id="screenshot" accept="image/*">
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-submit px-5">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
  const form = document.getElementById('contactForm');
  const alertBox = document.getElementById('alertBox');

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim().toLowerCase();
    const subject = document.getElementById('subject').value.trim();
    const message = document.getElementById('message').value.trim();
    const screenshot = document.getElementById('screenshot').files[0];

    let submissions = JSON.parse(localStorage.getItem('contactSubmissions')) || [];

    const alreadySubmitted = submissions.some(sub => sub.email === email);

    if (alreadySubmitted) {
      alertBox.className = 'alert alert-warning';
      alertBox.textContent = '⚠️ You have already submitted a message with this email. we will get back to you soon!';
      alertBox.classList.remove('d-none');
      return;
    }

    const fileName = screenshot ? screenshot.name : null;

    submissions.push({ name, email, subject, message, fileName });
    localStorage.setItem('contactSubmissions', JSON.stringify(submissions));

    form.reset();
    alertBox.className = 'alert alert-success';
    alertBox.textContent = '✅ Your message has been saved!. will get back to you soon!';
    alertBox.classList.remove('d-none');
  });
</script>
@endsection
