<?php

class ApiHandler {
    public static function getPostsFromApi($url){
        $response = file_get_contents($url);
        return json_decode($response, true);
     }
}