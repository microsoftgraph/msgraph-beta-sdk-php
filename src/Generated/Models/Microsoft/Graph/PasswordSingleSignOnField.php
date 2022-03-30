<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PasswordSingleSignOnField implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $customizedLabel Title/label override for customization. */
    private ?string $customizedLabel = null;
    
    /** @var string|null $defaultLabel Label that would be used if no customizedLabel is provided. Read only. */
    private ?string $defaultLabel = null;
    
    /** @var string|null $fieldId Id used to identity the field type. This is an internal id and possible values are param_1, param_2, param_userName, param_password. */
    private ?string $fieldId = null;
    
    /** @var string|null $type Type of the credential. The values can be text, password. */
    private ?string $type = null;
    
    /**
     * Instantiates a new passwordSingleSignOnField and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasswordSingleSignOnField
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PasswordSingleSignOnField {
        return new PasswordSingleSignOnField();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the customizedLabel property value. Title/label override for customization.
     * @return string|null
    */
    public function getCustomizedLabel(): ?string {
        return $this->customizedLabel;
    }

    /**
     * Gets the defaultLabel property value. Label that would be used if no customizedLabel is provided. Read only.
     * @return string|null
    */
    public function getDefaultLabel(): ?string {
        return $this->defaultLabel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'customizedLabel' => function (self $o, ParseNode $n) { $o->setCustomizedLabel($n->getStringValue()); },
            'defaultLabel' => function (self $o, ParseNode $n) { $o->setDefaultLabel($n->getStringValue()); },
            'fieldId' => function (self $o, ParseNode $n) { $o->setFieldId($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the fieldId property value. Id used to identity the field type. This is an internal id and possible values are param_1, param_2, param_userName, param_password.
     * @return string|null
    */
    public function getFieldId(): ?string {
        return $this->fieldId;
    }

    /**
     * Gets the type property value. Type of the credential. The values can be text, password.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('customizedLabel', $this->customizedLabel);
        $writer->writeStringValue('defaultLabel', $this->defaultLabel);
        $writer->writeStringValue('fieldId', $this->fieldId);
        $writer->writeStringValue('type', $this->type);
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
     * Sets the customizedLabel property value. Title/label override for customization.
     *  @param string|null $value Value to set for the customizedLabel property.
    */
    public function setCustomizedLabel(?string $value ): void {
        $this->customizedLabel = $value;
    }

    /**
     * Sets the defaultLabel property value. Label that would be used if no customizedLabel is provided. Read only.
     *  @param string|null $value Value to set for the defaultLabel property.
    */
    public function setDefaultLabel(?string $value ): void {
        $this->defaultLabel = $value;
    }

    /**
     * Sets the fieldId property value. Id used to identity the field type. This is an internal id and possible values are param_1, param_2, param_userName, param_password.
     *  @param string|null $value Value to set for the fieldId property.
    */
    public function setFieldId(?string $value ): void {
        $this->fieldId = $value;
    }

    /**
     * Sets the type property value. Type of the credential. The values can be text, password.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
