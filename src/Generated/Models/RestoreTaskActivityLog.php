<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RestoreTaskActivityLog extends ActivityLogBase implements Parsable 
{
    /**
     * Instantiates a new RestoreTaskActivityLog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.restoreTaskActivityLog');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestoreTaskActivityLog
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RestoreTaskActivityLog {
        return new RestoreTaskActivityLog();
    }

    /**
     * Gets the destinationType property value. The destinationType property
     * @return DestinationType|null
    */
    public function getDestinationType(): ?DestinationType {
        $val = $this->getBackingStore()->get('destinationType');
        if (is_null($val) || $val instanceof DestinationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'destinationType' => fn(ParseNode $n) => $o->setDestinationType($n->getEnumValue(DestinationType::class)),
            'restoreArtifactDetails' => fn(ParseNode $n) => $o->setRestoreArtifactDetails($n->getObjectValue([RestoreArtifactDetails::class, 'createFromDiscriminatorValue'])),
            'restoreCompletionDateTime' => fn(ParseNode $n) => $o->setRestoreCompletionDateTime($n->getDateTimeValue()),
            'restoreSessionId' => fn(ParseNode $n) => $o->setRestoreSessionId($n->getStringValue()),
            'restoreSessionStatus' => fn(ParseNode $n) => $o->setRestoreSessionStatus($n->getEnumValue(RestoreSessionStatus::class)),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getEnumValue(RestorePointTags::class)),
        ]);
    }

    /**
     * Gets the restoreArtifactDetails property value. The restoreArtifactDetails property
     * @return RestoreArtifactDetails|null
    */
    public function getRestoreArtifactDetails(): ?RestoreArtifactDetails {
        $val = $this->getBackingStore()->get('restoreArtifactDetails');
        if (is_null($val) || $val instanceof RestoreArtifactDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoreArtifactDetails'");
    }

    /**
     * Gets the restoreCompletionDateTime property value. The restoreCompletionDateTime property
     * @return DateTime|null
    */
    public function getRestoreCompletionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('restoreCompletionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoreCompletionDateTime'");
    }

    /**
     * Gets the restoreSessionId property value. The restoreSessionId property
     * @return string|null
    */
    public function getRestoreSessionId(): ?string {
        $val = $this->getBackingStore()->get('restoreSessionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoreSessionId'");
    }

    /**
     * Gets the restoreSessionStatus property value. The restoreSessionStatus property
     * @return RestoreSessionStatus|null
    */
    public function getRestoreSessionStatus(): ?RestoreSessionStatus {
        $val = $this->getBackingStore()->get('restoreSessionStatus');
        if (is_null($val) || $val instanceof RestoreSessionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoreSessionStatus'");
    }

    /**
     * Gets the tags property value. The tags property
     * @return RestorePointTags|null
    */
    public function getTags(): ?RestorePointTags {
        $val = $this->getBackingStore()->get('tags');
        if (is_null($val) || $val instanceof RestorePointTags) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('destinationType', $this->getDestinationType());
        $writer->writeObjectValue('restoreArtifactDetails', $this->getRestoreArtifactDetails());
        $writer->writeDateTimeValue('restoreCompletionDateTime', $this->getRestoreCompletionDateTime());
        $writer->writeStringValue('restoreSessionId', $this->getRestoreSessionId());
        $writer->writeEnumValue('restoreSessionStatus', $this->getRestoreSessionStatus());
        $writer->writeEnumValue('tags', $this->getTags());
    }

    /**
     * Sets the destinationType property value. The destinationType property
     * @param DestinationType|null $value Value to set for the destinationType property.
    */
    public function setDestinationType(?DestinationType $value): void {
        $this->getBackingStore()->set('destinationType', $value);
    }

    /**
     * Sets the restoreArtifactDetails property value. The restoreArtifactDetails property
     * @param RestoreArtifactDetails|null $value Value to set for the restoreArtifactDetails property.
    */
    public function setRestoreArtifactDetails(?RestoreArtifactDetails $value): void {
        $this->getBackingStore()->set('restoreArtifactDetails', $value);
    }

    /**
     * Sets the restoreCompletionDateTime property value. The restoreCompletionDateTime property
     * @param DateTime|null $value Value to set for the restoreCompletionDateTime property.
    */
    public function setRestoreCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('restoreCompletionDateTime', $value);
    }

    /**
     * Sets the restoreSessionId property value. The restoreSessionId property
     * @param string|null $value Value to set for the restoreSessionId property.
    */
    public function setRestoreSessionId(?string $value): void {
        $this->getBackingStore()->set('restoreSessionId', $value);
    }

    /**
     * Sets the restoreSessionStatus property value. The restoreSessionStatus property
     * @param RestoreSessionStatus|null $value Value to set for the restoreSessionStatus property.
    */
    public function setRestoreSessionStatus(?RestoreSessionStatus $value): void {
        $this->getBackingStore()->set('restoreSessionStatus', $value);
    }

    /**
     * Sets the tags property value. The tags property
     * @param RestorePointTags|null $value Value to set for the tags property.
    */
    public function setTags(?RestorePointTags $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

}
