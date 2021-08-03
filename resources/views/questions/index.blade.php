@extends('layouts.app')
@section('content')
    <form class="container" method="post" action="{{route('next-question',[$form_id,$question['id']])}}">
        @csrf
        <div class="form-row">
            {{--@foreach($forms[0]['questions'] as $question)--}}
                <div class="form-group col-md-4">
                    <label for="inputState">{{$question['question']}}@if($question['is_dealbreaker'])<span
                            class="text-danger">*</span>@endif</label>
                    <select id="inputState" class="form-control" name="{{$question['id']}}">
                        @foreach($question['variants'] as $variant)
                            <option value="{{$variant}}">{{$variant}}</option>
                        @endforeach
                    </select>
                </div>
            {{--@endforeach--}}
        </div>
        {{--<div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Где бы Вам было наиболее комфортно жить?</label>
                <select id="inputState" class="form-control">
                    <option selected>мегаполис</option>
                    <option>небольшой город</option>
                    <option>у моря</option>
                    <option>у озера/реки </option>
                    <option>в горах</option>
                </select>
                </div>
            </div>--}}


        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
@endsection
