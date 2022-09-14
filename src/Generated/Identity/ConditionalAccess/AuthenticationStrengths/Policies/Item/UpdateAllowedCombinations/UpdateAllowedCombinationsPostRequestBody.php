<?php

namespace Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\AuthenticationStrengths\Policies\Item\UpdateAllowedCombinations;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateAllowedCombinationsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $allowedCombinations The allowedCombinations property
    */
    private ?array $allowedCombinations = null;
    
    /**
     * Instantiates a new updateAllowedCombinationsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAllowedCombinationsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAllowedCombinationsPostRequestBody {
        return new UpdateAllowedCombinationsPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedCombinations property value. The allowedCombinations property
     * @return array<string>|null
    */
    public function getAllowedCombinations(): ?array {
        return $this->allowedCombinations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedCombinations' => function (ParseNode $n) use ($o) { $o->setAllowedCombinations($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedCombinations', $this->allowedCombinations);
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
     * Sets the allowedCombinations property value. The allowedCombinations property
     *  @param array<string>|null $value Value to set for the allowedCombinations property.
    */
    public function setAllowedCombinations(?array $value ): void {
        $this->allowedCombinations = $value;
    }

}
