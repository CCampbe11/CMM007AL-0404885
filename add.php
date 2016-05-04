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
                <div class="grid-100">
                    <form class="form-input">
                        <fieldset>
                            <div class="field">
                                <label for="title">Entry Title:</label>
                                <input type="text" name="title" id="title" accesskey="1" placeholder="Entry Title" autofocus required>
                            </div>
                            <div class="field">
                                <label for="summary">Entry Summary:</label>
                                <textarea name="summary" id="summary" rows="5" cols="28" accesskey="2" placeholder="Entry Summary" required></textarea>
                            </div>
                            <div class="field">
                                <label for="category">Entry Category:</label>
                                <select name="category" id="category" accesskey="3"  required>
                                    <option value="" disabled selected>Select category..</option>
                                    <option value="work">Work</option>
                                    <option value="university">University</option>
                                    <option value="family">Family</option>
                                </select>
                            </div>
                            <div class="field">
                                <label for="submitted">Submitted By:</label>
                                <input type="text" name="submitted" id="submitted" accesskey="1" placeholder="Submitted By (Optional)">
                            </div>
                            <div id="right">
                                <input type="submit" value="Submit">
                            </div>
                        </fieldset>
                </form>
                </div>
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