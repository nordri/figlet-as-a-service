<?php
  $hostname = $_GET['h'];

  if ($hostname == "" || empty ($_GET)) {
    echo "<p>usar con /index.php?h=HOSTNAME</p>";
  } else if (strlen($hostname) > 31) {
    $cmd = "figlet -w 160 " . substr($hostname, 0, 31);
    $output = shell_exec($cmd);
  } else {
    $cmd = "figlet " . $hostname;
    $output = shell_exec($cmd);
  }
  
  echo "<pre>$output</pre>";
?>
