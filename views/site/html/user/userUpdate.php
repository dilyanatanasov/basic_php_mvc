<?php

echo "<section class='content'>
        <section class='update'>
            <form action='". APPLICATION_PATH ."index.php?controller=user&action=update' method='post'>
                <input style='display: none' type='number' name='id' hidden='true' value='$data->id'><br>
                <label>Username</label>
                <input type='text' name='username' placeholder='Username' value='$data->username'><br>
                <label>First Name</label>
                <input type='text' name='first_name' placeholder='First Name' value='$data->first_name'><br>
                <label>Last Name</label>
                <input type='text' name='last_name' placeholder='Last Name' value='$data->last_name'><br>
                <label>Access</label>
                <select id='access' name='access'>
                    <option value='0'>Client</option>
                    <option value='1'>Admin</option>
                </select>
                <input type='submit' name='update' value='Update'>
            </form>
        </section>
    </section>";

echo "
<script>
    document.getElementById('access').selectedIndex = "; echo $data->access; echo ";
</script>
";