<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityBaselineDeviceState extends Entity implements Parsable 
{
    /**
     * Instantiates a new securityBaselineDeviceState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityBaselineDeviceState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityBaselineDeviceState {
        return new SecurityBaselineDeviceState();
    }

    /**
     * Gets the deviceDisplayName property value. Display name of the device
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        return $this->getBackingStore()->get('deviceDisplayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceDisplayName' => fn(ParseNode $n) => $o->setDeviceDisplayName($n->getStringValue()),
            'lastReportedDateTime' => fn(ParseNode $n) => $o->setLastReportedDateTime($n->getDateTimeValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(SecurityBaselineComplianceState::class)),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastReportedDateTime property value. Last modified date time of the policy report
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastReportedDateTime');
    }

    /**
     * Gets the managedDeviceId property value. Intune device id
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->getBackingStore()->get('managedDeviceId');
    }

    /**
     * Gets the state property value. Security Baseline Compliance State
     * @return SecurityBaselineComplianceState|null
    */
    public function getState(): ?SecurityBaselineComplianceState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceDisplayName', $this->getDeviceDisplayName());
        $writer->writeDateTimeValue('lastReportedDateTime', $this->getLastReportedDateTime());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the deviceDisplayName property value. Display name of the device
     *  @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value): void {
        $this->getBackingStore()->set('deviceDisplayName', $value);
    }

    /**
     * Sets the lastReportedDateTime property value. Last modified date time of the policy report
     *  @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastReportedDateTime', $value);
    }

    /**
     * Sets the managedDeviceId property value. Intune device id
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the state property value. Security Baseline Compliance State
     *  @param SecurityBaselineComplianceState|null $value Value to set for the state property.
    */
    public function setState(?SecurityBaselineComplianceState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
