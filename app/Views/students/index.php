<!DOCTYPE html>
<html>
<head>
    <title>Student System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Student Management System</h2>
        <a href="/students/create" class="btn btn-primary">+ Add Student</a>
    </div>

    <!-- SEARCH -->
    <form method="get" class="mb-3">
        <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="Search name or email">
            <button class="btn btn-dark">Search</button>
            <a href="/students" class="btn btn-secondary">Reset</a>
        </div>
    </form>

    <!-- TABLE -->
    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th width="200">Actions</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td>
                    <a href="/students/edit/<?= $student['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/students/delete/<?= $student['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>

    <!-- PAGINATION -->
    <div class="mt-3">
        <?= $pager->links() ?>
    </div>

</div>

</body>
</html>