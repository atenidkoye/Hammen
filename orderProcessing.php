<?php
    include 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

$action = $_POST['action'] ?? '';

$firstName = $_POST['first_name'] ?? '';
$lastName  = $_POST['last_name'] ?? '';
$customer  = trim($firstName . ' ' . $lastName);

$total  = $_POST['total'] ?? 0;
$status = $_POST['status'] ?? 'pending';
$id     = $_POST['id'] ?? 0;

   //CREATE / PROCESS ORDER//
if ($action === 'create') {

    $stmt = $conn->prepare(
        "INSERT INTO orders (customer_name, total, status)
         VALUES (?, ?, ?)"
    );
    $stmt->bind_param("sds", $customer, $total, $status);

    if ($stmt->execute()) {
        echo "Order placed successfully";
    } else {
        http_response_code(500);
        echo "Failed to place order";
    }

    $stmt->close();

  //UPDATE ORDER//
} elseif ($action === 'update') {

    if (empty($id)) {
        exit('Order ID required for update');
    }

    $stmt = $conn->prepare(
        "UPDATE orders
         SET customer_name = ?, total = ?, status = ?
         WHERE id = ?"
    );
    $stmt->bind_param("sdsi", $customer, $total, $status, $id);

    if ($stmt->execute()) {
        echo "Order updated successfully";
    } else {
        http_response_code(500);
        echo "Failed to update order";
    }

    $stmt->close();


   //DELETE ORDER//

} elseif ($action === 'delete') {

    if (empty($id)) {
        exit('Order ID required for delete');
    }

    $stmt = $conn->prepare(
        "DELETE FROM orders WHERE id = ?"
    );
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Order deleted successfully";
    } else {
        http_response_code(500);
        echo "Failed to delete order";
    }

    $stmt->close();


//NVALID ACTION//
   
} else {
    http_response_code(400);
    echo "Invalid action";
}
