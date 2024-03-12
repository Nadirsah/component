@php
if(empty($id) || !isset($id))
{
$id=uniqid('input-');
}
@endphp

<div>
    @isset($label)
    <label for="{{$id}}" class="mb-2 {{$labelClasses ?? ''}}">{{$label}}</label>
    @endisset

    <input type="{{$type ?? 'text'}}" name="{{$name}}" id="{{$id}}"
        placeholder="{{isset($placeholder) ? $placeholder :(isset($label) ? $label : '')}}"
        class="{{$type !='submit' ? 'form-control' : ''}} {{$inputClasses}}" value="{{$defaultValue ?? :}}"
        {{ isset($isDisabled) && $isDisabled ? 'disabled' : '' }}>
</div>