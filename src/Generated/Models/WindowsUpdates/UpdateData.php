<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UpdateData extends Entity implements Parsable 
{
    /**
     * Instantiates a new UpdateData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateData {
        return new UpdateData();
    }

    /**
     * Gets the applicableCatalogSummaries property value. Catalog applicability aggregated across Autopatch policies. Read-only.
     * @return array<ApplicableCatalogSummary>|null
    */
    public function getApplicableCatalogSummaries(): ?array {
        $val = $this->getBackingStore()->get('applicableCatalogSummaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApplicableCatalogSummary::class);
            /** @var array<ApplicableCatalogSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicableCatalogSummaries'");
    }

    /**
     * Gets the deviceProfiles property value. Device profile and Windows servicing information. Read-only.
     * @return array<DeviceProfile>|null
    */
    public function getDeviceProfiles(): ?array {
        $val = $this->getBackingStore()->get('deviceProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceProfile::class);
            /** @var array<DeviceProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceProfiles'");
    }

    /**
     * Gets the drivers property value. Driver updates available in the tenant and their per-device rollout status. Read-only.
     * @return array<DriverUpdateReport>|null
    */
    public function getDrivers(): ?array {
        $val = $this->getBackingStore()->get('drivers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriverUpdateReport::class);
            /** @var array<DriverUpdateReport>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'drivers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableCatalogSummaries' => fn(ParseNode $n) => $o->setApplicableCatalogSummaries($n->getCollectionOfObjectValues([ApplicableCatalogSummary::class, 'createFromDiscriminatorValue'])),
            'deviceProfiles' => fn(ParseNode $n) => $o->setDeviceProfiles($n->getCollectionOfObjectValues([DeviceProfile::class, 'createFromDiscriminatorValue'])),
            'drivers' => fn(ParseNode $n) => $o->setDrivers($n->getCollectionOfObjectValues([DriverUpdateReport::class, 'createFromDiscriminatorValue'])),
            'policyAssignments' => fn(ParseNode $n) => $o->setPolicyAssignments($n->getCollectionOfObjectValues([PolicyAssignment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the policyAssignments property value. Assignments that associate Autopatch policies with devices. Read-only.
     * @return array<PolicyAssignment>|null
    */
    public function getPolicyAssignments(): ?array {
        $val = $this->getBackingStore()->get('policyAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PolicyAssignment::class);
            /** @var array<PolicyAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyAssignments'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('applicableCatalogSummaries', $this->getApplicableCatalogSummaries());
        $writer->writeCollectionOfObjectValues('deviceProfiles', $this->getDeviceProfiles());
        $writer->writeCollectionOfObjectValues('drivers', $this->getDrivers());
        $writer->writeCollectionOfObjectValues('policyAssignments', $this->getPolicyAssignments());
    }

    /**
     * Sets the applicableCatalogSummaries property value. Catalog applicability aggregated across Autopatch policies. Read-only.
     * @param array<ApplicableCatalogSummary>|null $value Value to set for the applicableCatalogSummaries property.
    */
    public function setApplicableCatalogSummaries(?array $value): void {
        $this->getBackingStore()->set('applicableCatalogSummaries', $value);
    }

    /**
     * Sets the deviceProfiles property value. Device profile and Windows servicing information. Read-only.
     * @param array<DeviceProfile>|null $value Value to set for the deviceProfiles property.
    */
    public function setDeviceProfiles(?array $value): void {
        $this->getBackingStore()->set('deviceProfiles', $value);
    }

    /**
     * Sets the drivers property value. Driver updates available in the tenant and their per-device rollout status. Read-only.
     * @param array<DriverUpdateReport>|null $value Value to set for the drivers property.
    */
    public function setDrivers(?array $value): void {
        $this->getBackingStore()->set('drivers', $value);
    }

    /**
     * Sets the policyAssignments property value. Assignments that associate Autopatch policies with devices. Read-only.
     * @param array<PolicyAssignment>|null $value Value to set for the policyAssignments property.
    */
    public function setPolicyAssignments(?array $value): void {
        $this->getBackingStore()->set('policyAssignments', $value);
    }

}
