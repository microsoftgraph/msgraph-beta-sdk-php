<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Monitoring extends Entity implements Parsable 
{
    /**
     * Instantiates a new monitoring and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('alertRecords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AlertRecord::class);
            /** @var array<AlertRecord>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertRecords'");
    }

    /**
     * Gets the alertRules property value. The collection of alert rules.
     * @return array<AlertRule>|null
    */
    public function getAlertRules(): ?array {
        $val = $this->getBackingStore()->get('alertRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AlertRule::class);
            /** @var array<AlertRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertRules'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
     * @param array<AlertRecord>|null $value Value to set for the alertRecords property.
    */
    public function setAlertRecords(?array $value): void {
        $this->getBackingStore()->set('alertRecords', $value);
    }

    /**
     * Sets the alertRules property value. The collection of alert rules.
     * @param array<AlertRule>|null $value Value to set for the alertRules property.
    */
    public function setAlertRules(?array $value): void {
        $this->getBackingStore()->set('alertRules', $value);
    }

}
