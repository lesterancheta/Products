<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>

    <!-- Add Custom CSS Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            min-height: 100vh; /* Full viewport height */
            background-color: #f2f2f2; /* Background color for the body */
        }

        .container {
            background-color: #fff; /* Background color for the content container */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow to the container */
            max-width: 600px; /* Set a maximum width for the container */
            width: 100%; /* Ensure the container takes full width */
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        /* Style for input fields */
        input[type="text"],
        input[type="datetime-local"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Custom button style for the form */
        .custom-button {
            background-color: #007BFF; /* Blue color for the button */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Hover effect for the form button */
        .custom-button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        /* Rest of your CSS styles remain unchanged */
        /* ... */

        /* Custom button style for the table */
        .table-button {
            background-color: #DC3545; /* Red color for the table button */
            color: #fff;
            padding: 6px 20px;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .table-button:hover {
            background-color: #c82333; /* Darker red on hover */
        }

        /* Table row hover effect */
        tr:hover {
            background-color: #f5f5f5; /* Light gray on hover */
        }

        /* Header row background color */
        th {
            background-color: #343a40; /* Dark gray for header */
            color: #fff;
        }

        /* Table cell borders */
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="/save" method="post">
            <label>UPC</label>
            <input type="text" name="UPC" placeholder="UPC">
            <br>
            <label>Product_Name</label>
            <input type="text" name="Product_Name" placeholder="Product_Name">
            <br>
            <label>Price</label>
            <input type="text" name="Price" placeholder="Price">
            <br>
            <label>Quantity</label>
            <input type="text" name="Quantity" placeholder="Quantity">
            <br>
            <label>Created_at</label>
            <input type="datetime-local" name="Created_at" placeholder="Created_at">
            <br>
            <input type="submit" class="custom-button" value="Save">
        </form>

        <h1>Product Listing</h1>
        <table border="1">
            <tr>
                <th>UPC</th>
                <th>Product_Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Created_at</th>
                <th>Action</th>
            </tr>
            <?php foreach ($product as $pr):?>
                <tr>
                    <td><?=  $pr['UPC' ]?></td>
                    <td><?=  $pr['Product_Name' ]?></td>
                    <td><?=  $pr['Price' ]?></td>
                    <td><?=  $pr['Quantity' ]?></td>
                    <td><?=  $pr['Created_at' ]?></td>
                    <td><a href="/delete/<?=$pr['ID'] ?>" class="table-button">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
