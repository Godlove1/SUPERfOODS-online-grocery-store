

<!-- list format -->
<div  data-aos="zoom-in-up" class="list_wrapper w-full flex items-center p-2 border-b-4 border-dashed lg:border-solid lg:border mb-2 ">
    <div class="img_container w-2/3 h-[150px]">
      <a title="Buy more of <?php echo ucwords($name) ?> from superFood" href="product?prod_key=<?php echo $prod_id ?>" class=" w-full h-full">
         <img src="assets/images/icons/logo.png"
         data-src="assets/images/products/<?php echo $prod_img[0]; ?>"  
         alt="<?php echo $name; ?>" 
         class="myImage w-full h-full rounded-md">
      </a>
    </div>
    <div class="info_container w-full  pl-3">
        <p class="name hover:text-[#0DA586] transition-all ease-in"><?php echo $name; ?></p>
        <p class="Quantity text-gray-500"> <?php
                        if(!empty($ms)){
                        echo "$qty$ms";
                        }
                    ?></p>
        <div class="price text-[#0DA586]">
             <?php
                if($promo == 0){
                    echo '<p class="price"><span class="text-xs">F CFA </span><span class="font-bold text-xl ">'.number_format($price,1).'</span></p>';
                }else{
                    echo '<p class="price"><span class="text-xs">F CFA </span><span class="font-bold text-xl ">'.number_format($pprice,1).'</span><span class="text-[1rem] text-red-400"> <strike>'.number_format($price,0).'F</strike></span> </p>';
                }

            ?>
        </div>
       <form  method="post" class="form-item  w-full">
        <!-- quantity -->
                <div class="my-2">
                    <label for="Quantity" class="sr-only"> Quantity </label>
                
                    <div class="input-group flex items-center">
         <button id="decreaser" type="button" class="decrement-button w-8 bg-red-100 rounded  transition hover:opacity-75">
                        &minus;
                    </button>
                
                    <input
                        type="number"
                        id="Quantity"
                        value="1"
                        name="product_qty"
                        min="1"
                        class="input-number w-6 border-transparent text-center focus:outline-none"
                    /> 
                <!-- add leading-10 to add padding -->
                     <button
                     id="addmore"
                        type="button"
                        class="increment-button w-8 bg-red-100 rounded  transition hover:opacity-75">
                        &plus;
                    </button>
                    </div>
                </div>
               
                <!-- order cta -->
                <div class="flex items-center">
                     <!-- cta_1 -->
                <div class="cta w-2/3">
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
                 <div class="cta w-1/4">
                    <div class="ctar w-full">
         <button id="increment" type="submit" class="hvr-bounce-to-top w-full flex justify-center items-center bg-[#0DA586] p-2 font-bold text-white rounded-tr-md rounded-br-md"><i class="fa-solid fa-bag-shopping text-xl"></i></button>
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
