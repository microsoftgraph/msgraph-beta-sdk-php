<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Sites\Item\InformationProtection\Policy\Labels\EvaluateClassificationResults;

use Microsoft\Graph\Beta\Generated\Models\ClassificationResult;
use Microsoft\Graph\Beta\Generated\Models\ContentInfo;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EvaluateClassificationResultsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EvaluateClassificationResultsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateClassificationResultsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateClassificationResultsPostRequestBody {
        return new EvaluateClassificationResultsPostRequestBody();
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
     * Gets the classificationResults property value. The classificationResults property
     * @return array<ClassificationResult>|null
    */
    public function getClassificationResults(): ?array {
        $val = $this->getBackingStore()->get('classificationResults');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ClassificationResult::class);
            /** @var array<ClassificationResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classificationResults'");
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'classificationResults' => fn(ParseNode $n) => $o->setClassificationResults($n->getCollectionOfObjectValues([ClassificationResult::class, 'createFromDiscriminatorValue'])),
            'contentInfo' => fn(ParseNode $n) => $o->setContentInfo($n->getObjectValue([ContentInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('classificationResults', $this->getClassificationResults());
        $writer->writeObjectValue('contentInfo', $this->getContentInfo());
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
     * Sets the classificationResults property value. The classificationResults property
     * @param array<ClassificationResult>|null $value Value to set for the classificationResults property.
    */
    public function setClassificationResults(?array $value): void {
        $this->getBackingStore()->set('classificationResults', $value);
    }

    /**
     * Sets the contentInfo property value. The contentInfo property
     * @param ContentInfo|null $value Value to set for the contentInfo property.
    */
    public function setContentInfo(?ContentInfo $value): void {
        $this->getBackingStore()->set('contentInfo', $value);
    }

}
