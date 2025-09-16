<?php
// Simple PHP form processing (side by side layout)

$resultTable = ""; // Default empty

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Collect inputs
    $formData = [
        "firstname" => trim($_POST["firstname"] ?? ""),
        "lastname"  => trim($_POST["lastname"] ?? ""),
        "dob"       => $_POST["dob"] ?? "",
        "email"     => trim($_POST["email"] ?? ""),
        "phone"     => trim($_POST["phone"] ?? ""),
        "linkedin"  => trim($_POST["linkedin"] ?? ""),
        "password"  => $_POST["password"] ?? "",
        "gender"    => $_POST["gender"] ?? "",
        "address"   => trim($_POST["address"] ?? ""),
        "pincode"   => trim($_POST["pincode"] ?? ""),
        "state"     => trim($_POST["state"] ?? ""),
        "country"   => $_POST["country"] ?? "",
        "feedback"  => $_POST["feedback"] ?? ""
    ];

    // String formatting
    $firstName = ucfirst(strtolower($formData["firstname"]));
    $lastName  = ucfirst(strtolower($formData["lastname"]));

    // Validate names
    if (empty($firstName) || !preg_match("/^[a-zA-Z]+$/", $firstName)) {
        $errors[] = "First name must contain only letters.";
    }
    if (empty($lastName) || !preg_match("/^[a-zA-Z]+$/", $lastName)) {
        $errors[] = "Last name must contain only letters.";
    }

    // Validate DOB & Age
    if (empty($formData["dob"])) {
        $errors[] = "Date of Birth is required.";
    } else {
        try {
            $dob = new DateTime($formData["dob"]);
            $today = new DateTime();
            $age = $today->diff($dob)->y;
            if ($age < 18) {
                $errors[] = "You must be at least 18 years old. Your age is $age.";
            }
        } catch (Exception $e) {
            $errors[] = "Invalid Date of Birth format.";
        }
    }

    // Email
    if (empty($formData["email"]) || !preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $formData["email"])) {
        $errors[] = "Email must be a valid Gmail address.";
    }

    // Phone
    if (empty($formData["phone"]) || !preg_match("/^[0-9]{10}$/", $formData["phone"])) {
        $errors[] = "Phone must be exactly 10 digits.";
    }

    // LinkedIn
    if (empty($formData["linkedin"]) || !preg_match("/^https:\/\/(www\.)?linkedin\.com\/.*$/", $formData["linkedin"])) {
        $errors[] = "Enter a valid LinkedIn profile URL.";
    }

    // Password
    if (empty($formData["password"]) || strlen($formData["password"]) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    // Gender
    if (empty($formData["gender"])) {
        $errors[] = "Please select gender.";
    }

    // Address
    if (empty($formData["address"])) {
        $errors[] = "Address is required.";
    }

    // Pincode
    if (empty($formData["pincode"]) || !preg_match("/^[0-9]{6}$/", $formData["pincode"])) {
        $errors[] = "Pincode must be 6 digits.";
    }

    // State
    if (empty($formData["state"])) {
        $errors[] = "Please enter state.";
    }

    // Country
    if (empty($formData["country"])) {
        $errors[] = "Please select country.";
    }

    // Feedback
    if (empty($formData["feedback"])) {
        $errors[] = "Please provide feedback.";
    }

    // On success
    if (empty($errors)) {
        $userID = rand(1000, 9999);

        $storedData = [
            "UserID"    => "USER-" . $userID,
            "FullName"  => $firstName . " " . $lastName,
            "Email"     => strtolower($formData["email"]),
            "Phone"     => $formData["phone"],
            "LinkedIn"  => $formData["linkedin"],
            "Age"       => $age ?? "N/A",
            "Gender"    => $formData["gender"],
            "Address"   => $formData["address"],
            "Pincode"   => $formData["pincode"],
            "State"     => $formData["state"],
            "Country"   => $formData["country"],
            "Feedback"  => $formData["feedback"],
            "Submitted" => date("Y-m-d H:i:s")
        ]; 

        // Build result table
        $resultTable .= "<h3>Form Submitted Successfully!</h3>";
        $resultTable .= "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse;'>";
        foreach ($storedData as $key => $value) {
            $resultTable .= "<tr><th align='left'>$key</th><td>$value</td></tr>";
        }
        $resultTable .= "</table>";
    } else {
        $resultTable .= "<h3> Errors:</h3><ul>";
        foreach ($errors as $e) {
            $resultTable .= "<li>$e</li>";
        }
        $resultTable .= "</ul>";
    }
}
?>

<!-- Layout with Flexbox -->
<div style="display:flex; gap:40px; align-items:flex-start;">

    <!-- Left side: Form -->
    <div style="flex:1;">
        <form method="post">
            <h3>Fill the Form</h3>
            First Name: <input type="text" name="firstname"><br><br>
            Last Name: <input type="text" name="lastname"><br><br>
            Date of Birth: <input type="date" name="dob"><br><br>

            Email: <input type="text" name="email"><br><br>
            Phone: <input type="text" name="phone"><br><br>
            LinkedIn: <input type="text" name="linkedin" placeholder="https://www.linkedin.com/..."><br><br>

            Password: <input type="password" name="password"><br><br>

            Gender:
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female<br><br>

            Address: <textarea name="address"></textarea><br><br>
            Pincode: <input type="text" name="pincode"><br><br>
            State: <input type="text" name="state"><br><br>

            Country:
            <select name="country">
                <option value="">--Select Country--</option>
                <option value="India">India</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
                <option value="Canada">Canada</option>
            </select><br><br>

            Feedback:
            <select name="feedback">
                <option value="">--Select Feedback--</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Bad">Bad</option>
            </select><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- Right side: Table -->
    <div style="flex:1;">
        <?php echo $resultTable; ?>
    </div>
</div>
