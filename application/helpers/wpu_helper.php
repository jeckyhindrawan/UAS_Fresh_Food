<?php

function isLoggedIn()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('login');
    }
}