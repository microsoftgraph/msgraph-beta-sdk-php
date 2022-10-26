<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RetireScheduledManagedDevice implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ComplianceStatus|null $complianceState The complianceState property
    */
    private ?ComplianceStatus $complianceState = null;
    
    /**
     * @var string|null $deviceCompliancePolicyId Device Compliance PolicyId
    */
    private ?string $deviceCompliancePolicyId = null;
    
    /**
     * @var string|null $deviceCompliancePolicyName Device Compliance Policy Name
    */
    private ?string $deviceCompliancePolicyName = null;
    
    /**
     * @var DeviceType|null $deviceType Device type.
    */
    private ?DeviceType $deviceType = null;
    
    /**
     * @var string|null $id Key of the entity.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $managedDeviceId Managed DeviceId
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var string|null $managedDeviceName Managed Device Name
    */
    private ?string $managedDeviceName = null;
    
    /**
     * @var ManagementAgentType|null $managementAgent Management agent type.
    */
    private ?ManagementAgentType $managementAgent = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ManagedDeviceOwnerType|null $ownerType Owner type of device.
    */
    private ?ManagedDeviceOwnerType $ownerType = null;
    
    /**
     * @var DateTime|null $retireAfterDateTime Managed Device Retire After DateTime
    */
    private ?DateTime $retireAfterDateTime = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tags for this Entity instance.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * Instantiates a new retireScheduledManagedDevice and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.retireScheduledManagedDevice');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the complianceState property value. The complianceState property
     * @return ComplianceStatus|null
    */
    public function getComplianceState(): ?ComplianceStatus {
        return $this->complianceState;
    }

    /**
     * Gets the deviceCompliancePolicyId property value. Device Compliance PolicyId
     * @return string|null
    */
    public function getDeviceCompliancePolicyId(): ?string {
        return $this->deviceCompliancePolicyId;
    }

    /**
     * Gets the deviceCompliancePolicyName property value. Device Compliance Policy Name
     * @return string|null
    */
    public function getDeviceCompliancePolicyName(): ?string {
        return $this->deviceCompliancePolicyName;
    }

    /**
     * Gets the deviceType property value. Device type.
     * @return DeviceType|null
    */
    public function getDeviceType(): ?DeviceType {
        return $this->deviceType;
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
        return $this->id;
    }

    /**
     * Gets the managedDeviceId property value. Managed DeviceId
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the managedDeviceName property value. Managed Device Name
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->managedDeviceName;
    }

    /**
     * Gets the managementAgent property value. Management agent type.
     * @return ManagementAgentType|null
    */
    public function getManagementAgent(): ?ManagementAgentType {
        return $this->managementAgent;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the ownerType property value. Owner type of device.
     * @return ManagedDeviceOwnerType|null
    */
    public function getOwnerType(): ?ManagedDeviceOwnerType {
        return $this->ownerType;
    }

    /**
     * Gets the retireAfterDateTime property value. Managed Device Retire After DateTime
     * @return DateTime|null
    */
    public function getRetireAfterDateTime(): ?DateTime {
        return $this->retireAfterDateTime;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('complianceState', $this->complianceState);
        $writer->writeStringValue('deviceCompliancePolicyId', $this->deviceCompliancePolicyId);
        $writer->writeStringValue('deviceCompliancePolicyName', $this->deviceCompliancePolicyName);
        $writer->writeEnumValue('deviceType', $this->deviceType);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('managedDeviceName', $this->managedDeviceName);
        $writer->writeEnumValue('managementAgent', $this->managementAgent);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('ownerType', $this->ownerType);
        $writer->writeDateTimeValue('retireAfterDateTime', $this->retireAfterDateTime);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the complianceState property value. The complianceState property
     *  @param ComplianceStatus|null $value Value to set for the complianceState property.
    */
    public function setComplianceState(?ComplianceStatus $value ): void {
        $this->complianceState = $value;
    }

    /**
     * Sets the deviceCompliancePolicyId property value. Device Compliance PolicyId
     *  @param string|null $value Value to set for the deviceCompliancePolicyId property.
    */
    public function setDeviceCompliancePolicyId(?string $value ): void {
        $this->deviceCompliancePolicyId = $value;
    }

    /**
     * Sets the deviceCompliancePolicyName property value. Device Compliance Policy Name
     *  @param string|null $value Value to set for the deviceCompliancePolicyName property.
    */
    public function setDeviceCompliancePolicyName(?string $value ): void {
        $this->deviceCompliancePolicyName = $value;
    }

    /**
     * Sets the deviceType property value. Device type.
     *  @param DeviceType|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?DeviceType $value ): void {
        $this->deviceType = $value;
    }

    /**
     * Sets the id property value. Key of the entity.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the managedDeviceId property value. Managed DeviceId
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the managedDeviceName property value. Managed Device Name
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value ): void {
        $this->managedDeviceName = $value;
    }

    /**
     * Sets the managementAgent property value. Management agent type.
     *  @param ManagementAgentType|null $value Value to set for the managementAgent property.
    */
    public function setManagementAgent(?ManagementAgentType $value ): void {
        $this->managementAgent = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the ownerType property value. Owner type of device.
     *  @param ManagedDeviceOwnerType|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?ManagedDeviceOwnerType $value ): void {
        $this->ownerType = $value;
    }

    /**
     * Sets the retireAfterDateTime property value. Managed Device Retire After DateTime
     *  @param DateTime|null $value Value to set for the retireAfterDateTime property.
    */
    public function setRetireAfterDateTime(?DateTime $value ): void {
        $this->retireAfterDateTime = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

}
