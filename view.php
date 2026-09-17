<?php
require_once "config.php";
$result = $conn->query("SELECT member_id, member_name, branch, club, interest_area, created_at FROM club_members ORDER BY member_id DESC");
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Member Directory</title><link rel="stylesheet" href="style.css"></head><body>
<header><h1>Club Membership Registration</h1><nav><a href="index.php">Register</a><a href="view.php">Members</a><a href="search.php">Search</a></nav></header>
<main class="container"><section class="card"><h2>Member Directory</h2>
<?php if (isset($_GET["success"])): ?><div class="success">Member registered successfully.</div><?php endif; ?>
<div class="table-wrap"><table><thead><tr><th>ID</th><th>Name</th><th>Branch</th><th>Club</th><th>Interest Area</th><th>Registered</th></tr></thead><tbody>
<?php while ($row = $result->fetch_assoc()): ?><tr>
<td><?= htmlspecialchars($row["member_id"]) ?></td><td><?= htmlspecialchars($row["member_name"]) ?></td>
<td><?= htmlspecialchars($row["branch"]) ?></td><td><?= htmlspecialchars($row["club"]) ?></td>
<td><?= htmlspecialchars($row["interest_area"]) ?></td><td><?= htmlspecialchars($row["created_at"]) ?></td>
</tr><?php endwhile; ?></tbody></table></div></section></main></body></html>
<?php $conn->close(); ?>