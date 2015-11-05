<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="?page=home">Home</a> | 
<a href="?page=contact">Contact</a> | 
<a href="?page=upload">Upload</a> | 
<a href="?page=download">Download</a> | 

<div id="content" style="border:5px gray solid;">
	<?php
	// include 'home_content.php';
	// include_once 'home_contenat.php';
	// include_once 'home_content.php';
	// require_once ('home_content.php');

	if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page ='home';
}
	switch ($page) {
		case 'home':
		require_once('home_content.php');
			break;

		case 'contact':
		require_once('contact.php');
			break;

		case 'upload':
		require_once('upload.php');
			break;

		case 'download':
		require_once('download.php');
			break;	


		default:
			require_once('home_content.php');
			break;
	}

	?>
</div>
</body>
</html>


<?php
// $value = 50;
// switch ($value) {
	
// 	case 5:
// 		echo "It is five";
// 		break;

// 	case 6:
// 		echo "It is six";
// 		break;

// 	case 7:
// 		echo "It is seven";
// 		break;

// 	default:
// 		echo "It is default";
// 		break;
// }

?>