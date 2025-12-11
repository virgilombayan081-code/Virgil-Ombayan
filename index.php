<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORTFOLIO</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: pink;
        }

        header {
            background: red;
            color: white;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999;
        }

        nav ul {
            list-style: none;
            text-align: center;
        }

        nav ul li {
            display: inline-block;
            margin: 0 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        section {
            padding: 90px 20px 60px;
            min-height: 100vh;
            text-align: center;
        }

        /* HOME */
        #home {
            background: #fff;
        }

        /* 🔥 PROFILE PICTURE GLOW EFFECT */
        .profile-pic {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #ff0000;
            margin-bottom: 20px;

            /* Neon glow + animation */
            box-shadow: 
                0 0 15px red,
                0 0 30px red,
                0 0 45px red;
            animation: glow 2s infinite alternate;
            transition: 0.3s;
        }

        @keyframes glow {
            0% {
                box-shadow:
                    0 0 10px red,
                    0 0 20px red,
                    0 0 30px red;
            }
            100% {
                box-shadow:
                    0 0 20px red,
                    0 0 40px red,
                    0 0 60px red;
            }
        }

        h1 {
            font-size: 48px;
            color: white;
            text-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000;
            animation: wave 2s ease-in-out infinite;
        }

        @keyframes wave {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        /* PHOTOS */
        #photos {
            background: #eef2f7;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .photo img {
            width: 300px;
            border-radius: 8px;
            transition: 0.3s;
            box-shadow: 0 0 10px #0003;
        }

        .photo img:hover {
            transform: scale(1.05);
        }

        /* ABOUT */
        #about p {
            max-width: 800px;
            margin: auto;
            font-size: 18px;
            color: #555;
        }

        /* CONTACT */
        #contact ul {
            list-style: none;
        }

        #contact li {
            font-size: 18px;
            margin: 10px 0;
        }

        #contact a {
            text-decoration: none;
            color: #333;
        }

        footer {
            background: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

<!-- NAVIGATION -->
<header>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#photos">Photos</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<!-- HOME -->
<section id="home">
    <div class="home-container">
        <img class="profile-pic" 
             src="https://scontent.fceb1-1.fna.fbcdn.net/v/t39.30808-6/586236039_865610569458604_9002361482853460843_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFz4A-gbF9GjeYmfcIR4TflKdWHGps6xxUp1YcamzrHFbIjvUdLZhN7iEhn5zKyAgUmSPa_RtO_ADwfpU14tP2X&_nc_ohc=4RxE5N1d2tAQ7kNvwF_sStY&_nc_oc=Adk1xCJEE_krSRBhW5zqwqFXhU8go86yZg7STh86yrI3-lD0EeHvZGo9aWet-WuTVnSivTkAq_r4MEK8RXSSpOQR&_nc_zt=23&_nc_ht=scontent.fceb1-1.fna&_nc_gid=ReifDnPjmtXgHmDLSV5ayA&oh=00_AfnirGI8wmwnIVePUn4pMx9aWmfWkr8kbg7KLrdaqK4PkA&oe=69402916"
             alt="Profile Picture">

        <h1>Welcome to My Portfolio</h1>
        <p>Explore my work and get to know more about me.</p>
    </div>
</section>

<!-- PHOTOS -->
<section id="photos">
    <h2>My Photos</h2>
    <div class="gallery">
        <div class="photo"><img src="https://scontent.fceb1-3.fna.fbcdn.net/v/t39.30808-6/497573675_713563664663296_5048260196671011402_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeGYh5TKhGHqgAR2WVriyaqGH3GkDzE_RNkfcaQPMT9E2UfLv8PgB7zTNc4YdVB8nFkFD0EgodqOPXuN41jI7rKQ&_nc_ohc=ThBiDKdvxdQQ7kNvwGLlqDE&_nc_oc=Adl9Two9aVFBe7-_eRDb3ncBsOutV6L6TCbKItviAfc6cjyaqCDSLvc1MybvMkE6yY483uSpliOhfiysEuiRUC4f&_nc_zt=23&_nc_ht=scontent.fceb1-3.fna&_nc_gid=glmnVnAW4xZ11Bm2T8kjBw&oh=00_AflronWO7_2r1N5Y5QUbeEV2ph-Nke8RYhq7nlR09aqSFQ&oe=69402537"></div>

        <div class="photo"><img src="https://scontent.fceb1-4.fna.fbcdn.net/v/t39.30808-6/491410479_694786069874389_6838476958736854724_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHInEKjNiDWReWZvycAnrHBp5hlUahce6ynmGVRqFx7rDVE418cqImbkAQSesFbS9X7eUxcDBSOCwlPpve-Afc3&_nc_ohc=yFWPUuscY2AQ7kNvwHmDbNt&_nc_oc=AdlmXwXnWL98MOjcQEl8d7vDjg3vWOL0_bydNVRmnQvjMl_hlkrUIJRF93ucb6LcERHXYBc33s9F0cDcoiMk-lqE&_nc_zt=23&_nc_ht=scontent.fceb1-4.fna&_nc_gid=Hn7xFmT8uIKVFyC3kMpn1Q&oh=00_Afl7Np0tjJyA-jchql6D3C6NS4AML7IcC9CDm6VUB6wO4Q&oe=694033AC"></div>

        <div class="photo"><img src="https://scontent.fceb1-1.fna.fbcdn.net/v/t39.30808-6/586236039_865610569458604_9002361482853460843_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFz4A-gbF9GjeYmfcIR4TflKdWHGps6xxUp1YcamzrHFbIjvUdLZhN7iEhn5zKyAgUmSPa_RtO_ADwfpU14tP2X&_nc_ohc=mKpZh1mdb-UQ7kNvwExSuU9&_nc_oc=Admp9WgMJ-XKhUcT3zgkOF7tX5CHNXjWunhnzaoJ5y1XFJUvXuyR3WZRkJgJcwg-zfiwMqQRWk3mclS5MuwQPBxd&_nc_zt=23&_nc_ht=scontent.fceb1-1.fna&_nc_gid=cwcFrcMlKRCM_SijERac-A&oh=00_AflUJqn5ijQzr_jWiqG1xMALq6016RYTmsuPYTvaKM3Tdw&oe=69402916"></div>
    </div>
</section>

<!-- ABOUT -->
<section id="about">
    <h2>About Me</h2>
    <p>Hi, I’m Virgil Ombayan. I'm a breeder, gaffer, and entrepreneur. I believe in the power of visuals to tell stories and create connections.</p>
</section>

<!-- CONTACT -->
<section id="contact">
    <h2>Contact Info</h2>
    <p>Feel free to reach out:</p>
    <ul>
        <li>Email: <a href="mailto:virgilombayan081@gmail.com">virgilombayan081@gmail.com</a></li>
        <li>Phone: 09361666273</li>
        <li>Facebook: <a href="#" target="_blank">Gil Ombayan</a></li>
    </ul>
</section>

<footer>
    <p>© 2025 My Portfolio</p>
</footer>

</body>
</html>
