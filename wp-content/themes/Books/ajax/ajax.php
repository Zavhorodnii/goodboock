<?php

add_action( 'wp_ajax_js_send_mess', 'summ_function' ); // wp_ajax_{ЗНАЧЕНИЕ ПАРАМЕТРА ACTION!!}
add_action( 'wp_ajax_nopriv_js_send_mess', 'summ_function' );  // wp_ajax_nopriv_{ЗНАЧЕНИЕ ACTION!!}
// первый хук для авторизованных, второй для не авторизованных пользователей

function summ_function(){
    $result = array();
    if (!isset($_POST['name']) || !isset($_POST['mail']) || !isset($_POST['message']) ){
        $result['result'] = false;
    }
    else {
        $post = array(
            'post_author'    => 1,
            'post_title'     => $_POST['name'],
            'post_type'      => 'message',
            'post_status'    => 'publish',
            'meta_input'     => [ 'name'=>$_POST['name'], 'mail' => $_POST['mail'], 'message' =>$_POST['message']],
        );
        $post_id = wp_insert_post( wp_slash($post) );
        if ($post_id == 0)
            $result['result'] = false;
        else
            $result['result'] = "ok";
    }
    echo json_encode($result);
    die; // даём понять, что обработчик закончил выполнение
}