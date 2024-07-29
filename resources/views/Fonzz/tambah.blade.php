@extends('layout')

@section('content')
 <!-- ini untuk css jika lebih cantik
    Untuk mengatur Style Pada CSS //Tambah.blade.php-->
     <style>
        h1 {
            text-align:center;
            font-size: 50px;
            font-family: "Lucida Handwriting", cursive;
        }

        label {
            font-size: 35px;
            margin-bottom: 4%;
        } 
    </style>
<h1>Tambah Hewan</h1>
<center>
<a href="{{ route('Fonzz.index') }}" >Kembali ke Tampilan utama</a>
    <form action="{{ route('hewan.store') }}" method="post">
        @csrf
        <div>
            <label for="hewan">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Hewan" required>
        </div>
        <br>
        <div>
            <label for="hewan">Jenis</label>
            <input type="text" name="jenis" id="jenis" placeholder="Hewan" required>
        </div>
        <br>
        <div>
            <label for="hewan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" placeholder="Hewan" required></textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
</center>
@endsection


                                                        <!-- W=Fonzz -->
  