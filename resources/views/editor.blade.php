<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">
    <label for="{{$id}}" class="col-sm-2  control-label">
        {{$label}}
    </label>
    <div class="col-sm-8">
        @include('admin::form.error')
        @include('admin::form.help-block')
    </div>
    <div id="problem-content-vditor-{{$id}}">
        <div id="{{$id}}">
            <textarea {!! $attributes !!} style="display:none;">{{ old($column, $value) }}</textarea>
        </div>
    </div>
</div>
