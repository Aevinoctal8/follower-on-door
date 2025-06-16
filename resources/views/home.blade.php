@extends('main')
@section('title', 'Followers on Door | Get Free Instagram Followers & YouTube Subscribers')
@section('meta_description', 'Get free and paid followers for Instagram, YouTube subscribers, and Telegram members. Fast delivery, secure, and no password needed.')
@section('og_title', 'Followers on Door - Social Growth Made Easy')
@section('og_description', 'Boost your social presence with free or affordable growth for Instagram, YouTube, and Telegram.')
@section('twitter_title', 'Followers on Door | Grow Your Followers Fast')
@section('twitter_description', 'Start getting real followers and subscribers today with just your username or channel link.')

@section('content')
    <div class="thunder-container mt-5">
        <h1 class="animated-heading my-3">
            @foreach(str_split('Welcome to Followers on Door') as $i => $char)
                <span style="animation-delay: {{ $i * 0.05 }}s">{!! $char === ' ' ? '&nbsp;' : $char !!}</span>
            @endforeach
        </h1>
        <p class="text-center subtitle">
            We helps you to grow your followers in instagram, youtube and telegram.
        </p>
    </div>
    <div class="row my-5">
        <div class="col-12">
            <div class="feature-box d-md-flex align-items-center">
                <div class="col-md-6 animate-left">
                    <div>
                        <h2>
                            Unlock Your Social Media Potential: Grow Your Followers and Subscribers Today!
                        </h2>
                        <p>
                        Thousands trust us to grow their followers and subscribers. Discover the easiest way to expand your reach with real results!
                        </p>
                        <button class="btn get-start-btn px-5" id="startBtn">Get Start Now</button>
                    </div>
                </div>
                <div class="col-md-6 text-center animate-right">
                    <img src="{{ asset('images/banner.png') }}" alt="banner" class="img-fluid bounce-animation">
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center my-5 stats-section">
        <h2 class="mb-5 live-state">🚀 Our Live Stats</h2>

        <div class="col-md-3 col-6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('images/user.png') }}" alt="Active User" class="profile-icon">
                    </div>
                    <div class="flip-card-back">
                        <img src="{{ asset('images/user.png') }}" alt="Active User" class="profile-icon">
                    </div>
                </div>
            </div>
            <h5>Active Users</h5>
            <p id="activeUsers">0</p>
        </div>

        <div class="col-md-3 col-6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('images/subs.png') }}" alt="Subscribers" class="profile-icon">
                    </div>
                    <div class="flip-card-back">
                        <img src="{{ asset('images/subs.png') }}" alt="Subscribers" class="profile-icon">
                    </div>
                </div>
            </div>
            <h5>Total Grow Subscribers</h5>
            <p id="totalSubscribers">0</p>
        </div>

        <div class="col-md-3 col-6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('images/users.png') }}" alt="Total Users" class="profile-icon">
                    </div>
                    <div class="flip-card-back">
                        <img src="{{ asset('images/users.png') }}" alt="Total Users" class="profile-icon">
                    </div>
                </div>
            </div>
            <h5>Total Users</h5>
            <p id="totalUsers">0</p>
        </div>

        <div class="col-md-3 col-6">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('images/follower.png') }}" alt="Followers" class="profile-icon">
                    </div>
                    <div class="flip-card-back">
                        <img src="{{ asset('images/follower.png') }}" alt="Followers" class="profile-icon">
                    </div>
                </div>
            </div>
            <h5>Total Grow Followers</h5>
            <p id="totalFollowers">0</p>
        </div>
    </div>
    <div class="container my-5">
        <h2 class="text-center my-5 demo">👇 Try Our Free Demo</h2>
        <div>
            <div class="row p-4 stylish-form">
                <div class="col-md-7 d-flex align-items-center">
                    <div>
                        <h3 class="mb-4">
                            Get 10 Free Followers or Subscribers in 24 Hours!
                        </h3>
                        <p class="mb-4">
                            🚀 Boost your social media presence with our free demo service.
                            <br>📈 Experience real growth with genuine followers and subscribers.
                            <br>💡 No strings attached, just enter your username and watch the magic happen!
                            <br>📌 Get 10 free subscribers or followers in 24 hours.
                            <br>📌 The page is public.
                            <br>🕑 Start: 0 - 8 hour 
                            <br>🚀 Speed: 1k - 2k / Day
                            <br>🩸 Drop: less drop 👌 Quality: real mix followers
                        </p>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <div>
                        <div class="text-center mb-4">
                            <button type="button" class="btn platform-btn active" data-platform="instagram">Instagram</button>
                            <button type="button" class="btn platform-btn" data-platform="youtube">YouTube</button>
                            <button type="button" class="btn platform-btn" data-platform="telegram">Telegram</button>
                        </div>
    
                        <form id="demoForm">
                            <div class="mb-3">
                                <label for="userInput" class="form-label" id="inputLabel">Instagram Username:</label>
                                <input type="text" class="form-control platform-input" id="userInput" placeholder="Enter your Instagram username">
                                <div class="text-danger mt-1" id="inputError" style="display:none;"></div>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-submit px-5">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h2 class="text-center mb-4 font-weight-bold">🔥 Try Our Paid Service to get 1000 followers or subscribers – Just ₹89</h2>
        <div class="p-4 stylish-form mt-5">
            <div class="row">
                <!-- Left Column: Step Images -->
                <div class="col-md-6 text-center">
                    <img id="imageStep1" src="{{ asset('images/step-1.png') }}" class="img-fluid mb-3 step-image bounce-animation " alt="Step 1">
                    <img id="imageStep2" src="{{ asset('images/step-2.png') }}" class="img-fluid mb-3 step-image bounce-animation d-none" alt="Step 2">
                    <img id="imageStep3" src="{{ asset('images/step-3.png') }}" class="img-fluid mb-3 step-image bounce-animation d-none" alt="Step 3">
                </div>

                <!-- Right Column: Steps Forms -->
                <div class="col-md-6 in-mobile">
                        <div id="step1">
                            <h4 class="font-weight-bold mb-3">📝 Enter Details</h4>
                            <form id="step1Form">
                                <div class="mb-3">
                                    <label for="platform" class="form-label">Choose Platform:</label>
                                    <select class="form-select" id="platform" required>
                                        <option value="">Select One</option>
                                        <option value="instagram">Instagram</option>
                                        <option value="youtube">YouTube</option>
                                        <option value="telegram">Telegram</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username or Channel Link:</label>
                                    <input type="text" class="form-control" placeholder="Enter user name or link" id="username" required>
                                    <div class="invalid-feedback" id="usernameError"></div>
                                </div>
                                <button type="submit" class="btn btn-submit px-5">Continue to Payment</button>
                            </form>
                        </div>
                        <div class="row in-mobile">
                            <div>
                                <div class="d-flex align-item-center">
                                    <div id="step2" class="d-none in-mobile">
                                        <h4 class="mt-4 font-weight-bold mb-3 in-mobile">💸 Easy to Pay</h4>
                                        <p>Click the button below to pay ₹89 securely</p>
                                        <div>
                                            <button class="btn btn-submit px-5" onclick="openRazorpay(3)">Pay ₹89</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="step3" class="d-none">
                            <h4 class="mt-4 font-weight-bold mb-3">📤 Submit Proof</h4>
                            <form id="step3Form">
                                <div class="mb-3">
                                    <label for="screenshot" class="form-label">Upload Payment Screenshot</label>
                                    <input type="file" class="form-control" id="screenshot" accept="image/*" required>
                                </div>
                                <input type="hidden" id="finalUsername">
                                <input type="hidden" id="finalPlatform">
                                <button type="submit" class="btn btn-success">Submit & Finish</button>
                            </form>
                        </div>
    
                        <div id="alertBox" class="alert mt-4 d-none" role="alert"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="discountBanner" class="discount-banner">
        🎉 Special Discount: <del>₹249</del> <strong>Now ₹89!</strong> Limited time only.
        <a href="/#" class="btn btn-sm btn-light ms-2 mt-2 mt-md-0" id="grab-now">Grab Now</a>
        <button onclick="closeDiscountBanner()" class="btn-close ms-auto" aria-label="Close"></button>
    </div>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
    function openRazorpay() {
        var options = {
            "key": "rzp_test_sbbb4ddMvdCZbz",
            "amount": 8900,
            "currency": "INR",
            "name": "Followers on Door",
            "description": "Purchase Followers Plan",
            "image": "{{ asset('images/logo.png') }}",
            "handler": function (response) {
                showAlert("success", "🎉 Thank you! Your submission is complete. We will review your payment, and you'll receive your 1000 followers/subscribers within 3 days.");
                step1Form.reset();
                goToStep(1);
            },
            "prefill": {
                "name": "test",
                "email": "",
                "contact": ""
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
</script>

<script>
    let totalUsers = 1324;
    let totalSubscribers = 437473;
    let totalFollowers = 536433;

    function updateStats() {
        const activeUsers = Math.floor(Math.random() * 101) + 300;
        totalUsers += 2;
        totalSubscribers += 675;
        totalFollowers += 75;

        document.getElementById('activeUsers').innerText = activeUsers.toLocaleString();
        document.getElementById('totalUsers').innerText = totalUsers.toLocaleString();
        document.getElementById('totalSubscribers').innerText = totalSubscribers.toLocaleString();
        document.getElementById('totalFollowers').innerText = totalFollowers.toLocaleString();
    }

    updateStats();
    setInterval(updateStats, 10000);
</script>
<script>
  document.getElementById("startBtn").addEventListener("click", function () {
    const formSection = document.getElementById("step1Form");
    formSection.scrollIntoView({ behavior: "smooth", block: "start" });
  });
    document.getElementById("grab-now").addEventListener("click", function () {
        const formSection = document.getElementById("step1Form");
        formSection.scrollIntoView({ behavior: "smooth", block: "start" });
    });
</script>
<script>
    const platformButtons = document.querySelectorAll('.platform-btn');
    const userInput = document.getElementById('userInput');
    const inputLabel = document.getElementById('inputLabel');
    const errorDiv = document.getElementById('inputError');

    let selectedPlatform = 'instagram';

    platformButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            platformButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            selectedPlatform = btn.dataset.platform;
            errorDiv.style.display = 'none';
            userInput.value = '';

            switch (selectedPlatform) {
                case 'instagram':
                    inputLabel.innerText = "Instagram Username:";
                    userInput.placeholder = "Enter your Instagram username";
                    break;
                case 'youtube':
                    inputLabel.innerText = "YouTube Channel URL:";
                    userInput.placeholder = "Enter your YouTube channel link";
                    break;
                case 'telegram':
                    inputLabel.innerText = "Telegram Username or Link:";
                    userInput.placeholder = "Enter your Telegram username or link";
                    break;
            }
        });
    });

    document.getElementById('demoForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const inputValue = userInput.value.trim();
        let valid = false;

        if (selectedPlatform === 'instagram') {
            valid = /^[a-zA-Z0-9._]{1,30}$/.test(inputValue);
            if (!valid) errorDiv.innerText = "Enter a valid Instagram username.";
        } else if (selectedPlatform === 'youtube') {
            valid = /^(https?:\/\/)?(www\.)?(youtube\.com\/(channel|c|user)\/[a-zA-Z0-9_-]+)$/.test(inputValue);
            if (!valid) errorDiv.innerText = "Enter a valid YouTube channel link.";
        } else if (selectedPlatform === 'telegram') {
            valid = /^(@[a-zA-Z0-9_]{5,32}|https?:\/\/t\.me\/[a-zA-Z0-9_]{5,32})$/.test(inputValue);
            if (!valid) errorDiv.innerText = "Enter a valid Telegram username or public link.";
        }

        if (valid) {
            errorDiv.style.display = 'none';
            alert(`Submitted successfully for ${selectedPlatform} ✔️`);
        } else {
            errorDiv.style.display = 'block';
        }
    });
</script>


<script>
    const step1Form = document.getElementById("step1Form");
    const step3Form = document.getElementById("step3Form");
    const platformSelect = document.getElementById("platform");
    const usernameInput = document.getElementById("username");
    const usernameError = document.getElementById("usernameError");
    const alertBox = document.getElementById("alertBox");

    const goToStep = (stepNum) => {
        // Hide all steps
        document.getElementById("step1").classList.add("d-none");
        document.getElementById("step2").classList.add("d-none");
        document.getElementById("step3").classList.add("d-none");
        document.getElementById(`step${stepNum}`).classList.remove("d-none");

        // Hide all images
        document.querySelectorAll(".step-image").forEach(img => img.classList.add("d-none"));

        // Show current step image
        const currentImage = document.getElementById(`imageStep${stepNum}`);
        if (currentImage) currentImage.classList.remove("d-none");
    };

    step1Form.addEventListener("submit", function (e) {
        e.preventDefault();
        const platform = platformSelect.value;
        const username = usernameInput.value.trim();

        usernameInput.classList.remove("is-invalid");
        usernameError.innerText = "";

        if (!platform) {
            alert("Please select a platform.");
            return;
        }

        if (!username) {
            usernameInput.classList.add("is-invalid");
            usernameError.innerText = "Username or link is required.";
            return;
        }

        // Validate username
        let isValid = true;
        if (platform === "instagram" && !/^[a-zA-Z0-9._]{1,30}$/.test(username)) {
            isValid = false;
            usernameError.innerText = "Invalid Instagram username.";
        } else if (platform === "youtube" && !/^https?:\/\/(www\.)?youtube\.com\/(channel|c|user)\/.+$/.test(username)) {
            isValid = false;
            usernameError.innerText = "Invalid YouTube channel link.";
        } else if (platform === "telegram" && !/^@?[a-zA-Z0-9_]{5,32}$/.test(username)) {
            isValid = false;
            usernameError.innerText = "Invalid Telegram username or link.";
        }

        if (!isValid) {
            usernameInput.classList.add("is-invalid");
            return;
        }

        // Check localStorage for duplicate
        const savedEntries = JSON.parse(localStorage.getItem("paidUsernames") || "[]");
        if (savedEntries.includes(`${platform}:${username.toLowerCase()}`)) {
            showAlert("warning", "Hang tight! Your 1,000 followers or subscribers are on the way and will be delivered within 3 days. If you've already made the payment, please sit back and relax—we’ve got you covered. If not, please complete the payment of ₹89 to start growing your account today!");
            return;
        }

        document.getElementById("finalUsername").value = username;
        document.getElementById("finalPlatform").value = platform;

        goToStep(2);
    });

    step3Form.addEventListener("submit", function (e) {
        e.preventDefault();

        const file = document.getElementById("screenshot").files[0];
        if (!file) {
            alert("Please upload a screenshot of the payment.");
            return;
        }

        const finalUsername = document.getElementById("finalUsername").value.toLowerCase();
        const finalPlatform = document.getElementById("finalPlatform").value;

        const key = `${finalPlatform}:${finalUsername}`;
        const saved = JSON.parse(localStorage.getItem("paidUsernames") || "[]");
        saved.push(key);
        localStorage.setItem("paidUsernames", JSON.stringify(saved));

        showAlert("success", "🎉 Thank you! Your submission is complete. We will review your payment, and you'll receive your 1000 followers/subscribers within 3 days.");

        step1Form.reset();
        step3Form.reset();
        goToStep(1); // Reset to first step
    });

    function showAlert(type, message) {
        alertBox.className = `alert alert-${type} mt-4`;
        alertBox.innerText = message;
        alertBox.classList.remove("d-none");
        setTimeout(() => alertBox.classList.add("d-none"), 10000);
    }
</script>
<script>
    function closeDiscountBanner() {
        document.getElementById('discountBanner').style.display = 'none';
    }
</script>

<script>
  const icons = ["❤️", "👤", "🚀", "🔔", "💬"];
  const container = document.getElementById("iconRain");

  let totalIcons = 100;
  let dropped = 0;

  function dropIcon() {
    if (dropped >= totalIcons) return;

    const icon = document.createElement("div");
    icon.className = "floating-icon";
    icon.innerText = icons[Math.floor(Math.random() * icons.length)];

    icon.style.left = Math.random() * 100 + "vw";
    icon.style.animationDuration = (2 + Math.random() * 2) + "s";

    container.appendChild(icon);
    dropped++;

    setTimeout(() => icon.remove(), 5000);
  }

  const dropInterval = setInterval(() => {
    dropIcon();
    if (dropped >= totalIcons) clearInterval(dropInterval);
  }, 10);
</script>



@endsection
