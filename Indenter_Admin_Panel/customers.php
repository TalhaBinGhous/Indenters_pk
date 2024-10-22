
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Indenters-Admin</title>
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

  <!-- =======================================================

  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->

  <?php 
  include("header.php");
  ?>
  <!-- End Header -->


  <!-- ======= Sidebar ======= -->
<?php 
include("sidebar.php");

?>

<!-- =======  End Sidebar ======= -->

<!-- =======  Table Start ======= -->


<main id="main" class="main">

    <div class="pagetitle">
      <h1 class="text-center">Customers</h1>
      
    </div><!-- End Page Title -->
<section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            

              <!-- Default Table -->
              
              <!-- End Default Table Example -->
            </div>
          </div>

         

          <div class="">
            <div class="">
              
              <!-- Active Table -->


              <?php
     $sql = "SELECT * FROM contact_us";
     $result = mysqli_query($conn, $sql);

     $row_count = mysqli_num_rows($result);
     if ($row_count > 0){
    ?>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col"> First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>

                <?php 
                while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $row['id']?></th>
                    <td><?php echo $row['first_name']?></td>
                    <td><?php echo $row['last_name']?></td>
                    <td><?php echo $row['phone_number']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['subject']?></td>
                    <td><?php echo $row['Message']?></td>
                  </tr>
                  
                </tbody> 

                <?php }?>
              </table>
              <?php 
              
                }  else{

                  echo "No Record Found";
                }
              
              ?>
              <!-- End Active Table -->

            </div>
          </div>

          

          

        </div>

        <div class="col-lg-6">

          
              

              <!-- Table with stripped rows -->
              
              <!-- End Table with stripped rows -->

            </div>
          </div>

        

         

          

        </div>
      </div>
    </section>

  </main>
<!-- =======  Table End ======= -->





<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>
</html>