<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Multiliving | SOC</title>
		<link
			rel="shortcut icon"
			href="https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/logo.png"
			type="image/x-icon"
		/>
		<!-- Global site tag (gtag.js) - Google Ads: 681317427 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-681317427"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "AW-681317427");
		</script>
		<!-- Event snippet for LeadForm_Demand_Dontdoit conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
		<script>
			function gtag_report_conversion(url) {
				var callback = function () {
					if (typeof url != "undefined") {
						window.location = url;
					}
				};
				gtag("event", "conversion", {
					send_to: "AW-681317427/TsfcCJnBtdcBELOo8MQC",
					event_callback: callback,
				});
				return false;
			}
		</script>
		<!-- Facebook Pixel Code -->
		<script>
			!(function (f, b, e, v, n, t, s) {
				if (f.fbq) return;
				n = f.fbq = function () {
					n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
				};
				if (!f._fbq) f._fbq = n;
				n.push = n;
				n.loaded = !0;
				n.version = "2.0";
				n.queue = [];
				t = b.createElement(e);
				t.async = !0;
				t.src = v;
				s = b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t, s);
			})(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
			fbq("init", "599940324115495");
			fbq("track", "PageView");
		</script>
		<noscript
			><img
				height="1"
				width="1"
				style="display: none"
				src="https://www.facebook.com/tr?id=599940324115495&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
		<style>
			@import url("https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap");
			@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
			@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");

			body {
				margin: 0px;
				padding: 0px;
				outline: none;
			}

			*::after,
			*::before {
				box-sizing: border-box;
			}

			a:visited,
			a:hover,
			a:active,
			a:link {
				text-decoration: none;
				color: inherit;
			}

			.container {
				width: 85%;
				margin: 0 auto;
			}

			/*****************************************    Model     ************************************/
			.modal-root {
				display: none;
				position: fixed;
				width: 100%;
				height: 100vh;
				background-color: rgba(0, 0, 0, 0.5);
				z-index: 2;
			}

			.modal {
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				background: #fff6f1;
				border: 0.5px solid rgb(218, 218, 218);
				box-sizing: border-box;
				box-shadow: rgba(253, 137, 112, 0.16) 0px 0px 48px;
				border-radius: 8px;
				padding-bottom: 3rem;
				opacity: 1;
				z-index: 3;
			}

			@media (max-width: 640px) {
				.modal {
					width: 80%;
				}
			}

			/****************************************     Banner     ***********************************/

			.banner {
				display: flex;
				background-image: url("./images/navi_bg.png");
				width: 100%;
				background-repeat: no-repeat;
				background-size: cover;
			}

			@media (max-width: 640px) {
				.banner {
					background-image: url("./images/navi_bg.png");
					background-position: center;
				}
			}

			.banner-gradient {
				background: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 22.54%, rgba(0, 0, 51, 0) 98.35%);
				opacity: 1;
				width: 100%;
				height: 100%;
			}

			@media (max-width: 640px) {
				.banner-gradient {
					opacity: 1;
				}
			}

			.banner .logo {
				height: 50px;
				width: 200px;
				margin-top: 48px;
			}

			.banner-text {
				display: flex;
				z-index: 2;
				padding-bottom: 4rem;
			}

			@media (max-width: 640px) {
				.banner-text {
					flex-direction: column;
				}
			}

			.banner-left h4 {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 22px;
				line-height: 26px;
				letter-spacing: -0.38px;
				text-transform: uppercase;
				color: #ffa476;
			}

			.banner-left h2 {
				font-family: Rubik;
				font-style: normal;
				font-weight: normal;
				font-size: 48px;
				line-height: 64px;
				letter-spacing: -1.18px;
				color: #ffffff;
			}

			.banner-left h6 {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 18px;
				line-height: 21px;
				letter-spacing: -0.18px;
				color: #ffa476;
			}
			.banner-left div.locations {
				background-image: url("./images/Locations\ Desktop.png");
                width: 100%;
                height: 70px;
                background-repeat: no-repeat;
			}
			@media (max-width: 640px) {
				.banner-left h4 {
					font-size: 19px;
				}

				.banner-left h2 {
					font-size: 23px !important;
					font-weight: 600;
					line-height: 28px;
				}

				.banner-left h6 {
					margin: 22px 0px;
				}
			}

			.banner-left ul {
				list-style-type: none;
				padding-left: 0px;
			}

			.banner-left ul li {
				position: relative;
				font-family: Rubik;
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				line-height: 20px;
				letter-spacing: -0.1px;
				color: #ffffff;
				padding-left: 30px;
				margin-bottom: 12px;
			}

			.banner-left ul li:before {
				position: absolute;
				content: url(https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/list-icon.svg);
				left: 0px;
				height: 23px;
				width: 23px;
			}

			.banner .form {
				background: #f5f5f5;
				padding: 2rem;
				padding-top: 0.5rem;
				padding-bottom: 4rem;
				border: 0.5px solid #dadada;
				box-sizing: border-box;
				/* box-shadow: 0px 0px 48px rgba(253, 137, 112, 0.16); */
				border-radius: 8px;
			}

			.banner-right {
				flex-basis: 50%;
				margin-left: 2rem;
			}

			@media (max-width: 640px) {
				.banner-right,
				.banner-left {
					flex-basis: 360px;
				}

				.banner-right {
					margin-left: 0;
					margin-top: 50px;
				}
			}

			form {
				display: flex;
				flex-wrap: wrap;
			}

			.form-heading {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 36px;
				line-height: 64px;
				letter-spacing: -1.18px;
				color: #333333;
			}

			.form-text {
				font-family: Rubik;
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				line-height: 24px;
				color: #333333;
			}

			form input,
			form select {
				background: #fffbf9;
				border: 0.3px solid #9e9e9e;
				box-sizing: border-box;
				border-radius: 5px;
				width: 100%;
				height: 50.24px;
				padding: 0px 20px;
				margin-bottom: 1rem;
			}

			input[name="phone"],
			select[name="location"] {
				width: 49%;
			}

			input[name="phone"] {
				margin-right: 2%;
			}

			form button {
				font-family: Rubik;
				font-style: normal;
				font-weight: bold;
				font-size: 18px;
				line-height: 32px;
				margin-top: 40px;
				width: 100%;
				margin-left: auto;
				margin-right: auto;
				text-align: center;
				background: #333333;
				color: #fff;
				border-radius: 4px;
				text-transform: uppercase;
			}

			/********************    Section 2     ************************/

			.section-2 {
				display: flex;
				flex-direction: column;
				width: 100%;
				padding-top: 50px;
				padding-bottom: 70px;
				background: #f3eded;
				font-family: Rubik;
				font-style: normal;
				color: #333333;
			}

			@media (max-width: 640px) {
				.section-2 {
					padding-bottom: 0;
				}
			}

			.section-2 .heading {
				font-weight: 500;
				font-size: 36px;
				line-height: 43px;
				margin-bottom: 50px;
				text-align: center;
				letter-spacing: -1.1px;
			}

			@media (max-width: 360px) {
				.section-2 .heading {
					font-size: 26px;
				}
			}

			.icon-cards {
				display: flex;
				justify-content: space-around;
				font-family: Rubik;
				font-style: normal;
				color: #333333;
			}

			@media (max-width: 640px) {
				.icon-cards {
					flex-direction: column;
					align-items: center;
				}

				.icon-card {
					margin-bottom: 5rem;
				}
			}

			.icon-card {
				max-width: 220px;
			}

			.icon-card__icon {
				width: 60px;
				height: 60px;
				margin-bottom: 20px;
			}

			.icon-card__heading {
				margin-bottom: 20px;
				font-weight: 500;
				font-size: 16px;
				line-height: 19px;
			}

			@media (max-width: 360px) {
				.icon-card__heading {
					font-size: 26px;
					line-height: 30px;
				}
			}

			.icon-card__text {
				font-weight: normal;
				font-size: 14px;
				line-height: 20px;
			}

			@media (max-width: 360px) {
				.icon-card__text {
					font-size: 16px;
				}
			}

			/****************************************      Section 3, Section 5        *************************************/

			.section-3,
			.section-5 {
				display: flex;
				flex-direction: column;
				height: 2400px;
			}

			@media (max-width: 640px) {
				.section-3,
				.section-5 {
					height: auto;
				}
			}

			.section-3 .heading,
			.section-5 .heading {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 36px;
				line-height: 57px;
				letter-spacing: -1.1px;
				color: #ff9966;
				margin-top: 0.5em;
				margin-bottom: 0;
			}

			@media (max-width: 640px) {
				.section-3 .heading,
				.section-5 .heading {
					font-size: 31px !important;
					line-height: 46px;
					margin-top: 0;
				}
			}

			.section-3 .scroller,
			.section-5 .scroller {
				position: sticky;
				top: 10px;
			}

			@media (max-width: 640px) {
				.section-3 .scroller,
				.section-5 .scroller {
					position: relative;
					top: 0px;
				}
			}

			.section-3 .wrapper,
			.section-5 .wrapper {
				display: flex;
				align-items: center;
			}

			@media (max-width: 640px) {
				.section-3 .wrapper,
				.section-5 .wrapper {
					flex-direction: column;
				}
			}

			.section-3 .wrapper .image,
			.section-5 .wrapper .image {
				width: 900px;
				height: 500px;
				filter: drop-shadow(0px 4px 48px rgba(150, 150, 150, 0.16));
				border-radius: 8px;
			}

			.section-3 .wrapper .image {
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center;
			}

			.section-5 .wrapper .image {
				background: url(https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/maintenance.png);
				background-repeat: no-repeat;
				background-position: center;
				background-position: center;
			}

			@media (max-width: 640px) {
				.section-3 .wrapper .image,
				.section-5 .wrapper .image {
					width: 100%;
					height: auto;
					display: none;
				}
			}

			.section-3 .wrapper .content,
			.section-5 .wrapper .content {
				flex-basis: 50%;
				display: flex;
				flex-direction: column;
			}

			.section-3 .wrapper .content .image,
			.section-5 .wrapper .content .image {
				background-image: none !important;
				display: none;
			}

			@media (max-width: 640px) {
				.section-3 .wrapper .content .image,
				.section-5 .wrapper .content .image {
					display: block;
					text-align: center;
					height: auto;
				}

				.section-3 .wrapper .content img,
				.section-5 .wrapper .content img {
					width: 100%;
				}

				.swiper-button-next,
				.swiper-button-prev {
					width: 15px;
				}
			}

			.section-3 .wrapper .content .row,
			.section-5 .wrapper .content .row,
			.section-3 .wrapper .content .row.active,
			.section-5 .wrapper .content .row.active {
				border-color: #fd8970;
				border-width: 0px 0px 0px 4px;
				border-style: solid;
				margin: 5px;
				margin-bottom: 2.2rem;
				padding-left: 2rem;
			}

			.section-3 .wrapper .content .row.active h2,
			.section-5 .wrapper .content .row.active h2 {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 26px;
				line-height: 38px;
				letter-spacing: -1.1px;
				color: #333333;
			}

			.section-3 .wrapper .content .row.active p,
			.section-5 .wrapper .content .row.active p {
				font-family: Rubik;
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				line-height: 24px;
				color: #333333;
			}

			.section-3 .wrapper .content .row,
			.section-5 .wrapper .content .row {
				border-color: #ababab;
			}

			.section-3 .wrapper .content .row h2,
			.section-5 .wrapper .content .row h2 {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 24px;
				line-height: 32px;
				color: #ababab;
				margin-top: 10px;
				margin-bottom: 10px;
			}

			@media (max-width: 640px) {
				.section-3 .wrapper .content .row,
				.section-5 .wrapper .content .row {
					border: none !important;
					margin: 5px;
					margin-top: 25px !important;
					padding-left: 0 !important;
					margin-bottom: 2.2rem;
				}

				.section-3 .wrapper .content .row h2,
				.section-5 .wrapper .content .row h2 {
					font-family: Rubik;
					font-style: normal;
					font-weight: 500;
					font-size: 26px;
					line-height: 38px;
					letter-spacing: -1.1px;
					color: #333333;
					margin: 0;
				}

				.section-3 .wrapper .content .row p,
				.section-5 .wrapper .content .row p {
					font-family: Rubik;
					font-style: normal;
					font-weight: normal;
					font-size: 16px;
					line-height: 24px;
					color: #333333;
					margin: 0;
				}
			}

			.section-3 .wrapper .content .row:not(.active) p,
			.section-5 .wrapper .content .row:not(.active) p {
				display: none;
			}

			@media (max-width: 640px) {
				.section-3 .wrapper .content .row:not(.active) p,
				.section-5 .wrapper .content .row:not(.active) p {
					display: flex;
				}
			}

			/***************************************        Section 4          **********************************/

			.section-4 {
				padding-top: 4rem;
				padding-bottom: 4rem;
			}

			@media (max-width: 640px) {
				.section-4 {
					padding-bottom: 0;
				}
			}

			.section-4 .heading {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 36px;
				line-height: 43px;
				text-align: center;
				letter-spacing: -1.1px;
				color: #333333;
			}

			@media (max-width: 640px) {
				.section-4 .heading {
					padding-bottom: 31px !important;
				}
			}

			.section-4 .about {
				font-family: Rubik;
				font-style: normal;
				font-weight: normal;
				width: 85%;
				margin: 0px auto;
				text-align: center;
				font-size: 16px;
				line-height: 24px;
				letter-spacing: -0.18px;
				color: #333333;
			}

			.section-4 .cards {
				display: flex;
				flex-direction: column;
			}

			.section-4 .cards .card {
				display: flex;
				align-items: center;
				margin: 2.5rem 0px;
			}

			@media (max-width: 860px) {
				.section-4 .cards .card {
					flex-direction: column;
				}
			}

			.section-4 .cards .card .card__text {
				display: flex;
				flex-direction: column;
			}

			.section-4 .cards .card:nth-child(2n + 1) img {
				position: relative;
				margin-right: 4rem;
				left: -2rem;
			}

			.section-4 .cards .card:nth-child(2n) img {
				position: relative;
				margin-left: 4rem;
				right: -2rem;
			}

			@media (max-width: 860px) {
				.section-4 .cards .card:nth-child(2n + 1) img,
				.section-4 .cards .card:nth-child(2n) img {
					margin: 0;
					left: 0;
					right: 0;
					width: 100%;
				}

				.section-4 .cards .card:nth-child(2n) .card__text {
					order: 2;
				}

				.section-4 .cards .card .card-image {
					margin-bottom: 2rem;
				}
			}

			.section-4 .cards .card .card__text .card-title {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 32px;
				line-height: 38px;
				letter-spacing: -0.1px;
				color: #fd8970;
				margin-bottom: 10px;
			}

			@media (max-width: 640px) {
				.section-4 .cards .card .card__text .card-title {
					font-size: 26px;
				}
			}

			.section-4 .cards .card .card__text .card-text {
				font-family: Rubik;
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				line-height: 24px;
				color: #333333;
				margin-bottom: 20px;
			}

			.section-4 .cards .card .card__text .item {
				position: relative;
				left: 20px;
				font-family: Rubik;
				font-style: normal;
				font-weight: normal;
				font-size: 16px;
				line-height: 32px;
				color: #333333;
			}

			.section-4 .cards .card .card__text .item:before {
				position: absolute;
				display: flex;
				align-items: end;
				justify-content: center;
				left: -30px;
				top: 4px;
				background-color: #fd8970;
				height: 23px;
				width: 23px;
				border-radius: 50%;
			}

			.section-4 .cards .card .card__text .item-1:before {
				content: url(https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/list-1.svg);
			}

			.section-4 .cards .card .card__text .item-2:before {
				content: url(https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/list-2.svg);
			}

			.section-4 .cards .card .card__text .item-3:before {
				content: url(https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/list-3.svg);
			}

			/****************************************      Section 7        *************************************/

			.section-7 {
				background-color: rgba(255, 153, 102, 0.3);
				padding-top: 2rem;
				padding-bottom: 5rem;
			}

			.section-7 .heading {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 36px;
				line-height: 43px;
				text-align: center;
				letter-spacing: -0.18px;
				color: #ff9966;
			}

			.section-7 .card {
				display: flex;
			}

			@media (max-width: 640px) {
				.section-7 .heading {
					font-size: 31px !important;
				}

				.section-7 .card {
					flex-direction: column;
				}
			}

			.section-7 .card .card-image {
				flex-basis: 70%;
				border-radius: 8px;
				overflow: hidden;
			}

			@media (max-width: 640px) {
				.section-7 .card .card-image img {
					width: 100%;
					padding-bottom: 2rem;
				}
			}

			.section-7 .card .card__text__wrapper {
				display: flex;
				flex-direction: column;
				padding-left: 5rem;
				flex-basis: 100%;
			}

			.section-7 .card .card__text {
				display: flex;
				flex-direction: column;
				justify-content: center;
			}

			@media (max-width: 640px) {
				.section-7 .card .card__text__wrapper {
					padding-left: 0;
				}
			}

			.section-7 .card .card__text .heading {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 36px;
				line-height: 43px;
				text-align: left;
				margin-bottom: 20px;
				letter-spacing: -0.18px;
				color: #2f2f2f;
			}

			.section-7 .card .card__text .text {
				font-family: Rubik;
				font-style: normal;
				font-weight: normal;
				font-size: 18px;
				line-height: 26px;
				letter-spacing: 0.28px;
				color: #2f2f2f;
				min-height: 80px;
			}

			@media (max-width: 640px) {
				.section-7 .card .card__text .heading {
					font-size: 26px;
				}

				.section-7 .card .card__text .text {
					font-size: 16px;
				}
			}

			.section-7 .card .card__text__wrapper .slider-controls {
				display: flex;
			}

			.section-7 .card .card__text__wrapper .slider-control {
				display: inline-block;
				height: 10px;
				width: 10px;
				border-radius: 50%;
				margin-right: 5px;
				margin-top: 20px;
				background-color: #454545;
			}

			.section-7 .card .card__text__wrapper .slider-control.active {
				background-color: #fd8970;
			}

			/****************************************      Section 10       *************************************/

			.section-10 {
				display: flex;
				flex-direction: column;
				width: 100%;
				padding-top: 70px;
				padding-bottom: 70px;
				background: #fff;
			}

			.section-10 .heading {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 36px;
				line-height: 43px;
				margin-bottom: 50px;
				text-align: center;
				letter-spacing: -1.1px;
			}

			@media (max-width: 360px) {
				.section-10 {
					padding-bottom: 0;
				}

				.section-10 .heading {
					font-size: 31px;
				}
			}

			/************************************                  Section 11                      ****************************/

			.section-11 {
				background: #f6f6f6;
				padding: 4rem 0;
			}

			.section-11 .heading {
				font-family: Rubik;
				font-style: normal;
				font-weight: bold;
				font-size: 36px;
				line-height: 70px;
				text-align: center;
				letter-spacing: -1.34px;
			}

			@media (max-width: 360px) {
				.section-11 {
					padding: 1rem 0;
				}

				.section-11 .container {
					width: 100%;
				}

				.section-11 .heading {
					font-size: 31px;
				}
			}

			.section-11 .wrapper {
				display: flex;
			}

			.section-11 .wrapper img {
				margin: 0px 20px;
			}

			@media (max-width: 640px) {
				.section-11 .wrapper img {
					margin: 0px 10px;
				}
			}

			.section-11 .card {
				display: flex;
				background: #fff;
				border-radius: 12px;
				overflow: hidden;
			}

			@media (max-width: 640px) {
				.section-11 .card {
					flex-direction: column;
				}
			}

			.section-11 .card-1 .card__image {
				background-image: url(https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/review1.jpg);
			}

			.section-11 .card-2 .card__image {
				background-image: url(https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/review2.jpg);
			}

			.section-11 .card-3 .card__image {
				background-image: url(https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/review3.jpg);
			}

			.section-11 .card__image {
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				flex-basis: 100%;
			}

			@media (max-width: 640px) {
				.section-11 .card__image {
					flex-basis: auto;
					height: 220px;
				}
			}

			.section-11 .card__text {
				display: flex;
				flex-direction: column;
				justify-content: flex-start;
				padding: 4rem;
				width: 100%;
				min-height: 400px;
			}

			@media (max-width: 640px) {
				.section-11 .card__text {
					padding: 1rem;
					width: auto;
				}
			}

			.section-11 .card__text .heading {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 30px;
				line-height: 44px;
				letter-spacing: -0.64px;
				text-align: left;
				color: #fd8970;
			}

			.section-11 .card__text .subtitle {
				font-family: Inter;
				font-style: normal;
				font-weight: normal;
				font-size: 20px;
				line-height: 34px;
				letter-spacing: -0.33px;
				color: #3d3d3d;
				margin-bottom: 20px;
			}

			.section-11 .card__text .about {
				font-family: Rubik;
				font-style: normal;
				font-weight: normal;
				font-size: 20px;
				line-height: 34px;
				letter-spacing: -0.33px;
				color: #3d3d3d;
			}

			@media (max-width: 640px) {
				.section-11 .card__text .heading {
					font-size: 26px;
				}

				.section-11 .card__text .subtitle {
					font-size: 16px;
					line-height: 20px;
				}

				.section-11 .card__text .about {
					font-size: 16px;
					line-height: 20px;
				}
			}

			/************************************            Section 6, Section 12                   *************************/

			.section-12,
			.section-6 {
				padding-top: 70px;
				padding-bottom: 70px;
			}

			.section-12 .wrapper,
			.section-6 .wrapper {
				display: flex;
				justify-content: center;
				align-items: center;
			}

			@media (max-width: 640px) {
				.section-12 .wrapper,
				.section-6 .wrapper {
					flex-direction: column;
				}
			}

			.section-6 h2.heading {
				font-family: Rubik;
				font-style: normal;
				font-weight: 500;
				font-size: 36px;
				line-height: 43px;
				text-align: center;
				letter-spacing: -1.1px;
				color: #000000;
			}

			.section-12 .heading,
			.section-6 .heading {
				font-family: Rubik;
				font-style: normal;
				font-weight: normal;
				font-size: 36px;
				line-height: 48px;
				letter-spacing: -1.1px;
				color: #000000;
			}

			@media (max-width: 640px) {
				.section-12 .heading,
				.section-6 .heading {
					text-align: center;
					font-size: 31px;
					line-height: 40px;
				}
			}

			.section-12 img {
				height: 300px;
			}

			.section-6 img {
				height: 400px;
			}

			@media (max-width: 640px) {
				.section-12 img,
				.section-6 img {
					height: auto;
					width: 100%;
				}
			}

			.section-12 .right {
				margin-left: 5rem;
			}

			.section-6 .right {
				margin-left: 6rem;
			}

			@media (max-width: 640px) {
				.section-12 .right,
				.section-6 .right {
					margin-left: 0px;
				}
			}

			.section-12 button,
			.section-6 button {
				background: #fd8970;
				box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.25);
				border-radius: 4px;
				height: 56px;
				width: 235px;
				border: none;
				font-family: Poppins;
				outline: none;
				font-weight: bold;
				font-size: 16px;
				line-height: 32px;
				text-align: center;
				color: #ffffff;
			}

			@media (max-width: 640px) {
				.section-12 button,
				.section-6 button {
					display: block;
					margin: 0 auto;
				}
			}

			/*******************************                    Footer                   ********************************/

			footer {
				background: #fd8970;
				padding-top: 50px;
				padding-bottom: 0px;
			}

			.footer-content {
				display: flex;
			}

			.footer-left {
				display: flex;
				flex-direction: column;
				flex-basis: 50%;
				font-family: Rubik;
				font-style: normal;
			}

			.footer-left .about {
				font-weight: normal;
				font-size: 14px;
				line-height: 20px;
				letter-spacing: -0.18px;
				margin-top: 20px;
				color: #ffffff;
			}

			.footer-left .company-name {
				margin-top: 20px;
				font-weight: 500;
				font-size: 12px;
				line-height: 18px;
				letter-spacing: -0.18px;
				color: #ffffff;
			}

			.footer-left address {
				font-weight: normal;
				font-style: normal;
				margin-top: 10px;
				font-size: 10px;
				line-height: 16px;
				letter-spacing: -0.18px;
				color: #ffffff;
			}

			.footer-left .social-links {
				list-style-type: none;
				margin-left: 0px;
				padding: 0px;
			}

			.footer-left .social-links .social-link {
				display: inline-block;
				margin-right: 20px;
			}

			.footer-right {
				display: flex;
				justify-content: space-around;
				font-family: Rubik;
				font-style: normal;
				flex-basis: 50%;
			}

			.footer-right .page-links h4 {
				margin: 0px;
				font-weight: 500;
				font-size: 16px;
				line-height: 28px;
				letter-spacing: -0.18px;
				color: #ffffff;
				margin: 15px 0px;
			}

			.footer-right .page-links ul {
				list-style-type: none;
				padding-left: 0;
				margin-left: 0px;
			}

			.footer-right .page-links ul > li {
				font-size: 12px;
				line-height: 28px;
				letter-spacing: -0.18px;
				color: #ffffff;
			}

			.copyright__row {
				font-family: Inter;
				font-style: normal;
				font-weight: 600;
				font-size: 12px;
				line-height: 21px;
				letter-spacing: 0.01px;
				color: #2f2f2f;
				padding-top: 25px;
				padding-bottom: 25px;
				background-color: #fff;
				margin-top: 50px;
			}

			@media (max-width: 960px) {
				.footer-content {
					flex-direction: column;
				}

				.footer-left {
					flex-basis: 100%;
				}

				.footer-right {
					flex-basis: 100%;
					justify-content: space-between;
				}

				.footer-right .page-links {
					margin-right: 20px;
				}
			}
			.section-3-background {
				margin: 3em;
				height: 75vw;
				background-position: center;
				background-size: contain;
				background-repeat: no-repeat;
				background-image: url("./images/Ammenities\ Desktop.png");
			}
			@media (max-width: 960px) {
				.section-3-background {
					margin: 2em 0px;
					height: 200vw;
					background-image: url("./images/Ammenities\ Mobile.png");
				}
			}
		</style>
	</head>
	<body>
		<div class="modal-root">
			<div class="form modal">
				<div class="container">
					<p class="form-heading">Talk to us</p>
					<p class="form-text">
						Find the ideal tenant matches for you and make the most of your assets,Let's talk!
					</p>
					<form onsubmit="return submitModalForm()">
						<input type="text" name="name" id="name" placeholder="Name" required />
						<input type="text" name="phone" id="phone" placeholder="Phone Number" required />
						<select name="location" id="location" required>
							<option disabled selected value>Location</option>
							<option value="Powai">Powai</option>
							<option value="Bandra Kurla Complex">Bandra Kurla Complex</option>
							<option value="Lower Parel">Lower Parel</option>
							<option value="Worli">Worli</option>
							<option value="Wadala">Wadala</option>
							<option value="Andheri">Andheri</option>
							<option value="Bandra">Bandra</option>
							<option value="South Bombay">South Bombay</option>
							<option value="Malabar Hills">Malabar Hills</option>
							<option value="Dadar">Dadar</option>
							<option value="Kurla">Kurla</option>
							<option value="Marine Lines">Marine Lines</option>
							<option value="Jogeshwari">Jogeshwari</option>
							<option value="Chembur">Chembur</option>
							<option value="Dombivli">Dombivli</option>
							<option value="Other Areas">Other Areas</option>
						</select>
						<button>Schedule a Call</button>
					</form>
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="banner-gradient">
				<div class="container">
					<nav>
						<a href="https://multiliving.co.in">
							<img
								src="./images/logo.png"
								alt="Logo"
								class="logo"
							/>
						</a>
					</nav>
					<div class="banner-text">
						<div class="banner-left">
							<h4>Institutional Real Estate Management</h4>
							<h2>Trusted Property Management for Homeowners</h2>
							<h6>Helping you get the best out of your asset.</h6>
							<ul>
								<li>Asset & Portfolio Management for Homeowners</li>
								<li>Smart Property Leasing for maximum value</li>
							</ul>
							<div class="locations"></div>
						</div>
						<div class="banner-right">
							<div class="form">
								<div class="container">
									<p class="form-heading">Talk to us</p>
									<p class="form-text">
										Find the ideal tenant matches for you and make the most of your assets,Let's
										talk!
									</p>
									<form onsubmit="return submitForm()">
										<input type="text" name="name" id="fullname" placeholder="Name" required />
										<input
											type="text"
											name="phone"
											id="phoneNumber"
											placeholder="Phone Number"
											required
										/>
										<select name="location" id="geolocation" required>
											<option disabled selected value>Location</option>
											<option value="Powai">Powai</option>
											<option value="Bandra Kurla Complex">Bandra Kurla Complex</option>
											<option value="Lower Parel">Lower Parel</option>
											<option value="Worli">Worli</option>
											<option value="Wadala">Wadala</option>
											<option value="Andheri">Andheri</option>
											<option value="Bandra">Bandra</option>
											<option value="South Bombay">South Bombay</option>
											<option value="Malabar Hills">Malabar Hills</option>
											<option value="Dadar">Dadar</option>
											<option value="Kurla">Kurla</option>
											<option value="Marine Lines">Marine Lines</option>
											<option value="Jogeshwari">Jogeshwari</option>
											<option value="Chembur">Chembur</option>
											<option value="Dombivli">Dombivli</option>
											<option value="Other Areas">Other Areas</option>
										</select>
										<button>Schedule a Call</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section-2">
			<div class="container">
				<h2 class="heading">The Smartest way to Manage your Real Estate</h2>
				<div class="icon-cards">
					<div class="icon-card">
						<div class="icon-card__icon">
							<img
								src="https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/Verified Homes.svg"
								alt=""
							/>
						</div>
						<div class="icon-card__heading">Institutional property management solution</div>
						<div class="icon-card__text">
							Let MultiLiving take care of your precious home. The only institutional solution
							available for asset management in Mumbai.
						</div>
					</div>
					<div class="icon-card">
						<div class="icon-card__icon">
							<img
								src="https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/Repair and Maintenence.svg"
								alt=""
							/>
						</div>
						<div class="icon-card__heading">Hassle-free Maintenance</div>
						<div class="icon-card__text">
							Regular maintenance & scheduled Checks. We'll make sure your asset is always at its
							best.
						</div>
					</div>
					<div class="icon-card">
						<div class="icon-card__icon">
							<img
								src="https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/Rental Insurance.svg"
								alt=""
							/>
						</div>
						<div class="icon-card__heading">Quarterly Audit Reports</div>
						<div class="icon-card__text">
							Regular Audit Report post physical visit every quarter.
						</div>
					</div>
					<div class="icon-card">
						<div class="icon-card__icon">
							<img
								src="https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/Digital Concierge.svg"
								alt=""
							/>
						</div>
						<div class="icon-card__heading">Technology & Data</div>
						<div class="icon-card__text">
							Mobile app to request services, and to pay rent and utilities online.
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-3-background"></div>
		<div class="section-4">
			<div class="container">
				<h2 class="heading">Professional Institutional Property Management</h2>
				<h3 class="about">
					An all-weather financial instrument meant for real estate asset owners, shielding you and
					your property against market fluctuations. Also, helping you optimize your yields in the
					real estate trough cycle, maximizing your returns during the upswing of the same cycle.
				</h3>
				<div class="cards">
					<div class="card">
						<div class="card-image">
							<img
								src="https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/house.png"
								alt="house"
							/>
						</div>
						<div class="card__text">
							<div class="card-title">A Brand you can trust</div>
							<div class="card-text">
								Platform built by leading industry experts and the brand that knows real estate in
								and out.
							</div>
							<div class="item item-1">Cumulative 100s of years of experience</div>
							<div class="item item-2">100Mn$ Assets</div>
							<div class="item item-3">Human-Enabled AI & Big Data</div>
						</div>
					</div>
					<div class="card">
						<div class="card__text">
							<div class="card-title">Hyperlocal Expertise for every asset type</div>
							<div class="card-text">
								Getting ahead of the market just became easier. Supercharge your growth with our
								hyperlocal data expertise to target potential renters and sellers, serve better and
								grow faster for any asset you have.
							</div>
						</div>
						<div class="card-image">
							<img
								src="https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/survey.png"
								alt="survey"
							/>
						</div>
					</div>
					<div class="card">
						<div class="card-image">
							<img
								src="https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/stocks.png"
								alt="stocks"
							/>
						</div>
						<div class="card__text">
							<div class="card-title">Leverage data and analytics to get maximum ROI</div>
							<div class="card-text">
								Make our data work for you. Gain insights in real time, keep tabs on your yields,
								market fluctuations, and make better informed decisions. Grow consistenly with your
								asset listed with Multiliving.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-12">
			<div class="container">
				<div class="wrapper">
					<div class="left">
						<h3 class="heading">
							MLT is your go-to partner, Contact our relationship managers today!
						</h3>
						<button onclick="openModal()">Schedule A Call</button>
					</div>
					<div class="right">
						<img src="./images/bottom.png" alt="buildings" />
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="logo">
				<div class="container">
					<img
						src="https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/logo.png"
						alt="logo"
					/>
				</div>
			</div>
			<div class="container">
				<div class="footer-content">
					<div class="footer-left">
						<div class="about">
							MultiLiving is a network of curated apartments for urban <br />
							professionals, offering a hassle-free renting experience complete
							<br />
							with tech-assisted home management and hospitality services.
						</div>
						<div class="company-name">MultiLiving Technologies Pvt. Ltd.</div>
						<address>
							7th Floor, Lodha Excelus, Apollo Mills Compound,<br />
							NM Joshi Marg, Mahalakshmi, Mumbai,<br />
							Maharashtra 400011
						</address>
						<ul class="social-links">
							<li class="social-link">
								<a href="https://www.linkedin.com/company/multilivingofficial">
									<img
										src="https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/linkedin.svg"
										alt="linkedin"
									/>
								</a>
							</li>
							<li class="social-link">
								<a href="https://www.facebook.com/MultiLivingLife/">
									<img
										src="https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/facebook.svg"
										alt="facebook"
									/>
								</a>
							</li>
						</ul>
					</div>
					<div class="footer-right">
						<div class="page-links">
							<h4>Tenants</h4>
							<ul>
								<li><a href="https://multiliving.co.in/">Homepage</a></li>
							</ul>
						</div>
						<div class="page-links">
							<h4>Homeowners</h4>
							<ul>
								<li>
									<a href="https://multiliving.co.in/homeowner">Homeowners</a>
								</li>
							</ul>
						</div>
						<div class="page-links">
							<h4>Company</h4>
							<ul>
								<li>
									<a href="https://multiliving.co.in/aboutus">About Us</a>
								</li>
								<li><a href="https://multiliving.co.in/career">Careers</a></li>
								<li>
									<a href="https://multiliving.co.in/tnc">Terms & Conditions</a>
								</li>
								<li>
									<a href="https://multiliving.co.in/privacy_policy">Privacy Policy</a>
								</li>
								<li>
									<a href="https://multiliving.co.in/refund_cancellation_policy"
										>Refund & Cancellation Policy</a
									>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__row">
				<div class="container">Multiliving Technologies Ltd. 2020 All rights reserved</div>
			</div>
		</footer>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			const modal = document.querySelector(".modal-root");

			function openModal() {
				modal.style.display = "flex";
			}

			window.onclick = function (event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			};

			function submitForm() {
				//const url = 'https://staging.internal.multiliving.co.in:8081/api/lp/owner';
				const url = "https://multiliving.co.in:8081/api/lp/owner";
				const fullName = document.getElementById("fullname").value.trim();
				const phoneNumber = document.getElementById("phoneNumber").value.trim();
				const location = document.getElementById("geolocation").value.trim();
				const params = window.location.search
					.split("?")[1]
					.split("&")
					.map((a) => a.split("="))
					.reduce((dict, a) => {
						dict[a[0].toLowerCase()] = a[1];
						return dict;
					}, {});

				const formData = new FormData();
				formData.append("Full_Name", fullName);
				formData.append("Phone_No", phoneNumber);
				formData.append("Location_str", location);
				formData.append("UTM_Source", params.utm_source);
				formData.append("UTM_Medium", params.utm_medium);
				formData.append("UTM_Campaign", params.utm_campaign);
				formData.append("UTM_Term", params.utm_term);

				fetch(url, {
					body: formData,
					method: "POST",
					// headers: { 'Content-Type': 'application/x-www-form-url-encoded' },
				})
					.then((response) => response.json())
					.then((res) => {
						//console.log(res);
						gtag_report_conversion(window.location.href);
					})
					.catch((error) => {
						//console.log(error);
						gtag_report_conversion(window.location.href);
					});

				return false;
			}

			function submitModalForm() {
				//const url = 'https://staging.internal.multiliving.co.in:8081/api/lp/owner';
				const url = "https://multiliving.co.in:8081/api/lp/owner";
				const fullName = document.getElementById("name").value.trim();
				const phoneNumber = document.getElementById("phone").value.trim();
				const location = document.getElementById("location").value.trim();
				const params = window.location.search
					.split("?")[1]
					.split("&")
					.map((a) => a.split("="))
					.reduce((dict, a) => {
						dict[a[0].toLowerCase()] = a[1];
						return dict;
					}, {});

				const formData = new FormData();
				formData.append("Full_Name", fullName);
				formData.append("Phone_No", phoneNumber);
				formData.append("Location_str", location);
				formData.append("UTM_Source", params.utm_source);
				formData.append("UTM_Medium", params.utm_medium);
				formData.append("UTM_Campaign", params.utm_campaign);
				formData.append("UTM_Term", params.utm_term);

				fetch(url, {
					body: formData,
					method: "POST",
					// headers: { 'Content-Type': 'application/x-www-form-url-encoded' },
				})
					.then((response) => response.json())
					.then((res) => {
						//console.log(res);
						gtag_report_conversion(window.location.href);
					})
					.catch((error) => {
						//console.log(error);
						gtag_report_conversion(window.location.href);
					});

				return false;
			}

			document.querySelectorAll(".section-11 .card").forEach((el) => (el.style.display = "none"));

			document.querySelector(".section-11 .card").style.display = "flex";

			document.querySelector(".swiper-button-next").addEventListener("click", nextCard);
			document.querySelector(".swiper-button-prev").addEventListener("click", prevCard);

			let curr_card = 1;

			function nextCard() {
				curr_card += 1;
				curr_card =
					curr_card > document.querySelectorAll(".section-11 .card").length
						? curr_card % document.querySelectorAll(".section-11 .card").length
						: curr_card;

				displayCard();
			}

			function prevCard() {
				curr_card -= 1;
				curr_card =
					curr_card < 1 ? document.querySelectorAll(".section-11 .card").length : curr_card;

				displayCard();
			}

			function displayCard() {
				document.querySelectorAll(".section-11 .card").forEach((el) => (el.style.display = "none"));
				document.querySelector(`.section-11 .card-${curr_card}`).style.display = "flex";
			}

			function resetControls() {
				document.querySelectorAll(".slider-control").forEach((el) => {
					el.classList.remove("active");
				});
				document
					.querySelectorAll(".section-7 .card .card__text")
					.forEach((el) => (el.style.display = "none"));
			}

			resetControls();
			document.querySelector(".section-7 .card .card__text:nth-child(1)").style.display = "flex";
			document.querySelector(".slider-control.slide-1").classList.add("active");

			document.querySelector(".slider-control.slide-1").addEventListener("click", function (evt) {
				resetControls();
				document.querySelector(".section-7 .card .card__text:nth-child(1)").style.display = "flex";
				evt.target.classList.add("active");
			});

			document.querySelector(".slider-control.slide-2").addEventListener("click", function (evt) {
				resetControls();
				document.querySelector(".section-7 .card .card__text:nth-child(2)").style.display = "flex";
				evt.target.classList.add("active");
			});

			document.querySelector(".slider-control.slide-3").addEventListener("click", function (evt) {
				resetControls();
				document.querySelector(".section-7 .card .card__text:nth-child(3)").style.display = "flex";
				evt.target.classList.add("active");
			});

			document.querySelector(".slider-control.slide-4").addEventListener("click", function (evt) {
				resetControls();
				document.querySelector(".section-7 .card .card__text:nth-child(4)").style.display = "flex";
				evt.target.classList.add("active");
			});

			let slideNumber = 1;

			setInterval(() => {
				$(`.slider-control.slide-${slideNumber}`).click();
				slideNumber += 1;
				slideNumber = slideNumber > 4 ? 1 : slideNumber;
			}, 2000);

			let row1 = $(".section-3 .row-1").offset().top;
			let row2 = $(".section-3 .row-2").offset().top;
			let row3 = $(".section-3 .row-3").offset().top;
			let row4 = $(".section-5 .row-1").offset().top;
			let row5 = $(".section-5 .row-2").offset().top;
			let row6 = $(".section-5 .row-3").offset().top;

			$(window)
				.scroll(function () {
					var scrollPoint;
					scrollPoint = $(window).scrollTop() + 200;
					if (scrollPoint < row4 - 800) {
						if (scrollPoint > row1 && scrollPoint < row2) {
							$(".section-3 .row").removeClass("active");
							$(".section-3 .row-1").addClass("active");
							$(".section-3 .wrapper .image").css(
								"background-image",
								"url(" +
									'"https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/Maintenence Scheduled.png"' +
									")"
							);
						}
						if (scrollPoint > row2 + 600 && scrollPoint < row3 + 1200) {
							$(".section-3 .row").removeClass("active");
							$(".section-3 .row-2").addClass("active");
							$(".section-3 .wrapper .image").css(
								"background-image",
								"url(" +
									'"https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/Home Insurance.png"' +
									")"
							);
						}
						if (scrollPoint > row3 + 1200) {
							$(".section-3 .row").removeClass("active");
							$(".section-3 .row-3").addClass("active");
							$(".section-3 .wrapper .image").css(
								"background-image",
								"url(" +
									'"https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/Safety & Security.png"' +
									")"
							);
						}
					} else {
						if (scrollPoint > row4 && scrollPoint < row5) {
							$(".section-5 .row").removeClass("active");
							$(".section-5 .row-1").addClass("active");
							$(".section-5 .wrapper .image").css(
								"background-image",
								"url(" +
									'"https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/Hassle Free.png"' +
									")"
							);
						}
						if (scrollPoint > row5 + 600 && scrollPoint < row6 + 1200) {
							$(".section-5 .row").removeClass("active");
							$(".section-5 .row-2").addClass("active");
							$(".section-5 .wrapper .image").css(
								"background-image",
								"url(" +
									'"https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/Low Turnaround.png"' +
									")"
							);
						}
						if (scrollPoint > row6 + 1200) {
							$(".section-5 .row").removeClass("active");
							$(".section-5 .row-3").addClass("active");
							$(".section-5 .wrapper .image").css(
								"background-image",
								"url(" +
									'"https://multiliving-landing-page.s3.ap-south-1.amazonaws.com/nri_supply/Tenant Acquistion & Screening.png"' +
									")"
							);
						}
					}
				})
				.scroll();
		</script>
	</body>
</html>
