<?php

namespace Alright\Options;



use Alright\Options\Models\Option;

class Options
{
    // Build wonderful things
    public static function get_option($option_name){
        $option = Option::where('option_name', $option_name)->first();
        if($option !=NULL){
            if($option->opt_val_type == 'csv'){
                return explode(",", $option->option_value);
            }else if($option->opt_val_type == 'json'){
                $value = $option->option_value ;
                return  $value; //json_decode($value);
            } else if($option->opt_val_type == 'serilize'){
                $value = $option->option_value ;
                return  unserialize($value);
            }
            else {
                return $option->option_value;
            }
        }else{
            return NULL;
        }
    }
}
