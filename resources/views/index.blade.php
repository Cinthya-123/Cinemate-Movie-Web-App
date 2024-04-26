<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinemate</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
               <p>cinemate</p>
            </div>
            <ul>
                <li><a href="#" onclick="setActiveMenu(this,'home')">Home</a></li>
                <li><a href="#" onclick="setActiveMenu(this,'now-playing')">Now Playing</a></li>
                <li><a href="#" onclick="setActiveMenu(this,'popular')">Popular</a></li>
                <li><a href="#" onclick="setActiveMenu(this,'top-rated')">Top Rated</a></li>
                <li><a href="#" onclick="setActiveMenu(this,'trending')">Trending</a></li>
                <li class="right">
                    <form action="#" id="form">
                        <input type="text" id="search" class="search" placeholder="search movie">
                    </form>
                </li>
            </ul>
            <button class="hamburger" onclick="toggleMenu()">&#9776;</button>
        </nav>
    </header>
    <main id="main"></main>
    <footer>
        <div> Copyright &copy; Porto by Devy - 2024 </div>
    </footer>
    <script src="assets/js/script.js"></script>
</body>
</html>