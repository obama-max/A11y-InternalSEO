<?php 
    $pages = [ 
        'html' => [ 
            'page_data' => 'HTML',
            'page_link' => 'html',

            'sub_pages' => [
                'modals' => [ 
                    'page_data' => 'Тагове',
                ]
            ]
         ] 
                    ,
         'focus' => [ 
            'page_data' => 'SEO',

            'page_link' => 'seoonpage',
            'sub_pages' => [
                'seoonpage' => [ 
                    'page_data' => 'SEO-onpage',
                    
                ] ,
                'seooffpage' => [ 
                    'page_data' => 'SEO-offpage',
                    
                ] ,
              
                'semantic' => [ 
                    'page_data' => 'Семантичен ХТМЛ',
                    
                ] ,

                'mobileversion' => [ 
                    'page_data' => 'Мобилна версия',
                    
                ] ,
                
                'lighthouse' => [ 
                    'page_data' => 'Фар (Lighthouse)',
                    
                ]
              
              
            ]
         ] 
         ,
         'a11y' => [ 
            'page_data' => 'A11Y',

            'page_link' => 'a11y',
            'sub_pages' => [
                'aria' => [ 
                    'page_data' => 'Ария',
                ] ,
                'captions' => [ 
                    'page_data' => 'Субтитри',
                ] ,
                'focus' => [ 
                    'page_data' => 'Фокус',
                ] ,
                'operable' => [ 
                    'page_data' => 'Изпълнимос',
                ] ,
                'percievable' => [ 
                    'page_data' => 'Възприемливост',
                ] ,
                'robust' => [ 
                    'page_data' => 'Надежност',
                ] ,
                'semantic' => [ 
                    'page_data' => 'Семнатичен HTML',
                ] ,
                'testing' => [ 
                    'page_data' => 'Проверка',
                ] ,
                'understandable' => [ 
                    'page_data' => 'Разбираемост',
                ] ,
                'wcag' => [ 
                    'page_data' => 'WCAG',
                ] 

            ]
         ]
    ];
    $active_page = [
        'page_data' => '404',

            'page_link' => '404',
    ];


    $page_name = array_key_exists('page', $_GET) && $_GET['page'] ? $_GET['page'] : '404';

    foreach ($pages as $page_link => $page) {
        if ($page_name === $page_link) {
            $active_page = $page;
            break;
        } 

        $sub_pages = isset($page['sub_pages']) && is_array($page['sub_pages']) ? $page['sub_pages'] : [];
        
        foreach ($sub_pages as $sub_page_link => $page) {
            if ($page_name === $sub_page_link) {
                $active_page = $page;
                break;
            }
        }
    }

    $page_path = "pages/$page_name.php";
    if ( !is_file($page_path) ) {
        $page_path = 'pages/404.php';
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include 'builders/head.php'; ?>
        <?php include 'builders/styles.php'; ?>
	</head>

	<body>
        <main>
            <section>  
                
                <div class="container"> 
                    <?php
                        include __DIR__ . '/builders/aside.php';
	            	    include __DIR__ . '/builders/maincontent.php';
	                ?>
                </div>
                                          
            </section>
        </main>

        <?php		  
            include 'builders/scripts.php'; 
	    ?>    

	</body>
</html>
