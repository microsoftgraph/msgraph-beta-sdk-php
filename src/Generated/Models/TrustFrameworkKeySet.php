<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrustFrameworkKeySet extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<TrustFrameworkKey>|null $keys A collection of the keys.
    */
    private ?array $keys = null;
    
    /**
     * Instantiates a new TrustFrameworkKeySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrustFrameworkKeySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrustFrameworkKeySet {
        return new TrustFrameworkKeySet();
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
        return array_merge(parent::getFieldDeserializers(), [
            'keys' => function (ParseNode $n) use ($o) { $o->setKeys($n->getCollectionOfObjectValues(array(TrustFrameworkKey::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the keys property value. A collection of the keys.
     * @return array<TrustFrameworkKey>|null
    */
    public function getKeys(): ?array {
        return $this->keys;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('keys', $this->keys);
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
     * Sets the keys property value. A collection of the keys.
     *  @param array<TrustFrameworkKey>|null $value Value to set for the keys property.
    */
    public function setKeys(?array $value ): void {
        $this->keys = $value;
    }

}
