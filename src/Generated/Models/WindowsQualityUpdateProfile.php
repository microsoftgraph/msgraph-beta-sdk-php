<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Windows Quality Update Profile
*/
class WindowsQualityUpdateProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new windowsQualityUpdateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the createdDateTime property value. The date time that the profile was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the deployableContentDisplayName property value. Friendly display name of the quality update profile deployable content
     * @return string|null
    */
    public function getDeployableContentDisplayName(): ?string {
        return $this->getBackingStore()->get('deployableContentDisplayName');
    }

    /**
     * Gets the description property value. The description of the profile which is specified by the user.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name for the profile.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the expeditedUpdateSettings property value. Expedited update settings.
     * @return ExpeditedWindowsQualityUpdateSettings|null
    */
    public function getExpeditedUpdateSettings(): ?ExpeditedWindowsQualityUpdateSettings {
        return $this->getBackingStore()->get('expeditedUpdateSettings');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([WindowsQualityUpdateProfileAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deployableContentDisplayName' => fn(ParseNode $n) => $o->setDeployableContentDisplayName($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'expeditedUpdateSettings' => fn(ParseNode $n) => $o->setExpeditedUpdateSettings($n->getObjectValue([ExpeditedWindowsQualityUpdateSettings::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'releaseDateDisplayName' => fn(ParseNode $n) => $o->setReleaseDateDisplayName($n->getStringValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date time that the profile was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the releaseDateDisplayName property value. Friendly release date to display for a Quality Update release
     * @return string|null
    */
    public function getReleaseDateDisplayName(): ?string {
        return $this->getBackingStore()->get('releaseDateDisplayName');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Quality Update entity.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('deployableContentDisplayName', $this->getDeployableContentDisplayName());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('expeditedUpdateSettings', $this->getExpeditedUpdateSettings());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('releaseDateDisplayName', $this->getReleaseDateDisplayName());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
    }

    /**
     * Sets the assignments property value. The list of group assignments of the profile.
     * @param array<WindowsQualityUpdateProfileAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. The date time that the profile was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deployableContentDisplayName property value. Friendly display name of the quality update profile deployable content
     * @param string|null $value Value to set for the deployableContentDisplayName property.
    */
    public function setDeployableContentDisplayName(?string $value): void {
        $this->getBackingStore()->set('deployableContentDisplayName', $value);
    }

    /**
     * Sets the description property value. The description of the profile which is specified by the user.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name for the profile.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the expeditedUpdateSettings property value. Expedited update settings.
     * @param ExpeditedWindowsQualityUpdateSettings|null $value Value to set for the expeditedUpdateSettings property.
    */
    public function setExpeditedUpdateSettings(?ExpeditedWindowsQualityUpdateSettings $value): void {
        $this->getBackingStore()->set('expeditedUpdateSettings', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date time that the profile was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the releaseDateDisplayName property value. Friendly release date to display for a Quality Update release
     * @param string|null $value Value to set for the releaseDateDisplayName property.
    */
    public function setReleaseDateDisplayName(?string $value): void {
        $this->getBackingStore()->set('releaseDateDisplayName', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Quality Update entity.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

}
