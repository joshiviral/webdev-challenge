<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UploadFile</title>        
        <link rel="stylesheet" href="{{ URL::asset('css/itemAuctioner.css') }}" />
        <script type="text/javascript" src="{{ URL::asset('js/uploadFile.js') }}"></script>
        </head>
    <body>

    	<div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
                    <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
        <div class="form-group">
            <label for="upload-file">Upload</label>
            <input type="file" name="upload-file" class="form-control">
                    </div>
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>

