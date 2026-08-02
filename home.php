<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
    </head>
    <?php
    require_once 'include/auth.php';
    ?>
    <body>
        <div class="page-shell dashboard-layout">
            <aside class="card sidebar">
                <div class="sidebar-brand">
                    <span class="brand-kicker">Dashboard</span>
                    <h1 class="brand-title">Driving School</h1>
                </div>

                <nav class="sidebar-menu">
                    <a class="sidebar-link active" href="home.php">Overview <span>›</span></a>
                    <a class="sidebar-link" href="client.php">Booking <span>›</span></a>
                    <a class="sidebar-link" href="viewClientList.php">Client List <span>›</span></a>
                    <a class="sidebar-link" href="viewLessons.php">Lesson Report <span>›</span></a>
                    <a class="sidebar-link" href="editClient.php">Attendance <span>›</span></a>
                </nav>

                <div class="button-row" style="margin-top:18px;">
                    <button class="button secondary" onclick="location.href = 'index.php'" type="button">Logout</button>
                </div>
            </aside>

            <main class="dashboard-content">
                <header class="page-header">
                    <div>
                        <h1 id="pghead">Driving School Management</h1>
                    </div>
                </header>
                <section class="card">
                    <div class="card-inner">
                        <div class="navbar-actions">
                            <button class="button" onclick="location.href = 'client.php'" type="button">Booking</button>
                            <button class="button" onclick="location.href = 'viewClientList.php'" type="button">Client List</button>
                            <button class="button" onclick="location.href = 'viewLessons.php'" type="button">Lesson Report</button>
                            <button class="button" onclick="location.href = 'editClient.php'" type="button">Attendance</button>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>