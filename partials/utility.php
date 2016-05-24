<?php 

namespace WWM;

class Utility {
    
    /**
     * getNav
     * 
     * return a html of header
     * @param  [type] $navList [description]
     * @return [type]          [description]
     */
    static function getNav($navList, $isHeader = true) {
        $html = '';

        foreach($navList as $val) {
            // if ($val['only_member'] && empty($_SESSION['auth'])) continue;
            
            $class = (!empty($val['class'])) ? $val['class'] : '';
            $html .= '<li class="nav-item '. $class .'"><a href="'. $val['href'] .'">'. $val['name'] .'</a>';

            // seb menu
            if ($isHeader && !empty($val['sub_menu'])) {
                $html .= '<i class="fa fa-angle-down nav-indicator" aria-hidden="true"></i>';
                $html .= '<ul class="sub-menu">';
                $html .= self::getNav($val['sub_menu']);
                $html .= '</ul>';
            }

            $html .= '</li>';

        }

        return $html;
    }

    /**
     * getSocialLink
     * 
     * return a html of header
     * @param  [type] $navList [description]
     * @return [type]          [description]
     */
    static function getSocialLink($socialList) {
        $html = '';

        foreach($socialList as $val) {
            // if ($val['only_member'] && empty($_SESSION['auth'])) continue;
            
            $html .= '<li><a href="'. $val['href'] .'"><i class="'. $val['class']  .'"></i>'. $val['name'] .'</a></li>';
        }

        return $html;
    }

    /**
     * datetimeToPostDate
     * 
     * [datetimeToPostDate description]
     * @param  string $date   [description]
     * @param  string $format [description]
     * @return [type]         [description]
     */
    static function datetimeToPostDate($date = '', $format = 'M j Y') {
        if (!self::validateDate($date)) return false;
        return date($format, strtotime($date));
    }

    /**
     * validateDate
     * 
     * [validateDate description]
     * @param  [type] $date   [description]
     * @param  string $format [description]
     * @return [type]         [description]
     */
    static function validateDate($date, $format = 'Y-m-d H:i:s') {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

}