<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PoliciesEvaluationResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PoliciesEvaluationResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PoliciesEvaluationResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PoliciesEvaluationResult {
        return new PoliciesEvaluationResult();
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
     * Gets the appliedPoliciesEffects property value. The appliedPoliciesEffects property
     * @return PolicyEffects|null
    */
    public function getAppliedPoliciesEffects(): ?PolicyEffects {
        $val = $this->getBackingStore()->get('appliedPoliciesEffects');
        if (is_null($val) || $val instanceof PolicyEffects) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedPoliciesEffects'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the details property value. The details property
     * @return array<PoliciesEvaluationDetail>|null
    */
    public function getDetails(): ?array {
        $val = $this->getBackingStore()->get('details');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PoliciesEvaluationDetail::class);
            /** @var array<PoliciesEvaluationDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appliedPoliciesEffects' => fn(ParseNode $n) => $o->setAppliedPoliciesEffects($n->getEnumValue(PolicyEffects::class)),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfObjectValues([PoliciesEvaluationDetail::class, 'createFromDiscriminatorValue'])),
            'httpMethod' => fn(ParseNode $n) => $o->setHttpMethod($n->getEnumValue(RequestHttpMethod::class)),
            'isBlocked' => fn(ParseNode $n) => $o->setIsBlocked($n->getBooleanValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceUri' => fn(ParseNode $n) => $o->setResourceUri($n->getStringValue()),
        ];
    }

    /**
     * Gets the httpMethod property value. The httpMethod property
     * @return RequestHttpMethod|null
    */
    public function getHttpMethod(): ?RequestHttpMethod {
        $val = $this->getBackingStore()->get('httpMethod');
        if (is_null($val) || $val instanceof RequestHttpMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'httpMethod'");
    }

    /**
     * Gets the isBlocked property value. The isBlocked property
     * @return bool|null
    */
    public function getIsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('isBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isBlocked'");
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        $val = $this->getBackingStore()->get('message');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'message'");
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
     * Gets the resourceUri property value. The resourceUri property
     * @return string|null
    */
    public function getResourceUri(): ?string {
        $val = $this->getBackingStore()->get('resourceUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceUri'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('appliedPoliciesEffects', $this->getAppliedPoliciesEffects());
        $writer->writeEnumValue('httpMethod', $this->getHttpMethod());
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
     * Sets the appliedPoliciesEffects property value. The appliedPoliciesEffects property
     * @param PolicyEffects|null $value Value to set for the appliedPoliciesEffects property.
    */
    public function setAppliedPoliciesEffects(?PolicyEffects $value): void {
        $this->getBackingStore()->set('appliedPoliciesEffects', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the details property value. The details property
     * @param array<PoliciesEvaluationDetail>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the httpMethod property value. The httpMethod property
     * @param RequestHttpMethod|null $value Value to set for the httpMethod property.
    */
    public function setHttpMethod(?RequestHttpMethod $value): void {
        $this->getBackingStore()->set('httpMethod', $value);
    }

    /**
     * Sets the isBlocked property value. The isBlocked property
     * @param bool|null $value Value to set for the isBlocked property.
    */
    public function setIsBlocked(?bool $value): void {
        $this->getBackingStore()->set('isBlocked', $value);
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resourceUri property value. The resourceUri property
     * @param string|null $value Value to set for the resourceUri property.
    */
    public function setResourceUri(?string $value): void {
        $this->getBackingStore()->set('resourceUri', $value);
    }

}
