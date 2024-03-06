<?php
// Get form data
$customerName = $_POST['customerName'];
$customerAge = $_POST['customerAge'];
$customerGender = $_POST['customerGender'];
$customerJob = $_POST['customerJob'];
$customerAddress = $_POST['customerAddress'];
$customerIncome = $_POST['customerIncome'];

// Perform calculations
$prediction = "Not Purchase";
if ($customerIncome >= 100000 && $customerIncome <= 300000) {
    $prediction = "Likely to purchase!";
} elseif ($customerIncome > 300000) {
    $prediction = "Yes Purchase!";
}

// Return the prediction result as JSON
$result = array(
    'customerName' => $customerName,
    'age' => $customerAge,
    'gender' => $customerGender,
    'job' => $customerJob,
    'address' => $customerAddress,
    'income' => $customerIncome,
    'prediction' => $prediction
);

echo json_encode($result);
?>
