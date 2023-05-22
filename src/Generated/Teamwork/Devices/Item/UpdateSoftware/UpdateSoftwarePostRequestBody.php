<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\UpdateSoftware;

use Microsoft\Graph\Beta\Generated\Models\TeamworkSoftwareType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateSoftwarePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new updateSoftwarePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateSoftwarePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateSoftwarePostRequestBody {
        return new UpdateSoftwarePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'softwareType' => fn(ParseNode $n) => $o->setSoftwareType($n->getEnumValue(TeamworkSoftwareType::class)),
            'softwareVersion' => fn(ParseNode $n) => $o->setSoftwareVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the softwareType property value. The softwareType property
     * @return TeamworkSoftwareType|null
    */
    public function getSoftwareType(): ?TeamworkSoftwareType {
        return $this->getBackingStore()->get('softwareType');
    }

    /**
     * Gets the softwareVersion property value. The softwareVersion property
     * @return string|null
    */
    public function getSoftwareVersion(): ?string {
        return $this->getBackingStore()->get('softwareVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('softwareType', $this->getSoftwareType());
        $writer->writeStringValue('softwareVersion', $this->getSoftwareVersion());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the softwareType property value. The softwareType property
     * @param TeamworkSoftwareType|null $value Value to set for the softwareType property.
    */
    public function setSoftwareType(?TeamworkSoftwareType $value): void {
        $this->getBackingStore()->set('softwareType', $value);
    }

    /**
     * Sets the softwareVersion property value. The softwareVersion property
     * @param string|null $value Value to set for the softwareVersion property.
    */
    public function setSoftwareVersion(?string $value): void {
        $this->getBackingStore()->set('softwareVersion', $value);
    }

}
