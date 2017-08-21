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
       ,'Is erctronic car actually good for the environment? |No It\'s not.'
       ,'How many degree is appropreate for saving the environment?|28℃'
       ,'In middle Africa, who started the ”Green belt movement” that to plant trees in the desert?|Wangari Maathai'
       ,'In Iceland, what kind of electronic power resource are they relied on?|Geothermal power'
       ,'Why burning trees is bad for environment?|Yes because burning dying trees discharge carbon dioxide that was absorbed by dyingtrees before'
       ,'When and where is said to  begining of groval warming?|19 century, in London.'
       ,'What country is having the most atomic electric power plants?|France'
       ,'What is the most important thing you have to do for stopping global warming?|You have to rethink what you have done for the environment before.'
       ,'What is really bad for recycling movement?|Producing cheap goods, and buying it.'
       ,'What is important for being a good environment activist?|Keep well considering about the environment.'
       ,'What is the name of the movement to decrease the amount of trash that was found by Wangari Maathai?|”Mottainai movement”'
       ,'What is the element that has been taken notice by the world for a substitute of oil? | Hydrogen'
       ,'What should we do for decreaseing the amount of oil products as vinyl?|Owning bags to use when you go shopping.'
       ,'What should you pay attention when someone is using an air conditioner in a room where you are?|Close the windows and the door.'
       ,'What is the main fuel of thermal power station?|Oil, coal, and petrified gas'
       ,'Which will completely disappear by increasing grobal warming? The Arctic or the Antarctic?|The Arctic'
       ,'What are common T-shirts are made from?|Oil'
       ,'What kind of material can be recycled to T-shirts?|Plastic bottles.'
       ,'Is iron an exhaustion material?|Yes it is. But the earth have enough storage to let humans use.'
       ,'Does wealthy cause grobal warming?|No, poverty causes it.'
       ,'Where do you have to go when you want to get rid with your smartphone or PC?|To a recycling company'
       ,'Is kimchi good for the environment?|Yes it is. because preserved food is saving food from spoil.'
       ,'What should you do for un-burnable trashes?|Recycle them.'
       ,'Is ondol good for environment?|Yes for the traditional ones. But no for the modern types.'
       ,'What is the main issue of grobal warming?|The answer is what you answered. The important thing is recognising the issues.'
       ,'What should we do for used papers?|Bringing them to the recycling company.'
       ,'Do you have to learn English to understand grobal warming?|No you don\'t need to. Whatever language you use, telling people as many as you can is important.'
       ,'Where is the nearest place to plant?|On your table.'
       ,'When is the World Environment Day?| June 5th'
       ,'The air contains various pollutants.Among them, nitrogen Oxides, hydrocarbons, etc. react with the sunlight. Then, what do you call the phenomenon?|Photochemical smog'
       ,'In recent years, acid pollution often comes down to air pollution.What does acid rain mean when the hydrogen ion concentration is too low?|pH less than 5.6'
       ,'The destruction of the ozone layer threatens human health and the earth’s environment. Which of the following international declaration conventions would internationally monitor the destruction of the ozone layer and regulate the production, consumption and trade of materials destroying the ozone layer?|The Vienna Convention'
       ,'Zero waste means all discarded materials are designed to become resources for others to use. San Francisco, a national leader in waste management, has set an ambitious zero waste goal for the city. By what year is San Francisco planning to recycle and compost 100% of its trash?|by 2020'
       ,'Up to how many years can an LED lightbulb last for?|25 years'
       ,'What fossil fuels are not used for energy production?|Uranium'
       ,'Which natural resource is not an ingredient in manufacturing glass bottles?|Dirt'
       ,'Most of the energy used on Earth today originally came from which source?|The sun'
       ,'If you recycle a tonne of paper, how many trees are you saving?|17 trees'
       ,'Which word refers to plants or microorganisms that are used as energy sources?: 1. storied soil 2. Environmentally-Friendly Energy 3. Waste Energy 4. biomass|4. biomass'
       ,'In order to live in water, oxygen needs oxygen and oxygen is called dissolved oxygen. Which of the following symbols represents dissolved oxygen? 1. DO 2. CDO 3. BOD 4. TOC|1.DO'
       ,'If the major conflict between the 20th century and the 20th century was oil, water would be the main cause of conflict in the 21st century. Which of the following is a river that has no dispute over the waters surrounding the water? 1. Yangjang River 2. Euphrates River 3. The Nile River 4. Danube River|1. Yangjiang River'
       ,'Carbon dioxide (C17), CFC, depending on the use of fossil fuels and chemicals. The gas (CFC) generated by the gas (CFC), which causes the heat to dissipate in the atmosphere.Something that interferes with what causes the average temperature of the Earth to rise. What shall we say? 1. Greenhouse effect 2. Rising Effect 3. Gas effect 4. Convection effect |1. Greenhouse Effect'
       ,'What accounts for the loss of natural resources stemming from the depletion of natural resources or environmental damage caused by environmental degradation? 1. Green GDP 2. GNP 3. GDP 4. Green GOP| 1. Green GDP'
       ,'In June 1992, the U.N. Conference on Sustainable Development in Rio de Janeiro, Brazil, announced the Declaration of Sustainable Development, and adopted the Declaration for Sustainable Development. What does this declaration say? 1. Human Environment Declaration 2. Marrakesh Ministerial Declaration 3. Rio Declaration 4. Kyoto Declaration| 3.RIO Declaration'
    );
    
    $cnt = count($array) - 1;
    $rnd = mt_rand(0, $cnt );
    return $array[$rnd];
  }
}
