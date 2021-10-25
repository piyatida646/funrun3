<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <h1>สมัครสมาชิก</h1>
                <hr>
                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                <?php endif; ?>
                <form action="/register/save" method="post">
                <div class="mb-3">
                        <label for="inputname" class="form-label">รหัสบัตร</label>
                        <input type="text" name="id_card" class="form-control" id="inputforname" value="<?= set_value('id_card'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="inputforname" value="<?= set_value('name'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">อายุ</label>
                        <input type="text" name="age" class="form-control" id="inputforname" value="<?= set_value('age'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputemail" class="form-label">อีเมล</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword" class="form-label">รหัสผ่าน</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword">
                    </div>
                    <div class="mb-3">
                        <label for="inputconfpassword" class="form-label">ยืนยัยรหัสผ่านอีกครั้ง</label>
                        <input type="password" name="confpassword" class="form-control" id="inputforconfpassword">
                    </div>
                    <button type="submit" class="btn btn-primary">ลงทะเบียน</button>
                </form>
                <hr>
                <a href="/login" class="btn btn-primary">เข้าสู่ระบบ</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>