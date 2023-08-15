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
        'css' => [ 
            'page_data' => 'CSS',
            'page_link' => 'css',

            'sub_pages' => [
                'container' => [ 
                    'page_data' => 'Контайнер',
                ] ,

                'marginpadding' => [ 
                    'page_data' => 'Разстояния',
                ] ,

                'button' => [ 
                    'page_data' => 'Бутон',
                ] ,
                
                'block' => [ 
                    'page_data' => 'Блок елементи',
                ] ,

                'boxmodel' => [ 
                    'page_data' => 'Бох модел',
                ] ,

                'flex' => [ 
                    'page_data' => 'Флекс',
                ] ,
                'selectors' => [ 
                    'page_data' => 'Селектори',
                ] ,

                'bem' => [ 
                    'page_data' => 'БЕМ',
                ] ,

                'bootstrap' => [ 
                    'page_data' => 'Bootstrap',
                ]
            ]
         ]      ,
         'javascript' => [ 
            'page_data' => 'JS',
            'page_link' => 'javascript',

            'sub_pages' => [
                'placeholder' => [ 
                    'page_data' => 'to be expected in patch 178',
                ]
            ]
         ]  
         
                    ,
         'seo' => [ 
            'page_data' => 'SEO',
            'page_link' => 'seo',

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
                    
                ] ,

                'website' => [ 
                    'page_data' => 'Уебстраница (Website)',
                    
                ]
              
              
            ]
         ] 
         ,
         'a11y' => [ 
            'page_data' => 'A11Y',

            'page_link' => 'a11y',
            'sub_pages' => [
                'standards' => [ 
                    'page_data' => 'Стандарти',
                ] ,
                'percievable' => [ 
                    'page_data' => 'Възприемливост',
                ] ,
                'operable' => [ 
                    'page_data' => 'Изпълнимос',
                ] ,
                'understandable' => [ 
                    'page_data' => 'Разбираемост',
                ] ,
                'robust' => [ 
                    'page_data' => 'Надежност',
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
        <title><?php echo $active_page['page_data'] ?></title>
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
