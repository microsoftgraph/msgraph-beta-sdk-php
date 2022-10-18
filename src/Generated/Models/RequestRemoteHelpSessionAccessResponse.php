<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RequestRemoteHelpSessionAccessResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $pubSubEncryption AES encryption Initialization Vector for encrypting client messages sent to PubSub
    */
    private ?string $pubSubEncryption = null;
    
    /**
     * @var string|null $pubSubEncryptionKey The unique identifier for encrypting client messages sent to PubSub
    */
    private ?string $pubSubEncryptionKey = null;
    
    /**
     * @var string|null $sessionKey The unique identifier for a session
    */
    private ?string $sessionKey = null;
    
    /**
     * Instantiates a new requestRemoteHelpSessionAccessResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.requestRemoteHelpSessionAccessResponse');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RequestRemoteHelpSessionAccessResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RequestRemoteHelpSessionAccessResponse {
        return new RequestRemoteHelpSessionAccessResponse();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pubSubEncryption' => fn(ParseNode $n) => $o->setPubSubEncryption($n->getStringValue()),
            'pubSubEncryptionKey' => fn(ParseNode $n) => $o->setPubSubEncryptionKey($n->getStringValue()),
            'sessionKey' => fn(ParseNode $n) => $o->setSessionKey($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the pubSubEncryption property value. AES encryption Initialization Vector for encrypting client messages sent to PubSub
     * @return string|null
    */
    public function getPubSubEncryption(): ?string {
        return $this->pubSubEncryption;
    }

    /**
     * Gets the pubSubEncryptionKey property value. The unique identifier for encrypting client messages sent to PubSub
     * @return string|null
    */
    public function getPubSubEncryptionKey(): ?string {
        return $this->pubSubEncryptionKey;
    }

    /**
     * Gets the sessionKey property value. The unique identifier for a session
     * @return string|null
    */
    public function getSessionKey(): ?string {
        return $this->sessionKey;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('pubSubEncryption', $this->pubSubEncryption);
        $writer->writeStringValue('pubSubEncryptionKey', $this->pubSubEncryptionKey);
        $writer->writeStringValue('sessionKey', $this->sessionKey);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the pubSubEncryption property value. AES encryption Initialization Vector for encrypting client messages sent to PubSub
     *  @param string|null $value Value to set for the pubSubEncryption property.
    */
    public function setPubSubEncryption(?string $value ): void {
        $this->pubSubEncryption = $value;
    }

    /**
     * Sets the pubSubEncryptionKey property value. The unique identifier for encrypting client messages sent to PubSub
     *  @param string|null $value Value to set for the pubSubEncryptionKey property.
    */
    public function setPubSubEncryptionKey(?string $value ): void {
        $this->pubSubEncryptionKey = $value;
    }

    /**
     * Sets the sessionKey property value. The unique identifier for a session
     *  @param string|null $value Value to set for the sessionKey property.
    */
    public function setSessionKey(?string $value ): void {
        $this->sessionKey = $value;
    }

}
