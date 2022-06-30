<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOsVppAppAssignedLicense extends Entity implements Parsable 
{
    /**
     * @var string|null $userEmailAddress The user email address.
    */
    private ?string $userEmailAddress = null;
    
    /**
     * @var string|null $userId The user ID.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userName The user name.
    */
    private ?string $userName = null;
    
    /**
     * @var string|null $userPrincipalName The user principal name.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new MacOsVppAppAssignedLicense and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOsVppAppAssignedLicense
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOsVppAppAssignedLicense {
        return new MacOsVppAppAssignedLicense();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userEmailAddress' => function (ParseNode $n) use ($o) { $o->setUserEmailAddress($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userName' => function (ParseNode $n) use ($o) { $o->setUserName($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the userEmailAddress property value. The user email address.
     * @return string|null
    */
    public function getUserEmailAddress(): ?string {
        return $this->userEmailAddress;
    }

    /**
     * Gets the userId property value. The user ID.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userName property value. The user name.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Gets the userPrincipalName property value. The user principal name.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('userEmailAddress', $this->userEmailAddress);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userName', $this->userName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the userEmailAddress property value. The user email address.
     *  @param string|null $value Value to set for the userEmailAddress property.
    */
    public function setUserEmailAddress(?string $value ): void {
        $this->userEmailAddress = $value;
    }

    /**
     * Sets the userId property value. The user ID.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userName property value. The user name.
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user principal name.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
