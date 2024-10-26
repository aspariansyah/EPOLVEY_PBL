@extends('layouts.app')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="flex flex-col h-screen">

  <div class="antialiased sans-serif min-h-screen ">
    <div class="min-h-screen p-6 md:ml-64 block">
      
      {{-- Chart --}}
      <div x-data="app()" x-cloak class="px-4">
        <div class="w-full max-w-4xl mx-auto py-10">
          <div class="shadow p-6 rounded-lg bg-white">
            <div class="md:flex md:justify-between md:items-center">
              <div>
                <h2 class="text-xl text-gray-800 font-bold leading-tight">Product Sales</h2>
                <p class="mb-2 text-gray-600 text-sm">Monthly Average</p>
              </div>

              <!-- Legends -->
              <div class="mb-4">
                <div class="flex items-center">
                  <div class="w-96 h-2 bg-blue-600 mr-2 rounded-full"></div>
                  <div class="text-sm text-gray-700">Sales</div>
                </div>
              </div>
            </div>

            <div class="line my-8 relative">
              <!-- Tooltip -->
              <template x-if="tooltipOpen == true">
                <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block"
                     :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`">
                  <div class="shadow-xs rounded-lg bg-white p-2">
                    <div class="flex items-center justify-between text-sm">
                      <div>Sales:</div>
                      <div class="font-bold ml-2">
                        <span x-html="tooltipContent"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </template>

              <!-- Bar Chart -->
              <div class="flex -mx-2 items-end mb-2">
                <template x-for="(data, index) in chartData">
                  <div class="px-2 w-1/6">
                    <div :style="`height: ${data}px`"
                         class="transition ease-in duration-200 bg-blue-600 hover:bg-blue-400 relative"
                         @mouseenter="showTooltip($event); tooltipOpen = true"
                         @mouseleave="hideTooltip($event)"
                         @click="showDetails(index)">
                      <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
                    </div>
                  </div>
                </template>
              </div>

              <!-- Labels -->
              <div class="border-t border-gray-400 mx-auto" :style="`height: 1px; width: ${100 - 1/chartData.length*100 + 3}%`"></div>
              <div class="flex -mx-2 items-end">
                <template x-for="label in labels">
                  <div class="px-2 w-1/6">
                    <div class="bg-red-600 relative">
                      <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                      <div x-text="label" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
                    </div>
                  </div>
                </template>  
              </div>
            </div>

            <!-- Table Display for Chart Details -->
            <div class="mt-8">
              <h3 class="text-lg font-semibold text-gray-800" x-show="selectedData !== null">Selected Month Details</h3>
              <table class="min-w-full leading-normal mt-4" x-show="selectedData !== null">
                <thead>
                  <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Month</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Sales</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" x-text="selectedLabel"></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" x-text="selectedData"></td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function app() {
      return {
        chartData: [112, 10, 225, 134, 101, 80, 50, 100, 200],
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],

        tooltipContent: '',
        tooltipOpen: false,
        tooltipX: 0,
        tooltipY: 0,
        selectedData: null,
        selectedLabel: '',

        showTooltip(e) {
          this.tooltipContent = e.target.textContent;
          this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
          this.tooltipY = e.target.clientHeight + e.target.clientWidth;
        },
        hideTooltip(e) {
          this.tooltipContent = '';
          this.tooltipOpen = false;
          this.tooltipX = 0;
          this.tooltipY = 0;
        },
        showDetails(index) {
          this.selectedData = this.chartData[index];
          this.selectedLabel = this.labels[index];
        }
      }
    }
  </script>
</div>
@endsection
