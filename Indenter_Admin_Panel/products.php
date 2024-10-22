
<?php
include("conn.php");
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

$row_count = mysqli_num_rows($result);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Products</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/watermark-removebg-preview.png" rel="icon">
    <link href="assets/img/watermark-removebg-preview.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<!-- ======= Header ======= -->

<?php   include("header.php");?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->


<?php   
include("sidebar.php");
?>
<!-- End Sidebar-->
    



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Products And Services</h1>
    
  </div><!-- End Page Title -->

  <section class="section">
  <div class="container">
    <div class="row">
      <?php
        if ($row_count > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <img src="<?php echo "product_image/" . $row["product_image"]?>" class="card-img-top" alt="Image description">
          <div class="card-body text-center">
            <h5 class="card-title"><?php echo $row['product_name']?></h5>
            <p class="card-text"><?php echo $row['product_description']?></p>
            <!-- Update Button -->
            <a href="update_products.php?id=<?php echo $row['Product_id'];?>" style="background-color: #4CAF50; color: white; padding: 10px 20px; 
                        text-align: center; text-decoration: none; display: inline-block; 
                        border-radius: 5px; margin-right: 10px;">Update</a>
            <!-- Delete Button -->
            <a href="delete_products.php?id=<?php echo $row['Product_id']; ?>" class="delete-button" 
       style="background-color: #f44336; color: white; padding: 10px 20px; 
              text-align: center; text-decoration: none; display: inline-block; 
              border-radius: 5px;">Delete</a>

          </div>
        </div>
      </div>
      <?php
            }
        }   
      ?>
    </div>
  </div>


    <!-- Custom Confirmation Modal -->
    <div id="customConfirmModal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,.5); z-index: 1000;">
        <p id="confirmMessage">Are you sure you want to delete this product?</p>
        <button id="confirmYes" style="background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;  margin-left: 100px;">Yes</button>
        <button id="confirmNo" style="margin-left: 10px; background-color: #333; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">No</button>
    </div>

    <!-- Overlay -->
    <div id="modalOverlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999;"></div>
</section>


</main>
<!-- End #main -->




<script>
document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.delete-button');
        const modal = document.getElementById('customConfirmModal');
        const overlay = document.getElementById('modalOverlay');
        const confirmYes = document.getElementById('confirmYes');
        const confirmNo = document.getElementById('confirmNo');
        let deleteUrl = '';

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the default action
                deleteUrl = this.href; // Store the URL to delete
                modal.style.display = 'block';
                overlay.style.display = 'block';
            });
        });

        confirmYes.addEventListener('click', function () {
            window.location.href = deleteUrl; // Proceed with the deletion
        });

        confirmNo.addEventListener('click', function () {
            modal.style.display = 'none'; // Hide the modal
            overlay.style.display = 'none';
        });
    });
    </script>



</body>
</html>