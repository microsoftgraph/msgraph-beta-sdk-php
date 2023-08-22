<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcBulkRestore extends CloudPcBulkAction implements Parsable 
{
    /**
     * Instantiates a new cloudPcBulkRestore and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcBulkRestore');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcBulkRestore
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcBulkRestore {
        return new CloudPcBulkRestore();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'restorePointDateTime' => fn(ParseNode $n) => $o->setRestorePointDateTime($n->getDateTimeValue()),
            'timeRange' => fn(ParseNode $n) => $o->setTimeRange($n->getEnumValue(RestoreTimeRange::class)),
        ]);
    }

    /**
     * Gets the restorePointDateTime property value. The restorePointDateTime property
     * @return DateTime|null
    */
    public function getRestorePointDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('restorePointDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePointDateTime'");
    }

    /**
     * Gets the timeRange property value. The timeRange property
     * @return RestoreTimeRange|null
    */
    public function getTimeRange(): ?RestoreTimeRange {
        $val = $this->getBackingStore()->get('timeRange');
        if (is_null($val) || $val instanceof RestoreTimeRange) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeRange'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('restorePointDateTime', $this->getRestorePointDateTime());
        $writer->writeEnumValue('timeRange', $this->getTimeRange());
    }

    /**
     * Sets the restorePointDateTime property value. The restorePointDateTime property
     * @param DateTime|null $value Value to set for the restorePointDateTime property.
    */
    public function setRestorePointDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('restorePointDateTime', $value);
    }

    /**
     * Sets the timeRange property value. The timeRange property
     * @param RestoreTimeRange|null $value Value to set for the timeRange property.
    */
    public function setTimeRange(?RestoreTimeRange $value): void {
        $this->getBackingStore()->set('timeRange', $value);
    }

}
