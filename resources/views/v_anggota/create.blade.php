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
    <form action="{{ route('anggota.store') }}" class="max-w-sm mx-auto" method="POST" enctype="multipart/form-data"> <!-- Menambahkan enctype -->
        @csrf
        <div class="grid justify-items-center pt-6">
            <div class="w-4/5 rounded overflow-hidden shadow-xl bg-neutral-200">
                <div class="px-6 py-4">
                    <h3 class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" style="font-size: 20px">
                        <center>{{ $judul }}</center>
                    </h3>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama</label>
                        <input type="text"
                            class="block w-full rounded-md border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            name="nama" value="{{ old('nama') }}" @error('nama') is-invalid @enderror
                            placeholder="Masukan Nama Anda">
                        @error('nama')
                            <span class="invalid-feedback alert-danger" role="alert">
                                {{ $message }}
                            </span>
                        @enderror

                        <label for="" class="block pt-6 mb-2 text-sm font-medium text-gray-900 dark:text-black">HP</label>
                        <input type="text"
                            class="block w-full rounded-md border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            name="hp" id="" value="{{ old('hp') }}" @error('hp') is-invalid @enderror
                            placeholder="Masukan Nomor Hp Anda">
                        @error('hp')
                            <span class="invalid-feedback alert-danger" role="alert">
                                {{ $message }}
                            </span>
                        @enderror

                        <!-- Input untuk image -->
                        <label for="image" class="block pt-6 mb-2 text-sm font-medium text-gray-900 dark:text-black">Upload image</label>
                        <input type="file"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            name="image" id="image" @error('image') is-invalid @enderror>
                        @error('image')
                            <span class="invalid-feedback alert-danger" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <button type="submit"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Simpan</button>
                    <a href="{{ route('anggota.index') }}">
                        <button type="button"
                            class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Batal</button>
                    </a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
