<?php
  $img = $_POST['imgBase64'];
  $img = str_replace('data:image/png;base64,', '', $img);
  $img = str_replace(' ', '+', $img);
  $data = base64_decode($img);
  // $file = 'newSketches/' . uniqid() . '.png';
  $file = 'http://pietroforino.com/img/' . uniqid() . '.png';
  $success = file_put_contents($file, $data);
  print $success ? $file : 'Impossibile salvare il file sul server';

?>
