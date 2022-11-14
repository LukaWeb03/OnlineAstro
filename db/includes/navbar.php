<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap5.min.css" rel="stylesheet" >
    <link href="assets/css/style.css" rel="stylesheet" >
</head>
<body>
    
</body>
</html>
<div class="bg-primary" style="background-color: #10133a !important;">
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="../index.html">OnlineAstro</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    
                    <?php if(!isset($_SESSION['authenticated'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <?php endif ?>

                    <?php if(isset($_SESSION['authenticated'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <?php endif ?>
                    
                </ul>
            

                </div>
            </div>
            </nav>
        </div>
    </div>
</div>
</div>

