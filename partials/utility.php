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
            
            $html .= '<li class="social-item"><a href="'. $val['href'] .'" class="social-link"><i class="'. $val['class']  .'"></i>'. $val['name'] .'</a></li>';
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

    static function getPagenation($arg) {
        $currentPage = intval($arg['current_page']);
        $range = intval($arg['range']);
        $limit = intval($arg['num_page']);
        $url = htmlspecialchars($_SERVER['PHP_SELF']);

        $start = ($currentPage - floor($range/2) > 0) ? ($currentPage - floor($range/2)) : 1;
        $end = ($start > 1) ? ($currentPage + floor($range/2)) : $range;
        $start = ($limit < $end) ? $start - ($end - $limit) : $start;

        $pagination = '<div class="pagination-wrapper cf">';

        // next news button
        $btnClass = '';
        if ($currentPage === 1) {
            $btnClass = 'page-hide';
        }
        $pagination .= '<a href="'. $url .'?page_num='. ($currentPage - 1) .'" class="page-next-news btn '. $btnClass .'">next</a>';

        $pagination .= '<ul class="pagination">';
        for ($i = $start; $i <= $end; $i++) {
            $currentClass = (intval($i) === intval($currentPage)) ? 'page-current' : '';

            if ($i <= $limit && $i > 0) {
                $pagination .= '<li class="page-item '. $currentClass. '"><a class="input-page" name="page_num" href="'. $url .'?page_num='. $i .'">'. $i .'</a></li>';
            }

        }
        $pagination .= '</ul>';

        // previous news button
        $btnClass = '';
        if ($currentPage === $limit) {
            $btnClass = 'page-hide';
        }
        $pagination .= '<a href="'. $url .'?page_num='. ($currentPage + 1) .'" class="page-prev-news btn '. $btnClass .'">prev</a>';

        $pagination .= '</div>';

        // var_dump($start, $end, $limit, $currentPage, $pagination);exit;

        return $pagination;
    }

}