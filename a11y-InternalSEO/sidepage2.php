<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Discover our accessible site, offering real-life HTML examples and expert SEO tips. Enhance your web development skills, create inclusive websites, and rank higher in search results. Join our community now!">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/slick/slick.css">
	<link rel="stylesheet" href="./assets/style/sidepagestyle2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" 	crossorigin>
	<link href="https://fonts.googleapis.com/css2?	family=Lora:wght@400;500;600;700&family=Ysabeau+Office:wght@1;100;	200;300;400;500;600;700;800;900;1000&display=swap" 	rel="stylesheet">
</head>

<body>
	<title> Accessibility Tips and Guides</title>

    <div class="header">
		<div class="container-xl ">
			<a href="./homepage.php" aria-label="Inside360 News Logo and home button">
				<img src="./assets/images/Mediamodifier-Design (1).svg" alt="Inside360 News logo">
			</a>
		</div>
    </div>

	<section class="section__nav">
    	<div class="container-xl">
			<ul class="nav justify-content-center">
    	        <li class="nav-item">
    	          <a class="nav-link" href="./homepage.php" aria-label="Link button to the Home page">Home</a>
    	        </li>

    	        <li class="nav-item">
    	          <a class="nav-link" href="./sidepage1.php" aria-label="Link button to the Contact Us page">SEO</a>
    	        </li>        
    	    </ul>
    	</div>
	</section>

<article>
	<section>
    	<div class="container-xl">
			<div class="text-center title">
    		   <h1 aria-label="Accessibility" tabindex="0">Accessibiliy</h1>
    		</div>
    	</div>
	</section>

	<section>
    	<div class="container-xl pt-5 pb-5">
    	    <div class="row d-flex justify-content-center">
    	        <div class="col-5 col-md-3 border border-2 fs-4 flex-column border-dark d-flex rounded-4 me-2 pb-5 " tabindex="0" >
					<h2 class="text-center mt-2 fs-5 ">
						Достъпността:
					</h2>

					<p class="pt-4 fs-6">	
						 В уеб разработката се отнася до практиката разработване на уеб сайтове и уеб приложения така, че да бъдат изплозваеми от хора с увреждания. 
					</p>                   
    	        </div>

				<div class="col-5 col-md-3 border border-2 fs-4 flex-column border-dark d-flex rounded-4 me-2 pb-5" tabindex="0" >
					<h2 class="text-center fs-5 mt-2">
						Целта:
					</h2>

					<p class="pt-4 fs-6">
						  Да се осигури на хората с различни увреждания като зрителни, слухови, двигателни и психични увреждания, да могат ефективно да използват уеб съдържанието. 
					</p>                
    	        </div>

				<div class="col-5 col-md-3 border border-2 fs-4 flex-column border-dark d-flex rounded-4 pb-5 mt-2 mt-md-0" tabindex="0">
					<h2 class="text-center fs-5 mt-2 ">
						Направата:
					</h2>

					<p class="pt-4 fs-6"> 
						 На уеб сайтове достъпни не само помага на потребителите с увреждания, но и подобрява общото потребителско изживяване. 
					</p>                  
    	        </div>
    	    </div>    
		</div>
	</section>

	<section class="container py-lg-5 py-4">
        <h1 class="mb-4 line-after line--black fs-4" tabindex="0">
            Kлючови аспекти и техники:
        </h1>

        <div class="slider myslider">
            <div class="slider-slide p-3">
                <a href="./assets/wcag.php" class="overflow-hidden object d-block h-100 position-relative">
                    <img src="./assets/images/W3C®_Icon.png" alt="">

                    <p class="ff-lora position-absolute start-0 end-0 bottom-0 px-3 py-2 z-1 text-white">
                        Ръководствата за достъпност на уеб съдържание (WCAG):
                    </p>
                </a>
            </div>

            <div class="slider-slide p-3">
                <a href="./assets/percievable.php" class="overflow-hidden object d-block h-100 position-relative">
                    <img src="./assets/images/illustration-accessibility-1.png" alt="">

                    <p class="ff-lora position-absolute start-0 end-0 bottom-0 px-3 py-2 z-1 text-white">
                        Възприемливост:
                    </p>
                </a>
            </div>

            <div class="slider-slide p-3">
                <a href="./assets/operable.php" class="overflow-hidden object d-block h-100 position-relative">
                    <img src="./assets/images/illustration-accessibility-2.jpg" alt="">

                    <p class="ff-lora position-absolute start-0 end-0 bottom-0 px-3 py-2  z-1 text-white">
                        Изпълнимост:
                    </p>
                </a>
            </div>

            <div class="slider-slide p-3">
                <a href="./assets/understandable.php" class="overflow-hidden object d-block h-100 position-relative">
                    <img src="./assets/images/benefits-icons.jpg" alt="">

                    <p class="ff-lora position-absolute start-0 end-0 bottom-0 px-3 py-2 z-1 text-white">
                        Разбираемост:
                    </p>
                </a>
            </div>

			<div class="slider-slide p-3">
                <a href="./assets/robust.php" class="overflow-hidden object d-block h-100 position-relative">
                    <img src="./assets/images/Accessibility-Tips.jpg" alt="">

                    <p class="ff-lora position-absolute start-0 end-0 bottom-0 px-3 py-2 z-1 text-white">
                        Надеждност:
                    </p>
                </a>
            </div>

			<div class="slider-slide p-3">
                <a href="./assets/semantic.php" class="overflow-hidden object d-block h-100 position-relative">
                    <img src="./assets/images/How-to-Meet-HTML-Accessibility-Standards.png" alt="">

                    <p class="ff-lora position-absolute start-0 end-0 bottom-0 px-3 py-2 z-1 text-white">
                        Семантичен HTML:
                    </p>
                </a>
            </div>

			<div class="slider-slide p-3">
                <a href="./assets/keyboard.php" class="overflow-hidden object d-block h-100 position-relative">
                    <img src="./assets/images/Accessibility-Tips-1.jpg" alt="">

                    <p class="ff-lora position-absolute start-0 end-0 bottom-0 px-3 py-2 z-1 text-white">
                        Достъпност с клавиатура:
                    </p>
                </a>
            </div>

			<div class="slider-slide p-3">
                <a href="./assets/aria.php" class="overflow-hidden object d-block h-100 position-relative">
                    <img src="./assets/images/what-is-aria-and-why-use-it.jpg" alt="">

                    <p class="ff-lora position-absolute start-0 end-0 bottom-0 px-3 py-2 z-1 text-white">
                        ARIA (Accessible Rich Internet Applications):
                    </p>
                </a>
            </div>

			<div class="slider-slide p-3">
                <a href="./assets/captions.php" class="overflow-hidden object d-block h-100 position-relative">
                    <img src="./assets/images/hero-image.jpg" alt="">

                    <p class="ff-lora position-absolute start-0 end-0 bottom-0 px-3 py-2 z-1 text-white">
                        Субтитри и транскрипции:
                    </p>
                </a>
            </div>

			<div class="slider-slide p-3">
                <a href="./assets/focus.php" class="overflow-hidden object d-block h-100 position-relative">
                    <img src="./assets/images/hero.png" alt="">

                    <p class="ff-lora position-absolute start-0 end-0 bottom-0 px-3 py-2 z-1 text-white">
                        Управление на фокуса:
                    </p>
                </a>
            </div>

			<div class="slider-slide p-3">
                <a href="./assets/testing.php" class="overflow-hidden object d-block h-100 position-relative">
                    <img src="./assets/images/Accessibility-Testing.jpg" alt="">

                    <p class="ff-lora position-absolute start-0 end-0 bottom-0 px-3 py-2 z-1 text-white">
                        Тестване и проверка:
                    </p>
                </a>
            </div>
        </div> 
    </section>

    <section>
		<div class="container-xl">
			<div class="row">
					  <div class="col-md-12 pt-5">
						<h2 class="fs-5 fw-normal pb-5">
							Следните видеа могат да помогнат с допълнителни знания свързани с <a href="https://www.w3.org/mission/accessibility/">a11y</a>.
						</h2>

						<video aria-label="a video from chrome whichc talks in depth about the certain aspects of the core web vitals" class="video__custom border border-2 border-dark"  width="1280" height="720" controls>
							<source src="./assets/videos/A11ycasts.mp4" type="video/mp4">
							Немаш съпорт машинка.
						</video>

						<h2 class="fs-5 fw-normal pb-3 pt-3">
							Можете да намерите пълният <a href="https://www.youtube.com/watch?v=HtTyRajRuyY&list=PLNYkxOF6rcICWx0C9LVWWVqvHlYJyqw7g&index=1&ab_channel=GoogleChromeDevelopers">Allycast</a> чрез поставения линк!
						</h2>
					</div>
				</div>
            </div>
	</section>
</article>

<footer class="py-5 footer__background-color">
	<div class="container-xl">
    	<div class="row">
    	  <div class="col-12 col-md">
    		<img src="./assets/images/SEO7 modified.png" class="footer__logo" alt="a small logo of the company">
    		<small class="d-block mb-3 text-black">&copy; 2017–2023</small>
    	  </div>
    	  <div class="col-6 col-md">
    		<h3>Топ оферти</h3>
    		<ul class="list-unstyled text-small">
    		  <li><a class="link-primary text-black text-decoration-none" href="#">Линк които не води никъде</a></li>
    		  <li><a class="link-primary text-black text-decoration-none" href="#">И този на никъде не води</a></li>
    		  <li><a class="link-primary text-black text-decoration-none" href="#">Долния линк води на накъде</a></li>
    		  <li><a class="link-primary text-black text-decoration-none" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Водя ли на някъде?</a></li>
    		</ul>
    	  </div>
    	  <div class="col-6 col-md">
    		<h4>Място с различни линкове</h4>

    		<ul class="list-unstyled text-small">
    		  <li>
                <a class="link-primary text-black text-decoration-none" href="#">
                    Празен линк
                </a>
              </li>

    		  <li>
                <a class="link-warning text-black text-decoration-none" href="#">
                    Празен линк но има друг цвят
                </a>
              </li>

    		  <li>
                <a class="link-info text-black text-decoration-none" href="#">
                    Празен линк с още по-готин цвят
                </a>
              </li>

    		  <li>
                <a class="link-danger text-black text-decoration-none" href="#">
                    Празен линк с най-готния цвят 
                </a>
              </li>
    		</ul>
    	  </div>
    	</div>
    </div>
</footer>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="./assets/slick/slick.js"></script>
	<script src="./assets/scripts/sidepage2script.js"></script>
</body>
</html>