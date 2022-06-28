<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SoftwareOathAuthenticationMethod extends AuthenticationMethod implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $secretKey The secret key of the method. Always returns null.
    */
    private ?string $secretKey = null;
    
    /**
     * Instantiates a new SoftwareOathAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SoftwareOathAuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SoftwareOathAuthenticationMethod {
        return new SoftwareOathAuthenticationMethod();
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
            'secretKey' => function (ParseNode $n) use ($o) { $o->setSecretKey($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the secretKey property value. The secret key of the method. Always returns null.
     * @return string|null
    */
    public function getSecretKey(): ?string {
        return $this->secretKey;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('secretKey', $this->secretKey);
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
     * Sets the secretKey property value. The secret key of the method. Always returns null.
     *  @param string|null $value Value to set for the secretKey property.
    */
    public function setSecretKey(?string $value ): void {
        $this->secretKey = $value;
    }

}
