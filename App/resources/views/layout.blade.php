@extends('rep')

@section('name')
<div class="container">
    <div class="names">
        @foreach($names as $name)
            {{--@dd($loop)--}}
            @if($loop->first == true)
                <p>{{$name}}</p>
            @endif

            @if($loop->last == true)
                <p>{{$name}}</p>
            @endif
        @endforeach
    </div>
</div>
@endsection
