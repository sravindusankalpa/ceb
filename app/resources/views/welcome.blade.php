<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="hero-section">
        <nav class="navbar">
            <div class="logo">ElectricityCo</div>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <!-- Language Selector -->
            <div class="language-selector">
                <select id="language" onchange="changeLanguage(this.value)">
                    <option value="en">English</option>
                    <option value="si">සිංහල</option>
                    <option value="ta">தமிழ்</option>
                </select>
            </div>
        </nav>

        <div class="hero-content">
            <h1 class="hero-title">Powering Your World</h1>
            <p class="hero-subtitle">Experience the future of energy with sustainable solutions.</p>
            <a href="#" class="cta-btn">Get Started</a>
        </div>
    </header>

    <ul class="cards">
        <li>
            <a href="" class="card">
                <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="Electricity" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="User" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>            
                            <span class="card__status">1 hour ago</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>      
        </li>
        <!-- Repeat for other cards -->
        <li>
            <a href="" class="card">
                <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="Electricity" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="User" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>            
                            <span class="card__status">1 hour ago</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>      
        </li>
        <li>
            <a href="" class="card">
                <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="Electricity" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="User" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>            
                            <span class="card__status">1 hour ago</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </a>      
        </li>
    </ul>

    <footer>
        <p>&copy; 2024 ElectricityCo. All rights reserved.</p>
    </footer>

    <script>
        function changeLanguage(lang) {
            // Placeholder for language change logic
            console.log("Language changed to: " + lang);

            // Example: Change text content based on selected language
            if (lang === 'si') {
                document.querySelector('.hero-title').textContent = 'ඔබගේ ලෝකය බලගන්වයි';
                document.querySelector('.hero-subtitle').textContent = 'ස්ථායී විසඳුම් සමඟ බලයේ අනාගතය අත්විදින්න.';
                document.querySelector('.cta-btn').textContent = 'ආරම්භ කරන්න';
            } else if (lang === 'ta') {
                document.querySelector('.hero-title').textContent = 'உங்கள் உலகிற்கு மின் உற்பத்தி செய்கிறது';
                document.querySelector('.hero-subtitle').textContent = 'திட தீர்வுகளுடன் ஆற்றலின் எதிர்காலத்தை அனுபவிக்கவும்.';
                document.querySelector('.cta-btn').textContent = 'தொடங்கு';
            } else {
                document.querySelector('.hero-title').textContent = 'Powering Your World';
                document.querySelector('.hero-subtitle').textContent = 'Experience the future of energy with sustainable solutions.';
                document.querySelector('.cta-btn').textContent = 'Get Started';
            }
        }
    </script>
</body>

<style>
:root {
    --surface-color: #fff;
    --curve: 40;
}

* {
    box-sizing: border-box;
}

body {
    font-family: 'Noto Sans JP', sans-serif;
    background-color: #fef8f8;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

.navbar ul {
    display: flex;
    list-style: none;
}

.navbar ul li {
    margin-left: 20px;
}

.navbar ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.navbar ul li a:hover {
    color: #ffdd00;
}

.language-selector {
    margin-left: auto;
}

.language-selector select {
    padding: 5px;
    font-size: 16px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
    outline: none;
    transition: border-color 0.3s ease;
}

.language-selector select:hover {
    border-color: #ffdd00;
}

.hero-section {
    background: url('{{ asset('images/14.jpg') }}')  no-repeat center center/cover;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    position: relative;
    overflow: hidden;
}

.hero-content {
    max-width: 800px;
    animation: fadeIn 2s ease-in-out;
}

.hero-title {
    font-size: 64px;
    margin-bottom: 20px;
}

.hero-subtitle {
    font-size: 24px;
    margin-bottom: 40px;
}

.cta-btn {
    display: inline-block;
    padding: 15px 30px;
    background-color: #ffdd00;
    color: #333;
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: none;
    border-radius: 50px;
    transition: transform 0.3s ease;
}

.cta-btn:hover {
    transform: scale(1.05);
}

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 4rem 5vw;
    padding: 0;
    list-style-type: none;
}

.card {
    position: relative;
    display: block;
    height: 100%;  
    border-radius: calc(var(--curve) * 1px);
    overflow: hidden;
    text-decoration: none;
}

.card__image {      
    width: 100%;
    height: auto;
}

.card__overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;      
    border-radius: calc(var(--curve) * 1px);    
    background-color: var(--surface-color);      
    transform: translateY(100%);
    transition: .2s ease-in-out;
}

.card:hover .card__overlay {
    transform: translateY(0);
}

.card__header {
    position: relative;
    display: flex;
    align-items: center;
    gap: 2em;
    padding: 2em;
    border-radius: calc(var(--curve) * 1px) 0 0 0;    
    background-color: var(--surface-color);
    transform: translateY(-100%);
    transition: .2s ease-in-out;
}

.card__arc {
    width: 80px;
    height: 80px;
    position: absolute;
    bottom: 100%;
    right: 0;      
    z-index: 1;
}

.card__arc path {
    fill: var(--surface-color);
    d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
    transform: translateY(0);
}

.card__thumb {
    flex-shrink: 0;
    width: 50px;
    height: 50px;      
    border-radius: 50%;      
}

.card__title {
    font-size: 1em;
    margin: 0 0 .3em;
    color: #6A515E;
}

.card__status {
    font-size: .8em;
    color: #D7BDCA;
}

.card__description {
    padding: 0 2em 2em;
    margin: 0;
    color: #D7BDCA;
    font-family: "MockFlowFont";   
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

</style>
</html>
