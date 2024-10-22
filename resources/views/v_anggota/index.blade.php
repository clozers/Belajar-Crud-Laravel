<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="grid justify-items-center pt-6">
        <div class="w-4/5 rounded overflow-hidden shadow-xl bg-neutral-200">
            <h1 class="grid justify-items-center font-[Poppins] text-4xl">Data Table</h1>
            <div class="px-6 py-4">
                <table class="w-full text-sm text-left rtl:text-right text-zinc-950 dark:text-zinc-950">
                    <thead class="text-xs text-neutral-50 uppercase bg-slate-950 dark:bg-neutral-50 dark:text-zinc-950">
                        <tr class="">
                            <th class="px-6 py-3">No</th>
                            <th class="px-6 py-3">Nama</th>
                            <th class="px-6 py-3">HP</th>
                            <th class="px-6 py-3">Image</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($index as $row)
                            <tr class="bg-white border-b dark:bg-neutral-300 dark:border-red-700">
                                <td class="px-6 py-3">{{ $loop->iteration }}</td>
                                <td class="px-6 py-3">{{ $row->nama }}</td>
                                <td class="px-6 py-3">{{ $row->hp }}</td>
                                <td class="px-6 py-3">
                                    @if ($row->image)
                                        <img src="{{ asset('storage/' . $row->image) }}" alt="Gambar Anggota"
                                            class="w-16 h-16 object-cover">
                                    @else
                                        <p>Gambar tidak tersedia</p>
                                    @endif
                                </td>
                                <td class="px-6 py-3">
                                    <a href="{{ route('anggota.edit', $row->id) }}">
                                        <button type="button"
                                            class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Ubah</button>
                                    </a>
                                    <form action="{{ route('anggota.destroy', $row->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" type="button"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pt-6">
                    <a href="{{ route('anggota.create') }}">
                        <button type="button"
                            class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Tambah</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
