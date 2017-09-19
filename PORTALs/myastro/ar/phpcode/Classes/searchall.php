<?php
  
    Class Searchall
    {
        private $blockvalue=array();
		
		public function __construct() 
		{
			 $this->blockvalue[0] = Array
			(
              "name" => "dream meaning",
              "keywords_english" => "dream,imagery,imagination,dreaming,fantasy,daydream, hallucination,thought,idea,speculation",
              "keywords_arabic" => "حلم,مصور,خيال,الحلم,خيال,احلام اليقظة,هلوسة,فكر,فكرة,تخمين",
			  "block_html_arabic"=>"<a href='../Dream Meaning/dream_meaning.html'><div class='col-xs-6 game-container'><img src='../Content/img/love_spells.png' style='width: 100%;'><p class='game-text' dir='rtl'>حلم معنى</p></div></a>"
             );
			  $this->blockvalue[1] = Array
			(
              "name" => "numerology",
              "keywords_english" => "numerology,discipline,subject,area,study,field,bailiwick",
              "keywords_arabic" => "علم الأعداد , علم الأعداد,تهذيب,موضوع,موضوع النقاش,مجال الدراسة,حقل,منطقة نفوذ,علم الأعداد",
			  "block_html_arabic"=>"<a href='../Numerology/numerologia.html'><div class='col-xs-6 game-container'><img src='../Homepage/img/numerology.png' style='width: 100%;'><p class='game-text' dir='rtl'>علم الأعداد</p></div></a>"
             );
			  $this->blockvalue[2] = Array
			(
              "name" => "sign_compatibility",
              "keywords_english" => "sign,compatibility,zodiacsign clue,symbol,signal,suggesiton,prediction,hint,globe,orbit",
              "keywords_arabic" => "توقيع التوافق,البروج علامة المقاتلة,دليل,رمز,إشارة,اقتراح,تنبؤ
			   ,ملحوظة,كره ارضيه,مدار,كره ارضيه",
			  "block_html_arabic"=>"<a href='../Sign Compatibility/compatibilidade_de_signos.html'><div class='col-xs-6 game-container'><img src='../Content/img/horoscope_compatibility.png' style='width: 100%;'><p class='game-text' dir='rtl'>توافق البرج</p></div></a>"
             );
			  $this->blockvalue[3] = Array
			(
              "name" => "themo_lover",
              "keywords_english" => "themo,thermo,lover,thermometer,love,measuring,affection,emotion,analysis,attachment, height,infatuation,analysis,emotion,weight",
              "keywords_arabic" => "حبيب,حب,ميزان الحرارة,قياس,تاثير,المشاعر,تحليل,المرفق,ارتفاع,وله,تحليل , المشاعر , وزن ,الحرارية",
			  "block_html_arabic"=>"<a href='../Thermo Lover/termometro_do_amor.html'><div class='col-xs-6 game-container'><img src='../Content/img/thermo_love.png' style='width: 100%;'><p class='game-text' dir='rtl'>مقياس الحب</p></div></a>"
             );
			  $this->blockvalue[4] = Array
			(
              "name" => "horoscope",
              "keywords_english" => "horoscope,zodiac,sign,aquarius,aries,cancer,capricon,gemini,leo,libra,pisces,scorpio,taurus,sagittarius,virgo,astrology,prediction,symbol,symbolization",
              "keywords_arabic" => "دولاب الأبراج , خريطة البروج , خريطة البروج , خريطة البروج,دولاب الأبراج,إشارة,الدلو,برج الحمل,سرطان,الجدي,الجوزاء,الأسد,برج الميزان,برج الحوت,العقرب,برج الثور,القوس,برج العذراء,علم التنجيم,تنبؤ,رمز,تعبير بالرموز , دولاب الأبراج ",
			  "block_html_arabic"=>"<a href='../Horoscope/horoscope.html'><div class='col-xs-6 game-container'><img src='../Homepage/img/daily_horoscope.png' style='width: 100%;'><p class='game-text' dir='rtl'>أبراجك اليومية</p></div></a>"
             );
			 $this->blockvalue[5] = Array
			(
              "name" => "secret_lover",
              "keywords_english" => "secret,love,lover,private,undercover,covert,underground,unknown,undisclosed,dark,dear,beloved,dearest,sweetheart",
              "keywords_arabic" => "سر,حب,حبيب,نشر,سري,خفي,تحت الارض,غير معروف,لم يكشف عنها,داكن,العزيز,محبوب,محبوب,حبيبة القلب",
			  "block_html_arabic"=>"<a href='http://www.zmobs.com/ptesting/Build_2017_08_12_03_39_ar/index.php'><div class='col-xs-6 game-container'><img src='../Content/img/preview_image_secret_lover_ar.png' style='width: 100%;'><p class='game-text' dir='rtl'>من هو عشيقك السري؟</p></div></a>"
             );
		}
		
		public function getBlock($searchvalue){
			
			$listofblock=Array();
			$searchvalue=strtolower($searchvalue);
			$searchvalue=explode(' ',$searchvalue);
			foreach($this->blockvalue as $value){
				//split the string and then compare with the each value does it matches or not
				$english=explode(',',$value['keywords_english']);
				$arabic=explode(',',$value['keywords_arabic']);
				if (count(array_intersect($searchvalue,$english))>0 || count(array_intersect($searchvalue,$arabic))>0) {
					$listofblock[]=array('name'=>$value['name'],'block_html'=>$value['block_html_arabic']);
				}
			}
			return $listofblock;
			
	    }
    }
	
	
?>