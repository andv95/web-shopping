<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"
          rel="stylesheet"/>
    <!-- link css -->
    <link rel="stylesheet" href="{{asset('css/list-cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer.css')}}">
    <link rel="stylesheet" href="{{asset('css/check-out.css')}}">
    <!-- link owlcarousel -->
    <link rel="stylesheet" href="{{asset('dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/owl.theme.default.min.css')}}">
    <!-- link font-family -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
    <link href="http://fonts.cdnfonts.com/css/josefin-slab" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/34ac108190ba4a81af3a838a98c1942a?family=URW+Geometric+W15" rel="stylesheet"
          type="text/css"/>
    <!-- link toastr -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <style>

    </style>
</head>
<body class="body-checkout">

<div class="bander">
    <div class="wrap">
        <a href="{{route('home')}}">
                <span class="logo  logo--left">
                    <img class="logo__image logo__image--small" src="{{asset('image/logo.png')}}" alt="">
                </span>
        </a>
    </div>
</div>

<div class="check-out">
    <div class="ckeck-out-wrap">
        <div class="form__check-out">
            <div class="form__check-out-title">
                <p class="up-text text-bold">Info</p>
            </div>
            <form action="" method="post">
                <input name="" type="text" class="w-100 form-check-out-item" placeholder="Name">
                <input name="" type="number" class="w-100 form-check-out-item" placeholder="SĐT">
                <input name="" type="email" class="w-100 form-check-out-item" placeholder="E-mail">
                <textarea name="" class="w-100 form-check-out-textarea" id="" cols="" rows="10"
                          placeholder="Your message to us"></textarea>
                <input class="w-100 py-2 form-check-out-submit" type="submit" value="SUBMIT">
            </form>
        </div>
    </div>
</div>

<!-- Js Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<!-- Test rating star -->
<script type="text/javascript" src="{{asset('js/jstars.js')}}"></script>

<!-- link fontawesome -->
<script src="https://kit.fontawesome.com/22ed4f26e7.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- link js owlcaraousel -->
<script src="{{asset('dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/classie.js')}}"></script>
<!-- link CDN Toastr -->
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<!-- Link JqZoom -->
<script src="{{ asset('js/jqzoom.js') }}"></script>
<script src="" type="text/javascript">
    var $input = $(".field__input").val();
    $(".field__input").keyup(function () {
        alert('áda');
    });


</script>

</body>
</html>
