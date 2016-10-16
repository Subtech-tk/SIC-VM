<?hh

//  A 2D array to store the details of register including there current Valuess
$Register = array(
    'A' => array('Number' => 0, 'CurrentValues' => NULL, 'Name' => 'Accumulator', 'Use' => 'Used for airthmetic operations'),
    'X' => array('Number' => 1, 'CurrentValues' => NULL, 'Name' => 'Index register', 'Use' => 'Used for addressing'),
    'L' => array('Number' => 2, 'CurrentValues' => NULL, 'Name' => 'Linkage register', 'Use' => 'The Jumo to subroutine (JSUB) instruction stores the return address in the register'),
    'PC' => array('Number' => 8, 'CurrentValues' => NULL, 'Name' => 'Program counter', 'Use' => 'Contains the address of the next instruction to be fetched for execution'),
    'SW' => array('Number' => 9, 'CurrentValues' => NULL, 'Name' => 'Status Word', 'Use' => 'Contains the address of the next instruction, including the Condition Code (CC)'),
    'B' => array('Number' => 3, 'CurrentValues' => NULL, 'Name' => 'Base register','Use' => 'Used for addressing'),
    'S' => array('Number' => 4, 'CurrentValues' => NULL, 'Name' => 'General Working register', 'Use' => 'No Special use'),
    'T' => array('Number' => 5, 'CurrentValues' => NULL, 'Name' => 'Genral working register','Use' => 'No Special use'),
    'F' => array('Number' => 6, 'CurrentValues' => NULL, 'Name' => 'Floating point accumulator', 'Use' => 'used for floating point Operations')
 );

// A 2D dynamic array to hold the variables allocated in the programm
$Variables = array(
    'Default' => array('DataTypes' => NULL, 'CurrentValues' => NULL, 'Location' => 0000)
 );
