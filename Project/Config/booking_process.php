<?php
// process_form.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $specialty = $_POST["specialty"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Display confirmation popup
    echo "<script>
              if (confirm('Are you sure you want to submit this information?')) {
                  // If confirmed, redirect to confirmation.php with the data
                  window.location.href = 'save_data.php?specialty=$specialty&date=$date&time=$time';
              } else {
                  // If not confirmed, redirect back to the form
                  window.location.href = '../booking.php';
              }
          </script>";
}
?>