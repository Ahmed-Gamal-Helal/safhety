<?php
    include 'controllers/header.php';
?>

<div class="main-heading-change">
    <div class="container">
        <a href="index.php">الرئيسيه /</a>
        <a href="login.php" class="active">التسجيل</a>
    </div>
</div>

<div class="register-form margin-adjusting">
    <div class="container">
        <div class="row">
            <form action="">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="">الاسم : </label>
                        <input type="text" class="form-control" placeholder="الاسم">
                        <small class="form-text text-muted">أدخل الاسم بشكل صحيح</small>
                    </div>
                    <div class="form-group">
                        <label for="">الإيميـل : </label>
                        <input type="email" class="form-control" placeholder="الإيميـل">
                        <small class="form-text text-muted">أدخل الايميل بشكل صحيح</small>
                    </div>
                    <div class="form-group">
                        <label for="">الجوال : </label>
                        <input type="number" class="form-control" placeholder="الجوال">
                        <small class="form-text text-muted">أدخل الجوال بشكل صحيح</small>
                    </div>
                    <div class="form-group">
                        <label for="">الباسورد :</label>
                        <input type="password" class="form-control" placeholder="********">
                        <small class="form-text text-muted">أدخل الباسورد بشكل صحيح</small>
                    </div>
                    <div class="form-group">
                        <label for="">المدينه :</label>
                        <select name="" id="" class="form-control">
                            <option value="" selected disabled>اختيار المدينه</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn sign">التسجيل</button>
                </div>
                <div class="col-sm-4">
                    <div class="file-adding">
                        <div class="form-group saloka">
                            <label for="file" class="input-label">
                                <img src="images/017.png" id="upload_img" alt="">
                                <span class="label-span">
                                    <i class="flaticon-plus-square"></i>
                                    اضغط هنا لرفع الصورة
                                </span>
                            </label>
                            <input id="file" type="file" name="file" class="inputfile"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include 'controllers/footer.php';
?>