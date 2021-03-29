<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="assets/css/styles.css">

	<!-- =====BOX ICONS===== -->
	<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

	<title>My Diary</title>
</head>
<style>
            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        .nav-item a {
                color: #ff9aa2;
                }
        .nav-link::after{
                content: '';
                display: block;
                width: 0;
                height: 2px;
                background-color: #ff9aa2;
                transition: width .3s
        }

        .nav-link:hover::after{
                width: 100%;
                transition: width .3s;

        }


   
</style>
<body>
	<!--===== HEADER =====-->
	<header class="l-header">
		<nav class="nav bd-grid">
			<div>
				<a href="#" class="nav__logo">My Diary</a>
			</div>

			<div class="nav__menu" id="nav-menu">
				<ul class="nav__list">
					<li class="nav__item"><a href="index.php#home" class="nav__link">Home</a></li>
					<li class="nav__item"><a href="index.php#about" class="nav__link">About</a></li>

					<li class="nav__item"><a href="index.php#services" class="nav__link">Creators</a></li>
					<li class="nav__item"><a href="login.php" class="nav__link">Login</a></li>
                    <li class="nav__item"><a href="signup.php" class="nav__link">Sign Up</a></li>

				</ul>
			</div>

			<div class="nav__toggle" id="nav-toggle">
				<i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
        <pre>
            



            
        </pre>
            

        

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        
        <script src="assets/js/main.js"></script>
    </body>
</html>