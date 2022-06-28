<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TargetedManagedAppConfiguration extends ManagedAppConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TargetedManagedAppGroupType|null $appGroupType Public Apps selection: group or individual
    */
    private ?TargetedManagedAppGroupType $appGroupType = null;
    
    /**
     * @var array<ManagedMobileApp>|null $apps List of apps to which the policy is deployed.
    */
    private ?array $apps = null;
    
    /**
     * @var array<TargetedManagedAppPolicyAssignment>|null $assignments Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
    */
    private ?array $assignments = null;
    
    /**
     * @var int|null $deployedAppCount Count of apps to which the current policy is deployed.
    */
    private ?int $deployedAppCount = null;
    
    /**
     * @var ManagedAppPolicyDeploymentSummary|null $deploymentSummary Navigation property to deployment summary of the configuration.
    */
    private ?ManagedAppPolicyDeploymentSummary $deploymentSummary = null;
    
    /**
     * @var bool|null $isAssigned Indicates if the policy is deployed to any inclusion groups or not.
    */
    private ?bool $isAssigned = null;
    
    /**
     * Instantiates a new TargetedManagedAppConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appGroupType property value. Public Apps selection: group or individual
     * @return TargetedManagedAppGroupType|null
    */
    public function getAppGroupType(): ?TargetedManagedAppGroupType {
        return $this->appGroupType;
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        return $this->apps;
    }

    /**
     * Gets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @return array<TargetedManagedAppPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        return $this->deployedAppCount;
    }

    /**
     * Gets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @return ManagedAppPolicyDeploymentSummary|null
    */
    public function getDeploymentSummary(): ?ManagedAppPolicyDeploymentSummary {
        return $this->deploymentSummary;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appGroupType' => function (ParseNode $n) use ($o) { $o->setAppGroupType($n->getEnumValue(TargetedManagedAppGroupType::class)); },
            'apps' => function (ParseNode $n) use ($o) { $o->setApps($n->getCollectionOfObjectValues(array(ManagedMobileApp::class, 'createFromDiscriminatorValue'))); },
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(TargetedManagedAppPolicyAssignment::class, 'createFromDiscriminatorValue'))); },
            'deployedAppCount' => function (ParseNode $n) use ($o) { $o->setDeployedAppCount($n->getIntegerValue()); },
            'deploymentSummary' => function (ParseNode $n) use ($o) { $o->setDeploymentSummary($n->getObjectValue(array(ManagedAppPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'))); },
            'isAssigned' => function (ParseNode $n) use ($o) { $o->setIsAssigned($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        return $this->isAssigned;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appGroupType', $this->appGroupType);
        $writer->writeCollectionOfObjectValues('apps', $this->apps);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeIntegerValue('deployedAppCount', $this->deployedAppCount);
        $writer->writeObjectValue('deploymentSummary', $this->deploymentSummary);
        $writer->writeBooleanValue('isAssigned', $this->isAssigned);
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
     * Sets the appGroupType property value. Public Apps selection: group or individual
     *  @param TargetedManagedAppGroupType|null $value Value to set for the appGroupType property.
    */
    public function setAppGroupType(?TargetedManagedAppGroupType $value ): void {
        $this->appGroupType = $value;
    }

    /**
     * Sets the apps property value. List of apps to which the policy is deployed.
     *  @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value ): void {
        $this->apps = $value;
    }

    /**
     * Sets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     *  @param array<TargetedManagedAppPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     *  @param int|null $value Value to set for the deployedAppCount property.
    */
    public function setDeployedAppCount(?int $value ): void {
        $this->deployedAppCount = $value;
    }

    /**
     * Sets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     *  @param ManagedAppPolicyDeploymentSummary|null $value Value to set for the deploymentSummary property.
    */
    public function setDeploymentSummary(?ManagedAppPolicyDeploymentSummary $value ): void {
        $this->deploymentSummary = $value;
    }

    /**
     * Sets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     *  @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value ): void {
        $this->isAssigned = $value;
    }

}
