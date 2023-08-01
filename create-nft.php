<?php
   require "_header.php";
   ?>
<main class="main-page">
   <section class="section pt-5">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-9 col-xxl-7">
               <div class="mb-4">
                  <h1 class="section__title fs-32 mb-1">Create New NFT</h1>
                  <p class="color-grey fs-18">Single edition on TON</p>
               </div>
               <div class="row">
                  <div class="col-lg-5 col-xl-4 order-2 order-lg-1 text-center text-lg-start">
                     <div class="border rounded-20 p-3 p-md-4 text-center mb-4">
                        <div>
                           <img class="card-image img-fluid" src="./assets/img/cats/t-cat-01.jpg" loading="lazy" width="276" height="250" alt="TON NFT Tegro Cat">
                           <div class="px-1 py-0">
                              <h4 class="fs-18 d-flex align-items-center my-4">
                                 <span class="icon-ton me-2"></span> TON NFT Tegro Cat #101
                              </h4>
                              <div class="d-flex justify-content-between bg-soft rounded p-3 fs-14">
                                 <div>
                                    <p class="mb-1 fw-medium color-grey">Price</p>
                                    <p class="m-0 text-white">24.5 TON</p>
                                 </div>
                                 <div>
                                    <p class="mb-1 fw-medium color-grey">Highest bid</p>
                                    <p class="m-0 text-white text-end">164 TON</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex align-items-center border rounded-20 p-3 p-md-4 text-center position-sticky" style="top: 140px; min-height: 380px">
                        <p class="mb-0 fw-medium color-grey">
                           Upload file and choose collection to preview your brand new NFT
                        </p>
                     </div>
                  </div>
                  <div class="col-lg-7 col-xl-8 order-1 order-lg-2 mb-4 mb-lg-0">
                     <form action="">
                        <!--Start item-->
                        <div class="mb-4">
                           <h4 class="fs-16 mb-3">Wallet</h4>
                           <div class="d-flex flex-column flex-sm-row align-items-center bg-soft border rounded-20 p-2 overflow-hidden">
                              <div class="p-2 bg-soft rounded-20">
                                 <img src="https://market.unerd.eu/assets/img/tonhub.png" alt="TonHub">
                              </div>
                              <div class="mb-2 mb-sm-0 p-2 text-center text-sm-start">
                                 <span class="d-block text-truncate mb-1 color-grey" style="max-width: 200px;">
                                 EQDZr7KDKG0R4Kyauz-iRetnuY7nMKXFIEQn4-44vzygNEvj
                                 </span>
                                 <h5 class="fs-18 mb-0">Tonhub</h5>
                              </div>
                              <div class="item-details__badge badge__green text-capitalize px-3 py-2 ms-sm-auto mb-3 mb-sm-0">Connect</div>
                           </div>
                        </div>
                        <!--End item-->
                        <!--Start item-->
                        <div class="mb-4">
                           <h4 class="fs-16 mb-3">Upload file</h4>
                           <div class="bg-soft border rounded-20 p-4">
                              <p class="color-grey text-center">
                                 PNG, GIF, WEBP, MP4 or MP3. Max 100mb.
                              </p>
                              <div class="text-center">
                                 <label for="formFile" class="btn btn-sm btn-soft">Choose file</label>
                                 <input class="form-control d-none" type="file" id="formFile">
                              </div>
                           </div>
                        </div>
                        <!--End item-->
                        <!--Start item-->
                        <div class="bg-soft border rounded-20 p-4 mb-4">
                           <div class="mb-4">
                              <h4 class="fs-16 mb-3">Name</h4>
                              <input type="text" class="form-control" placeholder='e. g. "Redeemable T-Shirt with logo"' required>
                           </div>
                           <div class="mb-0">
                              <h4 class="fs-16 mb-3">Description <span class="color-grey fs-14 ms-1">(Optional)</span></h4>
                              <textarea class="form-control p-3 mb-2" placeholder='e. g. "After purchasing youll be able to get the real T-Shirt"' style="height: 100px"></textarea>
                              <span class="fw-medium fs-14 color-grey">With preserved line-breaks</span>
                           </div>
                        </div>
                        <!--End item-->
                        <!--Start item-->
                        <div class="bg-soft border rounded-20 p-4 mb-4">
                           <div class="d-flex mb-4">
                              <div>
                                 <h4 class="fs-18">Put on marketplace</h4>
                                 <p class="mb-0 color-grey">Enter price to allow users instantly purchase your NFT</p>
                              </div>
                              <div class="form-check form-switch ms-auto">
                                 <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                              </div>
                           </div>
                           <!-- Start Tab Navigation -->
                           <nav class="nav nav-pills nav-fill border rounded flex-column flex-sm-row" id="CreateTab" role="tablist">
                              <a class="flex-sm-fill nav-link active" aria-current="page" href="#!" id="FixedPrice-tab" data-bs-toggle="tab" data-bs-target="#FixedPrice" type="button" role="tab" aria-controls="FixedPrice" aria-selected="true">
                              <i class="fa-regular fa-tag fs-24 me-2"></i> 
                              <span class="d-block mt-2">Fixed price</span>
                              </a>
                              <a class="flex-sm-fill nav-link" href="#!" id="Openforbids-tab" data-bs-toggle="tab" data-bs-target="#Openforbids" type="button" role="tab" aria-controls="Openforbids" aria-selected="false">
                              <i class="fa-regular fa-infinity fs-24 me-2"></i> 
                              <span class="d-block mt-2">Open for bids</span>
                              </a>
                              <a class="flex-sm-fill nav-link" href="#!" id="Timedauction-tab" data-bs-toggle="tab" data-bs-target="#Timedauction" type="button" role="tab" aria-controls="Timedauction" aria-selected="false">
                              <i class="fa-regular fa-timer fs-24 me-2"></i> 
                              <span class="d-block mt-2">Timed auction</span>
                              </a>
                           </nav>
                           <!-- End Tab Navigation -->
                           <!-- Start Tab Content -->
                           <div class="tab-content p-0" id="CreateTabContent">
                              <div class="tab-pane fade show active mt-4" id="FixedPrice" role="tabpanel" aria-labelledby="FixedPrice-tab">
                                 <div class="mb-4">
                                    <h4 class="fs-16 mb-3">Price</h4>
                                    <input type="text" class="form-control" placeholder="Enter price for one piece" required>
                                 </div>
                                 <ul class="list-unstyled bg-soft border rounded fs-14 p-3 mb-0">
                                    <li class="d-flex align-items-center mb-3">
                                       <span class="fw-medium color-grey">Service fee</span>
                                       <span class="ms-auto">1%</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <span class="fw-medium color-grey">You will receive</span>
                                       <span class="ms-auto">–</span>
                                    </li>
                                 </ul>
                              </div>
                              <!--//-->
                              <div class="tab-pane fade mt-4" id="Openforbids" role="tabpanel" aria-labelledby="Openforbids-tab">
                                 <!--empty-->
                              </div>
                              <!--//-->
                              <div class="tab-pane fade mt-4" id="Timedauction" role="tabpanel" aria-labelledby="Timedauction-tab">
                                 <div class="mb-4">
                                    <h4 class="fs-16 mb-3">Minimum bid</h4>
                                    <input type="text" class="form-control mb-2" placeholder="Enter minimum bid" required>
                                    <span class="fw-medium fs-14 color-grey">Bids below this amount won’t be allowed.</span>
                                 </div>
                                 <div class="row">
                                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                       <h4 class="fs-14 mb-3">Starting Date</h4>
                                       <select class="form-select border" aria-label="Default select example">
                                          <option value="1" selected>Right after listing</option>
                                          <option value="2">Pick specific date</option>
                                       </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                       <h4 class="fs-14 mb-3">Expiration Date</h4>
                                       <select class="form-select border" aria-label="Default select example">
                                          <option value="1" selected>1 day</option>
                                          <option value="2">3 days</option>
                                          <option value="3">5 days</option>
                                          <option value="3">7 days</option>
                                       </select>
                                    </div>
                                    <div class="col-12 mt-3 fw-medium fs-14">
                                       <p class="color-grey mb-1">Any bid placed in the last 10 minutes extends the auction by 10 minutes.</p>
                                       <a href="#!" class="color-yellow" data-bs-toggle="modal" data-bs-target="#HowAuctionsWorkModal">Learn more how timed auctions work.</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Tab Content -->
                        </div>
                        <!--End item-->
                        <!--Start item-->
                        <div class="mb-4">
                           <h4 class="fs-16 mb-3">Choose collection</h4>
                           <div class="row mb-4">
                              <div class="col-12 col-sm-6 col-md-4">
                                 <button type="button" class="btn btn-soft py-4 w-100" data-bs-toggle="modal" data-bs-target="#CreateCollectionModal">
                                 <i class="fa-regular fa-octagon-plus fs-28 mb-3"></i>
                                 <span class="d-block fs-18 text-capitalize">Create</span>
                                 <span class="d-block fs-14 color-grey text-capitalize mt-1">ERC-721</span>
                                 </button>
                              </div>
                              <div class="col-12 col-sm-6 col-md-4">
                                 <button type="button" class="btn btn-soft active py-4 w-100">
                                 <img class="mb-3" src="./assets/img/logo/apple-icon-57x57.png" alt="Libermall - NFT Marketplace" width="28">
                                 <span class="d-block fs-18 text-capitalize">Libermall</span>
                                 <span class="d-block fs-14 color-grey text-capitalize mt-1">Liber</span>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <!--End item-->
                        <!--Start item-->
                        <div class="bg-soft border rounded-20 p-4 mb-4">
                           <div class="d-flex mb-4">
                              <div>
                                 <h4 class="fs-18">
                                    Free minting 
                                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="">
                                    <i class="fa-regular fa-circle-info color-grey"></i>
                                    </button>
                                 </h4>
                                 <p class="mb-0 color-grey">Buyer will pay gas fees for minting</p>
                              </div>
                              <div class="form-check form-switch ms-auto">
                                 <input class="form-check-input" type="checkbox" checked>
                              </div>
                           </div>
                           <div class="mb-4">
                              <h4 class="fs-16 mb-3">Royalties</h4>
                              <div class="input-group mb-2">
                                 <input type="text" class="form-control" placeholder="10" value="10">
                                 <span class="input-group-text" id="basic-addon1">%</span>
                              </div>
                              <span class="fw-medium fs-14 color-grey">Suggested: 0%, 10%, 20%, 30%. Maximum is 50%</span>
                           </div>
                        </div>
                        <!--End item-->
                        <!--Start item-->
                        <div class="bg-soft border rounded-20 p-4">
                           <div class="mb-4">
                              <h4 class="fs-16 mb-3">Properties <span class="color-grey fs-14 ms-1">(Optional)</span></h4>
                              <div class="d-flex flex-column flex-sm-row">
                                 <input type="text" placeholder="e.g. Size" class="form-control me-0 me-sm-2 mb-2 mb-sm-0">
                                 <input type="text" placeholder="e.g. M" class="form-control ms-0 ms-sm-2">
                              </div>
                           </div>
                           <div class="mb-0">
                              <h4 class="fs-16 mb-3">Alternative text for NFT <span class="color-grey fs-14 ms-1">(Optional)</span></h4>
                              <textarea class="form-control p-3 mb-2" placeholder="Image description in details (do not start with word “image”)" style="height: 60px"></textarea>
                              <span class="fw-medium fs-14 color-grey">Text that will be used in VoiceOver for people with disabilities</span>
                           </div>
                        </div>
                        <!--End item-->
                        <div class="d-flex flex-column flex-sm-row align-items-center mt-4">
                           <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#FollowStepsModal">Create item</button>
                           <div class="ms-auto color-grey">
                              Unsaved changes 
                              <button type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="Attach file or add title to save your changes">
                              <i class="fa-regular fa-circle-info color-grey"></i>
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php
   require "_footer.php";
   ?>