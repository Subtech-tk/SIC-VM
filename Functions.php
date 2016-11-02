<?hh

  require_once('Registers.php');

  function recursive_array_search($needle,$haystack)
  {
      foreach($haystack as $key=>$value)
      {
          $current_key=$key;
          if($needle===$value || ( is_array($value) && recursive_array_search($needle,$value) !== false ) )
          {
              return $current_key;
          }
      }
      return false;
  }

  function LDA ($Variable)
  {
    // $Variable hold the data which need to be Moved to A register
    if( preg_match('/^[#]/', $Variable) )
    {
      //$Variable contains a immediate value
      $Chars = preg_split('/^[#]/',$Variable);
      //var_dump($Chars);
      $GLOBALS['Register']['A']['CurrentValue'] = $Chars['1'];
      $GLOBALS['Flages']['N']['Value'] = 0;
    }
    else if(preg_match('/^[@]/',$Variable))
    {
      $Chars = preg_split('/^[#]/',$Variable);
      //var_dump($Chars);
      $GLOBALS['Register']['A']['CurrentValue'] = $Chars['1'];
      $GLOBALS['Flages']['I']['Value'] = 0;
    }
    else
    {
      $GLOBALS['Register']['A']['CurrentValue'] = $GLOBALS['Variables'][$Variable]['CurrentValue'];
    }
  }

  function ADD ($variable)
  {
    $GLOBALS['Register']['A']['CurrentValue'] = $GLOBALS['Register']['A']['CurrentValue'] + $GLOBALS['variables'][$Variable]['CurrentValue'];
  }

  function ADDF ($variable)
  {
    $GLOBALS['Register']['A']['CurrentValue'] = $GLOBALS['Register']['A']['CurrentValue'] + $GLOBALS['variables'][$Variable]['CurrentValue'];
  }

  function ADDR ($variable)
  {
    $Chars = preg_split('/[,]/',$Variable);
    $GLOBALS['Register'][$Chars['1']]['CurrentValue'] = $GLOBALS['Register'][$Chars['1']]['CurrentValue'] + $GLOBALS['Register'][$Char['0']]['CurrentValue']
  }

  function DIV ($variable)
  {
    $GLOBALS['Register']['A']['CurrentValue'] = $GLOBALS['Register']['A']['CurrentValue'] / $GLOBALS['variables'][$Variable]['CurrentValue'];
  }

  function DIVF ($variable)
  {
    $GLOBALS['Register']['A']['CurrentValue'] = $GLOBALS['Register']['A']['CurrentValue'] / $GLOBALS['variables'][$Variable]['CurrentValue'];
  }

  function DIVR ($variable)
  {
    $Chars = preg_split('/[,]/',$Variable);
    $GLOBALS['Register'][$Chars['1']]['CurrentValue'] = $GLOBALS['Register'][$Chars['1']]['CurrentValue'] / $GLOBALS['Register'][$Char['0']]['CurrentValue']
  }

  function MUL ($variable)
  {
    $GLOBALS['Register']['A']['CurrentValue'] = $GLOBALS['Register']['A']['CurrentValue'] * $GLOBALS['variables'][$Variable]['CurrentValue'];
  }

  function MULF ($variable)
  {
    $GLOBALS['Register']['A']['CurrentValue'] = $GLOBALS['Register']['A']['CurrentValue'] * $GLOBALS['variables'][$Variable]['CurrentValue'];
  }

  function MULR ($variable)
  {
    $Chars = preg_split('/[,]/',$Variable);
    $GLOBALS['Register'][$Chars['1']]['CurrentValue'] = $GLOBALS['Register'][$Chars['1']]['CurrentValue'] * $GLOBALS['Register'][$Char['0']]['CurrentValue']
  }

  function SUB ($variable)
  {
    $GLOBALS['Register']['A']['CurrentValue'] = $GLOBALS['Register']['A']['CurrentValue'] - $GLOBALS['variables'][$Variable]['CurrentValue'];
  }

  function SUBF ($variable)
  {
    $GLOBALS['Register']['A']['CurrentValue'] = $GLOBALS['Register']['A']['CurrentValue'] - $GLOBALS['variables'][$Variable]['CurrentValue'];
  }

  function SUBR ($variable)
  {
    $Chars = preg_split('/[,]/',$Variable);
    $GLOBALS['Register'][$Chars['1']]['CurrentValue'] = $GLOBALS['Register'][$Chars['1']]['CurrentValue'] - $GLOBALS['Register'][$Char['0']]['CurrentValue']
  }
