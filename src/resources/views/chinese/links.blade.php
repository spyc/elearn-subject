@extends('layouts.app')

@section('wrap')
    <div class="container">
        <div class="list-group">
            <h3>文言文語譯</h3>
            @for ($i =  1; $i <= min(10, count($links)); $i += 1)
                <a href="{{ url('/e/link/' . $i) }}">{{ $links[$i] }}</a>
            @endfor
        </div>
        <div class="list-group">
            <h3>2014文憑試口語</h3>
            @for ($i =  11; $i <= min(16, count($links)); $i += 1)
                <a href="{{ url('/e/link/' . $i) }}">{{ $links[$i] }}</a>
            @endfor
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script src="{{ url('/js/subject/chinese/links.js') }}"></script>
@endsection
