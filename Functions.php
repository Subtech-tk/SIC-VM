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
    // $Variable hold the data which need to be copied to A register
    if( preg_match('/^[#]/', $Variable) )
    {
      $Chars = preg_split('/^[#]/',$Variable);
      //var_dump($Chars);
      $GLOBALS['Register']['A']['CurrentValue'] =  $Chars['1'];
    }
    else if(preg_match('/^[@]/',$Variable))
    {
      
    }
    else
    {
      $GLOBALS['Register']['A']['CurrentValue'] = $GLOBALS['Variables'][$Variable]['CurrentValue'];
    }
  }
