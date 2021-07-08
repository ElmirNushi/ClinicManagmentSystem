<div class="item">
    <x-label for="therapy" class="item-name" :value="__('Supplys/Therapy:')"/>
    <input type="number" min="0.00" max="10000.00" step="0.01" id="therapy"
           class="therapy" name="therapy">
    @error('appointment')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
