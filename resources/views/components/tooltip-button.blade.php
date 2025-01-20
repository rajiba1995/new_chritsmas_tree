<div class="tooltip-container">
    <button type="button" 
        class="ti-btn ti-btn-sm {{ $buttonClass }} !border !border-{{ $borderClass }}/20 relative z-9"
        wire:click="{{ $action }}({{ $itemId }})" 
        wire:key="{{ $key }}-{{ $itemId }}" 
        itemId="{{ $itemId }}">
        <i class="{{ $icon }}"></i>
    </button>
    <span class="tooltip-text z-10">{{ $tooltip }}</span>
</div>
