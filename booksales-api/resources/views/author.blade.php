<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Author</title>
    <style>
        table, th, td { border: 1px solid #ccc; border-collapse: collapse; padding: 10px; }
        th { background-color: #f4f4f4; }
        table { width: 80%; margin: 20px auto; }
        h1 { text-align: center; }
    </style>
</head>
<body>
    <h1>Daftar Author</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nama Penulis</th>
                <th>Biografi (Bio)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author['name'] }}</td>
                    <td>{{ $author['bio'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
