<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\CreateGooglePlayWebToken;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateGooglePlayWebTokenPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $parentUri The parentUri property
    */
    private ?string $parentUri = null;
    
    /**
     * Instantiates a new createGooglePlayWebTokenPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateGooglePlayWebTokenPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateGooglePlayWebTokenPostRequestBody {
        return new CreateGooglePlayWebTokenPostRequestBody();
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
            'parentUri' => fn(ParseNode $n) => $o->setParentUri($n->getStringValue()),
        ];
    }

    /**
     * Gets the parentUri property value. The parentUri property
     * @return string|null
    */
    public function getParentUri(): ?string {
        return $this->parentUri;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('parentUri', $this->parentUri);
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
     * Sets the parentUri property value. The parentUri property
     *  @param string|null $value Value to set for the parentUri property.
    */
    public function setParentUri(?string $value ): void {
        $this->parentUri = $value;
    }

}
