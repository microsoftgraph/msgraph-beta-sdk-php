<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComanagementEligibleDevice extends Entity implements Parsable 
{
    /**
     * Instantiates a new ComanagementEligibleDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComanagementEligibleDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComanagementEligibleDevice {
        return new ComanagementEligibleDevice();
    }

    /**
     * Gets the clientRegistrationStatus property value. Device registration status.
     * @return DeviceRegistrationState|null
    */
    public function getClientRegistrationStatus(): ?DeviceRegistrationState {
        return $this->getBackingStore()->get('clientRegistrationStatus');
    }

    /**
     * Gets the deviceName property value. DeviceName
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * Gets the deviceType property value. Device type.
     * @return DeviceType|null
    */
    public function getDeviceType(): ?DeviceType {
        return $this->getBackingStore()->get('deviceType');
    }

    /**
     * Gets the entitySource property value. EntitySource
     * @return int|null
    */
    public function getEntitySource(): ?int {
        return $this->getBackingStore()->get('entitySource');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientRegistrationStatus' => fn(ParseNode $n) => $o->setClientRegistrationStatus($n->getEnumValue(DeviceRegistrationState::class)),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getEnumValue(DeviceType::class)),
            'entitySource' => fn(ParseNode $n) => $o->setEntitySource($n->getIntegerValue()),
            'managementAgents' => fn(ParseNode $n) => $o->setManagementAgents($n->getEnumValue(ManagementAgentType::class)),
            'managementState' => fn(ParseNode $n) => $o->setManagementState($n->getEnumValue(ManagementState::class)),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'mdmStatus' => fn(ParseNode $n) => $o->setMdmStatus($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'osDescription' => fn(ParseNode $n) => $o->setOsDescription($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'ownerType' => fn(ParseNode $n) => $o->setOwnerType($n->getEnumValue(OwnerType::class)),
            'referenceId' => fn(ParseNode $n) => $o->setReferenceId($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ComanagementEligibleType::class)),
            'upn' => fn(ParseNode $n) => $o->setUpn($n->getStringValue()),
            'userEmail' => fn(ParseNode $n) => $o->setUserEmail($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managementAgents property value. Management agent type.
     * @return ManagementAgentType|null
    */
    public function getManagementAgents(): ?ManagementAgentType {
        return $this->getBackingStore()->get('managementAgents');
    }

    /**
     * Gets the managementState property value. Management state of device in Microsoft Intune.
     * @return ManagementState|null
    */
    public function getManagementState(): ?ManagementState {
        return $this->getBackingStore()->get('managementState');
    }

    /**
     * Gets the manufacturer property value. Manufacturer
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the mdmStatus property value. MDMStatus
     * @return string|null
    */
    public function getMdmStatus(): ?string {
        return $this->getBackingStore()->get('mdmStatus');
    }

    /**
     * Gets the model property value. Model
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Gets the osDescription property value. OSDescription
     * @return string|null
    */
    public function getOsDescription(): ?string {
        return $this->getBackingStore()->get('osDescription');
    }

    /**
     * Gets the osVersion property value. OSVersion
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Gets the ownerType property value. Owner type of device.
     * @return OwnerType|null
    */
    public function getOwnerType(): ?OwnerType {
        return $this->getBackingStore()->get('ownerType');
    }

    /**
     * Gets the referenceId property value. ReferenceId
     * @return string|null
    */
    public function getReferenceId(): ?string {
        return $this->getBackingStore()->get('referenceId');
    }

    /**
     * Gets the serialNumber property value. SerialNumber
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->getBackingStore()->get('serialNumber');
    }

    /**
     * Gets the status property value. The status property
     * @return ComanagementEligibleType|null
    */
    public function getStatus(): ?ComanagementEligibleType {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the upn property value. UPN
     * @return string|null
    */
    public function getUpn(): ?string {
        return $this->getBackingStore()->get('upn');
    }

    /**
     * Gets the userEmail property value. UserEmail
     * @return string|null
    */
    public function getUserEmail(): ?string {
        return $this->getBackingStore()->get('userEmail');
    }

    /**
     * Gets the userId property value. UserId
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userName property value. UserName
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->getBackingStore()->get('userName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('clientRegistrationStatus', $this->getClientRegistrationStatus());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeEnumValue('deviceType', $this->getDeviceType());
        $writer->writeIntegerValue('entitySource', $this->getEntitySource());
        $writer->writeEnumValue('managementAgents', $this->getManagementAgents());
        $writer->writeEnumValue('managementState', $this->getManagementState());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('mdmStatus', $this->getMdmStatus());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeStringValue('osDescription', $this->getOsDescription());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeEnumValue('ownerType', $this->getOwnerType());
        $writer->writeStringValue('referenceId', $this->getReferenceId());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('upn', $this->getUpn());
        $writer->writeStringValue('userEmail', $this->getUserEmail());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userName', $this->getUserName());
    }

    /**
     * Sets the clientRegistrationStatus property value. Device registration status.
     * @param DeviceRegistrationState|null $value Value to set for the clientRegistrationStatus property.
    */
    public function setClientRegistrationStatus(?DeviceRegistrationState $value): void {
        $this->getBackingStore()->set('clientRegistrationStatus', $value);
    }

    /**
     * Sets the deviceName property value. DeviceName
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the deviceType property value. Device type.
     * @param DeviceType|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?DeviceType $value): void {
        $this->getBackingStore()->set('deviceType', $value);
    }

    /**
     * Sets the entitySource property value. EntitySource
     * @param int|null $value Value to set for the entitySource property.
    */
    public function setEntitySource(?int $value): void {
        $this->getBackingStore()->set('entitySource', $value);
    }

    /**
     * Sets the managementAgents property value. Management agent type.
     * @param ManagementAgentType|null $value Value to set for the managementAgents property.
    */
    public function setManagementAgents(?ManagementAgentType $value): void {
        $this->getBackingStore()->set('managementAgents', $value);
    }

    /**
     * Sets the managementState property value. Management state of device in Microsoft Intune.
     * @param ManagementState|null $value Value to set for the managementState property.
    */
    public function setManagementState(?ManagementState $value): void {
        $this->getBackingStore()->set('managementState', $value);
    }

    /**
     * Sets the manufacturer property value. Manufacturer
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the mdmStatus property value. MDMStatus
     * @param string|null $value Value to set for the mdmStatus property.
    */
    public function setMdmStatus(?string $value): void {
        $this->getBackingStore()->set('mdmStatus', $value);
    }

    /**
     * Sets the model property value. Model
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the osDescription property value. OSDescription
     * @param string|null $value Value to set for the osDescription property.
    */
    public function setOsDescription(?string $value): void {
        $this->getBackingStore()->set('osDescription', $value);
    }

    /**
     * Sets the osVersion property value. OSVersion
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the ownerType property value. Owner type of device.
     * @param OwnerType|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?OwnerType $value): void {
        $this->getBackingStore()->set('ownerType', $value);
    }

    /**
     * Sets the referenceId property value. ReferenceId
     * @param string|null $value Value to set for the referenceId property.
    */
    public function setReferenceId(?string $value): void {
        $this->getBackingStore()->set('referenceId', $value);
    }

    /**
     * Sets the serialNumber property value. SerialNumber
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param ComanagementEligibleType|null $value Value to set for the status property.
    */
    public function setStatus(?ComanagementEligibleType $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the upn property value. UPN
     * @param string|null $value Value to set for the upn property.
    */
    public function setUpn(?string $value): void {
        $this->getBackingStore()->set('upn', $value);
    }

    /**
     * Sets the userEmail property value. UserEmail
     * @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value): void {
        $this->getBackingStore()->set('userEmail', $value);
    }

    /**
     * Sets the userId property value. UserId
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userName property value. UserName
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

}
