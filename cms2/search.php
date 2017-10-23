<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>
<!-- Navigation -->
<?php include "includes/navigation.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                    Udemy Course
                    <small>Edwin Diaz</small>
                </h1>

                <?php 
                    if (isset($_POST['submit'])) {
                        $search = $_POST['search'];

                        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                        $search_query = mysqli_query($connection, $query);
                        if (!$search_query) {
                            die("Query failed" . mysqli_error($connection));
                        }

                        $count = mysqli_num_rows($search_query);
                        if ($count == 0) {
                            echo "<h1> No result </h1>";
                        } else {
                            echo "<h1> Some result </h1>";
                        }
                    }
                ?>

                <hr>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>

<!-- Footer -->
<?php include "includes/footer.php" ?>