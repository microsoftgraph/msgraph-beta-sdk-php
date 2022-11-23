<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class BusinessScenarioProperties implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new businessScenarioProperties and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessScenarioProperties
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessScenarioProperties {
        return new BusinessScenarioProperties();
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
     * Gets the externalBucketId property value. The externalBucketId property
     * @return string|null
    */
    public function getExternalBucketId(): ?string {
        return $this->getBackingStore()->get('externalBucketId');
    }

    /**
     * Gets the externalContextId property value. The externalContextId property
     * @return string|null
    */
    public function getExternalContextId(): ?string {
        return $this->getBackingStore()->get('externalContextId');
    }

    /**
     * Gets the externalObjectId property value. The externalObjectId property
     * @return string|null
    */
    public function getExternalObjectId(): ?string {
        return $this->getBackingStore()->get('externalObjectId');
    }

    /**
     * Gets the externalObjectVersion property value. The externalObjectVersion property
     * @return string|null
    */
    public function getExternalObjectVersion(): ?string {
        return $this->getBackingStore()->get('externalObjectVersion');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'externalBucketId' => fn(ParseNode $n) => $o->setExternalBucketId($n->getStringValue()),
            'externalContextId' => fn(ParseNode $n) => $o->setExternalContextId($n->getStringValue()),
            'externalObjectId' => fn(ParseNode $n) => $o->setExternalObjectId($n->getStringValue()),
            'externalObjectVersion' => fn(ParseNode $n) => $o->setExternalObjectVersion($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
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
     * Gets the webUrl property value. The webUrl property
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->getBackingStore()->get('webUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('externalBucketId', $this->getExternalBucketId());
        $writer->writeStringValue('externalContextId', $this->getExternalContextId());
        $writer->writeStringValue('externalObjectId', $this->getExternalObjectId());
        $writer->writeStringValue('externalObjectVersion', $this->getExternalObjectVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
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
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the externalBucketId property value. The externalBucketId property
     *  @param string|null $value Value to set for the externalBucketId property.
    */
    public function setExternalBucketId(?string $value): void {
        $this->getBackingStore()->set('externalBucketId', $value);
    }

    /**
     * Sets the externalContextId property value. The externalContextId property
     *  @param string|null $value Value to set for the externalContextId property.
    */
    public function setExternalContextId(?string $value): void {
        $this->getBackingStore()->set('externalContextId', $value);
    }

    /**
     * Sets the externalObjectId property value. The externalObjectId property
     *  @param string|null $value Value to set for the externalObjectId property.
    */
    public function setExternalObjectId(?string $value): void {
        $this->getBackingStore()->set('externalObjectId', $value);
    }

    /**
     * Sets the externalObjectVersion property value. The externalObjectVersion property
     *  @param string|null $value Value to set for the externalObjectVersion property.
    */
    public function setExternalObjectVersion(?string $value): void {
        $this->getBackingStore()->set('externalObjectVersion', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the webUrl property value. The webUrl property
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
