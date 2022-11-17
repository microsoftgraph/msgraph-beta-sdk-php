<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkDisplayConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkDisplayConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the configuredDisplays property value. The list of configured displays. Applicable only for Microsoft Teams Rooms devices.
     * @return array<TeamworkConfiguredPeripheral>|null
    */
    public function getConfiguredDisplays(): ?array {
        return $this->getBackingStore()->get('configuredDisplays');
    }

    /**
     * Gets the displayCount property value. Total number of connected displays, including the inbuilt display. Applicable only for Teams Rooms devices.
     * @return int|null
    */
    public function getDisplayCount(): ?int {
        return $this->getBackingStore()->get('displayCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'configuredDisplays' => fn(ParseNode $n) => $o->setConfiguredDisplays($n->getCollectionOfObjectValues([TeamworkConfiguredPeripheral::class, 'createFromDiscriminatorValue'])),
            'displayCount' => fn(ParseNode $n) => $o->setDisplayCount($n->getIntegerValue()),
            'inBuiltDisplayScreenConfiguration' => fn(ParseNode $n) => $o->setInBuiltDisplayScreenConfiguration($n->getObjectValue([TeamworkDisplayScreenConfiguration::class, 'createFromDiscriminatorValue'])),
            'isContentDuplicationAllowed' => fn(ParseNode $n) => $o->setIsContentDuplicationAllowed($n->getBooleanValue()),
            'isDualDisplayModeEnabled' => fn(ParseNode $n) => $o->setIsDualDisplayModeEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the inBuiltDisplayScreenConfiguration property value. Configuration for the inbuilt display. Not applicable for Teams Rooms devices.
     * @return TeamworkDisplayScreenConfiguration|null
    */
    public function getInBuiltDisplayScreenConfiguration(): ?TeamworkDisplayScreenConfiguration {
        return $this->getBackingStore()->get('inBuiltDisplayScreenConfiguration');
    }

    /**
     * Gets the isContentDuplicationAllowed property value. True if content duplication is allowed. Applicable only for Teams Rooms devices.
     * @return bool|null
    */
    public function getIsContentDuplicationAllowed(): ?bool {
        return $this->getBackingStore()->get('isContentDuplicationAllowed');
    }

    /**
     * Gets the isDualDisplayModeEnabled property value. True if dual display mode is enabled. If isDualDisplayModeEnabled is true, then the content will be displayed on both front of room screens instead of just the one screen, when it is shared via the HDMI ingest module on the Microsoft Teams Rooms device. Applicable only for Teams Rooms devices.
     * @return bool|null
    */
    public function getIsDualDisplayModeEnabled(): ?bool {
        return $this->getBackingStore()->get('isDualDisplayModeEnabled');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('configuredDisplays', $this->getConfiguredDisplays());
        $writer->writeIntegerValue('displayCount', $this->getDisplayCount());
        $writer->writeObjectValue('inBuiltDisplayScreenConfiguration', $this->getInBuiltDisplayScreenConfiguration());
        $writer->writeBooleanValue('isContentDuplicationAllowed', $this->getIsContentDuplicationAllowed());
        $writer->writeBooleanValue('isDualDisplayModeEnabled', $this->getIsDualDisplayModeEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the configuredDisplays property value. The list of configured displays. Applicable only for Microsoft Teams Rooms devices.
     *  @param array<TeamworkConfiguredPeripheral>|null $value Value to set for the configuredDisplays property.
    */
    public function setConfiguredDisplays(?array $value): void {
        $this->getBackingStore()->set('configuredDisplays', $value);
    }

    /**
     * Sets the displayCount property value. Total number of connected displays, including the inbuilt display. Applicable only for Teams Rooms devices.
     *  @param int|null $value Value to set for the displayCount property.
    */
    public function setDisplayCount(?int $value): void {
        $this->getBackingStore()->set('displayCount', $value);
    }

    /**
     * Sets the inBuiltDisplayScreenConfiguration property value. Configuration for the inbuilt display. Not applicable for Teams Rooms devices.
     *  @param TeamworkDisplayScreenConfiguration|null $value Value to set for the inBuiltDisplayScreenConfiguration property.
    */
    public function setInBuiltDisplayScreenConfiguration(?TeamworkDisplayScreenConfiguration $value): void {
        $this->getBackingStore()->set('inBuiltDisplayScreenConfiguration', $value);
    }

    /**
     * Sets the isContentDuplicationAllowed property value. True if content duplication is allowed. Applicable only for Teams Rooms devices.
     *  @param bool|null $value Value to set for the isContentDuplicationAllowed property.
    */
    public function setIsContentDuplicationAllowed(?bool $value): void {
        $this->getBackingStore()->set('isContentDuplicationAllowed', $value);
    }

    /**
     * Sets the isDualDisplayModeEnabled property value. True if dual display mode is enabled. If isDualDisplayModeEnabled is true, then the content will be displayed on both front of room screens instead of just the one screen, when it is shared via the HDMI ingest module on the Microsoft Teams Rooms device. Applicable only for Teams Rooms devices.
     *  @param bool|null $value Value to set for the isDualDisplayModeEnabled property.
    */
    public function setIsDualDisplayModeEnabled(?bool $value): void {
        $this->getBackingStore()->set('isDualDisplayModeEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
