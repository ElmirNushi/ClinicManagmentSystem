<div class="item">
    <x-label for="appointment" class="item-name"
             :value="__('Appointment Payment:')"/>
    <input type="number" min="0.00" max="10000.00" step="0.01" id="appointment"
           class="appointment" name="appointment">
    @error('appointment')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
