<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantTag extends Entity implements Parsable 
{
    /**
     * @var string|null $createdByUserId The identifier for the account that created the tenant tag. Required. Read-only.
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time when the tenant tag was created. Required. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $deletedDateTime The date and time when the tenant tag was deleted. Required. Read-only.
    */
    private ?DateTime $deletedDateTime = null;
    
    /**
     * @var string|null $description The description for the tenant tag. Optional. Read-only.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name for the tenant tag. Required. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $lastActionByUserId The identifier for the account that lasted on the tenant tag. Optional. Read-only.
    */
    private ?string $lastActionByUserId = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The date and time the last action was performed against the tenant tag. Optional. Read-only.
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var array<TenantInfo>|null $tenants The collection of managed tenants associated with the tenant tag. Optional.
    */
    private ?array $tenants = null;
    
    /**
     * Instantiates a new tenantTag and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.tenantTag');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantTag
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantTag {
        return new TenantTag();
    }

    /**
     * Gets the createdByUserId property value. The identifier for the account that created the tenant tag. Required. Read-only.
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the tenant tag was created. Required. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deletedDateTime property value. The date and time when the tenant tag was deleted. Required. Read-only.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        return $this->deletedDateTime;
    }

    /**
     * Gets the description property value. The description for the tenant tag. Optional. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for the tenant tag. Required. Read-only.
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
            'createdByUserId' => function (ParseNode $n) use ($o) { $o->setCreatedByUserId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deletedDateTime' => function (ParseNode $n) use ($o) { $o->setDeletedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastActionByUserId' => function (ParseNode $n) use ($o) { $o->setLastActionByUserId($n->getStringValue()); },
            'lastActionDateTime' => function (ParseNode $n) use ($o) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'tenants' => function (ParseNode $n) use ($o) { $o->setTenants($n->getCollectionOfObjectValues(array(TenantInfo::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastActionByUserId property value. The identifier for the account that lasted on the tenant tag. Optional. Read-only.
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->lastActionByUserId;
    }

    /**
     * Gets the lastActionDateTime property value. The date and time the last action was performed against the tenant tag. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the tenants property value. The collection of managed tenants associated with the tenant tag. Optional.
     * @return array<TenantInfo>|null
    */
    public function getTenants(): ?array {
        return $this->tenants;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('createdByUserId', $this->createdByUserId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('deletedDateTime', $this->deletedDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('lastActionByUserId', $this->lastActionByUserId);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeCollectionOfObjectValues('tenants', $this->tenants);
    }

    /**
     * Sets the createdByUserId property value. The identifier for the account that created the tenant tag. Required. Read-only.
     *  @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value ): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the tenant tag was created. Required. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deletedDateTime property value. The date and time when the tenant tag was deleted. Required. Read-only.
     *  @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value ): void {
        $this->deletedDateTime = $value;
    }

    /**
     * Sets the description property value. The description for the tenant tag. Optional. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for the tenant tag. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastActionByUserId property value. The identifier for the account that lasted on the tenant tag. Optional. Read-only.
     *  @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value ): void {
        $this->lastActionByUserId = $value;
    }

    /**
     * Sets the lastActionDateTime property value. The date and time the last action was performed against the tenant tag. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the tenants property value. The collection of managed tenants associated with the tenant tag. Optional.
     *  @param array<TenantInfo>|null $value Value to set for the tenants property.
    */
    public function setTenants(?array $value ): void {
        $this->tenants = $value;
    }

}
