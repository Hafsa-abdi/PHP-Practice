<?php
// Two-dimensional associative array: rows = class codes, columns = Name, Phone, Address
$classes = array(
    "CA202" => array("Name" => "Mohamed Ahmed Ali",   "Phone" => "0611234567", "Address" => "Hodan, Mogadishu"),
    "CA207" => array("Name" => "hafsa abdinaasir", "Phone" => "0629876543", "Address" => "kahda, Mogadishu"),
    "CA208" => array("Name" => "Amina nuur",  "Phone" => "0637654321", "Address" => "Hamarweyne, Mogadishu"),
);
?>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Class</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
    </tr>
    <?php foreach ($classes as $classCode => $details): ?>
    <tr>
        <td><?= htmlspecialchars($classCode) ?></td>
        <td><?= htmlspecialchars($details["Name"]) ?></td>
        <td><?= htmlspecialchars($details["Phone"]) ?></td>
        <td><?= htmlspecialchars($details["Address"]) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
