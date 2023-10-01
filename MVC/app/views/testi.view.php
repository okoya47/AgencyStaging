<?php require 'headersection.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">

    <form id="transfer-form" action="http://localhost/route/MVC/public/testi/submit" method="POST">
        <input id="userIdo" name="userIdTo" required>
        <label for="amount">Transfer Amount:</label>
        <input type="amount" id="amount" name="amount" required>
        <button class="btn btn-primary w-100 py-2" type="submit">Transfer funds</button>
        <p>Maximum transfer amount: 0</p>
    </form>

    <div id="result-message"></div>

    <!-- Table for displaying previous updates -->
    <h2>Previous Updates</h2>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Transfered To</th>
                <th>Transfered From</th>
                <th>Date</th>
                <th>User ID To</th>
                <th>Amount</th>
                <th>User ID From</th>
            </tr>
        </thead>
        <tbody id="update-table-body">
            <!-- Data will be loaded here using AJAX -->
        </tbody>
    </table>

    <script>
        // AJAX submission of the form
        $("#transfer-form").submit(function (event) {
            event.preventDefault();
            var $form = $(this); // Cache the form element
            var $submitButton = $form.find('button[type="submit"]'); // Cache the submit button element

            debugger;
            $.ajax({
                type: "POST",
                url: "http://localhost/route/MVC/public/testi/submit",
                data: $(this).serialize(),
                success: function (response) {
                    if (response.success) {
                        debugger;
                        $form[0].reset();
                        // Remove the click effect from the submit button
                        $submitButton.removeClass("clicked");
                        $("#result-message").text(response.message);
                        alert("It worked");
                        loadPreviousUpdates();
                    } else {
                        debugger;
                        alert("Transfer failed.")
                        $("#result-message").text("Transfer failed.");
                    }
                }
            });
        });

        // Function to load previous updates
        function loadPreviousUpdates() {
            debugger;
            alert("Hello");
            $.ajax({
                type: "GET",
                url: "http://localhost/route/MVC/public/testi/getPreviousUpdates", // Create a controller method for fetching previous updates
                success: function (data) {
                    // Clear the previous data
                    $("#update-table-body").empty();

                    // Append the new data to the table
                    $.each(data, function (index, update) {
                        $("#update-table-body").append(
                            "<tr>" +
                            "<td>" + update.id + "</td>" +
                            "<td>" + update.transferedTo + "</td>" +
                            "<td>" + update.transferedFrom + "</td>" +
                            "<td>" + update.Date + "</td>" +
                            "<td>" + update.userIdTo + "</td>" +
                            "<td>" + update.amount + "</td>" +
                            "<td>" + update.userIdFrom + "</td>" +
                            "</tr>"
                        );
                    });
                }
            });
        }

        // Initial loading of previous updates
        loadPreviousUpdates();
    </script>

</div>
<!-- /.container-fluid -->

<?php require 'footersection.php'; ?>
