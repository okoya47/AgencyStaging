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

        .pricingTable{
            margin-top:30px;
            margin-left:40px;
            text-align: center;
            position: relative;
        }
        .pricingTable .pricing_heading:after{
            content: "";
            width: 36px;
            height: 29.5%;
            background:#EF476F;
            position: absolute;
            top: -1px;
            right: 0;
            z-index: 2;
            transform: skewY(45deg) translateY(18px);
            transition: all 0.4s ease 0s;
        }
        .pricingTable .title{
            font-size: 20px;
            font-weight: 700;
            line-height: 30px;
            color: #000;
            text-transform: uppercase;
            background: #EF476F;
            padding: 15px 0 0;
            margin: 0 35px 0 0;
            transition: all 0.4s ease 0s;
        }
        .pricingTable .value{
            display: block;
            font-size: 35px;
            font-weight: 700;
            color: #000;
            background: #EF476F;
            padding: 5px 0 10px;
            margin: 0 35px 0 0;
            transition: all 0.4s ease 0s;
        }
        .pricingTable:hover .title,
        .pricingTable:hover .value{
            color: #fff;
        }
        .pricingTable .month{
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: #fff;
            text-transform: uppercase;
        }
        .pricingTable .content{
            border-left: 1px solid #f2f2f2;
            position: relative;
        }
        .pricingTable .content:after{
            content: "";
            width: 35px;
            height: 100%;
            background: #f8f8f8;
            box-shadow: 9px 9px 20px #ddd;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            transform: skewY(-45deg) translateY(-18px);
            transition: all 0.4s ease 0s;
        }
        .pricingTable .content ul{
            padding: 0;
            margin: 0 35px 0 0;
            list-style: none;
            background: #fff;
        }
        .pricingTable .content ul li{
            display: block;
            font-size: 15px;
            color: #333;
            line-height: 23px;
            padding: 11px 0;
            border-bottom: 1px solid #f2f2f2;
        }
        .pricingTable .link{
            background: #fff;
            padding: 20px 0;
            margin-right: 35px;
            border-bottom: 1px solid #f2f2f2;
            margin-top:200px;
        }
        .pricingTable .link a{
            display: inline-block;
            padding: 9px 20px;
            font-weight: 700;
            color: #EF476F;
            text-transform: uppercase;
            border: 1px solid #EF476F;
            background: #fff;
            transition: all 0.4s ease 0s;
        }
        .pricingTable:hover .link a{
            color: #fff;
            background: #06D6A0;
            border: 1px solid #06D6A0;
        }
        .pricingTable:hover .pricing_heading:after,
        .pricingTable:hover .title,
        .pricingTable:hover .value{
            background:#06D6A0;
        }
        @media only screen and (max-width: 990px){
            .pricingTable{
                margin-bottom: 35px;
            }
        }
</style>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h4>Transfer</h4>




    <div class="row">
        <div class="col-md-5 col-sm-6">
          <div class="pricingTable">
                <div class="pricing_heading">
                    <h3 class="title">Ordinary Plan</h3>
                    <span class="value">
                        Kshs.4,500
                        <span class="month">per month</span>
                    </span>
                </div>
                <div class="content">
                    <ul>
                        <li>Acquire 4 share</li>
                        <li>Shares at 1000 per share</li>
                        <li>Lifetime</li>
                    </ul>
                    <div class="link">
                        <a style="text-decoration:none" href="#">Purshase</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-sm-6">
        <div class="pricingTable">
                <div class="pricing_heading">
                    <h3 class="title">Redemable Plan</h3>
                    <span class="value">
                        $7,500
                        <span class="month">per month</span>
                    </span>
                </div>
                <div class="content">
                    <ul>
                        <li>Acquire 7 share</li>
                        <li>Shares at 1000 per share</li>
                        <li>Lifetime</li>
                    </ul>
                    <div class="link" style="text-decoration:none">
                        <a style="text-decoration:none" href="#">Purchase</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    








              











                
              
                                

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php require 'footersection.php'; ?>
            