<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Psr\Http\Message\StreamInterface;

class ExportItemResponse implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ExportItemResponse and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExportItemResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExportItemResponse {
        return new ExportItemResponse();
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
     * Gets the changeKey property value. The version of the item.
     * @return string|null
    */
    public function getChangeKey(): ?string {
        $val = $this->getBackingStore()->get('changeKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changeKey'");
    }

    /**
     * Gets the data property value. Data that represents an item in a base64 encoded opaque stream.
     * @return StreamInterface|null
    */
    public function getData(): ?StreamInterface {
        $val = $this->getBackingStore()->get('data');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'data'");
    }

    /**
     * Gets the error property value. An error that occurs during an action.
     * @return MailTipsError|null
    */
    public function getError(): ?MailTipsError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof MailTipsError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'changeKey' => fn(ParseNode $n) => $o->setChangeKey($n->getStringValue()),
            'data' => fn(ParseNode $n) => $o->setData($n->getBinaryContent()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([MailTipsError::class, 'createFromDiscriminatorValue'])),
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemId property value. The unique identifier of the item.
     * @return string|null
    */
    public function getItemId(): ?string {
        $val = $this->getBackingStore()->get('itemId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemId'");
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
        $writer->writeStringValue('changeKey', $this->getChangeKey());
        $writer->writeBinaryContent('data', $this->getData());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeStringValue('itemId', $this->getItemId());
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
     * Sets the changeKey property value. The version of the item.
     * @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value): void {
        $this->getBackingStore()->set('changeKey', $value);
    }

    /**
     * Sets the data property value. Data that represents an item in a base64 encoded opaque stream.
     * @param StreamInterface|null $value Value to set for the data property.
    */
    public function setData(?StreamInterface $value): void {
        $this->getBackingStore()->set('data', $value);
    }

    /**
     * Sets the error property value. An error that occurs during an action.
     * @param MailTipsError|null $value Value to set for the error property.
    */
    public function setError(?MailTipsError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the itemId property value. The unique identifier of the item.
     * @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->getBackingStore()->set('itemId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
