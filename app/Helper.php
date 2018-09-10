<?php

namespace App;

class Helper
{
    /**
     * XXXする関数
     *
     * @param string $value
     * @return string
     */
    public static function getCategoryName($id)
    {
        // 処理
        switch ($id) {
            case 1:
                return "マインド";
            case 2:
                return "スキル";
        }
    }

    
}