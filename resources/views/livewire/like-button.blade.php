<button wire.loading.attr="disabled" wire:click='toggleLike()' class="flex items-center">

    <svg wire:loading.delay class="h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" width="" height=""
        viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
            <path stroke-dasharray="16" stroke-dashoffset="16" d="M12 3c4.97 0 9 4.03 9 9">
                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="16;0" />
                <animateTransform attributeName="transform" dur="1.5s" repeatCount="indefinite" type="rotate"
                    values="0 12 12;360 12 12" />
            </path>
            <path stroke-dasharray="64" stroke-dashoffset="64" stroke-opacity="0.3"
                d="M12 3c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9c0 -4.97 4.03 -9 9 -9Z">
                <animate fill="freeze" attributeName="stroke-dashoffset" dur="1.2s" values="64;0" />
            </path>
        </g>
    </svg>

    <svg wire:loading.delay.remove xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor"
        class="w-6 h-6 {{ (Auth::user()?->hasLiked($post)) ? 'text-red-600' : 'text-gray-600' }} hover:text-gray-900">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
    </svg>
    <span class="text-gray-600 ml-2">
        {{$post->likes()->count()}}
    </span>
</button>