<?php
   require "_header.php";
   ?>
<main class="main-page">
   <section class="section pt-5">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-9 col-xxl-7">
               <div class="row">
                  <div class="col-12">
                     <div class="bg-soft border p-5 rounded-20 text-center">
                        <button type="button" class="my-5" data-bs-toggle="modal" data-bs-target="#UpdateCoverModal">
                           <i class="fa-regular fa-folder-arrow-up fa-3x mb-3"></i>
                           <div class="fs-20">Update Cover</div>
                        </button>
                     </div>
                     <div class="collection__image ms-auto me-5 mb-4 mt--60">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#UpdateCoverModal">
                        <img src="/assets/img/user-1.svg?v=2" alt="" class="img-fluid rounded-circle" width="120" height="120">
                        <i class="fa-regular fa-images fa-2x"></i>
                        </button>
                     </div>
                  </div>
                  <div class="col-lg-5 col-xl-4 order-2 order-lg-1 text-center text-lg-start">
                     <div class="px-4 mb-0 mb-lg-4 position-sticky" style="top: 140px;">
                        <img src="/assets/img/verify.jpg?v=2" alt="" class="img-fluid rounded w-100 mb-4">
                        <h4 class="fw-bold fs-22">Verify your account</h4>
                        <p class="color-grey mb-4">
                           Proceed with verification pocess to get more visibility and gain truston Libermall
                        </p>
                        <a href="" class="btn btn-sm w-100 border">Get Verified</a>
                     </div>
                  </div>
                  <div class="col-lg-7 col-xl-8 order-1 order-lg-2 mb-4 mb-lg-0">
                     <div class="card bg-soft border p-3 p-md-5">
                        <form action="">
                           <div class="mb-4">
                              <label for="" class="mb-2">Display Name</label>
                              <input type="text" class="form-control" placeholder="Display Name" value="Tegro">
                           </div>
                           <div class="mb-4">
                              <label for="" class="mb-2">User Name</label>
                              <div class="input-group mb-2">
                                 <span class="input-group-text">@</span>
                                 <input type="text" class="form-control" placeholder="User Name">
                              </div>
                              <span class="fs-14 color-grey">Libermall.io/</span>
                           </div>
                           <div class="mb-4">
                              <label for="" class="mb-2">Short bio</label>
                              <div class="form-floating">
                                 <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                 <label for="floatingTextarea2">Tell about yourself in a few words</label>
                              </div>
                           </div>
                           <div class="mb-5">
                              <label for="" class="mb-1">Email</label>
                              <span class="d-block mb-2 fs-14 color-grey">Your email for marketplace notifications</span>
                              <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Enter your email">
                                 <span class="input-group-text">
                                 <a href="#!" class="fw-medium">Confirm</a>
                                 </span>
                              </div>
                           </div>
                           <div class="mb-5">
                              <h4 class="fs-20">Social links</h4>
                              <p class="mb-4 color-grey">
                                 Add your existing social links to build a stronger reputation
                              </p>
                              <div class="mb-4">
                                 <label for="" class="mb-2">Website URL</label>
                                 <input type="text" class="form-control" placeholder="https://">
                              </div>
                              <div class="mb-4">
                                 <label for="" class="mb-2">Twitter</label>
                                 <div class="input-group">
                                    <span class="input-group-text"><i class="fa-brands fa-twitter"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter your Twitter username">
                                    <span class="input-group-text">
                                    <a href="#!" class="fw-medium">Link</a>
                                    </span>
                                 </div>
                              </div>
                              <div class="mb-0">
                                 <label for="" class="mb-2">Instagram</label>
                                 <div class="input-group">
                                    <span class="input-group-text"><i class="fa-brands fa-instagram"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter your Instagram username">
                                    <span class="input-group-text">
                                    <a href="#!" class="fw-medium">Link</a>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <button type="button" class="btn btn-sm btn-primary">Save settings</button>
                        </form>
                     </div>
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