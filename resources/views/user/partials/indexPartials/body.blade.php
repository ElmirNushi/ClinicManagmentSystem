<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-red-500 border-b border-gray-200">

                @include('user.partials.indexPartials.bodyHeader')

            </div>

            <hr/>
            <hr/>
            <hr/>
            <hr/>
            <hr/>

            <div class="p-6 bg-white border-b border-gray-200">
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">

                    @include('user.partials.indexPartials.theadUser')

                    @include('user.partials.indexPartials.tableUser')

                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
