<?php

namespace Drupal\bline_login\Controller;

use Drupal\Core\Controller\ControllerBase;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class BlineLoginController.
 */
class BlineLoginController extends ControllerBase {

  /**
   * Auth.
   *
   * @return string
   *   Return Hello string.
   */
  public function auth( Request $request ) {
    $response['data'] = 'Some test data to return';
    $response['method'] = 'POST';

    return new JsonResponse( $response );
  }

  public function session() {
    $response['data'] = 'g5ehdzBLRW_hkuNFwu12XTTVlTQaci2w0J7TKXXSsKQ';
    $response['method'] = 'GET';

    return new JsonResponse( $response );
  }

}
