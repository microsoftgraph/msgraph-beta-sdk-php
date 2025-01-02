<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DetonationDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DetonationDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DetonationDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DetonationDetails {
        return new DetonationDetails();
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
     * Gets the analysisDateTime property value. The time of detonation.
     * @return DateTime|null
    */
    public function getAnalysisDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('analysisDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'analysisDateTime'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the compromiseIndicators property value. The compromiseIndicators property
     * @return array<CompromiseIndicator>|null
    */
    public function getCompromiseIndicators(): ?array {
        $val = $this->getBackingStore()->get('compromiseIndicators');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CompromiseIndicator::class);
            /** @var array<CompromiseIndicator>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compromiseIndicators'");
    }

    /**
     * Gets the detonationBehaviourDetails property value. The detonationBehaviourDetails property
     * @return DetonationBehaviourDetails|null
    */
    public function getDetonationBehaviourDetails(): ?DetonationBehaviourDetails {
        $val = $this->getBackingStore()->get('detonationBehaviourDetails');
        if (is_null($val) || $val instanceof DetonationBehaviourDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detonationBehaviourDetails'");
    }

    /**
     * Gets the detonationChain property value. The chain of detonation.
     * @return DetonationChain|null
    */
    public function getDetonationChain(): ?DetonationChain {
        $val = $this->getBackingStore()->get('detonationChain');
        if (is_null($val) || $val instanceof DetonationChain) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detonationChain'");
    }

    /**
     * Gets the detonationObservables property value. All observables in the detonation tree.
     * @return DetonationObservables|null
    */
    public function getDetonationObservables(): ?DetonationObservables {
        $val = $this->getBackingStore()->get('detonationObservables');
        if (is_null($val) || $val instanceof DetonationObservables) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detonationObservables'");
    }

    /**
     * Gets the detonationScreenshotUri property value. The detonationScreenshotUri property
     * @return string|null
    */
    public function getDetonationScreenshotUri(): ?string {
        $val = $this->getBackingStore()->get('detonationScreenshotUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detonationScreenshotUri'");
    }

    /**
     * Gets the detonationVerdict property value. The verdict of the detonation.
     * @return string|null
    */
    public function getDetonationVerdict(): ?string {
        $val = $this->getBackingStore()->get('detonationVerdict');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detonationVerdict'");
    }

    /**
     * Gets the detonationVerdictReason property value. The reason for the verdict of the detonation.
     * @return string|null
    */
    public function getDetonationVerdictReason(): ?string {
        $val = $this->getBackingStore()->get('detonationVerdictReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detonationVerdictReason'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'analysisDateTime' => fn(ParseNode $n) => $o->setAnalysisDateTime($n->getDateTimeValue()),
            'compromiseIndicators' => fn(ParseNode $n) => $o->setCompromiseIndicators($n->getCollectionOfObjectValues([CompromiseIndicator::class, 'createFromDiscriminatorValue'])),
            'detonationBehaviourDetails' => fn(ParseNode $n) => $o->setDetonationBehaviourDetails($n->getObjectValue([DetonationBehaviourDetails::class, 'createFromDiscriminatorValue'])),
            'detonationChain' => fn(ParseNode $n) => $o->setDetonationChain($n->getObjectValue([DetonationChain::class, 'createFromDiscriminatorValue'])),
            'detonationObservables' => fn(ParseNode $n) => $o->setDetonationObservables($n->getObjectValue([DetonationObservables::class, 'createFromDiscriminatorValue'])),
            'detonationScreenshotUri' => fn(ParseNode $n) => $o->setDetonationScreenshotUri($n->getStringValue()),
            'detonationVerdict' => fn(ParseNode $n) => $o->setDetonationVerdict($n->getStringValue()),
            'detonationVerdictReason' => fn(ParseNode $n) => $o->setDetonationVerdictReason($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
        $writer->writeDateTimeValue('analysisDateTime', $this->getAnalysisDateTime());
        $writer->writeCollectionOfObjectValues('compromiseIndicators', $this->getCompromiseIndicators());
        $writer->writeObjectValue('detonationBehaviourDetails', $this->getDetonationBehaviourDetails());
        $writer->writeObjectValue('detonationChain', $this->getDetonationChain());
        $writer->writeObjectValue('detonationObservables', $this->getDetonationObservables());
        $writer->writeStringValue('detonationScreenshotUri', $this->getDetonationScreenshotUri());
        $writer->writeStringValue('detonationVerdict', $this->getDetonationVerdict());
        $writer->writeStringValue('detonationVerdictReason', $this->getDetonationVerdictReason());
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
     * Sets the analysisDateTime property value. The time of detonation.
     * @param DateTime|null $value Value to set for the analysisDateTime property.
    */
    public function setAnalysisDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('analysisDateTime', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the compromiseIndicators property value. The compromiseIndicators property
     * @param array<CompromiseIndicator>|null $value Value to set for the compromiseIndicators property.
    */
    public function setCompromiseIndicators(?array $value): void {
        $this->getBackingStore()->set('compromiseIndicators', $value);
    }

    /**
     * Sets the detonationBehaviourDetails property value. The detonationBehaviourDetails property
     * @param DetonationBehaviourDetails|null $value Value to set for the detonationBehaviourDetails property.
    */
    public function setDetonationBehaviourDetails(?DetonationBehaviourDetails $value): void {
        $this->getBackingStore()->set('detonationBehaviourDetails', $value);
    }

    /**
     * Sets the detonationChain property value. The chain of detonation.
     * @param DetonationChain|null $value Value to set for the detonationChain property.
    */
    public function setDetonationChain(?DetonationChain $value): void {
        $this->getBackingStore()->set('detonationChain', $value);
    }

    /**
     * Sets the detonationObservables property value. All observables in the detonation tree.
     * @param DetonationObservables|null $value Value to set for the detonationObservables property.
    */
    public function setDetonationObservables(?DetonationObservables $value): void {
        $this->getBackingStore()->set('detonationObservables', $value);
    }

    /**
     * Sets the detonationScreenshotUri property value. The detonationScreenshotUri property
     * @param string|null $value Value to set for the detonationScreenshotUri property.
    */
    public function setDetonationScreenshotUri(?string $value): void {
        $this->getBackingStore()->set('detonationScreenshotUri', $value);
    }

    /**
     * Sets the detonationVerdict property value. The verdict of the detonation.
     * @param string|null $value Value to set for the detonationVerdict property.
    */
    public function setDetonationVerdict(?string $value): void {
        $this->getBackingStore()->set('detonationVerdict', $value);
    }

    /**
     * Sets the detonationVerdictReason property value. The reason for the verdict of the detonation.
     * @param string|null $value Value to set for the detonationVerdictReason property.
    */
    public function setDetonationVerdictReason(?string $value): void {
        $this->getBackingStore()->set('detonationVerdictReason', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
