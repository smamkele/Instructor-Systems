   <?php
$conn = new mysqli("localhost", "simbonile", "makhi123", "driving_instructor");
if ($conn->connect_errno) {
    exit("Failed to connect to MySQL: (" . $conn->connect_errno . ")<br>" . 
            $conn->connect_error);
}