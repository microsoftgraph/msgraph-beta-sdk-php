<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MatchingDlpRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<DlpActionInfo>|null $actions The actions property
    */
    private ?array $actions = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isMostRestrictive The isMostRestrictive property
    */
    private ?bool $isMostRestrictive = null;
    
    /**
     * @var string|null $policyId The policyId property
    */
    private ?string $policyId = null;
    
    /**
     * @var string|null $policyName The policyName property
    */
    private ?string $policyName = null;
    
    /**
     * @var int|null $priority The priority property
    */
    private ?int $priority = null;
    
    /**
     * @var string|null $ruleId The ruleId property
    */
    private ?string $ruleId = null;
    
    /**
     * @var RuleMode|null $ruleMode The ruleMode property
    */
    private ?RuleMode $ruleMode = null;
    
    /**
     * @var string|null $ruleName The ruleName property
    */
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MatchingDlpRule {
        return new MatchingDlpRule();
    }

    /**
     * Gets the actions property value. The actions property
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
        $o = $this;
        return  [
            'actions' => function (ParseNode $n) use ($o) { $o->setActions($n->getCollectionOfObjectValues(array(DlpActionInfo::class, 'createFromDiscriminatorValue'))); },
            'isMostRestrictive' => function (ParseNode $n) use ($o) { $o->setIsMostRestrictive($n->getBooleanValue()); },
            'policyId' => function (ParseNode $n) use ($o) { $o->setPolicyId($n->getStringValue()); },
            'policyName' => function (ParseNode $n) use ($o) { $o->setPolicyName($n->getStringValue()); },
            'priority' => function (ParseNode $n) use ($o) { $o->setPriority($n->getIntegerValue()); },
            'ruleId' => function (ParseNode $n) use ($o) { $o->setRuleId($n->getStringValue()); },
            'ruleMode' => function (ParseNode $n) use ($o) { $o->setRuleMode($n->getEnumValue(RuleMode::class)); },
            'ruleName' => function (ParseNode $n) use ($o) { $o->setRuleName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isMostRestrictive property value. The isMostRestrictive property
     * @return bool|null
    */
    public function getIsMostRestrictive(): ?bool {
        return $this->isMostRestrictive;
    }

    /**
     * Gets the policyId property value. The policyId property
     * @return string|null
    */
    public function getPolicyId(): ?string {
        return $this->policyId;
    }

    /**
     * Gets the policyName property value. The policyName property
     * @return string|null
    */
    public function getPolicyName(): ?string {
        return $this->policyName;
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the ruleId property value. The ruleId property
     * @return string|null
    */
    public function getRuleId(): ?string {
        return $this->ruleId;
    }

    /**
     * Gets the ruleMode property value. The ruleMode property
     * @return RuleMode|null
    */
    public function getRuleMode(): ?RuleMode {
        return $this->ruleMode;
    }

    /**
     * Gets the ruleName property value. The ruleName property
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
     * Sets the actions property value. The actions property
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
     * Sets the isMostRestrictive property value. The isMostRestrictive property
     *  @param bool|null $value Value to set for the isMostRestrictive property.
    */
    public function setIsMostRestrictive(?bool $value ): void {
        $this->isMostRestrictive = $value;
    }

    /**
     * Sets the policyId property value. The policyId property
     *  @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value ): void {
        $this->policyId = $value;
    }

    /**
     * Sets the policyName property value. The policyName property
     *  @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value ): void {
        $this->policyName = $value;
    }

    /**
     * Sets the priority property value. The priority property
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the ruleId property value. The ruleId property
     *  @param string|null $value Value to set for the ruleId property.
    */
    public function setRuleId(?string $value ): void {
        $this->ruleId = $value;
    }

    /**
     * Sets the ruleMode property value. The ruleMode property
     *  @param RuleMode|null $value Value to set for the ruleMode property.
    */
    public function setRuleMode(?RuleMode $value ): void {
        $this->ruleMode = $value;
    }

    /**
     * Sets the ruleName property value. The ruleName property
     *  @param string|null $value Value to set for the ruleName property.
    */
    public function setRuleName(?string $value ): void {
        $this->ruleName = $value;
    }

}
