<!DOCTYPE html>
<html>
       <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link href="css/instructor.css" rel="stylesheet" type="text/css"/>
              <script src="js/instructor.js" type="text/javascript"></script>
              <title>Client Information</title>
       </head>
       <?php
       require_once 'include/auth.php';
       require_once 'include/dbconn.php';
       $sql = $conn->query("SELECT * FROM instructor");
       ?>
       <body>
              <div class="page-shell">
                     <header class="page-header">
                            <div>
                                   <h1 id="pghead">Client Booking Information</h1>
                            </div>
                            <button class="button secondary" onclick="location.href = 'home.php'" type="button">Back to Dashboard</button>
                     </header>

                     <section class="card form-card">
                            <div class="card-inner">
                                   <form action="addClient.php" method="POST" name="client" onsubmit="return submform();">
                                          <fieldset>
                                                 <legend>Booking details</legend>
                                                 <div class="form-grid">
                                                        <div class="form-field">
                                                               <label for="date">Date</label>
                                                               <input id="date" type="date" name="date" required>
                                                        </div>
                                                        <div class="form-field">
                                                               <label for="client_id">Identity number</label>
                                                               <input id="client_id" type="text" name="client_id" inputmode="numeric" maxlength="13" minlength="13" pattern="[0-9]{13}" placeholder="13 digits" required>
                                                        </div>

                                                        <div class="form-field">
                                                               <label for="name">First name</label>
                                                               <input id="name" type="text" name="name" autocomplete="given-name" required>
                                                        </div>
                                                        <div class="form-field">
                                                               <label for="surname">Surname</label>
                                                               <input id="surname" type="text" name="surname" autocomplete="family-name" required>
                                                        </div>

                                                        <div class="form-field-full">
                                                               <label for="address">Address</label>
                                                               <input id="address" type="text" name="address" autocomplete="street-address" required>
                                                        </div>

                                                        <div class="form-field-full">
                                                               <span class="field-label">Gender</span>
                                                               <div class="radio-group">
                                                                      <label class="radio-option"><input type="radio" name="gender" value="female" required> Female</label>
                                                                      <label class="radio-option"><input type="radio" name="gender" value="male"> Male</label>
                                                               </div>
                                                        </div>

                                                        <div class="form-field-full">
                                                               <span class="field-label">License code</span>
                                                               <div class="radio-group">
                                                                      <label class="radio-option"><input type="radio" name="license_code" value="10" required> 10</label>
                                                                      <label class="radio-option"><input type="radio" name="license_code" value="8"> 08</label>
                                                               </div>
                                                        </div>

                                                        <div class="form-field">
                                                               <label for="contact_number">Phone number</label>
                                                               <input id="contact_number" type="text" name="contact_number" inputmode="numeric" maxlength="10" minlength="10" pattern="[0-9]{10}" placeholder="10 digits" required>
                                                        </div>
                                                        <div class="form-field">
                                                               <label for="num_of_lessons">Total lessons</label>
                                                               <input id="num_of_lessons" type="number" name="num_of_lessons" min="1" required>
                                                        </div>

                                                        <div class="form-field">
                                                               <label for="start_date">Start date</label>
                                                               <input id="start_date" type="date" name="start_date" required>
                                                        </div>
                                                        <div class="form-field">
                                                               <label for="start_time">Start time</label>
                                                               <input id="start_time" type="time" name="start_time" required>
                                                        </div>

                                                        <div class="form-field">
                                                               <label for="lesson_duration">Duration</label>
                                                               <input id="lesson_duration" type="number" name="lesson_duration" min="1" required>
                                                        </div>
                                                        <div class="form-field">
                                                               <label for="instructor_id">Instructor</label>
                                                               <select id="instructor_id" name="instructor_id" onchange="getInstructor(this.value)" required>
                                                                      <option value="">Select instructor</option>
                                                                      <?php
                                                                      if (mysqli_num_rows($sql) > 0) {
                                                                             while ($row = $sql->fetch_assoc()) {
                                                                                    echo "<option value='" . htmlspecialchars($row['instructor_id'], ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($row['instructor_name'] . ' ' . $row['surname'], ENT_QUOTES, 'UTF-8') . "</option>";
                                                                             }
                                                                      }
                                                                      ?>
                                                               </select>
                                                        </div>
                                                 </div>

                                                 <div id="selected_instructor" class="notice" style="display:none;"></div>

                                                 <div class="button-row">
                                                        <input type="submit" name="addClient" value="Save Booking">
                                                        <button class="secondary" onclick="location.href = 'home.php'" type="button">Exit</button>
                                                 </div>
                                          </fieldset>
                                   </form>
                            </div>
                     </section>
              </div>
              <script src="js/instructor.js" type="text/javascript"></script>
       </body>
</html>
