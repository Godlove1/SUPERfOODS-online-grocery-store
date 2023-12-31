<!-- prod_variant_1 -->
<div data-aos="flip-left" class="prod_wrapper w-[280px] h-[380px] rounded-md  shadow-sm overflow-hidden hover:shadow-none">
    <!-- image -->
    <div class="image_wrapper w-full h-[240px] overflow-hidden ">
        <a href="product?prod_key=<?php echo $prod_id ?>" class="relative"> 
            <img src="assets/images/products/<?php echo $prod_img[0]; ?>" alt="" class="w-full h-full">

             <!-- category -->
        <div class="category_name absolute bottom-2 right-2">
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
         <div class="category_name absolute top-0 left-0">
            <div class="ca bg-black px-2 shadow-md text-white text-sm font-bold">
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
        <div class="prod_info relative px-2 pt-2 ">
              <!-- details -->
                  <div class="details w-full">
                    <div class="det leading-tight">
                        <!-- name -->
                        <p class="text-center"><?php echo $name; ?></p>
                        <!-- price -->
                        <div class="price mt-2">
                        <?php
                if($promo == 0){
                    echo '<p class="price"><span class="text-xs">F CFA </span><span class="font-bold text-xl ">'.number_format($price,1).'</span></p>';
                }else{
                    echo '<p class="price"><span class="text-xs">F CFA </span><span class="font-bold text-xl ">'.number_format($pprice,1).'</span><span class="text-[1rem] text-red-400"> <strike>'.number_format($price,0).'F</strike></span> </p>';
                }
            ?>
                        </div>
                    </div>
                </div>

            <form  method="post" class="form-item  w-full flex justify-between items-center mt-2">

        <input name="product_code" type="hidden" value="<?php echo $prod_id ?>">
        <input name="promo_price" type="hidden" value="<?php echo $pprice ?>">
        <input name="status" type="hidden" value='<?php echo $promo ?>'>
                <!-- cta_1 -->
                <div class="cta w-full">
                        <a href="" class="text-sm flex justify-center items-center bg-black p-2 text-white rounded-tl-md rounded-bl-md">
                            <p>Order </p><i class="fa-brands fa-whatsapp ml-2"></i>
                        </a>
                </div>
                 <!-- cta_2 -->
                 <div class="cta w-1/3">
                    <div class="ctar w-full">
         <button id="increment" type="submit" class="w-full flex justify-center items-center bg-[#0DA586] p-2 font-bold text-white rounded-tr-md rounded-br-md"><i class="fa-solid fa-bag-shopping text-xl"></i></button>
                    </div>
                </div>

                <!-- quantity -->
                
                <div class="absolute right-2 top-[2rem] "> 
                    <label for="Quantity" class="sr-only"> Quantity </label>
                
                    <div class="input-group flex items-center border border-gray-200 rounded">
         <button  type="button" 
         id="MinusTitle"
         class="decrement-button w-8 bg-red-100 rounded  transition hover:opacity-75">
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
                        type="button"
                        id="buttonIncremetal" title="increment quantity"
                        class="increment-button w-8 bg-red-100 rounded  transition hover:opacity-75">
                        &plus;
                    </button>
                    </div>
                </div>

            </form>
        </div>
</div>
<!-- prod_variant_1 -->