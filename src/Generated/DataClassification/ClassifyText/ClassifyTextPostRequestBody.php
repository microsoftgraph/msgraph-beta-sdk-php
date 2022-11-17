<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\ClassifyText;

use Microsoft\Graph\Beta\Generated\Models\MlClassificationMatchTolerance;
use Microsoft\Graph\Beta\Generated\Models\SensitiveTypeScope;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ClassifyTextPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new classifyTextPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassifyTextPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClassifyTextPostRequestBody {
        return new ClassifyTextPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fileExtension' => fn(ParseNode $n) => $o->setFileExtension($n->getStringValue()),
            'matchTolerancesToInclude' => fn(ParseNode $n) => $o->setMatchTolerancesToInclude($n->getEnumValue(MlClassificationMatchTolerance::class)),
            'scopesToRun' => fn(ParseNode $n) => $o->setScopesToRun($n->getEnumValue(SensitiveTypeScope::class)),
            'sensitiveTypeIds' => fn(ParseNode $n) => $o->setSensitiveTypeIds($n->getCollectionOfPrimitiveValues()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileExtension property value. The fileExtension property
     * @return string|null
    */
    public function getFileExtension(): ?string {
        return $this->getBackingStore()->get('fileExtension');
    }

    /**
     * Gets the matchTolerancesToInclude property value. The matchTolerancesToInclude property
     * @return MlClassificationMatchTolerance|null
    */
    public function getMatchTolerancesToInclude(): ?MlClassificationMatchTolerance {
        return $this->getBackingStore()->get('matchTolerancesToInclude');
    }

    /**
     * Gets the scopesToRun property value. The scopesToRun property
     * @return SensitiveTypeScope|null
    */
    public function getScopesToRun(): ?SensitiveTypeScope {
        return $this->getBackingStore()->get('scopesToRun');
    }

    /**
     * Gets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @return array<string>|null
    */
    public function getSensitiveTypeIds(): ?array {
        return $this->getBackingStore()->get('sensitiveTypeIds');
    }

    /**
     * Gets the text property value. The text property
     * @return string|null
    */
    public function getText(): ?string {
        return $this->getBackingStore()->get('text');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fileExtension', $this->getFileExtension());
        $writer->writeEnumValue('matchTolerancesToInclude', $this->getMatchTolerancesToInclude());
        $writer->writeEnumValue('scopesToRun', $this->getScopesToRun());
        $writer->writeCollectionOfPrimitiveValues('sensitiveTypeIds', $this->getSensitiveTypeIds());
        $writer->writeStringValue('text', $this->getText());
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
     * Sets the fileExtension property value. The fileExtension property
     *  @param string|null $value Value to set for the fileExtension property.
    */
    public function setFileExtension(?string $value): void {
        $this->getBackingStore()->set('fileExtension', $value);
    }

    /**
     * Sets the matchTolerancesToInclude property value. The matchTolerancesToInclude property
     *  @param MlClassificationMatchTolerance|null $value Value to set for the matchTolerancesToInclude property.
    */
    public function setMatchTolerancesToInclude(?MlClassificationMatchTolerance $value): void {
        $this->getBackingStore()->set('matchTolerancesToInclude', $value);
    }

    /**
     * Sets the scopesToRun property value. The scopesToRun property
     *  @param SensitiveTypeScope|null $value Value to set for the scopesToRun property.
    */
    public function setScopesToRun(?SensitiveTypeScope $value): void {
        $this->getBackingStore()->set('scopesToRun', $value);
    }

    /**
     * Sets the sensitiveTypeIds property value. The sensitiveTypeIds property
     *  @param array<string>|null $value Value to set for the sensitiveTypeIds property.
    */
    public function setSensitiveTypeIds(?array $value): void {
        $this->getBackingStore()->set('sensitiveTypeIds', $value);
    }

    /**
     * Sets the text property value. The text property
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->getBackingStore()->set('text', $value);
    }

}
