<h1>User Edit:</h1>

<?php
    print_r($this->user);
    //echo 'The id is: '.$this->user['id'];
?>
<form action="../editSave/<?php echo $this->user['id']; ?>" method="POST">
    <label for="">Username: </label><input type="text" name="username" value="<?php echo $this->user['user_name']; ?>"><br />
    <label for="">Password: </label><input type="text" name="password"><br />
    <label for="">Role: </label>
    <select name="the_role" id="">
        <option value="default" <?php if($this->user['role'] == 'default') echo 'selected'; ?>>Default</option>
        <option value="user" <?php if($this->user['role'] == 'user') echo 'selected'; ?>>User</option>
        <option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
    </select><br />
    <label for="">&nbsp;</label><input type="submit" name="submit"><br />
</form>