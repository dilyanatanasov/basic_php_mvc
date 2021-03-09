<?php
require_once "navigation.php";

?>
    <section>
        <h1>User</h1>
    </section>
<?php

if (isset($data)) {
    if (is_array($data)) {
        echo "<ul>";
        foreach ($data as $user) {
            echo "<li><a href='" . APPLICATION_PATH . "index.php?controller=user&action=delete&user_id=$user->id'>$user->username</a></li>";
        }
        echo "</ul>";
    } else {
        echo $data->username;
    }
}
require_once "footer.php";
?>