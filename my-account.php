<?php
    include 'controllers/header.php';
?>

<div class="main-heading-change">
    <div class="container">
        <a href="index.php">الرئيسيه /</a>
        <a href="my-account.php" class="active">حسابى</a>
    </div>
</div>

<div class="register-form margin-adjusting">
    <div class="container">
        <div class="row">
            <form action="">
                <h3 class="account">حسابى</h3>
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="">الاسم : </label>
                        <input type="text" class="form-control" value="محمد على">
                    </div>
                    <div class="form-group">
                        <label for="">الإيميـل : </label>
                        <input type="email" class="form-control" value="ahmed@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="">الجوال : </label>
                        <input type="number" class="form-control" value="010020380894">
                        <!-- <small class="form-text text-muted">أدخل الجوال بشكل صحيح</small> -->
                    </div>
                    <div class="form-group">
                        <label for="">الباسورد :</label>
                        <input type="password" class="form-control" value="********">
                        <!-- <small class="form-text text-muted">أدخل الباسورد بشكل صحيح</small> -->
                    </div>
                    <div class="form-group">
                        <label for="">المدينه :</label>
                        <select name="" id="" class="form-control">
                            <option value="" selected>الرياض</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn sign">حفظ</button>
                </div>
                <div class="col-sm-4">
                    <div class="file-adding">
                        <div class="form-group saloka">
                            <label for="file" class="input-label">
                                <img src="images/012.png" id="upload_img" alt="">
                                <span class="label-span">
                                    <i class="flaticon-plus-square"></i>
                                    اضغط هنا لتغيير الصوره الشخصيه
                                </span>
                            </label>
                            <input id="file" type="file" name="file" class="inputfile"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="my-advertises">
            <div class="col-sm-12">
                <h3 class="account-two">اعلاناتى</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="imp-news">
                            <img class="example-image" src="images/008.png">
                            <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="edit-news.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                            
                            <div class="upper-words">
                                <span class="eco">اقتصاد</span>
                                <div class="heads-a">
                                    <h5><a href="#">باكستان تفتح 5 قطاعات للاستثمار...</a></h5>
                                </div>
                                <p>أكد وزير الدولة رئيس مجلس الاستثمار الباكستاني نعيم زامندار أن بلاده ترحب بجذب المستثمرين السعوديين في مختلف القطاعات. ودعاهم لزيارة بلاده ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="imp-news">
                            <img class="example-image" src="images/008.png">
                            <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="edit-news.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                            
                            <div class="upper-words">
                                <span class="eco">اقتصاد</span>
                                <div class="heads-a">
                                    <h5><a href="#">باكستان تفتح 5 قطاعات للاستثمار...</a></h5>
                                </div>
                                <p>أكد وزير الدولة رئيس مجلس الاستثمار الباكستاني نعيم زامندار أن بلاده ترحب بجذب المستثمرين السعوديين في مختلف القطاعات. ودعاهم لزيارة بلاده ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="imp-news">
                            <img class="example-image" src="images/008.png">
                            <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="edit-news.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                            
                            <div class="upper-words">
                                <span class="eco">اقتصاد</span>
                                <div class="heads-a">
                                    <h5><a href="#">باكستان تفتح 5 قطاعات للاستثمار...</a></h5>
                                </div>
                                <p>أكد وزير الدولة رئيس مجلس الاستثمار الباكستاني نعيم زامندار أن بلاده ترحب بجذب المستثمرين السعوديين في مختلف القطاعات. ودعاهم لزيارة بلاده ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'controllers/footer.php';
?>