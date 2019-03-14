<?php

namespace Drupal\customer\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Customer entities.
 *
 * @ingroup customer
 */
interface CustomerInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Customer name.
   *
   * @return string
   *   Name of the Customer.
   */
  public function getName();

  /**
   * Sets the Customer name.
   *
   * @param string $name
   *   The Customer name.
   *
   * @return \Drupal\customer\Entity\CustomerInterface
   *   The called Customer entity.
   */
  public function setName($name);

  /**
   * Gets the Customer creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Customer.
   */
  public function getCreatedTime();

  /**
   * Sets the Customer creation timestamp.
   *
   * @param int $timestamp
   *   The Customer creation timestamp.
   *
   * @return \Drupal\customer\Entity\CustomerInterface
   *   The called Customer entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Customer published status indicator.
   *
   * Unpublished Customer are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Customer is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Customer.
   *
   * @param bool $published
   *   TRUE to set this Customer to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\customer\Entity\CustomerInterface
   *   The called Customer entity.
   */
  public function setPublished($published);

}
