<?php
    include './inc/conn.php';
    include './inc/form.php';
    include './inc/select.php';
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <style>
    #countdown {
    color: #0d6efa;
    padding: 0px;
}

#cards {
    display: none;
}

#loader {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.loader-con {
    display:none;
    position: fixed;
    top: 0;
    left: 0;
    background-color: black;
    width: 100%;
    height: 100%;
}
.list-group-item{
    background:transparent;
}
img{
    max-width: 100%;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>

</head>
<body>
    <div class="container">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <img src="./images/me.jpeg" alt="" >
                <h1 class="display-4 fw-normal">اربح مع حاتم</h1>
                <p class="lead fw-normal">باقي على فتح التسجيل.</p>
                <h3 id="countdown"></h3>
                <p class="lead fw-normal">للسحب على نسخة مجانية من برنامج</p>
            </div>
            <div class="container">
                <h3>للدخول في السحب يرجى اتباع ما يلي :</h3>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">تابع البث المباشر على صفحتي في الفيس بوك بالتاريخ المذكور اعلاه</li>
            <li class="list-group-item">ساقوم بالبث المباشر على صفحتي في الفيس بوك عباره عن اسئلة واجوبة حرة للجميع</li>
            <li class="list-group-item">خلا فتره التسجيل سيتم فتح صفحه التسجيل هنا حيث سنقوم بتسجيل اسمك وايميلك</li>
            <li class="list-group-item">بنهايه البث المباشر سيتم اختيار اسم واحد من قاعده البيانات بشكل عشوائي</li>
            <li class="list-group-item"></li>
        </ul>
            </div>
        </div>
        

        <div class="position-relative text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form class="mt-5" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
            <h3>الرجاء ادخل معلوماتك</h3>
            <div class="mb-3">
                <label for="firstName" class="form-label">الاسم الاول</label>
                <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo($firstName);?>">
                <div id="emailHelp" class="form-text error"><?php echo($errors['firstNameError']);?></div>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">الاسم الاخير</label>
                <input type="text" class="form-control"  name="lastName" id="lastName" value="<?php echo($lastName);?>">
                <div id="emailHelp" class="form-text error"><?php echo($errors['lastNameError']);?></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">الايميل</label>
                <input type="text" class="form-control" name="email" id="email" value="<?php echo($email);?>">
                <div id="emailHelp" class="form-text error"><?php echo($errors['emailError']);?></div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >ارسال المعلومات</button>
        </form>
</div>
</div>
<div class="loader-con">
<div id="loader">
    <canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>
<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button id="winner" type="button" class="btn btn-primary" >
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h5 class="display-1 text-centercard-title"><?php echo htmlspecialchars($user['firstName']).' '.htmlspecialchars($user['lastName']); ?></h5>
        <?php endforeach; ?>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


</div>
    <script src="./js/bootstrap.bundle.min.js" ></script>
    <!-- <script src="./js/loader.js"></script> -->
    <!-- <script src="./js/script.js"></script> -->
    <script>
    // Set the date we're counting down to
//alert("JS");
var countDownDate = new Date("Oct 01, 2023 16:30:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("countdown").innerHTML = days + "يوم " + hours + "ساعة " +
        minutes + "دقيقة " + seconds + "ثانية ";
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "لقد وصلت متاخر";
    }
}, 1000);
   
var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height;
var diff;
var sim;
const win = document.querySelector('#winner');
    const loader=document.querySelector('.loader-con');
    var myModal = new bootstrap.Modal(document.getElementById('modal'),{
    keyboard:false})
function progressSim() {
    diff = ((al / 100) * Math.PI * 2 * 10).toFixed(2);
    ctx.clearRect(0, 0, cw, ch);
    ctx.lineWidth = 17;
    ctx.fillStyle = '#0d6efd';
    ctx.strokeStyle = "#0d5efd";
    ctx.textAlign = "center";
    ctx.font = "28px monospace";
    ctx.fillText(al + '%', cw * .52, ch * .5 + 5, cw + 12);
    ctx.beginPath();
    ctx.arc(100, 100, 75, start, diff / 10 + start, false);
    ctx.stroke();
    if (al >= 100) {
        clearTimeout(sim);
        //clearInterval(sim);
        // Add scripting here that will run when progress completes
        myModal.show();
        loader.style.display='none';
    }
    al++;
}
    

    win.addEventListener('click', function() {
        loader.style.display='block';
        sim = setInterval(progressSim, 80);
        /*setTimeout(() => {
            myModal.show();
        }, 3000);*/

});
//var sim = setInterval(progressSim, 80);
    </script>
    
    </body>
    </html>
    