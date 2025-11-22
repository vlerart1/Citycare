<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-light fixed-top p-0 shadow" style="background-color: #80d0c7;">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php">Citycare Services</a>

  <div class="ml-auto mr-3 dropdown">
    <button class="btn btn-outline-light dropdown-toggle" type="button" id="userMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenuButton" style="min-width: 200px;">
      <h6 class="dropdown-header">Logged in as:</h6>
      <div class="dropdown-item-text">
        <strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest'); ?><br/>
        <strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['user_email'] ?? 'Not logged in'); ?>
      </div>
    </div>
  </div>
 </nav>
