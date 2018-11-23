<?php

if(!function_exists('full_title')){

  /**
     * full_titleする関数
     *
     * @param string $value
     * @return string
     */
     
    function full_title($page_title)
    {
         $base_title = 'Ruby on Rails Tutorial Sample App';
        
         if($page_title === ''){
             
             $base_title = $base_title;
             
         }else{
             
            $page_title =  $page_title + '|' + $base_title;
         }
         
         return $page_title;
         
         
     }

}
?>