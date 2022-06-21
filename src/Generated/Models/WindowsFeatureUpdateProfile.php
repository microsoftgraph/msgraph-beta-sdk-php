<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsFeatureUpdateProfile extends Entity implements Parsable 
{
    /**
     * @var array<WindowsFeatureUpdateProfileAssignment>|null $assignments The list of group assignments of the profile.
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime The date time that the profile was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $deployableContentDisplayName Friendly display name of the quality update profile deployable content
    */
    private ?string $deployableContentDisplayName = null;
    
    /**
     * @var string|null $description The description of the profile which is specified by the user.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the profile.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $endOfSupportDate The last supported date for a feature update
    */
    private ?DateTime $endOfSupportDate = null;
    
    /**
     * @var string|null $featureUpdateVersion The feature update version that will be deployed to the devices targeted by this profile. The version could be any supported version for example 1709, 1803 or 1809 and so on.
    */
    private ?string $featureUpdateVersion = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date time that the profile was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tags for this Feature Update entity.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var WindowsUpdateRolloutSettings|null $rolloutSettings The windows update rollout settings, including offer start date time, offer end date time, and days between each set of offers.
    */
    private ?WindowsUpdateRolloutSettings $rolloutSettings = null;
    
    /**
     * Instantiates a new windowsFeatureUpdateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsFeatureUpdateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsFeatureUpdateProfile {
        return new WindowsFeatureUpdateProfile();
    }

    /**
     * Gets the assignments property value. The list of group assignments of the profile.
     * @return array<WindowsFeatureUpdateProfileAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. The date time that the profile was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deployableContentDisplayName property value. Friendly display name of the quality update profile deployable content
     * @return string|null
    */
    public function getDeployableContentDisplayName(): ?string {
        return $this->deployableContentDisplayName;
    }

    /**
     * Gets the description property value. The description of the profile which is specified by the user.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the profile.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the endOfSupportDate property value. The last supported date for a feature update
     * @return DateTime|null
    */
    public function getEndOfSupportDate(): ?DateTime {
        return $this->endOfSupportDate;
    }

    /**
     * Gets the featureUpdateVersion property value. The feature update version that will be deployed to the devices targeted by this profile. The version could be any supported version for example 1709, 1803 or 1809 and so on.
     * @return string|null
    */
    public function getFeatureUpdateVersion(): ?string {
        return $this->featureUpdateVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(WindowsFeatureUpdateProfileAssignment::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deployableContentDisplayName' => function (ParseNode $n) use ($o) { $o->setDeployableContentDisplayName($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'endOfSupportDate' => function (ParseNode $n) use ($o) { $o->setEndOfSupportDate($n->getDateTimeValue()); },
            'featureUpdateVersion' => function (ParseNode $n) use ($o) { $o->setFeatureUpdateVersion($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'rolloutSettings' => function (ParseNode $n) use ($o) { $o->setRolloutSettings($n->getObjectValue(array(WindowsUpdateRolloutSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date time that the profile was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Feature Update entity.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the rolloutSettings property value. The windows update rollout settings, including offer start date time, offer end date time, and days between each set of offers.
     * @return WindowsUpdateRolloutSettings|null
    */
    public function getRolloutSettings(): ?WindowsUpdateRolloutSettings {
        return $this->rolloutSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('deployableContentDisplayName', $this->deployableContentDisplayName);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('endOfSupportDate', $this->endOfSupportDate);
        $writer->writeStringValue('featureUpdateVersion', $this->featureUpdateVersion);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeObjectValue('rolloutSettings', $this->rolloutSettings);
    }

    /**
     * Sets the assignments property value. The list of group assignments of the profile.
     *  @param array<WindowsFeatureUpdateProfileAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. The date time that the profile was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deployableContentDisplayName property value. Friendly display name of the quality update profile deployable content
     *  @param string|null $value Value to set for the deployableContentDisplayName property.
    */
    public function setDeployableContentDisplayName(?string $value ): void {
        $this->deployableContentDisplayName = $value;
    }

    /**
     * Sets the description property value. The description of the profile which is specified by the user.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the profile.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the endOfSupportDate property value. The last supported date for a feature update
     *  @param DateTime|null $value Value to set for the endOfSupportDate property.
    */
    public function setEndOfSupportDate(?DateTime $value ): void {
        $this->endOfSupportDate = $value;
    }

    /**
     * Sets the featureUpdateVersion property value. The feature update version that will be deployed to the devices targeted by this profile. The version could be any supported version for example 1709, 1803 or 1809 and so on.
     *  @param string|null $value Value to set for the featureUpdateVersion property.
    */
    public function setFeatureUpdateVersion(?string $value ): void {
        $this->featureUpdateVersion = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date time that the profile was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Feature Update entity.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the rolloutSettings property value. The windows update rollout settings, including offer start date time, offer end date time, and days between each set of offers.
     *  @param WindowsUpdateRolloutSettings|null $value Value to set for the rolloutSettings property.
    */
    public function setRolloutSettings(?WindowsUpdateRolloutSettings $value ): void {
        $this->rolloutSettings = $value;
    }

}
