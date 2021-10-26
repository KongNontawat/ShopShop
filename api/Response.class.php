<?php

class Response {
    public static function success($response = [], $message = "success", $code = 200 ,$count = 0)
    {
        /** สร้าง array เพื่อเก็บข้อมูลการ Response */
        $response = array( 
            'status' => true, /** กำหนด status เป็น true */
            'data' => $response, /** กำหนดข้อมูลที่จะตอบกลับ */
            'message' => $message , /** กำหนดข้อความที่จะตอบกลับ */
            'count' => $count
        );

        http_response_code($code); /** กำหนด http status code */
        echo json_encode($response); /** ตอบกลับข้อมูลให้ Client */
    }

    /** Method สำหรับการจัดการ Response Error */
    public static function error($errorMessage = "error", $code = 404)
    {
        /** สร้าง array เพื่อเก็บข้อมูลการ Response */
        $response = array( 
            'status' => false, /** กำหนด status เป็น false */
            'message' => $errorMessage /** กำหนดข้อความที่จะตอบกลับ */
        );
        http_response_code($code); /** กำหนด http status code */
        echo json_encode($response); /** ตอบกลับข้อมูลให้ Client */
    }
}