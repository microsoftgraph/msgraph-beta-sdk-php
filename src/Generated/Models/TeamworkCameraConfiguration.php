<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TeamworkCameraConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkCameraConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkCameraConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkCameraConfiguration {
        return new TeamworkCameraConfiguration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cameras property value. The cameras property
     * @return array<TeamworkPeripheral>|null
    */
    public function getCameras(): ?array {
        $val = $this->getBackingStore()->get('cameras');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TeamworkPeripheral::class);
            /** @var array<TeamworkPeripheral>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cameras'");
    }

    /**
     * Gets the contentCameraConfiguration property value. The configuration for the content camera.
     * @return TeamworkContentCameraConfiguration|null
    */
    public function getContentCameraConfiguration(): ?TeamworkContentCameraConfiguration {
        $val = $this->getBackingStore()->get('contentCameraConfiguration');
        if (is_null($val) || $val instanceof TeamworkContentCameraConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentCameraConfiguration'");
    }

    /**
     * Gets the defaultContentCamera property value. The defaultContentCamera property
     * @return TeamworkPeripheral|null
    */
    public function getDefaultContentCamera(): ?TeamworkPeripheral {
        $val = $this->getBackingStore()->get('defaultContentCamera');
        if (is_null($val) || $val instanceof TeamworkPeripheral) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultContentCamera'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cameras' => fn(ParseNode $n) => $o->setCameras($n->getCollectionOfObjectValues([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            'contentCameraConfiguration' => fn(ParseNode $n) => $o->setContentCameraConfiguration($n->getObjectValue([TeamworkContentCameraConfiguration::class, 'createFromDiscriminatorValue'])),
            'defaultContentCamera' => fn(ParseNode $n) => $o->setDefaultContentCamera($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('cameras', $this->getCameras());
        $writer->writeObjectValue('contentCameraConfiguration', $this->getContentCameraConfiguration());
        $writer->writeObjectValue('defaultContentCamera', $this->getDefaultContentCamera());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cameras property value. The cameras property
     * @param array<TeamworkPeripheral>|null $value Value to set for the cameras property.
    */
    public function setCameras(?array $value): void {
        $this->getBackingStore()->set('cameras', $value);
    }

    /**
     * Sets the contentCameraConfiguration property value. The configuration for the content camera.
     * @param TeamworkContentCameraConfiguration|null $value Value to set for the contentCameraConfiguration property.
    */
    public function setContentCameraConfiguration(?TeamworkContentCameraConfiguration $value): void {
        $this->getBackingStore()->set('contentCameraConfiguration', $value);
    }

    /**
     * Sets the defaultContentCamera property value. The defaultContentCamera property
     * @param TeamworkPeripheral|null $value Value to set for the defaultContentCamera property.
    */
    public function setDefaultContentCamera(?TeamworkPeripheral $value): void {
        $this->getBackingStore()->set('defaultContentCamera', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
