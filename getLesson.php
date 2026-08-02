<?php
require_once 'include/dbconn.php';

$instructorId = $_GET['q'] ?? '';

if ($instructorId === '') {
    exit('');
}

$stmt = $conn->prepare('SELECT instructor_name, surname, license_code, contact_number FROM instructor WHERE instructor_id = ? LIMIT 1');
$stmt->bind_param('i', $instructorId);
$stmt->execute();
$result = $stmt->get_result();

if (!$row = $result->fetch_assoc()) {
    exit('<div class="notice">Instructor not found.</div>');
}

echo '<div class="notice">';
echo '<strong>Selected instructor:</strong> ' . htmlspecialchars($row['instructor_name'] . ' ' . $row['surname'], ENT_QUOTES, 'UTF-8') . '<br>';
echo 'License code: ' . htmlspecialchars($row['license_code'], ENT_QUOTES, 'UTF-8') . '<br>';
echo 'Contact: ' . htmlspecialchars($row['contact_number'], ENT_QUOTES, 'UTF-8');
echo '</div>';