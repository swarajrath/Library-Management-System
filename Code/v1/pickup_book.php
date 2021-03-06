<?php
require_once dirname(__FILE__) . "/../include/Common.php";
require_once dirname(__FILE__) . "/../include/Book.php";
try {
    verifyRequiredParams('pickup_code', $inputdata);

    $book = new Book();
    $result = $book->pickup_book($inputdata);


    if($result['success']== 1){
        $response->success = true;

        $response->message = $result['message'];
        $response->responseCode = 200;
    }else{
        $response->success = false;
        $response->message = $result['message'];
        $response->responseCode = 200;
    }
    OutputResponse($response);

}catch (Exception $exception){
    print_r($exception);
}
?>