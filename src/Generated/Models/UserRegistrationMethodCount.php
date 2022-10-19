<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserRegistrationMethodCount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $authenticationMethod Name of authentication method.
    */
    private ?string $authenticationMethod = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $userCount Number of users registered.
    */
    private ?int $userCount = null;
    
    /**
     * Instantiates a new userRegistrationMethodCount and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userRegistrationMethodCount');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRegistrationMethodCount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRegistrationMethodCount {
        return new UserRegistrationMethodCount();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticationMethod property value. Name of authentication method.
     * @return string|null
    */
    public function getAuthenticationMethod(): ?string {
        return $this->authenticationMethod;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'userCount' => fn(ParseNode $n) => $o->setUserCount($n->getIntegerValue()),
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
     * Gets the userCount property value. Number of users registered.
     * @return int|null
    */
    public function getUserCount(): ?int {
        return $this->userCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('userCount', $this->userCount);
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
     * Sets the authenticationMethod property value. Name of authentication method.
     *  @param string|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?string $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the userCount property value. Number of users registered.
     *  @param int|null $value Value to set for the userCount property.
    */
    public function setUserCount(?int $value ): void {
        $this->userCount = $value;
    }

}
