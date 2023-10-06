<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\ClassifyExactMatches;

use Microsoft\Graph\Beta\Generated\Models\ContentClassification;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ClassifyExactMatchesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new classifyExactMatchesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassifyExactMatchesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClassifyExactMatchesPostRequestBody {
        return new ClassifyExactMatchesPostRequestBody();
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
     * Gets the contentClassifications property value. The contentClassifications property
     * @return array<ContentClassification>|null
    */
    public function getContentClassifications(): ?array {
        $val = $this->getBackingStore()->get('contentClassifications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ContentClassification::class);
            /** @var array<ContentClassification>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentClassifications'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentClassifications' => fn(ParseNode $n) => $o->setContentClassifications($n->getCollectionOfObjectValues([ContentClassification::class, 'createFromDiscriminatorValue'])),
            'sensitiveTypeIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSensitiveTypeIds($val);
            },
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
            'timeoutInMs' => fn(ParseNode $n) => $o->setTimeoutInMs($n->getStringValue()),
        ];
    }

    /**
     * Gets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @return array<string>|null
    */
    public function getSensitiveTypeIds(): ?array {
        $val = $this->getBackingStore()->get('sensitiveTypeIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitiveTypeIds'");
    }

    /**
     * Gets the text property value. The text property
     * @return string|null
    */
    public function getText(): ?string {
        $val = $this->getBackingStore()->get('text');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'text'");
    }

    /**
     * Gets the timeoutInMs property value. The timeoutInMs property
     * @return string|null
    */
    public function getTimeoutInMs(): ?string {
        $val = $this->getBackingStore()->get('timeoutInMs');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeoutInMs'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('contentClassifications', $this->getContentClassifications());
        $writer->writeCollectionOfPrimitiveValues('sensitiveTypeIds', $this->getSensitiveTypeIds());
        $writer->writeStringValue('text', $this->getText());
        $writer->writeStringValue('timeoutInMs', $this->getTimeoutInMs());
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
     * Sets the contentClassifications property value. The contentClassifications property
     * @param array<ContentClassification>|null $value Value to set for the contentClassifications property.
    */
    public function setContentClassifications(?array $value): void {
        $this->getBackingStore()->set('contentClassifications', $value);
    }

    /**
     * Sets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @param array<string>|null $value Value to set for the sensitiveTypeIds property.
    */
    public function setSensitiveTypeIds(?array $value): void {
        $this->getBackingStore()->set('sensitiveTypeIds', $value);
    }

    /**
     * Sets the text property value. The text property
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->getBackingStore()->set('text', $value);
    }

    /**
     * Sets the timeoutInMs property value. The timeoutInMs property
     * @param string|null $value Value to set for the timeoutInMs property.
    */
    public function setTimeoutInMs(?string $value): void {
        $this->getBackingStore()->set('timeoutInMs', $value);
    }

}
