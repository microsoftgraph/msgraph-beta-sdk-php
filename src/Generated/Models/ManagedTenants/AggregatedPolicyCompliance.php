<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AggregatedPolicyCompliance extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $compliancePolicyId Identifier for the device compliance policy. Optional. Read-only.
    */
    private ?string $compliancePolicyId = null;
    
    /**
     * @var string|null $compliancePolicyName Name of the device compliance policy. Optional. Read-only.
    */
    private ?string $compliancePolicyName = null;
    
    /**
     * @var string|null $compliancePolicyPlatform Platform for the device compliance policy. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, androidAOSP, all. Optional. Read-only.
    */
    private ?string $compliancePolicyPlatform = null;
    
    /**
     * @var string|null $compliancePolicyType The type of compliance policy. Optional. Read-only.
    */
    private ?string $compliancePolicyType = null;
    
    /**
     * @var DateTime|null $lastRefreshedDateTime Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
    */
    private ?DateTime $lastRefreshedDateTime = null;
    
    /**
     * @var int|null $numberOfCompliantDevices The number of devices that are in a compliant status. Optional. Read-only.
    */
    private ?int $numberOfCompliantDevices = null;
    
    /**
     * @var int|null $numberOfErrorDevices The number of devices that are in an error status. Optional. Read-only.
    */
    private ?int $numberOfErrorDevices = null;
    
    /**
     * @var int|null $numberOfNonCompliantDevices The number of device that are in a non-compliant status. Optional. Read-only.
    */
    private ?int $numberOfNonCompliantDevices = null;
    
    /**
     * @var DateTime|null $policyModifiedDateTime The date and time the device policy was last modified. Optional. Read-only.
    */
    private ?DateTime $policyModifiedDateTime = null;
    
    /**
     * @var string|null $tenantDisplayName The display name for the managed tenant. Optional. Read-only.
    */
    private ?string $tenantDisplayName = null;
    
    /**
     * @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new aggregatedPolicyCompliance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AggregatedPolicyCompliance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AggregatedPolicyCompliance {
        return new AggregatedPolicyCompliance();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the compliancePolicyId property value. Identifier for the device compliance policy. Optional. Read-only.
     * @return string|null
    */
    public function getCompliancePolicyId(): ?string {
        return $this->compliancePolicyId;
    }

    /**
     * Gets the compliancePolicyName property value. Name of the device compliance policy. Optional. Read-only.
     * @return string|null
    */
    public function getCompliancePolicyName(): ?string {
        return $this->compliancePolicyName;
    }

    /**
     * Gets the compliancePolicyPlatform property value. Platform for the device compliance policy. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, androidAOSP, all. Optional. Read-only.
     * @return string|null
    */
    public function getCompliancePolicyPlatform(): ?string {
        return $this->compliancePolicyPlatform;
    }

    /**
     * Gets the compliancePolicyType property value. The type of compliance policy. Optional. Read-only.
     * @return string|null
    */
    public function getCompliancePolicyType(): ?string {
        return $this->compliancePolicyType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliancePolicyId' => function (ParseNode $n) use ($o) { $o->setCompliancePolicyId($n->getStringValue()); },
            'compliancePolicyName' => function (ParseNode $n) use ($o) { $o->setCompliancePolicyName($n->getStringValue()); },
            'compliancePolicyPlatform' => function (ParseNode $n) use ($o) { $o->setCompliancePolicyPlatform($n->getStringValue()); },
            'compliancePolicyType' => function (ParseNode $n) use ($o) { $o->setCompliancePolicyType($n->getStringValue()); },
            'lastRefreshedDateTime' => function (ParseNode $n) use ($o) { $o->setLastRefreshedDateTime($n->getDateTimeValue()); },
            'numberOfCompliantDevices' => function (ParseNode $n) use ($o) { $o->setNumberOfCompliantDevices($n->getIntegerValue()); },
            'numberOfErrorDevices' => function (ParseNode $n) use ($o) { $o->setNumberOfErrorDevices($n->getIntegerValue()); },
            'numberOfNonCompliantDevices' => function (ParseNode $n) use ($o) { $o->setNumberOfNonCompliantDevices($n->getIntegerValue()); },
            'policyModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setPolicyModifiedDateTime($n->getDateTimeValue()); },
            'tenantDisplayName' => function (ParseNode $n) use ($o) { $o->setTenantDisplayName($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->lastRefreshedDateTime;
    }

    /**
     * Gets the numberOfCompliantDevices property value. The number of devices that are in a compliant status. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfCompliantDevices(): ?int {
        return $this->numberOfCompliantDevices;
    }

    /**
     * Gets the numberOfErrorDevices property value. The number of devices that are in an error status. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfErrorDevices(): ?int {
        return $this->numberOfErrorDevices;
    }

    /**
     * Gets the numberOfNonCompliantDevices property value. The number of device that are in a non-compliant status. Optional. Read-only.
     * @return int|null
    */
    public function getNumberOfNonCompliantDevices(): ?int {
        return $this->numberOfNonCompliantDevices;
    }

    /**
     * Gets the policyModifiedDateTime property value. The date and time the device policy was last modified. Optional. Read-only.
     * @return DateTime|null
    */
    public function getPolicyModifiedDateTime(): ?DateTime {
        return $this->policyModifiedDateTime;
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        return $this->tenantDisplayName;
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('compliancePolicyId', $this->compliancePolicyId);
        $writer->writeStringValue('compliancePolicyName', $this->compliancePolicyName);
        $writer->writeStringValue('compliancePolicyPlatform', $this->compliancePolicyPlatform);
        $writer->writeStringValue('compliancePolicyType', $this->compliancePolicyType);
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->lastRefreshedDateTime);
        $writer->writeIntegerValue('numberOfCompliantDevices', $this->numberOfCompliantDevices);
        $writer->writeIntegerValue('numberOfErrorDevices', $this->numberOfErrorDevices);
        $writer->writeIntegerValue('numberOfNonCompliantDevices', $this->numberOfNonCompliantDevices);
        $writer->writeDateTimeValue('policyModifiedDateTime', $this->policyModifiedDateTime);
        $writer->writeStringValue('tenantDisplayName', $this->tenantDisplayName);
        $writer->writeStringValue('tenantId', $this->tenantId);
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
     * Sets the compliancePolicyId property value. Identifier for the device compliance policy. Optional. Read-only.
     *  @param string|null $value Value to set for the compliancePolicyId property.
    */
    public function setCompliancePolicyId(?string $value ): void {
        $this->compliancePolicyId = $value;
    }

    /**
     * Sets the compliancePolicyName property value. Name of the device compliance policy. Optional. Read-only.
     *  @param string|null $value Value to set for the compliancePolicyName property.
    */
    public function setCompliancePolicyName(?string $value ): void {
        $this->compliancePolicyName = $value;
    }

    /**
     * Sets the compliancePolicyPlatform property value. Platform for the device compliance policy. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, androidAOSP, all. Optional. Read-only.
     *  @param string|null $value Value to set for the compliancePolicyPlatform property.
    */
    public function setCompliancePolicyPlatform(?string $value ): void {
        $this->compliancePolicyPlatform = $value;
    }

    /**
     * Sets the compliancePolicyType property value. The type of compliance policy. Optional. Read-only.
     *  @param string|null $value Value to set for the compliancePolicyType property.
    */
    public function setCompliancePolicyType(?string $value ): void {
        $this->compliancePolicyType = $value;
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value ): void {
        $this->lastRefreshedDateTime = $value;
    }

    /**
     * Sets the numberOfCompliantDevices property value. The number of devices that are in a compliant status. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfCompliantDevices property.
    */
    public function setNumberOfCompliantDevices(?int $value ): void {
        $this->numberOfCompliantDevices = $value;
    }

    /**
     * Sets the numberOfErrorDevices property value. The number of devices that are in an error status. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfErrorDevices property.
    */
    public function setNumberOfErrorDevices(?int $value ): void {
        $this->numberOfErrorDevices = $value;
    }

    /**
     * Sets the numberOfNonCompliantDevices property value. The number of device that are in a non-compliant status. Optional. Read-only.
     *  @param int|null $value Value to set for the numberOfNonCompliantDevices property.
    */
    public function setNumberOfNonCompliantDevices(?int $value ): void {
        $this->numberOfNonCompliantDevices = $value;
    }

    /**
     * Sets the policyModifiedDateTime property value. The date and time the device policy was last modified. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the policyModifiedDateTime property.
    */
    public function setPolicyModifiedDateTime(?DateTime $value ): void {
        $this->policyModifiedDateTime = $value;
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value ): void {
        $this->tenantDisplayName = $value;
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
