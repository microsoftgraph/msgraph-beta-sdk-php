<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OneDriveForBusinessProtectionPolicy extends ProtectionPolicyBase implements Parsable 
{
    /**
     * Instantiates a new OneDriveForBusinessProtectionPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.oneDriveForBusinessProtectionPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OneDriveForBusinessProtectionPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OneDriveForBusinessProtectionPolicy {
        return new OneDriveForBusinessProtectionPolicy();
    }

    /**
     * Gets the driveExclusionUnits property value. The driveExclusionUnits property
     * @return array<DriveExclusionUnit>|null
    */
    public function getDriveExclusionUnits(): ?array {
        $val = $this->getBackingStore()->get('driveExclusionUnits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveExclusionUnit::class);
            /** @var array<DriveExclusionUnit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveExclusionUnits'");
    }

    /**
     * Gets the driveExclusionUnitsBulkAdditionJobs property value. The driveExclusionUnitsBulkAdditionJobs property
     * @return array<DriveExclusionUnitsBulkAdditionJob>|null
    */
    public function getDriveExclusionUnitsBulkAdditionJobs(): ?array {
        $val = $this->getBackingStore()->get('driveExclusionUnitsBulkAdditionJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveExclusionUnitsBulkAdditionJob::class);
            /** @var array<DriveExclusionUnitsBulkAdditionJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveExclusionUnitsBulkAdditionJobs'");
    }

    /**
     * Gets the driveInclusionRules property value. Contains the details of the OneDrive for Work or School protection rule.
     * @return array<DriveProtectionRule>|null
    */
    public function getDriveInclusionRules(): ?array {
        $val = $this->getBackingStore()->get('driveInclusionRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveProtectionRule::class);
            /** @var array<DriveProtectionRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveInclusionRules'");
    }

    /**
     * Gets the driveProtectionUnits property value. Contains the protection units associated with a  OneDrive for Work or School protection policy.
     * @return array<DriveProtectionUnit>|null
    */
    public function getDriveProtectionUnits(): ?array {
        $val = $this->getBackingStore()->get('driveProtectionUnits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveProtectionUnit::class);
            /** @var array<DriveProtectionUnit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveProtectionUnits'");
    }

    /**
     * Gets the driveProtectionUnitsBulkAdditionJobs property value. The driveProtectionUnitsBulkAdditionJobs property
     * @return array<DriveProtectionUnitsBulkAdditionJob>|null
    */
    public function getDriveProtectionUnitsBulkAdditionJobs(): ?array {
        $val = $this->getBackingStore()->get('driveProtectionUnitsBulkAdditionJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriveProtectionUnitsBulkAdditionJob::class);
            /** @var array<DriveProtectionUnitsBulkAdditionJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveProtectionUnitsBulkAdditionJobs'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'driveExclusionUnits' => fn(ParseNode $n) => $o->setDriveExclusionUnits($n->getCollectionOfObjectValues([DriveExclusionUnit::class, 'createFromDiscriminatorValue'])),
            'driveExclusionUnitsBulkAdditionJobs' => fn(ParseNode $n) => $o->setDriveExclusionUnitsBulkAdditionJobs($n->getCollectionOfObjectValues([DriveExclusionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'])),
            'driveInclusionRules' => fn(ParseNode $n) => $o->setDriveInclusionRules($n->getCollectionOfObjectValues([DriveProtectionRule::class, 'createFromDiscriminatorValue'])),
            'driveProtectionUnits' => fn(ParseNode $n) => $o->setDriveProtectionUnits($n->getCollectionOfObjectValues([DriveProtectionUnit::class, 'createFromDiscriminatorValue'])),
            'driveProtectionUnitsBulkAdditionJobs' => fn(ParseNode $n) => $o->setDriveProtectionUnitsBulkAdditionJobs($n->getCollectionOfObjectValues([DriveProtectionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('driveExclusionUnits', $this->getDriveExclusionUnits());
        $writer->writeCollectionOfObjectValues('driveExclusionUnitsBulkAdditionJobs', $this->getDriveExclusionUnitsBulkAdditionJobs());
        $writer->writeCollectionOfObjectValues('driveInclusionRules', $this->getDriveInclusionRules());
        $writer->writeCollectionOfObjectValues('driveProtectionUnits', $this->getDriveProtectionUnits());
        $writer->writeCollectionOfObjectValues('driveProtectionUnitsBulkAdditionJobs', $this->getDriveProtectionUnitsBulkAdditionJobs());
    }

    /**
     * Sets the driveExclusionUnits property value. The driveExclusionUnits property
     * @param array<DriveExclusionUnit>|null $value Value to set for the driveExclusionUnits property.
    */
    public function setDriveExclusionUnits(?array $value): void {
        $this->getBackingStore()->set('driveExclusionUnits', $value);
    }

    /**
     * Sets the driveExclusionUnitsBulkAdditionJobs property value. The driveExclusionUnitsBulkAdditionJobs property
     * @param array<DriveExclusionUnitsBulkAdditionJob>|null $value Value to set for the driveExclusionUnitsBulkAdditionJobs property.
    */
    public function setDriveExclusionUnitsBulkAdditionJobs(?array $value): void {
        $this->getBackingStore()->set('driveExclusionUnitsBulkAdditionJobs', $value);
    }

    /**
     * Sets the driveInclusionRules property value. Contains the details of the OneDrive for Work or School protection rule.
     * @param array<DriveProtectionRule>|null $value Value to set for the driveInclusionRules property.
    */
    public function setDriveInclusionRules(?array $value): void {
        $this->getBackingStore()->set('driveInclusionRules', $value);
    }

    /**
     * Sets the driveProtectionUnits property value. Contains the protection units associated with a  OneDrive for Work or School protection policy.
     * @param array<DriveProtectionUnit>|null $value Value to set for the driveProtectionUnits property.
    */
    public function setDriveProtectionUnits(?array $value): void {
        $this->getBackingStore()->set('driveProtectionUnits', $value);
    }

    /**
     * Sets the driveProtectionUnitsBulkAdditionJobs property value. The driveProtectionUnitsBulkAdditionJobs property
     * @param array<DriveProtectionUnitsBulkAdditionJob>|null $value Value to set for the driveProtectionUnitsBulkAdditionJobs property.
    */
    public function setDriveProtectionUnitsBulkAdditionJobs(?array $value): void {
        $this->getBackingStore()->set('driveProtectionUnitsBulkAdditionJobs', $value);
    }

}
