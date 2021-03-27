<?php
echo "
<section class='user'>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>";
foreach ($data as $user) {
    echo "
        <tr>
            <td>$user->username</td>
            <td>$user->first_name</td>
            <td>$user->last_name</td>
            <td>";
    echo label_for_access($user->access);
    echo "</td>
            <td>
                <form action='" . APPLICATION_PATH . "index.php?controller=user&action=update' method='post'>
                    <button class='update' type='submit'>Update</button>
                </form>
                <form action='" . APPLICATION_PATH . "index.php?controller=user&action=delete' method='post'>
                    <button class='delete' type='submit' name='delete_id' value='$user->id'>Delete</button>
                </form>
            </td>
        </tr>
    ";
}
echo "  </tbody>
    </table>
</section>";