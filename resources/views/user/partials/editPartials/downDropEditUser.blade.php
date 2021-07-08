<div class="mt-4">
    <x-label for="category_id" :value="__('Category')"/>


    <select class="form-control category-select"
            id="category_id"
            type="text"
            name="category_id"
    >
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->role }}</option>
        @endforeach
    </select>
</div>
