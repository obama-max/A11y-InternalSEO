<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include __DIR__ . '/../../builders/head.php';
	?>
</head>

<body>
	<title> Accessibility Tips and Guides</title>

    <?php
	include __DIR__ . '/../../builders/header.php';
	?>
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
    	        <div class="col-md-9 border border-2 fs-4 flex-column border-dark d-flex rounded-4 me-2 pb-5 ms-2 "  tabindex="0">
					<h2 class="pt-4 fs-4">
						ARIA (Accessible Rich Internet Applications):
					</h2>

					<p class="pt-4 fs-6">	
						<a href="https://www.w3.org/WAI/standards-guidelines/aria/">ARIA</a> е набор от атрибути, които могат да бъдат добавени към <a href="https://developer.mozilla.org/en-US/docs/Web/HTML">HTML</a> елементи, за да подобрят достъпността на динамичното и интерактивно съдържание. Той помага на помощните технологии да разберат целта и поведението на различните елементи.
					</p>   
					
					<p class="pt-4 fs-4">	
						Ето някои ключови аспекти на достъпността чрез ARIA:
					</p>

					<div class="row fs-6">
						<div class="col-6">
							<p>
								<ul>
									<li>
										Роля на елементите
									</li>

									<li class="mt-2">
										Състояние на елементите
									</li>

									<li class="mt-2"> 
										Управление на фокуса
									</li>
								</ul>	 
							</p>     
						</div>
	
						<div class="col-6">
							<p>
								<ul>
									<li>
										Описание на съдържанието
									</li>

									<li class="mt-2">
										Достъпност на приложенията
									</li>
								</ul>	
							</p>     
						</div>
					</div>

					<p class="pt-4 fs-6">	
						Употребата на <a href="https://www.w3.org/WAI/standards-guidelines/aria/">ARIA</a> атрибути и роли е иновативен и важен начин за подобряване на достъпността на уеб сайтовете и приложенията. При разработка и проектиране на уеб сайтове, разработчиците трябва да имат предвид възможностите на <a href="https://www.w3.org/WAI/standards-guidelines/aria/">ARIA</a> и да го използват, където е необходимо, за да предоставят по-добра достъпност и удобство на потребителите с увреждания.
					</p>
    	        </div>

				<div class="col-md-2 border border-2 fs-3 flex-column border-dark d-flex rounded-4 me-2 pb-5 ms-2 " tabindex="0">
					<h2 class="pt-4">
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
								<a href="./captions.php">
									Субтитри и транскрипции:
								</a>
							</li>

							<li>
								<a href="./focus.php">
									Управление на фокуса:
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
