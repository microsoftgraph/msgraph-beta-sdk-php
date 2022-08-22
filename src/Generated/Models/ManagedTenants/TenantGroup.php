<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantGroup extends Entity implements Parsable 
{
    /**
     * @var bool|null $allTenantsIncluded A flag indicating whether all managed tenant are included in the tenant group. Required. Read-only.
    */
    private ?bool $allTenantsIncluded = null;
    
    /**
     * @var string|null $displayName The display name for the tenant group. Optional. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<ManagementActionInfo>|null $managementActions The collection of management action associated with the tenant group. Optional. Read-only.
    */
    private ?array $managementActions = null;
    
    /**
     * @var array<ManagementIntentInfo>|null $managementIntents The collection of management intents associated with the tenant group. Optional. Read-only.
    */
    private ?array $managementIntents = null;
    
    /**
     * @var array<string>|null $tenantIds The collection of managed tenant identifiers include in the tenant group. Optional. Read-only.
    */
    private ?array $tenantIds = null;
    
    /**
     * Instantiates a new tenantGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.tenantGroup');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantGroup {
        return new TenantGroup();
    }

    /**
     * Gets the allTenantsIncluded property value. A flag indicating whether all managed tenant are included in the tenant group. Required. Read-only.
     * @return bool|null
    */
    public function getAllTenantsIncluded(): ?bool {
        return $this->allTenantsIncluded;
    }

    /**
     * Gets the displayName property value. The display name for the tenant group. Optional. Read-only.
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
            'allTenantsIncluded' => function (ParseNode $n) use ($o) { $o->setAllTenantsIncluded($n->getBooleanValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'managementActions' => function (ParseNode $n) use ($o) { $o->setManagementActions($n->getCollectionOfObjectValues(array(ManagementActionInfo::class, 'createFromDiscriminatorValue'))); },
            'managementIntents' => function (ParseNode $n) use ($o) { $o->setManagementIntents($n->getCollectionOfObjectValues(array(ManagementIntentInfo::class, 'createFromDiscriminatorValue'))); },
            'tenantIds' => function (ParseNode $n) use ($o) { $o->setTenantIds($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the managementActions property value. The collection of management action associated with the tenant group. Optional. Read-only.
     * @return array<ManagementActionInfo>|null
    */
    public function getManagementActions(): ?array {
        return $this->managementActions;
    }

    /**
     * Gets the managementIntents property value. The collection of management intents associated with the tenant group. Optional. Read-only.
     * @return array<ManagementIntentInfo>|null
    */
    public function getManagementIntents(): ?array {
        return $this->managementIntents;
    }

    /**
     * Gets the tenantIds property value. The collection of managed tenant identifiers include in the tenant group. Optional. Read-only.
     * @return array<string>|null
    */
    public function getTenantIds(): ?array {
        return $this->tenantIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allTenantsIncluded', $this->allTenantsIncluded);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('managementActions', $this->managementActions);
        $writer->writeCollectionOfObjectValues('managementIntents', $this->managementIntents);
        $writer->writeCollectionOfPrimitiveValues('tenantIds', $this->tenantIds);
    }

    /**
     * Sets the allTenantsIncluded property value. A flag indicating whether all managed tenant are included in the tenant group. Required. Read-only.
     *  @param bool|null $value Value to set for the allTenantsIncluded property.
    */
    public function setAllTenantsIncluded(?bool $value ): void {
        $this->allTenantsIncluded = $value;
    }

    /**
     * Sets the displayName property value. The display name for the tenant group. Optional. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the managementActions property value. The collection of management action associated with the tenant group. Optional. Read-only.
     *  @param array<ManagementActionInfo>|null $value Value to set for the managementActions property.
    */
    public function setManagementActions(?array $value ): void {
        $this->managementActions = $value;
    }

    /**
     * Sets the managementIntents property value. The collection of management intents associated with the tenant group. Optional. Read-only.
     *  @param array<ManagementIntentInfo>|null $value Value to set for the managementIntents property.
    */
    public function setManagementIntents(?array $value ): void {
        $this->managementIntents = $value;
    }

    /**
     * Sets the tenantIds property value. The collection of managed tenant identifiers include in the tenant group. Optional. Read-only.
     *  @param array<string>|null $value Value to set for the tenantIds property.
    */
    public function setTenantIds(?array $value ): void {
        $this->tenantIds = $value;
    }

}
