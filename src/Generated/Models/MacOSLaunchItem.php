<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSLaunchItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $hide Whether or not to hide the item from the Users and Groups List.
    */
    private ?bool $hide = null;
    
    /**
     * @var string|null $path Path to the launch item.
    */
    private ?string $path = null;
    
    /**
     * Instantiates a new macOSLaunchItem and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSLaunchItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSLaunchItem {
        return new MacOSLaunchItem();
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
            'hide' => function (ParseNode $n) use ($o) { $o->setHide($n->getBooleanValue()); },
            'path' => function (ParseNode $n) use ($o) { $o->setPath($n->getStringValue()); },
        ];
    }

    /**
     * Gets the hide property value. Whether or not to hide the item from the Users and Groups List.
     * @return bool|null
    */
    public function getHide(): ?bool {
        return $this->hide;
    }

    /**
     * Gets the path property value. Path to the launch item.
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('hide', $this->hide);
        $writer->writeStringValue('path', $this->path);
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
     * Sets the hide property value. Whether or not to hide the item from the Users and Groups List.
     *  @param bool|null $value Value to set for the hide property.
    */
    public function setHide(?bool $value ): void {
        $this->hide = $value;
    }

    /**
     * Sets the path property value. Path to the launch item.
     *  @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value ): void {
        $this->path = $value;
    }

}
