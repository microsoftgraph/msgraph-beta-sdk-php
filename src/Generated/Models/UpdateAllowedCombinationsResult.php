<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateAllowedCombinationsResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $additionalInformation Information about why the updateAllowedCombinations action was successful or failed.
    */
    private ?string $additionalInformation = null;
    
    /**
     * @var array<string>|null $conditionalAccessReferences References to existing Conditional Access policies that use this authentication strength.
    */
    private ?array $conditionalAccessReferences = null;
    
    /**
     * @var array<AuthenticationMethodModes>|null $currentCombinations The list of current authentication method combinations allowed by the authentication strength.
    */
    private ?array $currentCombinations = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<AuthenticationMethodModes>|null $previousCombinations The list of former authentication method combinations allowed by the authentication strength before they were updated through the updateAllowedCombinations action.
    */
    private ?array $previousCombinations = null;
    
    /**
     * Instantiates a new updateAllowedCombinationsResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.updateAllowedCombinationsResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAllowedCombinationsResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAllowedCombinationsResult {
        return new UpdateAllowedCombinationsResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalInformation property value. Information about why the updateAllowedCombinations action was successful or failed.
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        return $this->additionalInformation;
    }

    /**
     * Gets the conditionalAccessReferences property value. References to existing Conditional Access policies that use this authentication strength.
     * @return array<string>|null
    */
    public function getConditionalAccessReferences(): ?array {
        return $this->conditionalAccessReferences;
    }

    /**
     * Gets the currentCombinations property value. The list of current authentication method combinations allowed by the authentication strength.
     * @return array<AuthenticationMethodModes>|null
    */
    public function getCurrentCombinations(): ?array {
        return $this->currentCombinations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalInformation' => fn(ParseNode $n) => $o->setAdditionalInformation($n->getStringValue()),
            'conditionalAccessReferences' => fn(ParseNode $n) => $o->setConditionalAccessReferences($n->getCollectionOfPrimitiveValues()),
            'currentCombinations' => fn(ParseNode $n) => $o->setCurrentCombinations($n->getCollectionOfEnumValues(AuthenticationMethodModes::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'previousCombinations' => fn(ParseNode $n) => $o->setPreviousCombinations($n->getCollectionOfEnumValues(AuthenticationMethodModes::class)),
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
     * Gets the previousCombinations property value. The list of former authentication method combinations allowed by the authentication strength before they were updated through the updateAllowedCombinations action.
     * @return array<AuthenticationMethodModes>|null
    */
    public function getPreviousCombinations(): ?array {
        return $this->previousCombinations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('additionalInformation', $this->additionalInformation);
        $writer->writeCollectionOfPrimitiveValues('conditionalAccessReferences', $this->conditionalAccessReferences);
        $writer->writeCollectionOfEnumValues('currentCombinations', $this->currentCombinations);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfEnumValues('previousCombinations', $this->previousCombinations);
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
     * Sets the additionalInformation property value. Information about why the updateAllowedCombinations action was successful or failed.
     *  @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value ): void {
        $this->additionalInformation = $value;
    }

    /**
     * Sets the conditionalAccessReferences property value. References to existing Conditional Access policies that use this authentication strength.
     *  @param array<string>|null $value Value to set for the conditionalAccessReferences property.
    */
    public function setConditionalAccessReferences(?array $value ): void {
        $this->conditionalAccessReferences = $value;
    }

    /**
     * Sets the currentCombinations property value. The list of current authentication method combinations allowed by the authentication strength.
     *  @param array<AuthenticationMethodModes>|null $value Value to set for the currentCombinations property.
    */
    public function setCurrentCombinations(?array $value ): void {
        $this->currentCombinations = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the previousCombinations property value. The list of former authentication method combinations allowed by the authentication strength before they were updated through the updateAllowedCombinations action.
     *  @param array<AuthenticationMethodModes>|null $value Value to set for the previousCombinations property.
    */
    public function setPreviousCombinations(?array $value ): void {
        $this->previousCombinations = $value;
    }

}
