
<!-- HEADER -->
<?php 
include 'config/config.inc.php';
include 'partials/header.php';

//Get the Search Keyword
$search = mysqli_real_escape_string($conn,strip_tags(stripcslashes($_POST['search'])));

?>

<!-- Featured -->
<div class="cat_name w-full px-4 my-12">
    <div class="font-bold text-xl  text-center"><h2>Showing Search Results : "<?php echo $search; ?>"</h2></div>
  <p class="text-center">
   Spice it up, shake it up! Your taste buds will thank you.
  </p>
</div>
<!-- display products -->

<?php 
  $sql = "SELECT * FROM products_list  WHERE product_name LIKE '%$search%'";
  //Execute the qUery
  $res = mysqli_query($conn, $sql);
  //Count Rows to check whether we have items or not
  $count = mysqli_num_rows($res);
  
 
if ($count > 0) {
    echo '<div class="mt-8 mb-16 w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 space-y-4 p-2">';

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
} else {
        echo '<div class="card w-full h-[200px] flex justify-center items-center flex-col capitalize bg-teal-500 p-6 text-white font-bold">
                    <p>'.$search.' is not yet Available.</p>
                    <p><a href="shop" class="underline font-bold">goto shop</a> for similar products</p>
                  </div>';
    
}
?>

       



<!-- FOOTER -->
<?php  include 'partials/footer.php';?>
