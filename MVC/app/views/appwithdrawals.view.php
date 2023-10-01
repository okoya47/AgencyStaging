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
        #amount{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

         #userIdTo{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background: white;
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
                    <h4>APP WITHRAWALS</h4>

                     <!-- Page Heading -->
                <div class="form-container">
                <h2 style="text-align:center;">Make a withdrawal</h2>
                
                 <form action="" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <label for="amount">Amount:</label>
                        <input type="amount" id="amount" name="amount" required>
                        <button class="btn btn-primary w-100 py-2" type="submit">Submit</button>
                        <p>Maximum transfer amount:0</p>
                 </form>
                </div>
    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Transactions</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Transation Code</th>
                                            <th>Amount withdrawn</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Transfered To</th>
                                            <th>Transfered From</th>
                                            <th>Date</th>
                                            <th>Amount Transfered</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($withdrawals as $withdrawal): ?>
                                            <tr>
                                                <td><?php echo $withdrawal['id']; ?></td>
                                                <td><?php echo $withdrawal['transactioncode']; ?></td>
                                                <td><?php echo $withdrawal['amount']; ?></td>
                                                <td><?php echo $withdrawal['Date']; ?></td>
                                                <td><?php echo $withdrawal['status']==1? "Accepted": "Pending"; ?></td>
                                                
                                            </tr>    
                                        <?php endforeach; ?>
                                 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                          

                </div>





                <!-- /.container-fluid -->
                <div id="result">
    <!-- Fetched data will be displayed here -->
</div>
</div>
<!-- End of Main Content -->
<?php require 'footersection.php'; ?>
  
