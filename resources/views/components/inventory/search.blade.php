<div>
    <form method="GET" action="{{ route('admin.inventory.index') }}">
        <input 
            type="text" 
            name="search" 
            class="form-control" 
            placeholder="Quick Search"
            value="{{ request('search') }}"
        >
        <button type="submit" class="btn btn-primary mt-2">Search</button>
    </form>
</div>
