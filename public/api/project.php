<?php
require "./db.php";
if (empty($_GET) && empty($_POST)) {
  // Get all projects as array of objects
  $all_projects_query = "SELECT * FROM projects";
  $all_projects_result = $conn->query($all_projects_query);
  
  $output_array = [];
  while ($row = $all_projects_result->fetch_object()) {
    array_push($output_array, $row);
  }
  echo json_encode($output_array);
}

if (!empty($_GET['id']) && isset($_GET['id'])) {
  $id = mysqli_escape_string($conn, $_GET['id']);
  $single_project_query = "
    SELECT * FROM projects
    WHERE projects.id = $id
  ";
  if ($result = $conn->query($single_project_query)) {
    echo json_encode($result->fetch_object());
  } else {
    echo json_encode(null);
  }
}
?>