<?php

namespace Drupal\commerce_shipping\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\EntityType;

class ShipmentItem extends ConfigEntityBase {

  /**
   * The entity type associated with this shipment item.
   *
   * @var EntityType
   */
  protected $purchasedEntityType;

  /**
   * The id of the purchasedEntity.
   *
   * @var int
   */
  protected $purchasedEntityId;

  /**
   * The number of items.
   *
   * @var int
   */
  protected $quantity;

  /**
   * @return \Drupal\Core\Entity\EntityType
   */
  public function getPurchasedEntityType() {
    return $this->purchasedEntityType;
  }

  /**
   * @param \Drupal\Core\Entity\EntityType $purchasedEntityType
   */
  public function setPurchasedEntityType($purchasedEntityType) {
    $this->purchasedEntityType = $purchasedEntityType;
  }

  /**
   * @return int
   */
  public function getQuantity() {
    return $this->quantity;
  }

  /**
   * @param int $quantity
   */
  public function setQuantity($quantity) {
    $this->quantity = $quantity;
  }

  /**
   * @return int
   */
  public function getPurchasedEntityId() {
    return $this->purchasedEntityId;
  }

  /**
   * @param int $purchasedEntityId
   */
  public function setPurchasedEntityId($purchasedEntityId) {
    $this->purchasedEntityId = $purchasedEntityId;
  }

  /**
   * Returns the serialization of this object.
   *
   * @return string
   */
  public function getSerializedObject(){
    return serialize($this);
  }

}