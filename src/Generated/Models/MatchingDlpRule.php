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

class MatchingDlpRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new matchingDlpRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MatchingDlpRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MatchingDlpRule {
        return new MatchingDlpRule();
    }

    /**
     * Gets the actions property value. The actions property
     * @return array<DlpActionInfo>|null
    */
    public function getActions(): ?array {
        $val = $this->getBackingStore()->get('actions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DlpActionInfo::class);
            /** @var array<DlpActionInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actions'");
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actions' => fn(ParseNode $n) => $o->setActions($n->getCollectionOfObjectValues([DlpActionInfo::class, 'createFromDiscriminatorValue'])),
            'isMostRestrictive' => fn(ParseNode $n) => $o->setIsMostRestrictive($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'ruleId' => fn(ParseNode $n) => $o->setRuleId($n->getStringValue()),
            'ruleMode' => fn(ParseNode $n) => $o->setRuleMode($n->getEnumValue(RuleMode::class)),
            'ruleName' => fn(ParseNode $n) => $o->setRuleName($n->getStringValue()),
        ];
    }

    /**
     * Gets the isMostRestrictive property value. The isMostRestrictive property
     * @return bool|null
    */
    public function getIsMostRestrictive(): ?bool {
        $val = $this->getBackingStore()->get('isMostRestrictive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMostRestrictive'");
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
     * Gets the policyId property value. The policyId property
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Gets the policyName property value. The policyName property
     * @return string|null
    */
    public function getPolicyName(): ?string {
        $val = $this->getBackingStore()->get('policyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyName'");
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the ruleId property value. The ruleId property
     * @return string|null
    */
    public function getRuleId(): ?string {
        $val = $this->getBackingStore()->get('ruleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ruleId'");
    }

    /**
     * Gets the ruleMode property value. The ruleMode property
     * @return RuleMode|null
    */
    public function getRuleMode(): ?RuleMode {
        $val = $this->getBackingStore()->get('ruleMode');
        if (is_null($val) || $val instanceof RuleMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ruleMode'");
    }

    /**
     * Gets the ruleName property value. The ruleName property
     * @return string|null
    */
    public function getRuleName(): ?string {
        $val = $this->getBackingStore()->get('ruleName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ruleName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('actions', $this->getActions());
        $writer->writeBooleanValue('isMostRestrictive', $this->getIsMostRestrictive());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeStringValue('policyName', $this->getPolicyName());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeStringValue('ruleId', $this->getRuleId());
        $writer->writeEnumValue('ruleMode', $this->getRuleMode());
        $writer->writeStringValue('ruleName', $this->getRuleName());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actions property value. The actions property
     * @param array<DlpActionInfo>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value): void {
        $this->getBackingStore()->set('actions', $value);
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
     * Sets the isMostRestrictive property value. The isMostRestrictive property
     * @param bool|null $value Value to set for the isMostRestrictive property.
    */
    public function setIsMostRestrictive(?bool $value): void {
        $this->getBackingStore()->set('isMostRestrictive', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyId property value. The policyId property
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the policyName property value. The policyName property
     * @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value): void {
        $this->getBackingStore()->set('policyName', $value);
    }

    /**
     * Sets the priority property value. The priority property
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the ruleId property value. The ruleId property
     * @param string|null $value Value to set for the ruleId property.
    */
    public function setRuleId(?string $value): void {
        $this->getBackingStore()->set('ruleId', $value);
    }

    /**
     * Sets the ruleMode property value. The ruleMode property
     * @param RuleMode|null $value Value to set for the ruleMode property.
    */
    public function setRuleMode(?RuleMode $value): void {
        $this->getBackingStore()->set('ruleMode', $value);
    }

    /**
     * Sets the ruleName property value. The ruleName property
     * @param string|null $value Value to set for the ruleName property.
    */
    public function setRuleName(?string $value): void {
        $this->getBackingStore()->set('ruleName', $value);
    }

}
