@if($appointments->count())
    <div class="p-6 bg-white border-b border-gray-200">
        @foreach($appointments as $appointment)
            <div class="card mb-5">
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">

                    @include('appointments.partials.indexPartials.thead')

                    @include('appointments.partials.indexPartials.tbody')

                    {{ $appointments->links() }}
                </div>
            </div>
        @endforeach
    </div>
@else
    <p style="padding: 15px"> No appointments yet add one or check again later!</p>
@endif
