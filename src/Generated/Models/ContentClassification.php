<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ContentClassification implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new contentClassification and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.contentClassification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentClassification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentClassification {
        return new ContentClassification();
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
     * Gets the confidence property value. The confidence property
     * @return int|null
    */
    public function getConfidence(): ?int {
        return $this->getBackingStore()->get('confidence');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'confidence' => fn(ParseNode $n) => $o->setConfidence($n->getIntegerValue()),
            'matches' => fn(ParseNode $n) => $o->setMatches($n->getCollectionOfObjectValues([MatchLocation::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sensitiveTypeId' => fn(ParseNode $n) => $o->setSensitiveTypeId($n->getStringValue()),
            'uniqueCount' => fn(ParseNode $n) => $o->setUniqueCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the matches property value. The matches property
     * @return array<MatchLocation>|null
    */
    public function getMatches(): ?array {
        return $this->getBackingStore()->get('matches');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the sensitiveTypeId property value. The sensitiveTypeId property
     * @return string|null
    */
    public function getSensitiveTypeId(): ?string {
        return $this->getBackingStore()->get('sensitiveTypeId');
    }

    /**
     * Gets the uniqueCount property value. The uniqueCount property
     * @return int|null
    */
    public function getUniqueCount(): ?int {
        return $this->getBackingStore()->get('uniqueCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('confidence', $this->getConfidence());
        $writer->writeCollectionOfObjectValues('matches', $this->getMatches());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sensitiveTypeId', $this->getSensitiveTypeId());
        $writer->writeIntegerValue('uniqueCount', $this->getUniqueCount());
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
     * Sets the confidence property value. The confidence property
     *  @param int|null $value Value to set for the confidence property.
    */
    public function setConfidence(?int $value): void {
        $this->getBackingStore()->set('confidence', $value);
    }

    /**
     * Sets the matches property value. The matches property
     *  @param array<MatchLocation>|null $value Value to set for the matches property.
    */
    public function setMatches(?array $value): void {
        $this->getBackingStore()->set('matches', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sensitiveTypeId property value. The sensitiveTypeId property
     *  @param string|null $value Value to set for the sensitiveTypeId property.
    */
    public function setSensitiveTypeId(?string $value): void {
        $this->getBackingStore()->set('sensitiveTypeId', $value);
    }

    /**
     * Sets the uniqueCount property value. The uniqueCount property
     *  @param int|null $value Value to set for the uniqueCount property.
    */
    public function setUniqueCount(?int $value): void {
        $this->getBackingStore()->set('uniqueCount', $value);
    }

}
