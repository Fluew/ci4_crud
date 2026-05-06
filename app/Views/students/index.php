<h2>Students</h2>

<a href="/students/create">Add Student</a>

<form method="get">
    <input type="text" name="keyword" placeholder="Search name or email">
    <button type="submit">Search</button>
    <a href="/students">Reset</a>
</form>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($students as $student): ?>
    <tr>
        <td><?= $student['name'] ?></td>
        <td><?= $student['email'] ?></td>
        <td>
            <a href="/students/edit/<?= $student['id'] ?>">Edit</a>
            <a href="/students/delete/<?= $student['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<div class="mt-3">
    <?= $pager->links() ?>
</div>