<div class="form-group mb-4">
    <label for="{{ $id }}" class="block text-gray-700 font-medium mb-2">{{ ucfirst($name) }}</label>
    <div class="relative">
        <!-- Phone Number Input -->
        <input type="number" 
               id="{{ $id }}" 
               name="{{ $name }}" 
               class="ti-form-input ltr:pl-20 rtl:pr-20 focus:z-10" 
               placeholder="{{ $placeholder }}" 
               value="{{ $value ?? old($name) }}" /> <!-- Use the passed value or fallback to old -->
        
        <!-- Country Selector -->
        <div class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center text-gray-500 dark:text-white/70 ltr:pl-px rtl:pr-px">
            <label for="{{ $id }}-country" class="sr-only">Country</label>
            <select id="{{ $id }}-country" 
                    name="{{ $id }}-country" 
                    class="block w-full border-defaultborder !py-1 !border-0 dark:border-defaultborder/10 focus:ring-primary focus:border-primary dark:bg-bodybg rtl:ps-2 rtl:pe-[2.25rem]">
                @foreach ($countries as $country)
                    <option value="{{ $country }}" 
                        {{ $country === $selectedCountry ? 'selected' : '' }}>
                        {{ $country }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
