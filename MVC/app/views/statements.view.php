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
                    <h4>Mini Statemant Records</h4>

                    <!-- DataTales -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Mini Statemants</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Amount</th>
                                            <th>Code/Fee/Name</th>
                                            <th>Date</th>
                                            <th>Current Deposit Amount</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Amount</th>
                                            <th>Code/Fee/Name</th>
                                            <th>Date</th>
                                            <th>Current Deposit Amount</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>$890.00</td>
                                            <td>S6AJGY12F2</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>$800.00</td>
                                            <td>UHJGY12F2</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>$50.00</td>
                                            <td>PXAJGY12F2</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>$205.00</td>
                                            <td>CXAJGY12F2</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>$200.00</td>
                                            <td>CXAJGY12F2</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                          

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php require 'footersection.php'; ?>
            