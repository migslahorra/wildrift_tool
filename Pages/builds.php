<?php include '../Authentication/db_con.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/styles.css">
    <title>Builds - Wildrift Tool</title>
</head>
<body>
    <div class="navigation">
        <h1>Wildrift Tool</h1>
        <nav>
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="builds.php" class="active">Champions</a></li>
            <li><a href="items.php">Items</a></li>
        </nav>
    </div>
    
    <form action="../Authentication/add_build.php" method="post">
        <label for="build_name">Build Name</label>
        <input type="text" name="build_name" id="build_name" placeholder="Enter Build Name" required>
        <label for="build_category">Build Category</label>
        <input type="text" name="build_category" id="build_category" placeholder="Enter Build Catgeory" required>
        <label for="build_recommendation">Build Recommendation</label>
        <input type="text" name="build_recommendation" id="build_recommendation" placeholder="Enter Build Recommendation" required>
        <input type="submit" name="submit" value="add build">
    </form>
</body>
</html>

