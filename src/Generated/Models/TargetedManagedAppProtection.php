<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TargetedManagedAppProtection extends ManagedAppProtection implements Parsable 
{
    /**
     * @var TargetedManagedAppGroupType|null $appGroupType Public Apps selection: group or individual. Possible values are: selectedPublicApps, allCoreMicrosoftApps, allMicrosoftApps, allApps.
    */
    private ?TargetedManagedAppGroupType $appGroupType = null;
    
    /**
     * @var array<TargetedManagedAppPolicyAssignment>|null $assignments Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
    */
    private ?array $assignments = null;
    
    /**
     * @var bool|null $isAssigned Indicates if the policy is deployed to any inclusion groups or not.
    */
    private ?bool $isAssigned = null;
    
    /**
     * @var AppManagementLevel|null $targetedAppManagementLevels The intended app management levels for this policy. Possible values are: unspecified, unmanaged, mdm, androidEnterprise.
    */
    private ?AppManagementLevel $targetedAppManagementLevels = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new TargetedManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appGroupType' => function (ParseNode $n) use ($o) { $o->setAppGroupType($n->getEnumValue(TargetedManagedAppGroupType::class)); },
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(TargetedManagedAppPolicyAssignment::class, 'createFromDiscriminatorValue'))); },
            'isAssigned' => function (ParseNode $n) use ($o) { $o->setIsAssigned($n->getBooleanValue()); },
            'targetedAppManagementLevels' => function (ParseNode $n) use ($o) { $o->setTargetedAppManagementLevels($n->getEnumValue(AppManagementLevel::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
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
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
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
        $writer->writeStringValue('@odata.type', $this->type);
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
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the targetedAppManagementLevels property value. The intended app management levels for this policy. Possible values are: unspecified, unmanaged, mdm, androidEnterprise.
     *  @param AppManagementLevel|null $value Value to set for the targetedAppManagementLevels property.
    */
    public function setTargetedAppManagementLevels(?AppManagementLevel $value ): void {
        $this->targetedAppManagementLevels = $value;
    }

}
