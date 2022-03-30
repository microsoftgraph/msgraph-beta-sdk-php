<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDeviceConfiguration extends Entity 
{
    /** @var TeamworkCameraConfiguration|null $cameraConfiguration The camera configuration. Applicable only for Microsoft Teams Rooms-enabled devices. */
    private ?TeamworkCameraConfiguration $cameraConfiguration = null;
    
    /** @var IdentitySet|null $createdBy Identity of the user who created the device configuration document. */
    private ?IdentitySet $createdBy = null;
    
    /** @var DateTime|null $createdDateTime The UTC date and time when the device configuration document was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var TeamworkDisplayConfiguration|null $displayConfiguration The display configuration. */
    private ?TeamworkDisplayConfiguration $displayConfiguration = null;
    
    /** @var TeamworkHardwareConfiguration|null $hardwareConfiguration The hardware configuration. Applicable only for Teams Rooms-enabled devices. */
    private ?TeamworkHardwareConfiguration $hardwareConfiguration = null;
    
    /** @var IdentitySet|null $lastModifiedBy Identity of the user who last modified the device configuration. */
    private ?IdentitySet $lastModifiedBy = null;
    
    /** @var DateTime|null $lastModifiedDateTime The UTC date and time when the device configuration was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var TeamworkMicrophoneConfiguration|null $microphoneConfiguration The microphone configuration. Applicable only for Teams Rooms-enabled devices. */
    private ?TeamworkMicrophoneConfiguration $microphoneConfiguration = null;
    
    /** @var TeamworkDeviceSoftwareVersions|null $softwareVersions Information related to software versions for the device, such as firmware, operating system, Teams client, and admin agent. */
    private ?TeamworkDeviceSoftwareVersions $softwareVersions = null;
    
    /** @var TeamworkSpeakerConfiguration|null $speakerConfiguration The speaker configuration. Applicable only for Teams Rooms-enabled devices. */
    private ?TeamworkSpeakerConfiguration $speakerConfiguration = null;
    
    /** @var TeamworkSystemConfiguration|null $systemConfiguration The system configuration. Not applicable for Teams Rooms-enabled devices. */
    private ?TeamworkSystemConfiguration $systemConfiguration = null;
    
    /** @var TeamworkTeamsClientConfiguration|null $teamsClientConfiguration The Teams client configuration. Applicable only for Teams Rooms-enabled devices. */
    private ?TeamworkTeamsClientConfiguration $teamsClientConfiguration = null;
    
    /**
     * Instantiates a new teamworkDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDeviceConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDeviceConfiguration {
        return new TeamworkDeviceConfiguration();
    }

    /**
     * Gets the cameraConfiguration property value. The camera configuration. Applicable only for Microsoft Teams Rooms-enabled devices.
     * @return TeamworkCameraConfiguration|null
    */
    public function getCameraConfiguration(): ?TeamworkCameraConfiguration {
        return $this->cameraConfiguration;
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the device configuration document.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The UTC date and time when the device configuration document was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayConfiguration property value. The display configuration.
     * @return TeamworkDisplayConfiguration|null
    */
    public function getDisplayConfiguration(): ?TeamworkDisplayConfiguration {
        return $this->displayConfiguration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'cameraConfiguration' => function (self $o, ParseNode $n) { $o->setCameraConfiguration($n->getObjectValue(TeamworkCameraConfiguration::class)); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(IdentitySet::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayConfiguration' => function (self $o, ParseNode $n) { $o->setDisplayConfiguration($n->getObjectValue(TeamworkDisplayConfiguration::class)); },
            'hardwareConfiguration' => function (self $o, ParseNode $n) { $o->setHardwareConfiguration($n->getObjectValue(TeamworkHardwareConfiguration::class)); },
            'lastModifiedBy' => function (self $o, ParseNode $n) { $o->setLastModifiedBy($n->getObjectValue(IdentitySet::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'microphoneConfiguration' => function (self $o, ParseNode $n) { $o->setMicrophoneConfiguration($n->getObjectValue(TeamworkMicrophoneConfiguration::class)); },
            'softwareVersions' => function (self $o, ParseNode $n) { $o->setSoftwareVersions($n->getObjectValue(TeamworkDeviceSoftwareVersions::class)); },
            'speakerConfiguration' => function (self $o, ParseNode $n) { $o->setSpeakerConfiguration($n->getObjectValue(TeamworkSpeakerConfiguration::class)); },
            'systemConfiguration' => function (self $o, ParseNode $n) { $o->setSystemConfiguration($n->getObjectValue(TeamworkSystemConfiguration::class)); },
            'teamsClientConfiguration' => function (self $o, ParseNode $n) { $o->setTeamsClientConfiguration($n->getObjectValue(TeamworkTeamsClientConfiguration::class)); },
        ]);
    }

    /**
     * Gets the hardwareConfiguration property value. The hardware configuration. Applicable only for Teams Rooms-enabled devices.
     * @return TeamworkHardwareConfiguration|null
    */
    public function getHardwareConfiguration(): ?TeamworkHardwareConfiguration {
        return $this->hardwareConfiguration;
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who last modified the device configuration.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The UTC date and time when the device configuration was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the microphoneConfiguration property value. The microphone configuration. Applicable only for Teams Rooms-enabled devices.
     * @return TeamworkMicrophoneConfiguration|null
    */
    public function getMicrophoneConfiguration(): ?TeamworkMicrophoneConfiguration {
        return $this->microphoneConfiguration;
    }

    /**
     * Gets the softwareVersions property value. Information related to software versions for the device, such as firmware, operating system, Teams client, and admin agent.
     * @return TeamworkDeviceSoftwareVersions|null
    */
    public function getSoftwareVersions(): ?TeamworkDeviceSoftwareVersions {
        return $this->softwareVersions;
    }

    /**
     * Gets the speakerConfiguration property value. The speaker configuration. Applicable only for Teams Rooms-enabled devices.
     * @return TeamworkSpeakerConfiguration|null
    */
    public function getSpeakerConfiguration(): ?TeamworkSpeakerConfiguration {
        return $this->speakerConfiguration;
    }

    /**
     * Gets the systemConfiguration property value. The system configuration. Not applicable for Teams Rooms-enabled devices.
     * @return TeamworkSystemConfiguration|null
    */
    public function getSystemConfiguration(): ?TeamworkSystemConfiguration {
        return $this->systemConfiguration;
    }

    /**
     * Gets the teamsClientConfiguration property value. The Teams client configuration. Applicable only for Teams Rooms-enabled devices.
     * @return TeamworkTeamsClientConfiguration|null
    */
    public function getTeamsClientConfiguration(): ?TeamworkTeamsClientConfiguration {
        return $this->teamsClientConfiguration;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('cameraConfiguration', $this->cameraConfiguration);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('displayConfiguration', $this->displayConfiguration);
        $writer->writeObjectValue('hardwareConfiguration', $this->hardwareConfiguration);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('microphoneConfiguration', $this->microphoneConfiguration);
        $writer->writeObjectValue('softwareVersions', $this->softwareVersions);
        $writer->writeObjectValue('speakerConfiguration', $this->speakerConfiguration);
        $writer->writeObjectValue('systemConfiguration', $this->systemConfiguration);
        $writer->writeObjectValue('teamsClientConfiguration', $this->teamsClientConfiguration);
    }

    /**
     * Sets the cameraConfiguration property value. The camera configuration. Applicable only for Microsoft Teams Rooms-enabled devices.
     *  @param TeamworkCameraConfiguration|null $value Value to set for the cameraConfiguration property.
    */
    public function setCameraConfiguration(?TeamworkCameraConfiguration $value ): void {
        $this->cameraConfiguration = $value;
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the device configuration document.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The UTC date and time when the device configuration document was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayConfiguration property value. The display configuration.
     *  @param TeamworkDisplayConfiguration|null $value Value to set for the displayConfiguration property.
    */
    public function setDisplayConfiguration(?TeamworkDisplayConfiguration $value ): void {
        $this->displayConfiguration = $value;
    }

    /**
     * Sets the hardwareConfiguration property value. The hardware configuration. Applicable only for Teams Rooms-enabled devices.
     *  @param TeamworkHardwareConfiguration|null $value Value to set for the hardwareConfiguration property.
    */
    public function setHardwareConfiguration(?TeamworkHardwareConfiguration $value ): void {
        $this->hardwareConfiguration = $value;
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who last modified the device configuration.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The UTC date and time when the device configuration was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the microphoneConfiguration property value. The microphone configuration. Applicable only for Teams Rooms-enabled devices.
     *  @param TeamworkMicrophoneConfiguration|null $value Value to set for the microphoneConfiguration property.
    */
    public function setMicrophoneConfiguration(?TeamworkMicrophoneConfiguration $value ): void {
        $this->microphoneConfiguration = $value;
    }

    /**
     * Sets the softwareVersions property value. Information related to software versions for the device, such as firmware, operating system, Teams client, and admin agent.
     *  @param TeamworkDeviceSoftwareVersions|null $value Value to set for the softwareVersions property.
    */
    public function setSoftwareVersions(?TeamworkDeviceSoftwareVersions $value ): void {
        $this->softwareVersions = $value;
    }

    /**
     * Sets the speakerConfiguration property value. The speaker configuration. Applicable only for Teams Rooms-enabled devices.
     *  @param TeamworkSpeakerConfiguration|null $value Value to set for the speakerConfiguration property.
    */
    public function setSpeakerConfiguration(?TeamworkSpeakerConfiguration $value ): void {
        $this->speakerConfiguration = $value;
    }

    /**
     * Sets the systemConfiguration property value. The system configuration. Not applicable for Teams Rooms-enabled devices.
     *  @param TeamworkSystemConfiguration|null $value Value to set for the systemConfiguration property.
    */
    public function setSystemConfiguration(?TeamworkSystemConfiguration $value ): void {
        $this->systemConfiguration = $value;
    }

    /**
     * Sets the teamsClientConfiguration property value. The Teams client configuration. Applicable only for Teams Rooms-enabled devices.
     *  @param TeamworkTeamsClientConfiguration|null $value Value to set for the teamsClientConfiguration property.
    */
    public function setTeamsClientConfiguration(?TeamworkTeamsClientConfiguration $value ): void {
        $this->teamsClientConfiguration = $value;
    }

}
