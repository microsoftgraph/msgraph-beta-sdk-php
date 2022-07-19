<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskAzureADUser extends WindowsKioskUser implements Parsable 
{
    /**
     * @var string|null $userId The ID of the AzureAD user that will be locked to this kiosk configuration
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userPrincipalName The user accounts that will be locked to this kiosk configuration
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new WindowsKioskAzureADUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsKioskAzureADUser');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskAzureADUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskAzureADUser {
        return new WindowsKioskAzureADUser();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the userId property value. The ID of the AzureAD user that will be locked to this kiosk configuration
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. The user accounts that will be locked to this kiosk configuration
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
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the userId property value. The ID of the AzureAD user that will be locked to this kiosk configuration
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user accounts that will be locked to this kiosk configuration
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
