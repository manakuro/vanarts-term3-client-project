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
        $range = (!empty($arg['range'])) ? intval($arg['range']) : 5;
        $limit = intval($arg['num_page']);
        $url = htmlspecialchars($_SERVER['PHP_SELF']);
        $queryColumn = (!empty($arg['query_column'])) ? $arg['query_column'] : 'page_num';
        $noPage = (!empty($arg['no_page'])) ? true : false;

        $start = ($currentPage - floor($range/2) > 0) ? ($currentPage - floor($range/2)) : 1;
        $end = ($start > 1) ? ($currentPage + floor($range/2)) : $range;
        $start = ($limit < $end) ? $start - ($end - $limit) : $start;

        $pagination = '<div class="pagination-wrapper cf">';

        // next news button
        $btnClass = '';
        if ($currentPage === 1) {
            $btnClass = 'page-hide';
        }
        $pagination .= '<a href="'. $url .'?'. $queryColumn .'='. ($currentPage - 1) .'" class="page-next-news btn '. $btnClass .'">next</a>';

        $paginationClass = '';
        if ($noPage) {
            $paginationClass = 'page-hide';
        }
        $pagination .= '<ul class="pagination '. $paginationClass .'">';
        for ($i = $start; $i <= $end; $i++) {
            $currentClass = (intval($i) === intval($currentPage)) ? 'page-current' : '';

            if ($i <= $limit && $i > 0) {
                $pagination .= '<li class="page-item '. $currentClass. '"><a class="input-page" name="page_num" href="'. $url .'?'. $queryColumn .'='. $i .'">'. $i .'</a></li>';
            }

        }
        $pagination .= '</ul>';

        // previous news button
        $btnClass = '';
        if ($currentPage === $limit) {
            $btnClass = 'page-hide';
        }
        $pagination .= '<a href="'. $url .'?'. $queryColumn .'='. ($currentPage + 1) .'" class="page-prev-news btn '. $btnClass .'">prev</a>';

        $pagination .= '</div>';

        // var_dump($start, $end, $limit, $currentPage, $pagination);exit;

        return $pagination;
    }

    /**
     * Convert relative path to absolute path
     * Reference: (http://web-tsukuru.com/187)
     * 
     * @param string $target_path 
     * @param string $base 
     * @return $uri string 
     */
    static function convert_to_uri($target_path, $base) {
      $component = parse_url($base);
      $directory = preg_replace('!/[^/]*$!', '/', $component["path"]);
      switch (true) {
        // [0]
        case preg_match("/^http/", $target_path):
          $uri =  $target_path;
          break;
        // [1]「//exmaple.jp/aa.jpg」
        case preg_match("/^\/\/.+/", $target_path):
          $uri =  $component["scheme"].":".$target_path;
          break;
        // [2]「/aaa/aa.jpg」
        case preg_match("/^\/[^\/].+/", $target_path):
          $uri =  $component["scheme"]."://".$component["host"].$target_path;
          break;
        // [3]「./aa.jpg」
        case preg_match("/^\.\/(.+)/", $target_path,$maches):
          $uri =  $component["scheme"]."://".$component["host"].$directory.$maches[1];
          break;
        // [4]「aa.jpg」
        case preg_match("/^([^\.\/]+)(.*)/", $target_path,$maches):
          $uri =  $component["scheme"]."://".$component["host"].$directory.$maches[1].$maches[2];
          break;
        // [5]「../aa.jpg」
        case preg_match("/^\.\.\/.+/", $target_path):
          
          preg_match_all("!\.\./!", $target_path, $matches);
          $nest =  count($matches[0]);
          $dir = preg_replace('!/[^/]*$!', '/', $component["path"])."\n";
          $dir_array = explode("/",$dir);
          array_shift($dir_array);
          array_pop($dir_array);
          $dir_count = count($dir_array);
          $count = $dir_count - $nest;
          $pathto="";
          $i = 0;
          while ( $i < $count) {
            $pathto .= "/".$dir_array[$i];
            $i++;
          }
          $file = str_replace("../","",$target_path);
          $uri =  $component["scheme"]."://".$component["host"].$pathto."/".$file;
          break;
      }
      return $uri;
    }

    static function getCommentLists($data = array()) {
        if (empty($data)) return '';
        
        $html = '';
        foreach($data as $index => $val) {
            $html .= '<li class="comment-item">';
                $html .= '<h5 class="comment-item-name">'. $val['name'] .'</h5>';
                $html .= '<span class="comment-item-date">'. self::datetimeToPostDate($val['created_at']) .'</span>';
                $html .= '<p class="comment-item-content">'. $val['content'] .'</p>';
            $html .= '</li>';
        }
                                        
        return $html;         
    }

}