<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\EvaluatePolicy;

use Microsoft\Graph\Beta\Generated\Models\EnforcementMode;
use Microsoft\Graph\Beta\Generated\Models\FetchResponse;
use Microsoft\Graph\Beta\Generated\Models\RequestHttpMethod;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EvaluatePolicyPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EvaluatePolicyPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setIncludeNormalizedRequestInput(false);
        $this->setIsResultDetailed(false);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluatePolicyPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluatePolicyPostRequestBody {
        return new EvaluatePolicyPostRequestBody();
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
     * Gets the enforcementMode property value. The enforcementMode property
     * @return EnforcementMode|null
    */
    public function getEnforcementMode(): ?EnforcementMode {
        $val = $this->getBackingStore()->get('enforcementMode');
        if (is_null($val) || $val instanceof EnforcementMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcementMode'");
    }

    /**
     * Gets the fetchResponses property value. The fetchResponses property
     * @return array<FetchResponse>|null
    */
    public function getFetchResponses(): ?array {
        $val = $this->getBackingStore()->get('fetchResponses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FetchResponse::class);
            /** @var array<FetchResponse>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fetchResponses'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enforcementMode' => fn(ParseNode $n) => $o->setEnforcementMode($n->getEnumValue(EnforcementMode::class)),
            'fetchResponses' => fn(ParseNode $n) => $o->setFetchResponses($n->getCollectionOfObjectValues([FetchResponse::class, 'createFromDiscriminatorValue'])),
            'httpMethod' => fn(ParseNode $n) => $o->setHttpMethod($n->getEnumValue(RequestHttpMethod::class)),
            'includeNormalizedRequestInput' => fn(ParseNode $n) => $o->setIncludeNormalizedRequestInput($n->getBooleanValue()),
            'isResultDetailed' => fn(ParseNode $n) => $o->setIsResultDetailed($n->getBooleanValue()),
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getStringValue()),
            'resourceUri' => fn(ParseNode $n) => $o->setResourceUri($n->getStringValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getStringValue()),
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
     * Gets the includeNormalizedRequestInput property value. The includeNormalizedRequestInput property
     * @return bool|null
    */
    public function getIncludeNormalizedRequestInput(): ?bool {
        $val = $this->getBackingStore()->get('includeNormalizedRequestInput');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeNormalizedRequestInput'");
    }

    /**
     * Gets the isResultDetailed property value. The isResultDetailed property
     * @return bool|null
    */
    public function getIsResultDetailed(): ?bool {
        $val = $this->getBackingStore()->get('isResultDetailed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isResultDetailed'");
    }

    /**
     * Gets the policy property value. The policy property
     * @return string|null
    */
    public function getPolicy(): ?string {
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
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
     * Gets the scope property value. The scope property
     * @return string|null
    */
    public function getScope(): ?string {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('enforcementMode', $this->getEnforcementMode());
        $writer->writeCollectionOfObjectValues('fetchResponses', $this->getFetchResponses());
        $writer->writeEnumValue('httpMethod', $this->getHttpMethod());
        $writer->writeBooleanValue('includeNormalizedRequestInput', $this->getIncludeNormalizedRequestInput());
        $writer->writeBooleanValue('isResultDetailed', $this->getIsResultDetailed());
        $writer->writeStringValue('policy', $this->getPolicy());
        $writer->writeStringValue('resourceUri', $this->getResourceUri());
        $writer->writeStringValue('scope', $this->getScope());
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
     * Sets the enforcementMode property value. The enforcementMode property
     * @param EnforcementMode|null $value Value to set for the enforcementMode property.
    */
    public function setEnforcementMode(?EnforcementMode $value): void {
        $this->getBackingStore()->set('enforcementMode', $value);
    }

    /**
     * Sets the fetchResponses property value. The fetchResponses property
     * @param array<FetchResponse>|null $value Value to set for the fetchResponses property.
    */
    public function setFetchResponses(?array $value): void {
        $this->getBackingStore()->set('fetchResponses', $value);
    }

    /**
     * Sets the httpMethod property value. The httpMethod property
     * @param RequestHttpMethod|null $value Value to set for the httpMethod property.
    */
    public function setHttpMethod(?RequestHttpMethod $value): void {
        $this->getBackingStore()->set('httpMethod', $value);
    }

    /**
     * Sets the includeNormalizedRequestInput property value. The includeNormalizedRequestInput property
     * @param bool|null $value Value to set for the includeNormalizedRequestInput property.
    */
    public function setIncludeNormalizedRequestInput(?bool $value): void {
        $this->getBackingStore()->set('includeNormalizedRequestInput', $value);
    }

    /**
     * Sets the isResultDetailed property value. The isResultDetailed property
     * @param bool|null $value Value to set for the isResultDetailed property.
    */
    public function setIsResultDetailed(?bool $value): void {
        $this->getBackingStore()->set('isResultDetailed', $value);
    }

    /**
     * Sets the policy property value. The policy property
     * @param string|null $value Value to set for the policy property.
    */
    public function setPolicy(?string $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the resourceUri property value. The resourceUri property
     * @param string|null $value Value to set for the resourceUri property.
    */
    public function setResourceUri(?string $value): void {
        $this->getBackingStore()->set('resourceUri', $value);
    }

    /**
     * Sets the scope property value. The scope property
     * @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

}
