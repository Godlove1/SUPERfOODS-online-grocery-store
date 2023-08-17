
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

// variable for filter
@$cat=$_GET['cat']; 


// pagination
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 16;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 


  ?>
<!-- /HEADER -->


<!-- Featured -->
<div class="cat_name w-full px-4 mt-12">
    <div class="font-bold text-xl  "><h2>Categories</h2></div>
</div>
<!-- Categories -->
<div class="flex justify-around items-center flex-wrap mb-8 p-4 ">
 <!-- category template -->
 <div class="cat-temp-wrapper relative border shadow-lg  w-[100px] h-[100px] rounded-full overflow-hidden">
    <a href="shop">
        <div class="cat-bg w-full h-full">
            <img src="https://images.pexels.com/photos/9609868/pexels-photo-9609868.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="w-full h-full object-cover">
        </div>
        <div class="name_cat absolute bg-black w-full h-full top-0 bg-opacity-30">
                <div class="w-full h-full flex justify-center items-center">
                    <p class="text-white capitalize">All</p>
                </div>
        </div>
    </a>
</div>
<!-- category template -->


<?php
 if(isset($_GET['cat'])){
  $acat=$_GET['cat'];

  $get_cats="SELECT * FROM tbl_category order by id ASC";
foreach ($db->query($get_cats) as $cats) {
    $cid=$cats['id'];
    $cname=$cats['cat_name'];
    $ca_i=$cats['cat_image'];
    ?>

    <!-- category template -->
    <div class="hvr-grow-rotate cat-temp-wrapper relative <?=($acat == $cid)?'border-red-500':''?> border  shadow-lg  w-[100px] h-[100px] rounded-full overflow-hidden">
        <a href="shop?cat=<?php echo $cid;?>">
        <div class="cat-bg w-full h-full ">
      <img src="assets/images/cats/<?php echo $ca_i;?>" alt="<?php echo ucwords($cname) ?>" class="w-full h-full object-cover">
            </div>
            <div class="name_cat absolute <?=($acat == $cid)?'bg-red-500':' bg-black'?>  w-full h-full top-0 bg-opacity-50">
                    <div class="w-full h-full flex justify-center items-center p-2">
                        <p class="text-white capitalize text-center"><?php echo ucwords($cname) ?></p>
                    </div>
            </div>
        </a>
    </div>
 <!-- category template -->

 </a>
        <?php
 } }else{
 $get_cats="SELECT * FROM tbl_category order by id ASC";
 foreach ($db->query($get_cats) as $cats) {
     $cid=$cats['id'];
     $cname=$cats['cat_name'];
     $ca_i=$cats['cat_image'];
?>
    <!-- cateogry template -->
    <div class="hvr-grow-rotate cat-temp-wrapper relative <?=($acat == $cid)?'border-red-500':''?> border  shadow-lg  w-[100px] h-[100px] rounded-full overflow-hidden">
        <a href="shop?cat=<?php echo $cid;?>">
        <div class="cat-bg w-full h-full ">
      <img src="assets/images/cats/<?php echo $ca_i;?>" alt="<?php echo ucwords($cname) ?>" class="w-full h-full object-cover">
            </div>
            <div class="name_cat absolute <?=($acat == $cid)?'bg-red-500':' bg-black'?>  w-full h-full top-0 bg-opacity-30">
                    <div class="w-full h-full flex justify-center items-center p-2">
                        <p class="text-white capitalize text-center"><?php echo ucwords($cname) ?></p>
                    </div>
            </div>
        </a>
    </div>
 <!-- cateogry template -->
<?php
}
}
?>

    </div>




<!-- Featured -->
<div class="cat_name w-full flex justify-center items-center flex-col px-4 my-12">
    <div class="font-bold text-2xl  "><h2>Showing <span>All
    <?php
 if(isset($_GET['cat'])){
  $acat=$_GET['cat'];

  $get_cats=mysqli_query($conn,"SELECT * FROM tbl_category WHERE id =$acat");
if ( $row=mysqli_fetch_assoc($get_cats)) {
  
   echo $row['cat_name'];
}
}else{
  echo '';
}
?>
  
  </span> 😋</h2></div>
  <p class="text-center">
   Sprinkle, Stir, Savor: Elevate your culinary game with our spices.
  </p>
</div>
<!-- BEST SELLING -->
<?php
if (isset($_GET['cat']) && strlen($_GET['cat']) < 3) {
    $type_cat = $_GET['cat'];
    $result_count = mysqli_query($conn, "SELECT COUNT(*) AS total_records FROM `products_list` WHERE product_category=$type_cat AND available != 0");
} else {
    $result_count = mysqli_query($conn, "SELECT COUNT(*) AS total_records FROM `products_list`");
}

$total_records = mysqli_fetch_array($result_count)['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1;

if (isset($_GET['cat']) && strlen($_GET['cat']) < 3) {
    $sql = "SELECT * FROM products_list WHERE product_category=$type_cat AND available != 0 ORDER BY product_code DESC LIMIT $offset, $total_records_per_page";
} else {
    $sql = "SELECT * FROM products_list ORDER BY product_code DESC LIMIT $offset, $total_records_per_page";
}

$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res);

if ($count > 0) {
    echo '<div class="mt-4 w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 space-y-4 p-2">';

    while ($row = mysqli_fetch_assoc($res)) {
        $prod_id = $row["product_code"];
        $name = $row["product_name"];
        $prod_imgs = $row["product_image"];
        $price = $row["product_price"];
        $pprice = $row["product_pprice"];
        $prod_img = explode(",", $prod_imgs);
        $promo = $row["promo"];
        $prod_cat = $row['product_category'];
         $qty = $row['qty'];
            $ms = $row['measurement'];

        include 'partials/template.php';
    }

    echo '</div>';
    include 'partials/page_counter.php';
} else {
    if (isset($_GET['cat']) && strlen($_GET['cat']) < 3) {
        echo '<div class="flex justify-center items-center">
                <p>Nothing to see here, try another!</p>
              </div>';
    } else {
        echo '<div class="flex justify-center items-center">
                <p>Nothing here</p>
              </div>';
    }
}
?>


    <!-- BANNER & FOOTER -->
    <?php
    include 'partials/banner.php';
    include 'partials/footer.php';
    ?>