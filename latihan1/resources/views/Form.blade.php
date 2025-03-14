<!-- resources/views/profile.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Profile Form</h2>
        <form action="/submit-form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" name="kelas" required>
            </div>
            <div class="form-group">
                <label for="judulposter">Judul Poster:</label>
                <input type="text" class="form-control" name="judulposter" required>
            </div>
            <div class="form-group">
                <label for="form_photo">Profile Photo:</label>
                <input type="file" class="form-control-file" name="form_photo" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>