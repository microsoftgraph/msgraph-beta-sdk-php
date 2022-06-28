<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyPresentationTextBox extends GroupPolicyPresentation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $defaultValue Localized default string displayed in the text box. The default value is empty.
    */
    private ?string $defaultValue = null;
    
    /**
     * @var int|null $maxLength An unsigned integer that specifies the maximum number of text characters. Default value is 1023.
    */
    private ?int $maxLength = null;
    
    /**
     * @var bool|null $required Requirement to enter a value in the text box. Default value is false.
    */
    private ?bool $required = null;
    
    /**
     * Instantiates a new GroupPolicyPresentationTextBox and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationTextBox
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationTextBox {
        return new GroupPolicyPresentationTextBox();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultValue property value. Localized default string displayed in the text box. The default value is empty.
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        return $this->defaultValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getStringValue()); },
            'maxLength' => function (ParseNode $n) use ($o) { $o->setMaxLength($n->getIntegerValue()); },
            'required' => function (ParseNode $n) use ($o) { $o->setRequired($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the maxLength property value. An unsigned integer that specifies the maximum number of text characters. Default value is 1023.
     * @return int|null
    */
    public function getMaxLength(): ?int {
        return $this->maxLength;
    }

    /**
     * Gets the required property value. Requirement to enter a value in the text box. Default value is false.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->required;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('defaultValue', $this->defaultValue);
        $writer->writeIntegerValue('maxLength', $this->maxLength);
        $writer->writeBooleanValue('required', $this->required);
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
     * Sets the defaultValue property value. Localized default string displayed in the text box. The default value is empty.
     *  @param string|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?string $value ): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the maxLength property value. An unsigned integer that specifies the maximum number of text characters. Default value is 1023.
     *  @param int|null $value Value to set for the maxLength property.
    */
    public function setMaxLength(?int $value ): void {
        $this->maxLength = $value;
    }

    /**
     * Sets the required property value. Requirement to enter a value in the text box. Default value is false.
     *  @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value ): void {
        $this->required = $value;
    }

}
