<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\CloudPC\ResourceNamespaces\Item\ImportResourceActions;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImportResourceActionsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $format The format property
    */
    private ?string $format = null;
    
    /**
     * @var bool|null $overwriteResourceNamespace The overwriteResourceNamespace property
    */
    private ?bool $overwriteResourceNamespace = null;
    
    /**
     * @var string|null $value The value property
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new importResourceActionsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportResourceActionsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportResourceActionsPostRequestBody {
        return new ImportResourceActionsPostRequestBody();
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
            'format' => function (ParseNode $n) use ($o) { $o->setFormat($n->getStringValue()); },
            'overwriteResourceNamespace' => function (ParseNode $n) use ($o) { $o->setOverwriteResourceNamespace($n->getBooleanValue()); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the format property value. The format property
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Gets the overwriteResourceNamespace property value. The overwriteResourceNamespace property
     * @return bool|null
    */
    public function getOverwriteResourceNamespace(): ?bool {
        return $this->overwriteResourceNamespace;
    }

    /**
     * Gets the value property value. The value property
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
        $writer->writeStringValue('format', $this->format);
        $writer->writeBooleanValue('overwriteResourceNamespace', $this->overwriteResourceNamespace);
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
     * Sets the format property value. The format property
     *  @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the overwriteResourceNamespace property value. The overwriteResourceNamespace property
     *  @param bool|null $value Value to set for the overwriteResourceNamespace property.
    */
    public function setOverwriteResourceNamespace(?bool $value ): void {
        $this->overwriteResourceNamespace = $value;
    }

    /**
     * Sets the value property value. The value property
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}
