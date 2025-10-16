<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        body { font-family: sans-serif; }
        h1 { text-align: center; margin-bottom: 20px; }
        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            vertical-align: top;
        }
        th {
            background-color: #3f51b5; 
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .book-photo {
            max-width: 80px;
            height: auto;
            border-radius: 4px;
        }
        .price {
            white-space: nowrap; 
            font-weight: 600;
            color: #4CAF50; 
        }
    </style>
</head>
<body>
    <h1>Daftar Buku Tersedia</h1>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Foto Sampul</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <img src="{{ $book['cover_photo'] ?? 'placeholder.jpg' }}" alt="Sampul {{ $book['title'] }}" class="book-photo">
                    </td>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ Str::limit($book['description'], 150) }}</td>
                    <td class="price">Rp. {{ number_format($book['price'], 0, ',', '.') }}</td>
                    <td>{{ $book['stock'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
