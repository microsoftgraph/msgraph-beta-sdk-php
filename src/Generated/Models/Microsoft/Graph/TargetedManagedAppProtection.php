<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TargetedManagedAppProtection extends ManagedAppProtection 
{
    /** @var TargetedManagedAppGroupType|null $appGroupType Public Apps selection: group or individual. Possible values are: selectedPublicApps, allCoreMicrosoftApps, allMicrosoftApps, allApps. */
    private ?TargetedManagedAppGroupType $appGroupType = null;
    
    /** @var array<TargetedManagedAppPolicyAssignment>|null $assignments Navigation property to list of inclusion and exclusion groups to which the policy is deployed. */
    private ?array $assignments = null;
    
    /** @var bool|null $isAssigned Indicates if the policy is deployed to any inclusion groups or not. */
    private ?bool $isAssigned = null;
    
    /** @var AppManagementLevel|null $targetedAppManagementLevels The intended app management levels for this policy. Possible values are: unspecified, unmanaged, mdm, androidEnterprise. */
    private ?AppManagementLevel $targetedAppManagementLevels = null;
    
    /**
     * Instantiates a new targetedManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetedManagedAppProtection
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TargetedManagedAppProtection {
        return new TargetedManagedAppProtection();
    }

    /**
     * Gets the appGroupType property value. Public Apps selection: group or individual. Possible values are: selectedPublicApps, allCoreMicrosoftApps, allMicrosoftApps, allApps.
     * @return TargetedManagedAppGroupType|null
    */
    public function getAppGroupType(): ?TargetedManagedAppGroupType {
        return $this->appGroupType;
    }

    /**
     * Gets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @return array<TargetedManagedAppPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'appGroupType' => function (self $o, ParseNode $n) { $o->setAppGroupType($n->getEnumValue(TargetedManagedAppGroupType::class)); },
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(TargetedManagedAppPolicyAssignment::class)); },
            'isAssigned' => function (self $o, ParseNode $n) { $o->setIsAssigned($n->getBooleanValue()); },
            'targetedAppManagementLevels' => function (self $o, ParseNode $n) { $o->setTargetedAppManagementLevels($n->getEnumValue(AppManagementLevel::class)); },
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
     * Gets the targetedAppManagementLevels property value. The intended app management levels for this policy. Possible values are: unspecified, unmanaged, mdm, androidEnterprise.
     * @return AppManagementLevel|null
    */
    public function getTargetedAppManagementLevels(): ?AppManagementLevel {
        return $this->targetedAppManagementLevels;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appGroupType', $this->appGroupType);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeBooleanValue('isAssigned', $this->isAssigned);
        $writer->writeEnumValue('targetedAppManagementLevels', $this->targetedAppManagementLevels);
    }

    /**
     * Sets the appGroupType property value. Public Apps selection: group or individual. Possible values are: selectedPublicApps, allCoreMicrosoftApps, allMicrosoftApps, allApps.
     *  @param TargetedManagedAppGroupType|null $value Value to set for the appGroupType property.
    */
    public function setAppGroupType(?TargetedManagedAppGroupType $value ): void {
        $this->appGroupType = $value;
    }

    /**
     * Sets the assignments property value. Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     *  @param array<TargetedManagedAppPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the isAssigned property value. Indicates if the policy is deployed to any inclusion groups or not.
     *  @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value ): void {
        $this->isAssigned = $value;
    }

    /**
     * Sets the targetedAppManagementLevels property value. The intended app management levels for this policy. Possible values are: unspecified, unmanaged, mdm, androidEnterprise.
     *  @param AppManagementLevel|null $value Value to set for the targetedAppManagementLevels property.
    */
    public function setTargetedAppManagementLevels(?AppManagementLevel $value ): void {
        $this->targetedAppManagementLevels = $value;
    }

}
