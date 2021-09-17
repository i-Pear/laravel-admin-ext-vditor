<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">
    <label for="{{$id}}" class="control-label">
        {{$label}}
    </label>
    <br>
    <div id="problem-content-vditor-{{$id}}">{{$value}}</div>
</div>
