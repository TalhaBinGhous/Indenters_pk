
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

    <script src="https://code.jquery.com/jquery-3.6.2.slim.min.js" integrity="sha256-E3P3OaTZH+HlEM7f1gdAT3lHAn4nWBZXuYe89DFg2d0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
<script>
  $(document).ready(function(){
    $("#myTable").DataTable();
  });
</script>
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
      <h1>Subscription</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              

              <!-- Table with stripped rows -->
              <table class="table datatable" id="myTable">
                <thead>
                  <tr>
                    <th>
                      S.No
                    </th>
                    <th>Name</th>
                    <th>Email</th>
                    
                  </tr>
                </thead>

                <?php
                include("conn.php");
                     $sqly = "SELECT  *  FROM subscription";
                    $RESULT = mysqli_query($conn,$sqly);
                    while($ROW = mysqli_fetch_array($RESULT)){
                    
                    ?>
                <tbody>
                  <tr>
                    <td><?php echo $ROW[0];?></td>
                    <td><?php echo $ROW[1];?></td>
                    <td><?php echo $ROW[2];?></td>
                    
                  </tr>        
                </tbody>

                <?php } ?>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
<!-- End #main -->
</body>
</html>