@extends('layouts.main-layout')

@section('content')
    <main>
        <section>
            <ul>
                <li>
                    <h3>Film list:</h3>
                </li>
                @foreach ($movies as $movie)
                    <li>
                        <a href="{{ route('movieLink', $movie -> id) }}">
                            {{ $movie -> title}}
                            @if ($movie -> title != $movie -> original_title)
                                {{ ' - ('. $movie -> original_title . ')'}}
                            @endif
                        </a>
                    </li>
                @endforeach   
            </ul>
        </section>
    </main>
@endsection