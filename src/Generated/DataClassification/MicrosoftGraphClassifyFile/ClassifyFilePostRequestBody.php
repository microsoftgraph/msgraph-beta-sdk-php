<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\MicrosoftGraphClassifyFile;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Psr\Http\Message\StreamInterface;

class ClassifyFilePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new classifyFilePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassifyFilePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClassifyFilePostRequestBody {
        return new ClassifyFilePostRequestBody();
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
            'file' => fn(ParseNode $n) => $o->setFile($n->getBinaryContent()),
            'sensitiveTypeIds' => fn(ParseNode $n) => $o->setSensitiveTypeIds($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the file property value. The file property
     * @return StreamInterface|null
    */
    public function getFile(): ?StreamInterface {
        return $this->getBackingStore()->get('file');
    }

    /**
     * Gets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @return array<string>|null
    */
    public function getSensitiveTypeIds(): ?array {
        return $this->getBackingStore()->get('sensitiveTypeIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('file', $this->getFile());
        $writer->writeCollectionOfPrimitiveValues('sensitiveTypeIds', $this->getSensitiveTypeIds());
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
     * Sets the file property value. The file property
     * @param StreamInterface|null $value Value to set for the file property.
    */
    public function setFile(?StreamInterface $value): void {
        $this->getBackingStore()->set('file', $value);
    }

    /**
     * Sets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @param array<string>|null $value Value to set for the sensitiveTypeIds property.
    */
    public function setSensitiveTypeIds(?array $value): void {
        $this->getBackingStore()->set('sensitiveTypeIds', $value);
    }

}
