<?php

namespace Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\RequestRemoteHelpSessionAccess;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RequestRemoteHelpSessionAccessPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $pubSubConnectionId The pubSubConnectionId property
    */
    private ?string $pubSubConnectionId = null;
    
    /**
     * @var string|null $sessionKey The sessionKey property
    */
    private ?string $sessionKey = null;
    
    /**
     * Instantiates a new requestRemoteHelpSessionAccessPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RequestRemoteHelpSessionAccessPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RequestRemoteHelpSessionAccessPostRequestBody {
        return new RequestRemoteHelpSessionAccessPostRequestBody();
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
            'pubSubConnectionId' => fn(ParseNode $n) => $o->setPubSubConnectionId($n->getStringValue()),
            'sessionKey' => fn(ParseNode $n) => $o->setSessionKey($n->getStringValue()),
        ];
    }

    /**
     * Gets the pubSubConnectionId property value. The pubSubConnectionId property
     * @return string|null
    */
    public function getPubSubConnectionId(): ?string {
        return $this->pubSubConnectionId;
    }

    /**
     * Gets the sessionKey property value. The sessionKey property
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
        $writer->writeStringValue('pubSubConnectionId', $this->pubSubConnectionId);
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
     * Sets the pubSubConnectionId property value. The pubSubConnectionId property
     *  @param string|null $value Value to set for the pubSubConnectionId property.
    */
    public function setPubSubConnectionId(?string $value ): void {
        $this->pubSubConnectionId = $value;
    }

    /**
     * Sets the sessionKey property value. The sessionKey property
     *  @param string|null $value Value to set for the sessionKey property.
    */
    public function setSessionKey(?string $value ): void {
        $this->sessionKey = $value;
    }

}
