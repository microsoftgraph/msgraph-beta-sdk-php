<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\InformationProtection\Policy\Labels\EvaluateRemoval;

use Microsoft\Graph\Beta\Generated\Models\ContentInfo;
use Microsoft\Graph\Beta\Generated\Models\DowngradeJustification;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EvaluateRemovalPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new evaluateRemovalPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateRemovalPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateRemovalPostRequestBody {
        return new EvaluateRemovalPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the contentInfo property value. The contentInfo property
     * @return ContentInfo|null
    */
    public function getContentInfo(): ?ContentInfo {
        $val = $this->getBackingStore()->get('contentInfo');
        if (is_null($val) || $val instanceof ContentInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentInfo'");
    }

    /**
     * Gets the downgradeJustification property value. The downgradeJustification property
     * @return DowngradeJustification|null
    */
    public function getDowngradeJustification(): ?DowngradeJustification {
        $val = $this->getBackingStore()->get('downgradeJustification');
        if (is_null($val) || $val instanceof DowngradeJustification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'downgradeJustification'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentInfo' => fn(ParseNode $n) => $o->setContentInfo($n->getObjectValue([ContentInfo::class, 'createFromDiscriminatorValue'])),
            'downgradeJustification' => fn(ParseNode $n) => $o->setDowngradeJustification($n->getObjectValue([DowngradeJustification::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('contentInfo', $this->getContentInfo());
        $writer->writeObjectValue('downgradeJustification', $this->getDowngradeJustification());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the contentInfo property value. The contentInfo property
     * @param ContentInfo|null $value Value to set for the contentInfo property.
    */
    public function setContentInfo(?ContentInfo $value): void {
        $this->getBackingStore()->set('contentInfo', $value);
    }

    /**
     * Sets the downgradeJustification property value. The downgradeJustification property
     * @param DowngradeJustification|null $value Value to set for the downgradeJustification property.
    */
    public function setDowngradeJustification(?DowngradeJustification $value): void {
        $this->getBackingStore()->set('downgradeJustification', $value);
    }

}
