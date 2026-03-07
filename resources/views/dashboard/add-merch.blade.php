<x-dash title="ADD MERCH">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/add-merch.css') }}">
    @endpush
    <div class="form-container">
        <h1>ADD MERCH</h1>
        @if (session('success'))
            <p class="form-success">{{ session('success') }}</p>
        @endif
        <form class="add-merch-form" action="{{ route('storeMerch') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <label for="merch_title">Title</label>
                <input type="text" class="merch_input" name="title" id="merch_title">
            </div>
            <div class="form-row">
                <label for="merch_image">Image</label>
                <input type="file" class="merch_input" name="image" id="merch_image">
            </div>
            <div class="form-row">
                <label for="merch_price">Price</label>
                <input type="number" class="merch_input" name="price" id="merch_price" step="0.01" min="0">
            </div>
            <div class="form-row">
                <label for="merch_quantity">Quantity</label>
                <input type="number" class="merch_input" name="quantity" id="merch_quantity" min="0">
            </div>
            <div class="form-row">
                <label for="merch_description">Description</label>
                <textarea name="description" id="merch_description" cols="10" rows="5"></textarea>
            </div>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</x-dash>
