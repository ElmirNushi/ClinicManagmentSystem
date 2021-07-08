@if(session()->has('success'))
    <div x-data="{show: true}"
         x-init="setTimeout(() => show = false, 5000)"
         x-show="show"
         class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase">
        <p>
            {{ session('success') }}
        </p>
    </div>
@endif
