<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsAutopilotDeploymentProfiles\Item\AssignedDevices\Item\UpdateDeviceProperties;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateDevicePropertiesPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $addressableUserName The addressableUserName property
    */
    private ?string $addressableUserName = null;
    
    /**
     * @var string|null $deviceAccountPassword The deviceAccountPassword property
    */
    private ?string $deviceAccountPassword = null;
    
    /**
     * @var string|null $deviceAccountUpn The deviceAccountUpn property
    */
    private ?string $deviceAccountUpn = null;
    
    /**
     * @var string|null $deviceFriendlyName The deviceFriendlyName property
    */
    private ?string $deviceFriendlyName = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $groupTag The groupTag property
    */
    private ?string $groupTag = null;
    
    /**
     * @var string|null $userPrincipalName The userPrincipalName property
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new updateDevicePropertiesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateDevicePropertiesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateDevicePropertiesPostRequestBody {
        return new UpdateDevicePropertiesPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the addressableUserName property value. The addressableUserName property
     * @return string|null
    */
    public function getAddressableUserName(): ?string {
        return $this->addressableUserName;
    }

    /**
     * Gets the deviceAccountPassword property value. The deviceAccountPassword property
     * @return string|null
    */
    public function getDeviceAccountPassword(): ?string {
        return $this->deviceAccountPassword;
    }

    /**
     * Gets the deviceAccountUpn property value. The deviceAccountUpn property
     * @return string|null
    */
    public function getDeviceAccountUpn(): ?string {
        return $this->deviceAccountUpn;
    }

    /**
     * Gets the deviceFriendlyName property value. The deviceFriendlyName property
     * @return string|null
    */
    public function getDeviceFriendlyName(): ?string {
        return $this->deviceFriendlyName;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addressableUserName' => function (ParseNode $n) use ($o) { $o->setAddressableUserName($n->getStringValue()); },
            'deviceAccountPassword' => function (ParseNode $n) use ($o) { $o->setDeviceAccountPassword($n->getStringValue()); },
            'deviceAccountUpn' => function (ParseNode $n) use ($o) { $o->setDeviceAccountUpn($n->getStringValue()); },
            'deviceFriendlyName' => function (ParseNode $n) use ($o) { $o->setDeviceFriendlyName($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'groupTag' => function (ParseNode $n) use ($o) { $o->setGroupTag($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the groupTag property value. The groupTag property
     * @return string|null
    */
    public function getGroupTag(): ?string {
        return $this->groupTag;
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
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
        $writer->writeStringValue('addressableUserName', $this->addressableUserName);
        $writer->writeStringValue('deviceAccountPassword', $this->deviceAccountPassword);
        $writer->writeStringValue('deviceAccountUpn', $this->deviceAccountUpn);
        $writer->writeStringValue('deviceFriendlyName', $this->deviceFriendlyName);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('groupTag', $this->groupTag);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
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
     * Sets the addressableUserName property value. The addressableUserName property
     *  @param string|null $value Value to set for the addressableUserName property.
    */
    public function setAddressableUserName(?string $value ): void {
        $this->addressableUserName = $value;
    }

    /**
     * Sets the deviceAccountPassword property value. The deviceAccountPassword property
     *  @param string|null $value Value to set for the deviceAccountPassword property.
    */
    public function setDeviceAccountPassword(?string $value ): void {
        $this->deviceAccountPassword = $value;
    }

    /**
     * Sets the deviceAccountUpn property value. The deviceAccountUpn property
     *  @param string|null $value Value to set for the deviceAccountUpn property.
    */
    public function setDeviceAccountUpn(?string $value ): void {
        $this->deviceAccountUpn = $value;
    }

    /**
     * Sets the deviceFriendlyName property value. The deviceFriendlyName property
     *  @param string|null $value Value to set for the deviceFriendlyName property.
    */
    public function setDeviceFriendlyName(?string $value ): void {
        $this->deviceFriendlyName = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the groupTag property value. The groupTag property
     *  @param string|null $value Value to set for the groupTag property.
    */
    public function setGroupTag(?string $value ): void {
        $this->groupTag = $value;
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
