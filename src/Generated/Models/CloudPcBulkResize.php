<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcBulkResize extends CloudPcBulkAction implements Parsable 
{
    /**
     * Instantiates a new CloudPcBulkResize and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcBulkResize');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcBulkResize
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcBulkResize {
        return new CloudPcBulkResize();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'targetServicePlanId' => fn(ParseNode $n) => $o->setTargetServicePlanId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the targetServicePlanId property value. Indicates the target service plan ID of the resize configuration with new vCPU and storage size.
     * @return string|null
    */
    public function getTargetServicePlanId(): ?string {
        $val = $this->getBackingStore()->get('targetServicePlanId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetServicePlanId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('targetServicePlanId', $this->getTargetServicePlanId());
    }

    /**
     * Sets the targetServicePlanId property value. Indicates the target service plan ID of the resize configuration with new vCPU and storage size.
     * @param string|null $value Value to set for the targetServicePlanId property.
    */
    public function setTargetServicePlanId(?string $value): void {
        $this->getBackingStore()->set('targetServicePlanId', $value);
    }

}
