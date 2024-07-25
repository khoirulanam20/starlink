<x-app-layout>
    <div class="container bg-gray-50 mt-10 dark:bg-gray-700 rounded-lg shadow-md mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Pembayaran</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y mt-4 divide-gray-200">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email Registered</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Billing Period Start</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Billing Period End</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Due Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Invoice</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($pembayarans as $pembayaran)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $pembayaran->email_registered }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $pembayaran->billing_period_start }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $pembayaran->billing_period_end }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $pembayaran->due_date }}</td>
                            <td class="px-6 py-4 whitespace-nowrap  text-blue-500 hover:text-white"><a href="{{ Storage::url($pembayaran->invoice) }}" target="_blank">View Invoice</a></td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $pembayaran->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>