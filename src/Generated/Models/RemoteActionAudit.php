<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoteActionAudit extends Entity 
{
    /** @var RemoteAction|null $action The action name. Possible values are: unknown, factoryReset, removeCompanyData, resetPasscode, remoteLock, enableLostMode, disableLostMode, locateDevice, rebootNow, recoverPasscode, cleanWindowsDevice, logoutSharedAppleDeviceActiveUser, quickScan, fullScan, windowsDefenderUpdateSignatures, factoryResetKeepEnrollmentData, updateDeviceAccount, automaticRedeployment, shutDown, rotateBitLockerKeys, rotateFileVaultKey, getFileVaultKey, setDeviceName, activateDeviceEsim. */
    private ?RemoteAction $action = null;
    
    /** @var ActionState|null $actionState Action state. Possible values are: none, pending, canceled, active, done, failed, notSupported. */
    private ?ActionState $actionState = null;
    
    /** @var string|null $deviceDisplayName Intune device name. */
    private ?string $deviceDisplayName = null;
    
    /** @var string|null $deviceIMEI IMEI of the device. */
    private ?string $deviceIMEI = null;
    
    /** @var string|null $deviceOwnerUserPrincipalName Upn of the device owner. */
    private ?string $deviceOwnerUserPrincipalName = null;
    
    /** @var string|null $initiatedByUserPrincipalName User who initiated the device action, format is UPN. */
    private ?string $initiatedByUserPrincipalName = null;
    
    /** @var string|null $managedDeviceId Action target. */
    private ?string $managedDeviceId = null;
    
    /** @var DateTime|null $requestDateTime Time when the action was issued, given in UTC. */
    private ?DateTime $requestDateTime = null;
    
    /** @var string|null $userName [deprecated] Please use InitiatedByUserPrincipalName instead. */
    private ?string $userName = null;
    
    /**
     * Instantiates a new remoteActionAudit and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteActionAudit
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RemoteActionAudit {
        return new RemoteActionAudit();
    }

    /**
     * Gets the action property value. The action name. Possible values are: unknown, factoryReset, removeCompanyData, resetPasscode, remoteLock, enableLostMode, disableLostMode, locateDevice, rebootNow, recoverPasscode, cleanWindowsDevice, logoutSharedAppleDeviceActiveUser, quickScan, fullScan, windowsDefenderUpdateSignatures, factoryResetKeepEnrollmentData, updateDeviceAccount, automaticRedeployment, shutDown, rotateBitLockerKeys, rotateFileVaultKey, getFileVaultKey, setDeviceName, activateDeviceEsim.
     * @return RemoteAction|null
    */
    public function getAction(): ?RemoteAction {
        return $this->action;
    }

    /**
     * Gets the actionState property value. Action state. Possible values are: none, pending, canceled, active, done, failed, notSupported.
     * @return ActionState|null
    */
    public function getActionState(): ?ActionState {
        return $this->actionState;
    }

    /**
     * Gets the deviceDisplayName property value. Intune device name.
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        return $this->deviceDisplayName;
    }

    /**
     * Gets the deviceIMEI property value. IMEI of the device.
     * @return string|null
    */
    public function getDeviceIMEI(): ?string {
        return $this->deviceIMEI;
    }

    /**
     * Gets the deviceOwnerUserPrincipalName property value. Upn of the device owner.
     * @return string|null
    */
    public function getDeviceOwnerUserPrincipalName(): ?string {
        return $this->deviceOwnerUserPrincipalName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'action' => function (self $o, ParseNode $n) { $o->setAction($n->getEnumValue(RemoteAction::class)); },
            'actionState' => function (self $o, ParseNode $n) { $o->setActionState($n->getEnumValue(ActionState::class)); },
            'deviceDisplayName' => function (self $o, ParseNode $n) { $o->setDeviceDisplayName($n->getStringValue()); },
            'deviceIMEI' => function (self $o, ParseNode $n) { $o->setDeviceIMEI($n->getStringValue()); },
            'deviceOwnerUserPrincipalName' => function (self $o, ParseNode $n) { $o->setDeviceOwnerUserPrincipalName($n->getStringValue()); },
            'initiatedByUserPrincipalName' => function (self $o, ParseNode $n) { $o->setInitiatedByUserPrincipalName($n->getStringValue()); },
            'managedDeviceId' => function (self $o, ParseNode $n) { $o->setManagedDeviceId($n->getStringValue()); },
            'requestDateTime' => function (self $o, ParseNode $n) { $o->setRequestDateTime($n->getDateTimeValue()); },
            'userName' => function (self $o, ParseNode $n) { $o->setUserName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the initiatedByUserPrincipalName property value. User who initiated the device action, format is UPN.
     * @return string|null
    */
    public function getInitiatedByUserPrincipalName(): ?string {
        return $this->initiatedByUserPrincipalName;
    }

    /**
     * Gets the managedDeviceId property value. Action target.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the requestDateTime property value. Time when the action was issued, given in UTC.
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        return $this->requestDateTime;
    }

    /**
     * Gets the userName property value. [deprecated] Please use InitiatedByUserPrincipalName instead.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->action);
        $writer->writeEnumValue('actionState', $this->actionState);
        $writer->writeStringValue('deviceDisplayName', $this->deviceDisplayName);
        $writer->writeStringValue('deviceIMEI', $this->deviceIMEI);
        $writer->writeStringValue('deviceOwnerUserPrincipalName', $this->deviceOwnerUserPrincipalName);
        $writer->writeStringValue('initiatedByUserPrincipalName', $this->initiatedByUserPrincipalName);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeDateTimeValue('requestDateTime', $this->requestDateTime);
        $writer->writeStringValue('userName', $this->userName);
    }

    /**
     * Sets the action property value. The action name. Possible values are: unknown, factoryReset, removeCompanyData, resetPasscode, remoteLock, enableLostMode, disableLostMode, locateDevice, rebootNow, recoverPasscode, cleanWindowsDevice, logoutSharedAppleDeviceActiveUser, quickScan, fullScan, windowsDefenderUpdateSignatures, factoryResetKeepEnrollmentData, updateDeviceAccount, automaticRedeployment, shutDown, rotateBitLockerKeys, rotateFileVaultKey, getFileVaultKey, setDeviceName, activateDeviceEsim.
     *  @param RemoteAction|null $value Value to set for the action property.
    */
    public function setAction(?RemoteAction $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the actionState property value. Action state. Possible values are: none, pending, canceled, active, done, failed, notSupported.
     *  @param ActionState|null $value Value to set for the actionState property.
    */
    public function setActionState(?ActionState $value ): void {
        $this->actionState = $value;
    }

    /**
     * Sets the deviceDisplayName property value. Intune device name.
     *  @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value ): void {
        $this->deviceDisplayName = $value;
    }

    /**
     * Sets the deviceIMEI property value. IMEI of the device.
     *  @param string|null $value Value to set for the deviceIMEI property.
    */
    public function setDeviceIMEI(?string $value ): void {
        $this->deviceIMEI = $value;
    }

    /**
     * Sets the deviceOwnerUserPrincipalName property value. Upn of the device owner.
     *  @param string|null $value Value to set for the deviceOwnerUserPrincipalName property.
    */
    public function setDeviceOwnerUserPrincipalName(?string $value ): void {
        $this->deviceOwnerUserPrincipalName = $value;
    }

    /**
     * Sets the initiatedByUserPrincipalName property value. User who initiated the device action, format is UPN.
     *  @param string|null $value Value to set for the initiatedByUserPrincipalName property.
    */
    public function setInitiatedByUserPrincipalName(?string $value ): void {
        $this->initiatedByUserPrincipalName = $value;
    }

    /**
     * Sets the managedDeviceId property value. Action target.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the requestDateTime property value. Time when the action was issued, given in UTC.
     *  @param DateTime|null $value Value to set for the requestDateTime property.
    */
    public function setRequestDateTime(?DateTime $value ): void {
        $this->requestDateTime = $value;
    }

    /**
     * Sets the userName property value. [deprecated] Please use InitiatedByUserPrincipalName instead.
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

}
