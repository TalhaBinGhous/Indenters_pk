<?php
if (isset($_POST['sub'])) {
    include('conn.php');
    $uname = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $img = $_FILES['uimg']['name'];
    $imgtm = $_FILES['uimg']['tmp_name'];

    $sql = "INSERT INTO `admin_register`(`a_name`, `a_email`, `a_pass`, `uimg`) VALUES ('$uname','$email','$pass','$img')";

    $result = mysqli_query($conn, $sql);
    move_uploaded_file($imgtm, "dashboard_images/" . $img);

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register</title>
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

    <style>
        /* Hide the default file input */
        #uimg {
            display: none;
        }

        /* Style the custom button */
        .custom-file-upload {
            display: inline-block;
            padding: 8px 16px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            border: none;
            font-size: 14px;
        }

        /* Style for file name display */
        #fileName {
            margin-top: 5px;
            font-size: 14px;
        }
    </style>
</head>

<body>

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/watermark-removebg-preview.png" alt="">
                                <span class="d-none d-lg-block">Indenters</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                    <p class="text-center small">Enter your personal details to create account</p>
                                </div>

                                <form class="row g-3 needs-validation" novalidate method="post" enctype="multipart/form-data">
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="yourName" required>
                                        <div class="invalid-feedback">Please, enter your name!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Your Email</label>
                                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                                        <div class="invalid-feedback">Please enter a valid Email address!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="pass" class="form-control" id="yourPassword" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="uimg" class="form-label">Profile Picture</label>
                                        <br>
                                        <!-- Custom button -->
                                        <label class="custom-file-upload" for="uimg">Upload Image</label>
                                        <!-- Hidden file input -->
                                        <input type="file" name="uimg" id="uimg" required>
                                        <div class="invalid-feedback">Please select a file!</div>
                                        <!-- Display selected file name -->
                                        <p id="fileName"></p>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="sub">Create Account</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="credits">
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

<script>
    document.querySelector('.custom-file-upload').addEventListener('click', function() {
        document.getElementById('uimg').click();
    });

    // Display the selected file name
    const fileInput = document.getElementById('uimg');
    const fileNameDisplay = document.getElementById('fileName');

    fileInput.addEventListener('change', function() {
        if (fileInput.files.length > 0) {
            fileNameDisplay.textContent = `Selected file: ${fileInput.files[0].name}`;
        } else {
            fileNameDisplay.textContent = '';
        }
    });
</script>

</body>

</html>
