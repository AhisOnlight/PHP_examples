  $arr = array('Victor', 'Arhis','Onlight', 'Sex');
//echo $arr[2];

$arr2 = array(
            array(1, 2, 3),
            array(4,5,6),
            array(7,8,9),
            array(0),
            array('West', 'East', 'North', 'South')
);

echo $arr2[4][2];
$arr2[4][2] = 'Sss';
echo $arr2[4][2];
