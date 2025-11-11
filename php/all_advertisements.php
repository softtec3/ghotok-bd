<?php
$all_advertisement = [];
// get from advertisements
$get_all_advertisements = $conn->query("SELECT * FROM advertisements  WHERE status='active' ORDER BY id DESC LIMIT 3");
$all_advertisement = $get_all_advertisements->fetchAll(PDO::FETCH_ASSOC);
