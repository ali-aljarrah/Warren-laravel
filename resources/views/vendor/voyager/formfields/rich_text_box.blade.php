<textarea class="form-control richTextBox" name="{{ $row->field }}">
    {{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}
</textarea>

@push('javascript')
    <script>
        $(document).ready(function() {
            var additionalConfig = {
                selector: 'textarea.richTextBox[name="{{ $row->field }}"]',
                menubar: {!! config('voyager.tinymce.menubar') ? 'true' : 'false' !!},
            plugins: {!! json_encode(config('voyager.tinymce.plugins')) !!},
            toolbar: '{!! config('voyager.tinymce.toolbar') !!}',
            fontsize_formats: '{!! config('voyager.tinymce.fontsize_formats') !!}',
            }

            $.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? (object)[]) !!})

            tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
        });
    </script>
@endpush
