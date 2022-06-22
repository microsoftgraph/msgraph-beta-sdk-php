<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkSoftwareUpdateHealth implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkSoftwareUpdateStatus|null $adminAgentSoftwareUpdateStatus The software update available for the admin agent.
    */
    private ?TeamworkSoftwareUpdateStatus $adminAgentSoftwareUpdateStatus = null;
    
    /**
     * @var TeamworkSoftwareUpdateStatus|null $companyPortalSoftwareUpdateStatus The software update available for the company portal.
    */
    private ?TeamworkSoftwareUpdateStatus $companyPortalSoftwareUpdateStatus = null;
    
    /**
     * @var TeamworkSoftwareUpdateStatus|null $firmwareSoftwareUpdateStatus The software update available for the firmware.
    */
    private ?TeamworkSoftwareUpdateStatus $firmwareSoftwareUpdateStatus = null;
    
    /**
     * @var TeamworkSoftwareUpdateStatus|null $operatingSystemSoftwareUpdateStatus The software update available for the operating system.
    */
    private ?TeamworkSoftwareUpdateStatus $operatingSystemSoftwareUpdateStatus = null;
    
    /**
     * @var TeamworkSoftwareUpdateStatus|null $partnerAgentSoftwareUpdateStatus The software update available for the partner agent.
    */
    private ?TeamworkSoftwareUpdateStatus $partnerAgentSoftwareUpdateStatus = null;
    
    /**
     * @var TeamworkSoftwareUpdateStatus|null $teamsClientSoftwareUpdateStatus The software update available for the Teams client.
    */
    private ?TeamworkSoftwareUpdateStatus $teamsClientSoftwareUpdateStatus = null;
    
    /**
     * Instantiates a new teamworkSoftwareUpdateHealth and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkSoftwareUpdateHealth
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkSoftwareUpdateHealth {
        return new TeamworkSoftwareUpdateHealth();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the adminAgentSoftwareUpdateStatus property value. The software update available for the admin agent.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getAdminAgentSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        return $this->adminAgentSoftwareUpdateStatus;
    }

    /**
     * Gets the companyPortalSoftwareUpdateStatus property value. The software update available for the company portal.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getCompanyPortalSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        return $this->companyPortalSoftwareUpdateStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adminAgentSoftwareUpdateStatus' => function (ParseNode $n) use ($o) { $o->setAdminAgentSoftwareUpdateStatus($n->getObjectValue(array(TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'))); },
            'companyPortalSoftwareUpdateStatus' => function (ParseNode $n) use ($o) { $o->setCompanyPortalSoftwareUpdateStatus($n->getObjectValue(array(TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'))); },
            'firmwareSoftwareUpdateStatus' => function (ParseNode $n) use ($o) { $o->setFirmwareSoftwareUpdateStatus($n->getObjectValue(array(TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'))); },
            'operatingSystemSoftwareUpdateStatus' => function (ParseNode $n) use ($o) { $o->setOperatingSystemSoftwareUpdateStatus($n->getObjectValue(array(TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'))); },
            'partnerAgentSoftwareUpdateStatus' => function (ParseNode $n) use ($o) { $o->setPartnerAgentSoftwareUpdateStatus($n->getObjectValue(array(TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'))); },
            'teamsClientSoftwareUpdateStatus' => function (ParseNode $n) use ($o) { $o->setTeamsClientSoftwareUpdateStatus($n->getObjectValue(array(TeamworkSoftwareUpdateStatus::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the firmwareSoftwareUpdateStatus property value. The software update available for the firmware.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getFirmwareSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        return $this->firmwareSoftwareUpdateStatus;
    }

    /**
     * Gets the operatingSystemSoftwareUpdateStatus property value. The software update available for the operating system.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getOperatingSystemSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        return $this->operatingSystemSoftwareUpdateStatus;
    }

    /**
     * Gets the partnerAgentSoftwareUpdateStatus property value. The software update available for the partner agent.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getPartnerAgentSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        return $this->partnerAgentSoftwareUpdateStatus;
    }

    /**
     * Gets the teamsClientSoftwareUpdateStatus property value. The software update available for the Teams client.
     * @return TeamworkSoftwareUpdateStatus|null
    */
    public function getTeamsClientSoftwareUpdateStatus(): ?TeamworkSoftwareUpdateStatus {
        return $this->teamsClientSoftwareUpdateStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('adminAgentSoftwareUpdateStatus', $this->adminAgentSoftwareUpdateStatus);
        $writer->writeObjectValue('companyPortalSoftwareUpdateStatus', $this->companyPortalSoftwareUpdateStatus);
        $writer->writeObjectValue('firmwareSoftwareUpdateStatus', $this->firmwareSoftwareUpdateStatus);
        $writer->writeObjectValue('operatingSystemSoftwareUpdateStatus', $this->operatingSystemSoftwareUpdateStatus);
        $writer->writeObjectValue('partnerAgentSoftwareUpdateStatus', $this->partnerAgentSoftwareUpdateStatus);
        $writer->writeObjectValue('teamsClientSoftwareUpdateStatus', $this->teamsClientSoftwareUpdateStatus);
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
     * Sets the adminAgentSoftwareUpdateStatus property value. The software update available for the admin agent.
     *  @param TeamworkSoftwareUpdateStatus|null $value Value to set for the adminAgentSoftwareUpdateStatus property.
    */
    public function setAdminAgentSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value ): void {
        $this->adminAgentSoftwareUpdateStatus = $value;
    }

    /**
     * Sets the companyPortalSoftwareUpdateStatus property value. The software update available for the company portal.
     *  @param TeamworkSoftwareUpdateStatus|null $value Value to set for the companyPortalSoftwareUpdateStatus property.
    */
    public function setCompanyPortalSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value ): void {
        $this->companyPortalSoftwareUpdateStatus = $value;
    }

    /**
     * Sets the firmwareSoftwareUpdateStatus property value. The software update available for the firmware.
     *  @param TeamworkSoftwareUpdateStatus|null $value Value to set for the firmwareSoftwareUpdateStatus property.
    */
    public function setFirmwareSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value ): void {
        $this->firmwareSoftwareUpdateStatus = $value;
    }

    /**
     * Sets the operatingSystemSoftwareUpdateStatus property value. The software update available for the operating system.
     *  @param TeamworkSoftwareUpdateStatus|null $value Value to set for the operatingSystemSoftwareUpdateStatus property.
    */
    public function setOperatingSystemSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value ): void {
        $this->operatingSystemSoftwareUpdateStatus = $value;
    }

    /**
     * Sets the partnerAgentSoftwareUpdateStatus property value. The software update available for the partner agent.
     *  @param TeamworkSoftwareUpdateStatus|null $value Value to set for the partnerAgentSoftwareUpdateStatus property.
    */
    public function setPartnerAgentSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value ): void {
        $this->partnerAgentSoftwareUpdateStatus = $value;
    }

    /**
     * Sets the teamsClientSoftwareUpdateStatus property value. The software update available for the Teams client.
     *  @param TeamworkSoftwareUpdateStatus|null $value Value to set for the teamsClientSoftwareUpdateStatus property.
    */
    public function setTeamsClientSoftwareUpdateStatus(?TeamworkSoftwareUpdateStatus $value ): void {
        $this->teamsClientSoftwareUpdateStatus = $value;
    }

}
