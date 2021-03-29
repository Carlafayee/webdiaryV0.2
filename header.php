<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
  </head>
<!-- NAVBAR -->
  <style>
      
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

         body {
                background-image: url(assets/img/bg4.jpg);
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                padding-top: 50px;

              }

        #mainNav{
                background: #343a40;
                font-size: 18px;
                letter-spacing: -1px;
                font-family: 'Poppins', sans-serif;

                }
        .nav-item a {
                color: #ff9aa2;
                }
                li{
                padding-left:20px;
                padding-right:20px;
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

        .custom-toggler .navbar-toggler-icon {
              background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(255, 154, 162, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .custom-toggler.navbar-toggler {
              border-color: rgb(255, 154, 162);
            } 

        .danger{
          background-color:fff; !important

        }


        .danger:hover {
          background-color: #343a40;
          color: #ff9aa2;
      }

        a:hover {
          text-decoration: none;
        }

        @media screen and (min-width: 992px) {
                #mainNav {
                position: relative;
                }
              }
    </style>
<!-- NAVBAR CSS -->

<body>
  <!-- NAVBAR BODY -->
      <nav class="navbar navbar-expand-lg py-lg-4" id="mainNav">
         <div class="container-fluid">
        <a class="navbar-brand" style="color: #fff;">My Diary</a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon navbar-light"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbars">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="header.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="entries.php">My entries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="entryfin.php">Write new entry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="accountfin.php">Account</a>
            </li>
          </ul>

           <ul class="nav navbar-nav navbar-right">   
            <li class="nav-item">
            </li>
              <li style="align-content:center">
                  <button type="submit" class="btn danger"><a href="logout.php" style="color: red">Logout</a></button>
              </li>
          </ul>
        </div>
      </nav>
<!-- NAVBAR END -->
  </body>
</html>