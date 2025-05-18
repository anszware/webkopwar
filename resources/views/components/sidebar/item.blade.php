@props(['href', 'icon' => null])
<li class="sidebar-item">
    <a wire:navigate.hover class="sidebar-link
        {{ $active ? 'active' : '' }}"href="{{ $href }}" aria-expanded="false">
        <span>
            <i class="ti ti-layout {{ $icon }}"></i>
        </span>
        <span class="hide-menu">{{ $slot }}</span>
    </a>
</li>
