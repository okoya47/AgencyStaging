<?php require 'headersection.php'; ?>
<style> 
.form-container {
            margin-left: auto;
            margin-right: auto;
            display: block;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 400px;
            width: 90%;
            margin-bottom: 20px;
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        .form-container label,
        .form-container input {
            display: block;
            margin-bottom: 15px;
        }

        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
</style>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4>Redeem Points</h4>

                     <!-- Page Heading -->
                <div class="form-container">
                <h2 style="text-align:center;">Redeem Points</h2>
                <p style="text-align:right;">Redeem Points Balance: 0.00</p>
                 <form action="process_form.php" method="post">
                  
                        <label for="password">Redeem:</label>
                        <input type="password" id="password" name="password" required>

                        <a href="#" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-angle-double-right"></i>
                                        </span>
                                        <span class="text">Redeem Points</span>
                        </a>
                 </form>
                </div>
    
                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php require 'footersection.php'; ?>
            