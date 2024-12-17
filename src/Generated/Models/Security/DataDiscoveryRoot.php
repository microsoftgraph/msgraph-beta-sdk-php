<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataDiscoveryRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new DataDiscoveryRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataDiscoveryRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataDiscoveryRoot {
        return new DataDiscoveryRoot();
    }

    /**
     * Gets the cloudAppDiscovery property value. The available entities are IP addresses, devices, and users who access a cloud app.
     * @return DataDiscoveryReport|null
    */
    public function getCloudAppDiscovery(): ?DataDiscoveryReport {
        $val = $this->getBackingStore()->get('cloudAppDiscovery');
        if (is_null($val) || $val instanceof DataDiscoveryReport) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudAppDiscovery'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudAppDiscovery' => fn(ParseNode $n) => $o->setCloudAppDiscovery($n->getObjectValue([DataDiscoveryReport::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('cloudAppDiscovery', $this->getCloudAppDiscovery());
    }

    /**
     * Sets the cloudAppDiscovery property value. The available entities are IP addresses, devices, and users who access a cloud app.
     * @param DataDiscoveryReport|null $value Value to set for the cloudAppDiscovery property.
    */
    public function setCloudAppDiscovery(?DataDiscoveryReport $value): void {
        $this->getBackingStore()->set('cloudAppDiscovery', $value);
    }

}
