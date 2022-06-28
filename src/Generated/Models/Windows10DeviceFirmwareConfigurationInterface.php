<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10DeviceFirmwareConfigurationInterface extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Enablement|null $bluetooth Defines whether a user is allowed to enable Bluetooth. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $bluetooth = null;
    
    /**
     * @var Enablement|null $bootFromBuiltInNetworkAdapters Defines whether a user is allowed to boot from built-in network adapters. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $bootFromBuiltInNetworkAdapters = null;
    
    /**
     * @var Enablement|null $bootFromExternalMedia Defines whether a user is allowed to boot from external media. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $bootFromExternalMedia = null;
    
    /**
     * @var Enablement|null $cameras Defines whether built-in cameras are enabled. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $cameras = null;
    
    /**
     * @var ChangeUefiSettingsPermission|null $changeUefiSettingsPermission Defines the permission level granted to users to change UEFI settings. Possible values are: notConfiguredOnly, none.
    */
    private ?ChangeUefiSettingsPermission $changeUefiSettingsPermission = null;
    
    /**
     * @var Enablement|null $frontCamera Defines whether a user is allowed to enable Front Camera. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $frontCamera = null;
    
    /**
     * @var Enablement|null $infraredCamera Defines whether a user is allowed to enable Infrared camera. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $infraredCamera = null;
    
    /**
     * @var Enablement|null $microphone Defines whether a user is allowed to enable Microphone. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $microphone = null;
    
    /**
     * @var Enablement|null $microphonesAndSpeakers Defines whether built-in microphones or speakers are enabled. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $microphonesAndSpeakers = null;
    
    /**
     * @var Enablement|null $nearFieldCommunication Defines whether a user is allowed to enable Near Field Communication. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $nearFieldCommunication = null;
    
    /**
     * @var Enablement|null $radios Defines whether built-in radios e.g. WIFI, NFC, Bluetooth, are enabled. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $radios = null;
    
    /**
     * @var Enablement|null $rearCamera Defines whether a user is allowed to enable rear camera. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $rearCamera = null;
    
    /**
     * @var Enablement|null $sdCard Defines whether a user is allowed to enable SD Card Port. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $sdCard = null;
    
    /**
     * @var Enablement|null $simultaneousMultiThreading Defines whether a user is allowed to enable Simultaneous MultiThreading. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $simultaneousMultiThreading = null;
    
    /**
     * @var Enablement|null $usbTypeAPort Defines whether a user is allowed to enable USB Type A Port. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $usbTypeAPort = null;
    
    /**
     * @var Enablement|null $virtualizationOfCpuAndIO Defines whether CPU and IO virtualization is enabled. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $virtualizationOfCpuAndIO = null;
    
    /**
     * @var Enablement|null $wakeOnLAN Defines whether a user is allowed to enable Wake on LAN. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $wakeOnLAN = null;
    
    /**
     * @var Enablement|null $wakeOnPower Defines whether a user is allowed to enable Wake On Power. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $wakeOnPower = null;
    
    /**
     * @var Enablement|null $wiFi Defines whether a user is allowed to enable WiFi. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $wiFi = null;
    
    /**
     * @var Enablement|null $windowsPlatformBinaryTable Defines whether a user is allowed to enable Windows Platform Binary Table. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $windowsPlatformBinaryTable = null;
    
    /**
     * @var Enablement|null $wirelessWideAreaNetwork Defines whether a user is allowed to enable Wireless Wide Area Network. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $wirelessWideAreaNetwork = null;
    
    /**
     * Instantiates a new Windows10DeviceFirmwareConfigurationInterface and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10DeviceFirmwareConfigurationInterface
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10DeviceFirmwareConfigurationInterface {
        return new Windows10DeviceFirmwareConfigurationInterface();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bluetooth property value. Defines whether a user is allowed to enable Bluetooth. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getBluetooth(): ?Enablement {
        return $this->bluetooth;
    }

    /**
     * Gets the bootFromBuiltInNetworkAdapters property value. Defines whether a user is allowed to boot from built-in network adapters. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getBootFromBuiltInNetworkAdapters(): ?Enablement {
        return $this->bootFromBuiltInNetworkAdapters;
    }

    /**
     * Gets the bootFromExternalMedia property value. Defines whether a user is allowed to boot from external media. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getBootFromExternalMedia(): ?Enablement {
        return $this->bootFromExternalMedia;
    }

    /**
     * Gets the cameras property value. Defines whether built-in cameras are enabled. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getCameras(): ?Enablement {
        return $this->cameras;
    }

    /**
     * Gets the changeUefiSettingsPermission property value. Defines the permission level granted to users to change UEFI settings. Possible values are: notConfiguredOnly, none.
     * @return ChangeUefiSettingsPermission|null
    */
    public function getChangeUefiSettingsPermission(): ?ChangeUefiSettingsPermission {
        return $this->changeUefiSettingsPermission;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bluetooth' => function (ParseNode $n) use ($o) { $o->setBluetooth($n->getEnumValue(Enablement::class)); },
            'bootFromBuiltInNetworkAdapters' => function (ParseNode $n) use ($o) { $o->setBootFromBuiltInNetworkAdapters($n->getEnumValue(Enablement::class)); },
            'bootFromExternalMedia' => function (ParseNode $n) use ($o) { $o->setBootFromExternalMedia($n->getEnumValue(Enablement::class)); },
            'cameras' => function (ParseNode $n) use ($o) { $o->setCameras($n->getEnumValue(Enablement::class)); },
            'changeUefiSettingsPermission' => function (ParseNode $n) use ($o) { $o->setChangeUefiSettingsPermission($n->getEnumValue(ChangeUefiSettingsPermission::class)); },
            'frontCamera' => function (ParseNode $n) use ($o) { $o->setFrontCamera($n->getEnumValue(Enablement::class)); },
            'infraredCamera' => function (ParseNode $n) use ($o) { $o->setInfraredCamera($n->getEnumValue(Enablement::class)); },
            'microphone' => function (ParseNode $n) use ($o) { $o->setMicrophone($n->getEnumValue(Enablement::class)); },
            'microphonesAndSpeakers' => function (ParseNode $n) use ($o) { $o->setMicrophonesAndSpeakers($n->getEnumValue(Enablement::class)); },
            'nearFieldCommunication' => function (ParseNode $n) use ($o) { $o->setNearFieldCommunication($n->getEnumValue(Enablement::class)); },
            'radios' => function (ParseNode $n) use ($o) { $o->setRadios($n->getEnumValue(Enablement::class)); },
            'rearCamera' => function (ParseNode $n) use ($o) { $o->setRearCamera($n->getEnumValue(Enablement::class)); },
            'sdCard' => function (ParseNode $n) use ($o) { $o->setSdCard($n->getEnumValue(Enablement::class)); },
            'simultaneousMultiThreading' => function (ParseNode $n) use ($o) { $o->setSimultaneousMultiThreading($n->getEnumValue(Enablement::class)); },
            'usbTypeAPort' => function (ParseNode $n) use ($o) { $o->setUsbTypeAPort($n->getEnumValue(Enablement::class)); },
            'virtualizationOfCpuAndIO' => function (ParseNode $n) use ($o) { $o->setVirtualizationOfCpuAndIO($n->getEnumValue(Enablement::class)); },
            'wakeOnLAN' => function (ParseNode $n) use ($o) { $o->setWakeOnLAN($n->getEnumValue(Enablement::class)); },
            'wakeOnPower' => function (ParseNode $n) use ($o) { $o->setWakeOnPower($n->getEnumValue(Enablement::class)); },
            'wiFi' => function (ParseNode $n) use ($o) { $o->setWiFi($n->getEnumValue(Enablement::class)); },
            'windowsPlatformBinaryTable' => function (ParseNode $n) use ($o) { $o->setWindowsPlatformBinaryTable($n->getEnumValue(Enablement::class)); },
            'wirelessWideAreaNetwork' => function (ParseNode $n) use ($o) { $o->setWirelessWideAreaNetwork($n->getEnumValue(Enablement::class)); },
        ]);
    }

    /**
     * Gets the frontCamera property value. Defines whether a user is allowed to enable Front Camera. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getFrontCamera(): ?Enablement {
        return $this->frontCamera;
    }

    /**
     * Gets the infraredCamera property value. Defines whether a user is allowed to enable Infrared camera. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getInfraredCamera(): ?Enablement {
        return $this->infraredCamera;
    }

    /**
     * Gets the microphone property value. Defines whether a user is allowed to enable Microphone. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getMicrophone(): ?Enablement {
        return $this->microphone;
    }

    /**
     * Gets the microphonesAndSpeakers property value. Defines whether built-in microphones or speakers are enabled. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getMicrophonesAndSpeakers(): ?Enablement {
        return $this->microphonesAndSpeakers;
    }

    /**
     * Gets the nearFieldCommunication property value. Defines whether a user is allowed to enable Near Field Communication. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getNearFieldCommunication(): ?Enablement {
        return $this->nearFieldCommunication;
    }

    /**
     * Gets the radios property value. Defines whether built-in radios e.g. WIFI, NFC, Bluetooth, are enabled. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getRadios(): ?Enablement {
        return $this->radios;
    }

    /**
     * Gets the rearCamera property value. Defines whether a user is allowed to enable rear camera. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getRearCamera(): ?Enablement {
        return $this->rearCamera;
    }

    /**
     * Gets the sdCard property value. Defines whether a user is allowed to enable SD Card Port. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getSdCard(): ?Enablement {
        return $this->sdCard;
    }

    /**
     * Gets the simultaneousMultiThreading property value. Defines whether a user is allowed to enable Simultaneous MultiThreading. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getSimultaneousMultiThreading(): ?Enablement {
        return $this->simultaneousMultiThreading;
    }

    /**
     * Gets the usbTypeAPort property value. Defines whether a user is allowed to enable USB Type A Port. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getUsbTypeAPort(): ?Enablement {
        return $this->usbTypeAPort;
    }

    /**
     * Gets the virtualizationOfCpuAndIO property value. Defines whether CPU and IO virtualization is enabled. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getVirtualizationOfCpuAndIO(): ?Enablement {
        return $this->virtualizationOfCpuAndIO;
    }

    /**
     * Gets the wakeOnLAN property value. Defines whether a user is allowed to enable Wake on LAN. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getWakeOnLAN(): ?Enablement {
        return $this->wakeOnLAN;
    }

    /**
     * Gets the wakeOnPower property value. Defines whether a user is allowed to enable Wake On Power. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getWakeOnPower(): ?Enablement {
        return $this->wakeOnPower;
    }

    /**
     * Gets the wiFi property value. Defines whether a user is allowed to enable WiFi. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getWiFi(): ?Enablement {
        return $this->wiFi;
    }

    /**
     * Gets the windowsPlatformBinaryTable property value. Defines whether a user is allowed to enable Windows Platform Binary Table. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getWindowsPlatformBinaryTable(): ?Enablement {
        return $this->windowsPlatformBinaryTable;
    }

    /**
     * Gets the wirelessWideAreaNetwork property value. Defines whether a user is allowed to enable Wireless Wide Area Network. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getWirelessWideAreaNetwork(): ?Enablement {
        return $this->wirelessWideAreaNetwork;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('bluetooth', $this->bluetooth);
        $writer->writeEnumValue('bootFromBuiltInNetworkAdapters', $this->bootFromBuiltInNetworkAdapters);
        $writer->writeEnumValue('bootFromExternalMedia', $this->bootFromExternalMedia);
        $writer->writeEnumValue('cameras', $this->cameras);
        $writer->writeEnumValue('changeUefiSettingsPermission', $this->changeUefiSettingsPermission);
        $writer->writeEnumValue('frontCamera', $this->frontCamera);
        $writer->writeEnumValue('infraredCamera', $this->infraredCamera);
        $writer->writeEnumValue('microphone', $this->microphone);
        $writer->writeEnumValue('microphonesAndSpeakers', $this->microphonesAndSpeakers);
        $writer->writeEnumValue('nearFieldCommunication', $this->nearFieldCommunication);
        $writer->writeEnumValue('radios', $this->radios);
        $writer->writeEnumValue('rearCamera', $this->rearCamera);
        $writer->writeEnumValue('sdCard', $this->sdCard);
        $writer->writeEnumValue('simultaneousMultiThreading', $this->simultaneousMultiThreading);
        $writer->writeEnumValue('usbTypeAPort', $this->usbTypeAPort);
        $writer->writeEnumValue('virtualizationOfCpuAndIO', $this->virtualizationOfCpuAndIO);
        $writer->writeEnumValue('wakeOnLAN', $this->wakeOnLAN);
        $writer->writeEnumValue('wakeOnPower', $this->wakeOnPower);
        $writer->writeEnumValue('wiFi', $this->wiFi);
        $writer->writeEnumValue('windowsPlatformBinaryTable', $this->windowsPlatformBinaryTable);
        $writer->writeEnumValue('wirelessWideAreaNetwork', $this->wirelessWideAreaNetwork);
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
     * Sets the bluetooth property value. Defines whether a user is allowed to enable Bluetooth. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the bluetooth property.
    */
    public function setBluetooth(?Enablement $value ): void {
        $this->bluetooth = $value;
    }

    /**
     * Sets the bootFromBuiltInNetworkAdapters property value. Defines whether a user is allowed to boot from built-in network adapters. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the bootFromBuiltInNetworkAdapters property.
    */
    public function setBootFromBuiltInNetworkAdapters(?Enablement $value ): void {
        $this->bootFromBuiltInNetworkAdapters = $value;
    }

    /**
     * Sets the bootFromExternalMedia property value. Defines whether a user is allowed to boot from external media. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the bootFromExternalMedia property.
    */
    public function setBootFromExternalMedia(?Enablement $value ): void {
        $this->bootFromExternalMedia = $value;
    }

    /**
     * Sets the cameras property value. Defines whether built-in cameras are enabled. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the cameras property.
    */
    public function setCameras(?Enablement $value ): void {
        $this->cameras = $value;
    }

    /**
     * Sets the changeUefiSettingsPermission property value. Defines the permission level granted to users to change UEFI settings. Possible values are: notConfiguredOnly, none.
     *  @param ChangeUefiSettingsPermission|null $value Value to set for the changeUefiSettingsPermission property.
    */
    public function setChangeUefiSettingsPermission(?ChangeUefiSettingsPermission $value ): void {
        $this->changeUefiSettingsPermission = $value;
    }

    /**
     * Sets the frontCamera property value. Defines whether a user is allowed to enable Front Camera. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the frontCamera property.
    */
    public function setFrontCamera(?Enablement $value ): void {
        $this->frontCamera = $value;
    }

    /**
     * Sets the infraredCamera property value. Defines whether a user is allowed to enable Infrared camera. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the infraredCamera property.
    */
    public function setInfraredCamera(?Enablement $value ): void {
        $this->infraredCamera = $value;
    }

    /**
     * Sets the microphone property value. Defines whether a user is allowed to enable Microphone. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the microphone property.
    */
    public function setMicrophone(?Enablement $value ): void {
        $this->microphone = $value;
    }

    /**
     * Sets the microphonesAndSpeakers property value. Defines whether built-in microphones or speakers are enabled. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the microphonesAndSpeakers property.
    */
    public function setMicrophonesAndSpeakers(?Enablement $value ): void {
        $this->microphonesAndSpeakers = $value;
    }

    /**
     * Sets the nearFieldCommunication property value. Defines whether a user is allowed to enable Near Field Communication. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the nearFieldCommunication property.
    */
    public function setNearFieldCommunication(?Enablement $value ): void {
        $this->nearFieldCommunication = $value;
    }

    /**
     * Sets the radios property value. Defines whether built-in radios e.g. WIFI, NFC, Bluetooth, are enabled. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the radios property.
    */
    public function setRadios(?Enablement $value ): void {
        $this->radios = $value;
    }

    /**
     * Sets the rearCamera property value. Defines whether a user is allowed to enable rear camera. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the rearCamera property.
    */
    public function setRearCamera(?Enablement $value ): void {
        $this->rearCamera = $value;
    }

    /**
     * Sets the sdCard property value. Defines whether a user is allowed to enable SD Card Port. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the sdCard property.
    */
    public function setSdCard(?Enablement $value ): void {
        $this->sdCard = $value;
    }

    /**
     * Sets the simultaneousMultiThreading property value. Defines whether a user is allowed to enable Simultaneous MultiThreading. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the simultaneousMultiThreading property.
    */
    public function setSimultaneousMultiThreading(?Enablement $value ): void {
        $this->simultaneousMultiThreading = $value;
    }

    /**
     * Sets the usbTypeAPort property value. Defines whether a user is allowed to enable USB Type A Port. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the usbTypeAPort property.
    */
    public function setUsbTypeAPort(?Enablement $value ): void {
        $this->usbTypeAPort = $value;
    }

    /**
     * Sets the virtualizationOfCpuAndIO property value. Defines whether CPU and IO virtualization is enabled. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the virtualizationOfCpuAndIO property.
    */
    public function setVirtualizationOfCpuAndIO(?Enablement $value ): void {
        $this->virtualizationOfCpuAndIO = $value;
    }

    /**
     * Sets the wakeOnLAN property value. Defines whether a user is allowed to enable Wake on LAN. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the wakeOnLAN property.
    */
    public function setWakeOnLAN(?Enablement $value ): void {
        $this->wakeOnLAN = $value;
    }

    /**
     * Sets the wakeOnPower property value. Defines whether a user is allowed to enable Wake On Power. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the wakeOnPower property.
    */
    public function setWakeOnPower(?Enablement $value ): void {
        $this->wakeOnPower = $value;
    }

    /**
     * Sets the wiFi property value. Defines whether a user is allowed to enable WiFi. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the wiFi property.
    */
    public function setWiFi(?Enablement $value ): void {
        $this->wiFi = $value;
    }

    /**
     * Sets the windowsPlatformBinaryTable property value. Defines whether a user is allowed to enable Windows Platform Binary Table. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the windowsPlatformBinaryTable property.
    */
    public function setWindowsPlatformBinaryTable(?Enablement $value ): void {
        $this->windowsPlatformBinaryTable = $value;
    }

    /**
     * Sets the wirelessWideAreaNetwork property value. Defines whether a user is allowed to enable Wireless Wide Area Network. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the wirelessWideAreaNetwork property.
    */
    public function setWirelessWideAreaNetwork(?Enablement $value ): void {
        $this->wirelessWideAreaNetwork = $value;
    }

}
