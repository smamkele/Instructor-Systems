<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
        <title>Lesson Booking</title>
    </head>
    <?php
    require_once 'include/auth.php';
    require_once 'include/dbconn.php';
    ?>
    <body>
        <div class="page-shell">
            <header class="page-header">
                <div>
                    <h1 id="pghead">Lesson Report</h1>

                </div>
                <button class="button secondary" onclick="location.href = 'home.php'" type="button">Back to Dashboard</button>
            </header>

            <section class="card table-card">
                <table>
                    <thead>
                        <tr>
                            <th>Total Lessons</th><th>Start Date</th><th>Start Time</th><th>Duration</th><th>Client ID</th><th>Instructor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $recset = $conn->query("SELECT lesson.*, instructor.instructor_name FROM lesson INNER JOIN instructor ON lesson.instructor_id = instructor.instructor_id ORDER BY lesson.start_date DESC, lesson.start_time ASC");

                        if (mysqli_num_rows($recset) > 0) {
                            while ($row = $recset->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . htmlspecialchars($row['num_of_lessons'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '<td>' . htmlspecialchars($row['start_date'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '<td>' . htmlspecialchars($row['start_time'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '<td>' . htmlspecialchars($row['lesson_duration'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '<td>' . htmlspecialchars($row['client_id'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '<td>' . htmlspecialchars($row['instructor_name'], ENT_QUOTES, 'UTF-8') . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="6" class="muted">Lesson list not found.</td></tr>';
                        }

                        mysqli_free_result($recset);
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    </body>
</html>
