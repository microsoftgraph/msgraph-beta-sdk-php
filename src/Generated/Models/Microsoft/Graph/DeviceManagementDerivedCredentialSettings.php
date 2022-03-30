<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementDerivedCredentialSettings extends Entity 
{
    /** @var string|null $displayName The display name for the profile. */
    private ?string $displayName = null;
    
    /** @var string|null $helpUrl The URL that will be accessible to end users as they retrieve a derived credential using the Company Portal. */
    private ?string $helpUrl = null;
    
    /** @var DeviceManagementDerivedCredentialIssuer|null $issuer The derived credential provider to use. */
    private ?DeviceManagementDerivedCredentialIssuer $issuer = null;
    
    /** @var DeviceManagementDerivedCredentialNotificationType|null $notificationType The methods used to inform the end user to open Company Portal to deliver Wi-Fi, VPN, or email profiles that use certificates to the device. */
    private ?DeviceManagementDerivedCredentialNotificationType $notificationType = null;
    
    /**
     * Instantiates a new deviceManagementDerivedCredentialSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementDerivedCredentialSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementDerivedCredentialSettings {
        return new DeviceManagementDerivedCredentialSettings();
    }

    /**
     * Gets the displayName property value. The display name for the profile.
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
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'helpUrl' => function (self $o, ParseNode $n) { $o->setHelpUrl($n->getStringValue()); },
            'issuer' => function (self $o, ParseNode $n) { $o->setIssuer($n->getEnumValue(DeviceManagementDerivedCredentialIssuer::class)); },
            'notificationType' => function (self $o, ParseNode $n) { $o->setNotificationType($n->getEnumValue(DeviceManagementDerivedCredentialNotificationType::class)); },
        ]);
    }

    /**
     * Gets the helpUrl property value. The URL that will be accessible to end users as they retrieve a derived credential using the Company Portal.
     * @return string|null
    */
    public function getHelpUrl(): ?string {
        return $this->helpUrl;
    }

    /**
     * Gets the issuer property value. The derived credential provider to use.
     * @return DeviceManagementDerivedCredentialIssuer|null
    */
    public function getIssuer(): ?DeviceManagementDerivedCredentialIssuer {
        return $this->issuer;
    }

    /**
     * Gets the notificationType property value. The methods used to inform the end user to open Company Portal to deliver Wi-Fi, VPN, or email profiles that use certificates to the device.
     * @return DeviceManagementDerivedCredentialNotificationType|null
    */
    public function getNotificationType(): ?DeviceManagementDerivedCredentialNotificationType {
        return $this->notificationType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('helpUrl', $this->helpUrl);
        $writer->writeEnumValue('issuer', $this->issuer);
        $writer->writeEnumValue('notificationType', $this->notificationType);
    }

    /**
     * Sets the displayName property value. The display name for the profile.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the helpUrl property value. The URL that will be accessible to end users as they retrieve a derived credential using the Company Portal.
     *  @param string|null $value Value to set for the helpUrl property.
    */
    public function setHelpUrl(?string $value ): void {
        $this->helpUrl = $value;
    }

    /**
     * Sets the issuer property value. The derived credential provider to use.
     *  @param DeviceManagementDerivedCredentialIssuer|null $value Value to set for the issuer property.
    */
    public function setIssuer(?DeviceManagementDerivedCredentialIssuer $value ): void {
        $this->issuer = $value;
    }

    /**
     * Sets the notificationType property value. The methods used to inform the end user to open Company Portal to deliver Wi-Fi, VPN, or email profiles that use certificates to the device.
     *  @param DeviceManagementDerivedCredentialNotificationType|null $value Value to set for the notificationType property.
    */
    public function setNotificationType(?DeviceManagementDerivedCredentialNotificationType $value ): void {
        $this->notificationType = $value;
    }

}
