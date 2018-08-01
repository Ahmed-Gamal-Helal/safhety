<?php
    include 'controllers/header.php';
?>

<div class="main-heading-change">
    <div class="container">
        <a href="index.php">الرئيسيه /</a>
        <a href="login.php" class="active">تسجيل الدخول</a>
    </div>
</div>

<div class="login-form margin-adjusting">
    <div class="container">
        <form action="" method="">
            <div class="form-group">
                <label for="">الإيميـل : </label>
                <input type="email" class="form-control" aria-describedby="" placeholder="الإيميـل">
                <small class="form-text text-muted">أدخل الايميل بشكل صحيح</small>
            </div>
            <div class="form-group">
                <label for="">الباسورد</label>
                <input type="password" class="form-control" placeholder="********">
                <small class="form-text text-muted">أدخل الباسورد بشكل صحيح</small>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">ذكرنى دائمآ</label>
                <small class="form-text text-muted">ليس لدى حساب <a href="register.php">سجل الآن</a></small>
            </div>
            <button type="submit" class="btn sign">دخول</button>
        </form>
    </div>
</div>

<?php
    include 'controllers/footer.php';
?>