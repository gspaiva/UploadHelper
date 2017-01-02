PHP class that helps to upload files easily.

<h1>Usage:</h1><br>

$supportedFormats = array('png','jpg');<br>
$maxFileSize = 300000;<br>
$destination = "your-destination-folder";<br>

$uploader = new UploadHelper($maxFileSize,$supportedFormats,$destination);<br>
$uploader->uploadFile($_FILES['your-file-name-input']);
