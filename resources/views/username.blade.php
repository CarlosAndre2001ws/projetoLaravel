@extends('layouts.app')
@section('content')

{{--Hi, {{ $user }}--}}
{{--<br>--}}
{{--You are a {{ $occupation }}--}}
{{--<br>--}}
{{--@if($records === 111)--}}
{{--    I have 111 records--}}
{{--@else--}}
{{--    I have no records--}}
{{--@endif--}}
{{--<br>--}}
{{--@unless(Auth::check())--}}
{{--    Youre not logged in--}}
{{--@endunless--}}
{{--<br>--}}
{{--@isset($records)--}}
{{--    records are not null--}}
{{--@endisset--}}
{{--<br>--}}
{{--@empty($heart)--}}
{{--    your heart is empty--}}
{{--@endempty--}}
{{--<br>--}}
{{--@auth(Auth::check())--}}
{{--    I'm invisible until you are logged in--}}
{{--@endauth--}}

{{--@guest(Auth::check())--}}
{{--    I'm invisible until you're not logged in--}}
{{--@endguest--}}
{{--<br>--}}
{{--@switch($i)--}}
{{--    @case(1)--}}
{{--        First case...--}}
{{--        @break--}}

{{--    @case(2)--}}
{{--        Second case...--}}
{{--        @break--}}

{{--    @default--}}
{{--        Default case...--}}
{{--@endswitch--}}
{{--<br>--}}
{{--@for($i = 0; $i < 10; $i++ )--}}
{{--    The current value is {{ $i }} <br>--}}
{{--@endfor--}}
{{--<br>--}}

{{--@foreach( $users as $user)--}}
{{--    While iterating through a foreach loop, a $loop variable will be available inside of your loop.--}}
{{--    This variable provides access to some useful bits of information such as the current loop index--}}
{{--    and whether this is the first of last iteration through the loop: --}}
{{--@foreach ($users as $user)--}}
{{--    @foreach ($user->posts as $post)--}}
{{--        @if ($loop->parent->first)--}}
{{--            This is the first iteration of the parent loop.--}}
{{--        @endif--}}
{{--    @endforeach--}}
{{--@endforeach--}}
{{--Property 	        Description--}}
{{--$loop->index 	    The index of the current loop iteration (starts at 0).--}}
{{--$loop->iteration 	The current loop iteration (starts at 1).--}}
{{--$loop->remaining 	The iterations remaining in the loop.--}}
{{--$loop->count 	    The total number of items in the array being iterated.--}}
{{--$loop->first 	    Whether this is the first iteration through the loop.--}}
{{--$loop->last 	    Whether this is the last iteration through the loop.--}}
{{--$loop->even 	    Whether this is an even iteration through the loop.--}}
{{--$loop->odd 	        Whether this is an odd iteration through the loop.--}}
{{--$loop->depth 	    The nesting level of the current loop.--}}
{{--$loop->parent 	    When in a nested loop, the parent's loop variable.--}}
{{--    @if($loop->first)--}}
{{--        this is the first loop <br>--}}
{{--    @endif--}}
{{--    {{ $user }}--}}
{{--    @if($loop->last)--}}
{{--        <br>this is the last loop <br>--}}
{{--    @endif--}}
{{--@endforeach--}}

{{--@php--}}
{{--    $isActive = false;--}}
{{--    $hasError = true;--}}
{{--@endphp--}}

{{--<div @class([--}}
{{--    'p-4',--}}
{{--    'font-bold' => $isActive,--}}
{{--    'text-gray-500' => ! $isActive,--}}
{{--    'bg-warning' => $hasError,--}}
{{--])>hello</div>--}}

{{--<div class="p-4 text-gray-500 bg-info">oi</div>--}}

{{--<div>--}}
{{--    <label for="active">be</label>--}}
{{--    <input--}}
{{--        type="checkbox"--}}
{{--        name="active"--}}
{{--        value="active"--}}
{{--        @checked(old('active'))--}}
{{--    />--}}
{{--</div>--}}
{{--    <div>--}}
{{--        <select name="version">--}}
{{--            @foreach ($users as $user)--}}
{{--                <option value="{{ $user }}" @selected(old('version') == $user)>--}}
{{--                    {{ $user }}--}}
{{--                </option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--    </div>--}}
{{-- Blade Components. --}}
    <x-alert></x-alert>
@endsection
