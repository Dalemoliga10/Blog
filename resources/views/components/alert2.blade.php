<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $class])}} role="alert">
    <span class="font-medium">{{ $title ?? 'Info alert' }}</span> {{ $slot }} <!-- $slot es otro texto y el ?? es ternario, muestra algo si no esta definida la variable $title--> 
</div>