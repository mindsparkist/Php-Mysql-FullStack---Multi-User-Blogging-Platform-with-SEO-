<?php require_once './partials/_db.php'; ?>
<?php require_once './partials/_header.php'; ?>
<!-- =========== Main Container ============= -->
<div class="main-content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-wrap text-center">
                    <h1 class="error-code">404</h1>
                    <h2 class="error-message h2">Page not found</h2>
                    <p class="message-manual">Unfortunately the page you were looking for could not be found.</p>
                    <a href="index.php" class="btn btn-primary back-btn">Visit Home page <svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M7.33 24l-2.83-2.829 9.339-9.175-9.339-9.167 2.83-2.829 12.17 11.996z"></path>
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
</div><!-- =========== End Main Container ============= -->
<?php require_once './partials/_footer.php';
