<?php
require_once "config.php";
$club = trim($_GET["club"] ?? "");
$rows = [];
if ($club !== "") {
    $stmt = $conn->prepare("SELECT member_id, member_name, branch, club, interest_area, created_at FROM club_members WHERE club = ? ORDER BY member_id DESC");
    $stmt->bind_param("s", $club);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) { $rows[] = $row; }
    $stmt->close();
}
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search Members</title><link rel="stylesheet" href="style.css"></head><body>
<header><h1>Club Membership Registration</h1><nav><a href="index.php">Register</a><a href="view.php">Members</a><a href="search.php">Search</a></nav></header>
<main class="container"><section class="card"><h2>Search by Club</h2>
<form method="get" action="search.php"><label for="club">Club</label>
<select id="club" name="club" required><option value="">Select a club</option>
<option value="Technical Club">Technical Club</option><option value="Cultural Club">Cultural Club</option>
<option value="Sports Club">Sports Club</option><option value="Photography Club">Photography Club</option>
<option value="Literary Club">Literary Club</option></select><button type="submit">Search</button></form>
<?php if ($club !== ""): ?><h3>Results for <?= htmlspecialchars($club) ?></h3>
<div class="table-wrap"><table><thead><tr><th>ID</th><th>Name</th><th>Branch</th><th>Club</th><th>Interest Area</th></tr></thead><tbody>
<?php foreach ($rows as $row): ?><tr><td><?= htmlspecialchars($row["member_id"]) ?></td>
<td><?= htmlspecialchars($row["member_name"]) ?></td><td><?= htmlspecialchars($row["branch"]) ?></td>
<td><?= htmlspecialchars($row["club"]) ?></td><td><?= htmlspecialchars($row["interest_area"]) ?></td></tr><?php endforeach; ?>
</tbody></table></div><?php if (!$rows): ?><p>No members found for this club.</p><?php endif; ?><?php endif; ?>
</section></main></body></html><?php $conn->close(); ?>