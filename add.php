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
            <main>
                <?php

                if ($_SERVER['REQUEST_METHOD'] === 'GET')
                {
                    echo "
                <div class=\"grid-100\" >
                    <form class=\"form-input\" action='{$_SERVER['PHP_SELF']}' method='post' >

                        <div class=\"field\" >
                            <label>Entry Title:</label>
                            <input type = \"text\" name = \"title\" id = \"title\" accesskey=\"1\" placeholder = \"Entry Title\" autofocus required >
                        </div>
                        <div class=\"field\" >
                            <label>Entry Summary:</label>
                            <textarea rows = \"5\" cols = \"28\" name = \"summary\" id = \"summary\" accesskey=\"2\" placeholder = \"Entry Summary\" required ></textarea>
                        </div>
                        <div class=\"field\">
                            <label>Entry Category:</label>
                            <select name = \"bugCategory\" id = \"category\" accesskey=\"3\" required>
                                <option value = \"\" disabled  selected >Select category..</option>
                                <option value = \"work\" selected >Work</option>
                                <option value = \"university\" >University</option>
                                <option value = \"family\" >Family</option>
                            </select>
                        </div>
                        <div class=\"field\" >
                            <label>Submitted By:</label>
                            <input type = \"text\" name = \"submitted\" id = \"submitted\" accesskey=\"4\" placeholder = \"Entry Title\" autofocus required >
                        </div>
                        <div id = \"btnRight\">
                            <input type = \"submit\" value = \"Submit\">
                        </div>
                    </form>
                </div>";
                }
                elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    include_once('connection.php');

                    $bugName = $_POST['bugName'];
                    $bugSummary = $_POST['bugSummary'];
                    $bugCategory = $_POST['bugCategory'];

                    $sql = "INSERT INTO bugs VALUES (NULL,'$bugName','$bugSummary','$bugCategory')";
                    mysqli_query($conn,$sql);

                    header('Location: bugs.php');
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