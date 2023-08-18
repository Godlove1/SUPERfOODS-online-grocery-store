

<!-- HEADER -->
<?php 
include 'config/config.inc.php';

        //CHeck whether Post id is set or not
        if(isset($_GET['prod_key'])){
            //Get the Post id and details of the selected Post
            $prod_key = $_GET['prod_key'];
            $_SESSION['prod_key'] = $prod_key;
            //Get the DEtails of the SElected Post
            $sql = "SELECT * FROM products_list WHERE product_code=$prod_key";
            //Execute the Query
            $res = mysqli_query($conn, $sql);
            //Count the rows
            $count = mysqli_num_rows($res);
            //CHeck whether the data is available or not
            if($count==1){
                //GEt the Data from Database
                $row = mysqli_fetch_assoc($res);
                $prod_id=$row["product_code"];
                $name=$row["product_name"];
                $prod_imgs=$row["product_image"];
                $price= $row["product_price"];
                $pprice= $row["product_pprice"];
                $prod_img =explode(",",$prod_imgs);
                $image_names = explode(",", $row["product_image"]);
                $promo=$row["promo"];
                $category =$row['product_category'];
                $desc = $row['product_desc'];
                $seo = $row['product_seo'];
                 $qty = $row['qty'];
                 $ms = $row['measurement'];
            }
            else
            {
                //Post
                header('location:index');
            }
        }
        else
        {
            //Redirect to homepage
            header('location:index');
        }
  
include 'partials/header.php';

// Retrieve phone_number  from tbl_admin
$sql = "SELECT * FROM tbl_admin";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
      $phoneNumber = $row["phone"];
} 
?>

<!-- /HEADER -->

<div class="w-full lg:flex flex-col ">

<div class="w-full lg:flex ">
<!-- Product name -->
<div class="w-full product my-8 lg:my-0 border-r-2 border-yellow-500 ">

<div class="title text-2xl font-bold p-8">
    <h2><?php echo $name ?></h2>
    <p class='text-xl'>
        <?php
         if(!empty($ms)){
          echo "$qty$ms";
             }
                    ?></p>
</div>
<!-- PRODUCT DETAILS -->
<div class="product">
  <div class="product__images">
      <img
          src="assets/images/products/<?php echo $prod_img[0] ?>"
          alt="<?php echo $name ?>"
          class="product__main-image lg:object-contain lg:max-h-[300px]"
          id="main-image"
      />

     <?php
        if(count($image_names)>1){
            ?>
         <div class="product__slider-wrap">
          <div class="product__slider">
<?php
          foreach ($image_names as $image_name) {
             if (!empty($image_name)) {
        ?>
             <img
                  src="assets/images/products/<?php echo $image_name ?>"
                  alt="<?php echo $name ?>"
                  class="product__image product__image--active"
              />
<?php
}}
     ?>        
             
          </div>
      </div>
            <?php
        }
     ?>

  </div>
</div>
<!-- shopping details -->
<div class="flex justify-center items-center flex-col  p-4">
<p class="price text-2xl mt-4 font-bold border border-black p-2"><?php echo number_format($price ,1);?><span class="text-sm"> FCFA</span></p>
</div>

 <div class="desc_wrapper w-full p-4">
     <div class="my-4 p-4 capitalize border border-dashed border-gray-500">
 <p><?php 
 if(!empty($desc)){
    echo $desc ;
 }else{
    echo "<p class='text-center text-gray-300'>No Description.</p>";
 }
 ?></p>
  </div>
 </div>

      <div class="add_cart mb-12 w-full flex justify-center items-center">
          <form  method="post" class="form-item  w-1/2">
        <!-- quantity -->
                <div class="my-2 flex justify-end">
                    <p class="mr-2 my-4">Quantity : </p>
                    <label for="Quantity" class="sr-only"> Quantity </label>
                    <div class="input-group flex items-center my-4">
         <button  type="button" class="decrement-button w-10 bg-red-100 rounded  transition hover:opacity-75">
                        &minus;
                    </button>
                
                    <input
                        type="number"
                        id="Quantity"
                        value="1"
                        name="product_qty"
                        min="1"
                        class="input-number w-8 border-transparent text-center focus:outline-none"
                    /> 
                <!-- add leading-10 to add padding -->
                     <button
                        type="button"
                        class="increment-button w-10 bg-red-100 rounded  transition hover:opacity-75">
                        &plus;
                    </button>
                    </div>
                </div>
               
                <!-- order cta -->
                <div class="flex items-center">
                     <!-- cta_1 -->
                <div class="cta w-full">
                         <?php 
$productImage = "https://superfoods.store/assets/images/products/".$prod_img[0]; 
$messageURL = "https://wa.me/{$phoneNumber}?text=Hi!,%20I%20will%20like%20to%20buy%20{$name}%20%0A%0Aimage:%0A{$productImage}"; 
 
// output the WhatsApp share button with the product image 
echo "<a href='{$messageURL}' target='_blank'  class='hvr-bounce-to-right text-sm flex justify-center items-center bg-black p-2 text-white rounded-tl-md rounded-bl-md'>
<p>Buy Now </p><i class='fa-brands fa-whatsapp ml-2'></i>
</a>"; 
?>
                </div>
                 <!-- cta_2 -->
                 <div class="cta w-1/2">
                    <div class="ctar w-full">
         <button type="submit" class="hvr-bounce-to-top w-full flex justify-center items-center bg-[#0DA586] p-2 font-bold text-white rounded-tr-md rounded-br-md"><i class="fa-solid fa-bag-shopping text-xl"></i></button>
                    </div>
                </div>
                </div>

                
 <!-- hidden fields -->
        <input name="product_code" type="hidden" value="<?php echo $prod_id ?>">
        <input name="promo_price" type="hidden" value="<?php echo $pprice ?>">
        <input name="status" type="hidden" value='<?php echo $promo ?>'>
         <input name="qty" type="hidden" value='<?php echo $qty ?>'>
         <input name="measurement" type="hidden" value='<?php echo $ms ?>'>
            </form>
      </div>


  </div>
 

  
    


<!-- PRODUCT DETAILS -->
<div class="w-full lg:w-2/3 lg:pt-8">
<!-- CATEGORY NAME -->
<div class="cat_name w-full flex justify-between items-center px-4">
    <div class="font-bold text-2xl"><h2>Others you might like</h2></div>
    <div>
        <a href="shop" class="flex justify-center items-center font-bold">
            <p>More</p>
            <i class="fa-solid fa-chevron-right text-sm ml-1 font-extrabold "></i>
        </a>
    </div>
</div>

<!-- Recommended -->
<div class="cats w-full grid grid-flow-col auto-cols-max gap-4  overflow-x-scroll overflow-y-hidden p-4 mt-2 mb-12 lg:overflow-x-hidden lg:grid-flow-row lg:grid-cols-2">
<?php
$sql = "SELECT * FROM products_list WHERE product_category=$category order by rand() limit 0,5 ";
//Execute the qUery
$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res);
if($count>0){
  while($row=mysqli_fetch_assoc($res)) {
    $prod_id = $row["product_code"];
    $name=$row["product_name"];
    $prod_imgs=$row["product_image"];
    $price= $row["product_price"];
    $pprice= $row["product_pprice"];
    $prod_img =explode(",",$prod_imgs);
    $promo=$row["promo"];
    $qty = $row['qty'];
    $ms = $row['measurement'];
  ?>
  
   
 <!-- template -->
 <?php
    include 'partials/list_template.php';
    ?> 
 <!-- template -->


<?php
} } else{
  echo ' No products';
}
    ?>
  
  </div>
<!-- Recommend -->
</div>
</div>

</div>
<!-- FOOTER -->

  <?php
      include 'partials/footer.php';
      ?>