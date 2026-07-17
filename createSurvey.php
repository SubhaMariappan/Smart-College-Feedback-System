<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
if(!isset($_SESSION['user_id'])){

    header("Location: login.php");

    exit();

}
include 'includes/db.php';

if(isset($_POST['saveSurvey'])){

    $title = $_POST['title'];
    $category = $_POST['category'];
    $department = $_POST['department'];
    $academic_year = $_POST['academic_year'];
    $semester = $_POST['semester'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO surveys
    (user_id,title,category,department,academic_year,semester,start_date,end_date,status)
    VALUES
    ('$user_id','$title','$category','$department','$academic_year','$semester','$start_date','$end_date','Open')";

    if(mysqli_query($conn,$sql)){

    $survey_id = mysqli_insert_id($conn);

    if(isset($_POST['question'])){

        foreach($_POST['question'] as $index => $question){

            $question_type = $_POST['question_type'][$index];
            $option1 = $_POST['option1'][$index];
            $option2 = $_POST['option2'][$index];
            $option3 = $_POST['option3'][$index];
            $option4 = $_POST['option4'][$index];

            $query = "INSERT INTO survey_questions
            (survey_id,question,question_type,option1,option2,option3,option4)

            VALUES

            ('$survey_id','$question','$question_type',
            '$option1','$option2','$option3','$option4')";

            mysqli_query($conn,$query);

        }

    }

    echo "<script>alert('Survey Created Successfully');</script>";

}else{

    echo mysqli_error($conn);

}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Create Feedback Form</title>

<link rel="stylesheet" href="assets/css/style.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

<div class="create-container">

<h1>Create Feedback Form</h1>

<form action="" method="POST">

<label>Feedback Title</label>

<input type="text"
name="title"
placeholder="Faculty Feedback 2026"
required>

<label>Category</label>

<select name="category">

<option>Faculty Feedback</option>

<option>Course Feedback</option>

<option>Placement Training</option>

<option>Library Feedback</option>

<option>Campus Facilities</option>

<option>Event Feedback</option>

<option>Student Satisfaction</option>

</select>

<label>Department</label>

<select name="department">

<option>MCA</option>

<option>MBA</option>

<option>BCA</option>

<option>B.Sc CS</option>

<option>All Departments</option>

</select>

<label>Academic Year</label>

<select name="academic_year">

<option>I Year</option>

<option>II Year</option>

</select>

<label>Semester</label>

<select name="semester">

<option>I</option>

<option>II</option>

<option>III</option>

<option>IV</option>

</select>

<label>Start Date</label>

<input type="date" name="start_date">

<label>End Date</label>

<input type="date" name="end_date">

<hr>

<h2>Question 1</h2>

<label>Question</label>

<input
type="text"
name="question[]"
placeholder="Enter Question">

<label>Question Type</label>

<select name="question_type[]">

<option>Multiple Choice</option>

<option>Rating (1-5)</option>

<option>Text Answer</option>

</select>

<label>Option 1</label>

<input
type="text"
name="option1[]">

<label>Option 2</label>

<input
type="text"
name="option2[]">

<label>Option 3</label>

<input
type="text"
name="option3[]">

<label>Option 4</label>

<input
type="text"
name="option4[]">

<button type="button">
+ Add Another Question
</button>

<br><br>

<button
type="submit"
name="saveSurvey">

Save Feedback Form

</button>

</form>

</div>

</body>
</html>