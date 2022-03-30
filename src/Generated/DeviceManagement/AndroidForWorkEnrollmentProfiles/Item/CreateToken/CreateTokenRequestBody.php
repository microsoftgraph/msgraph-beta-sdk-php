<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkEnrollmentProfiles\Item\CreateToken;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateTokenRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $tokenValidityInSeconds  */
    private ?int $tokenValidityInSeconds = null;
    
    /**
     * Instantiates a new createTokenRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateTokenRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CreateTokenRequestBody {
        return new CreateTokenRequestBody();
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
            'tokenValidityInSeconds' => function (self $o, ParseNode $n) { $o->setTokenValidityInSeconds($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the tokenValidityInSeconds property value. 
     * @return int|null
    */
    public function getTokenValidityInSeconds(): ?int {
        return $this->tokenValidityInSeconds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('tokenValidityInSeconds', $this->tokenValidityInSeconds);
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
     * Sets the tokenValidityInSeconds property value. 
     *  @param int|null $value Value to set for the tokenValidityInSeconds property.
    */
    public function setTokenValidityInSeconds(?int $value ): void {
        $this->tokenValidityInSeconds = $value;
    }

}
