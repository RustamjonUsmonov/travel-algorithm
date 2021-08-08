@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <ul>
                @foreach($forms as $form)
                    <li>
                        <a class="dropdown-item"
                           href="{{route('next-question',[$form['id'],$form['questions'][0]['id']])}}"
                           onclick="event.preventDefault();
                                                     document.getElementById('form').submit();">
                            {{ __('Go') }}
                        </a>
                        <form id="form" action="{{route('next-question',[$form['id'],$form['questions'][0]['id']])}}"
                              method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
