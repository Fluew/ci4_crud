<h2>Edit Student</h2>

<form method="post" action="/students/update/<?= $student['id'] ?>">
    <input type="text" name="name" value="<?= $student['name'] ?>">
    <input type="email" name="email" value="<?= $student['email'] ?>">
    <button type="submit">Update</button>
</form>