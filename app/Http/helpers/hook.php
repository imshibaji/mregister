<?php

use App\Models\Option;

class Hook{
  private static $actions = [];
  public static function add_action($key, $value)
  {

    // if(!isset(self::$actions[$key]))
    // {
    //   self::$actions[$key] = [$value];
    // }else{
    //   array_push(self::$actions[$key], $value);
    // }

    if(!exists_action($key)){
      $opt = new Option();
      $opt->key = $key;
      $opt->value = json_encode([$value]);
      $opt->save();
      return $opt->id;
    }else{
      $opt = Option::where('key', $key)->first();
      $data = json_decode($opt->value);
      //dd(in_array($value, $data));
      if(!is_array($value)){
        if(!in_array($value, $data)){
          array_push($data, $value);
          $opt->value = json_encode($data);
          $opt->save();
          return $opt->id;
        }
      }
      // else{
      //   $opt = Option::where('key', $key)->first();
      //   $data = json_decode($opt->value);
      //
      //   $encode_val = json_encode([$value]);
      //   $decode_val = json_decode($encode_val);
      //   //dd($data);
      //   //dd(in_array($decode_val, $data));
      //   if(!in_array($decode_val, $data)){
      //     //array_push($data, $encode_val);
      //     $opt->value = $encode_val;
      //     $opt->save();
      //   }
      //   else{
      //     // dd(in_array($decode_val, $data));
      //     // $data = array();
      //     // array_push($data, $encode_val);
      //     // $opt->value = $data;
      //     // $opt->save();
      //     self::delete_action($key);
      //     self::add_action($key, $value);
      //   }
      //}

      return false;
    }
  }

  public static function update_action($key,$value_array){
    $opt = Option::where('key', $key)->first();
    $base = json_decode($opt->value);
    $data = array_replace($base, $value_array);
    $opt->value = json_encode($data);
    $opt->save();
    return $opt->id;
  }

  public static function move_action($key, $from, $to) {
    $opt = Option::where('key', $key)->first();
    $data_array = json_decode($opt->value);

    $out = array_splice($data_array, $from, 1);
    array_splice($data_array, $to, 0, $out);

    $opt->value = json_encode($data_array);
    $opt->save();
    return $opt->id;
  }

  public static function delete_action($key,$value=''){
    if($value==''){
      $opt = Option::where('key', $key)->first();
      if($opt){
        return $opt->delete();
      }
    }else{
      $opt = Option::where('key', $key)->first();
      $values = json_decode($opt->value);
      //dd(array_search($value, $values));
      if(in_array($value, $values)){
        if(($k = array_search($value, $values)) !== false) {
            //unset($values[$k]);
            array_splice($values, $k, 1);
            //dd($values);
            $opt->value = json_encode($values);
            $opt->save();
            return $opt->id;
        }
      }
    }


    return false;
  }

  public static function get_action($key, $position = '')
  {
    // if(isset(self::$actions[$key])){
    //   if($position == ''){
    //     return self::$actions[$key];
    //   } else {
    //     return self::$actions[$key][$position];
    //   }
    // }else{
    //   return false;
    // }

    if(Option::where('key', $key)->get()){
      $opt = Option::where('key', $key)->get();
      return $opt;
    }else{
      return false;
    }
  }

  public static function get_all_actions()
  {
    // return self::$actions;
    $options = Option::all();
    return $options;
  }
  public static function exists_action($key){
      // return (isset(self::$actions[$key]))? true:false;
      return (Option::where('key', $key)->first())? true:false;
  }
  public static function reset_actions(){
    return Option::truncate();
  }
}

// Shortcuts Functions
function add_action($key, $value){
  return Hook::add_action($key, $value);
}

function update_action($key, $pos,$value){
  $data = [$pos=>$value];
  return Hook::update_action($key, $data);
}

function move_action($key, $from, $to){
  return Hook::move_action($key, $from, $to);
}

function delete_action($key,$value=''){
  return Hook::delete_action($key,$value);
}

function get_action($key)
{
  return Hook::get_action($key);
}

function get_all_actions(){
  return Hook::get_all_actions();
}

function exists_action($key){
  return Hook::exists_action($key);
}

function reset_actions(){
  return Hook::reset_actions();
}

function get_value($val, $no=''){
  if($no == ''){
    return $val;
  }else{
    return (isset(json_decode($val)[$no]))? json_decode($val)[$no]: 'Data not found, Data length: '.count(json_decode($val));
  }
}



// Examples
// add_action('p', 'This is the p1');
// add_action('p', 'This is the p2');
// add_action('p', 'This is the p3');
//
// add_action('p2', 'This is the p4');
// add_action('p2', 'This is the p5');
// add_action('p', 'This is the p6');
//
// update_action('p', 4, 'This is the another value');
// move_action('p', 3,1);
// delete_action('p', 'This is the another value');
//
//
// print_r(get_all_actions());
//
// print_r(get_action('p2'));
//
// echo get_action('p2',1)."\n";
// echo exists_action('p2')."\n";

?>
