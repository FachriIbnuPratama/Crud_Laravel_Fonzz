@extends('layout')

@section('content')
    <!-- ini untuk css jika lebih cantik
    Untuk mengatur Style Pada CSS //Index.blade.php  -->
    <style>
        h1 {
            text-align:center;
            font-size: 50px;
            font-family: "Lucida Handwriting", cursive;
        }

        table {
            margin-left:auto;
            margin-right:auto;
            width:50%;
        }

        h1, table {
            margin-bottom:3.0%;
        }

        /* General link styles */
        a.tambah-button {
            display: inline-block;
            padding: 10px 20px;
            margin-left:370px;
            margin-right:auto;
            align:center;
            background-color: #28a745; /* Green background */
            color: white; /* White text */
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        /* Hover effect */
        a.tambah-button:hover {
            background-color: #218838; /* Darker green on hover */
        }

        /* Active effect */
        a.tambah-button:active {
            background-color: #1e7e34; /* Even darker green on active/click */
        }

        a.edit-button {
            display: inline-block;
            padding: 5px 20px;
            margin:10px 0;
            background-color: #00008B; /* Blue background */
            color: white; /* White text */
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        /* Hover effect */
        a.edit-button:hover {
            background-color: #00000b; /* Darker blue on hover */
        }

        /* Active effect */
        a.edit-button:active {
            background-color: #ffffff; /* White on hover */
            color: black; /* black text */
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        } 
    </style>                                                  -->
    <h1>Jenis-jenis Hewan di Dunia</h1>
    <a href="{{ route('hewan.create') }}" class="tambah-button">+ Tambah</a>
    <br>
    <br>
    <table border="4">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Keterangan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hewans as $hewan)
            <tr>
                <td>{{ $hewan->id }}</td>
                <td>{{ $hewan->nama }}</td>
                <td>{{ $hewan->jenis }}</td>
                <td>{{ $hewan->keterangan }}</td>
                <td>
                    <a href="{{ url('/hewan/' . $hewan->id) }}" class="edit-button">Edit</a>
                    ||
                    <form action="{{ url('/hewan/' . $hewan->id) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

 



                                                        <!-- W=Fonzz -->
    