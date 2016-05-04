<?php

include_once('dbconnect.php');

if ($conn -> connect_errno)
{
    die ('Connect failed: ' . $conn->connect_errno);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
        <link rel="stylesheet" type="text/css" href="assets/css/unsemantic-grid-responsive-tablet.css">
        <meta name="viewpoint" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <title>myBlog | Main</title>
    </head>
    <body>
        <div class="grid-container">
            <!-- HEADER STARTS HERE -->
            <header class="grid-100">
                <h1>myBlog</h1>
                <h2>because the internet needs to know what I think</h2>
                <nav class="grid-100">
                    <ul>
                        <li><a href="blog.php">All Blog Items</a></li>
                        <li><a href="blog.php">Work Items</a></li>
                        <li><a href="blog.php">University Items</a></li>
                        <li><a href="blog.php">Family Items</a></li>
                        <li><a href="add.php">Insert a Blog Items</a></li>
                    </ul>
                </nav>
            </header>

            <!-- HEADER FINISHES HERE -->

            <!-- MAIN STARTS HERE -->
            <main class="grid-100">
                <?php

                if ($_GET['category'] == "all")
                {
                    $sql = "SELECT * FROM blogView";
                }
                else
                {
                    $category = $_GET['category'];
                    $sql = "SELECT * FROM blogView WHERE category='$category'";
                }

                $result = mysqli_query($conn,$sql);

                if (mysqli_num_rows($result) > 0)
                {
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<p>Entry Title: " . $row["entryTitle"] . "</p>";
                        echo "<p>Entry Summary: <br>" . $row["entrySummary"] . "</p>";
                        echo "<p>Entry Category: " . $row["category"] . "</p>";
                        echo "<p>Submitted By: " . $row["submitter"] . "</p>";
                        echo "<hr>";
                    }
                }
                else
                {
                    echo "No blogs found.";
                }

                ?>
            </main>
            <!-- MAIN FINISHES HERE -->

            <!-- FOOTER STARTS HERE -->
            <footer class="grid-100">
                <hr>
                <p>Designed by Chris Campbell, 2016</p>
            </footer>
            <!-- FOOTER FINISHES HERE -->
        </div>
    </body>
</html>

<?php

mysqli_close($conn);

?>