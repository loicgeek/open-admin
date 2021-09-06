@extends('admin::grid.inline-edit.comm')
@php
    $type = "checkbox";
@endphp
@section('field')

    @foreach($options as $option => $label)
        <div class="checkbox">
            <label>
                <input type="checkbox" name='radio-{{ $name }}[]' class="minimal ie-input" value="{{ $option }}" data-label="{{ $label }}"/>&nbsp;{{$label}}&nbsp;&nbsp;
            </label>
        </div>
    @endforeach
@endsection

@section('assert')
    <style>
        .icheck.checkbox {
            margin: 5px 0 5px 20px;
        }

        .ie-content-{{ $name }} .ie-container  {
            width: 150px;
            position: relative;
        }
    </style>


    <script>
    
        @component('admin::grid.inline-edit.partials.popover', compact('trigger'))
            @slot('content')

            @endslot
        @endcomponent
    </script>

@if (1==2)
    <script>
    @component('admin::grid.inline-edit.partials.submit', compact('resource', 'name'))

        @slot('val')
            /*
            var val = [];
            var label = [];
            $popover.find('.ie-input:checked').each(function(){
                val.push($(this).val());
                label.push($(this).data('label'));
            });
            */
        @endslot

        //$popover.data('display').html(label.join(';'));

    @endcomponent
    </script>
@endif
@endsection

