<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkSoftwareUpdateStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkSoftwareUpdateStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkSoftwareUpdateStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkSoftwareUpdateStatus {
        return new TeamworkSoftwareUpdateStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the availableVersion property value. The available software version to update.
     * @return string|null
    */
    public function getAvailableVersion(): ?string {
        return $this->getBackingStore()->get('availableVersion');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the currentVersion property value. The current software version.
     * @return string|null
    */
    public function getCurrentVersion(): ?string {
        return $this->getBackingStore()->get('currentVersion');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availableVersion' => fn(ParseNode $n) => $o->setAvailableVersion($n->getStringValue()),
            'currentVersion' => fn(ParseNode $n) => $o->setCurrentVersion($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'softwareFreshness' => fn(ParseNode $n) => $o->setSoftwareFreshness($n->getEnumValue(TeamworkSoftwareFreshness::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the softwareFreshness property value. The update status of the software. The possible values are: unknown, latest, updateAvailable, unknownFutureValue.
     * @return TeamworkSoftwareFreshness|null
    */
    public function getSoftwareFreshness(): ?TeamworkSoftwareFreshness {
        return $this->getBackingStore()->get('softwareFreshness');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('availableVersion', $this->getAvailableVersion());
        $writer->writeStringValue('currentVersion', $this->getCurrentVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('softwareFreshness', $this->getSoftwareFreshness());
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
     * Sets the availableVersion property value. The available software version to update.
     *  @param string|null $value Value to set for the availableVersion property.
    */
    public function setAvailableVersion(?string $value): void {
        $this->getBackingStore()->set('availableVersion', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the currentVersion property value. The current software version.
     *  @param string|null $value Value to set for the currentVersion property.
    */
    public function setCurrentVersion(?string $value): void {
        $this->getBackingStore()->set('currentVersion', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the softwareFreshness property value. The update status of the software. The possible values are: unknown, latest, updateAvailable, unknownFutureValue.
     *  @param TeamworkSoftwareFreshness|null $value Value to set for the softwareFreshness property.
    */
    public function setSoftwareFreshness(?TeamworkSoftwareFreshness $value): void {
        $this->getBackingStore()->set('softwareFreshness', $value);
    }

}
