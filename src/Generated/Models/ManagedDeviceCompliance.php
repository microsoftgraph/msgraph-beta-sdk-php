<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceCompliance extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $complianceStatus Compliance state of the device. This property is read-only. Possible values are: unknown, compliant, noncompliant, conflict, error, inGracePeriod, configManager. Optional. Read-only.
    */
    private ?string $complianceStatus = null;
    
    /**
     * @var string|null $deviceType Platform of the device. This property is read-only. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, windows10x, androidnGMS, chromeOS, linux, blackberry, palm, unknown, cloudPC.  Optional. Read-only.
    */
    private ?string $deviceType = null;
    
    /**
     * @var DateTime|null $inGracePeriodUntilDateTime The date and time when the grace period will expire. Optional. Read-only.
    */
    private ?DateTime $inGracePeriodUntilDateTime = null;
    
    /**
     * @var DateTime|null $lastRefreshedDateTime Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
    */
    private ?DateTime $lastRefreshedDateTime = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime The date and time that the device last completed a successful sync with Microsoft Endpoint Manager. Optional. Read-only.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var string|null $managedDeviceId The identifier for the managed device in Microsoft Endpoint Manager. Optional. Read-only.
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var string|null $managedDeviceName The display name for the managed device. Optional. Read-only.
    */
    private ?string $managedDeviceName = null;
    
    /**
     * @var string|null $manufacturer The manufacture for the device. Optional. Read-only.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model The model for the device. Optional. Read-only.
    */
    private ?string $model = null;
    
    /**
     * @var string|null $osDescription The description of the operating system for the managed device. Optional. Read-only.
    */
    private ?string $osDescription = null;
    
    /**
     * @var string|null $osVersion The version of the operating system for the managed device. Optional. Read-only.
    */
    private ?string $osVersion = null;
    
    /**
     * @var string|null $ownerType The type of owner for the managed device. Optional. Read-only.
    */
    private ?string $ownerType = null;
    
    /**
     * @var string|null $tenantDisplayName The display name for the managed tenant. Optional. Read-only.
    */
    private ?string $tenantDisplayName = null;
    
    /**
     * @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new ManagedDeviceCompliance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceCompliance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceCompliance {
        return new ManagedDeviceCompliance();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the complianceStatus property value. Compliance state of the device. This property is read-only. Possible values are: unknown, compliant, noncompliant, conflict, error, inGracePeriod, configManager. Optional. Read-only.
     * @return string|null
    */
    public function getComplianceStatus(): ?string {
        return $this->complianceStatus;
    }

    /**
     * Gets the deviceType property value. Platform of the device. This property is read-only. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, windows10x, androidnGMS, chromeOS, linux, blackberry, palm, unknown, cloudPC.  Optional. Read-only.
     * @return string|null
    */
    public function getDeviceType(): ?string {
        return $this->deviceType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'complianceStatus' => function (ParseNode $n) use ($o) { $o->setComplianceStatus($n->getStringValue()); },
            'deviceType' => function (ParseNode $n) use ($o) { $o->setDeviceType($n->getStringValue()); },
            'inGracePeriodUntilDateTime' => function (ParseNode $n) use ($o) { $o->setInGracePeriodUntilDateTime($n->getDateTimeValue()); },
            'lastRefreshedDateTime' => function (ParseNode $n) use ($o) { $o->setLastRefreshedDateTime($n->getDateTimeValue()); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'managedDeviceId' => function (ParseNode $n) use ($o) { $o->setManagedDeviceId($n->getStringValue()); },
            'managedDeviceName' => function (ParseNode $n) use ($o) { $o->setManagedDeviceName($n->getStringValue()); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (ParseNode $n) use ($o) { $o->setModel($n->getStringValue()); },
            'osDescription' => function (ParseNode $n) use ($o) { $o->setOsDescription($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
            'ownerType' => function (ParseNode $n) use ($o) { $o->setOwnerType($n->getStringValue()); },
            'tenantDisplayName' => function (ParseNode $n) use ($o) { $o->setTenantDisplayName($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the inGracePeriodUntilDateTime property value. The date and time when the grace period will expire. Optional. Read-only.
     * @return DateTime|null
    */
    public function getInGracePeriodUntilDateTime(): ?DateTime {
        return $this->inGracePeriodUntilDateTime;
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->lastRefreshedDateTime;
    }

    /**
     * Gets the lastSyncDateTime property value. The date and time that the device last completed a successful sync with Microsoft Endpoint Manager. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the managedDeviceId property value. The identifier for the managed device in Microsoft Endpoint Manager. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the managedDeviceName property value. The display name for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->managedDeviceName;
    }

    /**
     * Gets the manufacturer property value. The manufacture for the device. Optional. Read-only.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. The model for the device. Optional. Read-only.
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the osDescription property value. The description of the operating system for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getOsDescription(): ?string {
        return $this->osDescription;
    }

    /**
     * Gets the osVersion property value. The version of the operating system for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the ownerType property value. The type of owner for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getOwnerType(): ?string {
        return $this->ownerType;
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
        $writer->writeStringValue('complianceStatus', $this->complianceStatus);
        $writer->writeStringValue('deviceType', $this->deviceType);
        $writer->writeDateTimeValue('inGracePeriodUntilDateTime', $this->inGracePeriodUntilDateTime);
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->lastRefreshedDateTime);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('managedDeviceName', $this->managedDeviceName);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeStringValue('osDescription', $this->osDescription);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeStringValue('ownerType', $this->ownerType);
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
     * Sets the complianceStatus property value. Compliance state of the device. This property is read-only. Possible values are: unknown, compliant, noncompliant, conflict, error, inGracePeriod, configManager. Optional. Read-only.
     *  @param string|null $value Value to set for the complianceStatus property.
    */
    public function setComplianceStatus(?string $value ): void {
        $this->complianceStatus = $value;
    }

    /**
     * Sets the deviceType property value. Platform of the device. This property is read-only. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, windows10x, androidnGMS, chromeOS, linux, blackberry, palm, unknown, cloudPC.  Optional. Read-only.
     *  @param string|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?string $value ): void {
        $this->deviceType = $value;
    }

    /**
     * Sets the inGracePeriodUntilDateTime property value. The date and time when the grace period will expire. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the inGracePeriodUntilDateTime property.
    */
    public function setInGracePeriodUntilDateTime(?DateTime $value ): void {
        $this->inGracePeriodUntilDateTime = $value;
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value ): void {
        $this->lastRefreshedDateTime = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. The date and time that the device last completed a successful sync with Microsoft Endpoint Manager. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the managedDeviceId property value. The identifier for the managed device in Microsoft Endpoint Manager. Optional. Read-only.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the managedDeviceName property value. The display name for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value ): void {
        $this->managedDeviceName = $value;
    }

    /**
     * Sets the manufacturer property value. The manufacture for the device. Optional. Read-only.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. The model for the device. Optional. Read-only.
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the osDescription property value. The description of the operating system for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the osDescription property.
    */
    public function setOsDescription(?string $value ): void {
        $this->osDescription = $value;
    }

    /**
     * Sets the osVersion property value. The version of the operating system for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the ownerType property value. The type of owner for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?string $value ): void {
        $this->ownerType = $value;
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
