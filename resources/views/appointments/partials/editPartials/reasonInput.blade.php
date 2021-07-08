<div class="mt-4 mb-5">
    <x-label for="reason" :value="__('Reason')"/>
    <textarea
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
        id="reason"
        name="reason"
        placeholder="Write The Reason..."></textarea>
    <script>
        document.getElementById("reason").value += "{{ $appointment->reason }}";
    </script>
    @error('reason')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
