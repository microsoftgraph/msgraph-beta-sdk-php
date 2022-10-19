<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAnswerChoice implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actualValue The actual value of the selected choice. This is typically a string value which is understandable by applications. Required.
    */
    private ?string $actualValue = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AccessPackageLocalizedContent|null $displayValue The localized display values shown to the requestor and approvers. Required.
    */
    private ?AccessPackageLocalizedContent $displayValue = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new accessPackageAnswerChoice and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.accessPackageAnswerChoice');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAnswerChoice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAnswerChoice {
        return new AccessPackageAnswerChoice();
    }

    /**
     * Gets the actualValue property value. The actual value of the selected choice. This is typically a string value which is understandable by applications. Required.
     * @return string|null
    */
    public function getActualValue(): ?string {
        return $this->actualValue;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayValue property value. The localized display values shown to the requestor and approvers. Required.
     * @return AccessPackageLocalizedContent|null
    */
    public function getDisplayValue(): ?AccessPackageLocalizedContent {
        return $this->displayValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actualValue' => fn(ParseNode $n) => $o->setActualValue($n->getStringValue()),
            'displayValue' => fn(ParseNode $n) => $o->setDisplayValue($n->getObjectValue([AccessPackageLocalizedContent::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actualValue', $this->actualValue);
        $writer->writeObjectValue('displayValue', $this->displayValue);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actualValue property value. The actual value of the selected choice. This is typically a string value which is understandable by applications. Required.
     *  @param string|null $value Value to set for the actualValue property.
    */
    public function setActualValue(?string $value ): void {
        $this->actualValue = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the displayValue property value. The localized display values shown to the requestor and approvers. Required.
     *  @param AccessPackageLocalizedContent|null $value Value to set for the displayValue property.
    */
    public function setDisplayValue(?AccessPackageLocalizedContent $value ): void {
        $this->displayValue = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
