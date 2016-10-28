<div class="container">
    <h2>Current Directory: application/view/home/example_one.php</h2>

    <div class="box">
        <h3>Add User</h3>
        <form action="<?php echo URL; ?>songs/adduser" method="POST">
            <label>Name</label>
            <input type="text" name="user_name" value="" required />
            <label>UserType</label>
            <input type="text" name="user_type" value="" />
            <input type="submit" name="submit_add_user" value="Submit" />
        </form>
    </div>


    <div class="box">
        <div>
            <div id="javascript-ajax-result-box"></div>
        </div>
        <h3>List of Users (data from first model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>UserType</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php if (isset($user->id)) echo htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($user->user_name)) echo htmlspecialchars($user->user_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($user->user_type)) echo htmlspecialchars($user->user_type, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>