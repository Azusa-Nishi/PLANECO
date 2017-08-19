<?php
/*
 * jQuery CHAT v.1.00 @おみくじ機能
 * 
 * Copyright(C)2014 STUDIO KEY Allright reserved.
 * http://studio-key.com
 * MIT License
 * 
 * 適当に幾つかおみくじ結果を書いていますので、変更して下さい。
 * また、自由に追加する事も可能です。
 * 追加する場合はカンマに注意して下さい。
 * 
 * $array = array(
 *  '結果A'
 * ,'結果B'
 * ,'結果C'
 * );
 * 結果C部分をコピーし、追加していくと良いと思います。
 * 乱数は偏りが有りますので、同じ結果が出る場合も有ります
 * 
 */
class Omikuzu{
  
/*
 * 普通のおみくじ
 * [おみくじ]で発動
 */
  public function Nomal(){
    $array = array(
        '[Great Blessing] ヽ(=´▽`=)ﾉ Today will be your lucky day!'
       ,'[Middle Blessing] Let\'s go outside and have fun!'
       ,'[Middle Blessing] Good! Today will be a normal peaceful day♪'
       ,'[Middle Blessing] (￣ー￣)ｂ Have a good day!'
       ,'[Middle Blessing] ( ´∀｀)b Best of luck!'
       ,'[Small Blessing] Maybe a soso-day for you.'
       ,'[Small Blessing] Let\'s have a cup of tea and rest inside.'
       ,'[Small Blessing] Don\'t be sad, today will be a fine day.'
       ,'[Curse] （゜Д゜）!? Oops! Becareful!'
       ,'[Great Curse] (´・ω・`) Oh... Let\'s do nothing and sleep today for now...'
    );
    
    $cnt = count($array) - 1;
    $rnd = mt_rand(0, $cnt );
    return $array[$rnd];
  }
/*
 * 健康運
 *[けんこう]で発動
 */
  public function Kenko(){
    $array = array(
        'Becareful with your stomach!Don\'t eat too much!'
       ,'Maybe you\'ll trip over... becareful on your way!'
       ,'Let\'s breath clean air if you get a headache.'
       ,'You will be healthy all day!'
       ,'Are you okay with your back? Strech, strech, strech!'
       ,'Aw...your sholder may hurt...It\'s painful...'
       ,'Your body will be okay today! Let\'s go out and play!'
       ,'Don\'t catch a cold! Don\'t forget your mask when you go out!'
       ,'Your body will be fine, but don\'t try too hard!'
       ,'Um...maybe you have something to remind more than your health...'
    );
    
    $cnt = count($array) - 1;
    $rnd = mt_rand(0, $cnt );
    return $array[$rnd];
  }
/*
 * 恋愛運
 * [れんあい]で発動
 */
  public function Renai(){
    $array = array(
        'ヽ(=´▽`=)ﾉ Maybe you can meet someone that you like...let\'s go outside!'
       ,'(´・ω・`) Becareful not to cheet...'
       ,'(*^_^*) Let\'s shake hands!'
       ,'(´～｀) Let\'s eat dinner together with your lover!'
       ,'( ﾟдﾟ) Ooh...becareful on today\'s date...'
       ,'Best day to take your lover to a date!'
       ,'( ｰ`дｰ´) Dress up cool and let\'s go!'
       ,'(｡-ω-) Maybe today isn\'t a good day for a date...'
       ,'Greet your lover with a nice soft voice♡'
       ,'Pat your lover\'s head...she\'ll/he\'ll love it♡'
       ,'Hug your lover for a long time♡'
       ,'（゜Д゜）!? Oops! ...Becareful today...'
       ,'「・・」Sorry...no comment...'
       ,'Well...yeah...don\'t worry too much.'
    );
    
    $cnt = count($array) - 1;
    $rnd = mt_rand(0, $cnt );
    return $array[$rnd];
  }
 /*
 * クイズ
 * [#quiz]で発動
 */
  public function Quiz(){
    $array = array(
        'In this 100 years, how much degree centigrade increased in Japan?|about 1'
       ,'What is the main reason of global warming?|Greenhouse effect gas e.g. CO2'
       ,'What do you call the action when your car automatically shuts down it\'s engine when stopping?|Start-stop system'
       ,'What is one of the most CO2 discharging thing around your house apart electric appliances and lights?|cars'
       ,'How long does the CO2 last in air that is discharged today?|about 50 to 200 years'
       ,'What makes a hybrid car move?|Gasoline and electricity'
       ,'What historical event made the CO2 in the atmosphere increase?|The Industorial Revolution in the 1800s'
       ,'What happens if the Greenhouse effect gas increases in the atmosphere?|The Earth gets warmer '
       ,'How many percent of the creatures living today will extinct if the Earth gets 2℃ warmer?|25%'
       ,'What are the 3Rs?|Reduce, Reuse, Recycle'
       ,'What is the right thing to do if you want to get rid of your old PC?|Recycle it'
       ,'What is plastic made of?|Oil'
       ,'What do you call a car that moves using sunlight?|Solar cars'
       ,'What is used for Biomass energy?|Animal feces'
       ,'How many species are extincting in a year today?|40 thausand in a year'
       ,'What is the aim of the Ramsar Convention?|To protect the bogs on Earth'
       ,'What destroys the Ozone layer?|Freon gas'
       ,'What does the Ozone Layer do?|It protects us from the ultraviolet rays'
       ,'What do you call a metropolitan area that is warmer than it\'s surroundings?|Urban heat island'
       ,'Where did the word "ECO" born in?|Japan'
       ,'What Greenhouse effect gas makes the most increase of the tempreture on Earth?|CO2'
       ,'Where in a house descharges the most contaminated water?|In the kitchen'
    );
    
    $cnt = count($array) - 1;
    $rnd = mt_rand(0, $cnt );
    return $array[$rnd];
  }
}
