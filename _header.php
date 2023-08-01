<!DOCTYPE html>
<html lang="ru" translate="yes">
   <head>
      <meta charset="UTF-8">
      <title>Libermall - NFT Marketplace</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="format-detection" content="telephone=no">
      <meta name="google" content="translate">
      <link rel="apple-touch-icon" sizes="57x57" href="./assets/img/logo/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="./assets/img/logo/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="./assets/img/logo/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logo/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="./assets/img/logo/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="./assets/img/logo/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="./assets/img/logo/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="./assets/img/logo/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/logo/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192" href="./assets/img/logo/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/logo/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="./assets/img/logo/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/logo/favicon-16x16.png">
      <link rel="manifest" href="/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="./assets/img/logo/apple-icon-114x114.png">
      <meta name="theme-color" content="#050b1c">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, viewport-fit=cover">
      <meta property="og:site_name" content="Libermall" />
      <meta property="og:title" content="Libermall" />
      <meta property="og:description" content="The easiest way to store, send, and receive Toncoin on The Open Network" />
      <meta property="og:image" content="/img/libermall-preview.png" />
      <meta property="og:url" content="https://Libermall.com" />
      <meta name="twitter:title" content="Libermall">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:image" content="/wallet-preview.png" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700;900&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/assets/libs/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="/assets/libs/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="/assets/css/app.min.css?v=<?=time()?>">
      <?php if($_SERVER['REQUEST_URI'] == '/') { ?>
      <link rel="stylesheet" href="/assets/css/slick-theme.css?v=<?=time()?>">
      <link rel="stylesheet" href="/assets/css/slick.css?v=<?=time()?>">
      <?php } ?>
   </head>
   <body>
      <!-- Start of header section
         ============================================= -->   
      <header class="header">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg d-flex align-items-center p-0">
               <a class="navbar-logo me-5" href="/">
               <img class="navbar-logo__img" src="./assets/img/logo/apple-icon-57x57.png" alt="Libermall - NFT Marketplace">
               <span class="navbar-logo__name d-none d-xxl-block">Libermall</span>
               </a>
               <button class="navbar-toggler btn btn-secondary order-2 order-xl-1 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fa-regular fa-bars fs-20"></i>
               </button>
               <div class="collapse navbar-collapse " id="navbarHeader">
                  <form class="header__search flex-fill d-block d-lg-none d-xl-block mx-0 mx-lg-5 mb-3 mb-lg-0 order-1 order-lg-2">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-text p-0">
                           <button class="btn" type="submit">
                           <i class="fa-solid fa-magnifying-glass color-grey"></i>
                           </button>
                        </div>
                     </div>
                  </form>
                  <div class="dropdown order-4 order-lg-1">
                     <button class="btn btn-primary d-flex flex-nowrap align-items-center" type="button" id="dropdownMenuCat" data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="fa-regular fa-grid-2 me-2"></i> 
                     Explore
                     </button>
                     <ul class="dropdown-menu animate slideIn mt-3" aria-labelledby="dropdownMenuCat">
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-hexagon-vertical-nft-slanted me-3"></i>All NFTs</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-hexagon-image me-3"></i>Solanas</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-paintbrush-fine me-3"></i>Art</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-rabbit me-3"></i>Collectibles</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-server me-3"></i>Domain Names</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-music me-3"></i>Music</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-camera me-3"></i>Photography</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-futbol me-3"></i>Sports</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-heart-circle-bolt me-3"></i>Trading Cards</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-money-bills-simple me-3"></i>Utility</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-vr-cardboard me-3"></i>Virtual Worlds</a></li>
                     </ul>
                  </div>
                  <ul class="navbar-nav d-flex flex-row py-4 py-lg-0 ms-0 ms-lg-auto pe-5 order-2 order-lg-3">
                     <li class="nav-item">
                        <a class="nav-link" href="#">Stats</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Resources</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Create</a>
                     </li>
                  </ul>
                  <?php if($_SERVER['REQUEST_URI'] == '/') { ?>
                  <button type="button" class="btn btn-soft d-flex flex-nowrap align-items-center btn-mobile-fixed order-3 order-lg-4" data-bs-toggle="modal" data-bs-target="#ConnectModal">
                  <i class="fa-regular fa-arrow-right-to-arc me-2"></i>
                  Connect
                  </button>
                  <?php } else { ?>
                  <div class="dropdown dropstart order-3 order-lg-4">
                     <button type="button" id="dropdownMenuProfile" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="/assets/img/user-1.svg" alt="" class="rounded-circle profile-image" width="42" height="42">
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuProfile">
                        <li><a class="dropdown-item" href="/my-profile.php"><i class="fa-regular fa-user me-3"></i>Profile</a></li>
                        <li><a class="dropdown-item" href="/create-nft.php"><i class="fa-regular fa-hexagon-vertical-nft me-3"></i>Create NFT</a></li>
                        <li><a class="dropdown-item border-0" href="#"><i class="fa-regular fa-link-simple-slash me-3"></i>Disconnect</a></li>
                     </ul>
                  </div>
                  <?php } ?>
               </div>
         </div>
         </nav>
         </div>
      </header>
      <!-- End of header section
         ============================================= -->