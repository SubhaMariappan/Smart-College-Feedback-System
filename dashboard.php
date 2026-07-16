<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Dashboard</title>

<link rel="stylesheet" href="assets/css/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>

<div class="dashboard">

<div class="sidebar">

<h2>
<i class="fa-solid fa-graduation-cap"></i>
College Feedback
</h2>

<ul>

<li><a href="#"><i class="fa-solid fa-house"></i> Dashboard</a></li>

<li><a href="#"><i class="fa-solid fa-file-circle-check"></i> Active Feedback</a></li>

<li><a href="#"><i class="fa-solid fa-chart-column"></i> My Responses</a></li>

<li><a href="#"><i class="fa-solid fa-user"></i> Profile</a></li>

<li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>

</ul>

</div>

<div class="main">

<h1>Welcome, Student 👋</h1>

<div class="cards">

<div class="dash-card">
<h3>Active Forms</h3>
<p>5</p>
</div>

<div class="dash-card">
<h3>Submitted</h3>
<p>3</p>
</div>

<div class="dash-card">
<h3>Pending</h3>
<p>2</p>
</div>

</div>

<h2>Available Feedback Forms</h2>

<table>

<tr>
<th>Feedback Type</th>
<th>Status</th>
<th>Action</th>
</tr>

<tr>
<td>Faculty Feedback</td>
<td>Open</td>
<td><button>Start</button></td>
</tr>

<tr>
<td>Course Feedback</td>
<td>Open</td>
<td><button>Start</button></td>
</tr>

<tr>
<td>Placement Training</td>
<td>Open</td>
<td><button>Start</button></td>
</tr>

<tr>
<td>Library Feedback</td>
<td>Open</td>
<td><button>Start</button></td>
</tr>

<tr>
<td>Campus Facilities</td>
<td>Open</td>
<td><button>Start</button></td>
</tr>

</table>

</div>

</div>

</body>
</html>