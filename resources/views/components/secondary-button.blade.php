<button {{ $attributes->merge(['type' => 'button', 'class' => 'rounded-md bg-green-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600']) }}>
    {{ $slot }}
</button>
