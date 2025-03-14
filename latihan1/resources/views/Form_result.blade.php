<!-- resources/views/profile_result.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Result</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Poster Information</h1>
        <p>Nama: {{ $data['nama'] }}</p>
        <p>Kelas: {{ $data['kelas'] }}</p>
        <p>Judul Poster: {{ $data['judulposter'] }}</p>
        <p>Photo:</p>
        <img src="{{ asset('storage/' . $data['photo_path']) }}" width="200" alt="Form Photo">
    </div>
</body>
</html>