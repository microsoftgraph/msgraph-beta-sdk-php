<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * mobileAppCatalogPackage is an abstract type that application catalog package entities derive from. A mobileAppCatalogPackage entity contains information about an application catalog package that can be deployed to Intune-managed devices.
*/
class MobileAppCatalogPackage extends Entity implements Parsable 
{
    /**
     * Instantiates a new MobileAppCatalogPackage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppCatalogPackage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppCatalogPackage {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.win32MobileAppCatalogPackage': return new Win32MobileAppCatalogPackage();
            }
        }
        return new MobileAppCatalogPackage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'productDisplayName' => fn(ParseNode $n) => $o->setProductDisplayName($n->getStringValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'publisherDisplayName' => fn(ParseNode $n) => $o->setPublisherDisplayName($n->getStringValue()),
            'versionDisplayName' => fn(ParseNode $n) => $o->setVersionDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the productDisplayName property value. The name of the product (example: "Fabrikam for Business"). Returned by default. Read-only. Supports: $filter, $search, $select. This property is read-only.
     * @return string|null
    */
    public function getProductDisplayName(): ?string {
        $val = $this->getBackingStore()->get('productDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productDisplayName'");
    }

    /**
     * Gets the productId property value. The identifier of a specific product irrespective of version, or other attributes. Read-only. Returned by default. Supports: $filter, $select. This property is read-only.
     * @return string|null
    */
    public function getProductId(): ?string {
        $val = $this->getBackingStore()->get('productId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productId'");
    }

    /**
     * Gets the publisherDisplayName property value. The name of the application catalog package publisher (example: "Fabrikam"). Returned by default. Read-only. Supports $filter, $search, $select. This property is read-only.
     * @return string|null
    */
    public function getPublisherDisplayName(): ?string {
        $val = $this->getBackingStore()->get('publisherDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisherDisplayName'");
    }

    /**
     * Gets the versionDisplayName property value. The name of the product version (example: "1.2203.156"). Returned by default. Read-only. Supports: $filter, $search, $select. This property is read-only.
     * @return string|null
    */
    public function getVersionDisplayName(): ?string {
        $val = $this->getBackingStore()->get('versionDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versionDisplayName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

    /**
     * Sets the productDisplayName property value. The name of the product (example: "Fabrikam for Business"). Returned by default. Read-only. Supports: $filter, $search, $select. This property is read-only.
     * @param string|null $value Value to set for the productDisplayName property.
    */
    public function setProductDisplayName(?string $value): void {
        $this->getBackingStore()->set('productDisplayName', $value);
    }

    /**
     * Sets the productId property value. The identifier of a specific product irrespective of version, or other attributes. Read-only. Returned by default. Supports: $filter, $select. This property is read-only.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->getBackingStore()->set('productId', $value);
    }

    /**
     * Sets the publisherDisplayName property value. The name of the application catalog package publisher (example: "Fabrikam"). Returned by default. Read-only. Supports $filter, $search, $select. This property is read-only.
     * @param string|null $value Value to set for the publisherDisplayName property.
    */
    public function setPublisherDisplayName(?string $value): void {
        $this->getBackingStore()->set('publisherDisplayName', $value);
    }

    /**
     * Sets the versionDisplayName property value. The name of the product version (example: "1.2203.156"). Returned by default. Read-only. Supports: $filter, $search, $select. This property is read-only.
     * @param string|null $value Value to set for the versionDisplayName property.
    */
    public function setVersionDisplayName(?string $value): void {
        $this->getBackingStore()->set('versionDisplayName', $value);
    }

}
