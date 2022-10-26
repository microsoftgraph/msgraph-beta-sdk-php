<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAnswer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AccessPackageQuestion|null $answeredQuestion The question the answer is for. Required and Read-only.
    */
    private ?AccessPackageQuestion $answeredQuestion = null;
    
    /**
     * @var string|null $displayValue The display value of the answer. Required.
    */
    private ?string $displayValue = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new accessPackageAnswer and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.accessPackageAnswer');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAnswer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAnswer {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.accessPackageAnswerString': return new AccessPackageAnswerString();
            }
        }
        return new AccessPackageAnswer();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the answeredQuestion property value. The question the answer is for. Required and Read-only.
     * @return AccessPackageQuestion|null
    */
    public function getAnsweredQuestion(): ?AccessPackageQuestion {
        return $this->answeredQuestion;
    }

    /**
     * Gets the displayValue property value. The display value of the answer. Required.
     * @return string|null
    */
    public function getDisplayValue(): ?string {
        return $this->displayValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'answeredQuestion' => fn(ParseNode $n) => $o->setAnsweredQuestion($n->getObjectValue([AccessPackageQuestion::class, 'createFromDiscriminatorValue'])),
            'displayValue' => fn(ParseNode $n) => $o->setDisplayValue($n->getStringValue()),
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
        $writer->writeObjectValue('answeredQuestion', $this->answeredQuestion);
        $writer->writeStringValue('displayValue', $this->displayValue);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the answeredQuestion property value. The question the answer is for. Required and Read-only.
     *  @param AccessPackageQuestion|null $value Value to set for the answeredQuestion property.
    */
    public function setAnsweredQuestion(?AccessPackageQuestion $value ): void {
        $this->answeredQuestion = $value;
    }

    /**
     * Sets the displayValue property value. The display value of the answer. Required.
     *  @param string|null $value Value to set for the displayValue property.
    */
    public function setDisplayValue(?string $value ): void {
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
