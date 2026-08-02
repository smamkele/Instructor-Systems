<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
        <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
        <script src="js/instructor.js" type="text/javascript"></script>
    </head>
    <?php
    session_start();
    require_once 'include/dbconn.php';
    $loginError = isset($_GET['error']);
    ?>
    <body class="auth-layout">
        <div class="page-shell">
            <div class="card auth-card">
                <div class="card-inner">
                    <h1 id="pghead">Driving School Management System</h1>
                    <?php if ($loginError): ?>
                        <div class="notice error">Your username or password is incorrect.</div>
                    <?php endif; ?>

                    <form action="login.php" method="POST" name="login" onsubmit="return validateForm();">
                        <fieldset>
                            <div class="form-grid">
                                <div class="form-field-full">
                                    <label for="username">Username</label>
                                    <input id="username" type="text" name="username" placeholder="Enter your username" autocomplete="username" required>
                                </div>
                                <div class="form-field-full">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" name="password" placeholder="Enter your password" autocomplete="current-password" required>
                                </div>
                            </div>

                            <div class="button-row">
                                <input id="submit-login" type="submit" value="Login">
                            </div>
                        </fieldset>
                    </form>

                    <p class="page-subtitle">Default demo users are stored in the database dump.</p>
                </div>
            </div>
        </div>
    </body>
</html>