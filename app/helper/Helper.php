<?php

namespace App\Helper;

class Helper
{
    public static function IDGenerator($model, $trow, $length = 4, $prifix)
    {
        $data = $model::orderBy('id', 'desc')->first();
        if (!$data) {
            $log_length = $length;
            $last_number = '';
        } else {
            // $trow = '';
            $code = substr($data->$trow, strlen($prifix) + 1);
            $actial_last_number = ($code / 1) * 1;
            $increment_last_number = $actial_last_number + 1;
            $last_number_length = strlen($increment_last_number);
            $log_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = '';
        for ($i = 0; $i < $log_length; $i++) {
            $zeros .= '0';
        }
        return $prifix . '-' . $zeros . $last_number;
    }

    //layout
    public static function IDGenerator1($model, $trow, $length = 4, $prifix)
    {
        $data = $model::orderBy('id', 'desc')->first();
        if (!$data) {
            $log_length = $length;
            $last_number = '';
        } else {
            // $trow = '';
            $code = substr($data->$trow, strlen($prifix) + 1);
            $actial_last_number = ($code / 1) * 1;
            $increment_last_number = $actial_last_number + 1;
            $last_number_length = strlen($increment_last_number);
            $log_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = '';
        for ($i = 0; $i < $log_length; $i++) {
            $zeros .= '0';
        }
        return $prifix . '-' . $zeros . $last_number;
    }

    //Executive
    public static function IDGeneratorExe($model, $trow, $length = 4, $prifix)
    {
        $data = $model::orderBy('id', 'desc')->first();
        if (!$data) {
            $log_length = $length;
            $last_number = '';
        } else {
            // $trow = '';
            $code = substr($data->$trow, strlen($prifix) + 1);
            $actial_last_number = ($code / 1) * 1;
            $increment_last_number = $actial_last_number + 1;
            $last_number_length = strlen($increment_last_number);
            $log_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = '';
        for ($i = 0; $i < $log_length; $i++) {
            $zeros .= '0';
        }
        return $prifix . '-' . $zeros . $last_number;
    }
}
