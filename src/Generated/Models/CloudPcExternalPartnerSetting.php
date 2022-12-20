<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcExternalPartnerSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcExternalPartnerSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcExternalPartnerSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcExternalPartnerSetting {
        return new CloudPcExternalPartnerSetting();
    }

    /**
     * Gets the enableConnection property value. Enable or disable the connection to an external partner. If true, an external partner API will accept incoming calls from external partners. Required. Supports $filter (eq).
     * @return bool|null
    */
    public function getEnableConnection(): ?bool {
        return $this->getBackingStore()->get('enableConnection');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enableConnection' => fn(ParseNode $n) => $o->setEnableConnection($n->getBooleanValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'partnerId' => fn(ParseNode $n) => $o->setPartnerId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcExternalPartnerStatus::class)),
            'statusDetails' => fn(ParseNode $n) => $o->setStatusDetails($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastSyncDateTime property value. Last data sync time for this external partner. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSyncDateTime');
    }

    /**
     * Gets the partnerId property value. The external partner ID.
     * @return string|null
    */
    public function getPartnerId(): ?string {
        return $this->getBackingStore()->get('partnerId');
    }

    /**
     * Gets the status property value. The status property
     * @return CloudPcExternalPartnerStatus|null
    */
    public function getStatus(): ?CloudPcExternalPartnerStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the statusDetails property value. Status details message.
     * @return string|null
    */
    public function getStatusDetails(): ?string {
        return $this->getBackingStore()->get('statusDetails');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enableConnection', $this->getEnableConnection());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeStringValue('partnerId', $this->getPartnerId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('statusDetails', $this->getStatusDetails());
    }

    /**
     * Sets the enableConnection property value. Enable or disable the connection to an external partner. If true, an external partner API will accept incoming calls from external partners. Required. Supports $filter (eq).
     *  @param bool|null $value Value to set for the enableConnection property.
    */
    public function setEnableConnection(?bool $value): void {
        $this->getBackingStore()->set('enableConnection', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. Last data sync time for this external partner. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the partnerId property value. The external partner ID.
     *  @param string|null $value Value to set for the partnerId property.
    */
    public function setPartnerId(?string $value): void {
        $this->getBackingStore()->set('partnerId', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param CloudPcExternalPartnerStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcExternalPartnerStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the statusDetails property value. Status details message.
     *  @param string|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?string $value): void {
        $this->getBackingStore()->set('statusDetails', $value);
    }

}
