<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DevicesFilter implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CrossTenantAccessPolicyTargetConfigurationAccessType|null $mode The mode property
    */
    private ?CrossTenantAccessPolicyTargetConfigurationAccessType $mode = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $rule The rule property
    */
    private ?string $rule = null;
    
    /**
     * Instantiates a new devicesFilter and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.devicesFilter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DevicesFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DevicesFilter {
        return new DevicesFilter();
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
            'mode' => fn(ParseNode $n) => $o->setMode($n->getEnumValue(CrossTenantAccessPolicyTargetConfigurationAccessType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'rule' => fn(ParseNode $n) => $o->setRule($n->getStringValue()),
        ];
    }

    /**
     * Gets the mode property value. The mode property
     * @return CrossTenantAccessPolicyTargetConfigurationAccessType|null
    */
    public function getMode(): ?CrossTenantAccessPolicyTargetConfigurationAccessType {
        return $this->mode;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the rule property value. The rule property
     * @return string|null
    */
    public function getRule(): ?string {
        return $this->rule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('mode', $this->mode);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('rule', $this->rule);
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
     * Sets the mode property value. The mode property
     *  @param CrossTenantAccessPolicyTargetConfigurationAccessType|null $value Value to set for the mode property.
    */
    public function setMode(?CrossTenantAccessPolicyTargetConfigurationAccessType $value ): void {
        $this->mode = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the rule property value. The rule property
     *  @param string|null $value Value to set for the rule property.
    */
    public function setRule(?string $value ): void {
        $this->rule = $value;
    }

}
