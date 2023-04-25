<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceProvisioningResourceError extends ServiceProvisioningError implements Parsable 
{
    /**
     * Instantiates a new ServiceProvisioningResourceError and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.serviceProvisioningResourceError');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceProvisioningResourceError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceProvisioningResourceError {
        return new ServiceProvisioningResourceError();
    }

    /**
     * Gets the errors property value. The errors property
     * @return array<ServiceProvisioningResourceErrorDetail>|null
    */
    public function getErrors(): ?array {
        return $this->getBackingStore()->get('errors');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([ServiceProvisioningResourceErrorDetail::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
    }

    /**
     * Sets the errors property value. The errors property
     * @param array<ServiceProvisioningResourceErrorDetail>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->getBackingStore()->set('errors', $value);
    }

}
