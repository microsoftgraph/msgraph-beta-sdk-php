<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceRuleSetting implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $ruleIdentifier The id of the rule. For example, ExpirationRule and MfaRule.
    */
    private ?string $ruleIdentifier = null;
    
    /**
     * @var string|null $setting The settings of the rule. The value is a JSON string with a list of pairs in the format of Parameter_Name:Parameter_Value. For example, {'permanentAssignment':false,'maximumGrantPeriodInMinutes':129600}
    */
    private ?string $setting = null;
    
    /**
     * Instantiates a new governanceRuleSetting and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.governanceRuleSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceRuleSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceRuleSetting {
        return new GovernanceRuleSetting();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ruleIdentifier' => fn(ParseNode $n) => $o->setRuleIdentifier($n->getStringValue()),
            'setting' => fn(ParseNode $n) => $o->setSetting($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the ruleIdentifier property value. The id of the rule. For example, ExpirationRule and MfaRule.
     * @return string|null
    */
    public function getRuleIdentifier(): ?string {
        return $this->ruleIdentifier;
    }

    /**
     * Gets the setting property value. The settings of the rule. The value is a JSON string with a list of pairs in the format of Parameter_Name:Parameter_Value. For example, {'permanentAssignment':false,'maximumGrantPeriodInMinutes':129600}
     * @return string|null
    */
    public function getSetting(): ?string {
        return $this->setting;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('ruleIdentifier', $this->ruleIdentifier);
        $writer->writeStringValue('setting', $this->setting);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the ruleIdentifier property value. The id of the rule. For example, ExpirationRule and MfaRule.
     *  @param string|null $value Value to set for the ruleIdentifier property.
    */
    public function setRuleIdentifier(?string $value ): void {
        $this->ruleIdentifier = $value;
    }

    /**
     * Sets the setting property value. The settings of the rule. The value is a JSON string with a list of pairs in the format of Parameter_Name:Parameter_Value. For example, {'permanentAssignment':false,'maximumGrantPeriodInMinutes':129600}
     *  @param string|null $value Value to set for the setting property.
    */
    public function setSetting(?string $value ): void {
        $this->setting = $value;
    }

}
