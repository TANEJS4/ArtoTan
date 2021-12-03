<?php

// required for global sessions
session_start();

// if no messages, do nothing
if (empty($_SESSION['messages'])) {
    return;
}

// getting messages
$messages = $_SESSION['messages'];
unset($_SESSION['messages']);
?>

<!--html for displaying messages-->
<ul style="display:flex;align-items:center;justify-content:center">
    <?php foreach ($messages as $message): ?>
        <li style="display:inline-block;list-style-type:none;background:orangered;color:#fff;padding:5px;margin:5px;">
            <?php echo $message; ?>
        </li>
    <?php endforeach; ?>
</ul>