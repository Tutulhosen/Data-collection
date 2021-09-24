<?php 

function validation($mgs, $type='danger'){
    return "<p class=\"alert alert-{$type}\">{$mgs} <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
}

function move($file, $path='/'){

$file_name=time() . '_' . rand() . '_' . $file['name'];
$file_tmp=   $file['tmp_name'];
$file_size =   $file['size'];

move_uploaded_file($file_tmp, $path . $file_name);
return $file_name;
}






?>