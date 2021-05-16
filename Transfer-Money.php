<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Transfer Money</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Transfer-Money.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.14.0, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Banking",
      "url": "index.php",
      "logo": "images/bank-getty.jpg"
    }
  </script>

</head>

<body class="u-body">
  <?php
  include 'config.php';
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  ?>
  <header class="u-clearfix u-gradient u-header u-header" id="sec-1c97">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="Home.php" class="u-image u-logo u-image-1" data-image-width="1200" data-image-height="900">
        <img src="images/bank-getty.jpg" class="u-logo-image u-logo-image-1" data-image-width="64">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </symbol>
              </defs>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 12px;">Home</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Create-user.php" style="padding: 10px 12px;">Create user</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Transfer-Money.php" style="padding: 10px 12px;">Transfer Money</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Transaction-history.php" style="padding: 10px 12px;">Transaction history</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php" style="padding: 10px 12px;">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Create-user.php" style="padding: 10px 12px;">Create user</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Transfer-Money.php" style="padding: 10px 12px;">Transfer Money</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Transaction-history.php" style="padding: 10px 12px;">Transaction history</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <section class="u-clearfix u-gradient u-section-1" id="sec-c79c">
    <center>
      <h4>Transfer Money</h4>
    </center>
    <center>
      <div class="u-clearfix u-sheet u-sheet-1 ">
        <div class="table-responsive-sm">
          <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
            <thead style=" color : black;">
              <tr>
                <th style=" padding:10px" scope="col" class="text-center py-2">Id</th>
                <th scope="col" class="text-center py-2">Name</th>
                <th scope="col" class="text-center py-2">E-Mail</th>
                <th scope="col" class="text-center py-2">Balance</th>
                <th scope="col" class="text-center py-2">Operation</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($rows = mysqli_fetch_assoc($result)) {
              ?>
                <tr style="color : black;">
                  <td class="py-2"><?php echo $rows['id'] ?></td>
                  <td class="py-2"><?php echo $rows['name'] ?></td>
                  <td class="py-2"><?php echo $rows['email'] ?></td>
                  <td class="py-2"><?php echo $rows['balance'] ?></td>
                  <td><a href="user.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn" style="background-color:aquamarine;">Transfer</button></a></td>
                </tr>
              <?php
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </center>
  </section>


  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-2291">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1">Sparks foundation &copy Aditya 2021</p>
    </div>
  </footer>
</body>

</html>