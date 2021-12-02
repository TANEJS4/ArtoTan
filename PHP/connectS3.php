
<?php
#upload.php

if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];   
    $temp_file = $_FILES['image']['tmp_name']; 

    require 'vendor/autoload.php';

	$s3Client = new Aws\S3\S3Client([
		'region' => 'US East (Ohio) us-east-2',
		'version' => 'latest',
		'credentials' => [
			'key' => "AKIAXNW2MRNARGLVV3GX",
			'secret' => "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",
		]
	]);

	$result = $s3Client->putObject([
		'Bucket' => 'awsbucker',
		'Key'    => $file_name,
		'SourceFile' => $temp_file			
	]);

	var_dump($result);
}
?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">         
    <input type="file" name="image" id="upload_image" />
    <input type="submit" value="Submit"/>
</form>