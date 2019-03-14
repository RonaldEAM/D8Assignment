<?php

namespace Drupal\customer\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class CustomerController.
 */
class CustomerController extends ControllerBase {

  /**
   * List.
   *
   * @param int $id
   *   Customer id.
   *
   * @return string
   *   Return render array.
   */
  public function list($id) {
    $viewId = 'customer_list';
    $displayId = 'list';

    $response['customer_list'] = [
      '#type' => 'view',
      '#name' => $viewId,
      '#display_id' => $displayId,
      '#arguments' => $id ? [$id] : [],
    ];

    return $response;
  }

}
