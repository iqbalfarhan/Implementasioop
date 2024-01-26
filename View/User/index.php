<?php

use Model\User;

ini_set("display_errors", true);


require "Config/Database.php";
require "Model/User.php";

$users = (new User())->get();

?>
<table border="1" cellpadding="5px">
    <thead>
        <th>No</th>
        <th>Name</th>
        <th>Alamat</th>
        <th>JK</th>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
            ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['alamat'] ?></td>
                <td><?= $user['jenis_kelamin'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>