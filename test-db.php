<?php
$db_connections = require __DIR__ . "/database.php";

if ($db_connections['mysqli']->ping()) {
    echo "✅ Connected to `login_db` successfully!";
} else {
    echo "❌ Failed to connect to `login_db`!";
}
?>
