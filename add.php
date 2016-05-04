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
                        <li><a href="blog.php?category=all">All Blog Items</a></li>
                        <li><a href="blog.php?category=work">Work Items</a></li>
                        <li><a href="blog.php?category=university">University Items</a></li>
                        <li><a href="blog.php?category=family">Family Items</a></li>
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
                            <select name = \"category\" id = \"category\" accesskey=\"3\" required>
                                <option value = \"\" disabled  selected >Select category..</option>
                                <option value = \"work\" selected >Work</option>
                                <option value = \"university\" >University</option>
                                <option value = \"family\" >Family</option>
                            </select>
                        </div>
                        <div class=\"field\" >
                            <label>Submitted By:</label>
                            <input type = \"text\" name = \"submitter\" id = \"submitter\" accesskey=\"4\" placeholder = \"Submitted By (Optional)\" required >
                        </div>
                        <div id = \"right\">
                            <input type = \"submit\" value = \"Submit\">
                        </div>
                    </form>
                </div>";
                }
                elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    include_once('dbconnect.php');

                    $entryTitle = $_POST['title'];
                    $entrySummary = $_POST['summary'];
                    $category = $_POST['category'];
                    $submitter = $_POST['submitter'];

                    if ($submitter == NULL) {
                        $submitter = "Anonymous";
                    }

                    $sql = "INSERT INTO blogView (blogviewID,entryTitle,entrySummary,category,submitter) VALUES (NULL,'$entryTitle','$entrySummary','$category','$submitter')";
                    mysqli_query($conn,$sql);
                    mysqli_close($conn);
                    header('Location: blog.php?category=all');
                }
                else {
                    header('Location: index.php');
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