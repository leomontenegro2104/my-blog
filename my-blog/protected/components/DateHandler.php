<?php

class DateHandler {
    public static function generateRandomDate() {
      return date('Y-m-d H:i:s', rand(1262055681, 1674000000));
    }
}


