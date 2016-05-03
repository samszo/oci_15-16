<?php
	$tab=array();
//	$tab[0]=array('lesly'=>'1');
//	$tab[1]=array(	'daniel'=>'1');
//	$tab[2]=array(	'sofiane'=>'1');
//	$tab[3]=array(	'jean aimé'=>'1');
//	$tab[4]=array(	'youssef'=>'1');
//	$tab[5]=array(	'wafa'=>'2');
//	$tab[6]=array(	'sameh'=>'2');
//	$tab[7]=array(	'percy'=>'1');
//	$tab[8]=array(	'michel'=>'1');
//	$tab[9]=array(	'ouerdia'=>'2');
//	$tab[10]=array(	'pascale'=>'1');

	
	$tab2=array(
		'L'=> array( 'prenom'=>'lesly','genre'=>'1'),
		'D'=> array( 'prenom'=>'daniel' ,'genre'=>'1'),
		'SO'=> array( 'prenom'=>'sofiane','genre'=>'1'),
		'JA'=> array( 'prenom'=>'jean aimé','genre'=>'1'),
		'Y'=> array('prenom'=> 'youssef','genre'=>'1'),
		'W'=> array( 'prenom'=>'wafa','genre'=>'2'),
		'SA'=> array('prenom'=>'sameh','genre'=>'2'),
		'PE'=> array('prenom'=> 'percy','genre'=>'1'),
		'M'=> array('prenom'=> 'michel','genre'=>'1'),
		'O'=> array( 'prenom'=>'ouerdia','genre'=>'2'),
		'PA'=> array('prenom'=> 'pascale','genre'=>'1')		
	);
		
	$tab9=array(
			array( 'prenom'=>'lesly','genre'=>'1'),
			array( 'prenom'=>'daniel' ,'genre'=>'1'),
			array( 'prenom'=>'sofiane','genre'=>'1'),
			array( 'prenom'=>'jean aimé','genre'=>'1'),
			array('prenom'=> 'youssef','genre'=>'1'),
			array( 'prenom'=>'wafa','genre'=>'2'),
			array('prenom'=>'sameh','genre'=>'2'),
			array('prenom'=> 'percy','genre'=>'1'),
			array('prenom'=> 'michel','genre'=>'1'),
			array( 'prenom'=>'ouerdia','genre'=>'2'),
			array('prenom'=> 'pascale','genre'=>'1')		
	);
	
	$id=array();
	$tab4=ARRAY('prenom'=> 'LESLY','genre'=>'1',
				'prenom'=> 'DANIEL','genre'=>'1',
				'prenom'=> 'SOFIANE','genre'=>'1',
				'prenom'=> 'JEAN AIMÉ','genre'=>'1',
				'prenom'=> 'YOUSSEF','genre'=>'1',
				'prenom'=> 'WAFA','genre'=>'2',
				'prenom'=> 'SAMEH','genre'=>'2',
				'prenom'=> 'PERCY','genre'=>'1',
				'prenom'=> 'MICHEL','genre'=>'1',
				'prenom'=> 'OUERDIA','genre'=>'2');
	$tab4=ARRAY('prenom'=> 'pascale','genre'=>'1');
for($i=0;$i>10;$i++){
	 array_push($id[$i],$tab4[$i]);
}

//	$tab3[1]=array(	'daniel'=>'1');
//	$tab3[2]=array(	'sofiane'=>'1');
//	$tab3[3]=array(	'jean aimé'=>'1');
//	$tab3[4]=array(	'youssef'=>'1');
//	$tab3[5]=array(	'wafa'=>'2');
//	$tab3[6]=array(	'sameh'=>'2');
//	$tab3[7]=array(	'percy'=>'1');
//	$tab3[8]=array(	'michel'=>'1');
//	$tab3[9]=array(	'ouerdia'=>'2');
//	$tab3[10]=array(	'pascale'=>'1');

//	$tab3=ARRAY();
//	$tab3['id']=0;
//	$tab3['prenom']='lesly';
//	$tab3['genre']=1;
	 echo json_encode($tab2);
//	print_r($tab2);
?>