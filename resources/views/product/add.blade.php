<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Produk</title>
</head>
<body>
  <h1>Tambah Produk</h1>
  <a href="{{ route('product-data') }}">Kembali</a>

  <form action="{{ route('store-product') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nama Produk">
    <input type="text" name="stock" placeholder="Stok Produk">

    <select name="category">
      <option selected disabled>Select Option</option>
      @forelse ($categoryData as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
      @empty
        <option disabled>Tidak Ada Kategori</option>
      @endforelse
    </select>

    <button type="submit">Simpan</button>
  </form>
</body>
</html>