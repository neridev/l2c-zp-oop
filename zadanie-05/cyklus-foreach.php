<?php
$directors = [
    [
        'id' => 1,
        'first_name' => 'Edgar',
        'last_name' => 'Wright',
        'country' => 'United Kingdom',
        'birthdate' => '1974-04-18',
    ],
    [
        'id' => 2,
        'first_name' => 'Jim',
        'last_name' => 'Jarmusch',
        'country' => 'United States',
        'birthdate' => '1953-01-22',
    ],
    [
        'id' => 3,
        'first_name' => 'Leos',
        'last_name' => 'Carax',
        'country' => 'France',
        'birthdate' => '1960-11-22',
    ],
    [
        'id' => 4,
        'first_name' => 'Ingmar',
        'last_name' => 'Bergman',
        'country' => 'Sweden',
        'birthdate' => '1918-07-14',
    ],
    [
        'id' => 5,
        'first_name' => 'Andrej',
        'last_name' => 'Tarkovskij',
        'country' => 'Russia',
        'birthdate' => '2000-10-10',
    ],
];

/*
echo '<pre>';
print_r($directors);
echo '</pre>';
*/

foreach ($directors as $director) {
    echo '<strong>' . $director['id'] . '</strong> ' . $director['first_name'] . ' ' . $director['last_name'];
    echo '<br>';
}

echo '<br>';

/*foreach ($directors as $key => $value) {
    echo $key . ':' . $value['country'] . '<br>' ;
}*/
?>

<select name="select0"> 
<?php
foreach ($directors as $name) {
    echo "<option value= ${name['id']}> ${name['first_name']} ${name['last_name']} </option>"; 
}
?>	
</select>

<br><br>

<select name="select1"> 
<?php
foreach ($directors as $director) {
    echo '<option value=' . $director['id'] . '>' . $director['first_name'] . ' ' . $director['last_name'] . '</option>';
}
?>	
</select>
