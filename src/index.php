

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
        <a href="shop" title="fin what you are looking in shop page" class="hvr-wobble-top bg-black shadow-md text-white rounded-md font-semibold p-3 w-1/3 text-center hover:text-[#0DA586] transition-all ease-linear">See More...</a>
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
        <a href="shop" title="shop more of these ingredients in the shop page" class="flex justify-center items-center font-bold">
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
        <a href="shop" title="shop more of the same categories in the shop page" class="hvr-wobble-top bg-black shadow-md text-white rounded-md font-semibold p-3 w-1/3 text-center hover:text-[#0DA586] transition-all ease-linear">See More...</a>
      </div>

      <?php
      include 'partials/footer.php';
      ?>