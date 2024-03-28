<!DOCTYPE html>
<html lang="en">
  
    <head>
       <meta charset="utf-8">
        <!-- IE compatibility meta -->
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
<!--meta for first mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
          <title> cEnTeR</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	     <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<!-- font from google -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<!-- css stylesheets -->      
	<link rel='stylesheet'href='css/normalize.css'/>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
               <link rel='stylesheet'href='css/newmedicine.css'/>
               
<!--[if It IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
		 
<![endif]-->
              
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$g=$t=$h=$i=$y=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }else{
       $g=true;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }else{
       $t=true;
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }else{
       $h=true;
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);$i=true;
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);$y=true;
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
  </head>
		<body>
		<div class="header">
			
						<div class="navbar">
						<div class="container">
			<h2 style="font-family: 'Indie Flower', cursive;"> <span  class="ar">مركز موريا</span>
			<i class="fa fa-stethoscope fa-2x" aria-hidden="true"></i><span  class="ar">الطبى</span>
							</br><span class="en">mOrYa &nbsp; cEnTeR</span>
							</h2>
						<ul style="">
							<li >تسجيل الدخول</li>
							<li >مستخدم جديد</li>
							
						
						</ul>
					</div>
						</div>
		
					</div>
<div class="nav2">
	<div class="container">
		
						
		<ul>
							<li>Home</li>
							<li>who's morea</li>
							
							<li>articles</li>
							<li>news</li>
							
							<li>doctors</li>
							<li>Other web site</li>
							<li>content</li>
						</ul>
		</div>
					</div>	</div>
	
				
		<div class="group">
			<div class="container">
				
						
				<div class="features" id="fear">
						
		<h2>for reserve and ask any thing </h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Name: <input type="text" name="name" >
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
 e-mail: <input type="text" name="email" >
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 mobilephone:<input type="text" name="website" >
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  disease" <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
Gender:
  <input type="radio" name="gender"value="female">Female
  <input type="radio" name="gender"  value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php

if($y==true&&$h==true&&$i==true&&$g==true&&$t==true){
  echo "<h2>thank you</h2>";
}
?>
</div>
				<div class="aboutme" id="per2"style="height: 900px">
						
									
									<div class="info"id="per3" >
											<h2>Psychological  &nbsp; Articles</h2>
											
									
										<div class="hobbies" id="demo">
												<div class="content"id="pp">
													
												<div class="text"><h3>مرض التوحد</h3>
												<p > مرض التوحد عبارة عن مجموعة من إضطرابات سلوكية ونفسية وعقلية تظهر عند الفرد من سن الطفولة غالباً ، </p>
												<button id="0" onclick="readmore('pp','lll');">اقرأ المزيد</button></div>
												<div class="icon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Students%2C_families_walk_to_support_Autism_Awareness_Month_140404-M-ZZ999-331.jpg/300px-Students%2C_families_walk_to_support_Autism_Awareness_Month_140404-M-ZZ999-331.jpg"
												width="200px" height="100px" >
												</div>	</div>
												<div class="content"id="lll"style="display: none;">
												<div class="text" >
													<h3>مرض التوحد</h3>
													<p >
مرض التوحد هو عبارة عن مجموعة من إضطرابات سلوكية ونفسية وعقلية تظهر عند الفرد من سن الطفولة غالباً ، وتبين أن تطور أغلب الحالات بشكل كبير يكون في سن الثالثة ، ويؤدي هذا المرض إلى مشاكل كبيرة في التكلم والمهارات الأساسية كالمهارات الإجتماعية والتواصل مع الناس ، ويقود إلى سلوك متطرف كتأخير تطور الطفل وصعوبة التواصل والتكلم واللعب والتفاعل مع الأشخاص والأطفال ،
 </p><button id="0" onclick="readless('pp','lll');">اظهر عناصر اقل</button></div>
												<div class="icon">
												<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Students%2C_families_walk_to_support_Autism_Awareness_Month_140404-M-ZZ999-331.jpg/300px-Students%2C_families_walk_to_support_Autism_Awareness_Month_140404-M-ZZ999-331.jpg"
												width="200px" height="100px" >
												
												</div></div>
												<div class="content"  id="ektab">
												<div class="text"><h3>الاكتئاب</h3><p>في الكثير من الأحيان يخالجنا شعور بالضيق والتشاؤم من دون أن يكون هنالك أية أسباب ظاهرة</p>
												<button  onclick="readmore('ektab','ll');">اقرأ المزيد</button>
												</div>
												<div class="icon"><img
												src="http://www.sohati.com/sites/default/files/styles/530x/
												public/field/image/%D8%A7%D8%B9%D8%B1%D8%A7%D8%B6%20%D8%A7%D9%84%
												D8%A7%D9%83%D8%AA%D9%8A%D9%94%D8%A7%D8%A8%20%D8%A7%D9%84%D8%AE%D9%81%D9%8A%D9%81%201.jpg?
												itok=9oOeUIZF" width="200px" height="100px"></div>
												</div>
												<div class="content"id="ll"style="display: none;">
												<div class="text" >
													<h3>الاكتئاب</h3>
وحول الحالات أو الأزمات النفسية وتطورها لتصبح أمراضا، أن حالات الاحباط في حال استمر لفترة طويلة قد توصلنا إلى مرحلة الاكتئاب :ذا استمرت هذه الحالة لفترة تصل إلى أسبوعي، فقديكون ذلك مؤشرا لإصابتك بالاكتئاب
فإذا كنت بحاجة إلى معرفة الأعراض الأساسية التي تدل على ضرورة زيارة الطبيب النفسي، إليك مجموعة  من الأعراض التي كشفها استشاري الطب النفسي وتدل على الإصابة بالاكتئاب وتستدعي زيارة الطبيب النفسي ومنها:
الشعور بعدم الرغبة في إنجاز المهام اليومية، أو حتى التنزه مع الأصدقاء.
إذا أخبرك أحد بأن هناك شيئا متغير في شخصيتك وملاحظته لضعف تركيزك.													<p ></p><button  onclick="readless('ektab','ll');">اعرض عناصر اقل</button></div>
												<div class="icon">
												<img src="http://www.sohati.com/sites/default/files/styles/530x/
												public/field/image/%D8%A7%D8%B9%D8%B1%D8%A7%D8%B6%20%D8%A7%D9%84%
												D8%A7%D9%83%D8%AA%D9%8A%D9%94%D8%A7%D8%A8%20%D8%A7%D9%84%D8%AE%D9%81%D9%8A%D9%81%201.jpg?
												itok=9oOeUIZF"
												width="200px" height="100px" >
												
												</div></div>
												<div class="content" id="social">
												<div class="text"><h3>الوسواس القهرى</h3><p> يُعتبر الوسواس القهريّ (بالإنجليزية: Obsessive-Compulsive Disorder) مشكلة نفسية مزمنة وشائعة الحدوث</p>
												<button onclick="readmore('social','phobia');">اقرأ المزيد</button></div>
												<div class="icon">
													<img src="images/images.jpg"width="200px" height="100px">
												</div>
												</div>
												<div class="content"id="phobia"style="display: none;">
												<div class="text" >
													<h3>الوسواس القهرى</h3>
													<p > يُعتبر الوسواس القهريّ (بالإنجليزية: Obsessive-Compulsive Disorder) مشكلة نفسية مزمنة وشائعة الحدوث؛ حيث يشعر المريض بالحاجة المُلحّة للقيام بتصرّفاتٍ معيّنة بشكل متكرّر وقهريّ خارج عن السيطرة والإرادة، وتخطر لدى المُصاب هواجس وأفكار متكرّرة تسبّب له القلق. يمكن تشبيه القلق بنظام تنبيه وإنذار للجسم لحمايته من المخاطر؛ حيث يعمل الوسواس القهريّ على استهلاك نظام الإنذار هذا، وكأنّه يعمل على تحفيز نظام الإنذار من قِبَل أيّ مسبّب بغضّ النظر عن حجمه وكأنّه خطر مطلق أو تهديد كارثي، في حين أنّه يجب أن يتمّ تحفيزه فقط عند وجود الأسباب والأخطار الحقيقيّة التي تستدعي ذلك، وقد تتسبّب هذه المشكلة عند الشخص المُصاب بالتأثير على جميع نواحي الحياة مثل: العمل، والدراسة، والعلاقات الاجتماعيّة، وغيرها </p><button  onclick="readless('social','phobia');">اظهر عناصر اقل</button></div>
												<div class="icon">
												<img src="images/images.jpg"
												width="200px" height="100px" >
												
												</div></div>
												<div class="content" id="phrenia">
												<div class="text"><h3>الهوس الاكتئابى</h3>
												<p>وهو مرض نفسي يتميّز بعدم اتّزان المزاج، وقد يكون المرض خطيرًا ويشكّل عائقا جديا في الحياة اليوميّة.</p>
												<button  onclick="readmore('phrenia','schizo');">اقرأ المزيد</button></div>
												<div class="icon"><img src="http://www.addiction-wiki.com/wp-content/uploads
												/2015/10/%D8%A7%D9%84%D9%81%D8%B5%D8%A7%D9%85.jpg"
												width="200px" height="100px"></div>
												</div>
												<div class="content"id="schizo"style="display: none;">
												<div class="text" >
													<h3>الهوس الاكتئابى</h3>
													<p >من القمّة إلى الهاوية / الحضيض. من نشوة الشغف والجنون إلى هاوية الاكتئاب. من التهوّر والاندفاعية إلى اللامبالاة. هذه هي الحالات المتطرّفة المنسوبة إلى الهَوَس الاكتئابي (أو: الاضطراب ثنائي القطب - Bipolar disorder، وهو الذي كان يسمى سابقا: الذهان الهَوَسي الاكتئابي - Manic Depressive Psychosis)، وهو مرض نفسي يتميّز بعدم اتّزان المزاج، وقد يكون المرض خطيرًا ويشكّل عائقا جديا في الحياة اليوميّة.

ويُعرف الاضطراب ثنائي القطب، أيضا، باسم "مرض الهَوَس الاكتئابي" عندما يشكل التصرّف الجنوني المتطرّف (الهَوَس) أحد طرفيّ الاضطراب، بينما يشكل الاكتئاب الشّديد طرفه الآخر.
 </p><button  onclick="readless('phrenia','schizo');">اظهر عناصر اقل</button></div>
												<div class="icon">
												<img src="http://www.addiction-wiki.com/wp-content/uploads
												/2015/10/%D8%A7%D9%84%D9%81%D8%B5%D8%A7%D9%85.jpg"
												width="200px" height="100px" >
												
												</div></div>
												 
										</div>
									</div>
						</div>
			
				
				
				
						</div>
			
						</div>
						<div class="contect">
			<div class="container">
				<div class="info">
					
					
					<p> El Fayoum, El Moalemeen Tower,</br> In front of Egypt's position</br>
							next to Bank of Alexandria,</br> El Fayoum City, Al Fayyum, Egypt  </br>
						<strong><i class="fa fa-phone fa-lg" aria-hidden="true"></i></strong><br>01113718333<br>
						
					</p>
					<p><strong>wattsapp<i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i>
					</strong><br>01113718425<br><strong>DR: </strong>
					<br>
				shimaa mohamed	</p>
				</div>
				
				</div>
		</div>
		<div class="footer">
			<span>copyright &copy; 2014 Dream..D</span>
			<span>e-marketing by me</span>
			
		</div>
			<script src="js/create element.js"></script>	 
		 

                        </body>
                        </html>