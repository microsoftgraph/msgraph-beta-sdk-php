<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDisplayConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<TeamworkConfiguredPeripheral>|null $configuredDisplays The list of configured displays. Applicable only for Microsoft Teams Rooms devices.
    */
    private ?array $configuredDisplays = null;
    
    /**
     * @var int|null $displayCount Total number of connected displays, including the inbuilt display. Applicable only for Teams Rooms devices.
    */
    private ?int $displayCount = null;
    
    /**
     * @var TeamworkDisplayScreenConfiguration|null $inBuiltDisplayScreenConfiguration Configuration for the inbuilt display. Not applicable for Teams Rooms devices.
    */
    private ?TeamworkDisplayScreenConfiguration $inBuiltDisplayScreenConfiguration = null;
    
    /**
     * @var bool|null $isContentDuplicationAllowed True if content duplication is allowed. Applicable only for Teams Rooms devices.
    */
    private ?bool $isContentDuplicationAllowed = null;
    
    /**
     * @var bool|null $isDualDisplayModeEnabled True if dual display mode is enabled. If isDualDisplayModeEnabled is true, then the content will be displayed on both front of room screens instead of just the one screen, when it is shared via the HDMI ingest module on the Microsoft Teams Rooms device. Applicable only for Teams Rooms devices.
    */
    private ?bool $isDualDisplayModeEnabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new teamworkDisplayConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkDisplayConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDisplayConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDisplayConfiguration {
        return new TeamworkDisplayConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the configuredDisplays property value. The list of configured displays. Applicable only for Microsoft Teams Rooms devices.
     * @return array<TeamworkConfiguredPeripheral>|null
    */
    public function getConfiguredDisplays(): ?array {
        return $this->configuredDisplays;
    }

    /**
     * Gets the displayCount property value. Total number of connected displays, including the inbuilt display. Applicable only for Teams Rooms devices.
     * @return int|null
    */
    public function getDisplayCount(): ?int {
        return $this->displayCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'configuredDisplays' => function (ParseNode $n) use ($o) { $o->setConfiguredDisplays($n->getCollectionOfObjectValues(array(TeamworkConfiguredPeripheral::class, 'createFromDiscriminatorValue'))); },
            'displayCount' => function (ParseNode $n) use ($o) { $o->setDisplayCount($n->getIntegerValue()); },
            'inBuiltDisplayScreenConfiguration' => function (ParseNode $n) use ($o) { $o->setInBuiltDisplayScreenConfiguration($n->getObjectValue(array(TeamworkDisplayScreenConfiguration::class, 'createFromDiscriminatorValue'))); },
            'isContentDuplicationAllowed' => function (ParseNode $n) use ($o) { $o->setIsContentDuplicationAllowed($n->getBooleanValue()); },
            'isDualDisplayModeEnabled' => function (ParseNode $n) use ($o) { $o->setIsDualDisplayModeEnabled($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the inBuiltDisplayScreenConfiguration property value. Configuration for the inbuilt display. Not applicable for Teams Rooms devices.
     * @return TeamworkDisplayScreenConfiguration|null
    */
    public function getInBuiltDisplayScreenConfiguration(): ?TeamworkDisplayScreenConfiguration {
        return $this->inBuiltDisplayScreenConfiguration;
    }

    /**
     * Gets the isContentDuplicationAllowed property value. True if content duplication is allowed. Applicable only for Teams Rooms devices.
     * @return bool|null
    */
    public function getIsContentDuplicationAllowed(): ?bool {
        return $this->isContentDuplicationAllowed;
    }

    /**
     * Gets the isDualDisplayModeEnabled property value. True if dual display mode is enabled. If isDualDisplayModeEnabled is true, then the content will be displayed on both front of room screens instead of just the one screen, when it is shared via the HDMI ingest module on the Microsoft Teams Rooms device. Applicable only for Teams Rooms devices.
     * @return bool|null
    */
    public function getIsDualDisplayModeEnabled(): ?bool {
        return $this->isDualDisplayModeEnabled;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('configuredDisplays', $this->configuredDisplays);
        $writer->writeIntegerValue('displayCount', $this->displayCount);
        $writer->writeObjectValue('inBuiltDisplayScreenConfiguration', $this->inBuiltDisplayScreenConfiguration);
        $writer->writeBooleanValue('isContentDuplicationAllowed', $this->isContentDuplicationAllowed);
        $writer->writeBooleanValue('isDualDisplayModeEnabled', $this->isDualDisplayModeEnabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the configuredDisplays property value. The list of configured displays. Applicable only for Microsoft Teams Rooms devices.
     *  @param array<TeamworkConfiguredPeripheral>|null $value Value to set for the configuredDisplays property.
    */
    public function setConfiguredDisplays(?array $value ): void {
        $this->configuredDisplays = $value;
    }

    /**
     * Sets the displayCount property value. Total number of connected displays, including the inbuilt display. Applicable only for Teams Rooms devices.
     *  @param int|null $value Value to set for the displayCount property.
    */
    public function setDisplayCount(?int $value ): void {
        $this->displayCount = $value;
    }

    /**
     * Sets the inBuiltDisplayScreenConfiguration property value. Configuration for the inbuilt display. Not applicable for Teams Rooms devices.
     *  @param TeamworkDisplayScreenConfiguration|null $value Value to set for the inBuiltDisplayScreenConfiguration property.
    */
    public function setInBuiltDisplayScreenConfiguration(?TeamworkDisplayScreenConfiguration $value ): void {
        $this->inBuiltDisplayScreenConfiguration = $value;
    }

    /**
     * Sets the isContentDuplicationAllowed property value. True if content duplication is allowed. Applicable only for Teams Rooms devices.
     *  @param bool|null $value Value to set for the isContentDuplicationAllowed property.
    */
    public function setIsContentDuplicationAllowed(?bool $value ): void {
        $this->isContentDuplicationAllowed = $value;
    }

    /**
     * Sets the isDualDisplayModeEnabled property value. True if dual display mode is enabled. If isDualDisplayModeEnabled is true, then the content will be displayed on both front of room screens instead of just the one screen, when it is shared via the HDMI ingest module on the Microsoft Teams Rooms device. Applicable only for Teams Rooms devices.
     *  @param bool|null $value Value to set for the isDualDisplayModeEnabled property.
    */
    public function setIsDualDisplayModeEnabled(?bool $value ): void {
        $this->isDualDisplayModeEnabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
