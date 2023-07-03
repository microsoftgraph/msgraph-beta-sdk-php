<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoteActionAudit extends Entity implements Parsable 
{
    /**
     * Instantiates a new RemoteActionAudit and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteActionAudit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteActionAudit {
        return new RemoteActionAudit();
    }

    /**
     * Gets the action property value. Remote actions Intune supports.
     * @return RemoteAction|null
    */
    public function getAction(): ?RemoteAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof RemoteAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
    }

    /**
     * Gets the actionState property value. The actionState property
     * @return ActionState|null
    */
    public function getActionState(): ?ActionState {
        $val = $this->getBackingStore()->get('actionState');
        if (is_null($val) || $val instanceof ActionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionState'");
    }

    /**
     * Gets the deviceDisplayName property value. Intune device name.
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        $val = $this->getBackingStore()->get('deviceDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceDisplayName'");
    }

    /**
     * Gets the deviceIMEI property value. IMEI of the device.
     * @return string|null
    */
    public function getDeviceIMEI(): ?string {
        $val = $this->getBackingStore()->get('deviceIMEI');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceIMEI'");
    }

    /**
     * Gets the deviceOwnerUserPrincipalName property value. Upn of the device owner.
     * @return string|null
    */
    public function getDeviceOwnerUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('deviceOwnerUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceOwnerUserPrincipalName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(RemoteAction::class)),
            'actionState' => fn(ParseNode $n) => $o->setActionState($n->getEnumValue(ActionState::class)),
            'deviceDisplayName' => fn(ParseNode $n) => $o->setDeviceDisplayName($n->getStringValue()),
            'deviceIMEI' => fn(ParseNode $n) => $o->setDeviceIMEI($n->getStringValue()),
            'deviceOwnerUserPrincipalName' => fn(ParseNode $n) => $o->setDeviceOwnerUserPrincipalName($n->getStringValue()),
            'initiatedByUserPrincipalName' => fn(ParseNode $n) => $o->setInitiatedByUserPrincipalName($n->getStringValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'requestDateTime' => fn(ParseNode $n) => $o->setRequestDateTime($n->getDateTimeValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiatedByUserPrincipalName property value. User who initiated the device action, format is UPN.
     * @return string|null
    */
    public function getInitiatedByUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('initiatedByUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiatedByUserPrincipalName'");
    }

    /**
     * Gets the managedDeviceId property value. Action target.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        $val = $this->getBackingStore()->get('managedDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceId'");
    }

    /**
     * Gets the requestDateTime property value. Time when the action was issued, given in UTC.
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestDateTime'");
    }

    /**
     * Gets the userName property value. [deprecated] Please use InitiatedByUserPrincipalName instead.
     * @return string|null
    */
    public function getUserName(): ?string {
        $val = $this->getBackingStore()->get('userName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeEnumValue('actionState', $this->getActionState());
        $writer->writeStringValue('deviceDisplayName', $this->getDeviceDisplayName());
        $writer->writeStringValue('deviceIMEI', $this->getDeviceIMEI());
        $writer->writeStringValue('deviceOwnerUserPrincipalName', $this->getDeviceOwnerUserPrincipalName());
        $writer->writeStringValue('initiatedByUserPrincipalName', $this->getInitiatedByUserPrincipalName());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeDateTimeValue('requestDateTime', $this->getRequestDateTime());
        $writer->writeStringValue('userName', $this->getUserName());
    }

    /**
     * Sets the action property value. Remote actions Intune supports.
     * @param RemoteAction|null $value Value to set for the action property.
    */
    public function setAction(?RemoteAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the actionState property value. The actionState property
     * @param ActionState|null $value Value to set for the actionState property.
    */
    public function setActionState(?ActionState $value): void {
        $this->getBackingStore()->set('actionState', $value);
    }

    /**
     * Sets the deviceDisplayName property value. Intune device name.
     * @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value): void {
        $this->getBackingStore()->set('deviceDisplayName', $value);
    }

    /**
     * Sets the deviceIMEI property value. IMEI of the device.
     * @param string|null $value Value to set for the deviceIMEI property.
    */
    public function setDeviceIMEI(?string $value): void {
        $this->getBackingStore()->set('deviceIMEI', $value);
    }

    /**
     * Sets the deviceOwnerUserPrincipalName property value. Upn of the device owner.
     * @param string|null $value Value to set for the deviceOwnerUserPrincipalName property.
    */
    public function setDeviceOwnerUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('deviceOwnerUserPrincipalName', $value);
    }

    /**
     * Sets the initiatedByUserPrincipalName property value. User who initiated the device action, format is UPN.
     * @param string|null $value Value to set for the initiatedByUserPrincipalName property.
    */
    public function setInitiatedByUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('initiatedByUserPrincipalName', $value);
    }

    /**
     * Sets the managedDeviceId property value. Action target.
     * @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the requestDateTime property value. Time when the action was issued, given in UTC.
     * @param DateTime|null $value Value to set for the requestDateTime property.
    */
    public function setRequestDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestDateTime', $value);
    }

    /**
     * Sets the userName property value. [deprecated] Please use InitiatedByUserPrincipalName instead.
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

}
