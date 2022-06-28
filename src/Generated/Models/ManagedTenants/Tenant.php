<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Tenant extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TenantContract|null $contract The relationship details for the tenant with the managing entity.
    */
    private ?TenantContract $contract = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time the tenant was created in the multi-tenant management platform. Optional. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName The display name for the tenant. Required. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime The date and time the tenant was last updated within the multi-tenant management platform. Optional. Read-only.
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
    */
    private ?string $tenantId = null;
    
    /**
     * @var TenantStatusInformation|null $tenantStatusInformation The onboarding status information for the tenant. Optional. Read-only.
    */
    private ?TenantStatusInformation $tenantStatusInformation = null;
    
    /**
     * Instantiates a new tenant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Tenant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Tenant {
        return new Tenant();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contract property value. The relationship details for the tenant with the managing entity.
     * @return TenantContract|null
    */
    public function getContract(): ?TenantContract {
        return $this->contract;
    }

    /**
     * Gets the createdDateTime property value. The date and time the tenant was created in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. The display name for the tenant. Required. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contract' => function (ParseNode $n) use ($o) { $o->setContract($n->getObjectValue(array(TenantContract::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
            'tenantStatusInformation' => function (ParseNode $n) use ($o) { $o->setTenantStatusInformation($n->getObjectValue(array(TenantStatusInformation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The date and time the tenant was last updated within the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the tenantStatusInformation property value. The onboarding status information for the tenant. Optional. Read-only.
     * @return TenantStatusInformation|null
    */
    public function getTenantStatusInformation(): ?TenantStatusInformation {
        return $this->tenantStatusInformation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contract', $this->contract);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeObjectValue('tenantStatusInformation', $this->tenantStatusInformation);
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
     * Sets the contract property value. The relationship details for the tenant with the managing entity.
     *  @param TenantContract|null $value Value to set for the contract property.
    */
    public function setContract(?TenantContract $value ): void {
        $this->contract = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the tenant was created in the multi-tenant management platform. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. The display name for the tenant. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. The date and time the tenant was last updated within the multi-tenant management platform. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the tenantStatusInformation property value. The onboarding status information for the tenant. Optional. Read-only.
     *  @param TenantStatusInformation|null $value Value to set for the tenantStatusInformation property.
    */
    public function setTenantStatusInformation(?TenantStatusInformation $value ): void {
        $this->tenantStatusInformation = $value;
    }

}
