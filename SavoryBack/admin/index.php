<?php
include 'partials/header.php';
?>




<section class="dashboard">
    <div class="container dashboard__container">
        <button id="show__sidebar-btn" class="sidebar__toggle"></button>
        <button id="hide__sidebar-btn" class="sidebar__toggle"></button>
        <aside>
            <ul>
                <li>
                    <a href="add-post.php"><i class="uil uil-pen"></i>
                        <h5>Tarif Ekle</h5>
                    </a>
                </li>
                <li>
                    <a href="index.php" class="active"><i class="uil uil-postcard"></i>
                        <h5>Gönderileri Yönet</h5>
                    </a>
                </li>
                <?php if(isset($_SESSION['user_is_admin'])) : ?>
                <li>
                    <a href="add-user.php"><i class="uil uil-user-plus"></i>
                        <h5>Kullanıcı Ekle</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-users.php" ><i class="uil uil-users-alt"></i>
                        <h5>Kullanıcıları Yönet</h5>
                    </a>
                </li>
                <li>
                    <a href="add-category.php"><i class="uil uil-edit"></i>
                        <h5>Kategori Ekle</h5>
                    </a>
                </li>
                <li>
                    <a href="manage-categories.php"  ><i class="uil uil-list-ul"></i>
                        <h5>Kategorileri Yönet</h5>
                    </a>
                </li>
                <?php endif ?>
            </ul>
        </aside>
        <main>
            <h2>Kullanıcıları Yönet</h2>
            <table>
                <thead>
                    <tr>
                        <th>Başlık</th>
                        <th>Kategori</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                        <td>Atıştırmalıklar</td>
                        <td><a href="edit-post.php" class="bton sm">Düzenle</a></td>
                        <td ><a href="delete-category.php" class="bton sm danger">Sil</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                        <td>Atıştırmalıklar</td>
                        <td><a href="edit-post.php" class="bton sm">Düzenle</a></td>
                        <td ><a href="delete-category.php" class="bton sm danger">Sil</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
                        <td>Atıştırmalıklar</td>
                        <td><a href="edit-post.php" class="bton sm">Düzenle</a></td>
                        <td ><a href="delete-category.php" class="bton sm danger">Sil</a></td>
                        <td>Yes</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
   
</section>




<?php
include '../partials/footer.php';
?>