<?php
include_once '../APIquerys/apiQuerys.php';
$conn = new apiQuerys;
$count = (int)$_POST['count'];
$return = $conn->deleteTask($count);
if ($return != null) {
/*?>
    <script type="text/javascript">
        window.location = "/fst/managementProyectTheatre/View/indexPages/indexAssistant.php";
    </script>
<?php*/
}else{
    throw new Exception($this->conn->errorInfo()[2], $this->conn->errorInfo()[1]);
}
//echo '<h1>'.$count. '</h1>';
?>