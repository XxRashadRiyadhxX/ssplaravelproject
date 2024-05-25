<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Total Sales Card -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-700">Total Sales</h3>
                    <div class="mt-4 text-3xl font-bold text-gray-900">
                        ${{ 15230 }}
                    </div>
                </div>

                <!-- Total Customers Card -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-700">Total Customers</h3>
                    <div class="mt-4 text-3xl font-bold text-gray-900">
                        {{ 530 }}
                    </div>
                </div>

                <!-- Total Events Registered Card -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-700">Total Event Registrations</h3>
                    <div class="mt-4 text-3xl font-bold text-gray-900">
                        {{ 240 }}
                    </div>
                </div>

                <!-- Sales by Color Pie Chart -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 col-span-2 lg:col-span-1">
                    <h3 class="text-lg font-semibold text-gray-700">Sales by Color</h3>
                    <canvas id="salesByColorChart" class="mt-4" style="max-height: 400px;"></canvas>
                </div>

                <!-- Sales by Size Pie Chart -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 col-span-2 lg:col-span-1">
                    <h3 class="text-lg font-semibold text-gray-700">Sales by Size</h3>
                    <canvas id="salesBySizeChart" class="mt-4" style="max-height: 400px;"></canvas>
                </div>

                <!-- Event Registrations Bar Chart -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 col-span-2 lg:col-span-1">
                    <h3 class="text-lg font-semibold text-gray-700">Event Registrations</h3>
                    <canvas id="eventRegistrationsChart" class="mt-4" style="max-height: 400px;"></canvas>
                </div>

                <!-- Projected Future Sales Line Chart -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 col-span-3">
                    <h3 class="text-lg font-semibold text-gray-700">Projected Future Sales</h3>
                    <canvas id="projectedSalesChart" class="mt-4" style="max-height: 400px;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data for Sales by Color Chart
        var salesByColorData = {
            labels: ['Red', 'Blue', 'Green'],
            datasets: [{
                data: [45, 30, 25],
                backgroundColor: ['#FF6384', '#36A2EB', '#4BC0C0'],
            }]
        };

        // Data for Sales by Size Chart
        var salesBySizeData = {
            labels: ['Size 7', 'Size 8', 'Size 9', 'Size 10', 'Size 11'],
            datasets: [{
                data: [10, 20, 30, 25, 15],
                backgroundColor: ['#FFCE56', '#FF6384', '#36A2EB', '#4BC0C0', '#9966FF'],
            }]
        };

        // Data for Event Registrations Chart
        var eventRegistrationsData = {
            labels: ['Event 1', 'Event 2', 'Event 3'],
            datasets: [{
                label: 'Registrations',
                data: [80, 90, 70],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
            }]
        };

        // Data for Projected Future Sales Chart
        var projectedSalesData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Projected Sales',
                data: [5000, 6000, 7000, 8000, 9000, 10000],
                borderColor: '#4BC0C0',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
                tension: 0.1
            }]
        };

        // Options for the charts
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
        };

        // Create Sales by Color Chart
        var ctxColor = document.getElementById('salesByColorChart').getContext('2d');
        new Chart(ctxColor, {
            type: 'pie',
            data: salesByColorData,
            options: chartOptions
        });

        // Create Sales by Size Chart
        var ctxSize = document.getElementById('salesBySizeChart').getContext('2d');
        new Chart(ctxSize, {
            type: 'pie',
            data: salesBySizeData,
            options: chartOptions
        });

        // Create Event Registrations Chart
        var ctxEvents = document.getElementById('eventRegistrationsChart').getContext('2d');
        new Chart(ctxEvents, {
            type: 'bar',
            data: eventRegistrationsData,
            options: chartOptions
        });

        // Create Projected Future Sales Chart
        var ctxProjectedSales = document.getElementById('projectedSalesChart').getContext('2d');
        new Chart(ctxProjectedSales, {
            type: 'line',
            data: projectedSalesData,
            options: chartOptions
        });
    </script>
</x-app-layout>
