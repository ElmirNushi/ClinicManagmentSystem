@if($patients->count())
    <div class="table-responsive">
        <table class="table no-wrap user-table mb-0">

            @include('patients.partials.indexPartials.tableHeader')

            @include('patients.partials.indexPartials.tBody')


        </table>
        {{ $patients->links() }}
    </div>
@else
    <p>No patients yet, add one to see them!</p>
@endif
