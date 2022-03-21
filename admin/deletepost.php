<?php
$page ='delPost';
require_once './partials/db.php';
require_once './partials/header.php';

if (isset($_POST['submitpost'])) {
    if (empty($errors)) {
        $queryparam = $_GET['del'];
        $sql = "DELETE FROM `new_post` WHERE `id`='$queryparam'";
      
        if ($conn->query($sql) === true) {
            header("Location: http://localhost/blog/admin/dashboard.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- sidebar include -->
        <?php  require_once './partials/sidebar.php'; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php  require_once './partials/topbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">
                            Delete Post ❌
                        </h1>
                    </div>
                    <!-- add new post form -->
                    <?php
                    $queryparam = $_GET['del'];
                    $query = "SELECT * FROM new_post WHERE id='$queryparam'";
                    $exe =mysqli_query($conn, $query);
                    while ($rows = mysqli_fetch_array($exe)) {
                        $updatedTitle = $rows['title'];
                        $updatedCate = $rows['category'];
                        $updatedAuth = $rows['author'];
                        $updatedImg = $rows['image'];
                        $updatedPost = $rows['post'];
                    } ?>
                    <form
                        action="deletepost.php?del=<?= $queryparam  ?>"
                        method="POST" enctype='multipart/form-data'>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text"
                                value="<?= $updatedTitle ?>"
                                class="form-control" id="title" name="title" aria-describedby="title" readonly>
                        </div>
                        <div class="form-group">
                            <label for="category">
                                Select category
                            </label>
                            <label for="category">
                                Existing category :
                                <?= $updatedCate ?>
                            </label>
                            <select class="form-control" name="category" id="category" disabled>
                                <?php
                               $sqlc = "SELECT `id`, `categoryname` FROM `categories`";
                               if ($res = mysqli_query($conn, $sqlc)) {
                                   if (mysqli_num_rows($res) > 0) {
                                       while ($row = mysqli_fetch_array($res)) {
                                           echo "<option>".$row['categoryname']."</option>";
                                       }
                                   }
                               }
                                
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="author">
                                Select Author
                            </label>
                            <select class="form-control" name="author" id="author" disabled>
                                <option>
                                    <?= $updatedAuth ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="imageupload">
                                Image Upload
                            </label>
                            <label for="imageupload">
                                Existing Image :
                                <img class="img-thumbnail"
                                    src="<?= $updatedImg ?>">
                            </label>
                            <input type="file" class="form-control-file" id="imageupload"
                                accept="image/png, image/gif, image/jpeg" name="image" disabled>
                        </div>
                        <div class="form-group">
                            <label for="post">Write Post</label>
                            <textarea class="form-control" id="editor" rows="7" name="description" readonly>
                                <?= $updatedPost ?>
                            </textarea>
                        </div>
                        <button type="submit" name="submitpost" value="submitpost"
                            class="btn btn-outline-danger btn-lg btn-block">Delete</button>
                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php  require_once './partials/footer.php';
