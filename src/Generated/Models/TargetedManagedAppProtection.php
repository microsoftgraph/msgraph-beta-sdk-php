<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TargetedManagedAppProtection extends ManagedAppProtection implements Parsable 
{
    /**
     * Instantiates a new TargetedManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.targetedManagedAppProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetedManagedAppProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TargetedManagedAppProtection {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidManagedAppProtection': return new AndroidManagedAppProtection();
                case '#microsoft.graph.iosManagedAppProtection': return new IosManagedAppProtection();
            }
        }
        return new TargetedManagedAppProtection();
    }

    /**
     * Gets the appGroupType property value. Indicates a collection of apps to target which can be one of several pre-defined lists of apps or a manually selected list of apps
     * @return TargetedManagedAppGroupType|null
    */
    public function getAppGroupType(): ?TargetedManagedAppGroupType {
        $val = $this->getBackingStore()->get('appGroupType');
        if (is_null($val) || $val instanceof TargetedManagedAppGroupType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appGroupType'");
    }

    /**
     * Gets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @return array<TargetedManagedAppPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TargetedManagedAppPolicyAssignment::class);
            /** @var array<TargetedManagedAppPolicyAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appGroupType' => fn(ParseNode $n) => $o->setAppGroupType($n->getEnumValue(TargetedManagedAppGroupType::class)),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([TargetedManagedAppPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'isAssigned' => fn(ParseNode $n) => $o->setIsAssigned($n->getBooleanValue()),
            'targetedAppManagementLevels' => fn(ParseNode $n) => $o->setTargetedAppManagementLevels($n->getEnumValue(AppManagementLevel::class)),
        ]);
    }

    /**
     * Gets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        $val = $this->getBackingStore()->get('isAssigned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAssigned'");
    }

    /**
     * Gets the targetedAppManagementLevels property value. Management levels for apps
     * @return AppManagementLevel|null
    */
    public function getTargetedAppManagementLevels(): ?AppManagementLevel {
        $val = $this->getBackingStore()->get('targetedAppManagementLevels');
        if (is_null($val) || $val instanceof AppManagementLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetedAppManagementLevels'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appGroupType', $this->getAppGroupType());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeBooleanValue('isAssigned', $this->getIsAssigned());
        $writer->writeEnumValue('targetedAppManagementLevels', $this->getTargetedAppManagementLevels());
    }

    /**
     * Sets the appGroupType property value. Indicates a collection of apps to target which can be one of several pre-defined lists of apps or a manually selected list of apps
     * @param TargetedManagedAppGroupType|null $value Value to set for the appGroupType property.
    */
    public function setAppGroupType(?TargetedManagedAppGroupType $value): void {
        $this->getBackingStore()->set('appGroupType', $value);
    }

    /**
     * Sets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @param array<TargetedManagedAppPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     * @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value): void {
        $this->getBackingStore()->set('isAssigned', $value);
    }

    /**
     * Sets the targetedAppManagementLevels property value. Management levels for apps
     * @param AppManagementLevel|null $value Value to set for the targetedAppManagementLevels property.
    */
    public function setTargetedAppManagementLevels(?AppManagementLevel $value): void {
        $this->getBackingStore()->set('targetedAppManagementLevels', $value);
    }

}
