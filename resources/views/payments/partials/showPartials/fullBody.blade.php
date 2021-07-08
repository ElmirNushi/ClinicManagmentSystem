<div class="container">
    <div class="row">
        <div class="">
            <div class="card">

                @include('payments.partials.showPartials.bodyHeader')

                @if($payments->count())
                    <hr class="mb-5"/>
                    <div class="table-responsive">
                        <table class="table no-wrap user-table mb-0">

                            @include('payments.partials.showPartials.theadPayments')

                            @include('payments.partials.showPartials.userInfos')

                        </table>
                        {{ $payments->links() }}
                    </div>
                @else
                    <p>No payments yet, add one to see them!</p>
                @endif
            </div>
        </div>
    </div>
</div>
