<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDeviceConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamworkDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDeviceConfiguration {
        return new TeamworkDeviceConfiguration();
    }

    /**
     * Gets the cameraConfiguration property value. The camera configuration. Applicable only for Microsoft Teams Rooms-enabled devices.
     * @return TeamworkCameraConfiguration|null
    */
    public function getCameraConfiguration(): ?TeamworkCameraConfiguration {
        $val = $this->getBackingStore()->get('cameraConfiguration');
        if (is_null($val) || $val instanceof TeamworkCameraConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cameraConfiguration'");
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the device configuration document.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The UTC date and time when the device configuration document was created.
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
     * Gets the displayConfiguration property value. The display configuration.
     * @return TeamworkDisplayConfiguration|null
    */
    public function getDisplayConfiguration(): ?TeamworkDisplayConfiguration {
        $val = $this->getBackingStore()->get('displayConfiguration');
        if (is_null($val) || $val instanceof TeamworkDisplayConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayConfiguration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cameraConfiguration' => fn(ParseNode $n) => $o->setCameraConfiguration($n->getObjectValue([TeamworkCameraConfiguration::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayConfiguration' => fn(ParseNode $n) => $o->setDisplayConfiguration($n->getObjectValue([TeamworkDisplayConfiguration::class, 'createFromDiscriminatorValue'])),
            'hardwareConfiguration' => fn(ParseNode $n) => $o->setHardwareConfiguration($n->getObjectValue([TeamworkHardwareConfiguration::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'microphoneConfiguration' => fn(ParseNode $n) => $o->setMicrophoneConfiguration($n->getObjectValue([TeamworkMicrophoneConfiguration::class, 'createFromDiscriminatorValue'])),
            'softwareVersions' => fn(ParseNode $n) => $o->setSoftwareVersions($n->getObjectValue([TeamworkDeviceSoftwareVersions::class, 'createFromDiscriminatorValue'])),
            'speakerConfiguration' => fn(ParseNode $n) => $o->setSpeakerConfiguration($n->getObjectValue([TeamworkSpeakerConfiguration::class, 'createFromDiscriminatorValue'])),
            'systemConfiguration' => fn(ParseNode $n) => $o->setSystemConfiguration($n->getObjectValue([TeamworkSystemConfiguration::class, 'createFromDiscriminatorValue'])),
            'teamsClientConfiguration' => fn(ParseNode $n) => $o->setTeamsClientConfiguration($n->getObjectValue([TeamworkTeamsClientConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hardwareConfiguration property value. The hardware configuration. Applicable only for Teams Rooms-enabled devices.
     * @return TeamworkHardwareConfiguration|null
    */
    public function getHardwareConfiguration(): ?TeamworkHardwareConfiguration {
        $val = $this->getBackingStore()->get('hardwareConfiguration');
        if (is_null($val) || $val instanceof TeamworkHardwareConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hardwareConfiguration'");
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who last modified the device configuration.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The UTC date and time when the device configuration was last modified.
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
     * Gets the microphoneConfiguration property value. The microphone configuration. Applicable only for Teams Rooms-enabled devices.
     * @return TeamworkMicrophoneConfiguration|null
    */
    public function getMicrophoneConfiguration(): ?TeamworkMicrophoneConfiguration {
        $val = $this->getBackingStore()->get('microphoneConfiguration');
        if (is_null($val) || $val instanceof TeamworkMicrophoneConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microphoneConfiguration'");
    }

    /**
     * Gets the softwareVersions property value. Information related to software versions for the device, such as firmware, operating system, Teams client, and admin agent.
     * @return TeamworkDeviceSoftwareVersions|null
    */
    public function getSoftwareVersions(): ?TeamworkDeviceSoftwareVersions {
        $val = $this->getBackingStore()->get('softwareVersions');
        if (is_null($val) || $val instanceof TeamworkDeviceSoftwareVersions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'softwareVersions'");
    }

    /**
     * Gets the speakerConfiguration property value. The speaker configuration. Applicable only for Teams Rooms-enabled devices.
     * @return TeamworkSpeakerConfiguration|null
    */
    public function getSpeakerConfiguration(): ?TeamworkSpeakerConfiguration {
        $val = $this->getBackingStore()->get('speakerConfiguration');
        if (is_null($val) || $val instanceof TeamworkSpeakerConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'speakerConfiguration'");
    }

    /**
     * Gets the systemConfiguration property value. The system configuration. Not applicable for Teams Rooms-enabled devices.
     * @return TeamworkSystemConfiguration|null
    */
    public function getSystemConfiguration(): ?TeamworkSystemConfiguration {
        $val = $this->getBackingStore()->get('systemConfiguration');
        if (is_null($val) || $val instanceof TeamworkSystemConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemConfiguration'");
    }

    /**
     * Gets the teamsClientConfiguration property value. The Teams client configuration. Applicable only for Teams Rooms-enabled devices.
     * @return TeamworkTeamsClientConfiguration|null
    */
    public function getTeamsClientConfiguration(): ?TeamworkTeamsClientConfiguration {
        $val = $this->getBackingStore()->get('teamsClientConfiguration');
        if (is_null($val) || $val instanceof TeamworkTeamsClientConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsClientConfiguration'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('cameraConfiguration', $this->getCameraConfiguration());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('displayConfiguration', $this->getDisplayConfiguration());
        $writer->writeObjectValue('hardwareConfiguration', $this->getHardwareConfiguration());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('microphoneConfiguration', $this->getMicrophoneConfiguration());
        $writer->writeObjectValue('softwareVersions', $this->getSoftwareVersions());
        $writer->writeObjectValue('speakerConfiguration', $this->getSpeakerConfiguration());
        $writer->writeObjectValue('systemConfiguration', $this->getSystemConfiguration());
        $writer->writeObjectValue('teamsClientConfiguration', $this->getTeamsClientConfiguration());
    }

    /**
     * Sets the cameraConfiguration property value. The camera configuration. Applicable only for Microsoft Teams Rooms-enabled devices.
     * @param TeamworkCameraConfiguration|null $value Value to set for the cameraConfiguration property.
    */
    public function setCameraConfiguration(?TeamworkCameraConfiguration $value): void {
        $this->getBackingStore()->set('cameraConfiguration', $value);
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the device configuration document.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The UTC date and time when the device configuration document was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayConfiguration property value. The display configuration.
     * @param TeamworkDisplayConfiguration|null $value Value to set for the displayConfiguration property.
    */
    public function setDisplayConfiguration(?TeamworkDisplayConfiguration $value): void {
        $this->getBackingStore()->set('displayConfiguration', $value);
    }

    /**
     * Sets the hardwareConfiguration property value. The hardware configuration. Applicable only for Teams Rooms-enabled devices.
     * @param TeamworkHardwareConfiguration|null $value Value to set for the hardwareConfiguration property.
    */
    public function setHardwareConfiguration(?TeamworkHardwareConfiguration $value): void {
        $this->getBackingStore()->set('hardwareConfiguration', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who last modified the device configuration.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The UTC date and time when the device configuration was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the microphoneConfiguration property value. The microphone configuration. Applicable only for Teams Rooms-enabled devices.
     * @param TeamworkMicrophoneConfiguration|null $value Value to set for the microphoneConfiguration property.
    */
    public function setMicrophoneConfiguration(?TeamworkMicrophoneConfiguration $value): void {
        $this->getBackingStore()->set('microphoneConfiguration', $value);
    }

    /**
     * Sets the softwareVersions property value. Information related to software versions for the device, such as firmware, operating system, Teams client, and admin agent.
     * @param TeamworkDeviceSoftwareVersions|null $value Value to set for the softwareVersions property.
    */
    public function setSoftwareVersions(?TeamworkDeviceSoftwareVersions $value): void {
        $this->getBackingStore()->set('softwareVersions', $value);
    }

    /**
     * Sets the speakerConfiguration property value. The speaker configuration. Applicable only for Teams Rooms-enabled devices.
     * @param TeamworkSpeakerConfiguration|null $value Value to set for the speakerConfiguration property.
    */
    public function setSpeakerConfiguration(?TeamworkSpeakerConfiguration $value): void {
        $this->getBackingStore()->set('speakerConfiguration', $value);
    }

    /**
     * Sets the systemConfiguration property value. The system configuration. Not applicable for Teams Rooms-enabled devices.
     * @param TeamworkSystemConfiguration|null $value Value to set for the systemConfiguration property.
    */
    public function setSystemConfiguration(?TeamworkSystemConfiguration $value): void {
        $this->getBackingStore()->set('systemConfiguration', $value);
    }

    /**
     * Sets the teamsClientConfiguration property value. The Teams client configuration. Applicable only for Teams Rooms-enabled devices.
     * @param TeamworkTeamsClientConfiguration|null $value Value to set for the teamsClientConfiguration property.
    */
    public function setTeamsClientConfiguration(?TeamworkTeamsClientConfiguration $value): void {
        $this->getBackingStore()->set('teamsClientConfiguration', $value);
    }

}
