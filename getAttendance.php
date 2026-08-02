<?php
require_once 'include/dbconn.php';

$clientId = $_GET['q'] ?? '';

if ($clientId === '') {
    exit('<div class="notice">Select a client to load their lesson history.</div>');
}

$stmt = $conn->prepare('SELECT lesson.*, instructor.instructor_name FROM lesson INNER JOIN instructor ON lesson.instructor_id = instructor.instructor_id WHERE lesson.client_id = ? ORDER BY lesson.start_date DESC, lesson.start_time ASC');
$stmt->bind_param('s', $clientId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    exit('<div class="notice">No lesson history found for this client.</div>');
}

echo '<section class="card table-card"><table><thead><tr><th colspan="6">Attendance history</th></tr><tr><th>Date</th><th>Start Date</th><th>Start Time</th><th>Lessons</th><th>Instructor</th><th>Client</th></tr></thead><tbody>';

while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['date'], ENT_QUOTES, 'UTF-8') . '</td>';
    echo '<td>' . htmlspecialchars($row['start_date'], ENT_QUOTES, 'UTF-8') . '</td>';
    echo '<td>' . htmlspecialchars($row['start_time'], ENT_QUOTES, 'UTF-8') . '</td>';
    echo '<td>' . htmlspecialchars($row['num_of_lessons'], ENT_QUOTES, 'UTF-8') . '</td>';
    echo '<td>' . htmlspecialchars($row['instructor_name'], ENT_QUOTES, 'UTF-8') . '</td>';
    echo '<td>' . htmlspecialchars($row['client_id'], ENT_QUOTES, 'UTF-8') . '</td>';
    echo '</tr>';
}

echo '</tbody></table></section>';
