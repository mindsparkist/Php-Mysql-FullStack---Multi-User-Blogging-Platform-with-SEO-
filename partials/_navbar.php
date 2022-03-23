 <!-- =========== Navigation ============= -->

 <nav class="site-navbar-wrap">
     <div class="container">
         <div class="navbar-inner d-flex">
             <span class="menu-button d-inline-flex menu-open"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24">
                     <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z" />
                 </svg></span>
             <!-- =========== Main Menu ============= -->
             <ul id="menu-main-menu" class="navbar-nav m-auto text-center main-menu d-none d-lg-flex">
                 <?php
                 $conn = mysqli_connect('localhost', 'root', '', 'php-blog');
                 $res = mysqli_query($conn, "SELECT categoryname FROM  categories");
                 while ($row=mysqli_fetch_assoc($res)) { ?>
                 <li class="menu-item"><a href="category-business.php"><?= $row['categoryname']?></a>
                 </li>
                 <?php   } ?>

                 <li class="menu-item"><a href="contact.php">Contact</a></li>
             </ul><!-- =========== End Menu ============= -->
             <!-- =========== Search Icon Area ============= -->
             <span class="search-button d-inline-flex search-open">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                     <path
                         d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z" />
                 </svg>
             </span>

             <!-- =========== End Search Icon Area ============= -->
             <!-- =========== Mobile Menu ============= -->
             <nav class="mobile-menu" id="mobile-menu">
                 <ul id="menu-main-menu-1" class="menu">
                     <?php
                     $conn = mysqli_connect('localhost', 'root', '', 'php-blog');
                     $res = mysqli_query($conn, "SELECT categoryname FROM  categories");

                 while ($row=mysqli_fetch_assoc($res)) { ?>
                     <li class="menu-item">
                         <a href="category-business.php">
                             <?= $row['categoryname']?>
                         </a>
                     </li>
                     <?php   } ?>

                     <li class="menu-item"><a href="contact.php">Contact</a></li>
                 </ul>
             </nav>
             <!-- =========== End Mobile Menu ============= -->
             <div class="backdrop hidden-md hidden-lg" id="backdrop">
                 <span class="menu-close align-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24">
                         <path
                             d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
                     </svg></span>
             </div>

         </div>
     </div>
 </nav>
 <!-- =========== End Navigation ============= -->
 <div class="fixed-nav-wrap">
     <!-- =========== Fixed Navigation ============= -->
     <nav class="site-navbar-wrap">
         <div class="container">
             <div class="navbar-inner d-flex">
                 <span class="menu-button d-inline-flex menu-open"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24">
                         <path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z" />
                     </svg></span>
                 <ul id="menu-main-menu-2" class="navbar-nav m-auto text-center main-menu d-none d-lg-flex">
                     <?php
                     $conn = mysqli_connect('localhost', 'root', '', 'php-blog');
                     $res = mysqli_query($conn, "SELECT categoryname FROM  categories");

                 while ($row=mysqli_fetch_assoc($res)) { ?>
                     <li class="menu-item">
                         <a href="category-business.php">
                             <?= $row['categoryname']?>
                         </a>
                     </li>
                     <?php   } ?>

                     <li class="menu-item"><a href="contact.php">Contact</a></li>
                 </ul>
                 <span class="search-button d-inline-flex search-open"><svg xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" viewBox="0 0 24 24">
                         <path
                             d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z" />
                     </svg></span>
             </div>
         </div>
     </nav>
 </div>
 <!-- =========== End Fixed Navigation ============= -->