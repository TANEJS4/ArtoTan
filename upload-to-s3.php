

<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
use Aws\S3\S3Client;
// Instantiate an Amazon S3 client.
$s3Client = new S3Client([
'version' => 'latest',
'region'  => 'US East (Ohio) us-east-2',
'credentials' => [
'key'    => 'AKIAXNW2MRNARGLVV3GX',
'secret' => 'FlJgX4mJVT2EGJF7kTwNkfTLEglyGA1vWqzg'
]
]);
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
// Check if file was uploaded without errors
if(isset($_FILES["anyfile"]) && $_FILES["anyfile"]["error"] == 0){
$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
$filename = $_FILES["anyfile"]["name"];
$filetype = $_FILES["anyfile"]["type"];
$filesize = $_FILES["anyfile"]["size"];
// Validate file extension
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
// Validate file size - 10MB maximum
$maxsize = 10 * 1024 * 1024;
if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
// Validate type of the file
if(in_array($filetype, $allowed)){
// Check whether file exists before uploading it
if(file_exists("upload/" . $filename)){
echo $filename . " is already exists.";
} else{
if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "upload/" . $filename)){
$bucket = 'awsbucker';
$file_Path = __DIR__ . '/upload/'. $filename;
$key = basename($file_Path);
try {
$result = $s3Client->putObject([
'Bucket' => $bucket,
'Key'    => $key,
'Body'   => fopen($file_Path, 'r'),
'ACL'    => 'public-read', // make file 'public'
]);
echo "Image uploaded successfully. Image path is: ". $result->get('ObjectURL');
} catch (Aws\S3\Exception\S3Exception $e) {
echo "There was an error uploading the file.\n";
echo $e->getMessage();
}
echo "Your file was uploaded successfully.";
}else{
echo "File is not uploaded";
}
} 
} else{
echo "Error: There was a problem uploading your file. Please try again."; 
}
} else{
echo "Error: " . $_FILES["anyfile"]["error"];
}
}
#upload.php
// require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
// use Aws\S3\S3Client;
// echo "started";
// if(isset($_FILES["anyfile"]) && $_FILES["anyfile"]["error"] == 0){
// 	echo "reached";
// 	$file_name = $_FILES['anyfile']['name'];   
//     $fileType = $_FILES['anyfile']['type']; 
// 	$s3Client = new Aws\S3\S3Client([
// 		'region' => 'US East (Ohio) us-east-2',
// 		'version' => 'latest',
// 		'credentials' => [
// 			'key' => "AKIAXNW2MRNARGLVV3GX",
// 			'secret' => "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",
// 		]
// 	]);
// 	$file_path = __DIR__  .$file_name;
// 	$key = basename($file_path);
// 	try {
// 				$result = $s3Client->putObject([
// 						'Bucket' => 'awsbucker',
// 			'Key'    => $key,
// 			'Body' => fopen($file_path,'r'),
// 			'ACL' => 'public-read',			

// 		]);
// 	} catch (Aws\S3\Exception\S3Exception $e) {
// 		echo "There was an error uploading the file.\n";
// echo $e->getMessage();
// 	}


// 	echo "hello";
// }
// echo "failed at "
?>
