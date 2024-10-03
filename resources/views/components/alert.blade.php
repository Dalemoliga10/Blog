@props(['type' => 'info']) <!--Coge el type del otro archivo y le hace un switch para cambi
    ar colores acorde, tiene valor por defecto y  default-->

@php
    switch ($type) {
        case 'info':

            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';

            break;

        case 'danger':
            $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;

        case 'success':
            $class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;

        case 'warning':
            $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
            break;

        case 'dark':
            $class = 'text-grey-800 bg-grey-50 dark:bg-gray-800 dark:text-grey-400';

            break;
        
        default:
            $class = 'text-grey-800 bg-grey-50 dark:bg-gray-800 dark:text-grey-400';

            break;
    }   
@endphp


<!--Alerta creada solo en un archivo-->
<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $class])}} role="alert">
    <span class="font-medium">{{ $title ?? 'Info alert' }}</span> {{ $slot }} <!-- $slot es otro texto y el ?? es ternario, muestra algo si no esta definida la variable $title-->
    
</div>