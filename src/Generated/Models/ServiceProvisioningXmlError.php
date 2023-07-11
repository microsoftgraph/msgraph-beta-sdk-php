<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceProvisioningXmlError extends ServiceProvisioningError implements Parsable 
{
    /**
     * Instantiates a new serviceProvisioningXmlError and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.serviceProvisioningXmlError');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceProvisioningXmlError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceProvisioningXmlError {
        return new ServiceProvisioningXmlError();
    }

    /**
     * Gets the errorDetail property value. Error Information published by the Federated Service as an xml string .
     * @return string|null
    */
    public function getErrorDetail(): ?string {
        $val = $this->getBackingStore()->get('errorDetail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorDetail'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorDetail' => fn(ParseNode $n) => $o->setErrorDetail($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('errorDetail', $this->getErrorDetail());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the errorDetail property value. Error Information published by the Federated Service as an xml string .
     * @param string|null $value Value to set for the errorDetail property.
    */
    public function setErrorDetail(?string $value): void {
        $this->getBackingStore()->set('errorDetail', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
