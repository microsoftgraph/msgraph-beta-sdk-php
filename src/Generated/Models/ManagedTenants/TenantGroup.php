<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TenantGroup extends Entity implements Parsable 
{
    /**
     * Instantiates a new tenantGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('allTenantsIncluded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allTenantsIncluded'");
    }

    /**
     * Gets the displayName property value. The display name for the tenant group. Optional. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allTenantsIncluded' => fn(ParseNode $n) => $o->setAllTenantsIncluded($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'managementActions' => fn(ParseNode $n) => $o->setManagementActions($n->getCollectionOfObjectValues([ManagementActionInfo::class, 'createFromDiscriminatorValue'])),
            'managementIntents' => fn(ParseNode $n) => $o->setManagementIntents($n->getCollectionOfObjectValues([ManagementIntentInfo::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tenantIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTenantIds($val);
            },
        ]);
    }

    /**
     * Gets the managementActions property value. The collection of management action associated with the tenant group. Optional. Read-only.
     * @return array<ManagementActionInfo>|null
    */
    public function getManagementActions(): ?array {
        $val = $this->getBackingStore()->get('managementActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagementActionInfo::class);
            /** @var array<ManagementActionInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementActions'");
    }

    /**
     * Gets the managementIntents property value. The collection of management intents associated with the tenant group. Optional. Read-only.
     * @return array<ManagementIntentInfo>|null
    */
    public function getManagementIntents(): ?array {
        $val = $this->getBackingStore()->get('managementIntents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagementIntentInfo::class);
            /** @var array<ManagementIntentInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementIntents'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the tenantIds property value. The collection of managed tenant identifiers include in the tenant group. Optional. Read-only.
     * @return array<string>|null
    */
    public function getTenantIds(): ?array {
        $val = $this->getBackingStore()->get('tenantIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allTenantsIncluded', $this->getAllTenantsIncluded());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('managementActions', $this->getManagementActions());
        $writer->writeCollectionOfObjectValues('managementIntents', $this->getManagementIntents());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('tenantIds', $this->getTenantIds());
    }

    /**
     * Sets the allTenantsIncluded property value. A flag indicating whether all managed tenant are included in the tenant group. Required. Read-only.
     * @param bool|null $value Value to set for the allTenantsIncluded property.
    */
    public function setAllTenantsIncluded(?bool $value): void {
        $this->getBackingStore()->set('allTenantsIncluded', $value);
    }

    /**
     * Sets the displayName property value. The display name for the tenant group. Optional. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the managementActions property value. The collection of management action associated with the tenant group. Optional. Read-only.
     * @param array<ManagementActionInfo>|null $value Value to set for the managementActions property.
    */
    public function setManagementActions(?array $value): void {
        $this->getBackingStore()->set('managementActions', $value);
    }

    /**
     * Sets the managementIntents property value. The collection of management intents associated with the tenant group. Optional. Read-only.
     * @param array<ManagementIntentInfo>|null $value Value to set for the managementIntents property.
    */
    public function setManagementIntents(?array $value): void {
        $this->getBackingStore()->set('managementIntents', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tenantIds property value. The collection of managed tenant identifiers include in the tenant group. Optional. Read-only.
     * @param array<string>|null $value Value to set for the tenantIds property.
    */
    public function setTenantIds(?array $value): void {
        $this->getBackingStore()->set('tenantIds', $value);
    }

}
