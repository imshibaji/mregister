<?php

function ip()
{
  return $_SERVER['REMOTE_ADDR'];
}

function gravimg($user=''){
  if($user==''){
      $img = 'https://www.gravatar.com/avatar/'. md5(strtolower(trim(Auth::user()->email)));
  }else{
    $img = 'https://www.gravatar.com/avatar/'. md5(strtolower(trim($user->email))).'?s=400';
  }

  return $img;
}
