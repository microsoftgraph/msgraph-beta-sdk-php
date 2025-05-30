<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\DataSecurityAndGovernance\SensitivityLabels\Evaluate;

use Microsoft\Graph\Beta\Generated\Models\CurrentLabel;
use Microsoft\Graph\Beta\Generated\Models\DiscoveredSensitiveType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EvaluatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EvaluatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluatePostRequestBody {
        return new EvaluatePostRequestBody();
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
     * Gets the currentLabel property value. The currentLabel property
     * @return CurrentLabel|null
    */
    public function getCurrentLabel(): ?CurrentLabel {
        $val = $this->getBackingStore()->get('currentLabel');
        if (is_null($val) || $val instanceof CurrentLabel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentLabel'");
    }

    /**
     * Gets the discoveredSensitiveTypes property value. The discoveredSensitiveTypes property
     * @return array<DiscoveredSensitiveType>|null
    */
    public function getDiscoveredSensitiveTypes(): ?array {
        $val = $this->getBackingStore()->get('discoveredSensitiveTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DiscoveredSensitiveType::class);
            /** @var array<DiscoveredSensitiveType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'discoveredSensitiveTypes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currentLabel' => fn(ParseNode $n) => $o->setCurrentLabel($n->getObjectValue([CurrentLabel::class, 'createFromDiscriminatorValue'])),
            'discoveredSensitiveTypes' => fn(ParseNode $n) => $o->setDiscoveredSensitiveTypes($n->getCollectionOfObjectValues([DiscoveredSensitiveType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('currentLabel', $this->getCurrentLabel());
        $writer->writeCollectionOfObjectValues('discoveredSensitiveTypes', $this->getDiscoveredSensitiveTypes());
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
     * Sets the currentLabel property value. The currentLabel property
     * @param CurrentLabel|null $value Value to set for the currentLabel property.
    */
    public function setCurrentLabel(?CurrentLabel $value): void {
        $this->getBackingStore()->set('currentLabel', $value);
    }

    /**
     * Sets the discoveredSensitiveTypes property value. The discoveredSensitiveTypes property
     * @param array<DiscoveredSensitiveType>|null $value Value to set for the discoveredSensitiveTypes property.
    */
    public function setDiscoveredSensitiveTypes(?array $value): void {
        $this->getBackingStore()->set('discoveredSensitiveTypes', $value);
    }

}
