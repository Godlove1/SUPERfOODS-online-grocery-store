
<?php
if(isset($_GET['cat']) && strlen($_GET['cat'])<3){
    $prid=$_GET['cat'];
$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `products_list` WHERE product_category=$prid ");
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1;
//Create a SQL Query to Get all the Food
$sql = "SELECT * FROM products_list WHERE product_category=$prid  order by product_code DESC LIMIT $offset, $total_records_per_page";
//Execute the qUery
$res = mysqli_query($conn, $sql);
//Count Rows to check whether we have foods or not
$count = mysqli_num_rows($res);
//Create Serial Number VAriable and Set Default VAlue as 1
$sn=1;
if($count>0){
while($row=mysqli_fetch_assoc($res))
{//get the values from individual columns
    $id = $row['product_code'];
    $price = $row['product_price'];
    $promo_price = $row['product_pprice'];
    $title = $row['product_name'];
    $prod_imgs = $row['product_image'];
    $availability = $row['available'];
    $prod_img =explode(",",$prod_imgs);
    $promo = $row['promo'];
     $ms = $row['measurement'];
    $qty = $row['qty'];
    ?>
    <!--template-->
    <tr>
  
                      <td class="w-10">
                      <?php echo $sn++; ?>
                      </td>
                      <td class="w-20">
                      <?php echo $title; ?>
                    </td>
                      <td class="w-20">
                      <?php
                 //CHeck whether we have image or not
                    if($prod_imgs==""){
  //WE do not have image, DIslpay Error Message
  echo "<div class='text-red-500'>Image not Added.</div>";
  }else{
  //WE Have Image, Display Image
  ?>
   <img src="../assets/images/products/<?php echo $prod_img[0] ?>" alt="prods" class="object-cover h-[80px] ">
  <?php } ?>
  
                      </td>
  
                     
                      <td class="w-20">
                     <?php if($promo == 1){
                      echo ' <p class="text-green-500 text-xs font-bold">is  On Promo:</p>';
                      echo number_format($promo_price,0)."F/<span class='text-xs'>(".$qty.$ms.")</span>";
                     }else{
                      echo number_format($price,0)."F/<span class='text-xs'>(".$qty.$ms.")</span>";
                     }
                    ?>
                    </td>
  
                      <td class="">
  <a href="update-prod?id=<?php echo $id; ?>" class="w-full text-center rounded bg-green-500 hover:bg-green-700 p-2 "><i class="fa-solid fa-pen-to-square text-xl text-white"></i></a>
  <a onclick="return confirm('Are you sure you want to delete <?php echo $title; ?>?');" href="delete?id=<?php echo $id; ?>&images=<?php echo $prod_imgs; ?>" class=" w-full text-center rounded bg-red-500 hover:bg-red-700 p-2"><i class="fa-solid fa-trash-can text-xl text-white"></i></a>
                      </td>
  
                  </tr>
                  <!--template-->

                <?php
      }      }else{
            echo '';
        }
             }else{
$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `products_list`");
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1;
//Create a SQL Query to Get all the Food
$sql = "SELECT * FROM products_list order by product_code DESC  LIMIT $offset, $total_records_per_page";
//Execute the qUery
$res = mysqli_query($conn, $sql);
//Count Rows to check whether we have foods or not
$count = mysqli_num_rows($res);
//Create Serial Number VAriable and Set Default VAlue as 1
$sn=1;
if($count>0){
while($row=mysqli_fetch_assoc($res))
{//get the values from individual columns
    $id = $row['product_code'];
    $price = $row['product_price'];
    $promo_price = $row['product_pprice'];
    $title = $row['product_name'];
    $prod_imgs = $row['product_image'];
    $availability = $row['available'];
    $prod_img =explode(",",$prod_imgs);
    $promo = $row['promo'];
       $ms = $row['measurement'];
        $qty = $row['qty'];
    ?>
  <!--template-->
  <tr>

                    <td class="w-5">
                    <?php echo $sn++; ?>
                    </td>
                    <td class="w-20">
                      <?php echo $title; ?>
                    </td>
                    <td class="w-20">
                    <?php
               //CHeck whether we have image or not
                  if($prod_imgs==""){
//WE do not have image, DIslpay Error Message
echo "<div class='text-red-500'>Image not Added.</div>";
}else{
//WE Have Image, Display Image
?>
 <img src="../assets/images/products/<?php echo $prod_img[0] ?>" alt="prods" class="object-cover h-[80px] ">
<?php } ?>

                    </td>

                   
                    <td class="w-20 font-bold">
                     <?php if($promo == 1){
                      echo ' <p class="text-green-500 text-xs">is  On Promo:showing promo price</p>';
                     if(!empty($ms)){
                       echo number_format($promo_price,0)."F/<span class='text-xs'>(".$qty.$ms.")</span>";
                     }else{
                       echo number_format($promo_price,0)."F";
                     }
                     }else{
                     if(!empty($ms)){
                       echo number_format($price,0)."F/<span class='text-xs'>(".$qty.$ms.")</span>";
                     }else{
                       echo number_format($price,0)."F";
                     }
                     }
                    ?>
                    </td>

                    <td class="flex justify-between items-center lg:w-20">
<a href="update-prod?id=<?php echo $id; ?>" class="w-1/2 text-center bg-green-500 hover:bg-green-700 p-2 "><i class="fa-solid fa-pen-to-square text-xl text-white"></i></a>
<a  onclick="return confirm('Are you sure you want to delete <?php echo $title; ?>?');" href="delete?id=<?php echo $id; ?>&images=<?php echo $prod_imgs; ?>" class=" w-1/2 text-center  bg-red-500 hover:bg-red-700 p-2"><i class="fa-solid fa-trash-can text-xl text-white"></i></a> 
                    </td>

                </tr>
                <!--template-->

                <?php
      }       }else{
        echo '';
    }
}

                    ?>
