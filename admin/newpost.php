<?php
$page ='newpost';
require_once './partials/db.php';
require_once './partials/header.php';

function sanatizetextarea($str)
{
    $str = urldecode($str);
    $str = filter_var($str, FILTER_SANITIZE_STRING);
    $str = filter_var($str, FILTER_SANITIZE_SPECIAL_CHARS);
    return $str ;
}
$sql_success = false;
$sql_unsuccess = false;
$errors = [];
$title = '';
$description = '';

if (isset($_POST['submitpost'])) {
    date_default_timezone_set("Asia/Kolkata");
    $datetime = date('d/m/Y h:i:s a', time());
    $title = htmlspecialchars(stripslashes(trim($_POST['title'])));
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $author = filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING);
    $description = sanatizetextarea($_POST['description']);
    if (!$title) {
        $errors[] = "title is required";
    }
    if (!$description) {
        $errors[] = "description is required";
    }
    if (empty($errors)) {
        $image = $_FILES['image'] ?? null;
        if ($image) {
            $imagePath = '';
            $imagePath = 'uploads/' . $image['name'];
            move_uploaded_file(
                $image['tmp_name'],
                $imagePath
            );
        } else {
            $errors[] = "Image is required";
        }
    }
    if (empty($errors)) {
        $sql = "INSERT INTO `new_post`(`datetime`, `title`, `category`, `author`, `image`, `post`) VALUES ('$datetime','$title','$category','$author','$imagePath','$description')";
      
        if ($conn->query($sql) === true) {
            $sql_success = true;
        } else {
            $sql_unsuccess = true;
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    // reassign value
    $title = '';
    $description = '';
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
                        <h1 class="h3 mb-0 text-gray-800">Add New Post</h1>
                    </div>
                    <!-- errors -->
                    <?php if (!empty($errors)) {  ?>
                    <?php foreach ($errors as $error) { ?>
                    <div class="alert alert-danger">
                        <?php echo $error ?>
                    </div>

                    <?php }  ?>
                    <?php } ?>
                    <!-- sql error -->
                    <?php if ($sql_success) : ?>
                    <div class="alert alert-warning" role="alert">
                        record inserted successfully
                    </div>
                    <?php endif ?>
                    <?php if ($sql_unsuccess) : ?>
                    <div class="alert alert-warning" role="alert">
                        record inserted Unsuccessfully
                    </div>
                    <?php endif ?>
                    <!-- add new post form -->
                    <form
                        action="<?php echo $_SERVER['PHP_SELF']; ?>"
                        method="POST" enctype='multipart/form-data'>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="title">
                        </div>
                        <div class="form-group">
                            <label for="category">select category</label>
                            <select class="form-control" name="category" id="category">
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
                            <label for="author">select Author</label>
                            <select class="form-control" name="author" id="author">
                                <?php
                               $sqla = "SELECT `id`, `name` FROM `categories`";
                               if ($res = mysqli_query($conn, $sqla)) {
                                   if (mysqli_num_rows($res) > 0) {
                                       while ($row = mysqli_fetch_array($res)) {
                                           echo "<option>".$row['name']."</option>";
                                       }
                                   }
                               }
                          ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="imageupload">Image Upload</label>
                            <input type="file" class="form-control-file" id="imageupload"
                                accept="image/png, image/gif, image/jpeg" name="image">
                        </div>
                        <div class="form-group">
                            <label for="post">Write Post</label>
                            <textarea class="form-control" id="editor" rows="7" name="description"></textarea>
                        </div>
                        <button type="submit" name="submitpost" value="submitpost"
                            class="btn btn-outline-success btn-lg btn-block">Submit</button>
                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php  require_once './partials/footer.php';
