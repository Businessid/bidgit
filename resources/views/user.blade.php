<!DOCTYPE html>
<html lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
  <title>Business ID Dubai Government | Ministry of foreign affairs | Dubai Immigration</title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/image_lib/filepond.min.css') }}">
<style type="text/css">
/**
 * FilePond Custom Styles
 */
.filepond--drop-label {
  color: #4c4e53;
}

.filepond--label-action {
  -webkit-text-decoration-color: #babdc0;
          text-decoration-color: #babdc0;
}

.filepond--panel-root {
  border-radius: 2em;
  background-color: #edf0f4;
  height: 1em;
}

.filepond--item-panel {
  background-color: #595e68;
}

.filepond--drip-blob {
  background-color: #7f8a9a;
}

/**
 * Page Styles
 */
html {
  padding: 30vh 0 0;
}

body {
  max-width: 20em;
  margin: 0 auto;
}

</style>
<!--
The classic file input element we'll enhance to a file pond
-->
 </head>
 <body>
 {{ Form::open(array('url' => 'register/file_uppload', 'enctype' => 'multipart/form-data')) }}
 <input type="file" class="filepond" name="filepond[]" multiple data-max-file-size="3MB" data-max-files="10" style="display: none;" /><br/>
<!--     <input type="text" name="name"> -->
    <input type="submit" name="submit" value="submit">
{{ Form::close() }}



<script  src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="{{ URL::asset('front_end/js/image_lib/filepond.min.js') }}"></script>
<script type="text/javascript">
    /*
    We want to preview images, so we need to register the Image Preview plugin
    */
    FilePond.registerPlugin(
        // encodes the file as base64 data
        FilePondPluginFileEncode,
        // validates the size of the file
        FilePondPluginFileValidateSize,
        // corrects mobile image orientation
        FilePondPluginImageExifOrientation,
        // previews dropped images
        FilePondPluginImagePreview
    );
    const _inputElement = document.querySelector('input[type="file"]');
        const _pond = FilePond.create( _inputElement, {
            imageCropAspectRatio: '1:1',
            imagePreviewMaxFileSize: '3MB',
            imagePreviewHeight: 80,
            imageTransformOutputMimeType: 'image/jpeg',
            imageTransformOutputQuality: 100,
            instantUpload: false,
            acceptedFileTypes: ['image/jpeg'] // Only allow jpeg file type.
        });
    const _pondRoot = document.querySelector('.filepond--root');
    _pondRoot.addEventListener('FilePond:addfile', e => {
      console.log('File added', e);
    });
    _pond.on('addfile', (error, file) => {
      if (error) {
          console.log('Oh no');
          return;
      }
      console.log('File added', file);
    });
</script>
</body>
</html>