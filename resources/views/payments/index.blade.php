<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('css/payments/index.css') }}">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payments') }}
        </h2>
    </x-slot>
    <x-flash/>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @include('payments.partials.indexPartials.bodyHeader')

                <div class="p-6 bg-white border-b border-gray-200">
                    <main class="page payment-page">
                        <section class="payment-form dark">
                            <div class="container">
                                <form method="POST" action="/payments/pay" enctype="multipart/form-data">
                                    @csrf

                                    <div class="products">

                                        @include('payments.partials.indexPartials.dropDownPayments')

                                        @include('payments.partials.indexPartials.appointmentPayment')

                                        @include('payments.partials.indexPartials.therapyPayment')

                                        @include('payments.partials.indexPartials.proceedButton')

                                    </div>
                                </form>

                                @include('payments.partials.indexPartials.viewPaymentsButton')

                            </div>
                        </section>
                    </main>

                    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
