<div class="grid lg:grid-cols-2 gap-3">
    <div class="space-y-2">
        <!-- Destination Select -->
        <x-form-field 
            type="select" 
            name="destination" 
            label="Destination" 
            :options="$destinations->pluck('name', 'id')" 
            :value="old('destination')" 
            wire:change="loadDivisions($event.target.value)"
            wire:model="selectedDestination" 
            class="form-control-lg"
        />
        @error('destination')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="space-y-2">
        <!-- Division Select -->
        <x-form-field 
            type="select" 
            name="division" 
            label="Division" 
            :options="$divisions" 
            :value="old('division')" 
            wire:model="selectedDivision" 
            class="form-control-lg"
        />
        @error('division')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
</div>