<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDeviceSoftwareVersions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $adminAgentSoftwareVersion The software version for the admin agent running on the device.
    */
    private ?string $adminAgentSoftwareVersion = null;
    
    /**
     * @var string|null $firmwareSoftwareVersion The software version for the firmware running on the device.
    */
    private ?string $firmwareSoftwareVersion = null;
    
    /**
     * @var string|null $operatingSystemSoftwareVersion The software version for the operating system on the device.
    */
    private ?string $operatingSystemSoftwareVersion = null;
    
    /**
     * @var string|null $partnerAgentSoftwareVersion The software version for the partner agent running on the device.
    */
    private ?string $partnerAgentSoftwareVersion = null;
    
    /**
     * @var string|null $teamsClientSoftwareVersion The software version for the Teams client running on the device.
    */
    private ?string $teamsClientSoftwareVersion = null;
    
    /**
     * Instantiates a new teamworkDeviceSoftwareVersions and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDeviceSoftwareVersions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDeviceSoftwareVersions {
        return new TeamworkDeviceSoftwareVersions();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the adminAgentSoftwareVersion property value. The software version for the admin agent running on the device.
     * @return string|null
    */
    public function getAdminAgentSoftwareVersion(): ?string {
        return $this->adminAgentSoftwareVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adminAgentSoftwareVersion' => function (ParseNode $n) use ($o) { $o->setAdminAgentSoftwareVersion($n->getStringValue()); },
            'firmwareSoftwareVersion' => function (ParseNode $n) use ($o) { $o->setFirmwareSoftwareVersion($n->getStringValue()); },
            'operatingSystemSoftwareVersion' => function (ParseNode $n) use ($o) { $o->setOperatingSystemSoftwareVersion($n->getStringValue()); },
            'partnerAgentSoftwareVersion' => function (ParseNode $n) use ($o) { $o->setPartnerAgentSoftwareVersion($n->getStringValue()); },
            'teamsClientSoftwareVersion' => function (ParseNode $n) use ($o) { $o->setTeamsClientSoftwareVersion($n->getStringValue()); },
        ];
    }

    /**
     * Gets the firmwareSoftwareVersion property value. The software version for the firmware running on the device.
     * @return string|null
    */
    public function getFirmwareSoftwareVersion(): ?string {
        return $this->firmwareSoftwareVersion;
    }

    /**
     * Gets the operatingSystemSoftwareVersion property value. The software version for the operating system on the device.
     * @return string|null
    */
    public function getOperatingSystemSoftwareVersion(): ?string {
        return $this->operatingSystemSoftwareVersion;
    }

    /**
     * Gets the partnerAgentSoftwareVersion property value. The software version for the partner agent running on the device.
     * @return string|null
    */
    public function getPartnerAgentSoftwareVersion(): ?string {
        return $this->partnerAgentSoftwareVersion;
    }

    /**
     * Gets the teamsClientSoftwareVersion property value. The software version for the Teams client running on the device.
     * @return string|null
    */
    public function getTeamsClientSoftwareVersion(): ?string {
        return $this->teamsClientSoftwareVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adminAgentSoftwareVersion', $this->adminAgentSoftwareVersion);
        $writer->writeStringValue('firmwareSoftwareVersion', $this->firmwareSoftwareVersion);
        $writer->writeStringValue('operatingSystemSoftwareVersion', $this->operatingSystemSoftwareVersion);
        $writer->writeStringValue('partnerAgentSoftwareVersion', $this->partnerAgentSoftwareVersion);
        $writer->writeStringValue('teamsClientSoftwareVersion', $this->teamsClientSoftwareVersion);
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
     * Sets the adminAgentSoftwareVersion property value. The software version for the admin agent running on the device.
     *  @param string|null $value Value to set for the adminAgentSoftwareVersion property.
    */
    public function setAdminAgentSoftwareVersion(?string $value ): void {
        $this->adminAgentSoftwareVersion = $value;
    }

    /**
     * Sets the firmwareSoftwareVersion property value. The software version for the firmware running on the device.
     *  @param string|null $value Value to set for the firmwareSoftwareVersion property.
    */
    public function setFirmwareSoftwareVersion(?string $value ): void {
        $this->firmwareSoftwareVersion = $value;
    }

    /**
     * Sets the operatingSystemSoftwareVersion property value. The software version for the operating system on the device.
     *  @param string|null $value Value to set for the operatingSystemSoftwareVersion property.
    */
    public function setOperatingSystemSoftwareVersion(?string $value ): void {
        $this->operatingSystemSoftwareVersion = $value;
    }

    /**
     * Sets the partnerAgentSoftwareVersion property value. The software version for the partner agent running on the device.
     *  @param string|null $value Value to set for the partnerAgentSoftwareVersion property.
    */
    public function setPartnerAgentSoftwareVersion(?string $value ): void {
        $this->partnerAgentSoftwareVersion = $value;
    }

    /**
     * Sets the teamsClientSoftwareVersion property value. The software version for the Teams client running on the device.
     *  @param string|null $value Value to set for the teamsClientSoftwareVersion property.
    */
    public function setTeamsClientSoftwareVersion(?string $value ): void {
        $this->teamsClientSoftwareVersion = $value;
    }

}
