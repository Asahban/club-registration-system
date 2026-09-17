<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Club Membership Registration</title><link rel="stylesheet" href="style.css"></head>
<body>
<header><h1>Club Membership Registration</h1>
<nav><a href="index.php">Register</a><a href="view.php">Members</a><a href="search.php">Search</a></nav></header>
<main class="container"><section class="card"><h2>Register as a Club Member</h2>
<form action="save.php" method="post">
<label for="member_name">Full Name</label>
<input type="text" id="member_name" name="member_name" maxlength="80" pattern="[A-Za-z .'-]{2,80}" required>
<label for="branch">Branch</label><input type="text" id="branch" name="branch" maxlength="50" required>
<label for="club">Club</label>
<select id="club" name="club" required><option value="">Select a club</option>
<option>Technical Club</option><option>Cultural Club</option><option>Sports Club</option><option>Photography Club</option><option>Literary Club</option></select>
<label for="interest_area">Interest Area</label><input type="text" id="interest_area" name="interest_area" maxlength="80" required>
<button type="submit">Register Member</button>
</form></section></main></body></html>