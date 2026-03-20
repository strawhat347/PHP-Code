<?php
$conn = new mysqli("localhost", "root", "", "crud_db");

if (isset($_POST['create'])) {
    $conn->query("INSERT INTO users (name, email) VALUES ('{$_POST['name']}', '{$_POST['email']}')");
    header("Location: index.php");
}

// DELETE
if (isset($_GET['delete'])) {
    $conn->query("DELETE FROM users WHERE id={$_GET['delete']}");
    header("Location: index.php");
}

// UPDATE
if (isset($_POST['update'])) {
    $conn->query("UPDATE users SET name='{$_POST['name']}', email='{$_POST['email']}' WHERE id={$_POST['id']}");
    header("Location: index.php");
}

// EDIT MODE
$edit = false;
if (isset($_GET['edit'])) {
    $edit = true;
    $res = $conn->query("SELECT * FROM users WHERE id={$_GET['edit']}");
    $data = $res->fetch_assoc();
}
?>

<h3><?= $edit ? "Edit User" : "Add User" ?></h3>

<form method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>">
    
    <input type="text" name="name" placeholder="Name" value="<?= $data['name'] ?? '' ?>" required>
    <input type="email" name="email" placeholder="Email" value="<?= $data['email'] ?? '' ?>" required>
    
    <button name="<?= $edit ? 'update' : 'create' ?>">
        <?= $edit ? "Update" : "Add" ?>
    </button>
</form>

<hr>

<table border="1" cellpadding="5">
<tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Action</th>
</tr>

<?php
$res = $conn->query("SELECT * FROM users");
while ($row = $res->fetch_assoc()):
?>

<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
        <a href="?edit=<?= $row['id'] ?>">Edit</a>
        <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
    </td>
</tr>

<?php endwhile; ?>
</table>