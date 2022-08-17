<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesProvisioningError implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $category Category of the provisioning error. Note: Currently, there is only one possible value. Possible value: PropertyConflict - indicates a property value is not unique. Other objects contain the same value for the property.
    */
    private ?string $category = null;
    
    /**
     * @var DateTime|null $occurredDateTime The date and time at which the error occurred.
    */
    private ?DateTime $occurredDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $propertyCausingError Name of the directory property causing the error. Current possible values: UserPrincipalName or ProxyAddress
    */
    private ?string $propertyCausingError = null;
    
    /**
     * @var string|null $value Value of the property causing the error.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new onPremisesProvisioningError and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.onPremisesProvisioningError');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesProvisioningError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesProvisioningError {
        return new OnPremisesProvisioningError();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. Category of the provisioning error. Note: Currently, there is only one possible value. Possible value: PropertyConflict - indicates a property value is not unique. Other objects contain the same value for the property.
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => function (ParseNode $n) use ($o) { $o->setCategory($n->getStringValue()); },
            'occurredDateTime' => function (ParseNode $n) use ($o) { $o->setOccurredDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'propertyCausingError' => function (ParseNode $n) use ($o) { $o->setPropertyCausingError($n->getStringValue()); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the occurredDateTime property value. The date and time at which the error occurred.
     * @return DateTime|null
    */
    public function getOccurredDateTime(): ?DateTime {
        return $this->occurredDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the propertyCausingError property value. Name of the directory property causing the error. Current possible values: UserPrincipalName or ProxyAddress
     * @return string|null
    */
    public function getPropertyCausingError(): ?string {
        return $this->propertyCausingError;
    }

    /**
     * Gets the value property value. Value of the property causing the error.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category', $this->category);
        $writer->writeDateTimeValue('occurredDateTime', $this->occurredDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('propertyCausingError', $this->propertyCausingError);
        $writer->writeStringValue('value', $this->value);
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
     * Sets the category property value. Category of the provisioning error. Note: Currently, there is only one possible value. Possible value: PropertyConflict - indicates a property value is not unique. Other objects contain the same value for the property.
     *  @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the occurredDateTime property value. The date and time at which the error occurred.
     *  @param DateTime|null $value Value to set for the occurredDateTime property.
    */
    public function setOccurredDateTime(?DateTime $value ): void {
        $this->occurredDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the propertyCausingError property value. Name of the directory property causing the error. Current possible values: UserPrincipalName or ProxyAddress
     *  @param string|null $value Value to set for the propertyCausingError property.
    */
    public function setPropertyCausingError(?string $value ): void {
        $this->propertyCausingError = $value;
    }

    /**
     * Sets the value property value. Value of the property causing the error.
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}
