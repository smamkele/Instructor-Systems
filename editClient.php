<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Attendance</title>
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
        <script src="js/instructor.js" type="text/javascript"></script>
    </head>
    <?php
    require_once 'include/auth.php';
    require_once 'include/dbconn.php';
    $sql1 = $conn->query("SELECT * FROM client ORDER BY surname, name");
    ?>
    <body>
        <div class="page-shell">
            <header class="page-header">
                <div>
                    <h1 id="pghead">Attendance</h1>
                </div>
                <button class="button secondary" onclick="location.href = 'home.php'" type="button">Back to Dashboard</button>
            </header>

            <section class="card">
                <div class="card-inner">
                    <form action="" method="POST">
                        <div class="form-grid">
                            <div class="form-field-full">
                                <label for="client_select">Client details</label>
                                <select id="client_select" name="client" onchange="getClient(this.value)" required>
                                    <option value="">Choose a client</option>
                                    <?php
                                    if (mysqli_num_rows($sql1) > 0) {
                                        while ($row = $sql1->fetch_assoc()) {
                                            echo "<option value='" . htmlspecialchars($row['client_id'], ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($row['name'] . ' ' . $row['surname'], ENT_QUOTES, 'UTF-8') . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <div id="selected_client" class="table-card" style="margin-top: 18px;"></div>
        </div>
    </body>
</html>
