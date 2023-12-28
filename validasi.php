<?php
  function otentikasi($uname,$pass){
    //user ,admin password 12345
    if($uname=="admin" && $pass=="123456"){
        return true;

    } else{
        return false;
    }
  }
?>