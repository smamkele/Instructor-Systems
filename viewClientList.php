<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
        <title>Client List</title>
    </head>
    <?php
    require_once 'include/auth.php';
    require_once 'include/dbconn.php';
    ?>
    <body>
        <div class="page-shell">
            <header class="page-header">
                <div>
                    <h1 id="pghead">Client List</h1>
                </div>
                <button class="button secondary" onclick="location.href = 'home.php'" type="button">Back to Dashboard</button>
            </header>

            <section class="card table-card">
                <table>
                    <thead>
                        <tr>
                            <th>Identity Number</th><th>First Name</th><th>Surname</th><th>Gender</th><th>Address</th><th>Contact Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $recset = $conn->query("SELECT * FROM client ORDER BY surname, name");
                        if (mysqli_num_rows($recset) > 0) {
                            while ($row = $recset->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . htmlspecialchars($row['client_id'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '<td>' . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '<td>' . htmlspecialchars($row['surname'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '<td>' . htmlspecialchars($row['gender'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '<td>' . htmlspecialchars($row['address'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '<td>' . htmlspecialchars($row['contact_number'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="6" class="muted">Client list not found.</td></tr>';
                        }

                        mysqli_free_result($recset);
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    </body>
</html>
