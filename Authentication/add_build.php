<?php 
require_once ('../Authentication/db_con.php');

if (isset($_POST['submit'])){
    $build_name = $_POST['build_name'];
    $build_category = $_POST['build_category'];
    $build_recommendation = $_POST['build_recommendation'];

    $sql = "INSERT INTO `builds`(`build_name`, `build_category`, `build_recommendation`) VALUES ('$build_name', '$build_category', '$build_recommendation')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>
                alert('Build added successfully!');
                window.location.href = '../Pages/builds.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Failed to add build!');
                window.location.href = '../Pages/builds.php';
              </script>";
        exit();
    }
}

?>