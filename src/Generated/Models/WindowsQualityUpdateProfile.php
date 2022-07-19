<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsQualityUpdateProfile extends Entity implements Parsable 
{
    /**
     * @var array<WindowsQualityUpdateProfileAssignment>|null $assignments The list of group assignments of the profile.
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
     * @var string|null $displayName The display name for the profile.
    */
    private ?string $displayName = null;
    
    /**
     * @var ExpeditedWindowsQualityUpdateSettings|null $expeditedUpdateSettings Expedited update settings.
    */
    private ?ExpeditedWindowsQualityUpdateSettings $expeditedUpdateSettings = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date time that the profile was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $releaseDateDisplayName Friendly release date to display for a Quality Update release
    */
    private ?string $releaseDateDisplayName = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tags for this Quality Update entity.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * Instantiates a new windowsQualityUpdateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsQualityUpdateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsQualityUpdateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsQualityUpdateProfile {
        return new WindowsQualityUpdateProfile();
    }

    /**
     * Gets the assignments property value. The list of group assignments of the profile.
     * @return array<WindowsQualityUpdateProfileAssignment>|null
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
     * Gets the displayName property value. The display name for the profile.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the expeditedUpdateSettings property value. Expedited update settings.
     * @return ExpeditedWindowsQualityUpdateSettings|null
    */
    public function getExpeditedUpdateSettings(): ?ExpeditedWindowsQualityUpdateSettings {
        return $this->expeditedUpdateSettings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(WindowsQualityUpdateProfileAssignment::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deployableContentDisplayName' => function (ParseNode $n) use ($o) { $o->setDeployableContentDisplayName($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'expeditedUpdateSettings' => function (ParseNode $n) use ($o) { $o->setExpeditedUpdateSettings($n->getObjectValue(array(ExpeditedWindowsQualityUpdateSettings::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'releaseDateDisplayName' => function (ParseNode $n) use ($o) { $o->setReleaseDateDisplayName($n->getStringValue()); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
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
     * Gets the releaseDateDisplayName property value. Friendly release date to display for a Quality Update release
     * @return string|null
    */
    public function getReleaseDateDisplayName(): ?string {
        return $this->releaseDateDisplayName;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Quality Update entity.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
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
        $writer->writeObjectValue('expeditedUpdateSettings', $this->expeditedUpdateSettings);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('releaseDateDisplayName', $this->releaseDateDisplayName);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
    }

    /**
     * Sets the assignments property value. The list of group assignments of the profile.
     *  @param array<WindowsQualityUpdateProfileAssignment>|null $value Value to set for the assignments property.
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
     * Sets the displayName property value. The display name for the profile.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the expeditedUpdateSettings property value. Expedited update settings.
     *  @param ExpeditedWindowsQualityUpdateSettings|null $value Value to set for the expeditedUpdateSettings property.
    */
    public function setExpeditedUpdateSettings(?ExpeditedWindowsQualityUpdateSettings $value ): void {
        $this->expeditedUpdateSettings = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date time that the profile was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the releaseDateDisplayName property value. Friendly release date to display for a Quality Update release
     *  @param string|null $value Value to set for the releaseDateDisplayName property.
    */
    public function setReleaseDateDisplayName(?string $value ): void {
        $this->releaseDateDisplayName = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Quality Update entity.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

}
