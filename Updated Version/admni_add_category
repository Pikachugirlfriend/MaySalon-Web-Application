<?php
// Include the database connection
include('setup.php');

// Initialize variables
$category_name = '';
$description = '';
$message = '';

// Check if the form is submitted
if (isset($_POST['add_category'])) {
    $category_name = mysqli_real_escape_string($con, $_POST['category_name']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    // Insert the new category into the database
    $insert_query = "INSERT INTO productcategories (CategoryName, Description) VALUES ('$category_name', '$description')";
    
    if (mysqli_query($con, $insert_query)) {
        $message = "Category added successfully!";
    } else {
        $message = "Error adding category: " . mysqli_error($con);
    }
}
?>

<h2>Add Category</h2>

<?php if ($message) { echo "<p>$message</p>"; } ?>

<!-- Add category form -->
<form method="POST" action="">
    <label for="category_name">Category Name:</label>
    <input type="text" name="category_name" required placeholder="Enter category name">

    <label for="description">Description:</label>
    <textarea name="description" placeholder="Enter category description"></textarea>

    <input type="submit" name="add_category" value="Add Category">
</form>


<button class="back-button" onclick="window.location.href="admin.php?page=products">Back to Products</button>


<style>

    /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif; /* Ensure this font is imported */
}

body {
    background:#f5eee9;
    color: black; 
    line-height: 1.6;
    padding: 20px;
}

/* Form Styles */
form {
    display: flex;
    flex-direction: column; /* Stack elements vertically */
    align-items: center; /* Center align items */
    margin-bottom: 20px;
    border: 1px solid #c2a68d; /* Light coffee border */
    border-radius: 10px;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8); /* Slightly transparent white background */
}

form label {
    margin-bottom: 5px; /* Space between label and input */
}

form input[type="text"],
form input[type="date"],
form input[type="time"],
form select {
    padding: 10px;
    border: 1px solid #c2a68d; /* Light coffee color */
    border-radius: 5px;
    font-size: 1rem;
    width: 80%; /* Adjust width as needed */
    margin-bottom: 10px; /* Space between inputs */
}

form button {
    padding: 10px 15px;
    background-color: #c2a68d;/* Coffee button color */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 80%; /* Match button width to inputs */
}

form button:hover {
    background-color: #ad947d; /* Darker coffee color on hover */
}

form input[type="submit"] {
    background-color: #c2a68d; /* Coffee Brown */
    color: #ffffff; /* White text */
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 80%; /* Match width with other inputs */
    font-size: 16px;
    margin-top: 10px; /* Space between fields */
}

/* Add Category Button Hover Effect */
form input[type="submit"]:hover {
    background-color: #ad947d; /* Darker Coffee Brown on hover */
}

/* Responsive Design */
@media (max-width: 768px) {
    form input[type="text"],
    form input[type="date"],
    form input[type="time"],
    form select {
        width: 100%; /* Full width on smaller screens */
    }
}


.back-button {
    background-color: #c2a68d; /* Coffee Brown */
    color: #ffffff; /* White text */
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 20px; /* Space from other elements */
    font-size: 16px;
}


.back-button:hover {
    background-color: #ad947d; /* Darker Coffee Brown */
}


</style>
