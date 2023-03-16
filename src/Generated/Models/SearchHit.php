<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SearchHit implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new searchHit and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchHit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchHit {
        return new SearchHit();
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
     * Gets the contentSource property value. The name of the content source that the externalItem is part of.
     * @return string|null
    */
    public function getContentSource(): ?string {
        return $this->getBackingStore()->get('contentSource');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '_id' => fn(ParseNode $n) => $o->setid($n->getStringValue()),
            '_score' => fn(ParseNode $n) => $o->setscore($n->getIntegerValue()),
            '_source' => fn(ParseNode $n) => $o->setsource($n->getObjectValue([Entity::class, 'createFromDiscriminatorValue'])),
            'contentSource' => fn(ParseNode $n) => $o->setContentSource($n->getStringValue()),
            'hitId' => fn(ParseNode $n) => $o->setHitId($n->getStringValue()),
            'isCollapsed' => fn(ParseNode $n) => $o->setIsCollapsed($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'rank' => fn(ParseNode $n) => $o->setRank($n->getIntegerValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([Entity::class, 'createFromDiscriminatorValue'])),
            'resultTemplateId' => fn(ParseNode $n) => $o->setResultTemplateId($n->getStringValue()),
            'summary' => fn(ParseNode $n) => $o->setsummary($n->getStringValue()),
        ];
    }

    /**
     * Gets the hitId property value. The internal identifier for the item. The format of the identifier varies based on the entity type. For details, see hitId format.
     * @return string|null
    */
    public function getHitId(): ?string {
        return $this->getBackingStore()->get('hitId');
    }

    /**
     * Gets the _id property value. The _id property
     * @return string|null
    */
    public function getid(): ?string {
        return $this->getBackingStore()->get('_id');
    }

    /**
     * Gets the isCollapsed property value. Indicates whether the current result is collapses when the collapseProperties property is used.
     * @return bool|null
    */
    public function getIsCollapsed(): ?bool {
        return $this->getBackingStore()->get('isCollapsed');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the rank property value. The rank or the order of the result.
     * @return int|null
    */
    public function getRank(): ?int {
        return $this->getBackingStore()->get('rank');
    }

    /**
     * Gets the resource property value. The resource property
     * @return Entity|null
    */
    public function getResource(): ?Entity {
        return $this->getBackingStore()->get('resource');
    }

    /**
     * Gets the resultTemplateId property value. ID of the result template for rendering the search result. This ID must map to a display layout in the resultTemplates dictionary, included in the searchresponse as well.
     * @return string|null
    */
    public function getResultTemplateId(): ?string {
        return $this->getBackingStore()->get('resultTemplateId');
    }

    /**
     * Gets the _score property value. The _score property
     * @return int|null
    */
    public function getscore(): ?int {
        return $this->getBackingStore()->get('_score');
    }

    /**
     * Gets the _source property value. The _source property
     * @return Entity|null
    */
    public function getsource(): ?Entity {
        return $this->getBackingStore()->get('_source');
    }

    /**
     * Gets the summary property value. A summary of the result, if a summary is available.
     * @return string|null
    */
    public function getsummary(): ?string {
        return $this->getBackingStore()->get('summary');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contentSource', $this->getContentSource());
        $writer->writeStringValue('hitId', $this->getHitId());
        $writer->writeBooleanValue('isCollapsed', $this->getIsCollapsed());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('rank', $this->getRank());
        $writer->writeObjectValue('resource', $this->getResource());
        $writer->writeStringValue('resultTemplateId', $this->getResultTemplateId());
        $writer->writeStringValue('summary', $this->getsummary());
        $writer->writeStringValue('_id', $this->getid());
        $writer->writeIntegerValue('_score', $this->getscore());
        $writer->writeObjectValue('_source', $this->getsource());
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
     * Sets the contentSource property value. The name of the content source that the externalItem is part of.
     * @param string|null $value Value to set for the contentSource property.
    */
    public function setContentSource(?string $value): void {
        $this->getBackingStore()->set('contentSource', $value);
    }

    /**
     * Sets the hitId property value. The internal identifier for the item. The format of the identifier varies based on the entity type. For details, see hitId format.
     * @param string|null $value Value to set for the hitId property.
    */
    public function setHitId(?string $value): void {
        $this->getBackingStore()->set('hitId', $value);
    }

    /**
     * Sets the _id property value. The _id property
     * @param string|null $value Value to set for the _id property.
    */
    public function setid(?string $value): void {
        $this->getBackingStore()->set('_id', $value);
    }

    /**
     * Sets the isCollapsed property value. Indicates whether the current result is collapses when the collapseProperties property is used.
     * @param bool|null $value Value to set for the isCollapsed property.
    */
    public function setIsCollapsed(?bool $value): void {
        $this->getBackingStore()->set('isCollapsed', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the rank property value. The rank or the order of the result.
     * @param int|null $value Value to set for the rank property.
    */
    public function setRank(?int $value): void {
        $this->getBackingStore()->set('rank', $value);
    }

    /**
     * Sets the resource property value. The resource property
     * @param Entity|null $value Value to set for the resource property.
    */
    public function setResource(?Entity $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the resultTemplateId property value. ID of the result template for rendering the search result. This ID must map to a display layout in the resultTemplates dictionary, included in the searchresponse as well.
     * @param string|null $value Value to set for the resultTemplateId property.
    */
    public function setResultTemplateId(?string $value): void {
        $this->getBackingStore()->set('resultTemplateId', $value);
    }

    /**
     * Sets the _score property value. The _score property
     * @param int|null $value Value to set for the _score property.
    */
    public function setscore(?int $value): void {
        $this->getBackingStore()->set('_score', $value);
    }

    /**
     * Sets the _source property value. The _source property
     * @param Entity|null $value Value to set for the _source property.
    */
    public function setsource(?Entity $value): void {
        $this->getBackingStore()->set('_source', $value);
    }

    /**
     * Sets the summary property value. A summary of the result, if a summary is available.
     * @param string|null $value Value to set for the summary property.
    */
    public function setsummary(?string $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

}
