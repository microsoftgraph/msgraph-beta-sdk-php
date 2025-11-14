<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcExternalPartner extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcExternalPartner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcExternalPartner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcExternalPartner {
        return new CloudPcExternalPartner();
    }

    /**
     * Gets the connectionStatus property value. The connectionStatus property
     * @return CloudPcExternalPartnerStatus|null
    */
    public function getConnectionStatus(): ?CloudPcExternalPartnerStatus {
        $val = $this->getBackingStore()->get('connectionStatus');
        if (is_null($val) || $val instanceof CloudPcExternalPartnerStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionStatus'");
    }

    /**
     * Gets the enableConnection property value. Enable or disable the connection to an external partner. If true, an external partner API accepts incoming calls from external partners. Required. Supports $filter (eq).
     * @return bool|null
    */
    public function getEnableConnection(): ?bool {
        $val = $this->getBackingStore()->get('enableConnection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableConnection'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectionStatus' => fn(ParseNode $n) => $o->setConnectionStatus($n->getEnumValue(CloudPcExternalPartnerStatus::class)),
            'enableConnection' => fn(ParseNode $n) => $o->setEnableConnection($n->getBooleanValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'partnerId' => fn(ParseNode $n) => $o->setPartnerId($n->getStringValue()),
            'statusDetails' => fn(ParseNode $n) => $o->setStatusDetails($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastSyncDateTime property value. Last data sync time for this external partner. The timeStamp type represents date and time information in ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncDateTime'");
    }

    /**
     * Gets the partnerId property value. The partner identifier used to identify the external partner. When the Cloud PC service is ready to integrate with a new external partner, it generates a GUID to represent this partner. The Cloud PC service provides this partner ID to the partner, which can then use it to call this Microsoft Graph API and external partner APIs. Read-only.
     * @return string|null
    */
    public function getPartnerId(): ?string {
        $val = $this->getBackingStore()->get('partnerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerId'");
    }

    /**
     * Gets the statusDetails property value. Status details message. Read-only.
     * @return string|null
    */
    public function getStatusDetails(): ?string {
        $val = $this->getBackingStore()->get('statusDetails');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('connectionStatus', $this->getConnectionStatus());
        $writer->writeBooleanValue('enableConnection', $this->getEnableConnection());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeStringValue('partnerId', $this->getPartnerId());
        $writer->writeStringValue('statusDetails', $this->getStatusDetails());
    }

    /**
     * Sets the connectionStatus property value. The connectionStatus property
     * @param CloudPcExternalPartnerStatus|null $value Value to set for the connectionStatus property.
    */
    public function setConnectionStatus(?CloudPcExternalPartnerStatus $value): void {
        $this->getBackingStore()->set('connectionStatus', $value);
    }

    /**
     * Sets the enableConnection property value. Enable or disable the connection to an external partner. If true, an external partner API accepts incoming calls from external partners. Required. Supports $filter (eq).
     * @param bool|null $value Value to set for the enableConnection property.
    */
    public function setEnableConnection(?bool $value): void {
        $this->getBackingStore()->set('enableConnection', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. Last data sync time for this external partner. The timeStamp type represents date and time information in ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the partnerId property value. The partner identifier used to identify the external partner. When the Cloud PC service is ready to integrate with a new external partner, it generates a GUID to represent this partner. The Cloud PC service provides this partner ID to the partner, which can then use it to call this Microsoft Graph API and external partner APIs. Read-only.
     * @param string|null $value Value to set for the partnerId property.
    */
    public function setPartnerId(?string $value): void {
        $this->getBackingStore()->set('partnerId', $value);
    }

    /**
     * Sets the statusDetails property value. Status details message. Read-only.
     * @param string|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?string $value): void {
        $this->getBackingStore()->set('statusDetails', $value);
    }

}
