<?php

namespace Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\Evaluate;

use Microsoft\Graph\Beta\Generated\Models\ConditionalAccessContext;
use Microsoft\Graph\Beta\Generated\Models\ConditionalAccessWhatIfConditions;
use Microsoft\Graph\Beta\Generated\Models\ConditionalAccessWhatIfSubject;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

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
     * Gets the appliedPoliciesOnly property value. The appliedPoliciesOnly property
     * @return bool|null
    */
    public function getAppliedPoliciesOnly(): ?bool {
        $val = $this->getBackingStore()->get('appliedPoliciesOnly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedPoliciesOnly'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the conditionalAccessContext property value. The conditionalAccessContext property
     * @return ConditionalAccessContext|null
    */
    public function getConditionalAccessContext(): ?ConditionalAccessContext {
        $val = $this->getBackingStore()->get('conditionalAccessContext');
        if (is_null($val) || $val instanceof ConditionalAccessContext) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessContext'");
    }

    /**
     * Gets the conditionalAccessWhatIfConditions property value. The conditionalAccessWhatIfConditions property
     * @return ConditionalAccessWhatIfConditions|null
    */
    public function getConditionalAccessWhatIfConditions(): ?ConditionalAccessWhatIfConditions {
        $val = $this->getBackingStore()->get('conditionalAccessWhatIfConditions');
        if (is_null($val) || $val instanceof ConditionalAccessWhatIfConditions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessWhatIfConditions'");
    }

    /**
     * Gets the conditionalAccessWhatIfSubject property value. The conditionalAccessWhatIfSubject property
     * @return ConditionalAccessWhatIfSubject|null
    */
    public function getConditionalAccessWhatIfSubject(): ?ConditionalAccessWhatIfSubject {
        $val = $this->getBackingStore()->get('conditionalAccessWhatIfSubject');
        if (is_null($val) || $val instanceof ConditionalAccessWhatIfSubject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessWhatIfSubject'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appliedPoliciesOnly' => fn(ParseNode $n) => $o->setAppliedPoliciesOnly($n->getBooleanValue()),
            'conditionalAccessContext' => fn(ParseNode $n) => $o->setConditionalAccessContext($n->getObjectValue([ConditionalAccessContext::class, 'createFromDiscriminatorValue'])),
            'conditionalAccessWhatIfConditions' => fn(ParseNode $n) => $o->setConditionalAccessWhatIfConditions($n->getObjectValue([ConditionalAccessWhatIfConditions::class, 'createFromDiscriminatorValue'])),
            'conditionalAccessWhatIfSubject' => fn(ParseNode $n) => $o->setConditionalAccessWhatIfSubject($n->getObjectValue([ConditionalAccessWhatIfSubject::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('appliedPoliciesOnly', $this->getAppliedPoliciesOnly());
        $writer->writeObjectValue('conditionalAccessContext', $this->getConditionalAccessContext());
        $writer->writeObjectValue('conditionalAccessWhatIfConditions', $this->getConditionalAccessWhatIfConditions());
        $writer->writeObjectValue('conditionalAccessWhatIfSubject', $this->getConditionalAccessWhatIfSubject());
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
     * Sets the appliedPoliciesOnly property value. The appliedPoliciesOnly property
     * @param bool|null $value Value to set for the appliedPoliciesOnly property.
    */
    public function setAppliedPoliciesOnly(?bool $value): void {
        $this->getBackingStore()->set('appliedPoliciesOnly', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the conditionalAccessContext property value. The conditionalAccessContext property
     * @param ConditionalAccessContext|null $value Value to set for the conditionalAccessContext property.
    */
    public function setConditionalAccessContext(?ConditionalAccessContext $value): void {
        $this->getBackingStore()->set('conditionalAccessContext', $value);
    }

    /**
     * Sets the conditionalAccessWhatIfConditions property value. The conditionalAccessWhatIfConditions property
     * @param ConditionalAccessWhatIfConditions|null $value Value to set for the conditionalAccessWhatIfConditions property.
    */
    public function setConditionalAccessWhatIfConditions(?ConditionalAccessWhatIfConditions $value): void {
        $this->getBackingStore()->set('conditionalAccessWhatIfConditions', $value);
    }

    /**
     * Sets the conditionalAccessWhatIfSubject property value. The conditionalAccessWhatIfSubject property
     * @param ConditionalAccessWhatIfSubject|null $value Value to set for the conditionalAccessWhatIfSubject property.
    */
    public function setConditionalAccessWhatIfSubject(?ConditionalAccessWhatIfSubject $value): void {
        $this->getBackingStore()->set('conditionalAccessWhatIfSubject', $value);
    }

}
