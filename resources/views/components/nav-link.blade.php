@props(['active'=>false])

@php
    $href = $attributes->get('href', '');
    $isLogin = str_contains($href, '/login');
    $isRegister = str_contains($href, '/register');

    if ($isLogin) {
        $classes = 'inline-flex items-center px-4 py-2 border border-gray-600 text-sm font-medium rounded-lg shadow-sm text-gray-200 bg-transparent hover:bg-gray-700 hover:border-gray-500 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-appwrite-pink mr-2';
    } elseif ($isRegister) {
        $classes = 'inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-appwrite-pink hover:bg-appwrite-pink-hover transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-appwrite-pink';
    } else {
        $classes = ($active ? 'text-appwrite-pink': 'text-gray-400 hover:text-gray-200') . ' transition-colors rounded-md px-3 py-2 text-sm font-medium';
    }
@endphp

<a class="{{ $classes }}"
   aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>
