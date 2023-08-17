

<!-- HEADER -->
<?php
include 'config/config.inc.php';

// Retrieve phone_number  from tbl_admin
$sql = "SELECT * FROM tbl_admin";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
      $phoneNumber = $row["phone"];
} 

include 'partials/header.php';
// <!-- hero -->
include 'partials/hero.php';
  ?>
<!-- /HEADER -->


  <!-- SPINER -->
  <div  id="spinner" class="fixed top-0 left-0 w-full h-screen flex items-center justify-center bg-red-800 bg-opacity-50 z-50 ">
<div role="status">
    <svg aria-hidden="true" class="inline w-10 h-10 mr-2 text-gray-200 animate-spin  fill-green-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>
    <span class="sr-only">Loading...</span>
</div>
  </div>


<!-- Browse by categories -->
<div class="cat_name w-full lg:w-1/2 flex items-center mt-6">
<div class="font-bold text-xl pl-4"><h2>Browse by Categories</h2></div>
</div>
<div class="flex items-center  w-1/2 pl-4 ">
  <div class="w-1/4 border-t-4 border-[#0DA586]"></div>
  <div class="mx-4 flex items-center">
   <i class="fa-solid fa-leaf text-4xl text-[#0DA586]"></i>
  </div>
  <div class="w-1/4 border-t-4 border-[#0DA586]"></div>
</div>
<div class="text mb-6 pl-4">
  <p class="text-gray-500">Get ready to savor: Shop our aromatic collection of spices.</p>
</div>
<!-- Categoric -->
<?php
  include 'partials/categories.php';
  ?>




<!-- Featured -->
<div class="cat_name w-full flex justify-center items-center px-4 mt-16">
    <div class="flex justify-center items-center flex-col">
      <h2 class="font-bold text-2xl">Flavor Fiesta 🍳🥓🥞</h2>
     <p class="text-center">Discover the magic of our premium spices.</p>
    </div>
  
</div>
<!-- BEST SELLING -->
<div class="mt-4 w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 space-y-4 p-2">

<?php
//List products from database
$results = $db->query("SELECT * FROM products_list  order by rand() limit 0,5");
$count_results =mysqli_num_rows($results);
if ($count_results>0){
while($row = $results->fetch_assoc()) {
    $prod_id=$row["product_code"];
    $name=$row["product_name"];
    $prod_imgs=$row["product_image"];
    $price= $row["product_price"];
    $pprice= $row["product_pprice"];
    $prod_img =explode(",",$prod_imgs);
    $promo=$row["promo"];
    $prod_cat = $row['product_category'];
     $qty = $row['qty'];
        $ms = $row['measurement'];
    ?>
  <!-- TEMPLATE -->
  <?php
  include 'partials/template.php';
  ?>
    <!-- TEMPLATE -->
    <?php } }else{
                    echo 'No food';
              } ?>



    </div>


    <div class="w-full flex justify-center items-center my-12 ">
        <a href="shop" class="hvr-wobble-top bg-black shadow-md text-white rounded-md font-semibold p-3 w-1/3 text-center hover:text-[#0DA586] transition-all ease-linear">See More...</a>
      </div>



    <!-- BANNER -->
    <?php
    include 'partials/banner.php';
    ?>
    <!-- BANNER -->
        
<!-- Featured -->
<div class="cat_name w-full  bg-[#F6F4FD] flex justify-between items-center p-4 mt-16">
    <div class="font-bold text-2xl"><h2><i class="fa-solid fa-mitten mr-2 "></i>Kamer Ingredients</h2></div>
    <div>
        <a href="shop" class="flex justify-center items-center font-bold">
            <p>More</p>
            <i class="fa-solid fa-chevron-right text-sm ml-1 font-extrabold "></i>
        </a>
    </div>
</div>
<div class="cats w-full grid grid-flow-col gap-4 overflow-x-scroll overflow-y-hidden  mb-6 p-4  ">

<?php
//List products from database
$resu = $db->query("SELECT * FROM products_list  order by rand() limit 0,5");
$counta =mysqli_num_rows($resu);
if ($counta>0){
while($row = $resu->fetch_assoc()) {
    $prod_id=$row["product_code"];
    $name=$row["product_name"];
    $prod_imgs=$row["product_image"];
    $price= $row["product_price"];
    $pprice= $row["product_pprice"];
    $prod_img =explode(",",$prod_imgs);
    $promo=$row["promo"];
    $prod_cat = $row['product_category'];
     $qty = $row['qty'];
        $ms = $row['measurement'];
    ?>
  <!-- TEMPLATE -->
  <?php
  include 'partials/carrousel_temp.php';
  ?>
    <!-- TEMPLATE -->
    <?php } }else{
                    echo 'No items added yet';
              } ?>


</div>




      
<!-- Our best Sellers -->
<div class="cat_name w-full flex justify-center items-center mt-16">
<div class="font-bold text-3xl "><h2>Food CupBoard</h2></div>
</div>
<div class="flex items-center justify-center w-full pl-4 ">
  <div class="w-1/4 border-t-4 border-[#0DA586]"></div>
  <div class="mx-4 flex items-center">
   <i class="fa-solid fa-leaf text-4xl text-[#0DA586]"></i>
  </div>
  <div class="w-1/4 border-t-4 border-[#0DA586]"></div>
</div>
<p class='text-sm text-center p-4'>From Farm to Flavor: Freshly ground spices delivered to your doorstep.</p>
<!-- BEST SELLING -->
<div class=" w-full grid grid-cols-1 lg:grid-cols-3 mt-3 p-4">

<?php
//List products from database
$resu = $db->query("SELECT * FROM products_list  order by rand() limit 0,15");
$counta =mysqli_num_rows($resu);
if ($counta>0){
while($row = $resu->fetch_assoc()) {
    $prod_id=$row["product_code"];
    $name=$row["product_name"];
    $prod_imgs=$row["product_image"];
    $price= $row["product_price"];
    $pprice= $row["product_pprice"];
    $prod_img =explode(",",$prod_imgs);
    $promo=$row["promo"];
    $prod_cat = $row['product_category'];
     $qty = $row['qty'];
     $ms = $row['measurement'];
    ?>
  <!-- TEMPLATE -->
  <?php
  include 'partials/list_template.php';
  ?>
    <!-- TEMPLATE -->
    <?php } }else{
                    echo 'No food';
              } ?>


    </div>


    <div class="w-full flex justify-center items-center my-12 ">
        <a href="shop" class="hvr-wobble-top bg-black shadow-md text-white rounded-md font-semibold p-3 w-1/3 text-center hover:text-[#0DA586] transition-all ease-linear">See More...</a>
      </div>

      <?php
      include 'partials/footer.php';
      ?>