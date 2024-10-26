@extends('layouts.app')

@section('content')

<div class="antialiased sans-serif min-h-screen">
    <div class="min-h-screen p-6 md:ml-64 block">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold text-gray-800">Akun Mahasiswa</h1>
            </div>

            <!-- Search Bar -->
            <div class="mb-4 flex justify-between items-center">
                <input 
                    type="text" 
                    id="searchInput" 
                    class="px-4 py-2 rounded-lg border border-gray-300" 
                    placeholder="Cari Nama atau Email..." 
                    onkeyup="filterTable()" />
            
                <div class="flex items-center space-x-2">
                    <select id="sortOptions" class="px-4 py-2 rounded-lg bg-gray-200 text-gray-600" onchange="applySort()">
                        <option value="">Sort By</option>
                        <option value="last_update">Last Update</option>
                        <option value="oldest_update">Oldest Update</option>
                        <option value="az">A-Z (Nama Mahasiswa)</option>
                        <option value="za">Z-A (Nama Mahasiswa)</option>
                    </select>
                </div>
                <a href="{{ route('admin.account_create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add Account</a>
            </div>

            <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
                <table id="studentTable" class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profils as $profil)
                        <tr>
                            <td class="px-4 py-4 border-b border-gray-200">{{ $profil->id }}</td>
                            <td class="px-4 py-4 border-b border-gray-200">{{ $profil->name }}</td>
                            <td class="px-4 py-4 border-b border-gray-200">{{ $profil->email }}</td>
                            <td class="px-4 py-4 border-b border-gray-200">{{ $profil->role }}</td>
                            <td class="px-4 py-4 border-b border-gray-200">
                                <a href="{{ route('admin.account_edit', $profil->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('admin.account_delete', $profil->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>   
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    // Fungsi konfirmasi sebelum menghapus akun
    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus akun ini? Tindakan ini tidak dapat dibatalkan.');
    }

    // Fungsi pencarian
    function filterTable() {
        var input, filter, table, tr, tdName, tdEmail, i, txtValueName, txtValueEmail;
        input = document.getElementById("searchInput");
        filter = input.value.toLowerCase();
        table = document.getElementById("studentTable");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "none";
            tdName = tr[i].getElementsByTagName("td")[1]; // Kolom Nama
            tdEmail = tr[i].getElementsByTagName("td")[2]; // Kolom Email

            if (tdName || tdEmail) {
                txtValueName = tdName.textContent || tdName.innerText;
                txtValueEmail = tdEmail.textContent || tdEmail.innerText;

                if (txtValueName.toLowerCase().indexOf(filter) > -1 || txtValueEmail.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                }
            }
        }
    }

    // Fungsi sorting
    function applySort() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("studentTable");
        switching = true;
        var sortType = document.getElementById("sortOptions").value;

        while (switching) {
            switching = false;
            rows = table.rows;

            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;

                // Sorting by update date
                if (sortType === "last_update" || sortType === "oldest_update") {
                    x = rows[i].getElementsByTagName("TD")[4];
                    y = rows[i + 1].getElementsByTagName("TD")[4];
                    if (sortType === "last_update" && new Date(x.innerHTML) < new Date(y.innerHTML)) {
                        shouldSwitch = true;
                        break;
                    } else if (sortType === "oldest_update" && new Date(x.innerHTML) > new Date(y.innerHTML)) {
                        shouldSwitch = true;
                        break;
                    }
                }

                // Sorting A-Z or Z-A by name
                if (sortType === "az" || sortType === "za") {
                    x = rows[i].getElementsByTagName("TD")[1];
                    y = rows[i + 1].getElementsByTagName("TD")[1];
                    if (sortType === "az" && x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    } else if (sortType === "za" && x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                }
            }

            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }
</script>

@endsection
