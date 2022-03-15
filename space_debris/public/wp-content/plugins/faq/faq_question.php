<?php

/*
  Plugin Name: FAQ Questions
  Plugin URI: https://wordpress.org/plugins/faq/
  Description: the faq plugin allows you to add your own custom questions designed with css and jquery that you can add on your FAQ page. has nice toggle option with its set question and answer.
  Author: Abdul Rouf
  Version: 1.0
 License: GPLv2 or later
*/

if(!function_exists('faq_question_scripts')){
    function faq_question_scripts()
    {
        wp_enqueue_style('faq_question',plugin_dir_url(__FILE__). 'assets/css/faq_question.css', [], 1.0);
        wp_enqueue_script('faq_question',plugin_dir_url(__FILE__). 'assets/js/faq_question.js',['jquery'], '1.0', true);
    }
    add_action('wp_enqueue_scripts','faq_question_scripts');
}


if(!function_exists('faq_question')){
    function faq_question($attr,$content = null)
    {
        $q = esc_html($attr['q']);
        $text = esc_html($content);

        $html = "
           <div class='faq'>
              <div  class='faq_header top'>
                <span>{$q}</span>
              </div>
              <div  class='faq_body bottom'>
                <span>{$text}</span>
              </div>
           </div>
        
        ";

        return $html;
        
    }
    add_shortcode('faq','faq_question');
}