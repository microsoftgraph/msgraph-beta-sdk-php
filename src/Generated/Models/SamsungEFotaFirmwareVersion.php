<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * The firmware version from Samsung for a specific device model, sales code, and CSC (Consumer Software Customization). Used to create Samsung E-FOTA deployments.
*/
class SamsungEFotaFirmwareVersion implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SamsungEFotaFirmwareVersion and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SamsungEFotaFirmwareVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SamsungEFotaFirmwareVersion {
        return new SamsungEFotaFirmwareVersion();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the androidProcessorVersionName property value. The Android Processor version name. This property is populated by Samsung. Eg. 'G960U1UES9FVD1'. Default value: null. Read-only.
     * @return string|null
    */
    public function getAndroidProcessorVersionName(): ?string {
        $val = $this->getBackingStore()->get('androidProcessorVersionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidProcessorVersionName'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the consumerSoftwareCustomizationCode property value. The Consumer Software Customization which is a specific code associated with the region or carrier customization of a Samsung device. This property is populated by Samsung. Eg. 'OYM'. Read-only. Returned by default.
     * @return string|null
    */
    public function getConsumerSoftwareCustomizationCode(): ?string {
        $val = $this->getBackingStore()->get('consumerSoftwareCustomizationCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'consumerSoftwareCustomizationCode'");
    }

    /**
     * Gets the description property value. The firmware description. This property is populated by Samsung. Default value: null. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the deviceModelName property value. Samsung device model. This property is populated by Samsung. Eg. 'SM-960F'. Read-only. Returned by default.
     * @return string|null
    */
    public function getDeviceModelName(): ?string {
        $val = $this->getBackingStore()->get('deviceModelName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceModelName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'androidProcessorVersionName' => fn(ParseNode $n) => $o->setAndroidProcessorVersionName($n->getStringValue()),
            'consumerSoftwareCustomizationCode' => fn(ParseNode $n) => $o->setConsumerSoftwareCustomizationCode($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceModelName' => fn(ParseNode $n) => $o->setDeviceModelName($n->getStringValue()),
            'firmwareVersion' => fn(ParseNode $n) => $o->setFirmwareVersion($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'osVersionName' => fn(ParseNode $n) => $o->setOsVersionName($n->getStringValue()),
            'releaseDateTime' => fn(ParseNode $n) => $o->setReleaseDateTime($n->getDateTimeValue()),
            'requestFirmwareTypeName' => fn(ParseNode $n) => $o->setRequestFirmwareTypeName($n->getStringValue()),
            'salesCode' => fn(ParseNode $n) => $o->setSalesCode($n->getStringValue()),
            'securityPatchVersion' => fn(ParseNode $n) => $o->setSecurityPatchVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the firmwareVersion property value. The firmware version. This property is populated by Samsung Eg. 'T575XXU4EAAA/T575OXM4EAAA/T575XXU4EAAA'. Default value: null. Read-only.
     * @return string|null
    */
    public function getFirmwareVersion(): ?string {
        $val = $this->getBackingStore()->get('firmwareVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firmwareVersion'");
    }

    /**
     * Gets the id property value. Firmware ID from Samsung. This property is populated by Samsung. Eg. 'FW2022033111797487'. Read-only. Returned by default.
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
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
     * Gets the osVersionName property value. The OS version name. This property is populated by Samsung. Eg. 'Pie(Android 9)'. Default value: null. Read-only.
     * @return string|null
    */
    public function getOsVersionName(): ?string {
        $val = $this->getBackingStore()->get('osVersionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersionName'");
    }

    /**
     * Gets the releaseDateTime property value. Firmware release date. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. This property is populated by Samsung. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Default value: null. Read-only.
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('releaseDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'releaseDateTime'");
    }

    /**
     * Gets the requestFirmwareTypeName property value. The firmware request type. This property is populated by Samsung Eg. 'NORMAL'. Default value: null. Read-only.
     * @return string|null
    */
    public function getRequestFirmwareTypeName(): ?string {
        $val = $this->getBackingStore()->get('requestFirmwareTypeName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestFirmwareTypeName'");
    }

    /**
     * Gets the salesCode property value. Sales code of a Samsung device that corresponds to its georgraphic area or carrier network. This property is populated by Samsung. Eg. 'TMB'. Read-only. Returned by default.
     * @return string|null
    */
    public function getSalesCode(): ?string {
        $val = $this->getBackingStore()->get('salesCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salesCode'");
    }

    /**
     * Gets the securityPatchVersion property value. The firmware security patch. This property is populated by Samsung Eg. '2023-09-07 07:50:57'. Default value: null. Read-only.
     * @return string|null
    */
    public function getSecurityPatchVersion(): ?string {
        $val = $this->getBackingStore()->get('securityPatchVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityPatchVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('androidProcessorVersionName', $this->getAndroidProcessorVersionName());
        $writer->writeStringValue('consumerSoftwareCustomizationCode', $this->getConsumerSoftwareCustomizationCode());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('deviceModelName', $this->getDeviceModelName());
        $writer->writeStringValue('firmwareVersion', $this->getFirmwareVersion());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('osVersionName', $this->getOsVersionName());
        $writer->writeDateTimeValue('releaseDateTime', $this->getReleaseDateTime());
        $writer->writeStringValue('requestFirmwareTypeName', $this->getRequestFirmwareTypeName());
        $writer->writeStringValue('salesCode', $this->getSalesCode());
        $writer->writeStringValue('securityPatchVersion', $this->getSecurityPatchVersion());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the androidProcessorVersionName property value. The Android Processor version name. This property is populated by Samsung. Eg. 'G960U1UES9FVD1'. Default value: null. Read-only.
     * @param string|null $value Value to set for the androidProcessorVersionName property.
    */
    public function setAndroidProcessorVersionName(?string $value): void {
        $this->getBackingStore()->set('androidProcessorVersionName', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the consumerSoftwareCustomizationCode property value. The Consumer Software Customization which is a specific code associated with the region or carrier customization of a Samsung device. This property is populated by Samsung. Eg. 'OYM'. Read-only. Returned by default.
     * @param string|null $value Value to set for the consumerSoftwareCustomizationCode property.
    */
    public function setConsumerSoftwareCustomizationCode(?string $value): void {
        $this->getBackingStore()->set('consumerSoftwareCustomizationCode', $value);
    }

    /**
     * Sets the description property value. The firmware description. This property is populated by Samsung. Default value: null. Read-only.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceModelName property value. Samsung device model. This property is populated by Samsung. Eg. 'SM-960F'. Read-only. Returned by default.
     * @param string|null $value Value to set for the deviceModelName property.
    */
    public function setDeviceModelName(?string $value): void {
        $this->getBackingStore()->set('deviceModelName', $value);
    }

    /**
     * Sets the firmwareVersion property value. The firmware version. This property is populated by Samsung Eg. 'T575XXU4EAAA/T575OXM4EAAA/T575XXU4EAAA'. Default value: null. Read-only.
     * @param string|null $value Value to set for the firmwareVersion property.
    */
    public function setFirmwareVersion(?string $value): void {
        $this->getBackingStore()->set('firmwareVersion', $value);
    }

    /**
     * Sets the id property value. Firmware ID from Samsung. This property is populated by Samsung. Eg. 'FW2022033111797487'. Read-only. Returned by default.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the osVersionName property value. The OS version name. This property is populated by Samsung. Eg. 'Pie(Android 9)'. Default value: null. Read-only.
     * @param string|null $value Value to set for the osVersionName property.
    */
    public function setOsVersionName(?string $value): void {
        $this->getBackingStore()->set('osVersionName', $value);
    }

    /**
     * Sets the releaseDateTime property value. Firmware release date. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. This property is populated by Samsung. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Default value: null. Read-only.
     * @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('releaseDateTime', $value);
    }

    /**
     * Sets the requestFirmwareTypeName property value. The firmware request type. This property is populated by Samsung Eg. 'NORMAL'. Default value: null. Read-only.
     * @param string|null $value Value to set for the requestFirmwareTypeName property.
    */
    public function setRequestFirmwareTypeName(?string $value): void {
        $this->getBackingStore()->set('requestFirmwareTypeName', $value);
    }

    /**
     * Sets the salesCode property value. Sales code of a Samsung device that corresponds to its georgraphic area or carrier network. This property is populated by Samsung. Eg. 'TMB'. Read-only. Returned by default.
     * @param string|null $value Value to set for the salesCode property.
    */
    public function setSalesCode(?string $value): void {
        $this->getBackingStore()->set('salesCode', $value);
    }

    /**
     * Sets the securityPatchVersion property value. The firmware security patch. This property is populated by Samsung Eg. '2023-09-07 07:50:57'. Default value: null. Read-only.
     * @param string|null $value Value to set for the securityPatchVersion property.
    */
    public function setSecurityPatchVersion(?string $value): void {
        $this->getBackingStore()->set('securityPatchVersion', $value);
    }

}
