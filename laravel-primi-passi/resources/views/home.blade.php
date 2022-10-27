<h1>Hello World</h1>

@php
    $dataAuthorProject = [
        'Name' => 'Gianluca',
        'Surname' => 'Fabrizio',
        'Name GitHub' => 'Broadcodes',
        'Name Project' => 'laravel-primi-passi',
        'Version Laravel' => '7',
        'Course' => 'Boolean',
    ];
@endphp

<h2>Visualizzazione dinamica dei dati presenti in php:</h2>
<ul>
    @foreach ($dataAuthorProject as $key => $value)
        <li>
            <h3>{{ $key }}: {{ $value }}</h3>
        </li>
    @endforeach
</ul>
