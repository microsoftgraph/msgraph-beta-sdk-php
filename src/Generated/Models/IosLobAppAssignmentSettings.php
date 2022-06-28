<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosLobAppAssignmentSettings extends MobileAppAssignmentSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isRemovable Whether or not the app can be removed by the user.
    */
    private ?bool $isRemovable = null;
    
    /**
     * @var bool|null $uninstallOnDeviceRemoval Whether or not to uninstall the app when device is removed from Intune.
    */
    private ?bool $uninstallOnDeviceRemoval = null;
    
    /**
     * @var string|null $vpnConfigurationId The VPN Configuration Id to apply for this app.
    */
    private ?string $vpnConfigurationId = null;
    
    /**
     * Instantiates a new IosLobAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosLobAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosLobAppAssignmentSettings {
        return new IosLobAppAssignmentSettings();
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
            'isRemovable' => function (ParseNode $n) use ($o) { $o->setIsRemovable($n->getBooleanValue()); },
            'uninstallOnDeviceRemoval' => function (ParseNode $n) use ($o) { $o->setUninstallOnDeviceRemoval($n->getBooleanValue()); },
            'vpnConfigurationId' => function (ParseNode $n) use ($o) { $o->setVpnConfigurationId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isRemovable property value. Whether or not the app can be removed by the user.
     * @return bool|null
    */
    public function getIsRemovable(): ?bool {
        return $this->isRemovable;
    }

    /**
     * Gets the uninstallOnDeviceRemoval property value. Whether or not to uninstall the app when device is removed from Intune.
     * @return bool|null
    */
    public function getUninstallOnDeviceRemoval(): ?bool {
        return $this->uninstallOnDeviceRemoval;
    }

    /**
     * Gets the vpnConfigurationId property value. The VPN Configuration Id to apply for this app.
     * @return string|null
    */
    public function getVpnConfigurationId(): ?string {
        return $this->vpnConfigurationId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isRemovable', $this->isRemovable);
        $writer->writeBooleanValue('uninstallOnDeviceRemoval', $this->uninstallOnDeviceRemoval);
        $writer->writeStringValue('vpnConfigurationId', $this->vpnConfigurationId);
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
     * Sets the isRemovable property value. Whether or not the app can be removed by the user.
     *  @param bool|null $value Value to set for the isRemovable property.
    */
    public function setIsRemovable(?bool $value ): void {
        $this->isRemovable = $value;
    }

    /**
     * Sets the uninstallOnDeviceRemoval property value. Whether or not to uninstall the app when device is removed from Intune.
     *  @param bool|null $value Value to set for the uninstallOnDeviceRemoval property.
    */
    public function setUninstallOnDeviceRemoval(?bool $value ): void {
        $this->uninstallOnDeviceRemoval = $value;
    }

    /**
     * Sets the vpnConfigurationId property value. The VPN Configuration Id to apply for this app.
     *  @param string|null $value Value to set for the vpnConfigurationId property.
    */
    public function setVpnConfigurationId(?string $value ): void {
        $this->vpnConfigurationId = $value;
    }

}
