<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Kategori</title>
</head>
<body>
  <h1>Data Kategori</h1>

  <a href="{{ route('product-data') }}">Data Produk</a>
  <br><br>
  <a href="{{ route('add-category') }}">Tambah Data</a>

  <table>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Opsi</th>
    </tr>
    @forelse ($categoryData as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>
          <a href="{{ route('edit-category', $item->id) }}">Edit</a>
          <form action="{{ route('delete-category', $item->id) }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit">Hapus</button>
          </form>
        </td>
      </tr>
    @empty
      <tr>
        <td colspan="3">Tidak Ada Data</td>
      </tr>
    @endforelse
  </table>
</body>
</html>