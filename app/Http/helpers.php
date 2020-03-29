<?php
  function checkRole($roles){
    $userAccess = getMyRole(auth()->user()->role);
    foreach ($roles as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }

  function getMyRole($role)
  {
    switch ($role) {
      case 0:
        return 'admin';
        break;
      case 1:
        return 'trader';
        break;
      default:
        return 'customer';
        break;
    }
  }
?>