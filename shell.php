<?hh
  // fuctions are modulated for easy structuring of the programme
  include_once('Registers.php');
  include_once('Functions.php');
  // these are the default variables

  $Start = 0000;
  $ContinueWhile = true;
  // OPcodes stored in binary formate
  $OpCode = array(
                  'LDA' => 00000000,
                );
  /*
  function LDA($value)
  {
    $temp = explode($value,' ');
    $Register['A']['Value'] = $temp['1'];
    var_dump($temp);
    var_dump($Register);
  }
  */
  $Instruction = array(
    'LDA' => array('Formate' => '3,4', 'Opcode' => 00, 'Example' => 'A <-- (m..m+2)', 'Function' => 'sddfdfs' ),
    'LDB' => array('Formate' => '3,4', 'Opcode' => 68, 'Example' => 'B <-- (m..m+2)', 'Function' => 'sddfdfs' )
    );

  while ($ContinueWhile)
  {
    $line = readline("Command: ");
    var_dump($line);

    echo "$line\n";

    if (preg_match('/[sS][tT][aA][rR][tT]/',$line))
    {
      $Chars = preg_split('/ /',$line);
      $Start = $Chars['2'];
      //var_dump($Chars);
      echo "Start set to $Start";

    }
    // to exit the intrepter
    if($line === 'exit')
      $ContinueWhile =  false;

    // now searching the instructions

    $temp = preg_split('/ /',$line);
    //var_dump($temp);
    //echo $temp['0']."\n";

    // to check whether the Instruction exist or not
    if(array_key_exists($temp['0'], $Instruction));
    {
      // If instruction exist then procede to execute the task specified
      var_dump($Instruction[$temp['0']]);
    }
    else
    {
        echo "Invalid Instruction ".$temp['0'];
    }

    // set to new line for inputting the next command
    echo "\n";
  }
  print_r(readline_info());

/*
  LDA    LENGTH
*/
