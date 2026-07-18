<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'includes/db.php';

$sql = "SELECT * FROM surveys WHERE status='Open' ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Available Feedback Forms</title>

<link rel="stylesheet" href="assets/css/style.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

<div class="create-container">

<h1>Available Feedback Forms</h1>

<?php
if(mysqli_num_rows($result)>0){

    while($survey=mysqli_fetch_assoc($result)){
?>

<div class="survey-card">

<h2><?php echo $survey['title']; ?></h2>

<p><strong>Category:</strong> <?php echo $survey['category']; ?></p>

<p><strong>Department:</strong> <?php echo $survey['department']; ?></p>

<p><strong>Academic Year:</strong> <?php echo $survey['academic_year']; ?></p>

<p><strong>Semester:</strong> <?php echo $survey['semester']; ?></p>

<p><strong>Start Date:</strong> <?php echo $survey['start_date']; ?></p>

<p><strong>End Date:</strong> <?php echo $survey['end_date']; ?></p>

<p><strong>Status:</strong> <?php echo $survey['status']; ?></p>

<a href="submitFeedback.php?survey_id=<?php echo $survey['id']; ?>">
<button>Start Feedback</button>
</a>

</div>

<br>

<?php
    }

}else{

    echo "<h3>No Feedback Forms Available.</h3>";

}
?>

</div>

</body>
</html>