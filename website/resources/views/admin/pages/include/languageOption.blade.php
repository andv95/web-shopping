<div class="form-group col-md-12">
    <label for="language">Ngôn ngữ</label>
    <select class="form-control" name="type">
        @foreach(\App\Helper\Helper::LANGUAGES as $key=>$value)
            <option value="{{ $key }}" {{ (@$data->type && $data->type==$key) ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
    </select>
</div>
