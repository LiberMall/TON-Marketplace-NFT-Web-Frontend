<?php
   require "_header.php";
   ?>
<main class="main-page">
   <section class="item-details section pt-5">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-md-10 col-lg-12 col-xxl-9">
               <nav aria-label="breadcrumb">
                 <ol class="breadcrumb mb-5 ms-3">
                   <li class="breadcrumb-item"><a href="/explore.php">Explore</a></li>
                   <li class="breadcrumb-item"><a href="/collection.php">Tegro Cat</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Tegro Cat #133</li>
                 </ol>
               </nav>
               <div class="row justify-content-center mb-4">
                  <div class="col-lg-5 col-xl-5 mb-4 mb-lg-0">
                     <!-- Start NFT Image -->
                     <div class="position-sticky" style="top: 140px;">
                        <img class="item-details__image" data-enlargable src="/assets/img/item-details-image.jpg" alt="">
                     </div>
                     <!-- // End NFT Image -->
                  </div>
                  <div class="col-lg-7 col-xl-7">
                     <!-- Start Desc Card -->
                     <div class="card-item-details mb-5">
                        <div class="item-details__badge mb-4">Not for sale</div>
                        <h1 class="item-details__title mb-3">Tegro Cat #133</h1>
                        <p class="item-details__desc mb-0">
                           The story behind these DigiDaigaku characters is just beginning. <br/> 
                           Over time more about their world will be revealed, so hold yours close!
                        </p>
                     </div>
                     <!-- // End Desc Card -->
                     <!-- Start Action Link -->
                     <div class="card-item-details d-flex align-items-center border bg-soft px-4 py-3 rounded mb-4">
                        <button type="button" class="btn btn-sm btn-details__like bg-soft px-3">
                           <i class="fa-regular fa-heart m-0 me-sm-2"></i>
                           <span class="d-block d-sm-inline mt-1 mt-sm-0">24</span>
                        </button>
                        <div class="nav-item-details d-flex align-items-center fs-18 ms-auto">
                           <button type="button" class="btn btn-sm px-2 px-3 me-1"><i class="fa-regular fa-arrows-rotate d-block d-sm-inline mb-2 mt-sm-0 m-0 me-sm-2"></i> Refresh</button>
                           <button type="button" class="btn btn-sm px-2 px-3 me-1" data-bs-toggle="modal" data-bs-target="#ShareModal"><i class="fa-regular fa-share-nodes d-block d-sm-inline mb-2 mt-sm-0 m-0 me-sm-2"></i> Share</button>
                           <div class="dropdown">
                              <button class="btn btn-sm btn-cube" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fa-solid fa-ellipsis fs-20"></i>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                 <li><a class="dropdown-item" href="#">Place floor bid</a></li>
                                 <li><a class="dropdown-item" href="#">New bid</a></li>
                                 <li><a class="dropdown-item" href="#">Report</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- // End Action Link -->
                     <!-- Start Price Card -->
                     <div class="card-item-details d-flex flex-wrap border bg-soft p-2 rounded mb-4">
                        <button type="button" class="btn btn-primary flex-fill m-2" data-bs-toggle="modal" data-bs-target="#SelectTypeModal">Put up for sale</button>
                        <button type="button" class="btn btn-soft flex-fill m-2" data-bs-toggle="modal" data-bs-target="#SendFriendModal">Send a friend</button>
                     </div>
                     <!-- // End Price Card -->
                     <!-- Start Owner & Collection -->
                     <div class="row">
                        <div class="col-xl-6 mx-auto mb-4">
                           <a href="/profile.php" class="card-item-details d-block border bg-soft hover px-4 py-3 rounded text-white">
                              <h4 class="fs-14 color-grey mb-4">Owner</h4>
                              <div class="d-flex align-items-center">
                                 <img src="/assets/img/author/author-12.jpg" alt="" class="img-fluid rounded-circle" width="40" height="40">
                                 <h4 class="collection__name fs-16 mb-0 ms-3">
                                    NFT Tegro
                                 </h4>
                                 <i class="fa-solid fa-angle-right color-grey ms-auto"></i>
                              </div>
                           </a>
                        </div>
                        <div class="col-xl-6 mb-4">
                           <a href="#!" class="card-item-details d-block border bg-soft hover px-4 py-3 rounded text-white">
                              <h4 class="fs-14 color-grey mb-4">Collection</h4>
                              <div class="d-flex align-items-center">
                                 <img src="/assets/img/author/author-17.jpg" alt="" class="img-fluid rounded-circle" width="40">
                                 <h4 class="collection__name fs-16 mb-0 ms-3">
                                    Tegro Cat
                                 </h4>
                                 <i class="fa-solid fa-angle-right color-grey ms-auto"></i>
                              </div>
                           </a>
                        </div>
                     </div>
                     <!-- // End Owner & Collection -->
                     <!-- Start Details Card -->
                     <div class="card-item-details border bg-soft p-4 rounded">
                        <h4 class="fs-18 mb-4">Details</h4>
                        <ul class="list-unstyled">
                           <li class="mb-3">
                              <a href="https://tonscan.org/address/EQC_-u5FytW3WrGR_UQ_tjVFvFbcIanSh4nHjqP3ojIamkGP" class="d-flex align-items-center p-3 rounded border hover text-white" target="_blank">
                              <span class="fw-medium color-grey">Contract Address</span>
                              <span class="col-4 text-truncate ms-auto">EQC_-u5FytW3WrGR_UQ_tjVFvFbcIanSh4nHjqP3ojIamkGP</span>
                              <i class="fa-solid fa-angle-right color-grey ms-3"></i>
                              </a>
                           </li>
                           <li class="mb-3">
                              <a href="https://tonscan.org/address/EQC_-u5FytW3WrGR_UQ_tjVFvFbcIanSh4nHjqP3ojIamkGP" class="d-flex align-items-center p-3 rounded border hover text-white" target="_blank">
                              <span class="fw-medium color-grey">Sale Contract</span>
                              <span class="col-4 text-truncate ms-auto">EQC_-u5FytW3WrGR_UQ_tjVFvFbcIanSh4nHjqP3ojIamkGP</span>
                              <i class="fa-solid fa-angle-right color-grey ms-3"></i>
                              </a>
                           </li>
                           <li class="d-flex align-items-center p-3 rounded border hover text-white mb-3">
                              <span class="fw-medium color-grey">Token ID</span>
                              <span class="text-truncate ms-auto">10931</span>
                           </li>
                           <li class="d-flex align-items-center p-3 rounded border hover text-white mb-3">
                              <span class="fw-medium color-grey">Metadata</span>
                              <span class="text-truncate ms-auto">Centralized</span>
                           </li>
                        </ul>
                     </div>
                     <!-- // End Details Card -->
                  </div>
               </div>
               <!-- Start Attributes Card -->
               <div class="card-item-details border bg-soft p-4 rounded mb-5">
                  <h4 class="fs-18 mb-4">Attributes</h4>
                  <ul class="row list-unstyled">
                     <li class="col-lg-6 col-xl-4 mb-3">
                        <a href="#!" class="d-flex align-items-center p-3 rounded border hover text-white" target="_blank">
                           <div>
                              <span class="d-block fs-14 fw-medium color-grey mb-2">Background</span>
                              <span class="d-block fw-medium">Orange</span>
                           </div>
                           <div class="ms-auto">
                              <span class="d-block fs-14 fw-medium color-grey text-end mb-2">Rarity</span>
                              <span class="d-block fw-medium text-end">17.1%</span>
                           </div>
                           <i class="fa-solid fa-angle-right color-grey ms-5"></i>
                        </a>
                     </li>
                     <li class="col-lg-6 col-xl-4 mb-3">
                        <a href="#!" class="d-flex align-items-center p-3 rounded border hover text-white" target="_blank">
                           <div>
                              <span class="d-block fs-14 fw-medium color-grey mb-2">Expression</span>
                              <span class="d-block fw-medium">Brown Eyes</span>
                           </div>
                           <div class="ms-auto">
                              <span class="d-block fs-14 fw-medium color-grey text-end mb-2">Rarity</span>
                              <span class="d-block fw-medium text-end">74.6%</span>
                           </div>
                           <i class="fa-solid fa-angle-right color-grey ms-5"></i>
                        </a>
                     </li>
                     <li class="col-lg-6 col-xl-4 mb-3">
                        <a href="#!" class="d-flex align-items-center p-3 rounded border hover text-white" target="_blank">
                           <div>
                              <span class="d-block fs-14 fw-medium color-grey mb-2">Hairstyle</span>
                              <span class="d-block fw-medium">Double Ponies</span>
                           </div>
                           <div class="ms-auto">
                              <span class="d-block fs-14 fw-medium color-grey text-end mb-2">Rarity</span>
                              <span class="d-block fw-medium text-end">17.1%</span>
                           </div>
                           <i class="fa-solid fa-angle-right color-grey ms-5"></i>
                        </a>
                     </li>
                     <li class="col-lg-6 col-xl-4 mb-3">
                        <a href="#!" class="d-flex align-items-center p-3 rounded border hover text-white" target="_blank">
                           <div>
                              <span class="d-block fs-14 fw-medium color-grey mb-2">Outfit</span>
                              <span class="d-block fw-medium">Qipao</span>
                           </div>
                           <div class="ms-auto">
                              <span class="d-block fs-14 fw-medium color-grey text-end mb-2">Rarity</span>
                              <span class="d-block fw-medium text-end">17.1%</span>
                           </div>
                           <i class="fa-solid fa-angle-right color-grey ms-5"></i>
                        </a>
                     </li>
                     <li class="col-lg-6 col-xl-4 mb-3">
                        <a href="#!" class="d-flex align-items-center p-3 rounded border hover text-white" target="_blank">
                           <div>
                              <span class="d-block fs-14 fw-medium color-grey mb-2">Prop</span>
                              <span class="d-block fw-medium">Lolipop</span>
                           </div>
                           <div class="ms-auto">
                              <span class="d-block fs-14 fw-medium color-grey text-end mb-2">Rarity</span>
                              <span class="d-block fw-medium text-end">17.1%</span>
                           </div>
                           <i class="fa-solid fa-angle-right color-grey ms-5"></i>
                        </a>
                     </li>
                  </ul>
               </div>
               <!-- // End Attributes Card -->
               
               <!-- Start Transaction Table -->
               <h4 class="mb-3 fs-28 px-2">Transaction History</h4>
               <div class="card-item-details border bg-soft rounded mt-4 table-responsive">
               <table class="table text-white mb-0">
                 <thead>
                   <tr class="border-bottom">
                     <th scope="col" class="p-4">Type</th>
                     <th scope="col" class="p-4">Price</th>
                     <th scope="col" class="p-4">From</th>
                     <th scope="col" class="p-4">To</th>
                     <th scope="col" class="p-4">Date</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr class="hover">
                     <td class="p-4">
                           <i class="fa-regular fa-cart-shopping-fast fs-18 me-2"></i>
                           <span class="fw-medium">Sale</span>
                     </td>
                     <td class="p-4">38 TON</td>
                     <td class="p-4">
                        <a href="/profile.php" class="d-block text-truncate" target="_blank" style="max-width: 150px;">
                           <i class="fa-regular fa-circle-user me-2"></i>EQDZr7KDKG0R4Kyauz-iRetnuY7nMKXFIEQn4-44vzygNEvj
                        </a>
                        </td>
                     <td class="p-4">
                        <a href="/profile.php" class="d-block text-truncate" target="_blank" style="max-width: 150px;">
                           <i class="fa-regular fa-circle-user me-2"></i>antonov
                        </a>
                        </td>
                     <td class="p-4"><i class="fa-regular fa-timer me-2"></i> 2 hours ago</td>
                   </tr>
                   <tr class="hover">
                     <td class="p-4">
                           <i class="fa-regular fa-arrow-right-arrow-left me-2"></i>
                           <span class="fw-medium">Transfer</span>
                     </td>
                     <td class="p-4"></td>
                     <td class="p-4">
                        <a href="/profile.php" class="d-block text-truncate" target="_blank" style="max-width: 150px;">
                           <i class="fa-regular fa-circle-user me-2"></i>EQDZr7KDKG0R4Kyauz-iRetnuY7nMKXFIEQn4-44vzygNEvj
                        </a>
                        </td>
                     <td class="p-4">
                        <a href="/profile.php" class="d-block text-truncate" target="_blank" style="max-width: 150px;">
                           <i class="fa-regular fa-circle-user me-2"></i>antonov
                        </a>
                        </td>
                     <td class="p-4"><i class="fa-regular fa-timer me-2"></i> 12 hours ago</td>
                   </tr>
                   <tr class="hover">
                     <td class="p-4">
                           <i class="fa-regular fa-coin-blank me-2"></i>
                           <span class="fw-medium">Mint</span>
                     </td>
                     <td class="p-4">40 TON</td>
                     <td class="p-4">
                        <a href="/profile.php" class="d-block text-truncate" target="_blank" style="max-width: 150px;">
                           <i class="fa-regular fa-circle-user me-2"></i>EQDZr7KDKG0R4Kyauz-iRetnuY7nMKXFIEQn4-44vzygNEvj
                        </a>
                        </td>
                     <td class="p-4">
                        <a href="/profile.php" class="d-block text-truncate" target="_blank" style="max-width: 150px;">
                           <i class="fa-regular fa-circle-user me-2"></i>antonov
                        </a>
                        </td>
                     <td class="p-4"><i class="fa-regular fa-timer me-2"></i> 1 day ago</td>
                   </tr>
                 </tbody>
               </table>
               </div>
               <!-- //End Transaction Table -->
            </div>
         </div>
      </div>
   </section>
</main>
<?php
   require "_footer.php";
   ?>