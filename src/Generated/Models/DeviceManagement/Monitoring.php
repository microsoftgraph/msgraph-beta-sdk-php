<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Monitoring extends Entity implements Parsable 
{
    /**
     * Instantiates a new monitoring and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagement.monitoring');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Monitoring
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Monitoring {
        return new Monitoring();
    }

    /**
     * Gets the alertRecords property value. The collection of records of alert events.
     * @return array<AlertRecord>|null
    */
    public function getAlertRecords(): ?array {
        return $this->getBackingStore()->get('alertRecords');
    }

    /**
     * Gets the alertRules property value. The collection of alert rules.
     * @return array<AlertRule>|null
    */
    public function getAlertRules(): ?array {
        return $this->getBackingStore()->get('alertRules');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertRecords' => fn(ParseNode $n) => $o->setAlertRecords($n->getCollectionOfObjectValues([AlertRecord::class, 'createFromDiscriminatorValue'])),
            'alertRules' => fn(ParseNode $n) => $o->setAlertRules($n->getCollectionOfObjectValues([AlertRule::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('alertRecords', $this->getAlertRecords());
        $writer->writeCollectionOfObjectValues('alertRules', $this->getAlertRules());
    }

    /**
     * Sets the alertRecords property value. The collection of records of alert events.
     *  @param array<AlertRecord>|null $value Value to set for the alertRecords property.
    */
    public function setAlertRecords(?array $value): void {
        $this->getBackingStore()->set('alertRecords', $value);
    }

    /**
     * Sets the alertRules property value. The collection of alert rules.
     *  @param array<AlertRule>|null $value Value to set for the alertRules property.
    */
    public function setAlertRules(?array $value): void {
        $this->getBackingStore()->set('alertRules', $value);
    }

}
