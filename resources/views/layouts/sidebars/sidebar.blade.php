<!-- resources/views/partials/sidebar.blade.php -->
@if (Auth::user()->hasRole('Admin'))
    @include('partials.admin-sidebar')
@elseif (Auth::user()->hasRole('Dosen'))
    @include('partials.dosen-sidebar')
    @elseif (Auth::user()->hasRole('Mahasiswa'))
    @include('partials.mahasiswa-sidebar')
@endif
