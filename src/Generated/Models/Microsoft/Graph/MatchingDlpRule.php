<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MatchingDlpRule implements AdditionalDataHolder, Parsable 
{
    /** @var array<DlpActionInfo>|null $actions  */
    private ?array $actions = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $isMostRestrictive  */
    private ?bool $isMostRestrictive = null;
    
    /** @var string|null $policyId  */
    private ?string $policyId = null;
    
    /** @var string|null $policyName  */
    private ?string $policyName = null;
    
    /** @var int|null $priority  */
    private ?int $priority = null;
    
    /** @var string|null $ruleId  */
    private ?string $ruleId = null;
    
    /** @var RuleMode|null $ruleMode  */
    private ?RuleMode $ruleMode = null;
    
    /** @var string|null $ruleName  */
    private ?string $ruleName = null;
    
    /**
     * Instantiates a new matchingDlpRule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MatchingDlpRule
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MatchingDlpRule {
        return new MatchingDlpRule();
    }

    /**
     * Gets the actions property value. 
     * @return array<DlpActionInfo>|null
    */
    public function getActions(): ?array {
        return $this->actions;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'actions' => function (self $o, ParseNode $n) { $o->setActions($n->getCollectionOfObjectValues(DlpActionInfo::class)); },
            'isMostRestrictive' => function (self $o, ParseNode $n) { $o->setIsMostRestrictive($n->getBooleanValue()); },
            'policyId' => function (self $o, ParseNode $n) { $o->setPolicyId($n->getStringValue()); },
            'policyName' => function (self $o, ParseNode $n) { $o->setPolicyName($n->getStringValue()); },
            'priority' => function (self $o, ParseNode $n) { $o->setPriority($n->getIntegerValue()); },
            'ruleId' => function (self $o, ParseNode $n) { $o->setRuleId($n->getStringValue()); },
            'ruleMode' => function (self $o, ParseNode $n) { $o->setRuleMode($n->getEnumValue(RuleMode::class)); },
            'ruleName' => function (self $o, ParseNode $n) { $o->setRuleName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isMostRestrictive property value. 
     * @return bool|null
    */
    public function getIsMostRestrictive(): ?bool {
        return $this->isMostRestrictive;
    }

    /**
     * Gets the policyId property value. 
     * @return string|null
    */
    public function getPolicyId(): ?string {
        return $this->policyId;
    }

    /**
     * Gets the policyName property value. 
     * @return string|null
    */
    public function getPolicyName(): ?string {
        return $this->policyName;
    }

    /**
     * Gets the priority property value. 
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the ruleId property value. 
     * @return string|null
    */
    public function getRuleId(): ?string {
        return $this->ruleId;
    }

    /**
     * Gets the ruleMode property value. 
     * @return RuleMode|null
    */
    public function getRuleMode(): ?RuleMode {
        return $this->ruleMode;
    }

    /**
     * Gets the ruleName property value. 
     * @return string|null
    */
    public function getRuleName(): ?string {
        return $this->ruleName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('actions', $this->actions);
        $writer->writeBooleanValue('isMostRestrictive', $this->isMostRestrictive);
        $writer->writeStringValue('policyId', $this->policyId);
        $writer->writeStringValue('policyName', $this->policyName);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeStringValue('ruleId', $this->ruleId);
        $writer->writeEnumValue('ruleMode', $this->ruleMode);
        $writer->writeStringValue('ruleName', $this->ruleName);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actions property value. 
     *  @param array<DlpActionInfo>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value ): void {
        $this->actions = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the isMostRestrictive property value. 
     *  @param bool|null $value Value to set for the isMostRestrictive property.
    */
    public function setIsMostRestrictive(?bool $value ): void {
        $this->isMostRestrictive = $value;
    }

    /**
     * Sets the policyId property value. 
     *  @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value ): void {
        $this->policyId = $value;
    }

    /**
     * Sets the policyName property value. 
     *  @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value ): void {
        $this->policyName = $value;
    }

    /**
     * Sets the priority property value. 
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the ruleId property value. 
     *  @param string|null $value Value to set for the ruleId property.
    */
    public function setRuleId(?string $value ): void {
        $this->ruleId = $value;
    }

    /**
     * Sets the ruleMode property value. 
     *  @param RuleMode|null $value Value to set for the ruleMode property.
    */
    public function setRuleMode(?RuleMode $value ): void {
        $this->ruleMode = $value;
    }

    /**
     * Sets the ruleName property value. 
     *  @param string|null $value Value to set for the ruleName property.
    */
    public function setRuleName(?string $value ): void {
        $this->ruleName = $value;
    }

}
