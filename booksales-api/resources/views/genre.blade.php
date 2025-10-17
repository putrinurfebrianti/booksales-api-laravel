<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Genre</title>
    <style>
        table, th, td { 
            border: 1px solid #ccc; 
            border-collapse: collapse; 
            padding: 12px; 
            text-align: left;
        }
        th { 
            background-color: #f4f4f4; 
        }
        table { 
            width: 80%; 
            margin: 20px auto; 
        }
        h1 { 
            text-align: center; 
        }
    </style>
</head>
<body>
    <h1>Daftar Genre</h1>

    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Genre</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $index => $genre)
                <tr>
                    <td>{{ $index + 1 }}</td> 
                    <td>{{ $genre['name'] }}</td>
                    <td>{{ $genre['description'] }}</td>
                    <td>{{ $genre['genre_id'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
