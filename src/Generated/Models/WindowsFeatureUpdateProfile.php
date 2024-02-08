<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Windows Feature Update Profile
*/
class WindowsFeatureUpdateProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsFeatureUpdateProfile and sets the default values.
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
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsFeatureUpdateProfileAssignment::class);
            /** @var array<WindowsFeatureUpdateProfileAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the createdDateTime property value. The date time that the profile was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the deployableContentDisplayName property value. Friendly display name of the quality update profile deployable content
     * @return string|null
    */
    public function getDeployableContentDisplayName(): ?string {
        $val = $this->getBackingStore()->get('deployableContentDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deployableContentDisplayName'");
    }

    /**
     * Gets the description property value. The description of the profile which is specified by the user.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the profile.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the endOfSupportDate property value. The last supported date for a feature update
     * @return DateTime|null
    */
    public function getEndOfSupportDate(): ?DateTime {
        $val = $this->getBackingStore()->get('endOfSupportDate');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endOfSupportDate'");
    }

    /**
     * Gets the featureUpdateVersion property value. The feature update version that will be deployed to the devices targeted by this profile. The version could be any supported version for example 1709, 1803 or 1809 and so on.
     * @return string|null
    */
    public function getFeatureUpdateVersion(): ?string {
        $val = $this->getBackingStore()->get('featureUpdateVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'featureUpdateVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([WindowsFeatureUpdateProfileAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deployableContentDisplayName' => fn(ParseNode $n) => $o->setDeployableContentDisplayName($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endOfSupportDate' => fn(ParseNode $n) => $o->setEndOfSupportDate($n->getDateTimeValue()),
            'featureUpdateVersion' => fn(ParseNode $n) => $o->setFeatureUpdateVersion($n->getStringValue()),
            'installLatestWindows10OnWindows11IneligibleDevice' => fn(ParseNode $n) => $o->setInstallLatestWindows10OnWindows11IneligibleDevice($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'rolloutSettings' => fn(ParseNode $n) => $o->setRolloutSettings($n->getObjectValue([WindowsUpdateRolloutSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the installLatestWindows10OnWindows11IneligibleDevice property value. If true, the latest Microsoft Windows 10 update will be installed on devices ineligible for Microsoft Windows 11
     * @return bool|null
    */
    public function getInstallLatestWindows10OnWindows11IneligibleDevice(): ?bool {
        $val = $this->getBackingStore()->get('installLatestWindows10OnWindows11IneligibleDevice');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installLatestWindows10OnWindows11IneligibleDevice'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date time that the profile was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Feature Update entity.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Gets the rolloutSettings property value. The windows update rollout settings, including offer start date time, offer end date time, and days between each set of offers.
     * @return WindowsUpdateRolloutSettings|null
    */
    public function getRolloutSettings(): ?WindowsUpdateRolloutSettings {
        $val = $this->getBackingStore()->get('rolloutSettings');
        if (is_null($val) || $val instanceof WindowsUpdateRolloutSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rolloutSettings'");
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
        $writer->writeDateTimeValue('endOfSupportDate', $this->getEndOfSupportDate());
        $writer->writeStringValue('featureUpdateVersion', $this->getFeatureUpdateVersion());
        $writer->writeBooleanValue('installLatestWindows10OnWindows11IneligibleDevice', $this->getInstallLatestWindows10OnWindows11IneligibleDevice());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeObjectValue('rolloutSettings', $this->getRolloutSettings());
    }

    /**
     * Sets the assignments property value. The list of group assignments of the profile.
     * @param array<WindowsFeatureUpdateProfileAssignment>|null $value Value to set for the assignments property.
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
     * Sets the displayName property value. The display name of the profile.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endOfSupportDate property value. The last supported date for a feature update
     * @param DateTime|null $value Value to set for the endOfSupportDate property.
    */
    public function setEndOfSupportDate(?DateTime $value): void {
        $this->getBackingStore()->set('endOfSupportDate', $value);
    }

    /**
     * Sets the featureUpdateVersion property value. The feature update version that will be deployed to the devices targeted by this profile. The version could be any supported version for example 1709, 1803 or 1809 and so on.
     * @param string|null $value Value to set for the featureUpdateVersion property.
    */
    public function setFeatureUpdateVersion(?string $value): void {
        $this->getBackingStore()->set('featureUpdateVersion', $value);
    }

    /**
     * Sets the installLatestWindows10OnWindows11IneligibleDevice property value. If true, the latest Microsoft Windows 10 update will be installed on devices ineligible for Microsoft Windows 11
     * @param bool|null $value Value to set for the installLatestWindows10OnWindows11IneligibleDevice property.
    */
    public function setInstallLatestWindows10OnWindows11IneligibleDevice(?bool $value): void {
        $this->getBackingStore()->set('installLatestWindows10OnWindows11IneligibleDevice', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date time that the profile was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Feature Update entity.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the rolloutSettings property value. The windows update rollout settings, including offer start date time, offer end date time, and days between each set of offers.
     * @param WindowsUpdateRolloutSettings|null $value Value to set for the rolloutSettings property.
    */
    public function setRolloutSettings(?WindowsUpdateRolloutSettings $value): void {
        $this->getBackingStore()->set('rolloutSettings', $value);
    }

}
