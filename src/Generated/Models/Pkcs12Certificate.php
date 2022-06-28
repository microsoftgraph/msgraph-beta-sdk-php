<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Pkcs12Certificate extends ApiAuthenticationConfigurationBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $password This is the password for the pfx file. Required. If no password is used, must still provide a value of ''.
    */
    private ?string $password = null;
    
    /**
     * @var string|null $pkcs12Value This is the field for sending pfx content. The value should be a base-64 encoded version of the actual certificate content. Required.
    */
    private ?string $pkcs12Value = null;
    
    /**
     * Instantiates a new Pkcs12Certificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Pkcs12Certificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Pkcs12Certificate {
        return new Pkcs12Certificate();
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
            'password' => function (ParseNode $n) use ($o) { $o->setPassword($n->getStringValue()); },
            'pkcs12Value' => function (ParseNode $n) use ($o) { $o->setPkcs12Value($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the password property value. This is the password for the pfx file. Required. If no password is used, must still provide a value of ''.
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Gets the pkcs12Value property value. This is the field for sending pfx content. The value should be a base-64 encoded version of the actual certificate content. Required.
     * @return string|null
    */
    public function getPkcs12Value(): ?string {
        return $this->pkcs12Value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('password', $this->password);
        $writer->writeStringValue('pkcs12Value', $this->pkcs12Value);
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
     * Sets the password property value. This is the password for the pfx file. Required. If no password is used, must still provide a value of ''.
     *  @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value ): void {
        $this->password = $value;
    }

    /**
     * Sets the pkcs12Value property value. This is the field for sending pfx content. The value should be a base-64 encoded version of the actual certificate content. Required.
     *  @param string|null $value Value to set for the pkcs12Value property.
    */
    public function setPkcs12Value(?string $value ): void {
        $this->pkcs12Value = $value;
    }

}
