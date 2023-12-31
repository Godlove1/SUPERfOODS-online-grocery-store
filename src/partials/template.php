<!-- prod_variant_1 -->
<div data-aos="zoom-in-up" class="product load-hidden rounded  shadow-md overflow-hidden transition-all duration-200 ease-linear hover:shadow-none">
    <!-- image -->
    <div class="image_wrapper ">
        <a href="product?prod_key=<?php echo $prod_id ?>" title="Buy more of <?php echo ucwords($name) ?> from superFood" class="relative">
         <img src="assets/images/icons/logo.png"
            data-src="assets/images/products/<?php echo $prod_img[0]; ?>"
             alt="<?php echo $name ?>" 
            class="myImage">

             <!-- category -->
        <div class="category_name absolute bottom-2 right-2 ">
            <div class="ca bg-gradient-to-r from-[#0DA586] via-[#0DA586] to-gray-700 px-2 rounded-md text-white font-bold text-xs">
                <p>
        <?php
        $getCat = mysqli_query($conn,"SELECT * FROM tbl_category WHERE id = $prod_cat");
        if($row=mysqli_fetch_assoc($getCat)){
           if(isset($_GET['cat'])){
           
           }else{
            echo $row['cat_name'];
           }
        }
        ?>
                </p>
            </div>
        </div>
         <!-- PROMO STATUS-->
         <div class="category_name absolute top-0 left-0 text-xs">
            <div class="ca bg-[#FECE0A] px-2 shadow-md text-white font-bold">
                <p>
        <?php
         if($promo == 0){
        
        }else{
            echo 'On Promo';
        }
        ?>
                </p>
            </div>
        </div>
        </a>
       
    </div>
      <!-- image -->
        <!-- prod_info-->
        <div class="prod_info relative px-4 py-2">
              <!-- details -->
                  <div class="details w-full">
                    <div class="det leading-tight">
                        <!-- name -->
                        <p class="text-center"><?php echo $name; ?>
                    <?php
                        if(!empty($ms)){
                        echo "<span class='text-xs'>(".$qty.$ms.")</span>";
                        }
                    ?>
                    </p>
                        <!-- price -->
                        <div class="price">
            <?php
                if($promo == 0){
                    echo '<p class="price"><span class="text-xs">F CFA </span><span class="font-bold text-xl ">'.number_format($price,0).'</span></p>';
                }else{
                    echo '<p class="price"><span class="text-xs">F CFA </span><span class="font-bold text-xl ">'.number_format($pprice,0).'</span><span class="text-[1rem] text-red-400"> <strike>'.number_format($price,0).'F</strike></span> </p>';
                }

            ?>

                        </div>
                    </div>
                </div>
            <form  method="post" class="form-item  w-full flex flex-col lg:flex-row justify-between items-center">

 <!-- quantity -->
              <div class="lg:absolute right-4  top-[1.6rem] my-2">
                    <label for="Quantity" class="sr-only"> Quantity </label>
                
                    <div class="input-group flex items-center border border-gray-200 rounded">
         <button id="mres" type="button" class="decrement-button w-8 bg-red-100 rounded  transition hover:opacity-75">
                        &minus;
                    </button>
                
                    <input
                        type="number"
                        id="Quantity"
                        value="1"
                        name="product_qty"
                        min="1"
                        class="input-number w-10 border-transparent text-center focus:outline-none"
                    />
                <!-- add leading-10 to add padding -->
                    <button
                        type="button"
                        class="increment-button w-8 bg-red-100 rounded  transition hover:opacity-75">
                        &plus;
                    </button>
                    </div>
                </div>


                    <!-- CTAs -->
                    <div class="CTAS w-full flex justify-center items-center">
                          <!-- cta_1 -->
                <div class="cta w-full">
                        <?php 
$productImage = "https://superfoods.store/assets/images/products/".$prod_img[0]; 
$messageURL = "https://wa.me/{$phoneNumber}?text=Hi!,%20I%20will%20like%20to%20buy%20{$name}%20%0A%0Aimage:%0A{$productImage}"; 
 
// output the WhatsApp share button with the product image 
echo "<a title='Buy just .$name. from superFood' href='{$messageURL}' target='_blank'  class='hvr-bounce-to-right text-sm flex justify-center items-center bg-black p-2 text-white rounded-tl-md rounded-bl-md'>
<p>Order </p><i class='fa-brands fa-whatsapp ml-2'></i>
</a>"; 
?>
                </div>
                 <!-- cta_2 -->
                 <div class="cta w-1/3">
                    <div class="ctar w-full">
         <button id="add" type="submit" class="hvr-bounce-to-top w-full flex justify-center items-center bg-[#0DA586] p-2 font-bold text-white rounded-tr-md rounded-br-md"><i class="fa-solid fa-bag-shopping text-xl"></i></button>
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
<!-- prod_variant_1 -->