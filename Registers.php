<?hh

//  A 2D array to store the details of register including there current values
$Register = array(
    'A' => array('Number' => 0, 'Value'=> NULL, 'Name'=>'Accumulator', 'Use'=>'Used for airthmetic operations'),
    'X' => array('Number' => 1, 'Value'=> NULL, 'Name'=>'Index register', 'Use'=>'Used for addressing'),
    'L' => array('Number' => 2, 'Value'=> NULL, 'Name'=>'Linkage register', 'Use'=>'The Jumo to subroutine (JSUB) instruction stores the return address in the register'),
    'PC' => array('Number' => 8, 'Value'=> NULL, 'Name'=>'Program counter', 'Use'=>'Contains the address of the next instruction to be fetched for execution'),
    'SW' => array('Number' => 9, 'Value'=> NULL, 'Name'=>'Status Word', 'Use'=>'Contains the address of the next instruction, including the Condition Code (CC)'),
    'B' => array('Number' => 3, 'Value'=> NULL, 'Name'=>'Base register','Use'=>'Used for addressing'),
    'S' => array('Number' => 4, 'Value'=> NULL, 'Name'=>'General Working register', 'Use'=>'No Special use'),
    'T' => array('Number' => 5, 'Value'=> NULL, 'Name'=>'Genral working register','Use'=>'No Special use'),
    'F' => array('Number' => 6, 'Value'=> NULL, 'Name'=>'Floating point accumulator', 'Use'=>'used for floating point Operations')
 );
