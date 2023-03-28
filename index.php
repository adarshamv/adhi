<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
        <nav> 
            <a href="index.php">
            <div class="logo">
                <img src="assets/logo.jfif"  alt="">
            </div>
            </a>
            <button type="button" class="btn-hamburger" data-action="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item"><a href="staff.php">Faculty</a></li>
                <li class="nav-item"><a href="#">Work</a></li>
                <li class="nav-item dropdown">
                    <a href="#" data-action="dropdown-toggle">Login</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="admin_login.php">Admin_Login</a>
                        <a class="dropdown-item" href="emp_login.php">EMP_Login</a>
    
                    </div>
                </li>
            </ul>
        </nav>
    
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="img.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <script>
        let nav = document.querySelector('nav');
        let dropdown = nav.querySelector('.dropdown');
        let dropdownToggle = nav.querySelector("[data-action='dropdown-toggle']");
        let navToggle = nav.querySelector("[data-action='nav-toggle']");
    
        dropdownToggle.addEventListener('click', () => {
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
            } else {
                dropdown.classList.add('show');
            }
        })
    
        navToggle.addEventListener('click', () => {
            if (nav.classList.contains('opened')) {
                nav.classList.remove('opened');
            } else {
                nav.classList.add('opened');
            }
        })
    </script>
</body>
</html>