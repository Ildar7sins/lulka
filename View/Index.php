<div class="content">
	Меню:<?php


	 foreach ($headerCategories as $value) {
	 	if ($_GET['lang'] == 'ru') 
	 	{
			echo $value->title . ", ";
		}else{
			echo $value->englishTitle . ", ";
		}
	}
?> <br> <?php
	if( !isset($articlesCategory->title) )
	{
		echo "Данной статьи не существует!!!";
	}else{
		echo $articlesCategory->title;
	}
	?>
</div>

<a href="http://portfolio-php/Index/all"> Hello hello</a>
