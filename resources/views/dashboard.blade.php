<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="min-w-screen min-h-screen bg-gray-200 flex items-center justify-center px-5">
                        <div class="w-full max-w-3xl">
                            <div class="-mx-2 md:flex">
                                <div class="w-full md:w-1/3 px-2">
                                    <div class="rounded-lg shadow-sm mb-4">
                                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Today</h4>
                                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">3,682</h3>
                                                <p class="text-xs text-green-500 leading-tight">▲ 57.1%</p>
                                            </div>
                                            <div class="absolute bottom-0 inset-x-0">
                                                <canvas id="chart1" height="70"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-2">
                                    <div class="rounded-lg shadow-sm mb-4">
                                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                                <h4 class="text-sm uppercase text-gray-500 leading-tight">This Month</h4>
                                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">11,427</h3>
                                                <p class="text-xs text-red-500 leading-tight">▼ 42.8%</p>
                                            </div>
                                            <div class="absolute bottom-0 inset-x-0">
                                                <canvas id="chart2" height="70"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-2">
                                    <div class="rounded-lg shadow-sm mb-4">
                                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Last Month</h4>
                                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">8,028</h3>
                                                <p class="text-xs text-green-500 leading-tight">▲ 8.2%</p>
                                            </div>
                                            <div class="absolute bottom-0 inset-x-0">
                                                <canvas id="chart3" height="70"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="antialiased sans-serif bg-gray-200 w-lg min-h-screen ">
                        <div x-data="app()" x-cloak class="px-4">
                          <div class="max-w-lg mx-auto py-10">
                            <div class="shadow p-6 rounded-lg bg-white">
                              <div class="md:flex md:justify-between md:items-center">
                                <div>
                                  <h2 class="text-xl text-gray-800 font-bold leading-tight">Product Sales</h2>
                                  <p class="mb-2 text-gray-600 text-sm">Monthly Average</p>
                                </div>

                                <!-- Legends -->
                                <div class="mb-4">
                                  <div class="flex items-center">
                                    <div class="w-2 h-2 bg-blue-600 mr-2 rounded-full"></div>
                                    <div class="text-sm text-gray-700">Sales</div>
                                  </div>
                                </div>
                              </div>


                              <div class="line my-8 relative">
                                <!-- Tooltip -->
                                <template x-if="tooltipOpen == true">
                                  <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block"
                                       :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`"
                                       >
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
                                  <template x-for="data in chartData">

                                    <div class="px-2 w-1/6">
                                      <div :style="`height: ${data}px`"
                                           class="transition ease-in duration-200 bg-blue-600 hover:bg-blue-400 relative"
                                           @mouseenter="showTooltip($event); tooltipOpen = true"
                                           @mouseleave="hideTooltip($event)"
                                           >
                                        <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
                                      </div>
                                    </div>

                                  </template>
                                </div>

                                <!-- Labels -->
                                <div class="border-t border-gray-400 mx-auto" :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`"></div>
                                <div class="flex -mx-2 items-end">
                                  <template x-for="data in labels">
                                    <div class="px-2 w-1/6">
                                      <div class="bg-red-600 relative">
                                        <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                                        <div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
                                      </div>
                                    </div>
                                  </template>
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
                              showTooltip(e) {
                                console.log(e);
                                this.tooltipContent = e.target.textContent
                                this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
                                this.tooltipY = e.target.clientHeight + e.target.clientWidth;
                              },
                              hideTooltip(e) {
                                this.tooltipContent = '';
                                this.tooltipOpen = false;
                                this.tooltipX = 0;
                                this.tooltipY = 0;
                              }
                            }
                          }
                        </script>
                        <script>
                            const chartOptions = {
                            maintainAspectRatio: false,
                            legend: {
                                display: false,
                            },
                            tooltips: {
                                enabled: false,
                            },
                            elements: {
                                point: {
                                    radius: 0
                                },
                            },
                            scales: {
                                xAxes: [{
                                    gridLines: false,
                                    scaleLabel: false,
                                    ticks: {
                                        display: false
                                    }
                                }],
                                yAxes: [{
                                    gridLines: false,
                                    scaleLabel: false,
                                    ticks: {
                                        display: false,
                                        suggestedMin: 0,
                                        suggestedMax: 10
                                    }
                                }]
                            }
                        };
                        //
                        var ctx = document.getElementById('chart1').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: "line",
                            data: {
                                labels: [1, 2, 1, 3, 5, 4, 7],
                                datasets: [
                                    {
                                        backgroundColor: "rgba(101, 116, 205, 0.1)",
                                        borderColor: "rgba(101, 116, 205, 0.8)",
                                        borderWidth: 2,
                                        data: [1, 2, 1, 3, 5, 4, 7],
                                    },
                                ],
                            },
                            options: chartOptions
                        });
                        //
                        var ctx = document.getElementById('chart2').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: "line",
                            data: {
                                labels: [2, 3, 2, 9, 7, 7, 4],
                                datasets: [
                                    {
                                        backgroundColor: "rgba(246, 109, 155, 0.1)",
                                        borderColor: "rgba(246, 109, 155, 0.8)",
                                        borderWidth: 2,
                                        data: [2, 3, 2, 9, 7, 7, 4],
                                    },
                                ],
                            },
                            options: chartOptions
                        });
                        //
                        var ctx = document.getElementById('chart3').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: "line",
                            data: {
                                labels: [2, 5, 1, 3, 2, 6, 7],
                                datasets: [
                                    {
                                        backgroundColor: "rgba(246, 153, 63, 0.1)",
                                        borderColor: "rgba(246, 153, 63, 0.8)",
                                        borderWidth: 2,
                                        data: [2, 5, 1, 3, 2, 6, 7],
                                    },
                                ],
                            },
                            options: chartOptions
                        });
                        </script>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
