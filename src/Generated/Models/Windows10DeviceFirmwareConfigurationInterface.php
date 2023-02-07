<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10DeviceFirmwareConfigurationInterface extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new Windows10DeviceFirmwareConfigurationInterface and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10DeviceFirmwareConfigurationInterface');
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
     * Gets the bluetooth property value. Possible values of a property
     * @return Enablement|null
    */
    public function getBluetooth(): ?Enablement {
        return $this->getBackingStore()->get('bluetooth');
    }

    /**
     * Gets the bootFromBuiltInNetworkAdapters property value. Possible values of a property
     * @return Enablement|null
    */
    public function getBootFromBuiltInNetworkAdapters(): ?Enablement {
        return $this->getBackingStore()->get('bootFromBuiltInNetworkAdapters');
    }

    /**
     * Gets the bootFromExternalMedia property value. Possible values of a property
     * @return Enablement|null
    */
    public function getBootFromExternalMedia(): ?Enablement {
        return $this->getBackingStore()->get('bootFromExternalMedia');
    }

    /**
     * Gets the cameras property value. Possible values of a property
     * @return Enablement|null
    */
    public function getCameras(): ?Enablement {
        return $this->getBackingStore()->get('cameras');
    }

    /**
     * Gets the changeUefiSettingsPermission property value. Defines the permission level granted to users to enable them change Uefi settings
     * @return ChangeUefiSettingsPermission|null
    */
    public function getChangeUefiSettingsPermission(): ?ChangeUefiSettingsPermission {
        return $this->getBackingStore()->get('changeUefiSettingsPermission');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bluetooth' => fn(ParseNode $n) => $o->setBluetooth($n->getEnumValue(Enablement::class)),
            'bootFromBuiltInNetworkAdapters' => fn(ParseNode $n) => $o->setBootFromBuiltInNetworkAdapters($n->getEnumValue(Enablement::class)),
            'bootFromExternalMedia' => fn(ParseNode $n) => $o->setBootFromExternalMedia($n->getEnumValue(Enablement::class)),
            'cameras' => fn(ParseNode $n) => $o->setCameras($n->getEnumValue(Enablement::class)),
            'changeUefiSettingsPermission' => fn(ParseNode $n) => $o->setChangeUefiSettingsPermission($n->getEnumValue(ChangeUefiSettingsPermission::class)),
            'frontCamera' => fn(ParseNode $n) => $o->setFrontCamera($n->getEnumValue(Enablement::class)),
            'infraredCamera' => fn(ParseNode $n) => $o->setInfraredCamera($n->getEnumValue(Enablement::class)),
            'microphone' => fn(ParseNode $n) => $o->setMicrophone($n->getEnumValue(Enablement::class)),
            'microphonesAndSpeakers' => fn(ParseNode $n) => $o->setMicrophonesAndSpeakers($n->getEnumValue(Enablement::class)),
            'nearFieldCommunication' => fn(ParseNode $n) => $o->setNearFieldCommunication($n->getEnumValue(Enablement::class)),
            'radios' => fn(ParseNode $n) => $o->setRadios($n->getEnumValue(Enablement::class)),
            'rearCamera' => fn(ParseNode $n) => $o->setRearCamera($n->getEnumValue(Enablement::class)),
            'sdCard' => fn(ParseNode $n) => $o->setSdCard($n->getEnumValue(Enablement::class)),
            'simultaneousMultiThreading' => fn(ParseNode $n) => $o->setSimultaneousMultiThreading($n->getEnumValue(Enablement::class)),
            'usbTypeAPort' => fn(ParseNode $n) => $o->setUsbTypeAPort($n->getEnumValue(Enablement::class)),
            'virtualizationOfCpuAndIO' => fn(ParseNode $n) => $o->setVirtualizationOfCpuAndIO($n->getEnumValue(Enablement::class)),
            'wakeOnLAN' => fn(ParseNode $n) => $o->setWakeOnLAN($n->getEnumValue(Enablement::class)),
            'wakeOnPower' => fn(ParseNode $n) => $o->setWakeOnPower($n->getEnumValue(Enablement::class)),
            'wiFi' => fn(ParseNode $n) => $o->setWiFi($n->getEnumValue(Enablement::class)),
            'windowsPlatformBinaryTable' => fn(ParseNode $n) => $o->setWindowsPlatformBinaryTable($n->getEnumValue(Enablement::class)),
            'wirelessWideAreaNetwork' => fn(ParseNode $n) => $o->setWirelessWideAreaNetwork($n->getEnumValue(Enablement::class)),
        ]);
    }

    /**
     * Gets the frontCamera property value. Possible values of a property
     * @return Enablement|null
    */
    public function getFrontCamera(): ?Enablement {
        return $this->getBackingStore()->get('frontCamera');
    }

    /**
     * Gets the infraredCamera property value. Possible values of a property
     * @return Enablement|null
    */
    public function getInfraredCamera(): ?Enablement {
        return $this->getBackingStore()->get('infraredCamera');
    }

    /**
     * Gets the microphone property value. Possible values of a property
     * @return Enablement|null
    */
    public function getMicrophone(): ?Enablement {
        return $this->getBackingStore()->get('microphone');
    }

    /**
     * Gets the microphonesAndSpeakers property value. Possible values of a property
     * @return Enablement|null
    */
    public function getMicrophonesAndSpeakers(): ?Enablement {
        return $this->getBackingStore()->get('microphonesAndSpeakers');
    }

    /**
     * Gets the nearFieldCommunication property value. Possible values of a property
     * @return Enablement|null
    */
    public function getNearFieldCommunication(): ?Enablement {
        return $this->getBackingStore()->get('nearFieldCommunication');
    }

    /**
     * Gets the radios property value. Possible values of a property
     * @return Enablement|null
    */
    public function getRadios(): ?Enablement {
        return $this->getBackingStore()->get('radios');
    }

    /**
     * Gets the rearCamera property value. Possible values of a property
     * @return Enablement|null
    */
    public function getRearCamera(): ?Enablement {
        return $this->getBackingStore()->get('rearCamera');
    }

    /**
     * Gets the sdCard property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSdCard(): ?Enablement {
        return $this->getBackingStore()->get('sdCard');
    }

    /**
     * Gets the simultaneousMultiThreading property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSimultaneousMultiThreading(): ?Enablement {
        return $this->getBackingStore()->get('simultaneousMultiThreading');
    }

    /**
     * Gets the usbTypeAPort property value. Possible values of a property
     * @return Enablement|null
    */
    public function getUsbTypeAPort(): ?Enablement {
        return $this->getBackingStore()->get('usbTypeAPort');
    }

    /**
     * Gets the virtualizationOfCpuAndIO property value. Possible values of a property
     * @return Enablement|null
    */
    public function getVirtualizationOfCpuAndIO(): ?Enablement {
        return $this->getBackingStore()->get('virtualizationOfCpuAndIO');
    }

    /**
     * Gets the wakeOnLAN property value. Possible values of a property
     * @return Enablement|null
    */
    public function getWakeOnLAN(): ?Enablement {
        return $this->getBackingStore()->get('wakeOnLAN');
    }

    /**
     * Gets the wakeOnPower property value. Possible values of a property
     * @return Enablement|null
    */
    public function getWakeOnPower(): ?Enablement {
        return $this->getBackingStore()->get('wakeOnPower');
    }

    /**
     * Gets the wiFi property value. Possible values of a property
     * @return Enablement|null
    */
    public function getWiFi(): ?Enablement {
        return $this->getBackingStore()->get('wiFi');
    }

    /**
     * Gets the windowsPlatformBinaryTable property value. Possible values of a property
     * @return Enablement|null
    */
    public function getWindowsPlatformBinaryTable(): ?Enablement {
        return $this->getBackingStore()->get('windowsPlatformBinaryTable');
    }

    /**
     * Gets the wirelessWideAreaNetwork property value. Possible values of a property
     * @return Enablement|null
    */
    public function getWirelessWideAreaNetwork(): ?Enablement {
        return $this->getBackingStore()->get('wirelessWideAreaNetwork');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('bluetooth', $this->getBluetooth());
        $writer->writeEnumValue('bootFromBuiltInNetworkAdapters', $this->getBootFromBuiltInNetworkAdapters());
        $writer->writeEnumValue('bootFromExternalMedia', $this->getBootFromExternalMedia());
        $writer->writeEnumValue('cameras', $this->getCameras());
        $writer->writeEnumValue('changeUefiSettingsPermission', $this->getChangeUefiSettingsPermission());
        $writer->writeEnumValue('frontCamera', $this->getFrontCamera());
        $writer->writeEnumValue('infraredCamera', $this->getInfraredCamera());
        $writer->writeEnumValue('microphone', $this->getMicrophone());
        $writer->writeEnumValue('microphonesAndSpeakers', $this->getMicrophonesAndSpeakers());
        $writer->writeEnumValue('nearFieldCommunication', $this->getNearFieldCommunication());
        $writer->writeEnumValue('radios', $this->getRadios());
        $writer->writeEnumValue('rearCamera', $this->getRearCamera());
        $writer->writeEnumValue('sdCard', $this->getSdCard());
        $writer->writeEnumValue('simultaneousMultiThreading', $this->getSimultaneousMultiThreading());
        $writer->writeEnumValue('usbTypeAPort', $this->getUsbTypeAPort());
        $writer->writeEnumValue('virtualizationOfCpuAndIO', $this->getVirtualizationOfCpuAndIO());
        $writer->writeEnumValue('wakeOnLAN', $this->getWakeOnLAN());
        $writer->writeEnumValue('wakeOnPower', $this->getWakeOnPower());
        $writer->writeEnumValue('wiFi', $this->getWiFi());
        $writer->writeEnumValue('windowsPlatformBinaryTable', $this->getWindowsPlatformBinaryTable());
        $writer->writeEnumValue('wirelessWideAreaNetwork', $this->getWirelessWideAreaNetwork());
    }

    /**
     * Sets the bluetooth property value. Possible values of a property
     * @param Enablement|null $value Value to set for the bluetooth property.
    */
    public function setBluetooth(?Enablement $value): void {
        $this->getBackingStore()->set('bluetooth', $value);
    }

    /**
     * Sets the bootFromBuiltInNetworkAdapters property value. Possible values of a property
     * @param Enablement|null $value Value to set for the bootFromBuiltInNetworkAdapters property.
    */
    public function setBootFromBuiltInNetworkAdapters(?Enablement $value): void {
        $this->getBackingStore()->set('bootFromBuiltInNetworkAdapters', $value);
    }

    /**
     * Sets the bootFromExternalMedia property value. Possible values of a property
     * @param Enablement|null $value Value to set for the bootFromExternalMedia property.
    */
    public function setBootFromExternalMedia(?Enablement $value): void {
        $this->getBackingStore()->set('bootFromExternalMedia', $value);
    }

    /**
     * Sets the cameras property value. Possible values of a property
     * @param Enablement|null $value Value to set for the cameras property.
    */
    public function setCameras(?Enablement $value): void {
        $this->getBackingStore()->set('cameras', $value);
    }

    /**
     * Sets the changeUefiSettingsPermission property value. Defines the permission level granted to users to enable them change Uefi settings
     * @param ChangeUefiSettingsPermission|null $value Value to set for the changeUefiSettingsPermission property.
    */
    public function setChangeUefiSettingsPermission(?ChangeUefiSettingsPermission $value): void {
        $this->getBackingStore()->set('changeUefiSettingsPermission', $value);
    }

    /**
     * Sets the frontCamera property value. Possible values of a property
     * @param Enablement|null $value Value to set for the frontCamera property.
    */
    public function setFrontCamera(?Enablement $value): void {
        $this->getBackingStore()->set('frontCamera', $value);
    }

    /**
     * Sets the infraredCamera property value. Possible values of a property
     * @param Enablement|null $value Value to set for the infraredCamera property.
    */
    public function setInfraredCamera(?Enablement $value): void {
        $this->getBackingStore()->set('infraredCamera', $value);
    }

    /**
     * Sets the microphone property value. Possible values of a property
     * @param Enablement|null $value Value to set for the microphone property.
    */
    public function setMicrophone(?Enablement $value): void {
        $this->getBackingStore()->set('microphone', $value);
    }

    /**
     * Sets the microphonesAndSpeakers property value. Possible values of a property
     * @param Enablement|null $value Value to set for the microphonesAndSpeakers property.
    */
    public function setMicrophonesAndSpeakers(?Enablement $value): void {
        $this->getBackingStore()->set('microphonesAndSpeakers', $value);
    }

    /**
     * Sets the nearFieldCommunication property value. Possible values of a property
     * @param Enablement|null $value Value to set for the nearFieldCommunication property.
    */
    public function setNearFieldCommunication(?Enablement $value): void {
        $this->getBackingStore()->set('nearFieldCommunication', $value);
    }

    /**
     * Sets the radios property value. Possible values of a property
     * @param Enablement|null $value Value to set for the radios property.
    */
    public function setRadios(?Enablement $value): void {
        $this->getBackingStore()->set('radios', $value);
    }

    /**
     * Sets the rearCamera property value. Possible values of a property
     * @param Enablement|null $value Value to set for the rearCamera property.
    */
    public function setRearCamera(?Enablement $value): void {
        $this->getBackingStore()->set('rearCamera', $value);
    }

    /**
     * Sets the sdCard property value. Possible values of a property
     * @param Enablement|null $value Value to set for the sdCard property.
    */
    public function setSdCard(?Enablement $value): void {
        $this->getBackingStore()->set('sdCard', $value);
    }

    /**
     * Sets the simultaneousMultiThreading property value. Possible values of a property
     * @param Enablement|null $value Value to set for the simultaneousMultiThreading property.
    */
    public function setSimultaneousMultiThreading(?Enablement $value): void {
        $this->getBackingStore()->set('simultaneousMultiThreading', $value);
    }

    /**
     * Sets the usbTypeAPort property value. Possible values of a property
     * @param Enablement|null $value Value to set for the usbTypeAPort property.
    */
    public function setUsbTypeAPort(?Enablement $value): void {
        $this->getBackingStore()->set('usbTypeAPort', $value);
    }

    /**
     * Sets the virtualizationOfCpuAndIO property value. Possible values of a property
     * @param Enablement|null $value Value to set for the virtualizationOfCpuAndIO property.
    */
    public function setVirtualizationOfCpuAndIO(?Enablement $value): void {
        $this->getBackingStore()->set('virtualizationOfCpuAndIO', $value);
    }

    /**
     * Sets the wakeOnLAN property value. Possible values of a property
     * @param Enablement|null $value Value to set for the wakeOnLAN property.
    */
    public function setWakeOnLAN(?Enablement $value): void {
        $this->getBackingStore()->set('wakeOnLAN', $value);
    }

    /**
     * Sets the wakeOnPower property value. Possible values of a property
     * @param Enablement|null $value Value to set for the wakeOnPower property.
    */
    public function setWakeOnPower(?Enablement $value): void {
        $this->getBackingStore()->set('wakeOnPower', $value);
    }

    /**
     * Sets the wiFi property value. Possible values of a property
     * @param Enablement|null $value Value to set for the wiFi property.
    */
    public function setWiFi(?Enablement $value): void {
        $this->getBackingStore()->set('wiFi', $value);
    }

    /**
     * Sets the windowsPlatformBinaryTable property value. Possible values of a property
     * @param Enablement|null $value Value to set for the windowsPlatformBinaryTable property.
    */
    public function setWindowsPlatformBinaryTable(?Enablement $value): void {
        $this->getBackingStore()->set('windowsPlatformBinaryTable', $value);
    }

    /**
     * Sets the wirelessWideAreaNetwork property value. Possible values of a property
     * @param Enablement|null $value Value to set for the wirelessWideAreaNetwork property.
    */
    public function setWirelessWideAreaNetwork(?Enablement $value): void {
        $this->getBackingStore()->set('wirelessWideAreaNetwork', $value);
    }

}
