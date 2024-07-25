<x-app-layout>
    <div class="container bg-gray-50 mt-10 dark:bg-gray-700 rounded-lg shadow-md mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Update Payment</h1>
        <div class="mt-8">
            <form action="{{ route('pembayaran.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <x-input-label for="email_registered" :value="__('Select Email to Update')" />
                    <select id="email_registered" name="email_registered" class="mt-1 block w-full text-black" required>
                        @foreach($emails as $email)
                            <option value="{{ $email }}">{{ $email }}</option>
                        @endforeach
                    </select>
                    <x-input-error class="mt-2" :messages="$errors->get('email_registered')" />
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
                    <x-primary-button>{{ __('Update') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>