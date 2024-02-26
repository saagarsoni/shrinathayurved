<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
    <h1>Page 1</h1>
    <form  method="post">
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="id[]" value="1" readonly></td>
                    <td><input type="text" name="name[]" value="Product 1" readonly></td>
                    <td><input type="text" name="price[]" value="10" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" name="id[]" value="2" readonly></td>
                    <td><input type="text" name="name[]" value="Product 2" readonly></td>
                    <td><input type="text" name="price[]" value="21" readonly></td>
                </tr>
                <tr>
                    <td><input type="text" name="id[]" value="3" readonly></td>
                    <td><input type="text" name="name[]" value="Product 3" readonly></td>
                    <td><input type="text" name="price[]" value="11" readonly></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <button type="submit" name="purchase">Make Purchase</button>
    </form>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the "purchase" button was clicked
        if (isset($_POST["purchase"])) {
            // Check if any data was submitted
            if (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["price"])) {
                // Process the submitted data
                echo "<p>Form data received:</p>";
                echo "<ul>";
                // Loop through each submitted item
                foreach ($_POST["id"] as $key => $id) {
                    $name = $_POST["name"][$key];
                    $price = $_POST["price"][$key];
                    echo "<li>ID: $id, Name: $name, Price: $price</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No data received from the form.</p>";
            }
        }
    }
    ?>
</body>
</html>
