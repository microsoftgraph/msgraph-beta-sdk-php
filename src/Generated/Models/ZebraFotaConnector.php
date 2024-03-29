<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The Zebra FOTA connector entity that represents the tenant's authorization status for Intune to call Zebra Update Services.
*/
class ZebraFotaConnector extends Entity implements Parsable 
{
    /**
     * Instantiates a new ZebraFotaConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ZebraFotaConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ZebraFotaConnector {
        return new ZebraFotaConnector();
    }

    /**
     * Gets the enrollmentAuthorizationUrl property value. Complete account enrollment authorization URL. This corresponds to verificationuricomplete in the Zebra API documentations.
     * @return string|null
    */
    public function getEnrollmentAuthorizationUrl(): ?string {
        $val = $this->getBackingStore()->get('enrollmentAuthorizationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentAuthorizationUrl'");
    }

    /**
     * Gets the enrollmentToken property value. Tenant enrollment token from Zebra. The token is used to enroll Zebra devices in the FOTA Service via app config.
     * @return string|null
    */
    public function getEnrollmentToken(): ?string {
        $val = $this->getBackingStore()->get('enrollmentToken');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentToken'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enrollmentAuthorizationUrl' => fn(ParseNode $n) => $o->setEnrollmentAuthorizationUrl($n->getStringValue()),
            'enrollmentToken' => fn(ParseNode $n) => $o->setEnrollmentToken($n->getStringValue()),
            'fotaAppsApproved' => fn(ParseNode $n) => $o->setFotaAppsApproved($n->getBooleanValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ZebraFotaConnectorState::class)),
        ]);
    }

    /**
     * Gets the fotaAppsApproved property value. Flag indicating if required Firmware Over-the-Air (FOTA) Apps have been approved.
     * @return bool|null
    */
    public function getFotaAppsApproved(): ?bool {
        $val = $this->getBackingStore()->get('fotaAppsApproved');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fotaAppsApproved'");
    }

    /**
     * Gets the lastSyncDateTime property value. Date and time when the account was last synched with Zebra
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
     * Gets the state property value. Represents various states for Zebra FOTA connector.
     * @return ZebraFotaConnectorState|null
    */
    public function getState(): ?ZebraFotaConnectorState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof ZebraFotaConnectorState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('enrollmentAuthorizationUrl', $this->getEnrollmentAuthorizationUrl());
        $writer->writeStringValue('enrollmentToken', $this->getEnrollmentToken());
        $writer->writeBooleanValue('fotaAppsApproved', $this->getFotaAppsApproved());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the enrollmentAuthorizationUrl property value. Complete account enrollment authorization URL. This corresponds to verificationuricomplete in the Zebra API documentations.
     * @param string|null $value Value to set for the enrollmentAuthorizationUrl property.
    */
    public function setEnrollmentAuthorizationUrl(?string $value): void {
        $this->getBackingStore()->set('enrollmentAuthorizationUrl', $value);
    }

    /**
     * Sets the enrollmentToken property value. Tenant enrollment token from Zebra. The token is used to enroll Zebra devices in the FOTA Service via app config.
     * @param string|null $value Value to set for the enrollmentToken property.
    */
    public function setEnrollmentToken(?string $value): void {
        $this->getBackingStore()->set('enrollmentToken', $value);
    }

    /**
     * Sets the fotaAppsApproved property value. Flag indicating if required Firmware Over-the-Air (FOTA) Apps have been approved.
     * @param bool|null $value Value to set for the fotaAppsApproved property.
    */
    public function setFotaAppsApproved(?bool $value): void {
        $this->getBackingStore()->set('fotaAppsApproved', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. Date and time when the account was last synched with Zebra
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the state property value. Represents various states for Zebra FOTA connector.
     * @param ZebraFotaConnectorState|null $value Value to set for the state property.
    */
    public function setState(?ZebraFotaConnectorState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
