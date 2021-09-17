<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">
    <label for="{{$id}}" class="control-label">
        {{$label}}
    </label>
    <br>
    <textarea id="vditor-data-{{$id}}" name="{{$column}}" style="display:none;"></textarea>
    <div id="vditor-{{$id}}">{{$value}}</div>
</div>
