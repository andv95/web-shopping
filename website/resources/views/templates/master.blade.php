<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- link jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- link fontawesome -->
    <script src="https://kit.fontawesome.com/22ed4f26e7.js" crossorigin="anonymous"></script>
    <!-- link css -->
    <link rel="stylesheet"  href="{{ asset('css/web-shop.css') }}">
    <!-- link owlcarousel -->
    <link rel="stylesheet" href="{{asset('dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/owl.theme.default.min.css')}}">
    

    <!-- Test rating star -->
    <script type="text/javascript" src="{{asset('js/jstars.js')}}"></script>
    <style>
        body { background-color: #fafafa; font-family: 'Roboto Condensed' ; }
        .container { margin: 150px auto; max-width: 960px;}
    </style>
</head>
<body>
<div class="body-wrapper text-center mx-auto">
	
@section('content')

@yield('content')
    <div class="clickable-mainmenu-btn" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Modal Menu -->
    <div id="main-menu" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close js-close-menu text-right">
                <i class="fas fa-times"></i>
            </span>
            <div class="menu-content text-center">
                <div class="menu-item">
                    menu1
                </div>
                <div class="menu-item">
                    menu2
                </div>
                <div class="menu-item">
                    menu3
                </div>
            </div>
        </div>

    </div>
    <!-- Footer -->
<div class="footer"></div>

</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
    crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- link js owlcaraousel -->
    <script src="{{asset('dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/classie.js')}}"></script>
	<script src="{{asset('js/dummydata.js')}}"></script>
	<script src="{{asset('js/main-menu.js')}}"></script>
	<!-- <script>
		(function() {
			var menuEl = document.getElementById('ml-menu'),
				mlmenu = new MLMenu(menuEl, {
					// breadcrumbsCtrl : true, // show breadcrumbs
					// initialBreadcrumb : 'all', // initial breadcrumb text
					backCtrl : false, // show back button
					// itemsDelayInterval : 60, // delay between each menu item sliding animation
					onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
				});

			// mobile menu toggle
			var openMenuCtrl = document.querySelector('.action--open'),
				closeMenuCtrl = document.querySelector('.action--close');

			openMenuCtrl.addEventListener('click', openMenu);
			closeMenuCtrl.addEventListener('click', closeMenu);

			function openMenu() {
				classie.add(menuEl, 'menu--open');
				closeMenuCtrl.focus();
			}

			function closeMenu() {
				classie.remove(menuEl, 'menu--open');
				openMenuCtrl.focus();
			}

			// simulate grid content loading
			var gridWrapper = document.querySelector('.content');

			function loadDummyData(ev, itemName) {
				ev.preventDefault();

				closeMenu();
				gridWrapper.innerHTML = '';
				classie.add(gridWrapper, 'content--loading');
				setTimeout(function() {
					classie.remove(gridWrapper, 'content--loading');
					gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
				}, 700);
			}
		})();
	</script> -->
    
    <script src="" type="text/javascript">
        
    </script>
</body>
</html>