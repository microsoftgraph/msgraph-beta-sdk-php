<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RetireScheduledManagedDevice implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new retireScheduledManagedDevice and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetireScheduledManagedDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetireScheduledManagedDevice {
        return new RetireScheduledManagedDevice();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the complianceState property value. The complianceState property
     * @return ComplianceStatus|null
    */
    public function getComplianceState(): ?ComplianceStatus {
        return $this->getBackingStore()->get('complianceState');
    }

    /**
     * Gets the deviceCompliancePolicyId property value. Device Compliance PolicyId
     * @return string|null
    */
    public function getDeviceCompliancePolicyId(): ?string {
        return $this->getBackingStore()->get('deviceCompliancePolicyId');
    }

    /**
     * Gets the deviceCompliancePolicyName property value. Device Compliance Policy Name
     * @return string|null
    */
    public function getDeviceCompliancePolicyName(): ?string {
        return $this->getBackingStore()->get('deviceCompliancePolicyName');
    }

    /**
     * Gets the deviceType property value. Device type.
     * @return DeviceType|null
    */
    public function getDeviceType(): ?DeviceType {
        return $this->getBackingStore()->get('deviceType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'complianceState' => fn(ParseNode $n) => $o->setComplianceState($n->getEnumValue(ComplianceStatus::class)),
            'deviceCompliancePolicyId' => fn(ParseNode $n) => $o->setDeviceCompliancePolicyId($n->getStringValue()),
            'deviceCompliancePolicyName' => fn(ParseNode $n) => $o->setDeviceCompliancePolicyName($n->getStringValue()),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getEnumValue(DeviceType::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'managedDeviceName' => fn(ParseNode $n) => $o->setManagedDeviceName($n->getStringValue()),
            'managementAgent' => fn(ParseNode $n) => $o->setManagementAgent($n->getEnumValue(ManagementAgentType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ownerType' => fn(ParseNode $n) => $o->setOwnerType($n->getEnumValue(ManagedDeviceOwnerType::class)),
            'retireAfterDateTime' => fn(ParseNode $n) => $o->setRetireAfterDateTime($n->getDateTimeValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the id property value. Key of the entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the managedDeviceId property value. Managed DeviceId
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->getBackingStore()->get('managedDeviceId');
    }

    /**
     * Gets the managedDeviceName property value. Managed Device Name
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->getBackingStore()->get('managedDeviceName');
    }

    /**
     * Gets the managementAgent property value. Management agent type.
     * @return ManagementAgentType|null
    */
    public function getManagementAgent(): ?ManagementAgentType {
        return $this->getBackingStore()->get('managementAgent');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the ownerType property value. Owner type of device.
     * @return ManagedDeviceOwnerType|null
    */
    public function getOwnerType(): ?ManagedDeviceOwnerType {
        return $this->getBackingStore()->get('ownerType');
    }

    /**
     * Gets the retireAfterDateTime property value. Managed Device Retire After DateTime
     * @return DateTime|null
    */
    public function getRetireAfterDateTime(): ?DateTime {
        return $this->getBackingStore()->get('retireAfterDateTime');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('complianceState', $this->getComplianceState());
        $writer->writeStringValue('deviceCompliancePolicyId', $this->getDeviceCompliancePolicyId());
        $writer->writeStringValue('deviceCompliancePolicyName', $this->getDeviceCompliancePolicyName());
        $writer->writeEnumValue('deviceType', $this->getDeviceType());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeStringValue('managedDeviceName', $this->getManagedDeviceName());
        $writer->writeEnumValue('managementAgent', $this->getManagementAgent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('ownerType', $this->getOwnerType());
        $writer->writeDateTimeValue('retireAfterDateTime', $this->getRetireAfterDateTime());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the complianceState property value. The complianceState property
     *  @param ComplianceStatus|null $value Value to set for the complianceState property.
    */
    public function setComplianceState(?ComplianceStatus $value): void {
        $this->getBackingStore()->set('complianceState', $value);
    }

    /**
     * Sets the deviceCompliancePolicyId property value. Device Compliance PolicyId
     *  @param string|null $value Value to set for the deviceCompliancePolicyId property.
    */
    public function setDeviceCompliancePolicyId(?string $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicyId', $value);
    }

    /**
     * Sets the deviceCompliancePolicyName property value. Device Compliance Policy Name
     *  @param string|null $value Value to set for the deviceCompliancePolicyName property.
    */
    public function setDeviceCompliancePolicyName(?string $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicyName', $value);
    }

    /**
     * Sets the deviceType property value. Device type.
     *  @param DeviceType|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?DeviceType $value): void {
        $this->getBackingStore()->set('deviceType', $value);
    }

    /**
     * Sets the id property value. Key of the entity.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the managedDeviceId property value. Managed DeviceId
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the managedDeviceName property value. Managed Device Name
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value): void {
        $this->getBackingStore()->set('managedDeviceName', $value);
    }

    /**
     * Sets the managementAgent property value. Management agent type.
     *  @param ManagementAgentType|null $value Value to set for the managementAgent property.
    */
    public function setManagementAgent(?ManagementAgentType $value): void {
        $this->getBackingStore()->set('managementAgent', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the ownerType property value. Owner type of device.
     *  @param ManagedDeviceOwnerType|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?ManagedDeviceOwnerType $value): void {
        $this->getBackingStore()->set('ownerType', $value);
    }

    /**
     * Sets the retireAfterDateTime property value. Managed Device Retire After DateTime
     *  @param DateTime|null $value Value to set for the retireAfterDateTime property.
    */
    public function setRetireAfterDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('retireAfterDateTime', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

}
