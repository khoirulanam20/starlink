<x-app-layout>
    <div class="container bg-gray-50 mt-10 dark:bg-gray-700 rounded-lg shadow-md mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Input Payment</h1>
        <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <x-input-label for="email_registered" :value="__('Email Registered')" />
                <x-text-input id="email_registered" name="email_registered" type="email" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('email_registered')" />
            </div>
            <div>
                <x-input-label for="billing_period_start" :value="__('Billing Period Start')" />
                <x-text-input id="billing_period_start" name="billing_period_start" type="date" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('billing_period_start')" />
            </div>
            <div>
                <x-input-label for="billing_period_end" :value="__('Billing Period End')" />
                <x-text-input id="billing_period_end" name="billing_period_end" type="date" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('billing_period_end')" />
            </div>
            <div>
                <x-input-label for="due_date" :value="__('Due Date')" />
                <x-text-input id="due_date" name="due_date" type="date" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('due_date')" />
            </div>
            <div>
                <x-input-label for="invoice" :value="__('Invoice (PDF)')" />
                <x-text-input id="invoice" name="invoice" type="file" class="mt-1 block w-full" required />
                <x-input-error class="mt-2" :messages="$errors->get('invoice')" />
            </div>
            <div>
                <x-input-label for="status" :value="__('Status')" />
                <select id="status" name="status" class="mt-1 block w-full text-black" required>
                    <option value="unpaid">Unpaid</option>
                    <option value="paid">Paid</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('status')" />
            </div>
            <div class="flex items-center gap-4 mt-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>