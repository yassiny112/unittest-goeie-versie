<?php
class InvalidCCNumberException extends InvalidArgumentException {
  public function __construct($message = "No CC Number\n", $code = 0, $previous = null) {
    return parent::__construct($message, $code, $previous);
  }
}

try {
  procesCC(1);
} catch(InvalidCCNumberException $e) {
  echo $e->getMessage();
  echo get_class($e);
  echo "\n";
  // echo $e->getPrevious()->getMessage();
  // echo get_class($e->getPrevious());
} finally {
  echo "\n";
  echo "Final";
}

function procesCC($numb = null, $zipcode = null) {
  try {
    validate($numb, $zipcode);
  } catch(Exception $e) {
    // throw new BadFunctionCallException("Invalid Inputs", 0, $e);
    throw $e;
  }
  echo "Processed";
}

function validate($numb, $zipcode) {
  if (is_null($numb)) {
    throw new InvalidCCNumberException();
  }
}
