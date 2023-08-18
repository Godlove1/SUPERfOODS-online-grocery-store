 <?php 
include 'cart_process.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0DA586"/>
    <!-- css -->
<link rel="stylesheet" href="assets/css/output.css">
<link rel="stylesheet" href="assets/css/custom.css">
<link rel="stylesheet" href="assets/css/hover.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="icon" type="image/png" sizes="48x48" href="assets/images/icons/maskable_icon_x48.png">
 <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/maskable_icon_x192.png">
<!-- font-awesome -->
<script src="https://kit.fontawesome.com/3ecb4095fb.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="manifest" href="manifest.json">

  <!-- add more to cart script -->
 <script src="assets/js/tocart.js"></script>

<!-- register service worker -->
<script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('sw.js')
          .then(registration => {
            console.log(`Service worker registered with scope: ${registration.scope}`);
          })
          .catch(error => {
            console.error(`Service worker registration failed: ${error}`);
          });
      });
    }
  </script>

  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1LSQTQLNRJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1LSQTQLNRJ');
</script>
 
<!-- dynamic header -->
 <?php
    $url = $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
$str = $parts['path'];

// Getting the current page URL
$cur_page = substr($str,strrpos($str,"/")+1);

if($cur_page == 'product'){
  ?> 
 
<!-- SEO -->
<title>Buy <?php  echo $name; ?> From superFood</title>
<meta name="description" content="Buy <?php  echo $name; ?>  from SuperFoods and have it delivered to your doorstep">
 <link rel="canonical" href="https://www..store/product?prod_key=<?php echo $prod_id; ?>">
 <!-- SEO - Social -->
<meta property="og:site_name" content="Buy <?php  echo $name; ?> From superFood">
<meta property="og:url" content="https://www.superfoods.store/product?prod_key=<?php echo $prod_id; ?>">
<meta property="og:title" content="<?php echo $name; ?>">
<meta property="og:type" content="product">
<meta property="og:description" content="Buy <?php echo $name; ?> from Super Foods and have it delivered to your doorstep.">
<meta property="og:price:amount" content="<?php  echo number_format($price,2); ?>">
<meta property="og:price:currency" content="FCFA">
<meta property="og:image" content="https://www..store/assets/images/products/<?php echo $prod_img[0] ?>">
<meta property="og:image:secure_url" content="https://www..store/assets/images/products/<?php echo $prod_img[0] ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $name; ?>">
<meta name="twitter:description" content="Buy <?php echo $name; ?> from Super Foods.">
<meta name="keywords" content="<?php echo $seo; ?>">

<?php
    }else if($cur_page == 'shop'){
        ?>

<title> Shop | Shop the best groceries! </title> 
<!-- SEO -->
<meta name="keywords" content="Fresh produce, Organic groceries, Exotic spices, Pantry essentials, Local products, Seasonal specials, Bulk buying, Gourmet ingredients, Healthy snacks, Gluten-free options, International flavors, Cooking oils and sauces, Baking supplies, Beverages, Canned and packaged goods, Condiments and spreads, Snacks and treats, Dairy and eggs, Frozen foods, Household supplies, Customer reviews for online grocery stores in Cameroon, Fast and reliable grocery delivery in Cameroon, Fresh food in Cameroon at your doorstep.">
<meta name="description" content="A Dash of Convenience, a Pinch of Delight: Grocery and Spice Made Right!">
 <!-- SEO - Social -->
<meta property="og:site_name" content="Super Foods ">
<meta property="og:url" content="https://www.superfood.store/">
<meta property="og:title" content="Super Foods">
<meta property="og:type" content="website">
<meta property="og:description" content="A Dash of Convenience, a Pinch of Delight: Grocery and Spice Made Right!.">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Super Foods">
<meta name="twitter:description" content="A Dash of Convenience, a Pinch of Delight: Grocery and Spice Made Right!.">
     <?php
    }else{
        ?>

<title> Super Foods | Spice up Your Kitchen with Flavorful Finds! </title> 
       <link rel="canonical" href="https://www.superfood.store/"> 
<!-- SEO -->
<meta name="keywords" content="Online grocery shopping in Cameroon, Fresh food delivery in Cameroon, Buy groceries online in Cameroon, Best online grocery store in Cameroon, Local produce in Cameroon, Organic food delivery in Cameroon, Affordable groceries in Cameroon, Convenient online shopping in Cameroon, Spices and seasonings in Cameroon, Quick recipes for Cameroon cuisine, Farm-fresh ingredients in Cameroon, Healthy food options in Cameroon, Bulk buying in Cameroon, Special discounts for Cameroonians, Cameroon's top online grocery store, Wide selection of groceries in Cameroon, Recipe inspiration for Cameroon dishes, Customer reviews for online grocery stores in Cameroon, Fast and reliable grocery delivery in Cameroon, Fresh food in Cameroon at your doorstep.">
<meta name="description" content="A Dash of Convenience, a Pinch of Delight: Grocery and Spice Made Right!">
 <!-- SEO - Social -->
<meta property="og:site_name" content="Super Foods ">
<meta property="og:url" content="https://www.superfood.store/">
<meta property="og:title" content="Super Foods">
<meta property="og:type" content="website">
<meta property="og:description" content="A Dash of Convenience, a Pinch of Delight: Grocery and Spice Made Right!.">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Super Foods">
<meta name="twitter:description" content="A Dash of Convenience, a Pinch of Delight: Grocery and Spice Made Right!.">
     <?php
    }
?>
 
</head>
<body>
    
    <!-- ON PROMO BANNER -->
    <div
    class="flex items-center justify-between gap-4 bg-[#0DA586] px-4 py-2 text-white"
  >
 <div class="div">
 <p class="text-sm font-medium ">
      Announcement <i class="fa-solid fa-bullhorn mx-2"></i>:
    </p>
    <p class="text-xs ">
      Order from 11AM for same day delivery
    </p>
 </div>
  
    <button
      aria-label="Dismiss"
      id="dismiss" title="Dismiss Notification"
      class="shrink-0 rounded-lg bg-black/10 p-1 transition hover:bg-black/20"
    >
     <i class="fa-solid fa-basket-shopping fa-bounce"></i>
    </button>
  </div>



<!-- shopping cart -->
<div class="shopping-cart-box hidden fixed z-50 top-0 p-2 w-full font-medium">
<div class="w-full h-full flex justify-center items-center">
<div class='w-full lg:w-1/2 border border-black rounded-md shadow-lg p-1 bg-white'>
<div class="flex justify-end items-center"><a href="#" class="close-shopping-cart-box" ><i class="fa-solid fa-xmark text-2xl font-extrabold text-black mr-4 transition-all ease-in-out hover:text-[#0DA586]"></i></a></div>
<h1 class="border-b border-white text-center text-xl  font-bold">Your Shopping Cart</h1>
    <div id="shopping-cart-results" class="mt-4">
    </div>
</div>
</div>
</div>



<!-- HEADER/ -->
<div class=" w-full menu_wrpper sticky top-0 z-20 bg-white">
<!-- menu_top -->
<div class="w-full header_top pl-2 py-4 flex justify-between items-center h-12 ">
  <!-- menu_btn -->
  <div class="m_btn flex justify-center items-center ml-4">
    <i class="fa-solid fa-bars text-2xl cursor-pointer"  onclick="openNav()"></i>
    <div class="mx-4">
        <i class="fa-solid fa-magnifying-glass text-xl cursor-pointer" onclick="openSearch()"></i>
       </div>
</div>
<!-- logo -->
<div class="w-full h-full flex justify-center items-center">
   <div class="">
   <a href="index"> 
      <img src="assets/images/icons/logo.png" alt="super foods logo" class="w-[150px] lg:w-[200px] pt-4 ml-[-10px]">
   <!-- <p class="text-4xl lg:text-6xl lg:mt-6 logo-text">SUPER FOODS</p> -->
  </a>
</div>
</div>

<!-- menu_cart -->
<div class="cart flex justify-center items-center">

<div class="cartert flex mr-4">
<a href="#" title="cart" class="cart-box"><i class="hvr-pop fa-solid fa-bag-shopping hover:text-[#0DA586] text-xl"></i></i> </a>
    <p  class="cart-info cart-total  bg-[#0DA586] text-white w-4 h-4 text-center rounded-md  text-xs">
                   <?php
            if(isset($_SESSION["products"])){
                    echo count($_SESSION["products"]);
                                        }else{
                                            echo 0;
                                        }
                     ?> 
    </p>

</div>
</div>
  
</div>
<!-- menu_top -->
<!-- header search -->
<div class="w-full h-0 transition-all ease-in-out overflow-hidden " id="search_bar">
  <form action="search" method="post" onchange="submit()" class="relative my-4 pb-4 w-full flex justify-center items-center">
  <input type="search" name="search" placeholder="search super foods ..." class="border placeholder:italic placeholder:text-xs focus:outline-none focus:border-[#0DA586] p-2">
  <i class="fa-solid fa-xmark text-xl cursor-pointer absolute top-0 right-[20px]" onclick="closeSearch()"></i>
  </form>
</div>

</div>
<!-- HEADER/ -->

<!-- MOBILE MENU -->
  <!-- mobile menu (sidebar) -->
  <div id="mobiside" class="mobile__sidebar transition-all duration-300 ease-in-out fixed w-full left-0  h-0  overflow-hidden z-50 top-0 lg:w-1/3 bg-slate-800 bg-opacity-80">
      <div class="w-full h-full flex justify-start ">
       
      <!-- menu-items -->
      <div class="menu__item w-3/5  text-black bg-white h-full right-0 relative ">
         <!-- close button -->
      <div class="close__mo_side absolute bottom-4 rounded-md right-[-50px]">
        <center><i class="fa-solid fa-xmark p-4 text-xl font-bold transition-all ease-in-out hover:text-[#A23445] rounded-lg bg-[#0DA586]  text-white shadow-md" onclick="closeNav()"></i></center>
      </div>

      <!-- mobile menu logo -->
      <div class="w-full  text-center mb-4">
        <a href="index" class="log w-full flex justify-center items-center" title="Super Foods">
        <!-- <p style="font-size:1.5rem;" class="mt-4">SuperFoods</p> -->
        <img src="assets/images/icons/logo.png" alt="super foods logo" class="w-[150px] lg:w-[200px]">
     </a>
     <p class="text-xs">contact us : </p>
        <div class="flex justify-center items-center mb-2">
         <a href="https://wa.me/<?php echo $phoneNumber; ?>" class="mx-2"><i class="hover:text-[#A23445] transition-all ease-linear fa-brands fa-whatsapp"></i></a>
         <a href="" class="mx-2"><i class="hover:text-[#A23445] transition-all ease-linear fa-brands fa-facebook"></i></a>
         <a href="" class="mx-2"><i class="hover:text-[#A23445] transition-all ease-linear fa-brands fa-instagram"></i></a>
           <a href="" class="mx-2"><i class="hover:text-[#A23445] transition-all ease-linear fa-brands fa-tiktok"></i></a>
         </div>
      </div>

    <!-- menu items -->
<ul class="w-full">

<li class="border-b w-full  mt-2 p-2 transition-all ease-in-out hover:bg-[#0DA586] hover:text-white"><a href="shop" class="capitalize w-full name">All Meals</a></li>
 <?php
$get_cats = $db->query("SELECT * FROM tbl_category order by id ASC");
while($row = $get_cats->fetch_assoc()) {
 $c_id = $row['id'];
 $c_name = $row['cat_name'];
  ?> 

<li class="hvr-bounce-to-right border-b  p-2  name"><a href="shop?<?php echo $c_name.''.md5($c_name); ?>&cat=<?php echo $c_id; ?>" class="capitalize"><?php echo $c_name; ?></a></li>

 <?php } ?> 

<li class="hvr-bounce-to-right w-full flex justify-center  mt-4 items-center text-center "><a href="admin_panel" class="text-sm uppercase  border p-2" target="_blank" class="capitalize name">Log in</a></li>
</ul>

      </div>
     
      </div>
</div>

<!-- MOBILE MENU -->



  <!-- SPINNER/LOADING ANIMATOR -->
  <div  id="spinner" class="fixed top-0 left-0 w-full h-screen flex items-center justify-center bg-red-800 bg-opacity-50 z-50 ">
<div role="status">
    <svg aria-hidden="true" class="inline w-10 h-10 mr-2 text-gray-200 animate-spin  fill-green-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>
    <span class="sr-only">Loading...</span>
</div>
  </div>