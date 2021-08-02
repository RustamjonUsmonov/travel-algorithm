@extends('layouts.app')
@section('content')
    <form class="container">
        <div class="form-row">
            @foreach($forms[0]['questions'] as $question)
                <div class="form-group col-md-4">
                    <label for="inputState">{{$question['question']}}@if($question['is_dealbreaker'])<span
                            class="text-danger">*</span>@endif</label>
                    <select id="inputState" class="form-control">
                        @foreach($question['variants'] as $variant)
                            <option>{{$variant}}</option>
                        @endforeach
                    </select>
                </div>
            @endforeach
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Где бы Вам было наиболее комфортно жить?</label>
                <select id="inputState" class="form-control">
                    <option selected>мегаполис</option>
                    <option>небольшой город</option>
                    <option>у моря</option>
                    <option>у озера/реки</option>
                    <option>в горах</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Какой климат Вам больше всего подходит?</label>
                <select id="inputState" class="form-control">
                    <option selected>жаркий</option>
                    <option>умеренный</option>
                    <option>холодный</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Checkbox</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
@endsection
