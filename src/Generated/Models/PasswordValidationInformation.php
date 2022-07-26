<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PasswordValidationInformation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isValid Specifies whether the password is valid based on the calculation of the results in the validationResults property. Not nullable. Read-only.
    */
    private ?bool $isValid = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<ValidationResult>|null $validationResults The list of password validation rules and whether the password passed those rules. Not nullable. Read-only.
    */
    private ?array $validationResults = null;
    
    /**
     * Instantiates a new passwordValidationInformation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.passwordValidationInformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasswordValidationInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasswordValidationInformation {
        return new PasswordValidationInformation();
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
            'isValid' => function (ParseNode $n) use ($o) { $o->setIsValid($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'validationResults' => function (ParseNode $n) use ($o) { $o->setValidationResults($n->getCollectionOfObjectValues(array(ValidationResult::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the isValid property value. Specifies whether the password is valid based on the calculation of the results in the validationResults property. Not nullable. Read-only.
     * @return bool|null
    */
    public function getIsValid(): ?bool {
        return $this->isValid;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the validationResults property value. The list of password validation rules and whether the password passed those rules. Not nullable. Read-only.
     * @return array<ValidationResult>|null
    */
    public function getValidationResults(): ?array {
        return $this->validationResults;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isValid', $this->isValid);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('validationResults', $this->validationResults);
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
     * Sets the isValid property value. Specifies whether the password is valid based on the calculation of the results in the validationResults property. Not nullable. Read-only.
     *  @param bool|null $value Value to set for the isValid property.
    */
    public function setIsValid(?bool $value ): void {
        $this->isValid = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the validationResults property value. The list of password validation rules and whether the password passed those rules. Not nullable. Read-only.
     *  @param array<ValidationResult>|null $value Value to set for the validationResults property.
    */
    public function setValidationResults(?array $value ): void {
        $this->validationResults = $value;
    }

}
