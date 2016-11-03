<?hh
  // debug status
  $debug = false;
  if (!$debug)
  {
    ini_set('display_errors','0');
  }
  // Details of the intrepter
  $Version_Details = "
      Version 0.0.1 alpha
      Too buggy
      Report errors on https://github.com/Subtech-tk/SIC-VM
      \n" ;
  echo "$Version_Details";
  // fuctions are modulated for easy structuring of the programme
  //include_once('Registers.php');
  include_once('Instruction_Set_Table.php');
  include_once('Functions.php');
  // these are the default variables

  $Start = 0000;
  $ContinueWhile = true;

  /* temprory data to be for testing purposes Actual Instructions and DataTypes are stored in Instruction_Set_Tables.php
  $Instruction = array(
  'LDA' => array('Formate' => '3,4', 'Opcode' => 00, 'Example' => 'A <-- (m..m+2)', 'Function' => 'LDA', 'NumberOfOperands' => 1, 'InstructionSize' => 3 /*bytes ),
  'LDB' => array('Formate' => '3,4', 'Opcode' => 68, 'Example' => 'B <-- (m..m+2)', 'Function' => 'LDB', 'NumberOfOperands' => 1, 'InstructionSize' => 3 /*bytes )
    );
    */
  $DataTypes = array(
    'WORD' => array('MemorySize' => 16,'InstructionSize' => 3 /*bytes*/),
    'RESW' => array('MemorySize' => 16,'InstructionSize' => 3 /*bytes*/) /* Reserve a array*/
  );

  while ($ContinueWhile)
  {
    $line = readline("$ -> ");
    if ($debug)
      var_dump($line);

    //echo "$line\n";

    if (preg_match('/[sS][tT][aA][rR][tT]/',$line))
    {
      $Chars = preg_split('/ /',$line);
      $Start = $Chars['2'];
      //var_dump($Chars);
      echo "Start set to $Start";
      // set PC to the start position
      $Register['PC']['CurrentValue'] = $Start;

    }
    // to exit the intrepter
    if(preg_match('/[eE][xX][iI][tT]/',$line))
      $ContinueWhile =  false;
    else if(preg_match('/[hH][eE][lL][pP]/',$line) || preg_match('/-[hH]/',$line))
      echo "Help";
    else if(preg_match('/[dD][eE][bB][uU][gG]/',$line) || preg_match('/-[dD]/',$line))
      $debug = true;
    else if(preg_match('/[vV][eE][rR][sS][iI][oO][nN]/',$line) || preg_match('/-[vV]/',$line))
      echo $Version_Details;
    // Dump registers Details
    else if (preg_match('/[rR][eE][gG][iI][sS][tT][eE][rR]/',$line))
    {
      print_r($Register);
      print_r($Variables);
    }
    // now searching the instructions
    else
    {
      $temp = preg_split('/ /',$line);
      //var_dump($temp);
      //echo $temp['0']."\n";

      // to check whether the Instruction exist or not
      if(array_key_exists($temp['0'], $Instruction))
      {
        // If instruction exist then procede to execute the task specified
        if ($debug)
          var_dump($Instruction[$temp['0']]);
        // Incrementing the PC register according to the register
        $Register['PC']['CurrentValue'] = $Register['PC']['CurrentValue'] + $Instruction[$temp['0']]['InstructionSize'];
        // calling respective function definde in Function.php
        call_user_func($Instruction[$temp['0']]['Function'], $temp['1']);
        if ($debug)
          var_dump($Register['A']);
      }
      else if (array_key_exists($temp['1'], $DataTypes))
      {
        if ($debug)
          var_dump($DataTypes[$temp['1']]);
        //array_push($Variables, );
      $Variables[$temp['0']] = array('DataTypes' => $temp['1'], 'CurrentValue' => $temp['2'], 'Location' => 0, 'Size' => NULL /* for arrays*/);
        if ($debug)
          var_dump($Variables);
      }
    }

    // set to new line for inputting the next command
    echo "\n";
  }
  if ($debug)
    print_r(readline_info());
