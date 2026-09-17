<?php
require_once "config.php";
if ($_SERVER["REQUEST_METHOD"] !== "POST") { header("Location: index.php"); exit; }
$member_name = trim($_POST["member_name"] ?? "");
$branch = trim($_POST["branch"] ?? "");
$club = trim($_POST["club"] ?? "");
$interest_area = trim($_POST["interest_area"] ?? "");
if ($member_name === "" || $branch === "" || $club === "" || $interest_area === "" ||
    !preg_match("/^[A-Za-z .'-]{2,80}$/", $member_name)) {
    die("Please enter valid member details.");
}
$stmt = $conn->prepare("INSERT INTO club_members (member_name, branch, club, interest_area) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $member_name, $branch, $club, $interest_area);
if ($stmt->execute()) {
    $stmt->close(); $conn->close();
    header("Location: view.php?success=1"); exit;
}
$stmt->close(); $conn->close(); die("Unable to save the registration.");
?>