<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DlpPoliciesJobResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new dlpPoliciesJobResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DlpPoliciesJobResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DlpPoliciesJobResult {
        return new DlpPoliciesJobResult();
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
     * Gets the auditCorrelationId property value. The auditCorrelationId property
     * @return string|null
    */
    public function getAuditCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('auditCorrelationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'auditCorrelationId'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the evaluationDateTime property value. The evaluationDateTime property
     * @return DateTime|null
    */
    public function getEvaluationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('evaluationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'auditCorrelationId' => fn(ParseNode $n) => $o->setAuditCorrelationId($n->getStringValue()),
            'evaluationDateTime' => fn(ParseNode $n) => $o->setEvaluationDateTime($n->getDateTimeValue()),
            'matchingRules' => fn(ParseNode $n) => $o->setMatchingRules($n->getCollectionOfObjectValues([MatchingDlpRule::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the matchingRules property value. The matchingRules property
     * @return array<MatchingDlpRule>|null
    */
    public function getMatchingRules(): ?array {
        $val = $this->getBackingStore()->get('matchingRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MatchingDlpRule::class);
            /** @var array<MatchingDlpRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchingRules'");
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
        $writer->writeStringValue('auditCorrelationId', $this->getAuditCorrelationId());
        $writer->writeDateTimeValue('evaluationDateTime', $this->getEvaluationDateTime());
        $writer->writeCollectionOfObjectValues('matchingRules', $this->getMatchingRules());
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
     * Sets the auditCorrelationId property value. The auditCorrelationId property
     * @param string|null $value Value to set for the auditCorrelationId property.
    */
    public function setAuditCorrelationId(?string $value): void {
        $this->getBackingStore()->set('auditCorrelationId', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the evaluationDateTime property value. The evaluationDateTime property
     * @param DateTime|null $value Value to set for the evaluationDateTime property.
    */
    public function setEvaluationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('evaluationDateTime', $value);
    }

    /**
     * Sets the matchingRules property value. The matchingRules property
     * @param array<MatchingDlpRule>|null $value Value to set for the matchingRules property.
    */
    public function setMatchingRules(?array $value): void {
        $this->getBackingStore()->set('matchingRules', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
