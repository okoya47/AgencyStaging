<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <!-- Include Bootstrap CSS (assuming you are using Bootstrap) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <form method="POST" action="process_form.php" onsubmit="return validateForm()">
        <div class="form-outline">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <br>
        <div class="form-outline">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <br>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var errors = [];

            if (name === "") {
                errors.push("Name is required");
            }

            if (email === "") {
                errors.push("Email is required");
            } else if (!/\S+@\S+\.\S+/.test(email)) {
                errors.push("Invalid email format");
            }

            if (errors.length > 0) {
                displayErrors(errors);
                return false;
            }

            return true;
        }

        function displayErrors(errors) {
            var errorContainer = document.getElementById("errorContainer");
            errorContainer.innerHTML = "";

            var errorList = document.createElement("ul");
            errorList.className = "text-danger";

            errors.forEach(function(error) {
                var errorItem = document.createElement("li");
                errorItem.textContent = error;
                errorList.appendChild(errorItem);
            });

            errorContainer.appendChild(errorList);
        }
    </script>

    <div id="errorContainer"></div>
</body>
</html>
