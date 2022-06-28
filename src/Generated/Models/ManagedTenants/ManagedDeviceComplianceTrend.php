<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceComplianceTrend extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $compliantDeviceCount The number of devices with a compliant status. Required. Read-only.
    */
    private ?int $compliantDeviceCount = null;
    
    /**
     * @var int|null $configManagerDeviceCount The number of devices manged by Configuration Manager. Required. Read-only.
    */
    private ?int $configManagerDeviceCount = null;
    
    /**
     * @var string|null $countDateTime The date and time compliance snapshot was performed. Required. Read-only.
    */
    private ?string $countDateTime = null;
    
    /**
     * @var int|null $errorDeviceCount The number of devices with an error status. Required. Read-only.
    */
    private ?int $errorDeviceCount = null;
    
    /**
     * @var int|null $inGracePeriodDeviceCount The number of devices that are in a grace period status. Required. Read-only.
    */
    private ?int $inGracePeriodDeviceCount = null;
    
    /**
     * @var int|null $noncompliantDeviceCount The number of devices that are in a non-compliant status. Required. Read-only.
    */
    private ?int $noncompliantDeviceCount = null;
    
    /**
     * @var string|null $tenantDisplayName The display name for the managed tenant. Optional. Read-only.
    */
    private ?string $tenantDisplayName = null;
    
    /**
     * @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
    */
    private ?string $tenantId = null;
    
    /**
     * @var int|null $unknownDeviceCount The number of devices in an unknown status. Required. Read-only.
    */
    private ?int $unknownDeviceCount = null;
    
    /**
     * Instantiates a new managedDeviceComplianceTrend and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceComplianceTrend
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceComplianceTrend {
        return new ManagedDeviceComplianceTrend();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the compliantDeviceCount property value. The number of devices with a compliant status. Required. Read-only.
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        return $this->compliantDeviceCount;
    }

    /**
     * Gets the configManagerDeviceCount property value. The number of devices manged by Configuration Manager. Required. Read-only.
     * @return int|null
    */
    public function getConfigManagerDeviceCount(): ?int {
        return $this->configManagerDeviceCount;
    }

    /**
     * Gets the countDateTime property value. The date and time compliance snapshot was performed. Required. Read-only.
     * @return string|null
    */
    public function getCountDateTime(): ?string {
        return $this->countDateTime;
    }

    /**
     * Gets the errorDeviceCount property value. The number of devices with an error status. Required. Read-only.
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        return $this->errorDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantDeviceCount' => function (ParseNode $n) use ($o) { $o->setCompliantDeviceCount($n->getIntegerValue()); },
            'configManagerDeviceCount' => function (ParseNode $n) use ($o) { $o->setConfigManagerDeviceCount($n->getIntegerValue()); },
            'countDateTime' => function (ParseNode $n) use ($o) { $o->setCountDateTime($n->getStringValue()); },
            'errorDeviceCount' => function (ParseNode $n) use ($o) { $o->setErrorDeviceCount($n->getIntegerValue()); },
            'inGracePeriodDeviceCount' => function (ParseNode $n) use ($o) { $o->setInGracePeriodDeviceCount($n->getIntegerValue()); },
            'noncompliantDeviceCount' => function (ParseNode $n) use ($o) { $o->setNoncompliantDeviceCount($n->getIntegerValue()); },
            'tenantDisplayName' => function (ParseNode $n) use ($o) { $o->setTenantDisplayName($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
            'unknownDeviceCount' => function (ParseNode $n) use ($o) { $o->setUnknownDeviceCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the inGracePeriodDeviceCount property value. The number of devices that are in a grace period status. Required. Read-only.
     * @return int|null
    */
    public function getInGracePeriodDeviceCount(): ?int {
        return $this->inGracePeriodDeviceCount;
    }

    /**
     * Gets the noncompliantDeviceCount property value. The number of devices that are in a non-compliant status. Required. Read-only.
     * @return int|null
    */
    public function getNoncompliantDeviceCount(): ?int {
        return $this->noncompliantDeviceCount;
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
     * Gets the unknownDeviceCount property value. The number of devices in an unknown status. Required. Read-only.
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        return $this->unknownDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantDeviceCount', $this->compliantDeviceCount);
        $writer->writeIntegerValue('configManagerDeviceCount', $this->configManagerDeviceCount);
        $writer->writeStringValue('countDateTime', $this->countDateTime);
        $writer->writeIntegerValue('errorDeviceCount', $this->errorDeviceCount);
        $writer->writeIntegerValue('inGracePeriodDeviceCount', $this->inGracePeriodDeviceCount);
        $writer->writeIntegerValue('noncompliantDeviceCount', $this->noncompliantDeviceCount);
        $writer->writeStringValue('tenantDisplayName', $this->tenantDisplayName);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeIntegerValue('unknownDeviceCount', $this->unknownDeviceCount);
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
     * Sets the compliantDeviceCount property value. The number of devices with a compliant status. Required. Read-only.
     *  @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value ): void {
        $this->compliantDeviceCount = $value;
    }

    /**
     * Sets the configManagerDeviceCount property value. The number of devices manged by Configuration Manager. Required. Read-only.
     *  @param int|null $value Value to set for the configManagerDeviceCount property.
    */
    public function setConfigManagerDeviceCount(?int $value ): void {
        $this->configManagerDeviceCount = $value;
    }

    /**
     * Sets the countDateTime property value. The date and time compliance snapshot was performed. Required. Read-only.
     *  @param string|null $value Value to set for the countDateTime property.
    */
    public function setCountDateTime(?string $value ): void {
        $this->countDateTime = $value;
    }

    /**
     * Sets the errorDeviceCount property value. The number of devices with an error status. Required. Read-only.
     *  @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value ): void {
        $this->errorDeviceCount = $value;
    }

    /**
     * Sets the inGracePeriodDeviceCount property value. The number of devices that are in a grace period status. Required. Read-only.
     *  @param int|null $value Value to set for the inGracePeriodDeviceCount property.
    */
    public function setInGracePeriodDeviceCount(?int $value ): void {
        $this->inGracePeriodDeviceCount = $value;
    }

    /**
     * Sets the noncompliantDeviceCount property value. The number of devices that are in a non-compliant status. Required. Read-only.
     *  @param int|null $value Value to set for the noncompliantDeviceCount property.
    */
    public function setNoncompliantDeviceCount(?int $value ): void {
        $this->noncompliantDeviceCount = $value;
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

    /**
     * Sets the unknownDeviceCount property value. The number of devices in an unknown status. Required. Read-only.
     *  @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value ): void {
        $this->unknownDeviceCount = $value;
    }

}
