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
                    placeholder="Cari Nama atau NIM..." 
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
            </div>

            <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
                <table id="studentTable" class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Mahasiswa</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIM</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Password</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Perubahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="p-5">1</td>
                            <td class="p-5">Cameron Williamson</td>
                            <td class="p-5">3202216125</td>
                            <td class="p-5">nanda.nadlirin@gmail.com</td>
                            <td class="p-5">admin123</td>
                            <td class="p-5">12-10-2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    // fungsi untuk searching datanya
    function filterTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toLowerCase();
        table = document.getElementById("studentTable");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "none";
            tdName = tr[i].getElementsByTagName("td")[1]; // Nama Mahasiswa
            tdNIM = tr[i].getElementsByTagName("td")[2];  // NIM

            if (tdName || tdNIM) {
                txtValueName = tdName.textContent || tdName.innerText;
                txtValueNIM = tdNIM.textContent || tdNIM.innerText;

                if (txtValueName.toLowerCase().indexOf(filter) > -1 || txtValueNIM.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                }
            }
        }
    }

    // ini untok sorting
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

                x = rows[i].getElementsByTagName("TD")[5]; // berdasarkan tanggal
                y = rows[i + 1].getElementsByTagName("TD")[5];

                // fungsi sorting dari yang lamak sampai terbaru
                if (sortType === "last_update") {
                    if (new Date(x.innerHTML) < new Date(y.innerHTML)) {
                        shouldSwitch = true;
                        break;
                    }
                } else if (sortType === "oldest_update") {
                    if (new Date(x.innerHTML) > new Date(y.innerHTML)) {
                        shouldSwitch = true;
                        break;
                    }
                }

                // Sorting by A-Z or Z-A (Nama Mahasiswa)
                x = rows[i].getElementsByTagName("TD")[1];
                y = rows[i + 1].getElementsByTagName("TD")[1];

                if (sortType === "az") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                    }
                } else if (sortType === "za") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
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
