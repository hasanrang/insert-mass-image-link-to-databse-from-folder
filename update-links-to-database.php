/*Fill with your info and run*/






<?php
$con=mysqli_connect("localhost","database_user","database_password","databse_name");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
/*Database connection*/


$filenames=glob("wallpaper/*.*"); /*upload or keep image or files on this folder*/
$count=count($filenames); /*Count files number*/
$i=0;
$categoryString="popular"; /*files category on databse*/
$totalView="0"; /*Dummy variable you may ignore*/
$totalDownload="0"; /*Dummy variable you may ignore*/
$currentRating="0"; /*Dummy variable you may ignore*/

while($i<$count)
  {
        
 echo  $filelink="http://example.com/gallery/".$filenames[$i];
 
 
  @mysqli_query($con,"INSERT INTO gallery_table (category, image_url, total_view, total_download,current_rating)
                   VALUES ('$categoryString', '$filelink ','$totalView','$totalDownload','$currentRating')");


echo "<br>...File update to database successfull!<br>";

$i++;
  }
?>
