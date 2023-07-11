<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceProvisioningLinkedResourceErrorDetail extends ServiceProvisioningResourceErrorDetail implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new serviceProvisioningLinkedResourceErrorDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceProvisioningLinkedResourceErrorDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceProvisioningLinkedResourceErrorDetail {
        return new ServiceProvisioningLinkedResourceErrorDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'propertyName' => fn(ParseNode $n) => $o->setPropertyName($n->getStringValue()),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getStringValue()),
        ]);
    }

    /**
     * Gets the propertyName property value. The propertyName property
     * @return string|null
    */
    public function getPropertyName(): ?string {
        $val = $this->getBackingStore()->get('propertyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'propertyName'");
    }

    /**
     * Gets the target property value. The target property
     * @return string|null
    */
    public function getTarget(): ?string {
        $val = $this->getBackingStore()->get('target');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'target'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('propertyName', $this->getPropertyName());
        $writer->writeStringValue('target', $this->getTarget());
    }

    /**
     * Sets the propertyName property value. The propertyName property
     * @param string|null $value Value to set for the propertyName property.
    */
    public function setPropertyName(?string $value): void {
        $this->getBackingStore()->set('propertyName', $value);
    }

    /**
     * Sets the target property value. The target property
     * @param string|null $value Value to set for the target property.
    */
    public function setTarget(?string $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
