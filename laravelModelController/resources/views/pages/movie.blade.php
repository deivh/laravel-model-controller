@extends('layouts.main-layout')

@section('content')
    <main>
        <section>
            <ul>
                <li>
                    <h3>Film details:</h3>
                </li>
                <li>
                    {{'Id: ' . $movie -> id}} 
                </li>
                <li>
                      {{'Title: ' . $movie -> title}} 
                </li>
                @if ($movie -> title != $movie -> original_title)
                    <li>
                        {{'OG title: ' . $movie -> original_title}} 
                    </li>
                @endif
                <li>
                    {{'Language: ' . $movie -> languageCode}} 
                </li>
                <li>
                    {{'Release Date: ' . $movie -> date}} 
                </li>
                <li>
                    {{'Rating: ' . $movie -> vote}} 
                </li>
            </ul>
        </section>
    </main>
@endsection