<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HardwareInformation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $batteryChargeCycles The number of charge cycles the device’s current battery has gone through. Valid values 0 to 2147483647
    */
    private ?int $batteryChargeCycles = null;
    
    /**
     * @var int|null $batteryHealthPercentage The device’s current battery’s health percentage. Valid values 0 to 100
    */
    private ?int $batteryHealthPercentage = null;
    
    /**
     * @var float|null $batteryLevelPercentage The battery level, between 0.0 and 100, or null if the battery level cannot be determined. The update frequency of this property is per-checkin. Note this property is currently supported only on devices running iOS 5.0 and later, and is available only when Device Information access right is obtained. Valid values 0 to 100
    */
    private ?float $batteryLevelPercentage = null;
    
    /**
     * @var string|null $batterySerialNumber The serial number of the device’s current battery
    */
    private ?string $batterySerialNumber = null;
    
    /**
     * @var string|null $cellularTechnology Cellular technology of the device
    */
    private ?string $cellularTechnology = null;
    
    /**
     * @var string|null $deviceFullQualifiedDomainName Returns the fully qualified domain name of the device (if any). If the device is not domain-joined, it returns an empty string.
    */
    private ?string $deviceFullQualifiedDomainName = null;
    
    /**
     * @var DeviceGuardLocalSystemAuthorityCredentialGuardState|null $deviceGuardLocalSystemAuthorityCredentialGuardState The deviceGuardLocalSystemAuthorityCredentialGuardState property
    */
    private ?DeviceGuardLocalSystemAuthorityCredentialGuardState $deviceGuardLocalSystemAuthorityCredentialGuardState = null;
    
    /**
     * @var DeviceGuardVirtualizationBasedSecurityHardwareRequirementState|null $deviceGuardVirtualizationBasedSecurityHardwareRequirementState The deviceGuardVirtualizationBasedSecurityHardwareRequirementState property
    */
    private ?DeviceGuardVirtualizationBasedSecurityHardwareRequirementState $deviceGuardVirtualizationBasedSecurityHardwareRequirementState = null;
    
    /**
     * @var DeviceGuardVirtualizationBasedSecurityState|null $deviceGuardVirtualizationBasedSecurityState The deviceGuardVirtualizationBasedSecurityState property
    */
    private ?DeviceGuardVirtualizationBasedSecurityState $deviceGuardVirtualizationBasedSecurityState = null;
    
    /**
     * @var int|null $deviceLicensingLastErrorCode A standard error code indicating the last error, or 0 indicating no error (default). The update frequency of this property is daily. Note this property is currently supported only for Windows based Device based subscription licensing. Valid values 0 to 2147483647
    */
    private ?int $deviceLicensingLastErrorCode = null;
    
    /**
     * @var string|null $deviceLicensingLastErrorDescription Error text message as a descripition for deviceLicensingLastErrorCode. The update frequency of this property is daily. Note this property is currently supported only for Windows based Device based subscription licensing.
    */
    private ?string $deviceLicensingLastErrorDescription = null;
    
    /**
     * @var DeviceLicensingStatus|null $deviceLicensingStatus Indicates the device licensing status after Windows device based subscription has been enabled.
    */
    private ?DeviceLicensingStatus $deviceLicensingStatus = null;
    
    /**
     * @var string|null $esimIdentifier eSIM identifier
    */
    private ?string $esimIdentifier = null;
    
    /**
     * @var int|null $freeStorageSpace Free storage space of the device.
    */
    private ?int $freeStorageSpace = null;
    
    /**
     * @var string|null $imei IMEI
    */
    private ?string $imei = null;
    
    /**
     * @var string|null $ipAddressV4 IPAddressV4
    */
    private ?string $ipAddressV4 = null;
    
    /**
     * @var bool|null $isEncrypted Encryption status of the device
    */
    private ?bool $isEncrypted = null;
    
    /**
     * @var bool|null $isSharedDevice Shared iPad
    */
    private ?bool $isSharedDevice = null;
    
    /**
     * @var bool|null $isSupervised Supervised mode of the device
    */
    private ?bool $isSupervised = null;
    
    /**
     * @var string|null $manufacturer Manufacturer of the device
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $meid MEID
    */
    private ?string $meid = null;
    
    /**
     * @var string|null $model Model of the device
    */
    private ?string $model = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $operatingSystemEdition String that specifies the OS edition.
    */
    private ?string $operatingSystemEdition = null;
    
    /**
     * @var string|null $operatingSystemLanguage Operating system language of the device
    */
    private ?string $operatingSystemLanguage = null;
    
    /**
     * @var int|null $operatingSystemProductType Int that specifies the Windows Operating System ProductType. More details here https://go.microsoft.com/fwlink/?linkid=2126950. Valid values 0 to 2147483647
    */
    private ?int $operatingSystemProductType = null;
    
    /**
     * @var string|null $osBuildNumber Operating System Build Number on Android device
    */
    private ?string $osBuildNumber = null;
    
    /**
     * @var string|null $phoneNumber Phone number of the device
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $productName The product name, e.g. iPad8,12 etc. The update frequency of this property is weekly. Note this property is currently supported only on iOS/MacOS devices, and is available only when Device Information access right is obtained.
    */
    private ?string $productName = null;
    
    /**
     * @var int|null $residentUsersCount The number of users currently on this device, or null (default) if the value of this property cannot be determined. The update frequency of this property is per-checkin. Note this property is currently supported only on devices running iOS 13.4 and later, and is available only when Device Information access right is obtained. Valid values 0 to 2147483647
    */
    private ?int $residentUsersCount = null;
    
    /**
     * @var string|null $serialNumber Serial number.
    */
    private ?string $serialNumber = null;
    
    /**
     * @var array<SharedAppleDeviceUser>|null $sharedDeviceCachedUsers All users on the shared Apple device
    */
    private ?array $sharedDeviceCachedUsers = null;
    
    /**
     * @var string|null $subnetAddress SubnetAddress
    */
    private ?string $subnetAddress = null;
    
    /**
     * @var string|null $subscriberCarrier Subscriber carrier of the device
    */
    private ?string $subscriberCarrier = null;
    
    /**
     * @var string|null $systemManagementBIOSVersion BIOS version as reported by SMBIOS
    */
    private ?string $systemManagementBIOSVersion = null;
    
    /**
     * @var int|null $totalStorageSpace Total storage space of the device.
    */
    private ?int $totalStorageSpace = null;
    
    /**
     * @var string|null $tpmManufacturer The identifying information that uniquely names the TPM manufacturer
    */
    private ?string $tpmManufacturer = null;
    
    /**
     * @var string|null $tpmSpecificationVersion String that specifies the specification version.
    */
    private ?string $tpmSpecificationVersion = null;
    
    /**
     * @var string|null $tpmVersion The version of the TPM, as specified by the manufacturer
    */
    private ?string $tpmVersion = null;
    
    /**
     * @var string|null $wifiMac WiFi MAC address of the device
    */
    private ?string $wifiMac = null;
    
    /**
     * @var array<string>|null $wiredIPv4Addresses A list of wired IPv4 addresses. The update frequency (the maximum delay for the change of property value to be synchronized from the device to the cloud storage) of this property is daily. Note this property is currently supported only on devices running on Windows.
    */
    private ?array $wiredIPv4Addresses = null;
    
    /**
     * Instantiates a new hardwareInformation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.hardwareInformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HardwareInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HardwareInformation {
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
     * Gets the batteryLevelPercentage property value. The battery level, between 0.0 and 100, or null if the battery level cannot be determined. The update frequency of this property is per-checkin. Note this property is currently supported only on devices running iOS 5.0 and later, and is available only when Device Information access right is obtained. Valid values 0 to 100
     * @return float|null
    */
    public function getBatteryLevelPercentage(): ?float {
        return $this->batteryLevelPercentage;
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
     * Gets the deviceGuardLocalSystemAuthorityCredentialGuardState property value. The deviceGuardLocalSystemAuthorityCredentialGuardState property
     * @return DeviceGuardLocalSystemAuthorityCredentialGuardState|null
    */
    public function getDeviceGuardLocalSystemAuthorityCredentialGuardState(): ?DeviceGuardLocalSystemAuthorityCredentialGuardState {
        return $this->deviceGuardLocalSystemAuthorityCredentialGuardState;
    }

    /**
     * Gets the deviceGuardVirtualizationBasedSecurityHardwareRequirementState property value. The deviceGuardVirtualizationBasedSecurityHardwareRequirementState property
     * @return DeviceGuardVirtualizationBasedSecurityHardwareRequirementState|null
    */
    public function getDeviceGuardVirtualizationBasedSecurityHardwareRequirementState(): ?DeviceGuardVirtualizationBasedSecurityHardwareRequirementState {
        return $this->deviceGuardVirtualizationBasedSecurityHardwareRequirementState;
    }

    /**
     * Gets the deviceGuardVirtualizationBasedSecurityState property value. The deviceGuardVirtualizationBasedSecurityState property
     * @return DeviceGuardVirtualizationBasedSecurityState|null
    */
    public function getDeviceGuardVirtualizationBasedSecurityState(): ?DeviceGuardVirtualizationBasedSecurityState {
        return $this->deviceGuardVirtualizationBasedSecurityState;
    }

    /**
     * Gets the deviceLicensingLastErrorCode property value. A standard error code indicating the last error, or 0 indicating no error (default). The update frequency of this property is daily. Note this property is currently supported only for Windows based Device based subscription licensing. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getDeviceLicensingLastErrorCode(): ?int {
        return $this->deviceLicensingLastErrorCode;
    }

    /**
     * Gets the deviceLicensingLastErrorDescription property value. Error text message as a descripition for deviceLicensingLastErrorCode. The update frequency of this property is daily. Note this property is currently supported only for Windows based Device based subscription licensing.
     * @return string|null
    */
    public function getDeviceLicensingLastErrorDescription(): ?string {
        return $this->deviceLicensingLastErrorDescription;
    }

    /**
     * Gets the deviceLicensingStatus property value. Indicates the device licensing status after Windows device based subscription has been enabled.
     * @return DeviceLicensingStatus|null
    */
    public function getDeviceLicensingStatus(): ?DeviceLicensingStatus {
        return $this->deviceLicensingStatus;
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
        $o = $this;
        return  [
            'batteryChargeCycles' => fn(ParseNode $n) => $o->setBatteryChargeCycles($n->getIntegerValue()),
            'batteryHealthPercentage' => fn(ParseNode $n) => $o->setBatteryHealthPercentage($n->getIntegerValue()),
            'batteryLevelPercentage' => fn(ParseNode $n) => $o->setBatteryLevelPercentage($n->getFloatValue()),
            'batterySerialNumber' => fn(ParseNode $n) => $o->setBatterySerialNumber($n->getStringValue()),
            'cellularTechnology' => fn(ParseNode $n) => $o->setCellularTechnology($n->getStringValue()),
            'deviceFullQualifiedDomainName' => fn(ParseNode $n) => $o->setDeviceFullQualifiedDomainName($n->getStringValue()),
            'deviceGuardLocalSystemAuthorityCredentialGuardState' => fn(ParseNode $n) => $o->setDeviceGuardLocalSystemAuthorityCredentialGuardState($n->getEnumValue(DeviceGuardLocalSystemAuthorityCredentialGuardState::class)),
            'deviceGuardVirtualizationBasedSecurityHardwareRequirementState' => fn(ParseNode $n) => $o->setDeviceGuardVirtualizationBasedSecurityHardwareRequirementState($n->getEnumValue(DeviceGuardVirtualizationBasedSecurityHardwareRequirementState::class)),
            'deviceGuardVirtualizationBasedSecurityState' => fn(ParseNode $n) => $o->setDeviceGuardVirtualizationBasedSecurityState($n->getEnumValue(DeviceGuardVirtualizationBasedSecurityState::class)),
            'deviceLicensingLastErrorCode' => fn(ParseNode $n) => $o->setDeviceLicensingLastErrorCode($n->getIntegerValue()),
            'deviceLicensingLastErrorDescription' => fn(ParseNode $n) => $o->setDeviceLicensingLastErrorDescription($n->getStringValue()),
            'deviceLicensingStatus' => fn(ParseNode $n) => $o->setDeviceLicensingStatus($n->getEnumValue(DeviceLicensingStatus::class)),
            'esimIdentifier' => fn(ParseNode $n) => $o->setEsimIdentifier($n->getStringValue()),
            'freeStorageSpace' => fn(ParseNode $n) => $o->setFreeStorageSpace($n->getIntegerValue()),
            'imei' => fn(ParseNode $n) => $o->setImei($n->getStringValue()),
            'ipAddressV4' => fn(ParseNode $n) => $o->setIpAddressV4($n->getStringValue()),
            'isEncrypted' => fn(ParseNode $n) => $o->setIsEncrypted($n->getBooleanValue()),
            'isSharedDevice' => fn(ParseNode $n) => $o->setIsSharedDevice($n->getBooleanValue()),
            'isSupervised' => fn(ParseNode $n) => $o->setIsSupervised($n->getBooleanValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'meid' => fn(ParseNode $n) => $o->setMeid($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operatingSystemEdition' => fn(ParseNode $n) => $o->setOperatingSystemEdition($n->getStringValue()),
            'operatingSystemLanguage' => fn(ParseNode $n) => $o->setOperatingSystemLanguage($n->getStringValue()),
            'operatingSystemProductType' => fn(ParseNode $n) => $o->setOperatingSystemProductType($n->getIntegerValue()),
            'osBuildNumber' => fn(ParseNode $n) => $o->setOsBuildNumber($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'productName' => fn(ParseNode $n) => $o->setProductName($n->getStringValue()),
            'residentUsersCount' => fn(ParseNode $n) => $o->setResidentUsersCount($n->getIntegerValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'sharedDeviceCachedUsers' => fn(ParseNode $n) => $o->setSharedDeviceCachedUsers($n->getCollectionOfObjectValues([SharedAppleDeviceUser::class, 'createFromDiscriminatorValue'])),
            'subnetAddress' => fn(ParseNode $n) => $o->setSubnetAddress($n->getStringValue()),
            'subscriberCarrier' => fn(ParseNode $n) => $o->setSubscriberCarrier($n->getStringValue()),
            'systemManagementBIOSVersion' => fn(ParseNode $n) => $o->setSystemManagementBIOSVersion($n->getStringValue()),
            'totalStorageSpace' => fn(ParseNode $n) => $o->setTotalStorageSpace($n->getIntegerValue()),
            'tpmManufacturer' => fn(ParseNode $n) => $o->setTpmManufacturer($n->getStringValue()),
            'tpmSpecificationVersion' => fn(ParseNode $n) => $o->setTpmSpecificationVersion($n->getStringValue()),
            'tpmVersion' => fn(ParseNode $n) => $o->setTpmVersion($n->getStringValue()),
            'wifiMac' => fn(ParseNode $n) => $o->setWifiMac($n->getStringValue()),
            'wiredIPv4Addresses' => fn(ParseNode $n) => $o->setWiredIPv4Addresses($n->getCollectionOfPrimitiveValues()),
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
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
     * Gets the productName property value. The product name, e.g. iPad8,12 etc. The update frequency of this property is weekly. Note this property is currently supported only on iOS/MacOS devices, and is available only when Device Information access right is obtained.
     * @return string|null
    */
    public function getProductName(): ?string {
        return $this->productName;
    }

    /**
     * Gets the residentUsersCount property value. The number of users currently on this device, or null (default) if the value of this property cannot be determined. The update frequency of this property is per-checkin. Note this property is currently supported only on devices running iOS 13.4 and later, and is available only when Device Information access right is obtained. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getResidentUsersCount(): ?int {
        return $this->residentUsersCount;
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
     * Gets the wiredIPv4Addresses property value. A list of wired IPv4 addresses. The update frequency (the maximum delay for the change of property value to be synchronized from the device to the cloud storage) of this property is daily. Note this property is currently supported only on devices running on Windows.
     * @return array<string>|null
    */
    public function getWiredIPv4Addresses(): ?array {
        return $this->wiredIPv4Addresses;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('batteryChargeCycles', $this->batteryChargeCycles);
        $writer->writeIntegerValue('batteryHealthPercentage', $this->batteryHealthPercentage);
        $writer->writeFloatValue('batteryLevelPercentage', $this->batteryLevelPercentage);
        $writer->writeStringValue('batterySerialNumber', $this->batterySerialNumber);
        $writer->writeStringValue('cellularTechnology', $this->cellularTechnology);
        $writer->writeStringValue('deviceFullQualifiedDomainName', $this->deviceFullQualifiedDomainName);
        $writer->writeEnumValue('deviceGuardLocalSystemAuthorityCredentialGuardState', $this->deviceGuardLocalSystemAuthorityCredentialGuardState);
        $writer->writeEnumValue('deviceGuardVirtualizationBasedSecurityHardwareRequirementState', $this->deviceGuardVirtualizationBasedSecurityHardwareRequirementState);
        $writer->writeEnumValue('deviceGuardVirtualizationBasedSecurityState', $this->deviceGuardVirtualizationBasedSecurityState);
        $writer->writeIntegerValue('deviceLicensingLastErrorCode', $this->deviceLicensingLastErrorCode);
        $writer->writeStringValue('deviceLicensingLastErrorDescription', $this->deviceLicensingLastErrorDescription);
        $writer->writeEnumValue('deviceLicensingStatus', $this->deviceLicensingStatus);
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
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('operatingSystemEdition', $this->operatingSystemEdition);
        $writer->writeStringValue('operatingSystemLanguage', $this->operatingSystemLanguage);
        $writer->writeIntegerValue('operatingSystemProductType', $this->operatingSystemProductType);
        $writer->writeStringValue('osBuildNumber', $this->osBuildNumber);
        $writer->writeStringValue('phoneNumber', $this->phoneNumber);
        $writer->writeStringValue('productName', $this->productName);
        $writer->writeIntegerValue('residentUsersCount', $this->residentUsersCount);
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
        $writer->writeCollectionOfPrimitiveValues('wiredIPv4Addresses', $this->wiredIPv4Addresses);
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
     * Sets the batteryLevelPercentage property value. The battery level, between 0.0 and 100, or null if the battery level cannot be determined. The update frequency of this property is per-checkin. Note this property is currently supported only on devices running iOS 5.0 and later, and is available only when Device Information access right is obtained. Valid values 0 to 100
     *  @param float|null $value Value to set for the batteryLevelPercentage property.
    */
    public function setBatteryLevelPercentage(?float $value ): void {
        $this->batteryLevelPercentage = $value;
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
     * Sets the deviceGuardLocalSystemAuthorityCredentialGuardState property value. The deviceGuardLocalSystemAuthorityCredentialGuardState property
     *  @param DeviceGuardLocalSystemAuthorityCredentialGuardState|null $value Value to set for the deviceGuardLocalSystemAuthorityCredentialGuardState property.
    */
    public function setDeviceGuardLocalSystemAuthorityCredentialGuardState(?DeviceGuardLocalSystemAuthorityCredentialGuardState $value ): void {
        $this->deviceGuardLocalSystemAuthorityCredentialGuardState = $value;
    }

    /**
     * Sets the deviceGuardVirtualizationBasedSecurityHardwareRequirementState property value. The deviceGuardVirtualizationBasedSecurityHardwareRequirementState property
     *  @param DeviceGuardVirtualizationBasedSecurityHardwareRequirementState|null $value Value to set for the deviceGuardVirtualizationBasedSecurityHardwareRequirementState property.
    */
    public function setDeviceGuardVirtualizationBasedSecurityHardwareRequirementState(?DeviceGuardVirtualizationBasedSecurityHardwareRequirementState $value ): void {
        $this->deviceGuardVirtualizationBasedSecurityHardwareRequirementState = $value;
    }

    /**
     * Sets the deviceGuardVirtualizationBasedSecurityState property value. The deviceGuardVirtualizationBasedSecurityState property
     *  @param DeviceGuardVirtualizationBasedSecurityState|null $value Value to set for the deviceGuardVirtualizationBasedSecurityState property.
    */
    public function setDeviceGuardVirtualizationBasedSecurityState(?DeviceGuardVirtualizationBasedSecurityState $value ): void {
        $this->deviceGuardVirtualizationBasedSecurityState = $value;
    }

    /**
     * Sets the deviceLicensingLastErrorCode property value. A standard error code indicating the last error, or 0 indicating no error (default). The update frequency of this property is daily. Note this property is currently supported only for Windows based Device based subscription licensing. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the deviceLicensingLastErrorCode property.
    */
    public function setDeviceLicensingLastErrorCode(?int $value ): void {
        $this->deviceLicensingLastErrorCode = $value;
    }

    /**
     * Sets the deviceLicensingLastErrorDescription property value. Error text message as a descripition for deviceLicensingLastErrorCode. The update frequency of this property is daily. Note this property is currently supported only for Windows based Device based subscription licensing.
     *  @param string|null $value Value to set for the deviceLicensingLastErrorDescription property.
    */
    public function setDeviceLicensingLastErrorDescription(?string $value ): void {
        $this->deviceLicensingLastErrorDescription = $value;
    }

    /**
     * Sets the deviceLicensingStatus property value. Indicates the device licensing status after Windows device based subscription has been enabled.
     *  @param DeviceLicensingStatus|null $value Value to set for the deviceLicensingStatus property.
    */
    public function setDeviceLicensingStatus(?DeviceLicensingStatus $value ): void {
        $this->deviceLicensingStatus = $value;
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
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
     * Sets the productName property value. The product name, e.g. iPad8,12 etc. The update frequency of this property is weekly. Note this property is currently supported only on iOS/MacOS devices, and is available only when Device Information access right is obtained.
     *  @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value ): void {
        $this->productName = $value;
    }

    /**
     * Sets the residentUsersCount property value. The number of users currently on this device, or null (default) if the value of this property cannot be determined. The update frequency of this property is per-checkin. Note this property is currently supported only on devices running iOS 13.4 and later, and is available only when Device Information access right is obtained. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the residentUsersCount property.
    */
    public function setResidentUsersCount(?int $value ): void {
        $this->residentUsersCount = $value;
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

    /**
     * Sets the wiredIPv4Addresses property value. A list of wired IPv4 addresses. The update frequency (the maximum delay for the change of property value to be synchronized from the device to the cloud storage) of this property is daily. Note this property is currently supported only on devices running on Windows.
     *  @param array<string>|null $value Value to set for the wiredIPv4Addresses property.
    */
    public function setWiredIPv4Addresses(?array $value ): void {
        $this->wiredIPv4Addresses = $value;
    }

}
