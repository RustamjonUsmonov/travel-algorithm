@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <ul class="">
                @foreach($forms as $form)
                    <li class="">
                        <a class=""
                           href="{{route('next-question',[$form['id'],$form['questions'][0]['id']])}}"
                           onclick="event.preventDefault();
                               document.getElementById('{{'form'.$form['id']}}').submit();">
                            {{ $form['name']}}
                        </a>
                        <form id="{{'form'.$form['id']}}"
                              action="{{route('next-question',[$form['id'],$form['questions'][0]['id']])}}"
                              method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
