<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Hardware information of a given device.
*/
class HardwareInformation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new hardwareInformation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the batteryChargeCycles property value. The number of charge cycles the device’s current battery has gone through. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getBatteryChargeCycles(): ?int {
        $val = $this->getBackingStore()->get('batteryChargeCycles');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batteryChargeCycles'");
    }

    /**
     * Gets the batteryHealthPercentage property value. The device’s current battery’s health percentage. Valid values 0 to 100
     * @return int|null
    */
    public function getBatteryHealthPercentage(): ?int {
        $val = $this->getBackingStore()->get('batteryHealthPercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batteryHealthPercentage'");
    }

    /**
     * Gets the batteryLevelPercentage property value. The battery level, between 0.0 and 100, or null if the battery level cannot be determined. The update frequency of this property is per-checkin. Note this property is currently supported only on devices running iOS 5.0 and later, and is available only when Device Information access right is obtained. Valid values 0 to 100
     * @return float|null
    */
    public function getBatteryLevelPercentage(): ?float {
        $val = $this->getBackingStore()->get('batteryLevelPercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batteryLevelPercentage'");
    }

    /**
     * Gets the batterySerialNumber property value. The serial number of the device’s current battery
     * @return string|null
    */
    public function getBatterySerialNumber(): ?string {
        $val = $this->getBackingStore()->get('batterySerialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batterySerialNumber'");
    }

    /**
     * Gets the cellularTechnology property value. Cellular technology of the device
     * @return string|null
    */
    public function getCellularTechnology(): ?string {
        $val = $this->getBackingStore()->get('cellularTechnology');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularTechnology'");
    }

    /**
     * Gets the deviceFullQualifiedDomainName property value. Returns the fully qualified domain name of the device (if any). If the device is not domain-joined, it returns an empty string.
     * @return string|null
    */
    public function getDeviceFullQualifiedDomainName(): ?string {
        $val = $this->getBackingStore()->get('deviceFullQualifiedDomainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceFullQualifiedDomainName'");
    }

    /**
     * Gets the deviceGuardLocalSystemAuthorityCredentialGuardState property value. The deviceGuardLocalSystemAuthorityCredentialGuardState property
     * @return DeviceGuardLocalSystemAuthorityCredentialGuardState|null
    */
    public function getDeviceGuardLocalSystemAuthorityCredentialGuardState(): ?DeviceGuardLocalSystemAuthorityCredentialGuardState {
        $val = $this->getBackingStore()->get('deviceGuardLocalSystemAuthorityCredentialGuardState');
        if (is_null($val) || $val instanceof DeviceGuardLocalSystemAuthorityCredentialGuardState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceGuardLocalSystemAuthorityCredentialGuardState'");
    }

    /**
     * Gets the deviceGuardVirtualizationBasedSecurityHardwareRequirementState property value. The deviceGuardVirtualizationBasedSecurityHardwareRequirementState property
     * @return DeviceGuardVirtualizationBasedSecurityHardwareRequirementState|null
    */
    public function getDeviceGuardVirtualizationBasedSecurityHardwareRequirementState(): ?DeviceGuardVirtualizationBasedSecurityHardwareRequirementState {
        $val = $this->getBackingStore()->get('deviceGuardVirtualizationBasedSecurityHardwareRequirementState');
        if (is_null($val) || $val instanceof DeviceGuardVirtualizationBasedSecurityHardwareRequirementState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceGuardVirtualizationBasedSecurityHardwareRequirementState'");
    }

    /**
     * Gets the deviceGuardVirtualizationBasedSecurityState property value. The deviceGuardVirtualizationBasedSecurityState property
     * @return DeviceGuardVirtualizationBasedSecurityState|null
    */
    public function getDeviceGuardVirtualizationBasedSecurityState(): ?DeviceGuardVirtualizationBasedSecurityState {
        $val = $this->getBackingStore()->get('deviceGuardVirtualizationBasedSecurityState');
        if (is_null($val) || $val instanceof DeviceGuardVirtualizationBasedSecurityState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceGuardVirtualizationBasedSecurityState'");
    }

    /**
     * Gets the deviceLicensingLastErrorCode property value. A standard error code indicating the last error, or 0 indicating no error (default). The update frequency of this property is daily. Note this property is currently supported only for Windows based Device based subscription licensing. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getDeviceLicensingLastErrorCode(): ?int {
        $val = $this->getBackingStore()->get('deviceLicensingLastErrorCode');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceLicensingLastErrorCode'");
    }

    /**
     * Gets the deviceLicensingLastErrorDescription property value. Error text message as a descripition for deviceLicensingLastErrorCode. The update frequency of this property is daily. Note this property is currently supported only for Windows based Device based subscription licensing.
     * @return string|null
    */
    public function getDeviceLicensingLastErrorDescription(): ?string {
        $val = $this->getBackingStore()->get('deviceLicensingLastErrorDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceLicensingLastErrorDescription'");
    }

    /**
     * Gets the deviceLicensingStatus property value. Indicates the device licensing status after Windows device based subscription has been enabled.
     * @return DeviceLicensingStatus|null
    */
    public function getDeviceLicensingStatus(): ?DeviceLicensingStatus {
        $val = $this->getBackingStore()->get('deviceLicensingStatus');
        if (is_null($val) || $val instanceof DeviceLicensingStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceLicensingStatus'");
    }

    /**
     * Gets the esimIdentifier property value. eSIM identifier
     * @return string|null
    */
    public function getEsimIdentifier(): ?string {
        $val = $this->getBackingStore()->get('esimIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'esimIdentifier'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'wiredIPv4Addresses' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWiredIPv4Addresses($val);
            },
        ];
    }

    /**
     * Gets the freeStorageSpace property value. Free storage space of the device.
     * @return int|null
    */
    public function getFreeStorageSpace(): ?int {
        $val = $this->getBackingStore()->get('freeStorageSpace');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'freeStorageSpace'");
    }

    /**
     * Gets the imei property value. IMEI
     * @return string|null
    */
    public function getImei(): ?string {
        $val = $this->getBackingStore()->get('imei');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imei'");
    }

    /**
     * Gets the ipAddressV4 property value. IPAddressV4
     * @return string|null
    */
    public function getIpAddressV4(): ?string {
        $val = $this->getBackingStore()->get('ipAddressV4');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddressV4'");
    }

    /**
     * Gets the isEncrypted property value. Encryption status of the device
     * @return bool|null
    */
    public function getIsEncrypted(): ?bool {
        $val = $this->getBackingStore()->get('isEncrypted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEncrypted'");
    }

    /**
     * Gets the isSharedDevice property value. Shared iPad
     * @return bool|null
    */
    public function getIsSharedDevice(): ?bool {
        $val = $this->getBackingStore()->get('isSharedDevice');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSharedDevice'");
    }

    /**
     * Gets the isSupervised property value. Supervised mode of the device
     * @return bool|null
    */
    public function getIsSupervised(): ?bool {
        $val = $this->getBackingStore()->get('isSupervised');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSupervised'");
    }

    /**
     * Gets the manufacturer property value. Manufacturer of the device
     * @return string|null
    */
    public function getManufacturer(): ?string {
        $val = $this->getBackingStore()->get('manufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manufacturer'");
    }

    /**
     * Gets the meid property value. MEID
     * @return string|null
    */
    public function getMeid(): ?string {
        $val = $this->getBackingStore()->get('meid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meid'");
    }

    /**
     * Gets the model property value. Model of the device
     * @return string|null
    */
    public function getModel(): ?string {
        $val = $this->getBackingStore()->get('model');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'model'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the operatingSystemEdition property value. String that specifies the OS edition.
     * @return string|null
    */
    public function getOperatingSystemEdition(): ?string {
        $val = $this->getBackingStore()->get('operatingSystemEdition');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystemEdition'");
    }

    /**
     * Gets the operatingSystemLanguage property value. Operating system language of the device
     * @return string|null
    */
    public function getOperatingSystemLanguage(): ?string {
        $val = $this->getBackingStore()->get('operatingSystemLanguage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystemLanguage'");
    }

    /**
     * Gets the operatingSystemProductType property value. Int that specifies the Windows Operating System ProductType. More details here https://go.microsoft.com/fwlink/?linkid=2126950. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getOperatingSystemProductType(): ?int {
        $val = $this->getBackingStore()->get('operatingSystemProductType');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystemProductType'");
    }

    /**
     * Gets the osBuildNumber property value. Operating System Build Number on Android device
     * @return string|null
    */
    public function getOsBuildNumber(): ?string {
        $val = $this->getBackingStore()->get('osBuildNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osBuildNumber'");
    }

    /**
     * Gets the phoneNumber property value. Phone number of the device
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        $val = $this->getBackingStore()->get('phoneNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phoneNumber'");
    }

    /**
     * Gets the productName property value. The product name, e.g. iPad8,12 etc. The update frequency of this property is weekly. Note this property is currently supported only on iOS/MacOS devices, and is available only when Device Information access right is obtained.
     * @return string|null
    */
    public function getProductName(): ?string {
        $val = $this->getBackingStore()->get('productName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productName'");
    }

    /**
     * Gets the residentUsersCount property value. The number of users currently on this device, or null (default) if the value of this property cannot be determined. The update frequency of this property is per-checkin. Note this property is currently supported only on devices running iOS 13.4 and later, and is available only when Device Information access right is obtained. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getResidentUsersCount(): ?int {
        $val = $this->getBackingStore()->get('residentUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'residentUsersCount'");
    }

    /**
     * Gets the serialNumber property value. Serial number.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('serialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serialNumber'");
    }

    /**
     * Gets the sharedDeviceCachedUsers property value. All users on the shared Apple device
     * @return array<SharedAppleDeviceUser>|null
    */
    public function getSharedDeviceCachedUsers(): ?array {
        $val = $this->getBackingStore()->get('sharedDeviceCachedUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharedAppleDeviceUser::class);
            /** @var array<SharedAppleDeviceUser>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedDeviceCachedUsers'");
    }

    /**
     * Gets the subnetAddress property value. SubnetAddress
     * @return string|null
    */
    public function getSubnetAddress(): ?string {
        $val = $this->getBackingStore()->get('subnetAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subnetAddress'");
    }

    /**
     * Gets the subscriberCarrier property value. Subscriber carrier of the device
     * @return string|null
    */
    public function getSubscriberCarrier(): ?string {
        $val = $this->getBackingStore()->get('subscriberCarrier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriberCarrier'");
    }

    /**
     * Gets the systemManagementBIOSVersion property value. BIOS version as reported by SMBIOS
     * @return string|null
    */
    public function getSystemManagementBIOSVersion(): ?string {
        $val = $this->getBackingStore()->get('systemManagementBIOSVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemManagementBIOSVersion'");
    }

    /**
     * Gets the totalStorageSpace property value. Total storage space of the device.
     * @return int|null
    */
    public function getTotalStorageSpace(): ?int {
        $val = $this->getBackingStore()->get('totalStorageSpace');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalStorageSpace'");
    }

    /**
     * Gets the tpmManufacturer property value. The identifying information that uniquely names the TPM manufacturer
     * @return string|null
    */
    public function getTpmManufacturer(): ?string {
        $val = $this->getBackingStore()->get('tpmManufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tpmManufacturer'");
    }

    /**
     * Gets the tpmSpecificationVersion property value. String that specifies the specification version.
     * @return string|null
    */
    public function getTpmSpecificationVersion(): ?string {
        $val = $this->getBackingStore()->get('tpmSpecificationVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tpmSpecificationVersion'");
    }

    /**
     * Gets the tpmVersion property value. The version of the TPM, as specified by the manufacturer
     * @return string|null
    */
    public function getTpmVersion(): ?string {
        $val = $this->getBackingStore()->get('tpmVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tpmVersion'");
    }

    /**
     * Gets the wifiMac property value. WiFi MAC address of the device
     * @return string|null
    */
    public function getWifiMac(): ?string {
        $val = $this->getBackingStore()->get('wifiMac');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiMac'");
    }

    /**
     * Gets the wiredIPv4Addresses property value. A list of wired IPv4 addresses. The update frequency (the maximum delay for the change of property value to be synchronized from the device to the cloud storage) of this property is daily. Note this property is currently supported only on devices running on Windows.
     * @return array<string>|null
    */
    public function getWiredIPv4Addresses(): ?array {
        $val = $this->getBackingStore()->get('wiredIPv4Addresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wiredIPv4Addresses'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('batteryChargeCycles', $this->getBatteryChargeCycles());
        $writer->writeIntegerValue('batteryHealthPercentage', $this->getBatteryHealthPercentage());
        $writer->writeFloatValue('batteryLevelPercentage', $this->getBatteryLevelPercentage());
        $writer->writeStringValue('batterySerialNumber', $this->getBatterySerialNumber());
        $writer->writeStringValue('cellularTechnology', $this->getCellularTechnology());
        $writer->writeStringValue('deviceFullQualifiedDomainName', $this->getDeviceFullQualifiedDomainName());
        $writer->writeEnumValue('deviceGuardLocalSystemAuthorityCredentialGuardState', $this->getDeviceGuardLocalSystemAuthorityCredentialGuardState());
        $writer->writeEnumValue('deviceGuardVirtualizationBasedSecurityHardwareRequirementState', $this->getDeviceGuardVirtualizationBasedSecurityHardwareRequirementState());
        $writer->writeEnumValue('deviceGuardVirtualizationBasedSecurityState', $this->getDeviceGuardVirtualizationBasedSecurityState());
        $writer->writeIntegerValue('deviceLicensingLastErrorCode', $this->getDeviceLicensingLastErrorCode());
        $writer->writeStringValue('deviceLicensingLastErrorDescription', $this->getDeviceLicensingLastErrorDescription());
        $writer->writeEnumValue('deviceLicensingStatus', $this->getDeviceLicensingStatus());
        $writer->writeStringValue('esimIdentifier', $this->getEsimIdentifier());
        $writer->writeIntegerValue('freeStorageSpace', $this->getFreeStorageSpace());
        $writer->writeStringValue('imei', $this->getImei());
        $writer->writeStringValue('ipAddressV4', $this->getIpAddressV4());
        $writer->writeBooleanValue('isEncrypted', $this->getIsEncrypted());
        $writer->writeBooleanValue('isSharedDevice', $this->getIsSharedDevice());
        $writer->writeBooleanValue('isSupervised', $this->getIsSupervised());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('meid', $this->getMeid());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operatingSystemEdition', $this->getOperatingSystemEdition());
        $writer->writeStringValue('operatingSystemLanguage', $this->getOperatingSystemLanguage());
        $writer->writeIntegerValue('operatingSystemProductType', $this->getOperatingSystemProductType());
        $writer->writeStringValue('osBuildNumber', $this->getOsBuildNumber());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('productName', $this->getProductName());
        $writer->writeIntegerValue('residentUsersCount', $this->getResidentUsersCount());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeCollectionOfObjectValues('sharedDeviceCachedUsers', $this->getSharedDeviceCachedUsers());
        $writer->writeStringValue('subnetAddress', $this->getSubnetAddress());
        $writer->writeStringValue('subscriberCarrier', $this->getSubscriberCarrier());
        $writer->writeStringValue('systemManagementBIOSVersion', $this->getSystemManagementBIOSVersion());
        $writer->writeIntegerValue('totalStorageSpace', $this->getTotalStorageSpace());
        $writer->writeStringValue('tpmManufacturer', $this->getTpmManufacturer());
        $writer->writeStringValue('tpmSpecificationVersion', $this->getTpmSpecificationVersion());
        $writer->writeStringValue('tpmVersion', $this->getTpmVersion());
        $writer->writeStringValue('wifiMac', $this->getWifiMac());
        $writer->writeCollectionOfPrimitiveValues('wiredIPv4Addresses', $this->getWiredIPv4Addresses());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the batteryChargeCycles property value. The number of charge cycles the device’s current battery has gone through. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the batteryChargeCycles property.
    */
    public function setBatteryChargeCycles(?int $value): void {
        $this->getBackingStore()->set('batteryChargeCycles', $value);
    }

    /**
     * Sets the batteryHealthPercentage property value. The device’s current battery’s health percentage. Valid values 0 to 100
     * @param int|null $value Value to set for the batteryHealthPercentage property.
    */
    public function setBatteryHealthPercentage(?int $value): void {
        $this->getBackingStore()->set('batteryHealthPercentage', $value);
    }

    /**
     * Sets the batteryLevelPercentage property value. The battery level, between 0.0 and 100, or null if the battery level cannot be determined. The update frequency of this property is per-checkin. Note this property is currently supported only on devices running iOS 5.0 and later, and is available only when Device Information access right is obtained. Valid values 0 to 100
     * @param float|null $value Value to set for the batteryLevelPercentage property.
    */
    public function setBatteryLevelPercentage(?float $value): void {
        $this->getBackingStore()->set('batteryLevelPercentage', $value);
    }

    /**
     * Sets the batterySerialNumber property value. The serial number of the device’s current battery
     * @param string|null $value Value to set for the batterySerialNumber property.
    */
    public function setBatterySerialNumber(?string $value): void {
        $this->getBackingStore()->set('batterySerialNumber', $value);
    }

    /**
     * Sets the cellularTechnology property value. Cellular technology of the device
     * @param string|null $value Value to set for the cellularTechnology property.
    */
    public function setCellularTechnology(?string $value): void {
        $this->getBackingStore()->set('cellularTechnology', $value);
    }

    /**
     * Sets the deviceFullQualifiedDomainName property value. Returns the fully qualified domain name of the device (if any). If the device is not domain-joined, it returns an empty string.
     * @param string|null $value Value to set for the deviceFullQualifiedDomainName property.
    */
    public function setDeviceFullQualifiedDomainName(?string $value): void {
        $this->getBackingStore()->set('deviceFullQualifiedDomainName', $value);
    }

    /**
     * Sets the deviceGuardLocalSystemAuthorityCredentialGuardState property value. The deviceGuardLocalSystemAuthorityCredentialGuardState property
     * @param DeviceGuardLocalSystemAuthorityCredentialGuardState|null $value Value to set for the deviceGuardLocalSystemAuthorityCredentialGuardState property.
    */
    public function setDeviceGuardLocalSystemAuthorityCredentialGuardState(?DeviceGuardLocalSystemAuthorityCredentialGuardState $value): void {
        $this->getBackingStore()->set('deviceGuardLocalSystemAuthorityCredentialGuardState', $value);
    }

    /**
     * Sets the deviceGuardVirtualizationBasedSecurityHardwareRequirementState property value. The deviceGuardVirtualizationBasedSecurityHardwareRequirementState property
     * @param DeviceGuardVirtualizationBasedSecurityHardwareRequirementState|null $value Value to set for the deviceGuardVirtualizationBasedSecurityHardwareRequirementState property.
    */
    public function setDeviceGuardVirtualizationBasedSecurityHardwareRequirementState(?DeviceGuardVirtualizationBasedSecurityHardwareRequirementState $value): void {
        $this->getBackingStore()->set('deviceGuardVirtualizationBasedSecurityHardwareRequirementState', $value);
    }

    /**
     * Sets the deviceGuardVirtualizationBasedSecurityState property value. The deviceGuardVirtualizationBasedSecurityState property
     * @param DeviceGuardVirtualizationBasedSecurityState|null $value Value to set for the deviceGuardVirtualizationBasedSecurityState property.
    */
    public function setDeviceGuardVirtualizationBasedSecurityState(?DeviceGuardVirtualizationBasedSecurityState $value): void {
        $this->getBackingStore()->set('deviceGuardVirtualizationBasedSecurityState', $value);
    }

    /**
     * Sets the deviceLicensingLastErrorCode property value. A standard error code indicating the last error, or 0 indicating no error (default). The update frequency of this property is daily. Note this property is currently supported only for Windows based Device based subscription licensing. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the deviceLicensingLastErrorCode property.
    */
    public function setDeviceLicensingLastErrorCode(?int $value): void {
        $this->getBackingStore()->set('deviceLicensingLastErrorCode', $value);
    }

    /**
     * Sets the deviceLicensingLastErrorDescription property value. Error text message as a descripition for deviceLicensingLastErrorCode. The update frequency of this property is daily. Note this property is currently supported only for Windows based Device based subscription licensing.
     * @param string|null $value Value to set for the deviceLicensingLastErrorDescription property.
    */
    public function setDeviceLicensingLastErrorDescription(?string $value): void {
        $this->getBackingStore()->set('deviceLicensingLastErrorDescription', $value);
    }

    /**
     * Sets the deviceLicensingStatus property value. Indicates the device licensing status after Windows device based subscription has been enabled.
     * @param DeviceLicensingStatus|null $value Value to set for the deviceLicensingStatus property.
    */
    public function setDeviceLicensingStatus(?DeviceLicensingStatus $value): void {
        $this->getBackingStore()->set('deviceLicensingStatus', $value);
    }

    /**
     * Sets the esimIdentifier property value. eSIM identifier
     * @param string|null $value Value to set for the esimIdentifier property.
    */
    public function setEsimIdentifier(?string $value): void {
        $this->getBackingStore()->set('esimIdentifier', $value);
    }

    /**
     * Sets the freeStorageSpace property value. Free storage space of the device.
     * @param int|null $value Value to set for the freeStorageSpace property.
    */
    public function setFreeStorageSpace(?int $value): void {
        $this->getBackingStore()->set('freeStorageSpace', $value);
    }

    /**
     * Sets the imei property value. IMEI
     * @param string|null $value Value to set for the imei property.
    */
    public function setImei(?string $value): void {
        $this->getBackingStore()->set('imei', $value);
    }

    /**
     * Sets the ipAddressV4 property value. IPAddressV4
     * @param string|null $value Value to set for the ipAddressV4 property.
    */
    public function setIpAddressV4(?string $value): void {
        $this->getBackingStore()->set('ipAddressV4', $value);
    }

    /**
     * Sets the isEncrypted property value. Encryption status of the device
     * @param bool|null $value Value to set for the isEncrypted property.
    */
    public function setIsEncrypted(?bool $value): void {
        $this->getBackingStore()->set('isEncrypted', $value);
    }

    /**
     * Sets the isSharedDevice property value. Shared iPad
     * @param bool|null $value Value to set for the isSharedDevice property.
    */
    public function setIsSharedDevice(?bool $value): void {
        $this->getBackingStore()->set('isSharedDevice', $value);
    }

    /**
     * Sets the isSupervised property value. Supervised mode of the device
     * @param bool|null $value Value to set for the isSupervised property.
    */
    public function setIsSupervised(?bool $value): void {
        $this->getBackingStore()->set('isSupervised', $value);
    }

    /**
     * Sets the manufacturer property value. Manufacturer of the device
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the meid property value. MEID
     * @param string|null $value Value to set for the meid property.
    */
    public function setMeid(?string $value): void {
        $this->getBackingStore()->set('meid', $value);
    }

    /**
     * Sets the model property value. Model of the device
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operatingSystemEdition property value. String that specifies the OS edition.
     * @param string|null $value Value to set for the operatingSystemEdition property.
    */
    public function setOperatingSystemEdition(?string $value): void {
        $this->getBackingStore()->set('operatingSystemEdition', $value);
    }

    /**
     * Sets the operatingSystemLanguage property value. Operating system language of the device
     * @param string|null $value Value to set for the operatingSystemLanguage property.
    */
    public function setOperatingSystemLanguage(?string $value): void {
        $this->getBackingStore()->set('operatingSystemLanguage', $value);
    }

    /**
     * Sets the operatingSystemProductType property value. Int that specifies the Windows Operating System ProductType. More details here https://go.microsoft.com/fwlink/?linkid=2126950. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the operatingSystemProductType property.
    */
    public function setOperatingSystemProductType(?int $value): void {
        $this->getBackingStore()->set('operatingSystemProductType', $value);
    }

    /**
     * Sets the osBuildNumber property value. Operating System Build Number on Android device
     * @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value): void {
        $this->getBackingStore()->set('osBuildNumber', $value);
    }

    /**
     * Sets the phoneNumber property value. Phone number of the device
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('phoneNumber', $value);
    }

    /**
     * Sets the productName property value. The product name, e.g. iPad8,12 etc. The update frequency of this property is weekly. Note this property is currently supported only on iOS/MacOS devices, and is available only when Device Information access right is obtained.
     * @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value): void {
        $this->getBackingStore()->set('productName', $value);
    }

    /**
     * Sets the residentUsersCount property value. The number of users currently on this device, or null (default) if the value of this property cannot be determined. The update frequency of this property is per-checkin. Note this property is currently supported only on devices running iOS 13.4 and later, and is available only when Device Information access right is obtained. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the residentUsersCount property.
    */
    public function setResidentUsersCount(?int $value): void {
        $this->getBackingStore()->set('residentUsersCount', $value);
    }

    /**
     * Sets the serialNumber property value. Serial number.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the sharedDeviceCachedUsers property value. All users on the shared Apple device
     * @param array<SharedAppleDeviceUser>|null $value Value to set for the sharedDeviceCachedUsers property.
    */
    public function setSharedDeviceCachedUsers(?array $value): void {
        $this->getBackingStore()->set('sharedDeviceCachedUsers', $value);
    }

    /**
     * Sets the subnetAddress property value. SubnetAddress
     * @param string|null $value Value to set for the subnetAddress property.
    */
    public function setSubnetAddress(?string $value): void {
        $this->getBackingStore()->set('subnetAddress', $value);
    }

    /**
     * Sets the subscriberCarrier property value. Subscriber carrier of the device
     * @param string|null $value Value to set for the subscriberCarrier property.
    */
    public function setSubscriberCarrier(?string $value): void {
        $this->getBackingStore()->set('subscriberCarrier', $value);
    }

    /**
     * Sets the systemManagementBIOSVersion property value. BIOS version as reported by SMBIOS
     * @param string|null $value Value to set for the systemManagementBIOSVersion property.
    */
    public function setSystemManagementBIOSVersion(?string $value): void {
        $this->getBackingStore()->set('systemManagementBIOSVersion', $value);
    }

    /**
     * Sets the totalStorageSpace property value. Total storage space of the device.
     * @param int|null $value Value to set for the totalStorageSpace property.
    */
    public function setTotalStorageSpace(?int $value): void {
        $this->getBackingStore()->set('totalStorageSpace', $value);
    }

    /**
     * Sets the tpmManufacturer property value. The identifying information that uniquely names the TPM manufacturer
     * @param string|null $value Value to set for the tpmManufacturer property.
    */
    public function setTpmManufacturer(?string $value): void {
        $this->getBackingStore()->set('tpmManufacturer', $value);
    }

    /**
     * Sets the tpmSpecificationVersion property value. String that specifies the specification version.
     * @param string|null $value Value to set for the tpmSpecificationVersion property.
    */
    public function setTpmSpecificationVersion(?string $value): void {
        $this->getBackingStore()->set('tpmSpecificationVersion', $value);
    }

    /**
     * Sets the tpmVersion property value. The version of the TPM, as specified by the manufacturer
     * @param string|null $value Value to set for the tpmVersion property.
    */
    public function setTpmVersion(?string $value): void {
        $this->getBackingStore()->set('tpmVersion', $value);
    }

    /**
     * Sets the wifiMac property value. WiFi MAC address of the device
     * @param string|null $value Value to set for the wifiMac property.
    */
    public function setWifiMac(?string $value): void {
        $this->getBackingStore()->set('wifiMac', $value);
    }

    /**
     * Sets the wiredIPv4Addresses property value. A list of wired IPv4 addresses. The update frequency (the maximum delay for the change of property value to be synchronized from the device to the cloud storage) of this property is daily. Note this property is currently supported only on devices running on Windows.
     * @param array<string>|null $value Value to set for the wiredIPv4Addresses property.
    */
    public function setWiredIPv4Addresses(?array $value): void {
        $this->getBackingStore()->set('wiredIPv4Addresses', $value);
    }

}
