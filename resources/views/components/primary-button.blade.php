<button {{ $attributes->merge([

    'type' => 'submit',

    'class' => '
        inline-flex items-center
        px-4 py-2
        bg-primary
        border border-transparent
        rounded-md
        font-semibold
        text-white
        uppercase
        tracking-widest
        hover:bg-dark
        focus:bg-dark
        active:bg-dark
        focus:outline-none
        transition
        ease-in-out
        duration-150
    '

]) }}>

    {{ $slot }}

</button>