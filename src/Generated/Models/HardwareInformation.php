<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HardwareInformation implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $batteryChargeCycles The number of charge cycles the device’s current battery has gone through. Valid values 0 to 2147483647 */
    private ?int $batteryChargeCycles = null;
    
    /** @var int|null $batteryHealthPercentage The device’s current battery’s health percentage. Valid values 0 to 100 */
    private ?int $batteryHealthPercentage = null;
    
    /** @var string|null $batterySerialNumber The serial number of the device’s current battery */
    private ?string $batterySerialNumber = null;
    
    /** @var string|null $cellularTechnology Cellular technology of the device */
    private ?string $cellularTechnology = null;
    
    /** @var string|null $deviceFullQualifiedDomainName Returns the fully qualified domain name of the device (if any). If the device is not domain-joined, it returns an empty string. */
    private ?string $deviceFullQualifiedDomainName = null;
    
    /** @var DeviceGuardLocalSystemAuthorityCredentialGuardState|null $deviceGuardLocalSystemAuthorityCredentialGuardState Local System Authority (LSA) credential guard status. . Possible values are: running, rebootRequired, notLicensed, notConfigured, virtualizationBasedSecurityNotRunning. */
    private ?DeviceGuardLocalSystemAuthorityCredentialGuardState $deviceGuardLocalSystemAuthorityCredentialGuardState = null;
    
    /** @var DeviceGuardVirtualizationBasedSecurityHardwareRequirementState|null $deviceGuardVirtualizationBasedSecurityHardwareRequirementState Virtualization-based security hardware requirement status. Possible values are: meetHardwareRequirements, secureBootRequired, dmaProtectionRequired, hyperVNotSupportedForGuestVM, hyperVNotAvailable. */
    private ?DeviceGuardVirtualizationBasedSecurityHardwareRequirementState $deviceGuardVirtualizationBasedSecurityHardwareRequirementState = null;
    
    /** @var DeviceGuardVirtualizationBasedSecurityState|null $deviceGuardVirtualizationBasedSecurityState Virtualization-based security status. . Possible values are: running, rebootRequired, require64BitArchitecture, notLicensed, notConfigured, doesNotMeetHardwareRequirements, other. */
    private ?DeviceGuardVirtualizationBasedSecurityState $deviceGuardVirtualizationBasedSecurityState = null;
    
    /** @var string|null $esimIdentifier eSIM identifier */
    private ?string $esimIdentifier = null;
    
    /** @var int|null $freeStorageSpace Free storage space of the device. */
    private ?int $freeStorageSpace = null;
    
    /** @var string|null $imei IMEI */
    private ?string $imei = null;
    
    /** @var string|null $ipAddressV4 IPAddressV4 */
    private ?string $ipAddressV4 = null;
    
    /** @var bool|null $isEncrypted Encryption status of the device */
    private ?bool $isEncrypted = null;
    
    /** @var bool|null $isSharedDevice Shared iPad */
    private ?bool $isSharedDevice = null;
    
    /** @var bool|null $isSupervised Supervised mode of the device */
    private ?bool $isSupervised = null;
    
    /** @var string|null $manufacturer Manufacturer of the device */
    private ?string $manufacturer = null;
    
    /** @var string|null $meid MEID */
    private ?string $meid = null;
    
    /** @var string|null $model Model of the device */
    private ?string $model = null;
    
    /** @var string|null $operatingSystemEdition String that specifies the OS edition. */
    private ?string $operatingSystemEdition = null;
    
    /** @var string|null $operatingSystemLanguage Operating system language of the device */
    private ?string $operatingSystemLanguage = null;
    
    /** @var int|null $operatingSystemProductType Int that specifies the Windows Operating System ProductType. More details here https://go.microsoft.com/fwlink/?linkid=2126950. Valid values 0 to 2147483647 */
    private ?int $operatingSystemProductType = null;
    
    /** @var string|null $osBuildNumber Operating System Build Number on Android device */
    private ?string $osBuildNumber = null;
    
    /** @var string|null $phoneNumber Phone number of the device */
    private ?string $phoneNumber = null;
    
    /** @var string|null $serialNumber Serial number. */
    private ?string $serialNumber = null;
    
    /** @var array<SharedAppleDeviceUser>|null $sharedDeviceCachedUsers All users on the shared Apple device */
    private ?array $sharedDeviceCachedUsers = null;
    
    /** @var string|null $subnetAddress SubnetAddress */
    private ?string $subnetAddress = null;
    
    /** @var string|null $subscriberCarrier Subscriber carrier of the device */
    private ?string $subscriberCarrier = null;
    
    /** @var string|null $systemManagementBIOSVersion BIOS version as reported by SMBIOS */
    private ?string $systemManagementBIOSVersion = null;
    
    /** @var int|null $totalStorageSpace Total storage space of the device. */
    private ?int $totalStorageSpace = null;
    
    /** @var string|null $tpmManufacturer The identifying information that uniquely names the TPM manufacturer */
    private ?string $tpmManufacturer = null;
    
    /** @var string|null $tpmSpecificationVersion String that specifies the specification version. */
    private ?string $tpmSpecificationVersion = null;
    
    /** @var string|null $tpmVersion The version of the TPM, as specified by the manufacturer */
    private ?string $tpmVersion = null;
    
    /** @var string|null $wifiMac WiFi MAC address of the device */
    private ?string $wifiMac = null;
    
    /**
     * Instantiates a new hardwareInformation and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HardwareInformation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): HardwareInformation {
        return new HardwareInformation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the batteryChargeCycles property value. The number of charge cycles the device’s current battery has gone through. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getBatteryChargeCycles(): ?int {
        return $this->batteryChargeCycles;
    }

    /**
     * Gets the batteryHealthPercentage property value. The device’s current battery’s health percentage. Valid values 0 to 100
     * @return int|null
    */
    public function getBatteryHealthPercentage(): ?int {
        return $this->batteryHealthPercentage;
    }

    /**
     * Gets the batterySerialNumber property value. The serial number of the device’s current battery
     * @return string|null
    */
    public function getBatterySerialNumber(): ?string {
        return $this->batterySerialNumber;
    }

    /**
     * Gets the cellularTechnology property value. Cellular technology of the device
     * @return string|null
    */
    public function getCellularTechnology(): ?string {
        return $this->cellularTechnology;
    }

    /**
     * Gets the deviceFullQualifiedDomainName property value. Returns the fully qualified domain name of the device (if any). If the device is not domain-joined, it returns an empty string.
     * @return string|null
    */
    public function getDeviceFullQualifiedDomainName(): ?string {
        return $this->deviceFullQualifiedDomainName;
    }

    /**
     * Gets the deviceGuardLocalSystemAuthorityCredentialGuardState property value. Local System Authority (LSA) credential guard status. . Possible values are: running, rebootRequired, notLicensed, notConfigured, virtualizationBasedSecurityNotRunning.
     * @return DeviceGuardLocalSystemAuthorityCredentialGuardState|null
    */
    public function getDeviceGuardLocalSystemAuthorityCredentialGuardState(): ?DeviceGuardLocalSystemAuthorityCredentialGuardState {
        return $this->deviceGuardLocalSystemAuthorityCredentialGuardState;
    }

    /**
     * Gets the deviceGuardVirtualizationBasedSecurityHardwareRequirementState property value. Virtualization-based security hardware requirement status. Possible values are: meetHardwareRequirements, secureBootRequired, dmaProtectionRequired, hyperVNotSupportedForGuestVM, hyperVNotAvailable.
     * @return DeviceGuardVirtualizationBasedSecurityHardwareRequirementState|null
    */
    public function getDeviceGuardVirtualizationBasedSecurityHardwareRequirementState(): ?DeviceGuardVirtualizationBasedSecurityHardwareRequirementState {
        return $this->deviceGuardVirtualizationBasedSecurityHardwareRequirementState;
    }

    /**
     * Gets the deviceGuardVirtualizationBasedSecurityState property value. Virtualization-based security status. . Possible values are: running, rebootRequired, require64BitArchitecture, notLicensed, notConfigured, doesNotMeetHardwareRequirements, other.
     * @return DeviceGuardVirtualizationBasedSecurityState|null
    */
    public function getDeviceGuardVirtualizationBasedSecurityState(): ?DeviceGuardVirtualizationBasedSecurityState {
        return $this->deviceGuardVirtualizationBasedSecurityState;
    }

    /**
     * Gets the esimIdentifier property value. eSIM identifier
     * @return string|null
    */
    public function getEsimIdentifier(): ?string {
        return $this->esimIdentifier;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'batteryChargeCycles' => function (self $o, ParseNode $n) { $o->setBatteryChargeCycles($n->getIntegerValue()); },
            'batteryHealthPercentage' => function (self $o, ParseNode $n) { $o->setBatteryHealthPercentage($n->getIntegerValue()); },
            'batterySerialNumber' => function (self $o, ParseNode $n) { $o->setBatterySerialNumber($n->getStringValue()); },
            'cellularTechnology' => function (self $o, ParseNode $n) { $o->setCellularTechnology($n->getStringValue()); },
            'deviceFullQualifiedDomainName' => function (self $o, ParseNode $n) { $o->setDeviceFullQualifiedDomainName($n->getStringValue()); },
            'deviceGuardLocalSystemAuthorityCredentialGuardState' => function (self $o, ParseNode $n) { $o->setDeviceGuardLocalSystemAuthorityCredentialGuardState($n->getEnumValue(DeviceGuardLocalSystemAuthorityCredentialGuardState::class)); },
            'deviceGuardVirtualizationBasedSecurityHardwareRequirementState' => function (self $o, ParseNode $n) { $o->setDeviceGuardVirtualizationBasedSecurityHardwareRequirementState($n->getEnumValue(DeviceGuardVirtualizationBasedSecurityHardwareRequirementState::class)); },
            'deviceGuardVirtualizationBasedSecurityState' => function (self $o, ParseNode $n) { $o->setDeviceGuardVirtualizationBasedSecurityState($n->getEnumValue(DeviceGuardVirtualizationBasedSecurityState::class)); },
            'esimIdentifier' => function (self $o, ParseNode $n) { $o->setEsimIdentifier($n->getStringValue()); },
            'freeStorageSpace' => function (self $o, ParseNode $n) { $o->setFreeStorageSpace($n->getIntegerValue()); },
            'imei' => function (self $o, ParseNode $n) { $o->setImei($n->getStringValue()); },
            'ipAddressV4' => function (self $o, ParseNode $n) { $o->setIpAddressV4($n->getStringValue()); },
            'isEncrypted' => function (self $o, ParseNode $n) { $o->setIsEncrypted($n->getBooleanValue()); },
            'isSharedDevice' => function (self $o, ParseNode $n) { $o->setIsSharedDevice($n->getBooleanValue()); },
            'isSupervised' => function (self $o, ParseNode $n) { $o->setIsSupervised($n->getBooleanValue()); },
            'manufacturer' => function (self $o, ParseNode $n) { $o->setManufacturer($n->getStringValue()); },
            'meid' => function (self $o, ParseNode $n) { $o->setMeid($n->getStringValue()); },
            'model' => function (self $o, ParseNode $n) { $o->setModel($n->getStringValue()); },
            'operatingSystemEdition' => function (self $o, ParseNode $n) { $o->setOperatingSystemEdition($n->getStringValue()); },
            'operatingSystemLanguage' => function (self $o, ParseNode $n) { $o->setOperatingSystemLanguage($n->getStringValue()); },
            'operatingSystemProductType' => function (self $o, ParseNode $n) { $o->setOperatingSystemProductType($n->getIntegerValue()); },
            'osBuildNumber' => function (self $o, ParseNode $n) { $o->setOsBuildNumber($n->getStringValue()); },
            'phoneNumber' => function (self $o, ParseNode $n) { $o->setPhoneNumber($n->getStringValue()); },
            'serialNumber' => function (self $o, ParseNode $n) { $o->setSerialNumber($n->getStringValue()); },
            'sharedDeviceCachedUsers' => function (self $o, ParseNode $n) { $o->setSharedDeviceCachedUsers($n->getCollectionOfObjectValues(SharedAppleDeviceUser::class)); },
            'subnetAddress' => function (self $o, ParseNode $n) { $o->setSubnetAddress($n->getStringValue()); },
            'subscriberCarrier' => function (self $o, ParseNode $n) { $o->setSubscriberCarrier($n->getStringValue()); },
            'systemManagementBIOSVersion' => function (self $o, ParseNode $n) { $o->setSystemManagementBIOSVersion($n->getStringValue()); },
            'totalStorageSpace' => function (self $o, ParseNode $n) { $o->setTotalStorageSpace($n->getIntegerValue()); },
            'tpmManufacturer' => function (self $o, ParseNode $n) { $o->setTpmManufacturer($n->getStringValue()); },
            'tpmSpecificationVersion' => function (self $o, ParseNode $n) { $o->setTpmSpecificationVersion($n->getStringValue()); },
            'tpmVersion' => function (self $o, ParseNode $n) { $o->setTpmVersion($n->getStringValue()); },
            'wifiMac' => function (self $o, ParseNode $n) { $o->setWifiMac($n->getStringValue()); },
        ];
    }

    /**
     * Gets the freeStorageSpace property value. Free storage space of the device.
     * @return int|null
    */
    public function getFreeStorageSpace(): ?int {
        return $this->freeStorageSpace;
    }

    /**
     * Gets the imei property value. IMEI
     * @return string|null
    */
    public function getImei(): ?string {
        return $this->imei;
    }

    /**
     * Gets the ipAddressV4 property value. IPAddressV4
     * @return string|null
    */
    public function getIpAddressV4(): ?string {
        return $this->ipAddressV4;
    }

    /**
     * Gets the isEncrypted property value. Encryption status of the device
     * @return bool|null
    */
    public function getIsEncrypted(): ?bool {
        return $this->isEncrypted;
    }

    /**
     * Gets the isSharedDevice property value. Shared iPad
     * @return bool|null
    */
    public function getIsSharedDevice(): ?bool {
        return $this->isSharedDevice;
    }

    /**
     * Gets the isSupervised property value. Supervised mode of the device
     * @return bool|null
    */
    public function getIsSupervised(): ?bool {
        return $this->isSupervised;
    }

    /**
     * Gets the manufacturer property value. Manufacturer of the device
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the meid property value. MEID
     * @return string|null
    */
    public function getMeid(): ?string {
        return $this->meid;
    }

    /**
     * Gets the model property value. Model of the device
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the operatingSystemEdition property value. String that specifies the OS edition.
     * @return string|null
    */
    public function getOperatingSystemEdition(): ?string {
        return $this->operatingSystemEdition;
    }

    /**
     * Gets the operatingSystemLanguage property value. Operating system language of the device
     * @return string|null
    */
    public function getOperatingSystemLanguage(): ?string {
        return $this->operatingSystemLanguage;
    }

    /**
     * Gets the operatingSystemProductType property value. Int that specifies the Windows Operating System ProductType. More details here https://go.microsoft.com/fwlink/?linkid=2126950. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getOperatingSystemProductType(): ?int {
        return $this->operatingSystemProductType;
    }

    /**
     * Gets the osBuildNumber property value. Operating System Build Number on Android device
     * @return string|null
    */
    public function getOsBuildNumber(): ?string {
        return $this->osBuildNumber;
    }

    /**
     * Gets the phoneNumber property value. Phone number of the device
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the serialNumber property value. Serial number.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->serialNumber;
    }

    /**
     * Gets the sharedDeviceCachedUsers property value. All users on the shared Apple device
     * @return array<SharedAppleDeviceUser>|null
    */
    public function getSharedDeviceCachedUsers(): ?array {
        return $this->sharedDeviceCachedUsers;
    }

    /**
     * Gets the subnetAddress property value. SubnetAddress
     * @return string|null
    */
    public function getSubnetAddress(): ?string {
        return $this->subnetAddress;
    }

    /**
     * Gets the subscriberCarrier property value. Subscriber carrier of the device
     * @return string|null
    */
    public function getSubscriberCarrier(): ?string {
        return $this->subscriberCarrier;
    }

    /**
     * Gets the systemManagementBIOSVersion property value. BIOS version as reported by SMBIOS
     * @return string|null
    */
    public function getSystemManagementBIOSVersion(): ?string {
        return $this->systemManagementBIOSVersion;
    }

    /**
     * Gets the totalStorageSpace property value. Total storage space of the device.
     * @return int|null
    */
    public function getTotalStorageSpace(): ?int {
        return $this->totalStorageSpace;
    }

    /**
     * Gets the tpmManufacturer property value. The identifying information that uniquely names the TPM manufacturer
     * @return string|null
    */
    public function getTpmManufacturer(): ?string {
        return $this->tpmManufacturer;
    }

    /**
     * Gets the tpmSpecificationVersion property value. String that specifies the specification version.
     * @return string|null
    */
    public function getTpmSpecificationVersion(): ?string {
        return $this->tpmSpecificationVersion;
    }

    /**
     * Gets the tpmVersion property value. The version of the TPM, as specified by the manufacturer
     * @return string|null
    */
    public function getTpmVersion(): ?string {
        return $this->tpmVersion;
    }

    /**
     * Gets the wifiMac property value. WiFi MAC address of the device
     * @return string|null
    */
    public function getWifiMac(): ?string {
        return $this->wifiMac;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('batteryChargeCycles', $this->batteryChargeCycles);
        $writer->writeIntegerValue('batteryHealthPercentage', $this->batteryHealthPercentage);
        $writer->writeStringValue('batterySerialNumber', $this->batterySerialNumber);
        $writer->writeStringValue('cellularTechnology', $this->cellularTechnology);
        $writer->writeStringValue('deviceFullQualifiedDomainName', $this->deviceFullQualifiedDomainName);
        $writer->writeEnumValue('deviceGuardLocalSystemAuthorityCredentialGuardState', $this->deviceGuardLocalSystemAuthorityCredentialGuardState);
        $writer->writeEnumValue('deviceGuardVirtualizationBasedSecurityHardwareRequirementState', $this->deviceGuardVirtualizationBasedSecurityHardwareRequirementState);
        $writer->writeEnumValue('deviceGuardVirtualizationBasedSecurityState', $this->deviceGuardVirtualizationBasedSecurityState);
        $writer->writeStringValue('esimIdentifier', $this->esimIdentifier);
        $writer->writeIntegerValue('freeStorageSpace', $this->freeStorageSpace);
        $writer->writeStringValue('imei', $this->imei);
        $writer->writeStringValue('ipAddressV4', $this->ipAddressV4);
        $writer->writeBooleanValue('isEncrypted', $this->isEncrypted);
        $writer->writeBooleanValue('isSharedDevice', $this->isSharedDevice);
        $writer->writeBooleanValue('isSupervised', $this->isSupervised);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('meid', $this->meid);
        $writer->writeStringValue('model', $this->model);
        $writer->writeStringValue('operatingSystemEdition', $this->operatingSystemEdition);
        $writer->writeStringValue('operatingSystemLanguage', $this->operatingSystemLanguage);
        $writer->writeIntegerValue('operatingSystemProductType', $this->operatingSystemProductType);
        $writer->writeStringValue('osBuildNumber', $this->osBuildNumber);
        $writer->writeStringValue('phoneNumber', $this->phoneNumber);
        $writer->writeStringValue('serialNumber', $this->serialNumber);
        $writer->writeCollectionOfObjectValues('sharedDeviceCachedUsers', $this->sharedDeviceCachedUsers);
        $writer->writeStringValue('subnetAddress', $this->subnetAddress);
        $writer->writeStringValue('subscriberCarrier', $this->subscriberCarrier);
        $writer->writeStringValue('systemManagementBIOSVersion', $this->systemManagementBIOSVersion);
        $writer->writeIntegerValue('totalStorageSpace', $this->totalStorageSpace);
        $writer->writeStringValue('tpmManufacturer', $this->tpmManufacturer);
        $writer->writeStringValue('tpmSpecificationVersion', $this->tpmSpecificationVersion);
        $writer->writeStringValue('tpmVersion', $this->tpmVersion);
        $writer->writeStringValue('wifiMac', $this->wifiMac);
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
     * Sets the batteryChargeCycles property value. The number of charge cycles the device’s current battery has gone through. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the batteryChargeCycles property.
    */
    public function setBatteryChargeCycles(?int $value ): void {
        $this->batteryChargeCycles = $value;
    }

    /**
     * Sets the batteryHealthPercentage property value. The device’s current battery’s health percentage. Valid values 0 to 100
     *  @param int|null $value Value to set for the batteryHealthPercentage property.
    */
    public function setBatteryHealthPercentage(?int $value ): void {
        $this->batteryHealthPercentage = $value;
    }

    /**
     * Sets the batterySerialNumber property value. The serial number of the device’s current battery
     *  @param string|null $value Value to set for the batterySerialNumber property.
    */
    public function setBatterySerialNumber(?string $value ): void {
        $this->batterySerialNumber = $value;
    }

    /**
     * Sets the cellularTechnology property value. Cellular technology of the device
     *  @param string|null $value Value to set for the cellularTechnology property.
    */
    public function setCellularTechnology(?string $value ): void {
        $this->cellularTechnology = $value;
    }

    /**
     * Sets the deviceFullQualifiedDomainName property value. Returns the fully qualified domain name of the device (if any). If the device is not domain-joined, it returns an empty string.
     *  @param string|null $value Value to set for the deviceFullQualifiedDomainName property.
    */
    public function setDeviceFullQualifiedDomainName(?string $value ): void {
        $this->deviceFullQualifiedDomainName = $value;
    }

    /**
     * Sets the deviceGuardLocalSystemAuthorityCredentialGuardState property value. Local System Authority (LSA) credential guard status. . Possible values are: running, rebootRequired, notLicensed, notConfigured, virtualizationBasedSecurityNotRunning.
     *  @param DeviceGuardLocalSystemAuthorityCredentialGuardState|null $value Value to set for the deviceGuardLocalSystemAuthorityCredentialGuardState property.
    */
    public function setDeviceGuardLocalSystemAuthorityCredentialGuardState(?DeviceGuardLocalSystemAuthorityCredentialGuardState $value ): void {
        $this->deviceGuardLocalSystemAuthorityCredentialGuardState = $value;
    }

    /**
     * Sets the deviceGuardVirtualizationBasedSecurityHardwareRequirementState property value. Virtualization-based security hardware requirement status. Possible values are: meetHardwareRequirements, secureBootRequired, dmaProtectionRequired, hyperVNotSupportedForGuestVM, hyperVNotAvailable.
     *  @param DeviceGuardVirtualizationBasedSecurityHardwareRequirementState|null $value Value to set for the deviceGuardVirtualizationBasedSecurityHardwareRequirementState property.
    */
    public function setDeviceGuardVirtualizationBasedSecurityHardwareRequirementState(?DeviceGuardVirtualizationBasedSecurityHardwareRequirementState $value ): void {
        $this->deviceGuardVirtualizationBasedSecurityHardwareRequirementState = $value;
    }

    /**
     * Sets the deviceGuardVirtualizationBasedSecurityState property value. Virtualization-based security status. . Possible values are: running, rebootRequired, require64BitArchitecture, notLicensed, notConfigured, doesNotMeetHardwareRequirements, other.
     *  @param DeviceGuardVirtualizationBasedSecurityState|null $value Value to set for the deviceGuardVirtualizationBasedSecurityState property.
    */
    public function setDeviceGuardVirtualizationBasedSecurityState(?DeviceGuardVirtualizationBasedSecurityState $value ): void {
        $this->deviceGuardVirtualizationBasedSecurityState = $value;
    }

    /**
     * Sets the esimIdentifier property value. eSIM identifier
     *  @param string|null $value Value to set for the esimIdentifier property.
    */
    public function setEsimIdentifier(?string $value ): void {
        $this->esimIdentifier = $value;
    }

    /**
     * Sets the freeStorageSpace property value. Free storage space of the device.
     *  @param int|null $value Value to set for the freeStorageSpace property.
    */
    public function setFreeStorageSpace(?int $value ): void {
        $this->freeStorageSpace = $value;
    }

    /**
     * Sets the imei property value. IMEI
     *  @param string|null $value Value to set for the imei property.
    */
    public function setImei(?string $value ): void {
        $this->imei = $value;
    }

    /**
     * Sets the ipAddressV4 property value. IPAddressV4
     *  @param string|null $value Value to set for the ipAddressV4 property.
    */
    public function setIpAddressV4(?string $value ): void {
        $this->ipAddressV4 = $value;
    }

    /**
     * Sets the isEncrypted property value. Encryption status of the device
     *  @param bool|null $value Value to set for the isEncrypted property.
    */
    public function setIsEncrypted(?bool $value ): void {
        $this->isEncrypted = $value;
    }

    /**
     * Sets the isSharedDevice property value. Shared iPad
     *  @param bool|null $value Value to set for the isSharedDevice property.
    */
    public function setIsSharedDevice(?bool $value ): void {
        $this->isSharedDevice = $value;
    }

    /**
     * Sets the isSupervised property value. Supervised mode of the device
     *  @param bool|null $value Value to set for the isSupervised property.
    */
    public function setIsSupervised(?bool $value ): void {
        $this->isSupervised = $value;
    }

    /**
     * Sets the manufacturer property value. Manufacturer of the device
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the meid property value. MEID
     *  @param string|null $value Value to set for the meid property.
    */
    public function setMeid(?string $value ): void {
        $this->meid = $value;
    }

    /**
     * Sets the model property value. Model of the device
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the operatingSystemEdition property value. String that specifies the OS edition.
     *  @param string|null $value Value to set for the operatingSystemEdition property.
    */
    public function setOperatingSystemEdition(?string $value ): void {
        $this->operatingSystemEdition = $value;
    }

    /**
     * Sets the operatingSystemLanguage property value. Operating system language of the device
     *  @param string|null $value Value to set for the operatingSystemLanguage property.
    */
    public function setOperatingSystemLanguage(?string $value ): void {
        $this->operatingSystemLanguage = $value;
    }

    /**
     * Sets the operatingSystemProductType property value. Int that specifies the Windows Operating System ProductType. More details here https://go.microsoft.com/fwlink/?linkid=2126950. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the operatingSystemProductType property.
    */
    public function setOperatingSystemProductType(?int $value ): void {
        $this->operatingSystemProductType = $value;
    }

    /**
     * Sets the osBuildNumber property value. Operating System Build Number on Android device
     *  @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value ): void {
        $this->osBuildNumber = $value;
    }

    /**
     * Sets the phoneNumber property value. Phone number of the device
     *  @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value ): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the serialNumber property value. Serial number.
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value ): void {
        $this->serialNumber = $value;
    }

    /**
     * Sets the sharedDeviceCachedUsers property value. All users on the shared Apple device
     *  @param array<SharedAppleDeviceUser>|null $value Value to set for the sharedDeviceCachedUsers property.
    */
    public function setSharedDeviceCachedUsers(?array $value ): void {
        $this->sharedDeviceCachedUsers = $value;
    }

    /**
     * Sets the subnetAddress property value. SubnetAddress
     *  @param string|null $value Value to set for the subnetAddress property.
    */
    public function setSubnetAddress(?string $value ): void {
        $this->subnetAddress = $value;
    }

    /**
     * Sets the subscriberCarrier property value. Subscriber carrier of the device
     *  @param string|null $value Value to set for the subscriberCarrier property.
    */
    public function setSubscriberCarrier(?string $value ): void {
        $this->subscriberCarrier = $value;
    }

    /**
     * Sets the systemManagementBIOSVersion property value. BIOS version as reported by SMBIOS
     *  @param string|null $value Value to set for the systemManagementBIOSVersion property.
    */
    public function setSystemManagementBIOSVersion(?string $value ): void {
        $this->systemManagementBIOSVersion = $value;
    }

    /**
     * Sets the totalStorageSpace property value. Total storage space of the device.
     *  @param int|null $value Value to set for the totalStorageSpace property.
    */
    public function setTotalStorageSpace(?int $value ): void {
        $this->totalStorageSpace = $value;
    }

    /**
     * Sets the tpmManufacturer property value. The identifying information that uniquely names the TPM manufacturer
     *  @param string|null $value Value to set for the tpmManufacturer property.
    */
    public function setTpmManufacturer(?string $value ): void {
        $this->tpmManufacturer = $value;
    }

    /**
     * Sets the tpmSpecificationVersion property value. String that specifies the specification version.
     *  @param string|null $value Value to set for the tpmSpecificationVersion property.
    */
    public function setTpmSpecificationVersion(?string $value ): void {
        $this->tpmSpecificationVersion = $value;
    }

    /**
     * Sets the tpmVersion property value. The version of the TPM, as specified by the manufacturer
     *  @param string|null $value Value to set for the tpmVersion property.
    */
    public function setTpmVersion(?string $value ): void {
        $this->tpmVersion = $value;
    }

    /**
     * Sets the wifiMac property value. WiFi MAC address of the device
     *  @param string|null $value Value to set for the wifiMac property.
    */
    public function setWifiMac(?string $value ): void {
        $this->wifiMac = $value;
    }

}
