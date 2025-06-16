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

  document.getElementById("startBtn").addEventListener("click", function () {
    const formSection = document.getElementById("step1Form");
    formSection.scrollIntoView({ behavior: "smooth", block: "start" });
  });

    const platformButtons = document.querySelectorAll('.platform-btn');
    const userInput = document.getElementById('userInput');
    const inputLabel = document.getElementById('inputLabel');
    const errorDiv = document.getElementById('inputError');

    let selectedPlatform = 'instagram'; // default

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