<div>
    <form method="GET" action="{{ route('admin.inventory.index') }}">
        <select name="division" class="form-control">
            <option value="">Select Division</option>
            <!-- Populate dynamically -->
            @foreach($divisions as $division)
                <option value="{{ $division }}" {{ request('division') == $division ? 'selected' : '' }}>
                    {{ $division }}
                </option>
            @endforeach
        </select>

        <select name="destination" class="form-control">
            <option value="">Select Destination</option>
            @foreach($destinations as $destination)
                <option value="{{ $destination }}" {{ request('destination') == $destination ? 'selected' : '' }}>
                    {{ $destination }}
                </option>
            @endforeach
        </select>

        <select name="category" class="form-control">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                    {{ $category }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Filter</button>
    </form>
</div>
