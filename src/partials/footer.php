<script>
  AOS.init();
</script>
<!-- scripts -->
<script src="assets/js/client-menu.js"></script>


   <!-- Custom install button -->
 <div id="install-button" class="hidden fixed bottom-0 w-full z-50 cursor-pointer">
 <div class="w-full flex justify-center text-white items-center rounded-lg p-6">
<div class="bg-teal-500 w-full lg:w-1/2 flex flex-col justify-center p-2 text-white items-center rounded-lg">

     <h3 class="text-xl font-bold border-b border-dashed mb-2">SuperFood App</h3>
    <p class="text-sm text-center">
    Shop your favorite groceries and spices at the comfort of your home.😎
    </p>
<button id="installAppNow" title="Install the superFood App" class="bg-white w-1/2 rounded-lg p-2 mt-4 text-teal-600">Install Now</button>
</div>
</div>
</div>


<!-- FOOTER -->
<footer class="w-full px-8">

<div class="main_footer_cols w-full grid md:grid-cols-3 lg:grid-cols-4 ">

<div class="about_superfood text-gray-500">
  <div class="c_logo">
    <img src="assets/images/icons/logo.png" alt="superfoods logo" class="w-1/2">
  </div>
  <div class="desc_text text-sm ">
    <p>
     Join us on this flavorful journey and experience the joy of cooking with our premium spices. Get ready to elevate your dishes to new heights and bring a dash of excitement to your kitchen. At superFood, we're here to make your culinary dreams come true, one spice at a time!
    </p>
    <p class="hover:text-[#0DA586] transition-all ease-in my-2">
      <i class="fa-solid fa-location-dot"></i>
      <span>Douala, Cameroon.</span>
    </p>
     <p class="hover:text-[#0DA586] transition-all ease-in my-2">
     <i class="fa-solid fa-truck"></i>
      <span>NationWide Delivery.</span>
    </p>
  </div>
</div>

<div class="categories_foote mt-4 lg:mt-0 ">
  <div class="header_title">
    <h3 class="font-bold text-xl">Categories</h3>
  </div>
  <ul class="footer_cats text-gray-500 text-sm ">

<?php
$get_cats="SELECT * FROM tbl_category order by id ASC";
foreach ($db->query($get_cats) as $cats) {
  $cid=$cats['id'];
  $cname=$cats['cat_name'];
  ?>
  <li class='my-1'><a class="hover:text-[#0DA586] relative inline-block" href="category?id=<?php echo $cid;?>"><?php echo $cname;?></a></li>
 <?php
 } 
?>
  </ul>
</div>

<div class="categories_foote  mt-4 lg:mt-0">
  <div class="header_title">
   <h3 class="font-bold text-xl">Useful Links</h3>
  </div>
  <ul class="footer_cats text-gray-500 text-sm">

   <li class='my-1'><a href="index" class="hover:text-[#0DA586] relative inline-block">Home</a></li>
   <li class='mb-1'><a href="shop" class="hover:text-[#0DA586] relative inline-block">Shop</a></li>
   <li class='mb-1'><a href="tel:+<?php echo $phoneNumber ?>" class="hover:text-[#0DA586] relative inline-block">Contact Us</a></li>
   <li class='mb-1'><a href="#" class="hover:text-[#0DA586] relative inline-block">About Us</a></li>
  
  </ul>
</div>

<div class="contacts_footer  mt-4 lg:mt-0">
  <div class="header_title">
    <h3 class="font-bold text-xl">Contact Us</h3>
  </div>
  <div class="footer_contact">

   <div class="c_card border-b-2 pb-2 border-gray-500 border-dashed mb-4">
    <p class="text-gray-500 text-xs mt-2"><i class="fa-solid fa-phone"></i> <span>Hotline 24/7</span> </p>
    <p class="font-bold text-sm ml-4"><a href="tel:+<?php echo $phoneNumber ?>">+<?php echo $phoneNumber ?></a></p>
   </div>

   <div class="c_card border-b-2 pb-2 border-gray-500  border-dashed mb-4">
    <p class="text-gray-500 text-xs mt-2"><i class="fa-solid fa-envelope"></i> <span>Email Address</span> </p>
    <p class="font-bold text-sm ml-4"><a href="mailto:">superfood@gmail.com</a></p>
   </div>
  
  </div>
</div>

</div>

<div class="credits">
  <div class="collect text-gray-500 text-xs lg:text-sm text-center lg:flex justify-around items-center">
    <p>&copy; <?php echo date('Y'); ?> SuperFoods All rights reserved</p>
     <p class="my-2">Stay Connected : <span>
      <a href=""><i class="fa-brands fa-facebook"></i></a>
      <a href="" class="mx-2"><i class="fa-brands fa-square-whatsapp"></i></a>
      <a href=""><i class="fa-brands fa-square-instagram"></i></a>
      <a href=""><i class="mx-2 fa-brands fa-tiktok"></i></a>
     </span></p>
     <p><a href="http://www.akalegodlove.netlify.app" target="_blank" rel="noopener noreferrer" >Developed by : <span class="underline">A. Godlove</span> </a></p>
  </div>
</div>
  
</footer>

<!-- scripts -->
<script src="assets/js/app.js"></script>
<script src="assets/js/lazy-load.js"></script>
<script src="assets/js/slider.js"></script>
</body>
</html>