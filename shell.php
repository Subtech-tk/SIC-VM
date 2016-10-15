<?hh
  // these are the default variables

  $Start = 0000;
  $ContinueWhile = true;
  // OPcodes stored in binary formate
  $OpCode = array(
                  'LDA' => 00000000,
                );

  while ($ContinueWhile)
  {
    $line = readline("Command: ");
    var_dump($line);

    echo "$line\n";

    if ( preg_match('/[sS][tT][aA][rR][tT]/',$line))
    {
      $Chars = preg_split('/ /',$line);
      $Start = $Chars['2'];
      //var_dump($Chars);
      echo "Start set to $Start";

    }
    // to exit the intrepter
    if($line === 'exit')
      $ContinueWhile =  false;
    echo "\n";
  }
  print_r(readline_info());
