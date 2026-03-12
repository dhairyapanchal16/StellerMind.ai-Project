<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StellerMind - Modern Web Solutions</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.7;
            color: #2c3e50;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        h1, h2, h3 {
            margin: 0;
            padding: 0;
            font-weight: 700;
            letter-spacing: -0.02em;
        }
        a {
            text-decoration: none;
            color: #3498db;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        button, input[type="submit"] {
            cursor: pointer;
            border: none;
            border-radius: 12px;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        button::before, input[type="submit"]::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        button:hover::before, input[type="submit"]:hover::before {
            left: 100%;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }
        /* Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        .logo {
            font-size: 28px;
            font-weight: 800;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        .nav-links li {
            margin-left: 40px;
        }
        .nav-links a {
            color: #2c3e50;
            font-weight: 600;
            position: relative;
        }
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .nav-links a:hover::after {
            width: 100%;
        }
        /* Hero Section */
        #hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            padding: 140px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.1;
        }
        #hero h1 {
            font-size: 56px;
            margin-bottom: 24px;
            text-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }
        #hero p {
            font-size: 22px;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .cta-button {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 18px 36px;
            font-size: 20px;
            border-radius: 50px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
        }
        .cta-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.3);
        }
        /* Services Section */
        #services {
            padding: 100px 0;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 50%, #4facfe 100%);
            position: relative;
        }
        #services::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(1px);
        }
        #services h2 {
            text-align: center;
            margin-bottom: 60px;
            font-size: 42px;
            color: #fff;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
            position: relative;
            z-index: 1;
        }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
            position: relative;
            z-index: 1;
        }
        .service-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            position: relative;
            overflow: hidden;
        }
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transform: scaleX(0);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .service-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 30px 60px rgba(0,0,0,0.2);
        }
        .service-card:hover::before {
            transform: scaleX(1);
        }
        .service-card h3 {
            margin-bottom: 20px;
            color: #2c3e50;
            font-size: 24px;
        }
        .service-card p {
            color: #5a6c7d;
            line-height: 1.6;
        }
        /* About Section */
        #about {
            padding: 100px 0;
            background: #fff;
        }
        .about-content {
            display: flex;
            align-items: center;
            gap: 60px;
            position: relative;
        }
        .about-text {
            flex: 1;
        }
        .about-text h2 {
            margin-bottom: 30px;
            font-size: 42px;
            color: #2c3e50;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .about-text p {
            font-size: 18px;
            line-height: 1.8;
            color: #5a6c7d;
            margin-bottom: 20px;
        }
        .about-image {
            flex: 1;
            text-align: center;
            position: relative;
        }
        .about-image img {
            max-width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .about-image img:hover {
            transform: scale(1.05) rotate(2deg);
        }
        /* Contact Section */
        #contact {
            padding: 100px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
        }
        #contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255,255,255,0.05);
        }
        #contact h2 {
            text-align: center;
            margin-bottom: 60px;
            font-size: 42px;
            color: #fff;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
            position: relative;
            z-index: 1;
        }
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            position: relative;
            z-index: 1;
        }
        .form-group {
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
            font-size: 16px;
        }
        input, textarea {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid rgba(102, 126, 234, 0.2);
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(5px);
        }
        input:focus, textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }
        textarea {
            height: 140px;
            resize: vertical;
        }
        input[type="submit"] {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            width: 100%;
            padding: 16px;
            font-size: 18px;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }
        /* Footer */
        footer {
            background: linear-gradient(135deg, #2d3748 0%, #1a202c 100%);
            color: #fff;
            padding: 50px 0;
            text-align: center;
            position: relative;
        }
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.5), transparent);
        }
        .social-links {
            margin-bottom: 30px;
        }
        .social-links a {
            margin: 0 15px;
            color: #e2e8f0;
            font-size: 28px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-block;
        }
        .social-links a:hover {
            color: #667eea;
            transform: translateY(-5px) scale(1.1);
        }
        footer p {
            margin: 0;
            font-size: 16px;
            opacity: 0.8;
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                padding: 15px 0;
            }
            .nav-links {
                margin-top: 15px;
            }
            .nav-links li {
                margin-left: 25px;
                margin-right: 25px;
            }
            #hero h1 {
                font-size: 42px;
            }
            #hero p {
                font-size: 20px;
            }
            .about-content {
                flex-direction: column;
                gap: 40px;
            }
            .contact-form {
                padding: 30px 20px;
            }
            .services-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .service-card {
                padding: 30px 20px;
            }
        }
        /* Scroll animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-in-up {
            animation: fadeInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
    </style>
</head>
<body>
    <?php
    // Basic contact form handler
    $formMessage = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Simple validation
        if (!empty($name) && !empty($email) && !empty($message)) {
            // In a real application, you would send an email here
            // For this demo, we'll just display a success message
            $formMessage = '<p style="color: green; text-align: center;">Thank you for your message, ' . $name . '! We will get back to you soon.</p>';
        } else {
            $formMessage = '<p style="color: red; text-align: center;">Please fill in all fields.</p>';
        }
    }
    ?>

    <header>
        <div class="container">
            <nav>
                <div class="logo">StellerMind</div>
                <ul class="nav-links">
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="container">
            <h1>Welcome to StellerMind</h1>
            <p>Empowering your digital presence with innovative web solutions</p>
            <a href="#contact" class="cta-button">Get Started</a>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Web Development</h3>
                    <p>We create responsive and modern websites tailored to your needs.</p>
                </div>
                <div class="service-card">
                    <h3>UI/UX Design</h3>
                    <p>Design intuitive user interfaces that enhance user experience.</p>
                </div>
                <div class="service-card">
                    <h3>Digital Marketing</h3>
                    <p>Boost your online presence with effective digital marketing strategies.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About Us</h2>
                    <p>StellerMind is a leading web development company dedicated to creating exceptional digital experiences. With years of experience in the industry, we combine creativity, technology, and innovation to deliver solutions that drive results for our clients.</p>
                    <p>Our team of skilled professionals is passionate about helping businesses thrive in the digital world. We believe in building long-term partnerships and delivering projects that exceed expectations.</p>
                </div>
                <div class="about-image">
                    <img src="https://via.placeholder.com/400x300/007bff/ffffff?text=Team+Photo" alt="StellerMind Team">
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <?php echo $formMessage; ?>
            <form class="contact-form" method="post" action="">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <input type="submit" value="Send Message">
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="social-links">
                <a href="#" title="Facebook">📘</a>
                <a href="#" title="Twitter">🐦</a>
                <a href="#" title="LinkedIn">💼</a>
                <a href="#" title="Instagram">📷</a>
            </div>
            <p>&copy; 2026 StellerMind. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>