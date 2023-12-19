<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Favorit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">

    <div class="container mt-5 p-4 rounded-lg shadow-md" style="background-color: #779be7;">

    <h1 class="font-semibold font-sans text-center text-xl text-gray-800 dark:text-gray-200 leading-tight"
        style="font-weight: bold; color: white;">
            Kategori Buku
    </h1>
    <br>
    <table class="table table-bordered" style="font-weight:bold; font-size:medium; color:#1b2021; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
    <thead class="text-center" style="background-color: #f49cbb;" >
    <tr>
        <th scope="col" class="px-6 py-3">Kategori</th>
        <th scope="col" class="px-6 py-3">Judul Buku</th>
    </tr>
    </thead>
    <tbody class="text-center">
    @foreach ($addKategori as $data_buku)
    <tr>
         <td class="px-6 py-4">{{$}}</td>
         <td class="px-6 py-4">{{$data_buku->judul_buku}}</td>
        
    </td>
    @endforeach
    </tbody>
</table>
</div>
</div>
</body>
</html>

