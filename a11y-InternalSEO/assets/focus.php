<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Discover our accessible site, offering real-life HTML examples and expert SEO tips. Enhance your web development skills, create inclusive websites, and rank higher in search results. Join our community now!">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./slick/slick.css">
	<link rel="stylesheet" href="./style/sidepagestyle2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" 	crossorigin>
	<link href="https://fonts.googleapis.com/css2?	family=Lora:wght@400;500;600;700&family=Ysabeau+Office:wght@1;100;	200;300;400;500;600;700;800;900;1000&display=swap" 	rel="stylesheet">
</head>

<body>
	<title> Accessibility Tips and Guides</title>

    <div class="header">
		<div class="container-xl ">
			<a href="../homepage.php" aria-label="Inside360 News Logo and home button">
				<img src="./images/Mediamodifier-Design (1).svg" alt="Inside360 News logo">
			</a>
		</div>
    </div>

	<section class="section__nav">
    	<div class="container-xl">
			<ul class="nav justify-content-center">
    	        <li class="nav-item">
    	          <a class="nav-link" href="../homepage.php" aria-label="Link button to the Home page">Home</a>
    	        </li>

    	        <li class="nav-item">
    	          <a class="nav-link" href="../sidepage2.php" aria-label="Link button to the Contact Us page">A11Y</a>
    	        </li>        
    	    </ul>
    	</div>
	</section>

	<section>
    	<div class="container-xl">
			<div class="text-center title pt-3">
    		   <h1 aria-label="Accessibility">Accessibiliy</h1>
    		</div>
    	</div>
	</section>

	<section>
    	<div class="container-xl pt-5 pb-5">
    	    <div class="row d-flex justify-content-center">
    	        <div class="col-md-9 border border-2 fs-4 flex-column border-dark d-flex rounded-4 me-2 pb-5 " tabindex="0">
					<h2 class="pt-4 fs-4">
						Управление на фокуса:
					</h2>

					<p class="pt-4 fs-6">	
						Осигуряването на правилни стилове на фокуса и навигационен поток помага на потребителите да разберат текущото си местоположение на страницата и подобрява достъпността с клавиатура.
					</p> 
					
					<p class="pt-4 fs-4">	
						Ето някои ключови аспекти на достъпността чрез фокусиране:
					</p>

					<div class="row fs-6">
						<div class="col-6">
							<p>
								<ul>
									<li>
										Визуално подчертаване на фокуса
									</li>

									<li class="mt-2">
										Чувствителен фокус
									</li>

									<li class="mt-2"> 
										Логичен ред на фокусиране
									</li>
								</ul>	 
							</p>     
						</div>
	
						<div class="col-6">
							<p>
								<ul>
									<li>
										Индикация за грешки
									</li>

									<li class="mt-2">
										Фокус на съдържание при отваряне на модални прозорци
									</li>
								</ul>	
							</p>     
						</div>
					</div>

					<p class="pt-4 fs-6">	
						Достъпността чрез фокусиране е от голямо значение за предоставяне на удобство и лесна навигация за потребителите с увреждания, които използват клавиатурата за интеракция с уеб сайтовете. При проектирането и разработването на уеб сайтове е важно да се обърне специално внимание на този аспект и да се осигури, че фокусирането и навигацията с клавиатура са оптимизирани за достъпност и удобство.
					</p>
    	        </div>

				<div class="col-md-2 border border-2 fs-3 flex-column border-dark d-flex rounded-4 me-2 pb-5 " tabindex="0">
					<h2 class="pt-4 fs-4">
						Още:
					</h2>

					<p class="pt-4 ">	
						<ul class="fs-6">
							<li>
								<a href="./wcag.php">
									Ръководствата за достъпност на уеб съдържание (WCAG):
								</a>
							</li>

							<li>
								<a href="./percievable.php">
									Възприемливост:
								</a>
							</li>

							<li>
								<a href="./operable.php">
									Изпълнимост:
								</a>
							</li>

							<li>
								<a href="./understandable.php">
									Разбираемост:
								</a>
							</li>

							<li>
								<a href="./robust.php">
									Надеждност:
								</a>
							</li>

							<li>
								<a href="./semantic.php">
									Семантичен HTML:
								</a>
							</li>

							<li>
								<a href="./keyboard.php">
									Достъпност с клавиатура:
								</a>
							</li>

							<li>
								<a href="./aria.php">
									ARIA
								</a>
							</li>

							<li>
								<a href="./captions.php">
									Субтитри и транскрипции:
								</a>
							</li>

							<li>
								<a href="./testing.php">
									Тестване и проверка:
								</a>
							</li>
						</ul>	
					</p>                   
    	        </div>
    	    </div>    
		</div>
	</section>

	<footer class="py-5 footer__background-color">
		<div class="container-xl">
			<div class="row">
			  <div class="col-12 col-md">
				<img src="./images/SEO7 modified.png" class="footer__logo" alt="a small logo of the company">
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
	<script src="./slick/slick.js"></script>
	<script src="./scripts/sidepage2script.js"></script>
</body>
</html>
