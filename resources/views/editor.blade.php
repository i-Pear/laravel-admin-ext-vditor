<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">
    <label for="{{$id}}" class="control-label">
        {{$label}}
    </label>
    <br>
    <div id="{{$id}}">
        <textarea name={{$column}} style="display:none;">{{$value}}</textarea>
        <div id="problem-content-vditor-{{$id}}"></div>
    </div>
</div>
