<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	<title>footer</title>

	<link rel="stylesheet" href="../footer/footer.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
<style>
    @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

*{
	padding:0;
	margin:0;
}

html{
	background-color: #fafbfc;
}




/* The footer is fixed to the bottom of the page */

footer{
	position: fixed;
	bottom: 0;
}

@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}


.footer-distributed{
	background-color: rgb(239, 245, 240);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 0px 10px 0px 20px;
    margin-top: 10px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}


/* Footer left */

.footer-distributed .footer-left{
	width: 30%;
}

.footer-distributed h3{
	
	font: bold 36px ;
	margin: 0;
}

/* The company logo */

.footer-distributed .footer-left img{
	width: 0%;
}

.footer-distributed h3 span{
	color:  #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #0c0000;
	margin: 20px 0 12px;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #00050c;
	font-size: 14px;
	font-weight: normal;
    margin: 0;
    text-align: center;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}


.footer-distributed .footer-center i{
	background-color:  #edf0f1;
	color: #0a0000;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
    line-height: 38px;
    
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #0c0000;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #e0ac1c;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 30%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #000508;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #050300;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #0b3b23;
	border-radius: 2px;

	font-size: 20px;
	color: #faf6f6;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}


/* You can remove below code if you don't want Footer to be responsive */


@media (max-width: 880px) {

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
        text-align: center;
        
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
</style>
	<body>

		<footer class="footer-distributed">

			<div class="footer-left">
			<img src="{{asset('/storage/img/logo.jpeg')}}" alt="Logo">
				<h3>Nepal Agro Yantra Pvt. Ltd.</h3>

				<p class="footer-links">
					<a href="#">Home</a>
					|
					<a href="#">Our Product</a>
					|
					<a href="#">Services</a>
					|
                    <a href="#">About Us</a>
                    |
                    <a href="#">Career</a>
                    
				</p>

			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>Pokhara-9, New Road</span>
						Kaski, Nepal</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+977  984629323</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:agroyantra@gmail.com">agroyantra@gmail.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					<p style="color: rgb(233, 136, 10); font-size: 15px;">new Way of Farming....</p> </p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
            </div>
            <p class="footer-company-name">© 2021 Nepal Agro Yantra Pvt. Ltd.</p>
		</footer>
	</body>
</html>