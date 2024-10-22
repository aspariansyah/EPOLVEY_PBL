@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Edit Survei</h1>

    <form action="{{ route('admin.update_survey', $survey->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nama" class="block">Judul Survei:</label>
            <input type="text" name="nama" id="nama" class="w-full p-2 border border-gray-300 rounded" value="{{ $survey->nama }}" required>
        </div>

        <div class="mb-4">
            <label for="jenis" class="block">Jenis Survei:</label>
            <select name="jenis" id="jenis" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="IKAD" {{ $survey->jenis == 'IKAD' ? 'selected' : '' }}>IKAD</option>
                <option value="Survey kepuasan" {{ $survey->jenis == 'Survey kepuasan' ? 'selected' : '' }}>Survey Kepuasan</option>
                <option value="Jenis baru" {{ $survey->jenis == 'Jenis baru' ? 'selected' : '' }}>Jenis Baru</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="semester" class="block">Semester:</label>
            <select name="semester" id="semester" class="w-full p-2 border border-gray-300 rounded" required>
                @for($i = 1; $i <= 6; $i++)
                    <option value="{{ $i }}" {{ $survey->semester == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </div>

        <div class="mb-4">
            <label for="tahun" class="block">Tahun:</label>
            <input type="number" name="tahun" id="tahun" class="w-full p-2 border border-gray-300 rounded" value="{{ $survey->tahun }}" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block">Status:</label>
            <select name="status" id="status" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="berlangsung" {{ $survey->status == 'berlangsung' ? 'selected' : '' }}>Berlangsung</option>
                <option value="selesai" {{ $survey->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>

        <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded">Update</button>
    </form>
</div>
@endsection
