<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectorySizeQuota implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $total Total amount of the directory quota. */
    private ?int $total = null;
    
    /** @var int|null $used Used amount of the directory quota. */
    private ?int $used = null;
    
    /**
     * Instantiates a new directorySizeQuota and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectorySizeQuota
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DirectorySizeQuota {
        return new DirectorySizeQuota();
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
        return  [
            'total' => function (self $o, ParseNode $n) { $o->setTotal($n->getIntegerValue()); },
            'used' => function (self $o, ParseNode $n) { $o->setUsed($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the total property value. Total amount of the directory quota.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Gets the used property value. Used amount of the directory quota.
     * @return int|null
    */
    public function getUsed(): ?int {
        return $this->used;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('total', $this->total);
        $writer->writeIntegerValue('used', $this->used);
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
     * Sets the total property value. Total amount of the directory quota.
     *  @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value ): void {
        $this->total = $value;
    }

    /**
     * Sets the used property value. Used amount of the directory quota.
     *  @param int|null $value Value to set for the used property.
    */
    public function setUsed(?int $value ): void {
        $this->used = $value;
    }

}
