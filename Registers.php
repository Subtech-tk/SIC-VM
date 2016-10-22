<?hh

//  A 2D array to store the details of register including there current Valuess
$Register = array(
    'A' => array('Number' => 0, 'CurrentValue' => NULL, 'Name' => 'Accumulator', 'Use' => 'Used for airthmetic operations'),
    'X' => array('Number' => 1, 'CurrentValue' => NULL, 'Name' => 'Index register', 'Use' => 'Used for addressing'),
    'L' => array('Number' => 2, 'CurrentValue' => NULL, 'Name' => 'Linkage register', 'Use' => 'The Jumo to subroutine (JSUB) instruction stores the return address in the register'),
    'PC' => array('Number' => 8, 'CurrentValue' => NULL, 'Name' => 'Program counter', 'Use' => 'Contains the address of the next instruction to be fetched for execution'),
    'SW' => array('Number' => 9, 'CurrentValue' => NULL, 'Name' => 'Status Word', 'Use' => 'Contains the address of the next instruction, including the Condition Code (CC)'),
    'B' => array('Number' => 3, 'CurrentValue' => NULL, 'Name' => 'Base register','Use' => 'Used for addressing'),
    'S' => array('Number' => 4, 'CurrentValue' => NULL, 'Name' => 'General Working register', 'Use' => 'No Special use'),
    'T' => array('Number' => 5, 'CurrentValue' => NULL, 'Name' => 'Genral working register','Use' => 'No Special use'),
    'F' => array('Number' => 6, 'CurrentValue' => NULL, 'Name' => 'Floating point accumulator', 'Use' => 'used for floating point Operations')
 );

// A 2D dynamic array to hold the variables allocated in the programm
$Variables = array(
    'Default' => array('DataTypes' => NULL, 'CurrentValue' => NULL, 'Location' => 0000, 'Size' => NULL /* for arrays*/ )
 );

// A 2D array to hold flages
$Flages = array(
    'N' => array('Name' => 'No', 'Value' => 0, 'Note' => NULL);
    'I' => array('Name' => 'No', 'Value' => 0, 'Note' => NULL);
    'X' => array('Name' => 'X Enabled', 'Value' => 0, 'Note' => NULL);
    'B' => array('Name' => 'Base Enabled', 'Value' => 0, 'Note' => NULL);
    'P' => array('Name' => 'PC Enabled', 'Value' => 1, 'Note' => NULL);
    'E' => array('Name' => 'Extended Instruction', 'Value' => 0, 'Note' => NULL);
  );
