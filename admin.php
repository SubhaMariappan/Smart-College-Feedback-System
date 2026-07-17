<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard</title>

<link rel="stylesheet" href="assets/css/style.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>

<div class="dashboard">

<div class="sidebar">

<h2>
<i class="fa-solid fa-user-shield"></i>
Admin Panel
</h2>

<ul>

<li><a href="admin.php"><i class="fa-solid fa-house"></i> Dashboard</a></li>

<li><a href="createSurvey.php"><i class="fa-solid fa-plus"></i> Create Feedback</a></li>

<li><a href="survey.php"><i class="fa-solid fa-list"></i> Manage Feedback</a></li>

<li><a href="analytics.php"><i class="fa-solid fa-chart-column"></i> Analytics</a></li>

<li><a href="responses.php"><i class="fa-solid fa-users"></i> Responses</a></li>

<li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>

</ul>

</div>

<div class="main">

<h1>Welcome Admin 👋</h1>

<div class="cards">

<div class="dash-card">
<h3>Total Feedback Forms</h3>
<p>10</p>
</div>

<div class="dash-card">
<h3>Total Students</h3>
<p>450</p>
</div>

<div class="dash-card">
<h3>Total Responses</h3>
<p>320</p>
</div>

<div class="dash-card">
<h3>Pending Forms</h3>
<p>4</p>
</div>

</div>

<h2>Recent Feedback Forms</h2>

<table>

<tr>

<th>Feedback Name</th>

<th>Department</th>

<th>Status</th>

<th>Action</th>

</tr>

<tr>

<td>Faculty Feedback</td>

<td>MCA</td>

<td>Open</td>

<td>

<button>Edit</button>

<button>Delete</button>

</td>

</tr>

<tr>

<td>Placement Training</td>

<td>All Departments</td>

<td>Open</td>

<td>

<button>Edit</button>

<button>Delete</button>

</td>

</tr>

<tr>

<td>Library Feedback</td>

<td>All Departments</td>

<td>Closed</td>

<td>

<button>Edit</button>

<button>Delete</button>

</td>

</tr>

</table>

</div>

</div>

</body>

</html>