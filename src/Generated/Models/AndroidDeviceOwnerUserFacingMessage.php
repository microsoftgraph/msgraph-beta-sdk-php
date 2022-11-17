<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AndroidDeviceOwnerUserFacingMessage implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new androidDeviceOwnerUserFacingMessage and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerUserFacingMessage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerUserFacingMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerUserFacingMessage {
        return new AndroidDeviceOwnerUserFacingMessage();
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
     * Gets the defaultMessage property value. The default message displayed if the user's locale doesn't match with any of the localized messages
     * @return string|null
    */
    public function getDefaultMessage(): ?string {
        return $this->getBackingStore()->get('defaultMessage');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultMessage' => fn(ParseNode $n) => $o->setDefaultMessage($n->getStringValue()),
            'localizedMessages' => fn(ParseNode $n) => $o->setLocalizedMessages($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the localizedMessages property value. The list of <locale, message> pairs. This collection can contain a maximum of 500 elements.
     * @return array<KeyValuePair>|null
    */
    public function getLocalizedMessages(): ?array {
        return $this->getBackingStore()->get('localizedMessages');
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
        $writer->writeStringValue('defaultMessage', $this->getDefaultMessage());
        $writer->writeCollectionOfObjectValues('localizedMessages', $this->getLocalizedMessages());
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
     * Sets the defaultMessage property value. The default message displayed if the user's locale doesn't match with any of the localized messages
     *  @param string|null $value Value to set for the defaultMessage property.
    */
    public function setDefaultMessage(?string $value): void {
        $this->getBackingStore()->set('defaultMessage', $value);
    }

    /**
     * Sets the localizedMessages property value. The list of <locale, message> pairs. This collection can contain a maximum of 500 elements.
     *  @param array<KeyValuePair>|null $value Value to set for the localizedMessages property.
    */
    public function setLocalizedMessages(?array $value): void {
        $this->getBackingStore()->set('localizedMessages', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
