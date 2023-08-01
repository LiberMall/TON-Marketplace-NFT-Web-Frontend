<?php
   require "_header.php";
   ?>
<section class="nft-hero">
   <picture>
      <source srcset="./assets/img/nft-hero.webp" type="image/webp">
      <source srcset="./assets/img/nft-hero.jpg" type="image/jpeg">
      <img src="./assets/img/nft-hero.jpg" class="nft-hero__image" loading="lazy" width="340" height="275" alt="Tegro Cat">
   </picture>
</section>
<main class="main-page">
   <section class="nfr-collection section pt-0">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-4 col-xl-4 col-xxl-3 mb-4 mb-lg-0">
               <!-- Start Collection Info -->
               <div class="card card-blur p-0 mt--100 mb-4">
                  <div class="card__share d-flex position-absolute" style="top: 8px; right: 8px">
                     <button class="btn btn-cube" type="button"><i class="fa-regular fa-share-nodes"></i></button>
                     <div class="dropdown">
                        <button class="btn btn-cube" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-ellipsis-stroke"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                           <li><a class="dropdown-item border-0" href="#">Report page</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="card-body p-4 p-lg-2 p-xl-3 p-xxl-4">
                     <div class="d-flex flex-column flex-md-row flex-lg-column align-items-center mb-5">
                        <div class="collection__image mb-4 mb-md-0 mb-lg-4 ms-auto ms-md-0 ms-lg-auto me-auto">
                           <img src="/assets/img/author/author-17.jpg" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="d-flex mx-0 mx-lg-auto">
                           <a href="#!" class="btn btn-sm btn-outline-primary">Subscribe</a>
                        </div>
                     </div>
                     <h1 class="collection__name fs-24 mb-4">
                        <span>TON NFT Tegro Cat</span>
                        <i class="fa-solid fa-circle-check fs-22 color-yellow ms-2"></i>
                     </h1>
                     <div class="collection__desc color-grey mb-4">
                        <p>
                           TON Tegro Cat are unique NFTs with cats created only for the TON network. <br>
                           Our TON NFT "Cats" is a community of 9,999 super-rare, artfully crafted, collectible cats. 
                        </p>
                        <p class="collection__desc color-grey">
                           Each Cat is an individual being. The collection was created by the TegroMoney team, the creators of the TGR token on The Open Network blockchain.
                        </p>
                        <a href="#!" class="collection__link text-white" target="__blank">
                        <i class="fa-regular fa-link-simple color-yellow me-2"></i>
                        boredapeyachtclub.com
                        </a>
                     </div>
                     <div class="libermall__soclinks">
                        <a href="#!" class="libermall__soclinks-item ms-0"><i class="fa-brands fa-telegram"></i></a>
                        <a href="#!" class="libermall__soclinks-item"><i class="fa-brands fa-discord"></i></a>
                        <a href="#!" class="libermall__soclinks-item"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#!" class="libermall__soclinks-item"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#!" class="libermall__soclinks-item"><i class="fa-brands fa-reddit-alien"></i></a>
                     </div>
                  </div>
                  <div class="card-footer text-center border-top px-5 py-3">
                     Created by <span class="color-yellow">Smircs</span>
                     <i class="fa-solid fa-circle-check color-yellow fs-14 ms-1"></i>
                  </div>
               </div>
               <!-- End Collection Info -->
               <!-- Start Collection Filters -->
               <?php
                  require "_collection-filters.php";
                  ?>
               <!-- End Collection Filters -->
            </div>
            <div class="col-lg-8 col-xl-8 col-xxl-9">
               <!-- Start Collection Stat -->
               <div class="card card-blur mb-4 overflow-auto" id="mouseScroll">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="card-blur__item p-4 border-end text-center">
                        <h5 class="text-uppercase fs-14 color-grey" style="letter-spacing: 1px;">floor</h5>
                        <p class="m-0 text-uppercase fw-medium" style="letter-spacing: 1px;">0.04 eTH</p>
                     </div>
                     <div class="card-blur__item p-4 border-end text-center">
                        <h5 class="text-uppercase fs-14 color-grey" style="letter-spacing: 1px;">volume</h5>
                        <p class="m-0 text-uppercase fw-medium" style="letter-spacing: 1px;">40.61 ETH</p>
                     </div>
                     <div class="card-blur__item p-4 border-end text-center">
                        <h5 class="text-uppercase fs-14 color-grey" style="letter-spacing: 1px;">Items</h5>
                        <p class="m-0 text-uppercase fw-medium" style="letter-spacing: 1px;">1.3K</p>
                     </div>
                     <div class="card-blur__item p-4 border-end text-center">
                        <h5 class="text-uppercase fs-14 color-grey" style="letter-spacing: 1px;">Owners</h5>
                        <p class="m-0 text-uppercase fw-medium" style="letter-spacing: 1px;">461</p>
                     </div>
                     <div class="card-blur__item p-4 border-end text-center">
                        <h5 class="text-uppercase fs-14 color-grey" style="letter-spacing: 1px;">Blockchain</h5>
                        <p class="m-0 text-uppercase fw-medium" style="letter-spacing: 1px;">TON Conin</p>
                     </div>
                     <div class="card-blur__item p-4 text-center">
                        <h5 class="text-uppercase fs-14 color-grey" style="letter-spacing: 1px;">address</h5>
                        <p class="m-0 text-uppercase fw-medium" style="letter-spacing: 1px;">0x15f...d860</p>
                     </div>
                  </div>
               </div>
               <!-- End Collection Stat -->
               <!-- Start Collection Tabs -->
               <div class="overflow-auto mobile__nav-bottom mb-2 px-2" id="mouseScroll">
                  <ul class="nav collections__nav list-unstyled d-flex flex-nowrap align-items-center" id="myTab" role="tablist">
                     <li class="collections__nav-item">
                        <button class="collections__nav-link d-flex align-items-center text-nowrap active" id="Owned-tab" data-bs-toggle="tab" data-bs-target="#Owned" type="button" role="tab" aria-controls="Owned" aria-selected="true">Items</button>
                     </li>
                     <li class="collections__nav-item">
                        <button class="collections__nav-link d-flex align-items-center text-nowrap" id="Activity-tab" data-bs-toggle="tab" data-bs-target="#Activity" type="button" role="tab" aria-controls="Activity" aria-selected="false">Activity</button>
                     </li>
                     <button class="btn btn-sm btn-secondary ms-auto d-flex align-items-center btn-filter" data-bs-toggle="collapse" href="#collapseFilters" role="button" aria-expanded="false" aria-controls="collapseFilters">
                     <i class="fa-regular fa-filter-list me-2"></i> Sort
                     </button>
                  </ul>
               </div>
               <div class="collections__filters collapse modified-collapse" id="collapseFilters">
                  <div class="d-block d-sm-flex flex-wrap align-items-center">
                     <div class="m-3">
                        <label class="color-grey mb-2">Category:</label>
                        <select class="form-select border" aria-label="Select Category">
                           <option selected>All</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="m-3">
                        <label class="color-grey mb-2">Properties:</label>
                        <select class="form-select border" aria-label="Select Category">
                           <option selected>All 354</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="m-3">
                        <label class="color-grey mb-2">Sale type:</label>
                        <select class="form-select border" aria-label="Select Category">
                           <option selected>All</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="m-3">
                        <label class="color-grey mb-2">Price range:</label>
                        <select class="form-select border" aria-label="Select Category">
                           <option selected>ETH 5 - 15</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="m-3 ms-xxl-auto">
                        <label class="color-grey mb-2">Sort:</label>
                        <select class="form-select border" aria-label="Select Category">
                           <option selected>Recently listed</option>
                           <option value="1">Price: low to high</option>
                           <option value="2">Price: high to low</option>
                           <option value="3">Auction ending soon</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="tab-content py-4" id="myTabContent">
                  <div class="tab-pane fade show active" id="Owned" role="tabpanel" aria-labelledby="Owned-tab">
                     <?php
                        require "_collection-list.php";
                        ?>
                  </div>
                  <div class="tab-pane fade" id="Activity" role="tabpanel" aria-labelledby="Activity-tab">
                     <?php
                        require "_activity-list.php";
                        ?>
                  </div>
               </div>
               <!-- End Collection Tabs -->
               <button type="button" class="btn btn-outline-secondary mt-3 w-100">LOAD MORE</button>
            </div>
         </div>
      </div>
   </section>
</main>
<?php
   require "_footer.php";
   ?>