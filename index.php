<?php

/*index.php*/

echo '<!doctype html>';
echo '<html5>';
echo '     <head>';
echo '          <meta charset="UTF-8" />';
echo '          <title>Ar for start</title>';
echo '			<link rel="Stylesheet" type="text/css" href="style.css" />';
echo '     </head>';
echo '<body>';

echo '<header >';
	echo 'baner';
echo '</header>';

echo '<nav>';
	echo '<a href="index.php">O mnie</a> | ';
	echo '<a href="#">News</a> | ';
	echo '<a href="#">News</a> | ';
	echo '<a href="#">News</a> | ';
echo '</nav>';

echo '<article>';
/*************************************************************************************/
echo '<section class="about_me_hed" id="nav_1" onclick="show_section(1);" style="background-color: #669966;">Wykształcenie</section>';
	echo '<section class="about_me_body1" id="sec_1" style="background-color:#99ff99;">';
	  echo '<section class="about_me_body">';
?>
		<h1>Wykształcenie <h1>
		<ul>


			<li>2008-2012 - Zespół Szkół nr 1 im. Gen. Józefa Bema w Ciechanowie technikum informatyczne ukończone z tytułem: Technik Informatyk 
				</li>
			<li>01.10.2012-06.06.2016 - Uniwersytet Warmińsko Mazurski w Olsztunie Wydział Matematyki i Informatyki, kierunek: Informatyka. Studia inżynierskie dzienne ukończone tytułem: Inżynier Informatyki
					<ul>Temat pracy: System elerningowy do nauki baz danych z elementami grywalizacji.</ul>
				</li>
			<li>01.10.2016-... - Szkoła Główna Handlowa w Warszawie, studia niestacjonarne na kieruneku: Analiza Danych - Big Data
				</li>
		</ul>
<?php	
echo '	</section>';
echo '	</section>';


/*************************************************************************************/

echo '<section id="nav_2" onclick="show_section(2);" style="padding:3px;background-color: #66cc66;padding left; height: 20px;width: 95%;">Doświadczenie</section>';
echo '<section id="sec_2"  style="display: none;background-color:#99ff99;padding:3px; width:95%; ">';
?>
<h1>Doświadczenie<h1>
<ul>
<li>1.05.2011-31.05.2011 - Praktyka zawodowa w sklepie komputerowym „Neutron”: składanie oraz serwis komputerów</li>
<li>1.06.2014-31.07.2014 - Praktyka zawodowa w firmie „Elproma Elektronika”: tworzenie programu do dystrybucji konfiguracji urządzeń</li>
<li>1.03.2016 - Programista w  Główna Szkoła Handlowa w Warszawie: rozwijanie systemu wspomoagającego pracę dziekanatu, administrowanie bazami danych z rodziny Oracle, postgresql </li>
</ul>
<?php
echo '</section>';
echo '<section id="nav_3" onclick="show_section(3);" style="padding:3px;background-color: #33CC33;padding left; height: 20px;width: 95%;">Dodatkowe informacje</section>';
/*************************************************************************************/

echo '<section id="sec_3"  style="display: none;background-color:#00FF00;padding:3px; width:95%; ">';
?>
<h1>Technologie<h1>
<ul>
<li>1.05.2011-31.05.2011 - Praktyka zawodowa w sklepie komputerowym „Neutron”: składanie oraz serwis komputerów</li>
<li>1.06.2014-31.07.2014 - Praktyka zawodowa w firmie „Elproma Elektronika”: tworzenie programu do dystrybucji konfiguracji urządzeń</li>
<li>1.03.2016 - Programista w  Główna Szkoła Handlowa w Warszawie: rozwijanie „wirtualnego dziekanatu”- systemu wspomagającego dziekanat, administrowanie bazami danych z rodziny Oracle, postgresql o </li>
</ul>
<?php
echo '</section>';
/*************************************************************************************/



echo '<section style="width:100%;height:150px;"></section>';

	echo '<footer   style="position:fixed; bottom:20px; right:50%;text-align: center;">';
	
	echo '	<section  id="foot" style="color: #a4a4a4;	margin-bottom:20px;margin-top: 20 px; ">
			<br>Created By <strong>Adam Rucinski</strong></br>
			<br>rucinskiadam@op.pl</br>			
			<br>(+48) 733-312-794</br>
		</section> ';	
	echo '</footer>';	

echo '</body>';
echo '</html>';
?>
<!-----------JS-------------->
<script>
function show_section(id){
	var section_to_show=document.getElementById('sec_'+id);
	if(section_to_show.style.display=='block'){
		section_to_show.style.display='none';
	}else{		
	section_to_show.style.transition = "all 2s"; 
		section_to_show.style.display='block';

	}
}
</script>