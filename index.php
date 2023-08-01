<?php
   require "_header.php";
   ?>
<main class="main-page">
   <!-- Start of Hero section
      ============================================= --> 
   <secrion class="hero section" id="hero">
      <div class="hero__container container-fluid carousel slide p-0" id="carouselHeroIndicators" data-bs-ride="carousel" data-bs-interval="false">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselHeroIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselHeroIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="row alight-items-center">
                  <div class="col-md-12 col-lg-9 col-xl-9 col-xxl-7 text-center text-md-start">
                     <h1 class="hero__title">
                        Discover the Exclusive <span class="d-block">NFT Collection</span>
                     </h1>
                     <div class="hero__desc">
                        Click My Collections and set up your collection. <br>
                        Add social links, a description, profile & banner images, <br> and set a secondary sales fee.
                     </div>
                     <a href="#!" class="btn btn-outline-primary">
                     <span>Learn more</span>
                     </a>
                  </div>
               </div>
               <picture>
                  <source srcset="./assets/img/hero-image-2.webp" type="image/webp">
                  <source srcset="./assets/img/hero-image-2.jpg" type="image/jpeg">
                  <img src="./assets/img/hero-image-2.jpg" alt="Libermall NFT Marketplace" class="hero__image">
               </picture>
            </div>
            <div class="carousel-item">
               <div class="row alight-items-center">
                  <div class="col-md-12 col-lg-9 col-xl-9 col-xxl-7 text-center text-md-start">
                     <h2 class="hero__title">
                        Discover the Exclusive <span class="d-block">NFT Collection</span>
                     </h2>
                     <div class="hero__desc">
                        Click My Collections and set up your collection.
                        <span class="d-inline d-lg-block">Add social links, a description, profile & banner images,</span> and set a secondary sales fee.
                     </div>
                     <a href="#!" class="btn btn-outline-primary">
                     <span>Learn more</span>
                     </a>
                  </div>
               </div>
               <picture>
                  <source srcset="./assets/img/hero-image.webp" type="image/webp">
                  <source srcset="./assets/img/hero-image.jpg" type="image/jpeg">
                  <img src="./assets/img/hero-image.jpg" alt="Libermall NFT Marketplace" loading="lazy" class="hero__image">
               </picture>
            </div>
         </div>
         <button class="carousel-control-prev  d-none d-lg-block" type="button" data-bs-target="#carouselHeroIndicators" data-bs-slide="prev">
         <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button class="carousel-control-next  d-none d-lg-block" type="button" data-bs-target="#carouselHeroIndicators" data-bs-slide="next">
         <i class="fa-solid fa-arrow-right"></i>
         </button>
      </div>
   </secrion>
   <!-- End of Hero section
      ============================================= -->
   <!-- Start of Discover section
      ============================================= -->   
   <section class="discover section pt-150" id="discover">
      <div class="discover__container container-fluid text-center">
         <h2 class="section__title mb-3">
            Discover, Collect and sell <span class="color-yellow">extraordinary NFTs</span>
         </h2>
         <p class="section__desc mb-5">
            Libermall is the world's first and largest NFT marketplace
         </p>
         <div class="d-flex flex-wrap align-items-center justify-content-center">
            <a href="/explore.php" class="btn btn-primary m-3">
            Explore
            </a>
            <a href="#!" class="btn btn-outline-primary m-3">
            + Create
            </a>
         </div>
      </div>
   </section>
   <!-- End of Discover section
      ============================================= --> 
   <!-- Start of Libermall section
      ============================================= -->    
   <section class="libermall section" id="Libermall">
      <div class="libermall__container container-fluid">
         <h2 class="section__title mb-3">
            TON is in beta <span class="d-block d-md-inline">on Libermall</span>
         </h2>
         <div class="libermall__buttons d-flex align-items-center">
            <a href="#!" class="btn btn-dark">Explore</a>
            <div class="libermall__soclinks ms-5 d-none d-md-flex">
               <a href="#!" class="libermall__soclinks-item"><i class="fa-brands fa-telegram"></i></a>
               <a href="#!" class="libermall__soclinks-item"><i class="fa-brands fa-discord"></i></a>
               <a href="#!" class="libermall__soclinks-item"><i class="fa-brands fa-twitter"></i></a>
               <a href="#!" class="libermall__soclinks-item"><i class="fa-brands fa-instagram"></i></a>
            </div>
         </div>
      </div>
   </section>
   <!-- End of Libermall section
      ============================================= -->  
   <!-- Start of Notable section
      ============================================= -->    
   <section class="notable section" id="notable">
      <div class="notable__container container-fluid">
      <div class="notable__head">
         <h2 class="section__title mb-5">
            Notable <span class="color-yellow">drops</span>
         </h2>
      </div>
      <div class="notable-slider pt-3">
         <a href="/collection.php" class="card card-gradient top-effect" title="MetaPack">
            <div class="card__bage color-yellow text-uppercase">
               <i class="fa-solid fa-fire-flame-curved me-1"></i>
               Live
            </div>
            <picture>
               <source srcset="./assets/img/nft/nft-1.webp" type="image/webp">
               <source srcset="./assets/img/nft/nft-1.jpg" type="image/jpeg">
               <img src="./assets/img/nft/nft-1.jpg" class="rounded card-img" loading="lazy" width="300" height="390" alt="MetaPack">
            </picture>
            <div class="card-body">
               <h3 class="fs-20 my-3">MetaPack</h3>
               <p class="d-flex align-items-center mb-0 color-grey">
                  <span class="icon-ton me-2"></span>
                  floor price: 0.5
               </p>
            </div>
         </a>
         <a href="/collection.php" class="card card-gradient top-effect" title="Ragnarok">
            <div class="card__bage color-yellow text-uppercase">
               <i class="fa-solid fa-fire-flame-curved me-1"></i>
               Live
            </div>
            <picture>
               <source srcset="./assets/img/nft/nft-2.webp" type="image/webp">
               <source srcset="./assets/img/nft/nft-2.jpg" type="image/jpeg">
               <img src="./assets/img/nft/nft-2.jpg" class="rounded card-img" loading="lazy" width="300" height="390" alt="Ragnarok">
            </picture>
            <div class="card-body">
               <h3 class="fs-20 my-3">Ragnarok</h3>
               <p class="d-flex align-items-center mb-0 color-grey">
                  <span class="icon-ton me-2"></span>
                  floor price: 0.5
               </p>
            </div>
         </a>
         <a href="/collection.php" class="card card-gradient top-effect" title="Sneaker Heads">
            <div class="card__bage color-yellow text-uppercase">
               <i class="fa-solid fa-fire-flame-curved me-1"></i>
               Live
            </div>
            <picture>
               <source srcset="./assets/img/nft/nft-3.webp" type="image/webp">
               <source srcset="./assets/img/nft/nft-3.jpg" type="image/jpeg">
               <img src="./assets/img/nft/nft-3.jpg" class="rounded card-img" loading="lazy" width="300" height="390" alt="Sneaker Heads">
            </picture>
            <div class="card-body">
               <h3 class="fs-20 my-3">Sneaker Heads</h3>
               <p class="d-flex align-items-center mb-0 color-grey">
                  <span class="icon-ton me-2"></span>
                  floor price: 0.5
               </p>
            </div>
         </a>
         <a href="#!" class="card card-gradient top-effect" title="Relationship">
            <div class="card__bage color-yellow text-uppercase">
               <i class="fa-solid fa-fire-flame-curved me-1"></i>
               Live
            </div>
            <picture>
               <source srcset="./assets/img/nft/nft-4.webp" type="image/webp">
               <source srcset="./assets/img/nft/nft-4.jpg" type="image/jpeg">
               <img src="./assets/img/nft/nft-4.jpg" class="rounded card-img" loading="lazy" width="300" height="390" alt="Ragnarok">
            </picture>
            <div class="card-body">
               <h3 class="fs-20 my-3">Relationship</h3>
               <p class="d-flex align-items-center mb-0 color-grey">
                  <span class="icon-ton me-2"></span>
                  floor price: 0.5
               </p>
            </div>
         </a>
         <a href="/collection.php" class="card card-gradient top-effect" title="The Foundation">
            <div class="card__bage color-yellow text-uppercase">
               <i class="fa-solid fa-fire-flame-curved me-1"></i>
               Live
            </div>
            <picture>
               <source srcset="./assets/img/nft/nft-5.webp" type="image/webp">
               <source srcset="./assets/img/nft/nft-5.jpg" type="image/jpeg">
               <img src="./assets/img/nft/nft-5.jpg" class="rounded card-img" loading="lazy" width="300" height="390" alt="Ragnarok">
            </picture>
            <div class="card-body">
               <h3 class="fs-20 my-3">The Foundation</h3>
               <p class="d-flex align-items-center mb-0 color-grey">
                  <span class="icon-ton me-2"></span>
                  floor price: 0.5
               </p>
            </div>
         </a>
         <a href="/collection.php" class="card card-gradient top-effect" title="Sneaker Heads">
            <div class="card__bage color-yellow text-uppercase">
               <i class="fa-solid fa-fire-flame-curved me-1"></i>
               Live
            </div>
            <picture>
               <source srcset="./assets/img/nft/nft-6.webp" type="image/webp">
               <source srcset="./assets/img/nft/nft-6.jpg" type="image/jpeg">
               <img src="./assets/img/nft/nft-6.jpg" class="rounded card-img" loading="lazy" width="300" height="390" alt="Sneaker Heads">
            </picture>
            <div class="card-body">
               <h3 class="fs-20 my-3">Sneaker Heads</h3>
               <p class="d-flex align-items-center mb-0 color-grey">
                  <span class="icon-ton me-2"></span>
                  floor price: 0.5
               </p>
            </div>
         </a>
      </div>
   </section>
   <!-- End of Notable section
      ============================================= -->
   <!-- Start of Collections section
      ============================================= -->   
   <section class="collections section">
      <div class="collection__container container-fluid">
         <div class="d-block d-sm-flex align-items-center mb-56">
            <h2 class="section__title mb-0">Top <span class="color-yellow">collections</span></h2>
            <div class="dropdown mt-4 mt-sm-0 ms-0 ms-sm-auto">
               <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
               Last 24 hours 
               </a>
               <ul class="dropdown-menu animate slideIn mt-5" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="#">1 Day</a></li>
                  <li><a class="dropdown-item" href="#">3 Days</a></li>
                  <li><a class="dropdown-item" href="#">7 days</a></li>
               </ul>
            </div>
         </div>
         <div class="row pt-3">
            <div class="col-sm-6 col-xxl-4">
               <a href="#!" class="d-block" title="Mutant Ape Yach ClubMutant">
                  <div class="card d-flex flex-lg-row align-items-center p-3 p-xl-4 rounded-20 mb-4">
                     <div class="collection__picbox position-relative me-4 mb-4 mb-lg-0">
                        <picture>
                           <source srcset="./assets/img/collections/img-1.webp" type="image/webp">
                           <source srcset="./assets/img/collections/img-1.jpg" type="image/jpeg">
                           <img src="./assets/img/collections/img-1.jpg" class="image-80x80 rounded-circle" loading="lazy" width="80" height="80" alt="Mutant Ape Yach ClubMutant">
                        </picture>
                        <i class="fa-solid fa-circle-check fs-22 color-yellow position-absolute bottom-0" style="right: -4%;"></i>
                     </div>
                     <div class="collection__body mb-3 mb-lg-0">
                        <h4 class="fs-20 mb-3 text-truncate" style="max-width: 224px">Mutant Ape Yach ClubMutant</h4>
                        <p class="mb-0 color-grey text-center text-lg-start">
                           Floor: <span class="ms-1 text-uppercase">3,02 TON</span>
                        </p>
                     </div>
                     <div class="collection__info d-flex d-lg-block text-center text-lg-end ms-0 ms-lg-auto">
                        <div class="fw-medium text-uppercase text-white mb-3 me-3 me-lg-0">3.8k TON</div>
                        <div class="fw-medium color-grey">
                           $2.68M 
                           <span class="color-green ms-2">+8.84%</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-sm-6 col-xxl-4">
               <a href="#!" class="d-block" title="Gossamer Seed">
                  <div class="card d-flex flex-lg-row align-items-center p-3 p-xl-4 rounded-20 mb-4">
                     <div class="collection__picbox position-relative me-4 mb-4 mb-lg-0">
                        <picture>
                           <source srcset="./assets/img/collections/img-2.webp" type="image/webp">
                           <source srcset="./assets/img/collections/img-2.jpg" type="image/jpeg">
                           <img src="./assets/img/collections/img-2.jpg" class="image-80x80 rounded-circle" loading="lazy" width="80" height="80" alt="Mutant Ape Yach ClubMutant">
                        </picture>
                        <i class="fa-solid fa-circle-check fs-22 color-yellow position-absolute bottom-0" style="right: -4%;"></i>
                     </div>
                     <div class="collection__body mb-3 mb-lg-0">
                        <h4 class="fs-20 mb-3 text-truncate" style="max-width: 224px">Gossamer Seed</h4>
                        <p class="mb-0 color-grey text-center text-lg-start">
                           Floor: <span class="ms-1 text-uppercase">3,02 TON</span>
                        </p>
                     </div>
                     <div class="collection__info d-flex d-lg-block text-center text-lg-end ms-0 ms-lg-auto">
                        <div class="fw-medium text-uppercase text-white mb-3 me-3 me-lg-0">3.8k TON</div>
                        <div class="fw-medium color-grey">
                           $2.68M <span class="color-green ms-2">+8.84%</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-sm-6 col-xxl-4">
               <a href="#!" class="d-block" title="ENS: Ethereum Name...">
                  <div class="card d-flex flex-lg-row align-items-center p-3 p-xl-4 rounded-20 mb-4">
                     <div class="collection__picbox position-relative me-4 mb-4 mb-lg-0">
                        <picture>
                           <source srcset="./assets/img/collections/img-3.webp" type="image/webp">
                           <source srcset="./assets/img/collections/img-3.jpg" type="image/jpeg">
                           <img src="./assets/img/collections/img-3.jpg" class="image-80x80 rounded-circle" loading="lazy" width="80" height="80" alt="Mutant Ape Yach ClubMutant">
                        </picture>
                        <i class="fa-solid fa-circle-check fs-22 color-yellow position-absolute bottom-0" style="right: -4%;"></i>
                     </div>
                     <div class="collection__body mb-3 mb-lg-0">
                        <h4 class="fs-20 mb-3 text-truncate" style="max-width: 224px">ENS: Ethereum Name...</h4>
                        <p class="mb-0 color-grey text-center text-lg-start">
                           Floor: <span class="ms-1 text-uppercase">3,02 TON</span>
                        </p>
                     </div>
                     <div class="collection__info d-flex d-lg-block text-center text-lg-end ms-0 ms-lg-auto">
                        <div class="fw-medium text-uppercase text-white mb-3 me-3 me-lg-0">3.8k TON</div>
                        <div class="fw-medium color-grey">
                           $2.68M <span class="color-green ms-2">+8.84%</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-sm-6 col-xxl-4">
               <a href="#!" class="d-block" title="Bored Ape Yacht Club">
                  <div class="card d-flex flex-lg-row align-items-center p-3 p-xl-4 rounded-20 mb-4">
                     <div class="collection__picbox position-relative me-4 mb-4 mb-lg-0">
                        <picture>
                           <source srcset="./assets/img/collections/img-4.webp" type="image/webp">
                           <source srcset="./assets/img/collections/img-4.jpg" type="image/jpeg">
                           <img src="./assets/img/collections/img-4.jpg" class="image-80x80 rounded-circle" loading="lazy" width="80" height="80" alt="Mutant Ape Yach ClubMutant">
                        </picture>
                        <i class="fa-solid fa-circle-check fs-22 color-yellow position-absolute bottom-0" style="right: -4%;"></i>
                     </div>
                     <div class="collection__body mb-3 mb-lg-0">
                        <h4 class="fs-20 mb-3 text-truncate" style="max-width: 224px">Bored Ape Yacht Club</h4>
                        <p class="mb-0 color-grey text-center text-lg-start">
                           Floor: <span class="ms-1 text-uppercase">3,02 TON</span>
                        </p>
                     </div>
                     <div class="collection__info d-flex d-lg-block text-center text-lg-end ms-0 ms-lg-auto">
                        <div class="fw-medium text-uppercase text-white mb-3 me-3 me-lg-0">3.8k TON</div>
                        <div class="fw-medium color-grey">
                           $2.68M <span class="color-green ms-2">+8.84%</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-sm-6 col-xxl-4">
               <a href="#!" class="d-block" title="Mutant Ape Yach Club">
                  <div class="card d-flex flex-lg-row align-items-center p-3 p-xl-4 rounded-20 mb-4">
                     <div class="collection__picbox position-relative me-4 mb-4 mb-lg-0">
                        <picture>
                           <source srcset="./assets/img/collections/img-5.webp" type="image/webp">
                           <source srcset="./assets/img/collections/img-5.jpg" type="image/jpeg">
                           <img src="./assets/img/collections/img-5.jpg" class="image-80x80 rounded-circle" loading="lazy" width="80" height="80" alt="Mutant Ape Yach ClubMutant">
                        </picture>
                        <i class="fa-solid fa-circle-check fs-22 color-yellow position-absolute bottom-0" style="right: -4%;"></i>
                     </div>
                     <div class="collection__body mb-3 mb-lg-0">
                        <h4 class="fs-20 mb-3 text-truncate" style="max-width: 224px">Mutant Ape Yach Club</h4>
                        <p class="mb-0 color-grey text-center text-lg-start">
                           Floor: <span class="ms-1 text-uppercase">3,02 TON</span>
                        </p>
                     </div>
                     <div class="collection__info d-flex d-lg-block text-center text-lg-end ms-0 ms-lg-auto">
                        <div class="fw-medium text-uppercase text-white mb-3 me-3 me-lg-0">3.8k TON</div>
                        <div class="fw-medium color-grey">
                           $2.68M <span class="color-green ms-2">+8.84%</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-sm-6 col-xxl-4 d-none d-md-block">
               <a href="#!" class="d-block" title="Art Blocks Curated">
                  <div class="card d-flex flex-lg-row align-items-center p-3 p-xl-4 rounded-20 mb-4">
                     <div class="collection__picbox position-relative me-4 mb-4 mb-lg-0">
                        <picture>
                           <source srcset="./assets/img/collections/img-6.webp" type="image/webp">
                           <source srcset="./assets/img/collections/img-6.jpg" type="image/jpeg">
                           <img src="./assets/img/collections/img-6.jpg" class="image-80x80 rounded-circle" loading="lazy" width="80" height="80" alt="Mutant Ape Yach ClubMutant">
                        </picture>
                        <i class="fa-solid fa-circle-check fs-22 color-yellow position-absolute bottom-0" style="right: -4%;"></i>
                     </div>
                     <div class="collection__body mb-3 mb-lg-0">
                        <h4 class="fs-20 mb-3 text-truncate" style="max-width: 224px">Art Blocks Curated</h4>
                        <p class="mb-0 color-grey text-center text-lg-start">
                           Floor: <span class="ms-1 text-uppercase">3,02 TON</span>
                        </p>
                     </div>
                     <div class="collection__info d-flex d-lg-block text-center text-lg-end ms-0 ms-lg-auto">
                        <div class="fw-medium text-uppercase text-white mb-3 me-3 me-lg-0">3.8k TON</div>
                        <div class="fw-medium color-grey">
                           $2.68M <span class="color-green ms-2">+8.84%</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-sm-6 col-xxl-4 d-none d-md-block">
               <a href="#!" class="d-block" title="Moonrunners Official">
                  <div class="card d-flex flex-lg-row align-items-center p-3 p-xl-4 rounded-20 mb-4">
                     <div class="collection__picbox position-relative me-4 mb-4 mb-lg-0">
                        <picture>
                           <source srcset="./assets/img/collections/img-7.webp" type="image/webp">
                           <source srcset="./assets/img/collections/img-7.jpg" type="image/jpeg">
                           <img src="./assets/img/collections/img-7.jpg" class="image-80x80 rounded-circle" loading="lazy" width="80" height="80" alt="Mutant Ape Yach ClubMutant">
                        </picture>
                        <i class="fa-solid fa-circle-check fs-22 color-yellow position-absolute bottom-0" style="right: -4%;"></i>
                     </div>
                     <div class="collection__body mb-3 mb-lg-0">
                        <h4 class="fs-20 mb-3 text-truncate" style="max-width: 224px">Moonrunners Official</h4>
                        <p class="mb-0 color-grey text-center text-lg-start">
                           Floor: <span class="ms-1 text-uppercase">3,02 TON</span>
                        </p>
                     </div>
                     <div class="collection__info d-flex d-lg-block text-center text-lg-end ms-0 ms-lg-auto">
                        <div class="fw-medium text-uppercase text-white mb-3 me-3 me-lg-0">3.8k TON</div>
                        <div class="fw-medium color-grey">
                           $2.68M <span class="color-green ms-2">+8.84%</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-sm-6 col-xxl-4 d-none d-md-block">
               <a href="#!" class="d-block" title="Cyber Galz - Galz">
                  <div class="card d-flex flex-lg-row align-items-center p-3 p-xl-4 rounded-20 mb-4">
                     <div class="collection__picbox position-relative me-4 mb-4 mb-lg-0">
                        <picture>
                           <source srcset="./assets/img/collections/img-8.webp" type="image/webp">
                           <source srcset="./assets/img/collections/img-8.jpg" type="image/jpeg">
                           <img src="./assets/img/collections/img-8.jpg" class="image-80x80 rounded-circle" loading="lazy" width="80" height="80" alt="Mutant Ape Yach ClubMutant">
                        </picture>
                        <i class="fa-solid fa-circle-check fs-22 color-yellow position-absolute bottom-0" style="right: -4%;"></i>
                     </div>
                     <div class="collection__body mb-3 mb-lg-0">
                        <h4 class="fs-20 mb-3 text-truncate" style="max-width: 224px">Cyber Galz - Galz</h4>
                        <p class="mb-0 color-grey text-center text-lg-start">
                           Floor: <span class="ms-1 text-uppercase">3,02 TON</span>
                        </p>
                     </div>
                     <div class="collection__info d-flex d-lg-block text-center text-lg-end ms-0 ms-lg-auto">
                        <div class="fw-medium text-uppercase text-white mb-3 me-3 me-lg-0">3.8k TON</div>
                        <div class="fw-medium color-grey">
                           $2.68M <span class="color-green ms-2">+8.84%</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-sm-6 col-xxl-4 d-none d-lg-block">
               <a href="#!" class="d-block" title="ENS: Ethereum Name...">
                  <div class="card d-flex flex-lg-row align-items-center p-3 p-xl-4 rounded-20 mb-4">
                     <div class="collection__picbox position-relative me-4 mb-4 mb-lg-0">
                        <picture>
                           <source srcset="./assets/img/collections/img-9.webp" type="image/webp">
                           <source srcset="./assets/img/collections/img-9.jpg" type="image/jpeg">
                           <img src="./assets/img/collections/img-9.jpg" class="image-80x80 rounded-circle" loading="lazy" width="80" height="80" alt="Mutant Ape Yach ClubMutant">
                        </picture>
                        <i class="fa-solid fa-circle-check fs-22 color-yellow position-absolute bottom-0" style="right: -4%;"></i>
                     </div>
                     <div class="collection__body mb-3 mb-lg-0">
                        <h4 class="fs-20 mb-3 text-truncate" style="max-width: 224px">Moonturtlez</h4>
                        <p class="mb-0 color-grey text-center text-lg-start">
                           Floor: <span class="ms-1 text-uppercase">3,02 TON</span>
                        </p>
                     </div>
                     <div class="collection__info d-flex d-lg-block text-center text-lg-end ms-0 ms-lg-auto">
                        <div class="fw-medium text-uppercase text-white mb-3 me-3 me-lg-0">3.8k TON</div>
                        <div class="fw-medium color-grey">
                           $2.68M <span class="color-green ms-2">+8.84%</span>
                        </div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <div class="mt-5 text-center">
            <a href="#!" class="btn btn-primary">Go to ranking</a>
         </div>
      </div>
   </section>
   <!-- End of Collections section
      ============================================= -->
   <!-- Start of Create section
      ============================================= -->
   <section class="create section" id="create">
      <div class="create__container container-fluid position-relative">
         <h2 class="section__title">
            Create and sell <span class="color-yellow">your NFTs</span>
         </h2>
         <div class="d-flex flex-nowrap overflow-auto py-5" id="overflow-auto">
            <div class="create-card d-flex">
               <div class="create-card__icon d-none d-md-block">
                  <img src="./assets/img/create-card-1.png" alt="" class="create-card__img" width="100px" height="100px">
               </div>
               <div class="create-card__body ms-4">
                  <div class="create-card__num color-grey mb-3">
                     0<span class="color-yellow">1</span>
                  </div>
                  <h4 class="fs-24 mb-4">
                     Set up your wallet
                  </h4>
                  <p class="fs-18 color-grey mb-0">
                     Once you’ve set up your wallet of choice, connect it to Libermall by clicking the wallet icon in the top right corner. Learn about the wallets we support
                  </p>
               </div>
            </div>
            <div class="create-card d-flex">
               <div class="create-card__icon d-none d-md-block">
                  <img src="./assets/img/create-card-2.png" alt="" class="create-card__img" width="100px" height="100px">
               </div>
               <div class="create-card__body ms-4">
                  <div class="create-card__num color-grey mb-3">
                     0<span class="color-yellow">2</span>
                  </div>
                  <h4 class="fs-24 mb-4">
                     Create your collection
                  </h4>
                  <p class="fs-18 color-grey mb-0">
                     Once you’ve set up your wallet of choice, connect it to Libermall by clicking the wallet icon in the top right corner. Learn about the wallets we support
                  </p>
               </div>
            </div>
            <div class="create-card d-flex">
               <div class="create-card__icon d-none d-md-block">
                  <img src="./assets/img/create-card-3.png" alt="" class="create-card__img" width="90px" height="90px">
               </div>
               <div class="create-card__body ms-4">
                  <div class="create-card__num color-grey mb-3">
                     0<span class="color-yellow">3</span>
                  </div>
                  <h4 class="fs-24 mb-4">
                     Add your NFTs
                  </h4>
                  <p class="fs-18 color-grey mb-0">
                     Once you’ve set up your wallet of choice, connect it to Libermall by clicking the wallet icon in the top right corner. Learn about the wallets we support
                  </p>
               </div>
            </div>
            <div class="create-card d-flex">
               <div class="create-card__icon d-none d-md-block">
                  <img src="./assets/img/create-card-4.png" alt="" class="create-card__img" width="90px" height="90px">
               </div>
               <div class="create-card__body ms-4">
                  <div class="create-card__num color-grey mb-3">
                     0<span class="color-yellow">4</span>
                  </div>
                  <h4 class="fs-24 mb-4">
                     List them for sale
                  </h4>
                  <p class="fs-18 color-grey mb-0">
                     Once you’ve set up your wallet of choice, connect it to Libermall by clicking the wallet icon in the top right corner. Learn about the wallets we support
                  </p>
               </div>
            </div>
         </div>
         <div class="create-border"></div>
      </div>
   </section>
   <!-- End of Collections section
      ============================================= -->
   <!-- Start of Category section
      ============================================= -->   
   <section class="category section pt-150" id="category">
      <div class="category__container container-fluid">
         <div class="category__head">
            <h2 class="section__title">
               Browse <span class="color-yellow">by category</span> 
            </h2>
         </div>
         <div class="category-slider pt-3">
            <a href="/single-collection.php" class="card top-effect">
               <picture>
                  <source srcset="./assets/img/category/cat-1.webp" type="image/webp">
                  <source srcset="./assets/img/category/cat-1.jpg" type="image/jpeg">
                  <img src="./assets/img/category/cat-1.jpg" class="rounded image-300x300" loading="lazy" width="340" height="275" alt="Ragnarok">
               </picture>
               <div class="card-body text-center">
                  <h3 class="text-uppercase fs-18 mt-3 mb-0" style="letter-spacing: 1px;">Art</h3>
               </div>
            </a>
            <a href="/single-collection.php" class="card top-effect">
               <picture>
                  <source srcset="./assets/img/category/cat-2.webp" type="image/webp">
                  <source srcset="./assets/img/category/cat-2.jpg" type="image/jpeg">
                  <img src="./assets/img/category/cat-2.jpg" class="rounded image-300x300" loading="lazy" width="340" height="275" alt="Ragnarok">
               </picture>
               <div class="card-body text-center">
                  <h3 class="text-uppercase fs-18 mt-3 mb-0" style="letter-spacing: 1px;">Sports</h3>
               </div>
            </a>
            <a href="/single-collection.php" class="card top-effect">
               <picture>
                  <source srcset="./assets/img/category/cat-3.webp" type="image/webp">
                  <source srcset="./assets/img/category/cat-3.jpg" type="image/jpeg">
                  <img src="./assets/img/category/cat-3.jpg" class="rounded image-300x300" loading="lazy" width="340" height="275" alt="Ragnarok">
               </picture>
               <div class="card-body text-center">
                  <h3 class="text-uppercase fs-18 mt-3 mb-0" style="letter-spacing: 1px;">Collectibles</h3>
               </div>
            </a>
            <a href="/single-collection.php" class="card top-effect">
               <picture>
                  <source srcset="./assets/img/category/cat-4.webp" type="image/webp">
                  <source srcset="./assets/img/category/cat-4.jpg" type="image/jpeg">
                  <img src="./assets/img/category/cat-4.jpg" class="rounded image-300x300" loading="lazy" width="340" height="275" alt="Ragnarok">
               </picture>
               <div class="card-body text-center">
                  <h3 class="text-uppercase fs-18 mt-3 mb-0" style="letter-spacing: 1px;">Photography</h3>
               </div>
            </a>
            <a href="#!" class="d-block card top-effect">
               <picture>
                  <source srcset="./assets/img/category/cat-5.webp" type="image/webp">
                  <source srcset="./assets/img/category/cat-5.jpg" type="image/jpeg">
                  <img src="./assets/img/category/cat-5.jpg" class="rounded image-300x300" loading="lazy" width="340" height="275" alt="Ragnarok">
               </picture>
               <div class="card-body text-center">
                  <h3 class="text-uppercase fs-18 mt-3 mb-0" style="letter-spacing: 1px;">Domain Name</h3>
               </div>
            </a>
            <a href="/single-collection.php" class="card top-effect">
               <picture>
                  <source srcset="./assets/img/category/cat-6.webp" type="image/webp">
                  <source srcset="./assets/img/category/cat-6.jpg" type="image/jpeg">
                  <img src="./assets/img/category/cat-6.jpg" class="rounded image-300x300" loading="lazy" width="340" height="275" alt="Ragnarok">
               </picture>
               <div class="card-body text-center">
                  <h3 class="text-uppercase fs-18 mt-3 mb-0" style="letter-spacing: 1px;">Music</h3>
               </div>
            </a>
         </div>
      </div>
   </section>
   <!-- End of Category section
      ============================================= -->  
</main>
<!-- End of Partners section
   ============================================= --> 
<?php
   require "_footer.php";
   ?>