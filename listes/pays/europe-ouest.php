<?php

include('lang/fr.php');

/*
Stabilité de 0 à 6 // chaos, très faible, faible, moyenne, forte, très forte, exceptionnelle

Ajout de 

existe : booléen
colonie : boléen
telex : liste de strings
guerillas : liste de strings


AJouter ça pour chaque pays avec une fonction

guerillausa --> liste de traits / force / relations usa / relations urss / relations autre
guerillaurss
guerillaautre


coordonnées :
nom :
nom maj :
*/
// relation  : -4 à 4 excécrable / très mauvaise / mauvaise / méfiante / médiocre / bienveillante / bonne / très bonne / excellente
// stabilité : -3 à +3 => chaos / très faible / faible / moyenne / forte / très forte / exceptionnelle
// richesse : de 0 à 3 tiers monde / en développement / moyenne / riche
// économie : collectiviste / capitaliste

$_SESSION['AT']=array('nom' =>$autriche,'points' =>10,'stabilite' =>2, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'geographie'=> array('europe' ),
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagneux','bombe'=>0, 
	'relusa' =>1, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/autriche.jpg','miniflag'=>'images/drapeaux/miniflagautriche.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>10 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );









$_SESSION['BE']=array('nom' =>$belgique,'points' =>10,'stabilite' =>0, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest' ),
	'relusa' =>2,'relurss' =>-2,'relautre' =>-2, 'regime'=>'monarchie constitutionnelle',
	'drapeau'=>'images/drapeaux/belgique.jpg','miniflag'=>'images/drapeaux/miniflagbelgique.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>10 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""



	 );


$_SESSION['CH']=array('nom' =>$suisse,'points' =>10,'stabilite' =>3, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'relusa' =>2, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'république',
	'geographie'=> array('europe' ),
	'drapeau'=>'images/drapeaux/suisse.jpg','miniflag'=>'images/drapeaux/miniflagsuisse.jpg','map'=>'', 'forcearmee'=>2,
	'forcearmeemax'=>8 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );







$_SESSION['GB']=array('nom' =>$royaumeuni,'points' =>50,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
 	'geographie'=> array('europe', 'europe ouest' ),
	'terrain' =>'normal','bombe'=>0, 
	'relusa' =>2, 'relurss' =>-2,'relautre' =>-2, 'regime'=>'monarchie constitutionnelle',
	'drapeau'=>'images/drapeaux/grande-bretagne.jpg','miniflag'=>'images/drapeaux/miniflaggrande-bretagne.jpg','map'=>'', 'forcearmee'=>30,
	'forcearmeemax'=>50 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );


$_SESSION['IE']=array('nom' =>$irlande,'points' =>5,'stabilite' =>2, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagneux','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest' ),
	'relusa' =>1, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/irlande.jpg','miniflag'=>'images/drapeaux/miniflagirlande.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>5 ,
	 'economie'=>'de marché','richesse'=> 2,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );






$_SESSION['IT']=array('nom' =>$italie,'points' =>20,'stabilite' =>-1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest','méditerranée' ),
	'relusa' =>2, 'relurss' =>-2,'relautre' =>-2, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/italie.jpg','miniflag'=>'images/drapeaux/miniflagitalie.jpg','map'=>'', 'forcearmee'=>2,
	'forcearmeemax'=>25 ,
	 'economie'=>'de marché','richesse'=> 2,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );


$_SESSION['ES']=array('nom' =>$espagne,'points' =>20,'stabilite' =>2, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest','méditerranée' ),
	'relusa' =>-1, 'relurss' =>-4,'relautre' =>-2, 'regime'=>'dictature',
	'drapeau'=>'images/drapeaux/espagne4576.gif','miniflag'=>'images/drapeaux/miniflagespagne4576.gif','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>25 ,
	 'economie'=>'de marché','richesse'=> 2,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array('agrupaciones',),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );



	$_SESSION['PT']=array('nom' =>$portugal,'points' =>5,'stabilite' =>2, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest' ),
	'relusa' =>-2, 'relurss' =>-4,'relautre' =>-2, 'regime'=>'dictature',
	'drapeau'=>'images/drapeaux/portugal.jpg','miniflag'=>'images/drapeaux/miniflagportugal.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>8 ,
	 'economie'=>'de marché','richesse'=> 2,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );


	$_SESSION['FR']=array('nom' =>$france,'points' =>35,'stabilite' =>0, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest','méditerranée' ),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/france.jpg','miniflag'=>'images/drapeaux/miniflagfrance.jpg','map'=>'', 'forcearmee'=>10,
	'forcearmeemax'=>50 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );


	$_SESSION['NL']=array('nom' =>$paysbas,'points' =>10,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('europe', 'europe nord','méditerranée' ),
	'relusa' =>3, 'relurss' =>-2,'relautre' =>-1, 'regime'=>'monarchie constitutionnelle',
	'drapeau'=>'images/drapeaux/pays-bas.jpg','miniflag'=>'images/drapeaux/miniflagpays-bas.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>5 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );


	$_SESSION['NO']=array('nom' =>$norvege,'points' =>15,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest','europe nord','scandinavie' ),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'monarchie constitutionnelle',
	'drapeau'=>'images/drapeaux/norvège.jpg','miniflag'=>'images/drapeaux/miniflagnorvège.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>10 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );



	$_SESSION['DK']=array('nom' =>$danemark,'points' =>25,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest','europe nord','scandinavie' ),
	'relusa' =>3, 'relurss' =>-2,'relautre' =>-1, 'regime'=>'monarchie constitutionnelle',
	'drapeau'=>'images/drapeaux/danemark.jpg','miniflag'=>'images/drapeaux/miniflagdanemark.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>5 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );



	$_SESSION['SE']=array('nom' =>$suede,'points' =>20,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest','europe nord','scandinavie' ),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'monarchie constitutionnelle',
	'drapeau'=>'images/drapeaux/suède.jpg','miniflag'=>'images/drapeaux/miniflagsuède.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>10 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );


	$_SESSION['RF']=array('nom' =>$rfa,'points' =>20,'stabilite' =>0, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest','europe nord' ),
	'relusa' =>1, 'relurss' =>-2,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/suède.jpg','miniflag'=>'images/drapeaux/miniflagsuède.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>30 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );


	$_SESSION['LU']=array('nom' =>$luxembourg,'points' =>5,'stabilite' =>0, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest','europe nord' ),
	'relusa' =>2, 'relurss' =>-2,'relautre' =>-1, 'regime'=>'monarchie constitutionnelle',
	'drapeau'=>'images/drapeaux/luxembourg.jpg','miniflag'=>'images/drapeaux/miniflagluxembourg.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>2 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );

	$_SESSION['IS']=array('nom' =>$islande,'points' =>50,'stabilite' =>0, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('europe', 'europe ouest','europe nord','scandinavie' ),
	'relusa' =>2, 'relurss' =>-2,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/islande.jpg','miniflag'=>'images/drapeaux/miniflagislande.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>2 ,
	 'economie'=>'de marché','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );







?>