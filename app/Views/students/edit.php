<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-warning">
            Edit Student
        </div>

        <div class="card-body">

            <form method="post" action="/students/update/<?= $student['id'] ?>">

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="<?= $student['name'] ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" value="<?= $student['email'] ?>" class="form-control">
                </div>

                <button class="btn btn-primary">Update</button>
                <a href="/students" class="btn btn-secondary">Cancel</a>

            </form>

        </div>
    </div>

</div>

</body>
</html>