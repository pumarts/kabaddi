<?php
$expiration = time() + (60 * 60 * 24 * 30);
if(!isset($_COOKIE['last__visited'])) {
setcookie('lastvisited', date('Y-m-d H:i:s'), $expiration);
}
$lastVisitedDateTime = $_COOKIE['last__visited'] ?? 'Unknown';
?>
<!DOCTYPE html>
<html>
<head>
</head>
<title>Last Visited Date-Time</title>
<body>
<h2>Last Visited Date-Time</h2>
<p>
<?php
if ($lastVisitedDateTime !== 'Unknown') {
echo 'Last visited on: '
. $lastVisitedDateTime;
} else {
    echo 'Welcome! This is your first visit.
';
}
?>
</p>
</body>
</html>