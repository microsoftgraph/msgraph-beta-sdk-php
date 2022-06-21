<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExtendedKeyUsage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $name Extended Key Usage Name
    */
    private ?string $name = null;
    
    /**
     * @var string|null $objectIdentifier Extended Key Usage Object Identifier
    */
    private ?string $objectIdentifier = null;
    
    /**
     * Instantiates a new extendedKeyUsage and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExtendedKeyUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExtendedKeyUsage {
        return new ExtendedKeyUsage();
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
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'objectIdentifier' => function (ParseNode $n) use ($o) { $o->setObjectIdentifier($n->getStringValue()); },
        ];
    }

    /**
     * Gets the name property value. Extended Key Usage Name
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the objectIdentifier property value. Extended Key Usage Object Identifier
     * @return string|null
    */
    public function getObjectIdentifier(): ?string {
        return $this->objectIdentifier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('objectIdentifier', $this->objectIdentifier);
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
     * Sets the name property value. Extended Key Usage Name
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the objectIdentifier property value. Extended Key Usage Object Identifier
     *  @param string|null $value Value to set for the objectIdentifier property.
    */
    public function setObjectIdentifier(?string $value ): void {
        $this->objectIdentifier = $value;
    }

}
