@props(['active'=>false])

<a class="{{ $active ? 'text-appwrite-pink': 'text-gray-400 hover:text-gray-200'}} transition-colors rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>
