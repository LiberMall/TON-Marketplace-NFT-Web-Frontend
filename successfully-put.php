<?php
   require "_header.php";
   ?>
<main class="main-page">
   <section class="item-details section">
      <div class="container-fluid ">
         <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 text-center ">
                <img class="rounded img-fluid mb-4" src="/assets/img/item-details-image.jpg" alt="Tergo Cat" width="200">
                     <div class="ms-4">
                        <h5 class="fs-28 mb-2">Nice! You've successfully put <span class="d-block">an NFT up for auction!</span></h5>
                        <p class="mb-5 color-grey">
                           The NFT will be displayed in your profile, and other users will be able to place bids to become the new owner of your NFT when the auction is over.
                        </p>
                        <a href="/profile.php" class="btn btn-sm btn-secondary w-100">Close</a>
                     </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php
   require "_footer.php";
   ?>