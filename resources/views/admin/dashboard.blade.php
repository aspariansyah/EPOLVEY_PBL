@extends('layouts.app')

@section('content')

<div class="antialiased sans-serif min-h-screen">
    <div class="min-h-screen p-6 md:ml-64 block">

        <!-- Data Boxes Section -->
        <div class="min-h-screen bg-gray-100 flex items-start justify-center p-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full max-w-7xl">

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
        <div class="lg:-mt-[400px] bg-white p-6 rounded-lg shadow-lg w-full">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Survey Status</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-600">No</th>
                            <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-600">Nama Survey</th>
                            <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-600">Tanggal Rilis</th>
                            <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-600">Status</th>
                            <th class="py-2 px-4 bg-gray-200 text-left text-sm font-medium text-gray-600"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($surveys as $survey)
                        <!-- Row 1 -->
                        <tr>
                            <td class="p-5 border-y">{{ $loop->iteration }}</td>
                            <td class="border-y">{{ $survey->nama }}</td>
                            <td class="border-y">{{ $survey->updated_at->format('d M Y') }}</td>
                            <td class="py-2 px-4 border-b">
                                <span class="text-green-600 font-semibold">Active</span>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <button class="text-white hover:bg-blue-800 bg-blue-600 px-6 py-1 rounded">View</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
