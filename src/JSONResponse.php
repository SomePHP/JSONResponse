<?php
/** This is the base class for returning a RESTfull JSON response. The
 * response package contains 4 properties: 

 * data: request results.
 * error: error information.  ex.[{code: 555, msg: 'No results Found'}]
 * meta: meta information about the response.
*/
class JSONResponse {
  public $data = [];
  public $error = [];
  public $meta = [];

  public $header = ['Content-Type: application/json'];

  private function _sendHeaders() {
    foreach ($this->header as $h) {
      header($h);
    }
  }

  function send() {
    $this->_sendHeaders();

    echo json_encode((object) array(
      'data' => $this->data,
      'error' => $this->error,
      'meta' => $this->meta
    ));
  }
}

