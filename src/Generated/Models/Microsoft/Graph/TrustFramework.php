<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrustFramework implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<TrustFrameworkKeySet>|null $keySets  */
    private ?array $keySets = null;
    
    /** @var array<TrustFrameworkPolicy>|null $policies  */
    private ?array $policies = null;
    
    /**
     * Instantiates a new TrustFramework and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrustFramework
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TrustFramework {
        return new TrustFramework();
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
            'keySets' => function (self $o, ParseNode $n) { $o->setKeySets($n->getCollectionOfObjectValues(TrustFrameworkKeySet::class)); },
            'policies' => function (self $o, ParseNode $n) { $o->setPolicies($n->getCollectionOfObjectValues(TrustFrameworkPolicy::class)); },
        ];
    }

    /**
     * Gets the keySets property value. 
     * @return array<TrustFrameworkKeySet>|null
    */
    public function getKeySets(): ?array {
        return $this->keySets;
    }

    /**
     * Gets the policies property value. 
     * @return array<TrustFrameworkPolicy>|null
    */
    public function getPolicies(): ?array {
        return $this->policies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('keySets', $this->keySets);
        $writer->writeCollectionOfObjectValues('policies', $this->policies);
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
     * Sets the keySets property value. 
     *  @param array<TrustFrameworkKeySet>|null $value Value to set for the keySets property.
    */
    public function setKeySets(?array $value ): void {
        $this->keySets = $value;
    }

    /**
     * Sets the policies property value. 
     *  @param array<TrustFrameworkPolicy>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value ): void {
        $this->policies = $value;
    }

}
