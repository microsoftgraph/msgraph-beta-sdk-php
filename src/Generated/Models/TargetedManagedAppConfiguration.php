<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TargetedManagedAppConfiguration extends ManagedAppConfiguration implements Parsable 
{
    /**
     * Instantiates a new TargetedManagedAppConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.targetedManagedAppConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetedManagedAppConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TargetedManagedAppConfiguration {
        return new TargetedManagedAppConfiguration();
    }

    /**
     * Gets the appGroupType property value. Indicates a collection of apps to target which can be one of several pre-defined lists of apps or a manually selected list of apps
     * @return TargetedManagedAppGroupType|null
    */
    public function getAppGroupType(): ?TargetedManagedAppGroupType {
        return $this->getBackingStore()->get('appGroupType');
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        return $this->getBackingStore()->get('apps');
    }

    /**
     * Gets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @return array<TargetedManagedAppPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        return $this->getBackingStore()->get('deployedAppCount');
    }

    /**
     * Gets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @return ManagedAppPolicyDeploymentSummary|null
    */
    public function getDeploymentSummary(): ?ManagedAppPolicyDeploymentSummary {
        return $this->getBackingStore()->get('deploymentSummary');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appGroupType' => fn(ParseNode $n) => $o->setAppGroupType($n->getEnumValue(TargetedManagedAppGroupType::class)),
            'apps' => fn(ParseNode $n) => $o->setApps($n->getCollectionOfObjectValues([ManagedMobileApp::class, 'createFromDiscriminatorValue'])),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([TargetedManagedAppPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'deployedAppCount' => fn(ParseNode $n) => $o->setDeployedAppCount($n->getIntegerValue()),
            'deploymentSummary' => fn(ParseNode $n) => $o->setDeploymentSummary($n->getObjectValue([ManagedAppPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'])),
            'isAssigned' => fn(ParseNode $n) => $o->setIsAssigned($n->getBooleanValue()),
            'targetedAppManagementLevels' => fn(ParseNode $n) => $o->setTargetedAppManagementLevels($n->getEnumValue(AppManagementLevel::class)),
        ]);
    }

    /**
     * Gets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        return $this->getBackingStore()->get('isAssigned');
    }

    /**
     * Gets the targetedAppManagementLevels property value. Management levels for apps
     * @return AppManagementLevel|null
    */
    public function getTargetedAppManagementLevels(): ?AppManagementLevel {
        return $this->getBackingStore()->get('targetedAppManagementLevels');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appGroupType', $this->getAppGroupType());
        $writer->writeCollectionOfObjectValues('apps', $this->getApps());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeIntegerValue('deployedAppCount', $this->getDeployedAppCount());
        $writer->writeObjectValue('deploymentSummary', $this->getDeploymentSummary());
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
     * Sets the apps property value. List of apps to which the policy is deployed.
     * @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value): void {
        $this->getBackingStore()->set('apps', $value);
    }

    /**
     * Sets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @param array<TargetedManagedAppPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @param int|null $value Value to set for the deployedAppCount property.
    */
    public function setDeployedAppCount(?int $value): void {
        $this->getBackingStore()->set('deployedAppCount', $value);
    }

    /**
     * Sets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @param ManagedAppPolicyDeploymentSummary|null $value Value to set for the deploymentSummary property.
    */
    public function setDeploymentSummary(?ManagedAppPolicyDeploymentSummary $value): void {
        $this->getBackingStore()->set('deploymentSummary', $value);
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
