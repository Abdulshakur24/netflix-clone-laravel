@props(['name'])

@if ($name === 'hand-thumbs-up')
    <svg {{ $attributes->class(['text-white w-4 h-4']) }} viewBox="0 0 16 16">
        <path
            d="M15.167 8.994h3.394l.068.023c1.56.138 2.867.987 2.867 2.73 0 .275-.046.527-.092.78.367.435.596.986.596 1.72 0 .963-.39 1.52-1.032 1.978.023.183.023.252.023.39 0 .963-.39 1.784-1.009 2.243.023.206.023.275.023.39 0 1.743-1.33 2.591-2.89 2.73L12.21 22c-2.04 0-3.05-.252-4.563-.895-.917-.39-1.353-.527-2.27-.619L4 20.371v-8.234l2.476-1.445 2.27-4.427c0-.046.085-1.552.253-4.52l.871-.389c.092-.069.275-.138.505-.184.664-.206 1.398-.252 2.132 0 1.261.436 2.064 1.537 2.408 3.258.142.829.226 1.695.26 2.564l-.008 2zm-4.42-2.246l-2.758 5.376L6 13.285v5.26c.845.113 1.44.3 2.427.72 1.37.58 2.12.735 3.773.735l4.816-.023c.742-.078.895-.3 1.015-.542.201-.4.201-.876 0-1.425.558-.184.917-.479 1.078-.883.182-.457.182-.966 0-1.528.601-.228.901-.64.901-1.238s-.202-1.038-.608-1.32c.23-.46.26-.892.094-1.294-.168-.404-.298-.627-1.043-.738l-.172-.015h-5.207l.095-2.09c.066-1.448-.009-2.875-.216-4.082-.216-1.084-.582-1.58-1.096-1.758-.259-.09-.546-.086-.876.014-.003.06-.081 1.283-.235 3.67z"
            fill="currentColor"></path>
    </svg>
@endif

@if ($name === 'hand-thumbs-down')
    <svg viewBox="0 0 16 16" {{ $attributes->class(['text-white w-4 h-4']) }}>
        <path
            d="M8.833 15.006H5.44l-.068-.023c-1.56-.138-2.867-.987-2.867-2.73 0-.275.046-.527.092-.78C2.23 11.038 2 10.487 2 9.753c0-.963.39-1.52 1.032-1.978-.023-.183-.023-.252-.023-.39 0-.963.39-1.784 1.009-2.243-.023-.206-.023-.275-.023-.39 0-1.743 1.33-2.591 2.89-2.73L11.79 2c2.04 0 3.05.252 4.563.895.917.39 1.353.527 2.27.619L20 3.629v8.234l-2.476 1.445-2.27 4.427c0 .046-.085 1.552-.253 4.52l-.871.389c-.092.069-.275.138-.505.184-.664.206-1.398.252-2.132 0-1.261-.436-2.064-1.537-2.408-3.258a19.743 19.743 0 0 1-.26-2.564l.008-2zm4.42 2.246l2.758-5.376L18 10.715v-5.26c-.845-.113-1.44-.3-2.427-.72C14.203 4.156 13.453 4 11.8 4l-4.816.023c-.742.078-.895.3-1.015.542-.201.4-.201.876 0 1.425-.558.184-.917.479-1.078.883-.182.457-.182.966 0 1.528-.601.228-.901.64-.901 1.238s.202 1.038.608 1.32c-.23.46-.26.892-.094 1.294.168.404.298.627 1.043.738l.172.015h5.207l-.095 2.09c-.066 1.448.009 2.875.216 4.082.216 1.084.582 1.58 1.096 1.758.259.09.546.086.876-.014.003-.06.081-1.283.235-3.67z"
            fill="currentColor"></path>
    </svg>
@endif

@if ($name === 'plus')
    <svg viewBox="0 0 16 16" {{ $attributes->class(['text-white w-4 h-4']) }}>
        <path d="M13 11h8v2h-8v8h-2v-8H3v-2h8V3h2v8z" fill="currentColor"></path>
    </svg>
@endif

@if ($name === 'caret-right-fill')
    <svg viewBox="0 0 16 16" {{ $attributes->class(['text-black w-4 h-4']) }}>
        <path d="M6 4l15 8-15 8z" fill="currentColor"></path>
    </svg>
@endif


@if ($name === 'chevron-down')
    <svg viewBox="0 0 16 16" {{ $attributes->merge(['class' => 'w-7']) }}>
        <path fill="currentColor"
            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
        </path>
    </svg>
@endif

@if ($name === 'chevron-right')
    <svg fill="currentColor" viewBox="0 0 16 16" {{ $attributes->merge(['class' => 'w-7']) }}>
        <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
        </path>
    </svg>
@endif

@if ($name === 'entypo-facebook')
    <svg fill="currentColor" viewBox="0 0 20 20" {{ $attributes->merge(['class' => 'w-7']) }}>
        <path
            d="M17 1H3c-1.1 0-2 .9-2 2v14c0 1.101.9 2 2 2h7v-7H8V9.525h2v-2.05c0-2.164 1.212-3.684 3.766-3.684l1.803.002v2.605h-1.197c-.994 0-1.372.746-1.372 1.438v1.69h2.568L15 12h-2v7h4c1.1 0 2-.899 2-2V3c0-1.1-.9-2-2-2z">
        </path>
    </svg>
@endif

@if ($name === 'instagram')
    <svg fill="currentColor" viewBox="0 0 16 16" {{ $attributes->merge(['class' => 'w-7']) }}>
        <path
            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
        </path>
    </svg>
@endif

@if ($name === 'twitter')
    <svg fill="currentColor" viewBox="0 0 16 16" {{ $attributes->merge(['class' => 'w-7']) }}>
        <path
            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
        </path>
    </svg>
@endif

@if ($name === 'youtube')
    <svg fill="currentColor" viewBox="0 0 16 16" {{ $attributes->merge(['class' => 'w-7']) }}>
        <path
            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z">
        </path>
    </svg>
@endif