@extends('layouts.app')

@section('content')

<div class="antialiased sans-serif min-h-screen">
    <div class="min-h-screen p-6 md:ml-64 block">

        <!-- Data Boxes Section -->
        <div class="min-h-screen bg-gray-100 flex items-start justify-center p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 w-full max-w-7xl">

                <!-- Box 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Total Sales</h3>
                    <p class="text-3xl font-bold text-blue-600">75%</p>
                    <div class="mt-2 text-sm text-gray-500">Compared to last month</div>
                </div>

                <!-- Box 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Customer Satisfaction</h3>
                    <p class="text-3xl font-bold text-green-500">89%</p>
                    <div class="mt-2 text-sm text-gray-500">Positive feedback rate</div>
                </div>

                <!-- Box 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Revenue Growth</h3>
                    <p class="text-3xl font-bold text-yellow-500">22%</p>
                    <div class="mt-2 text-sm text-gray-500">Increase from last quarter</div>
                </div>

                <!-- Box 4 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Active Users</h3>
                    <p class="text-3xl font-bold text-red-500">1,200</p>
                    <div class="mt-2 text-sm text-gray-500">Users online today</div>
                </div>
            </div>
        </div>

        <!-- Survey Table Section (Reduced Spacing) -->
        <div class="-mt-[620px] bg-white p-6 rounded-lg shadow-lg w-full">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Survey List</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-600">No</th>
                            <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-600">Nama Survey</th>
                            <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-600">Tanggal Rilis</th>
                            <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-600">Status</th>
                            <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-600"></th>
                            <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-600"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="py-2 px-4 border-b">1</td>
                            <td class="py-2 px-4 border-b">Survey Kepuasan Mahasiswa</td>
                            <td class="py-2 px-4 border-b">2024-10-01</td>
                            <td class="py-2 px-4 border-b">
                                <span class="text-green-600 font-semibold">Active</span>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <button class="text-blue-500 hover:underline">Edit</button>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <button class="text-red-500 hover:underline">Hapus</button>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                            <td class="py-2 px-4 border-b">2</td>
                            <td class="py-2 px-4 border-b">Survey Pelatihan Dosen</td>
                            <td class="py-2 px-4 border-b">2024-09-15</td>
                            <td class="py-2 px-4 border-b">
                                <span class="text-brown-600 font-semibold">Expired</span>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <button class="text-blue-500 hover:underline">Edit</button>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <button class="text-red-500 hover:underline">Hapus</button>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr>
                            <td class="py-2 px-4 border-b">3</td>
                            <td class="py-2 px-4 border-b">Survey Kualitas Fasilitas</td>
                            <td class="py-2 px-4 border-b">2024-10-05</td>
                            <td class="py-2 px-4 border-b">
                                <span class="text-green-600 font-semibold">Active</span>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <button class="text-blue-500 hover:underline">Edit</button>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <button class="text-red-500 hover:underline">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
