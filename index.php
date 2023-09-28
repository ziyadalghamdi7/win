<?php 
error_reporting(E_ALL ^ E_WARNING); 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';


include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>



<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
<img src="./images/logo.png" id='logo'>
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">سجل وأربح!</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h4 id="countdown"></h4>
      <p class="lead fw-normal">أدخل معلوماتك لفرصة الربح معنا بالجائزة الكبرى!</p>

    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    <h2>الشروط</h2>
    <ul class="list-group list-group-flush">
  <li class="list-group-item">أن يكون المشارك طالب في الكلية التقنية</li>
  <li class="list-group-item">أكبر من 18 سنة</li>
  <li class="list-group-item">دخول قناة الكلية بالتيليجرام</li>
</ul>
  </div>
  

  <div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
    <h1> الرجاء ادخال معلوماتك </h1>
    <br>
  <div class="mb-3">
    <label for="firstName" class="form-label">الأسم الأول</label>
    <input type="text" name="firstName" class="form-control" value="<?php echo $firstName; ?>" id="firstName">
    <div class="form-text error"><?php echo $errors['firstNameError']; ?></div>
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label">الأسم الأخير</label>
    <input type="text" name="lastName" class="form-control" value="<?php echo $lastName; ?>" id="lastName" aria-describedby="emailHelp">
    <div class="form-text error"><?php echo $errors['lastNameError']; ?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">البريد الألكتروني</label>
    <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" id="email" aria-describedby="emailHelp">
    <div class="form-text error"><?php echo $errors['emailError']; ?></div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">إرسال المعلومات</button>
</form>
</div>
</div>


<div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="modalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class='display-3 text-center modal-title'><?php echo htmlspecialchars($user[1]) . ' ' . htmlspecialchars($user[2]); ?></h1> 
        <?php endforeach; ?>
    </div>
    </div>
  </div>
</div>
<div class='loader-con'>
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>
<div class='d-grid gap-2 col-6 mx-auto my-5'>
<button id='winner' class='btmn btn-primary' type='button' class="btn btn-primary" href="#modal" role="button">اختيار الرابح</button>
</div>

<?php include_once './parts/footer.php'; ?>
