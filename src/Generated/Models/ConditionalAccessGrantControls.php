<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessGrantControls implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $builtInControls List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
    */
    private ?array $builtInControls = null;
    
    /**
     * @var array<string>|null $customAuthenticationFactors List of custom controls IDs required by the policy. To learn more about custom control, see Custom controls (preview).
    */
    private ?array $customAuthenticationFactors = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $operator Defines the relationship of the grant controls. Possible values: AND, OR.
    */
    private ?string $operator = null;
    
    /**
     * @var array<string>|null $termsOfUse List of terms of use IDs required by the policy.
    */
    private ?array $termsOfUse = null;
    
    /**
     * Instantiates a new conditionalAccessGrantControls and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.conditionalAccessGrantControls');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessGrantControls
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessGrantControls {
        return new ConditionalAccessGrantControls();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the builtInControls property value. List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
     * @return array<string>|null
    */
    public function getBuiltInControls(): ?array {
        return $this->builtInControls;
    }

    /**
     * Gets the customAuthenticationFactors property value. List of custom controls IDs required by the policy. To learn more about custom control, see Custom controls (preview).
     * @return array<string>|null
    */
    public function getCustomAuthenticationFactors(): ?array {
        return $this->customAuthenticationFactors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'builtInControls' => function (ParseNode $n) use ($o) { $o->setBuiltInControls($n->getCollectionOfPrimitiveValues()); },
            'customAuthenticationFactors' => function (ParseNode $n) use ($o) { $o->setCustomAuthenticationFactors($n->getCollectionOfPrimitiveValues()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'operator' => function (ParseNode $n) use ($o) { $o->setOperator($n->getStringValue()); },
            'termsOfUse' => function (ParseNode $n) use ($o) { $o->setTermsOfUse($n->getCollectionOfPrimitiveValues()); },
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
     * Gets the operator property value. Defines the relationship of the grant controls. Possible values: AND, OR.
     * @return string|null
    */
    public function getOperator(): ?string {
        return $this->operator;
    }

    /**
     * Gets the termsOfUse property value. List of terms of use IDs required by the policy.
     * @return array<string>|null
    */
    public function getTermsOfUse(): ?array {
        return $this->termsOfUse;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('builtInControls', $this->builtInControls);
        $writer->writeCollectionOfPrimitiveValues('customAuthenticationFactors', $this->customAuthenticationFactors);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('operator', $this->operator);
        $writer->writeCollectionOfPrimitiveValues('termsOfUse', $this->termsOfUse);
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
     * Sets the builtInControls property value. List of values of built-in controls required by the policy. Possible values: block, mfa, compliantDevice, domainJoinedDevice, approvedApplication, compliantApplication, passwordChange, unknownFutureValue.
     *  @param array<string>|null $value Value to set for the builtInControls property.
    */
    public function setBuiltInControls(?array $value ): void {
        $this->builtInControls = $value;
    }

    /**
     * Sets the customAuthenticationFactors property value. List of custom controls IDs required by the policy. To learn more about custom control, see Custom controls (preview).
     *  @param array<string>|null $value Value to set for the customAuthenticationFactors property.
    */
    public function setCustomAuthenticationFactors(?array $value ): void {
        $this->customAuthenticationFactors = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the operator property value. Defines the relationship of the grant controls. Possible values: AND, OR.
     *  @param string|null $value Value to set for the operator property.
    */
    public function setOperator(?string $value ): void {
        $this->operator = $value;
    }

    /**
     * Sets the termsOfUse property value. List of terms of use IDs required by the policy.
     *  @param array<string>|null $value Value to set for the termsOfUse property.
    */
    public function setTermsOfUse(?array $value ): void {
        $this->termsOfUse = $value;
    }

}
